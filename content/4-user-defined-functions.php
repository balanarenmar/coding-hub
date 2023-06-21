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
    <title>{C} - User Defined Functions</title>
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
                                <li class="breadcrumb-item"><a href="#!">User-Defined Functions</a></li>
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
                            <h4 style="color: #FC3;">User Defined Functions</h4>
                        </div>
                        <div class="card-body text-center">
                            <p class="f-16">
                              In this tutorial, you will learn to create user-defined functions in C.
                              <br><br>
                              A function is a block of code that performs a specific task. C allows you to define functions according to your need. These functions are known as user-defined functions</p>
                            <i class="feather icon-server st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div> <!--End row-->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="un-y yellow-head">Example:</h4>
                        </div>
                        <div class="card-body">
                           <p class="card-text f-16 m-l-50">
                                Here is an example to add two integers. To perform this task, we have created an user-defined addNumbers().</p>
                            <br><br>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img src="assets/images/video-lesson/udfe.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                    <br><br>
                                </div>
                            </div>
                            <h4 class="m-l-50 hov-blue">Output:</h4>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img src="assets/images/video-lesson/udfeo.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="un-y yellow-head">Function Prototype</h4>
                        </div>
                        <div class="card-body">
                           <p class="card-text f-16 m-l-50">A function prototype is simply the declaration of a function that specifies function's name, parameters and return type. It doesn't contain function body.
                              <br><br>
                              A function prototype gives information to the compiler that the function may later be used in the program.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="un-y yellow-head">Syntax of Function Prototype</h4>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img src="assets/images/video-lesson/sfp.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 800px;">
                                    <br><br>
                                </div>
                            </div>
                            <br>
                            <p class="card-text f-16 m-l-50">In the above example, int addNumbers(int a, int b); is the function prototype which provides the following information to the compiler:
                              <br><br>
                              <span class="m-l-50">1. name of the function is addNumbers() </span><br>
                              <span class="m-l-50">2. return type of the function is int </span><br>
                              <span class="m-l-50">3. two arguments of type int are passed to the function </span><br><br>
                              The function prototype is not needed if the user-defined function is defined before the main() function. <br></p>
                            
                           </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="un-y yellow-head">Calling a function </h4>
                            </div>
                            <div class="card-body">
                               <p class="card-text f-16 m-l-50">Control of the program is transferred to the user-defined function by calling it.</p>
                                  <br><br>
                                  <h4 class="m-l-50 hov-blue">Syntax of function call</h4>

                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <img src="assets/images/video-lesson/sfc.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 800px;">
                                        <br><br>
                                    </div>
                                </div>
                                <br>
                                  <p class="card-text f-16 m-l-50">In the above example, the function call is made using addNumbers(n1, n2); statement inside the main() function.</p>
                               </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="un-y yellow-head">Function definition </h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text f-16 m-l-50">Function definition contains the block of code to perform a specific task. In our example, adding two numbers and returning it.</p>
                                      <br><br>
                                      <h4 class="m-l-50 hov-blue">Syntax of function definition</h4>
                                      <div class="row text-center">
                                        <div class="col-sm-12">
                                            <img src="assets/images/video-lesson/sfd.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 800px;">
                                            <br><br>
                                        </div>
                                    </div>
                                      <br>
                                      <p class="card-text f-16 m-l-50">When a function is called, the control of the program is transferred to the function definition. And, the compiler starts executing the codes inside the body of a function.</p>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="un-y yellow-head">Passing arguments to a function</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text f-16 m-l-50">In programming, argument refers to the variable passed to the function. In the above example, two variables n1 and n2 are passed during the function call.
                                          <br><br>
                                          The parameters a and b accepts the passed arguments in the function definition. These arguments are called formal parameters of the function.</p>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <img src="assets/images/video-lesson/AF.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                                    <br><br>
                                                </div>
                                            </div>
                                          <br><br>
                                          <p class="card-text f-16 m-l-50">The type of arguments passed to a function and the formal parameters must match, otherwise, the compiler will throw an error.
                                          <br><br>
                                          If n1 is of char type, a also should be of char type. If n2 is of float type, variable b also should be of float type.
                                          <br><br>
                                          A function can also be called without passing an argument.</p>
                                       </div>
                                    </div>
                                </div>
                            </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="un-y yellow-head">Return Statement</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text f-16 m-l-50">The return statement terminates the execution of a function and returns a value to the calling function. The program control is transferred to the calling function after the return statement.
                                      <br><br>
                                      In the above example, the value of the result variable is returned to the main function. The sum variable in the main() function is assigned this value.</p>
                                         <div class="row text-center">
                                            <div class="col-sm-12">
                                                <img src="assets/images/video-lesson/rf.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 600px;">
                                                <br><br>
                                            </div>
                                        </div>
                                      <br><br>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="un-y yellow-head">Syntax of Return Statement</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row text-center">
                                            <div class="col-sm-12">
                                                <img src="assets/images/video-lesson/re.jpg" alt="img" width="100%" height="auto" style="max-width: 600px;">
                                                <br><br>
                                            </div>
                                        </div>
                                        <h4 class="m-l-50 hov-blue">For example: </h4>
                                        <div class="row text-center">
                                            <div class="col-sm-12">
                                                <img src="assets/images/video-lesson/rr.jpg" alt="img" width="100%" height="auto" style="max-width: 600px;">
                                                <br><br>
                                            </div>
                                        </div>
                                        
                                        <br><br>
                                        <p class="card-text f-16 m-l-50">The type of value returned from the function and the return type specified in the function prototype and function definition must match.</p>
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
                            <a class="page-link" href="4-std-functions.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="4-types-user-defined.php">Next Topic</a>
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