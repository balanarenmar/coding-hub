<?php
	session_start();

	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass1'];

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
				$newpass = md5($newpass);
				$sql = "UPDATE sign_up SET password='" . $newpass . "'  WHERE id = '" . $_SESSION['id'] . "'";
				if (mysqli_query($conn, $sql)) {
					
        			$_SESSION['pass'] = $newpass;
        			echo "Record updated successfully";
        			header('Location: ../../../assets/enter/pass_change.php');
        			die;
					
				} else {
					echo "Error updating record: " . mysqli_error($conn);
					header('Location: ../../../assets/enter/pass_change_fail.php');
					die;
				}
				mysqli_close($conn);
				header('Location: ../../user-profile.php');
				exit();
				
	}