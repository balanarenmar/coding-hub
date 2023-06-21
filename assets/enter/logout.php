<?php
	session_start();
		
	require_once 'db.php';
	$con = new mysqli($servername, $user, $pass, $database);
	if($con->connect_error){
		die("Failed to connect: ".$con->connect_error);
	}else {
		$stmt = $con->prepare("SELECT * FROM sign_up WHERE email = ?");
		$stmt->bind_param("s", $_SESSION['email']);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0) {
			$data = $stmt_result->fetch_assoc();
				$stmt->close();
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					$conn = mysqli_connect($servername, $user, $pass, $database);
						if (!$conn) {
						  die("Connection failed: " . mysqli_connect_error());
						 }
						$status=0;
						$sql = "UPDATE sign_up SET online='" . $status . "'  WHERE email = '" . $_SESSION['email'] . "'";
						if ($conn->query($sql) === TRUE) {
							  echo "Record updated successfully";
							} else {
							  echo "Error updating record: " . $conn->error;
							}
				}

			
		    unset($_SESSION['loggedin']);
		    $_SESSION = array();
			// To kill the session, also delete the session cookie.
			// Note: This will destroy the session, and not just the session data!
			if (ini_get("session.use_cookies")) {
			    $params = session_get_cookie_params();
			    setcookie(session_name(), '', time() - 42000,
			        $params["path"], $params["domain"],
			        $params["secure"], $params["httponly"]
			    );
			}
			  
			// Finally, destroy the session.
			session_destroy();
			header('Location: ../../auth-signin.php');
		}
		else {
		    header('Location: ../../index.html');
		}
	}