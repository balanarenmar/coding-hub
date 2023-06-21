<?php
require_once 'db.php';

$state;
// Create connection
		$conn = new mysqli($servername, $user, $pass, $database);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		else{
			$INSERT = "INSERT Into quiz_1 (id, user, score) values(?, ?, ?)";
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("isi", $id, $username, $score);
			if ($stmt->execute() === TRUE) {
			  $state = 1;						//insert was success. 
			} else {
			  $state = 0;						//insert failed. that means user id already exists in DB. not first quiz
			}
			$stmt->close();
			mysqli_close($conn);
		}
?>