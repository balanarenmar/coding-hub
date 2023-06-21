<?php
	session_start();

	$number = $_POST['number'];
	$contact = $_POST['contact'];

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
				$sql = "UPDATE sign_up SET  fb_contact='" . $contact . "', number='" . $number . "'  WHERE id = '" . $_SESSION['id'] . "'";
				if (mysqli_query($conn, $sql)) {

        			$_SESSION['contact'] = $contact;
        			$_SESSION['number'] = $number;

				    echo "Success";
				} else {
					echo "Error";
				}
				mysqli_close($conn);
				header('Location: ../../user-profile.php');
				exit();
				
	}