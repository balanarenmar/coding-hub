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
    <title>Welcome to {C} - Coding Hub</title>
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
    <meta name="author" content="CS-2C_group2"/>
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
                                <h5 class="m-b-10">Chapter 1</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-home"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Introduction</a></li>
                                <li class="breadcrumb-item"><a href="#!">Welcome</a></li>
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
                    <div class="card bg-light text-white widget-visitor-card">
                        <div class="card-header">
                            <h4>Welcome, <span style="color:#FC3;"><?php echo "" . $_SESSION['username'] . ""; ?><span></h4>
                        </div>
                        <div class="card-body text-center">
                            <p class="f-16">
                               Welcome to <span style="color:#FC3;">{C} Coding Hub</span>, where you can learn free & interactive C tutorial! 
                            </p>
                            <p class="f-14">Whether you are an experienced programmer or not, this website is intended for everyone & anyone who wishes to learn the C programming language.<br>
                            We offer easily accessible coding lessons for C. Just click on the chapter you wish to begin from, and follow the instructions. Good luck!</p>
                            <i class="feather icon-user-check"></i>
                        </div>
                    </div>
                </div>
                <!-- [ dark-layout ] end -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="un-y">What is <span style="color:#FC3;">C</span> ?</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">
                                C programming is a general-purpose, procedural, imperative computer programming language developed in 1972 by Dennis M. Ritchie at the Bell Telephone Laboratories to develop the UNIX operating system. C is one of the most widely used computer languages . It keeps fluctuating at number one scale of popularity along with Java programming language, which is also equally popular and most widely used among modern software programmers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 mx-auto text-center">
                <h4 class="mb-3 un-y">Why Learn <span style="color:#FC3;">C</span> ?</h4>
                <hr>
                <div class="accordion" id="accordionExample">
                    <div class="card mb-0 bg-dark">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="feather feather icon-chevrons-right text-primary"></i> It will help you understand the fundamentals of Computer Theories</a></h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body m-r-50 m-l-50">
                                By learning C, you will be able to understand and visualize the inner workings of computer systems (like allocation and memory management), their architecture and the overall concepts that drive programming.<br><br>
                                As a programming language, C will also allow you to write more complex and comprehensive programs.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 bg-dark">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="feather feather icon-chevrons-right text-primary"></i> It will be easier to learn other programming languages</a></h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body m-r-50 m-l-50">
                                Many different programming languages are based on or related to C, so your knowledge of C will simplify the process of learning other languages. These languages typically share similar syntax, operators, control statements, data types and more.
                                <br><br>
                                A majority of high-level programming languages, such as JavaScript, Python and Java, for example, can interface with C-based programs. Additionally, C can be extremely useful when trying to communicate ideas and concepts in programming because of its universal nature.
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="feather feather icon-chevrons-right text-primary"></i> It is an efficient programming language</a></h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body m-r-50 m-l-50">
                                There are only 32 keywords contained within C as well as built-in functions and data types. Additionally, C programs contain a standard library of functions that can be called by user programs, allowing access to all of these features and functions at any point in the program.
                                <br><br>
                                All of these attributes make C both efficient and simple to work with, especially when developing complex programs. Additionally, C is an extremely efficient language whose compiled binaries execute quickly and with minimal overhead.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="un-y">Applications of <span style="color:#FC3;">C</span> Programming Language</h4>
                        </div>
                        <div class="card-body">
                            C was initially used for system development work, particularly the programs that make-up the operating system. C was adopted as a system development language because it produces code that runs nearly as fast as the code written in assembly language. Some examples of the use of C are - <br><br>
                            <ul class="f-18">
                                <li>Operating Systems</li>
                                <li>Language Compilers</li>
                                <li>Assemblers</li>
                                <li>Text Editors</li>
                                <li>Print Spoolers</li>
                                <li>Network Drivers</li>
                                <li>Modern Programs</li>
                                <li>Databases</li>
                                <li>Language Interpreters</li>
                                <li>Embedded Systems</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="un-y">Facts about <span style="color:#FC3;">C</span>...</h3>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li class="m-b-10">The C programming language is dubbed as the mother of all programing languages.</li>
                                <li >C Language was not called C at the beginning. It has been named as C after passing many stages of evolution. History of C: </li>
                                    <ul class="m-b-10">
                                        <table class="table-hover">
                                            <tr >
                                                <td><li data-toggle="tooltip" data-placement="left" title="Algorithmic Language">ALGOL</li></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                                                <td>International Group</td><td>&nbsp&nbsp&nbsp&nbsp</td>
                                                <td>1960</td>
                                            </tr>
                                            <tr>
                                                <td><li data-toggle="tooltip" data-placement="left" title="Basic Combined Programming Language">BCPL</li></td><td></td>
                                                <td>Martin Richards</td><td></td>
                                                <td>1967</td>
                                            </tr>
                                            <tr>
                                                <td><li data-toggle="tooltip" data-placement="left" title="derived from BCPL">B</li></td><td></td>
                                                <td>Ken Thompson</td><td></td>
                                                <td>1970</td>
                                            </tr>
                                            <tr>
                                                <td><li>Traditional C</li></td><td></td>
                                                <td>Dennis Ritchie</td><td></td>
                                                <td>1972</td>
                                            </tr>
                                            <tr>
                                                <td><li data-toggle="tooltip" data-placement="left" title="Kernighan & Dennis">K&R C</li></td><td></td>
                                                <td>Kernighan & Dennis Ritchie</td><td></td>
                                                <td>1978</td>
                                            </tr>
                                            <tr>
                                                <td><li data-toggle="tooltip" data-placement="left" title=" American National Standards Institute">ANSI C</li></td><td></td>
                                                <td>ANSI Committee</td><td></td>
                                                <td>1989</td>
                                            </tr>
                                            <tr>
                                                <td><li data-toggle="tooltip" data-placement="left" title="International Organization for Standardization">ANSI/ISO C</li></td><td></td>
                                                <td>ISO Committee</td><td></td>
                                                <td>1990</td>
                                            </tr>
                                            <tr >
                                                <td><li>C99</li></td><td></td>
                                                <td>Standardization Committee</td><td></td>
                                                <td>1999</td>
                                            </tr>
                                    </table>
                                    </ul>
                                <li class="m-b-10">Why it is named as C ? There is no such logic behind the naming of C Language. It was developed to cover all the inabilities of B language (simplified version of BCPL). So, it was just named C as it is next to B in the English alphabet.</li><li>C was originally first implemented on the DEC PDP-11 computer in 1972.</li>
                                <li class="m-b-10">C was invented to write an operating sytem called UNIX. It is a successor of B language which was introduced around the early 1970s</li>
                                <li class="m-b-10">In 1978, the language became more popular because of the book <strong>'The C Programming Language'</strong> by Brian Kerningham and Denis Ritchie.</li>
                                <li class="m-b-10">C18 is the latest version of C programming Language published in June 2018.</li>
                                <li class="m-b-10">To date, C is the oldest System Programming Language that is still widely used.</li>
                                <li class="m-b-10">C is the basis of many other programming languages like C++, Java, JavaScript, Go, C#, PHP, Python, Perl, C-shell and many more.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>How to Navigate</h5>
                        </div>
                        <div class="card-body">
                            <p class="lead m-t-0 text-primary">The Nav-Bar</p>
                            You can conveniently use the <strong>Navigational Bar</strong> to your left, to quickly arrive to the section that you wish to go to.
                            <br><br>
                            You can also toggle the Nav-bar by pressing the button <i class="feather feather icon-align-left text-primary"></i> in order to minimize it <em>(and vice-versa)</em>.
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Manage your Account</h5>
                        </div>
                        <div class="card-body">
                            You can check your account and edit your information by heading over to your profile. Simply press the <i class="feather feather icon-user text-success"></i> icon either in the nav-bar or in the header.
                            <br><br>
                           
                            <p class="text-success mb-1">
                                Make sure to logout your account before you leave the site.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mx-auto" style="text-align:center">
                    <hr>
                    <h4 class="mb-3 un-y">Discover More <span style="color:#FC3;">C</span> ...</h4><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <div class="card text-center">
                        <img class="img-fluid card-img-top" src="assets/images/slider/C-PlusPlus.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title text-info">C++</h3>
                            <p class="card-text">Increase your coding knowledge and learn how to add <span class="text-info">C++</span> to your expertise.</p>
                            <a href="https://isocpp.org/"><button class="btn  btn-info">Check it Out!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mx-auto">
                    <div class="card text-center">
                        <img class="img-fluid card-img-top" src="assets/images/slider/C-Sharp.png" alt="Card image cap">
                        <div class="card-body ">
                            <h3 class="card-title text-primary">C#</h3>
                            <p class="card-text">Get sharper with <span class="text-primary">C#</span>. <br>It's like C, but cutting-edge.</p>
                            <a href="https://docs.microsoft.com/en-us/dotnet/csharp/"><button class="btn btn-primary">Check it Out!</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-5 mx-auto ">
                <div class="card align-items-center">
                    <div class="card-header">
                        <h4>Begin your <span style="color:#FC3;">C</span>ourse:</h4>
                    </div>
                    <div class="card-body">
                        <a href="1-getting_started.php"><button type="button" class="btn btn-outline-success"><i class="feather mr-2 icon-check-circle"></i>Let's Get Started</button></a>
                        
                    </div>
                </div>
                </div>

            <!-- [ Main Content ] end -->
            </div>

    </div>
    <!-- [ Main Content ] end -->
        <!-- Warning Section start -->
        <!-- Older IE warning message -->
        <!--[if lt IE 11]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade
                   <br/>to any of the following web browsers to access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="assets/images/browser/chrome.png" alt="Chrome">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="assets/images/browser/firefox.png" alt="Firefox">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="assets/images/browser/opera.png" alt="Opera">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="assets/images/browser/safari.png" alt="Safari">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="assets/images/browser/ie.png" alt="">
                                <div>IE (11 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
        <!-- Warning Section Ends -->

        <!-- Required Js -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/ripple.js"></script>
        <script src="assets/js/pcoded.min.js"></script>


    <!-- prism Js -->
    <script src="assets/js/plugins/prism.js"></script>

</body>

</html>
