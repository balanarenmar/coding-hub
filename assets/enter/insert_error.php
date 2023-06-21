<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	header('Location: ../../content/1-welcome.php');
    exit();
	}else {
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
						<a href="../../auth-signup.php" class="f-w-400">
							<button type="button" class="btn btn-outline-danger"><i class="mr-2" data-feather="alert-triangle"></i>Someone already registered using this email.</button>
						</a>
							<p></p>
							<p>Please use a different email, or</p>
							<p class="mb-0 text-muted"><a href="../../auth-signin.php" class="f-w-400">Log in.</a></p>
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