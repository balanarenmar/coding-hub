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
    <title>{C} - Standard Library Functions</title>
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

<body class="background-img-1">
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
                                <h5 class="m-b-10">Chapter 4</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-server"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Functions</a></li>
                                <li class="breadcrumb-item"><a href="#!">C Function Types</a></li>
                                <li class="breadcrumb-item"><a href="#!">Standard Library Functions</a></li>
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
                            <h4 style="color: #FC3;">Standard Library Functions</h4>
                        </div>
                        <div class="card-body text-center">
                            <p class="f-16">
                              In this chapter, you'll learn about the standard library functions in C. More specifically, what are they, different library functions in C and how to use them in your program.
                              <br><br>
                              C Standard library functions or simply C Library functions are inbuilt functions in C programming. 
                            <br><br>
                             The prototype and data definitions of these functions are present in their respective header files. To use these functions we need to include the header file in our program. </p>
                            <i class="feather icon-server st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div> <!--End row-->
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">If you want to use the printf() function, the header file <span class="hl head">&ltstdio.h></span> should be included


                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img src="assets/images/video-lesson/functionX.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                    <br><br>
                                </div>
                            </div>

                            <h4 class="m-l-50 hov-blue">Output:</h4>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img src="assets/images/video-lesson/functionXR.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                    <br><br>
                                </div>
                            </div>
                            <br>
                                <p class="card-text f-16 m-l-50">Note: <br> <span class="text-danger">If you try to use printf() without including the stdio.h header file, you will get an error.</span></p>
                        </div>
                    </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="un-y yellow-head">Advantages of Using C library functions</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">
                                <h5>1. They work</h5><br>
                                One of the most important reasons you should use library functions is simply because they work. These functions have gone through multiple rigorous testing and are easy to use.
                                <br><br>
                                <h5>2. The functions are optimized for performance</h5><br>
                                Since, the functions are "standard library" functions, a dedicated group of developers constantly make them better. In the process, they are able to create the most efficient code optimized for maximum performance.
                                <br><br>
                                <h5>3. It saves considerable development time</h5><br>
                                Since the general functions like printing to a screen, calculating the square root, and many more are already written. You shouldn't worry about creating them once again.
                                <br><br>
                                <h5>4. The functions are portable</h5><br>
                                With ever-changing real-world needs, your application is expected to work every time, everywhere. And, these library functions help you in that they do the same thing on every computer.
                                <br><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card bg-dark">
                        <div class="card-header">
                            <h4 class="un-y yellow-head">Example: Square root using sqrt() function</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">Suppose, you want to find the square root of a number.
                              <br><br>To compute the square root of a number, you can use the sqrt() library function. <br>The function is defined in the <span class="hl head">math.h</span> header file.</p>
                            <br><br>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img src="assets/images/video-lesson/sqrt()function.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                    <br><br>
                                </div>
                            </div>
                            <br>
                             <h4 class="m-l-50 hov-blue">Output:</h4>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img src="assets/images/video-lesson/sqrt()functionO.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                    <br><br>
                                    <img src="assets/images/video-lesson/sqrt()function1.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4 class="un-y yellow-head">Library Functions in Different Header Files </h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>C Header Files</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td><span class="hl head">&ltassert.h></span></td>
                                                            <td>Program assertion functions</td>
                                                        </tr>   
                                                        <tr>
                                                            <td><a href="#ctype"><span class="hl head hov-blue">&ltctype.h></span></a></td>
                                                            <td>Character type functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl head">&ltlocale.h></span></td>
                                                            <td>Localization functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#math"><span class="hl head hov-blue">&ltmath.h></span></a></td>
                                                            <td>Mathematics functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl head">&ltsetjmp.h></span></td>
                                                            <td>Jump functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl head">&ltsignal.h></span></td>
                                                            <td>Signal handling functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl head">&ltstdarg.h></span></td>
                                                            <td>Variable arguments handling functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl head">&ltstdio.h></span></td>
                                                            <td>Standard Input/Output functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl head">&ltstdlib.h></span></td>
                                                            <td>Standard Utility functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#cstring"><span class="hl head hov-blue">&ltstring.h></span></a></td>
                                                            <td>String handling functions</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl head">&lttime.h></span></td>
                                                            <td>Date time functions</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div> <!--  end row -->

            <div class="row">
                <div class="col-sm-8 mx-auto text-center">
                <hr>
                <div class="accordion" id="accordionExample">
                    <div class="card mb-0 bg-dark">
                        <div class="card-header" id="headingOne">
                            <h4 class="un-b blue-head" id="ctype"><a href="#!" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="feather feather icon-chevrons-right text-primary"></i><span class="head">&ltctype.h> </span> C Type Functions</a></h4>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body m-r-50 m-l-50">
                                    <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                            <thead style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <th>Function</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <td><span class="hl function">isalnum()</span></td>
                                                    <td>checks alphanumeric character</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">isalpha()</span></td>
                                                    <td>checks if a character is an alphabet or not</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">iscntrl()</span></td>
                                                    <td>checks control character</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">isdigit() </span></td>
                                                    <td>checks numeric character</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">isgraph()</span></td>
                                                    <td>checks graphic character</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">islower()</span></td>
                                                    <td>checks lowercase alphabet</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">isprint() </span></td>
                                                    <td>checks printable character</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">ispunct() </span></td>
                                                    <td>checks punctuation</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">isspace() </span></td>
                                                    <td>check white-space character</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">isupper() </span></td>
                                                    <td>checks upppercase alphabet</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">isxdigit()</span></td>
                                                    <td>checks hexadecimal digit character</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">tolower() </span></td>
                                                    <td>converts alphabet to lowercase</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">toupper()</span></td>
                                                    <td>converts upppercase alphabet</td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 bg-dark">
                        <div class="card-header" id="headingTwo">
                            <h4 class="un-b blue-head" id="math"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="feather feather icon-chevrons-right text-primary"></i><span class="head">&ltmath.h> </span> Mathematics Functions</a></h4>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body m-r-50 m-l-50">
                                    <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                            <thead style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <th>Function</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <td><span class="hl function">acos()</span></td>
                                                    <td>computes arc cosine</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">acosh()</span></td>
                                                    <td>computes arc hyperbolic cosine</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">acsin()</span></td>
                                                    <td>computes arc sine</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">asinh()</span></td>
                                                    <td>computes the hyperbolic of arc sine of an argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">atan()</span></td>
                                                    <td>computes the arc tangent of an argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">atan2()</span></td>
                                                    <td>ccomputes the arc tangent in radians</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">atanh()</span></td>
                                                    <td>computes arc hyperbolic tangent</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">cbrt()</span></td>
                                                    <td>computes cube root of a number</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">ceil()</span></td>
                                                    <td>computes the nearest integer greater than argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">cos()</span></td>
                                                    <td>computes the cosine of an argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">cosh()</span></td>
                                                    <td>computer hyperbolic cosine</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">exp()</span></td>
                                                    <td>computes the exponential raised to the argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">fabs()</span></td>
                                                    <td>computes absolute value</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">floor()</span></td>
                                                    <td>calculates the nearest integer less than argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">hypot()</span></td>
                                                    <td>computes hypotenuse</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">log()</span></td>
                                                    <td>computes natural logarithm of an argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">log10()</span></td>
                                                    <td>computes the base 10 logarithm of an argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">pow()</span></td>
                                                    <td>Computes power of a number</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">sin()</span></td>
                                                    <td>compute sine of a number</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">sinh()</span></td>
                                                    <td>computes the hyperbolic sine of an argument</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">sqrt()</span></td>
                                                    <td>computes square root of a number</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">tan()</span></td>
                                                    <td>computes tangent</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">tanh()</span></td>
                                                    <td>computes the hyperbolic tangent of an argument</td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark">
                        <div class="card-header" id="headingThree">
                            <h4 class="un-b blue-head" id="cstring"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="feather feather icon-chevrons-right text-primary"></i><span class="head">&ltstring.h> </span> C String Functions</a></h4>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body m-r-50 m-l-50">
                                <div class="card-body m-r-50 m-l-50">
                                    <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                            <thead style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <th>Function</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <td><span class="hl function">strcat()</span></td>
                                                    <td>concatenates 2 strings</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">strcmp()</span></td>
                                                    <td>compares 2 strings</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">strcpy()</span></td>
                                                    <td>copies a string</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl function">strlen()</span></td>
                                                    <td>calculates length of a string</td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
            <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item m-r-50">
                            <a class="page-link" href="3-goto-function.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="4-user-defined-functions.php">Next Topic</a>
                        </li>
                    </ul>           
            </nav>
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