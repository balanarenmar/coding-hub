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
    <title>{C} - Chapter 7 QUIZ</title>
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
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="CS-2C_group2" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- prism css -->
    <link rel="stylesheet" href="assets/css/plugins/prism-coy.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/own-styles.css">
    

    <!-- Dark layouts -->
    <link rel="stylesheet" href="assets/css/layout-dark.css">
</head>

<body class="background-img-3 container box-layout">
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
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="<?php echo $_SESSION['profile_pic'] ?>" class="img-radius" alt="User-Profile-Image">
                                <span><?php echo "" . $_SESSION['username'] . ""; ?></span>
                                <a href="../assets/enter/logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.php" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            </ul>
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
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Chapter 7</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-home"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Quiz # 7</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ dark-layout ] start -->
                <div class="col-sm-12">
                    <div class="card widget-statstic-card">
                        <div class="card-header">
                            <h4 style="color: #FC3;">QUIZ # 7 </h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">Test your knowledge about what you've learned in the past lessons of Chapter 7.</p>
                            <p class="f-16">The quiz contains 15 questions all about File Handling in C, and there is no time limit.</p>
                            <p class="f-16 m-l-15"><strong>NOTE:</strong> <em>Only your first time taking the quiz will count towards the leaderboards...  </em></p>
                            <p class="f-18 text-center" style="color: #FC3;">Good Luck!</p>
                            <i class="fas fa-lightbulb st-icon bg-c-yellow"></i>
                        </div>
                    </div>
                </div>
                <!-- [ dark-layout ] end -->
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            <form action="quiz-7-result.php" method="post" id="quiz">
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 1 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">For reading and writing to a text file, we use the functions _____and _____.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/>
                                        <label for="question-1-answers-A"><li> printf() and scanf()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                        <label for="question-1-answers-B"><li> fprintf() and fscanf()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                        <label for="question-1-answers-C"><li> fread() and fwrite()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                                        <label for="question-1-answers-D"><li> fclose() and fopen()</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 2 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">For reading and writing to a binary file, we use the functions _____and _____.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                                        <label for="question-2-answers-A"><li> printf() and scanf()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                                        <label for="question-2-answers-B"><li> fprintf() and fscanf()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                                        <label for="question-2-answers-C"><li> fread() and fwrite()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                                        <label for="question-2-answers-D"><li> fclose()and fopen()</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 3 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">The following are operations that can be performed on files except.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                                        <label for="question-3-answers-A"><li> Creating a new file</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                                        <label for="question-3-answers-B"><li> Deleting a file</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                                        <label for="question-3-answers-C"><li> Opening an existing file</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                                        <label for="question-3-answers-D"><li> Closing a file</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 4 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Opening a file is performed using the ____ function.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                                        <label for="question-4-answers-A"><li> fopen()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                                        <label for="question-4-answers-B"><li> fclose()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                                        <label for="question-4-answers-C"><li> fputs()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                        <label for="question-4-answers-D"><li> fgets()</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 5 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">EOF stands for _____.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                                        <label for="question-5-answers-A"><li> Exit of File</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                                        <label for="question-5-answers-B"><li> End Operation File</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                                        <label for="question-5-answers-C"><li> End of Function</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                                        <label for="question-5-answers-D"><li> End of File</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 6 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">The function ____ is used to check the end of file after EOF.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/>
                                        <label for="question-6-answers-A"><li> feof()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                                        <label for="question-6-answers-B"><li> eof()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                                        <label for="question-6-answers-C"><li> fopen()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                                        <label for="question-6-answers-D"><li> fclose()</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 7 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">A _____ is a container in computer storage devices used for storing data.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/>
                                        <label for="question-7-answers-A"><li> File</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                                        <label for="question-7-answers-B"><li> Variable</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                                        <label for="question-7-answers-C"><li> Integer</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                                        <label for="question-7-answers-D"><li> Header</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 8 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">_____ files are the normal .txt files.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required/>
                                        <label for="question-8-answers-A"><li> Text</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                                        <label for="question-8-answers-B"><li> Binary</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                                        <label for="question-8-answers-C"><li> Head</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                                        <label for="question-8-answers-D"><li> Standard </li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 9 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">_____ files are mostly the bin files in your computer</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required/>
                                        <label for="question-9-answers-A"><li> Text</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                                        <label for="question-9-answers-B"><li> Binary</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                                        <label for="question-9-answers-C"><li> Head</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                                        <label for="question-9-answers-D"><li> Standard</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 10 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Closing a file is performed using the _____ function.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required/>
                                        <label for="question-10-answers-A"><li> fwrite()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                                        <label for="question-10-answers-B"><li> fopen()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                                        <label for="question-10-answers-C"><li> fclose()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                                        <label for="question-10-answers-D"><li> fread()</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

           <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 11 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">To write into a binary file, you need to use the _____ function.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" required/>
                                        <label for="question-11-answers-A"><li> fwrite()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                                        <label for="question-11-answers-B"><li> fopen()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                                        <label for="question-11-answers-C"><li> fclose()</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                                        <label for="question-11-answers-D"><li> fread()</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 12 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Open for reading.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" required/>
                                        <label for="question-12-answers-A"><li> w</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                                        <label for="question-12-answers-B"><li> r</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                                        <label for="question-12-answers-C"><li> a</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                                        <label for="question-12-answers-D"><li> r+</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 13 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Open for writing.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" required/>
                                        <label for="question-13-answers-A"><li> w</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                                        <label for="question-13-answers-B"><li> r</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                                        <label for="question-13-answers-C"><li> a</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                                        <label for="question-13-answers-D"><li> w+</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 14 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Open for append.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" required/>
                                        <label for="question-14-answers-A"><li> r</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                                        <label for="question-14-answers-B"><li> a</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                                        <label for="question-14-answers-C"><li> w</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                                        <label for="question-14-answers-D"><li> r+</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 15 of 15</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Open for both reading and writing.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" required/>
                                        <label for="question-15-answers-A"><li> r</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                                        <label for="question-15-answers-B"><li> w</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                                        <label for="question-15-answers-C"><li> r+</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                                        <label for="question-15-answers-D"><li> a</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->
            
            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
            <div class="col-sm-4 mx-auto">
                <button class="btn btn-block btn-primary mb-4">Submit</button>       
            </div>
        </footer>
        <!-- [ Footer Content ] end -->
    </div>
    <!-- [ Main Content ] end -->

        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/ripple.js"></script>
        <script src="assets/js/pcoded.min.js"></script>
        <script src="assets/js/video.js"></script>
        <script src="assets/js/custom.js"></script>

    <!-- prism Js -->
    <script src="assets/js/plugins/prism.js"></script>

</body>

</html>