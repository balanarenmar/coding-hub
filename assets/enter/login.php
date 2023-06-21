<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	require_once 'db.php';
	//Database connection
	$con = new mysqli($servername, $user, $pass, $database);
	if($con->connect_error){
		die("Failed to connect: ".$con->connect_error);
	}else {
		$stmt = $con->prepare("SELECT * FROM sign_up WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0) {
			$data = $stmt_result->fetch_assoc();
			if($data['password'] ===  md5($password)){
				
				$stmt->close();
				$conn = mysqli_connect($servername, $user, $pass, $database);
					if (!$conn) {
					  die("Connection failed: " . mysqli_connect_error());
					}
				$status = 1;
				$sql = "UPDATE sign_up SET online='" . $status . "'  WHERE email = '" . $_POST['email'] . "'";

				if (mysqli_query($conn, $sql)) {
					session_start();
					$_SESSION['loggedin'] = true;
        			$_SESSION['username'] =$data['username'];
        			$_SESSION['email'] =$data['email'];
        			$_SESSION['pass'] =$data['password'];
        			$_SESSION['profile_pic'] = "assets/images/user/avatar-" .$data['profile_pic']. ".jpg";
        			$_SESSION['address'] =$data['address'];
        			$_SESSION['number'] =$data['number'];
        			$_SESSION['id'] =$data['id'];
        			$_SESSION['gender'] = $data['gender'];
        			$_SESSION['birthdate'] = $data['birthdate'];
        			$_SESSION['contact'] = $data['fb_contact'];
				    header('Location: login_success.php');

				    
				} else {
				  echo "Error updating record: " . mysqli_error($conn);
				}
				mysqli_close($conn);
				exit();
			}else{
				header('Location: login_error_pass.php');
			}
		}else {
			header('Location: login_error_email.php');
		}
	}

?>
