<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	header('Location: content/1-welcome.php');
}
else {
		//proceed as normal
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

	<title>{C}-Coding Hub Sign-up Page</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
	<meta name="author" content="DashboardKit ">


	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/c_logo.png" type="image/x-icon">

	<!-- font css -->
	<link rel="stylesheet" href="assets/fonts/feather.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome.css">
	<link rel="stylesheet" href="assets/fonts/material.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css" id="main-style-link">


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body" >
						<form action="assets/enter/insert.php" method="POST">
						<a href="index.html"><img src="assets/images/ch_logo.png" alt="" class="img-fluid mb-4"></a>
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<div class="input-group mb-3">
							<span class="input-group-text"><i data-feather="user"></i></span>
							<input type="text" name="username" id="username" class="form-control" placeholder="Username" required maxlength="20" minlength="3">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"><i data-feather="mail"></i></span>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required maxlength="40" minlength="7">
						</div>
						<div class="input-group mb-4">
							<span class="input-group-text"><i data-feather="lock"></i></span>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" minlength="8" maxlength="40" required>
						</div>
						<button class="btn btn-primary btn-block mb-4">Sign up</button>
						<p class="mb-2">Already have an account? <a href="auth-signin.php" class="f-w-400">Log in</a></p>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>


</body>

</html>
