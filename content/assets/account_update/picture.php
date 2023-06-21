<?php
	session_start();

	$profile_pic = $_POST['profile_pic'];

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

				$sql = "UPDATE sign_up SET profile_pic='" . $profile_pic . "' WHERE id = '" . $_SESSION['id'] . "'";
				if (mysqli_query($conn, $sql)) {

					$_SESSION['profile_pic'] = "assets/images/user/avatar-" .$profile_pic. ".jpg";
        			echo "Record updated successfully";
					
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
				mysqli_close($conn);
				header('Location: ../../user-profile.php');
				exit();
				
	}