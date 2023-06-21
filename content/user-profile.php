<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //proceed
    }else {
    header('Location: ../auth-signin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="CS-2C_group2" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- prism css -->
    <link rel="stylesheet" href="assets/css/plugins/prism-coy.css">
    <!-- ekko-lightbox css -->
	<link rel="stylesheet" href="assets/css/plugins/ekko-lightbox.css">
	<link rel="stylesheet" href="assets/css/plugins/lightbox.min.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/own-styles.css">
    

    <!-- Dark layouts -->
    <link rel="stylesheet" href="assets/css/layout-dark.css">

</head>

<body class="background-img-4 container box-layout">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light menupos-fixed">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="<?php echo $_SESSION['profile_pic'] ?>" alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">
                                <?php echo "" . $_SESSION['username'] . ""; ?>
                            <i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="user-profile.php" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
                            <li class="list-inline-item"><a href="../assets/enter/logout.php" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Chapter 1- Introduction</label>
                    </li>
                    <li class="nav-item"><a href="1-welcome.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-star-on"></i></span><span class="pcoded-mtext">Welcome</span></a>
                    </li>
                    <li class="nav-item"><a href="1-getting_started.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-check-circle"></i></span><span class="pcoded-mtext">Getting Started</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Syntax</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="1-identifiers.php">Key Words & Identifiers</a></li>
                            <li><a href="1-variables-constants.php">Variables & Constants</a></li>
                            <li><a href="1-data-types.php">C Data Types</a></li>
                            <li><a href="1-operator.php">C Operators</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="1-program-structure.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Program Structure</span></a>
                    </li>
                    <li class="nav-item"><a href="quiz-1.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-lightbulb "></i></span><span class="pcoded-mtext font-weight-bold">Quiz # 1</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Chapter 2- Standard I/O</label>
                    </li>
                     <li class="nav-item"><a href="2-standard-files.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Standard Files</span></a>
                    </li>
                    <li class="nav-item"><a href="2-getchar-putchar.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-corner-down-right"></i></span><span class="pcoded-mtext">getchar() and putchar()</span></a>
                    </li>
                    <li class="nav-item"><a href="2-gets-puts.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-corner-down-right"></i></span><span class="pcoded-mtext">gets() and puts()</span></a>
                    </li>
                    <li class="nav-item"><a href="2-scanf-printf.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-corner-down-right"></i></span><span class="pcoded-mtext">scanf() and printf() </span></a>
                    </li>
                    <li class="nav-item"><a href="quiz-2.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-lightbulb "></i></span><span class="pcoded-mtext font-weight-bold">Quiz # 2</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Chapter 3- C Flow Control</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-navigation"></i></span><span class="pcoded-mtext">Selection</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="3-if.php">if Statement</a></li>
                            <li><a href="3-if-else.php">if...else</a></li>
                            <li><a href="3-switch.php">switch...case</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-refresh-cw"></i></span><span class="pcoded-mtext">Repetition</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="3-while.php">while Loop</a></li>
                            <li><a href="3-do-while.php">do...while Loop</a></li>
                            <li><a href="3-for-loop.php">for Loop</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="3-break-continue.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-skip-forward"></i></span><span class="pcoded-mtext">C break and continue</span></a>
                    </li>
                    <li class="nav-item"><a href="3-goto-function.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-fast-forward"></i></span><span class="pcoded-mtext">The goto Function</span></a>
                    </li>
                    <li class="nav-item"><a href="quiz-3.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-lightbulb "></i></span><span class="pcoded-mtext font-weight-bold">Quiz # 3</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Chapter 4- Functions</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">C Function Types</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="4-std-functions.php">Standard Library Functions</a></li>
                            <li><a href="4-user-defined-functions.php">User-Defined Functions</a></li>
                            <li><a href="4-types-user-defined.php">Types of User-D. Functions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="4-recursion.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-refresh-ccw"></i></span><span class="pcoded-mtext">C Recursion</span></a>
                    </li>
                    <li class="nav-item"><a href="4-storage-class.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-save"></i></span><span class="pcoded-mtext">Storage Class</span></a>
                    </li>
                    <li class="nav-item"><a href="quiz-4.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-lightbulb st-icon "></i></span><span class="pcoded-mtext font-weight-bold">Quiz # 4</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Chapter 5- Arrays</label>
                    </li>
                    <li class="nav-item"><a href="5-arrays.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-square"></i></span><span class="pcoded-mtext">C Programming Arrays</span></a>
                    </li>
                    <li class="nav-item"><a href="5-multidimen-arrays.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">MultiDimensional Array</span></a>
                    </li>
                    <li class="nav-item"><a href="5-arrays-functions.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-codepen"></i></span><span class="pcoded-mtext">Arrays and Functions</span></a>
                    </li>
                    <li class="nav-item"><a href="quiz-5.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-lightbulb st-icon "></i></span><span class="pcoded-mtext font-weight-bold">Quiz # 5</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Chapter 6- Strings</label>
                    </li>
                    <li class="nav-item"><a href="6-strings.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-minus"></i></span><span class="pcoded-mtext">C Programming Strings</span></a>
                    </li>
                    <li class="nav-item"><a href="6-string-functions.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-menu"></i></span><span class="pcoded-mtext">C String Functions</span></a>
                    </li>
                    <li class="nav-item"><a href="quiz-6.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-lightbulb st-icon "></i></span><span class="pcoded-mtext font-weight-bold">Quiz # 6</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Chapter 7- File Handling</label>
                    </li>
                    <li class="nav-item"><a href="7-file-input-output.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">File Input/Output</span></a>
                    </li>
                    <li class="nav-item"><a href="7-check-eof.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-triangle"></i></span><span class="pcoded-mtext">Checking for EOF</span></a>
                    </li>
                    <li class="nav-item"><a href="quiz-7.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-lightbulb st-icon "></i></span><span class="pcoded-mtext font-weight-bold">Quiz # 7</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Additional Topics</label>
                    </li>
                    <li class="nav-item"><a href="8-enumeration.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">C Enumeration</span></a>
                    </li>
                    <li class="nav-item"><a href="8-preprocessors.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">C Preprocessors</span></a>
                    </li>
                    <li class="nav-item"><a href="8-std-library.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">C Standard Library</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>QUIZ LEADERBOARDS</label>
                    </li>
                    <li class="nav-item"><a href="leaderboards.php" class="nav-link "><span class="pcoded-micon"><i class="fas fa-trophy"></i></span><span class="pcoded-mtext font-weight-bolder">Overall Leaderboards</span></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   logo   ============ -->
                <img src="assets/images/logo.png" alt="" class="logo m-r-15" width="180px">
                
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="<?php echo $_SESSION['profile_pic'] ?>" class="img-radius" alt="User-Profile-Image">
                                <span>
                                    <?php echo "" . $_SESSION['username'] . ""; ?>
                                </span>
                                <a href="../assets/enter/logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<!-- profile header start -->
		<div class="user-profile user-card mb-4">
			<div class="card-header border-0 p-0 pb-0">
				<div class="cover-img-block">
					<!-- <img src="assets/images/profile/cover.jpg" alt="" class="img-fluid"> -->
					<div class="overlay"></div>
					<div class="change-cover">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon feather icon-camera"></i></a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>upload new</a>
								<a class="dropdown-item" href="#"><i class="feather icon-image mr-2"></i>from photos</a>
								<a class="dropdown-item" href="#"><i class="feather icon-film mr-2"></i> upload video</a>
								<a class="dropdown-item" href="#"><i class="feather icon-trash-2 mr-2"></i>remove</a>
							    
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body py-0">
				<div class="user-about-block m-0">
					<div class="row">
						<div class="col-md-4 text-center mt-n5">
							<div class="change-profile text-center">
								<div class="dropdown w-auto d-inline-block">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="profile-dp">
											<div class="position-relative d-inline-block">
												<img class="img-radius img-fluid wid-100" src="<?php echo $_SESSION['profile_pic'] ?>" alt="User image">
											</div>
											<div class="overlay">
												<span>change</span>
											</div>
										</div>
										<div class="certificated-badge">
											<i class="fas fa-certificate text-c-blue bg-icon"></i>
											<i class="fas fa-check front-icon text-white"></i>
										</div>
									</a>
									<div class="dropdown-menu">
                                        <form action="assets/account_update/picture.php" method="POST">

                                        <button name="profile_pic" type="submit" value="1" class="btn  btn-sm"  <?php if($_SESSION['profile_pic'] === "assets/images/user/avatar-1.jpg"){echo"disabled";}?>>
                                        <a class="dropdown-item btn btn-primary">
                                        <img class="img-radius img-fluid m-r-10" src="assets/images/user/avatar-1.jpg" alt="profile_pic_1" width="30px">
                                        default
                                        </a></button>

                                        <button name="profile_pic" type="submit" value="2" class="btn  btn-sm"  <?php if($_SESSION['profile_pic'] === "assets/images/user/avatar-2.jpg"){echo"disabled";}?> >
                                        <a class="dropdown-item btn btn-primary"><img class="img-radius img-fluid m-r-10" src="assets/images/user/avatar-2.jpg" alt="profile_pic_1" width="30px">
                                        avatar_2
                                        </a></button>

                                        <button name="profile_pic" type="submit" value="3" class="btn  btn-sm"  <?php if($_SESSION['profile_pic'] === "assets/images/user/avatar-3.jpg"){echo"disabled";}?>>
                                        <a class="dropdown-item btn btn-primary"><img class="img-radius img-fluid m-r-10" src="assets/images/user/avatar-3.jpg" alt="profile_pic_1" width="30px">
                                        avatar_3
                                        </a></button>

                                        <button name="profile_pic" type="submit" value="4" class="btn  btn-sm"  <?php if($_SESSION['profile_pic'] === "assets/images/user/avatar-4.jpg"){echo"disabled";}?> >
                                        <a class="dropdown-item btn btn-primary"><img class="img-radius img-fluid m-r-10" src="assets/images/user/avatar-4.jpg" alt="profile_pic_1" width="30px">
                                        avatar_4
                                        </a></button>

                                        <button name="profile_pic" type="submit" value="5" class="btn  btn-sm"  <?php if($_SESSION['profile_pic'] === "assets/images/user/avatar-5.jpg"){echo"disabled";}?>>
                                        <a class="dropdown-item btn btn-primary"><img class="img-radius img-fluid m-r-10" src="assets/images/user/avatar-5.jpg" alt="profile_pic_1" width="30px">
                                        avatar_5
                                        </a></button>

                                        </form>
									</div>
								</div>
							</div>
							<h5 class="mb-1"><?php echo "" . $_SESSION['username'] . ""; ?></h5>
							<p class="mb-2 text-muted">Student</p>
						</div>
						<div class="col-md-8 mt-md-4">
							<div class="row">
								<div class="col-md-6">
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail mr-2 f-18"></i><?php echo "" . $_SESSION['email'] . ""; ?></a>
									<div class="clearfix"></div>
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone mr-2 f-18"></i><?php echo "" . $_SESSION['number'] . ""; ?></a>
								</div>
								<div class="col-md-6">
									<div class="media">
										<i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
										<div class="media-body">
											<p class="mb-0 text-muted"><?php echo "" . $_SESSION['address'] . ""; ?></p>
										</div>
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link text-reset active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><i class="feather icon-user mr-2"></i>Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false"><i class="feather icon-award mr-2"></i>Badges </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile header end -->

		<!-- profile body start -->
		<div class="row">
			<div class="col-md-10 mx-auto order-md-2 ">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Personal details</h5>
								<button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-1 pro-det-edit-2">
									<i class="feather icon-edit"></i>
								</button>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Username:</label>
										<div class="col-sm-9 col-form-label">
											<?php echo "" . $_SESSION['username'] . ""; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Gender</label>
										<div class="col-sm-9 col-form-label">
											<?php echo "" . $_SESSION['gender'] . ""; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Birth Date</label>
										<div class="col-sm-9 col-form-label">
											<?php echo "" . $_SESSION['birthdate'] . ""; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Address:</label>
										<div class="col-sm-9 col-form-label">
											<p class="mb-0 text-muted "><?php echo "" . $_SESSION['address'] . ""; ?></p>
										</div>
									</div>
								</form>
							</div>
							<div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">
								<form action="assets/account_update/personal.php" method="POST" >
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Full Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="<?php echo "" . $_SESSION['username'] . ""; ?>" disabled>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Gender</label>
										<div class="col-sm-9">
											
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="Male" name="gender" value="Male" required <?php if($_SESSION['gender'] == "Male"){echo"checked";}?>  >
                                        <label class="custom-control-label" for="Male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="Female" name="gender" value="Female" required <?php if($_SESSION['gender'] == "Female"){echo"checked";}?> >
                                         <label class="custom-control-label" for="Female">Female</label>
                                        <div class="invalid-feedback">invalid feedback</div>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" id="Non-binary" name="gender" value="Non-binary" required <?php if($_SESSION['gender'] == "Non-binary"){echo"checked";}?> >
                                         <label class="custom-control-label" for="Non-binary">Non-binary</label>
                                        <div class="invalid-feedback">invalid feedback</div>
                                    </div>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Birth Date</label>
										<div class="col-sm-9">
											<input type="date" min="1900-01-01" max="2021-12-31" class="form-control" value="<?php echo "" . $_SESSION['birthdate'] . ""; ?>" name="birthdate">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Address:</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="address" maxlength="70"><?php echo "" . $_SESSION['address'] . ""; ?></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Contact Information</h5>
								<button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-dont-edit" aria-expanded="false" aria-controls="pro-dont-edit-1 pro-dont-edit-2">
									<i class="feather icon-edit"></i>
								</button>
							</div>
							<div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Mobile No.</label>
										<div class="col-sm-9 col-form-label">
											<?php echo "" . $_SESSION['number'] . ""; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Email Address</label>
										<div class="col-sm-9 col-form-label">
											<?php echo "" . $_SESSION['email'] . ""; ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Facebook</label>
										<div class="col-sm-9 col-form-label">
											<?php echo "" . $_SESSION['contact'] . ""; ?>
										</div>
									</div>
								</form>
							</div>
							<div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">
								<form action="assets/account_update/contact.php" method="POST">
									
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Mobile No.</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name="number" type="text" class="form-control mob_no" data-mask="9999-999-999" value="<?php echo "" . $_SESSION['number'] . ""; ?>">
                                        </div>
                                    </div>
                                    
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Email Address</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="Email" value="<?php echo "" . $_SESSION['email'] . ""; ?>" disabled>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Facebook</label>
										<div class="col-sm-9">
											<input name="contact" type="text" class="form-control" placeholder="@contact" value="<?php echo "" . $_SESSION['contact'] . ""; ?>" maxlength="20">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
									</div>
								</form>
							</div>
						</div>
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Account Authentication</h5>
                                <button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-wrk-edit" aria-expanded="false" aria-controls="pro-wrk-edit-1 pro-wrk-edit-2">
                                    <i class="feather icon-edit"></i>
                                </button>
                            </div>
                            <div class="card-body border-top pro-wrk-edit collapse show" id="pro-wrk-edit-1">
                                <form>
                                   <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Password</label>
                                        <div class="col-sm-9 col-form-label">
                                            ***********
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body border-top pro-wrk-edit collapse " id="pro-wrk-edit-2">
                                <form id="change_pass" action="assets/account_update/pass.php" method="POST">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Current Password</label>
                                        <div class="col-sm-9">
                                            <input name="oldpass" type="password" class="form-control" placeholder=" enter current password" id="oldie" required onChange="check()">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">New Password</label>
                                        <div class="col-sm-9">
                                            <input name="newpass1" minlength="8"  type="password" class="form-control" placeholder=" new password" id="pass" required onChange="onChange(),checkold()">
                                            <input type="checkbox" onclick="show()" maxlength="40"><em> Show Password</em>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bolder">Confirm New Password</label>
                                        <div class="col-sm-9">
                                            <input name="newpass2" minlength="8" type="password" class="form-control" placeholder=" re-enter new password" required onChange="onChange()" maxlength="40">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-primary " id="btn-submit">Confirm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
					<div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                        <?php require_once 'assets/account_update/badges.php'; ?>
						<div class="row text-center">
                            <?php if ($registered == 1) { ?>
							<div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a href="assets/images/badges/reg.png" data-lightbox="roadtrip"><img src="assets/images/badges/reg.png" class="img-fluid m-b-10 img-thumbnail bg-white" alt=""></a>
							</div>
                            <?php } ?>

                            <?php if ($badge1 == 1) { ?>
							<div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a href="assets/images/badges/q1.png" data-lightbox="roadtrip"><img src="assets/images/badges/q1.png" class="img-fluid m-b-10 img-thumbnail bg-white" alt=""></a>
							</div>
                            <?php } ?>

                            <?php if ($badge2 == 1) { ?>
							<div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a href="assets/images/badges/q2.png" data-lightbox="roadtrip"><img src="assets/images/badges/q2.png" class="img-fluid m-b-10 img-thumbnail bg-white" alt=""></a>
							</div>
                            <?php } ?>

                            <?php if ($badge3 == 1) { ?>
							<div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a href="assets/images/badges/q3.png" data-lightbox="roadtrip"><img src="assets/images/badges/q3.png" class="img-fluid m-b-10 img-thumbnail bg-white" alt=""></a> 
							</div>
                            <?php } ?>

                            <?php if ($badge4 == 1) { ?>
							<div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a href="assets/images/badges/q4.png" data-lightbox="roadtrip"><img src="assets/images/badges/q4.png" class="img-fluid m-b-10 img-thumbnail bg-white" alt=""></a>
							</div>
                            <?php } ?>

                            <?php if ($badge5 == 1) { ?>
							<div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a href="assets/images/badges/q5.png" data-lightbox="roadtrip"><img src="assets/images/badges/q5.png" class="img-fluid m-b-10 img-thumbnail bg-white" alt=""></a>
                                
							</div>
                            <?php } ?>

                            <?php if ($badge6 == 1) { ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a href="assets/images/badges/q6.png" data-lightbox="roadtrip"><img src="assets/images/badges/q6.png" class="img-fluid m-b-10 img-thumbnail bg-white" alt=""></a>
                            </div>
                            <?php } ?>

                            <?php if ($badge7 == 1) { ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <a href="assets/images/badges/q7.png" data-lightbox="roadtrip"><img src="assets/images/badges/q7.png" class="img-fluid m-b-10 img-thumbnail bg-white" alt=""></a>
                            </div>
                            <?php } ?>

						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!-- profile body end -->
	</div>
</div>
<!-- [ Main Content ] end -->
    
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

    <!-- Input mask Js -->
    <script src="assets/js/plugins/jquery.mask.min.js"></script>
    <!-- form-picker-custom Js -->
    <script src="assets/js/pages/form-masking-custom.js"></script>

    <!-- ekko-lightbox Js -->
    <script src="assets/js/plugins/ekko-lightbox.min.js"></script>
    <script src="assets/js/plugins/lightbox.min.js"></script>
    <script src="assets/js/pages/ac-lightbox.js"></script>
    
    <!-- md5 encrypt in js -->
    <script language="JavaScript" src="assets/account_update/md5.js"></script>
    <script type="text/javascript">

        function checkold() {
          const password = document.querySelector('input[name=newpass1]');
          const confirm = document.querySelector('input[name=oldpass]');
          if (confirm.value === password.value) {
            password.setCustomValidity('Your new password cannot be your old password.');
          } else {
            password.setCustomValidity('');
          }
        }

        function onChange() {
          const password = document.querySelector('input[name=newpass1]');
          const confirm = document.querySelector('input[name=newpass2]');
          if (confirm.value === password.value) {
            confirm.setCustomValidity('');
          } else {
            confirm.setCustomValidity('Passwords do not match');
          }
        }

        function show() {
          var x = document.getElementById("pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }

        function check() {
            const first_pass = document.querySelector('input[name=oldpass]');

            var pass = document.getElementById("oldie").value;
            const currpass = calcMD5(pass);

            const orig = "<?php echo "" . $_SESSION['pass'] . ""; ?>";
        //        window.alert(currpass);
            if (currpass === orig) {
                first_pass.setCustomValidity('');
            } else {
                first_pass.setCustomValidity('Incorrect Password');
            }
        }
    </script>

    <script>       
    	// [ customer-scroll ] start
    	var px = new PerfectScrollbar('.cust-scroll', {
    		wheelSpeed: .5,
    		swipeEasing: 0,
    		wheelPropagation: 1,
    		minScrollbarLength: 40,
    	});
    	// [ customer-scroll ] end
    </script>
   

</body>
</html>
