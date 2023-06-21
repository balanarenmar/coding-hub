<?php
require_once 'db.php';

$id = $_SESSION['id'];
$username = $_SESSION['username'];
$score = $totalCorrect;
$state;
$badge = 0;
// Create connection
		$conn = new mysqli($servername, $user, $pass, $database);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		else{

			switch ($table) {
				case "quiz_1":
					$INSERT = "INSERT Into quiz_1 (id, user, score) values(?, ?, ?)";
					if($score == 20){
						$badge = 1;
						$row = "perfect_q1";
					}
					break;

				case "quiz_2":
					$INSERT = "INSERT Into quiz_2 (id, user, score) values(?, ?, ?)";
					if($score == 20){
						$badge = 1;
						$row = "perfect_q2";
					}
					break;

				case "quiz_3":
					$INSERT = "INSERT Into quiz_3 (id, user, score) values(?, ?, ?)";
					if($score == 20){
						$badge = 1;
						$row = "perfect_q3";
					}
					break;

				case "quiz_4":
					$INSERT = "INSERT Into quiz_4 (id, user, score) values(?, ?, ?)";
					if($score == 20){
						$badge = 1;
						$row = "perfect_q4";
					}
					break;

				case "quiz_5":
					$INSERT = "INSERT Into quiz_5 (id, user, score) values(?, ?, ?)";
					if($score == 20){
						$badge = 1;
						$row = "perfect_q5";
					}
					break;

				case "quiz_6":
					$INSERT = "INSERT Into quiz_6 (id, user, score) values(?, ?, ?)";
					if($score == 15){
						$badge = 1;
						$row = "perfect_q6";
					}
					break;

				case "quiz_7":
					$INSERT = "INSERT Into quiz_7 (id, user, score) values(?, ?, ?)";
					if($score == 15){
						$badge = 1;
						$row = "perfect_q7";
					}
					break;

				default:
					header('Location: leaderboards.php');
					break;
			}

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("isi", $id, $username, $score);
			if ($stmt->execute() === TRUE) {
			  $state = 1;					//insert was success. 

			  if($badge==1){				//if score is perfect, save badge
				$conne = mysqli_connect($servername, $user, $pass, $database);
					  $sql = "UPDATE badges SET  {$row}=1  WHERE id = '" . $_SESSION['id'] . "'";
						if (mysqli_query($conne, $sql)) {
						   
						}
				mysqli_close($conne);
			  }
			  

			} else {
			  $state = 0;						//insert failed. that means user id already exists in DB. not first quiz
			}
			$stmt->close();
			mysqli_close($conn);


		}
?>