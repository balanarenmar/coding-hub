<?php
	session_start();

	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];
	$address = $_POST['address'];

	//Database connection
	require_once 'db.php';
	$con = new mysqli($servername, $user, $pass, $database);
	if($con->connect_error){
		die("Failed to connect: ".$con->connect_error);
	}else {

				$conn = mysqli_connect($servername, $user, $pass, $database);
					if (!$conn) {
					  die("Connection failed: " . mysqli_connect_error());
					}
				$sql = "UPDATE sign_up SET address='" . $address . "', birthdate='" . $birthdate . "', gender='" . $gender . "'  WHERE id = '" . $_SESSION['id'] . "'";
				if (mysqli_query($conn, $sql)) {

        			$_SESSION['gender'] = $gender;
        			$_SESSION['address'] = $address;
        			$_SESSION['birthdate'] = $birthdate;

				    echo "Success";
				} else {
					echo "Error";
					
				}
				mysqli_close($conn);
				header('Location: ../../user-profile.php');
				exit();
				
	}