<?php
	//Database connection
	require_once 'db.php';

	$con = new mysqli($servername, $user, $pass, $database);
	if($con->connect_error){
		die("Failed to connect: ".$con->connect_error);
	}else {

					$sql = "SELECT * FROM badges WHERE id = '" . $_SESSION['id'] . "'";
					$result = mysqli_query($con, $sql);

					// Associative array
					$row = mysqli_fetch_assoc($result);

					$registered = $row["registered_user"];
					$badge1 = $row["perfect_q1"];
					$badge2 = $row["perfect_q2"];
					$badge3 = $row["perfect_q3"];
					$badge4 = $row["perfect_q4"];
					$badge5 = $row["perfect_q5"];
					$badge6 = $row["perfect_q6"];
					$badge7 = $row["perfect_q7"];

					// Free result set
					mysqli_free_result($result);
					mysqli_close($con);


				
	}
