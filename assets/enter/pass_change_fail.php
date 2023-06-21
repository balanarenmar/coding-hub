<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		//proceed
	}else {
		header('Location: ../../auth-signin.php');
    		exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>{C}-Coding Hub</title>

	<!-- font css -->
	<link rel="stylesheet" href="../../assets/fonts/feather.css">
	<link rel="stylesheet" href="../../assets/fonts/fontawesome.css">
	<link rel="stylesheet" href="../../assets/fonts/material.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="../../assets/css/style.css" id="main-style-link">

	<!-- Favicon icon -->
	<link rel="icon" href="../../assets/images/c_logo.png" type="image/x-icon">
</head>
</head>	
<body>
	<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="../../assets/images/ch_logo.png" alt="" class="img-fluid mb-4">
						<a href="../../auth-signin.php" class="f-w-400">
							<button type="button" class="btn btn-outline-danger"><i class="mr-2" data-feather="alert-triangle"></i>ERROR! Something went wrong</button>

						</a>
							<p></p>
							<?php
							echo "<p><br>Apologies, <strong>" . $_SESSION['username'] . "</strong></p>";
							header("refresh:2; url=../../content/user-profile.php"); 
							?>
							<a href="../../content/user-profile.php" class="f-w-400"><p>Your new password was not saved</p></a>
							
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>


<!-- Required Js -->
     <script src="../../assets/js/vendor-all.min.js"></script>
     <script src="../../assets/js/plugins/bootstrap.min.js"></script>
     <script src="../../assets/js/plugins/feather.min.js"></script>
     <script src="../../assets/js/pcoded.min.js"></script>

</body>
</html>