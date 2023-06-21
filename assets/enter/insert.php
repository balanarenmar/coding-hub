<?php
	$username = $_POST['username'];
	$email	  = $_POST['email'];
	$password = $_POST['password'];
	
	if(!empty($username) || !empty($email) || !empty($password)){
		require_once 'db.php';
		//create connection
		$conn = new mysqli($servername, $user, $pass, $database);

		if($conn->connect_error){
			die('Connection Failed :' .$conn->connect_error);
		}else{
			$SELECT = "SELECT email From sign_up Where email = ? Limit 1";
			$INSERT = "INSERT Into sign_up (username, email, password) values(?, ?, ?)";

			//prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if($rnum==0){					//Do this if email doesnt exist yet in the database
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sss", $username, $email, md5($password));
				$stmt->execute();



				//get the generated user id:
				$sql = "SELECT * FROM sign_up WHERE email = '" . $email . "'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					$id = $row["id"];
				mysqli_free_result($result);

				//create new badge row
				$conne = new mysqli($servername, $user, $pass, $database);
				if ($conne->connect_error) {// Check connection
				  die("Connection failed: " . $conne->connect_error);
				}
				else{
					$true = 1;
					$INSERT = "INSERT Into badges (id, registered_user) values(?, ?)";
					$stmt = $conn->prepare($INSERT);
					$stmt->bind_param("ii", $id, $true);
					if ($stmt->execute() === TRUE) {
					 	echo "account badge successfully generated";
					} else {
						echo "account badges ungenerated. critical ERRORs may occur";
					}
					$conne->close();

				}

				header('Location: insert_success.php');
				die;
			} else {
				header('Location: insert_error.php');
				die;
			}


			$stmt->close();
			$conn->close();
		}
	}
		
?>