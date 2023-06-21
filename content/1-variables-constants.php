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
    <title>{C} - Variables and Constants</title>
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

<body class="background-img-4">
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
                                <li class="breadcrumb-item"><i class="feather icon-box"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Introduction</a></li>
                                <li class="breadcrumb-item"><a href="#!">Syntax</a></li>
                                <li class="breadcrumb-item"><a href="#!">Variables & Constants</a></li>
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
                            <h4 style="color: #FC3;">Variables & Constants</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">
                               In this tutorial, you will learn about variables and rules for naming a variable.</p>
                            <p class="f-16">You will also learn about different literals in C programming and how to create constants.</p>
                            <i class="feather icon-box st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
                <!-- [ dark-layout ] end -->
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            <!--Character Set Start-->

            <div class="row text-center">
                <div class="col-sm-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5>Video Presentation</h5>
                        </div>
                        <div class="card-body">

                             <article class="video-item">
                                <div class="video-caption">
                                  <h4 class="text-primary font-weight-bold">C Operators</h4>
                                </div>
                                <figure>
                                  <a href="assets/images/video-lesson/var.mp4" class="play"><img src="assets/images/video-lesson/thumb/1.jpg"></a>
                                </figure>
                              </article>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y">Variables</h3>
                                <p class="card-text f-16 m-l-50 m-t-20">In programming, a variable is a container (storage area) to hold data.</p></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">To indicate the storage area, each variable should be given a unique name <a href="s-identifiers.html" class="blu-lk" >(identifier)</a>. Variable names are just the symbolic representation of a memory location. <br><em>For example:</em></p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int</span> playerScore = <span class="int">95</span>;</pre></code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">Here, <span class="hl">playerScore</span> is a variable of <span class="var hl">int</span> type. Here, the variable is assigned an integer value of <span class="hl int">95</span>.</p>
                                <p class="card-text f-16 m-l-50">The value of a variable can be changed, hence the name variable.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">char</span> character = <span class="char">'a'</span>;</pre>
                                            <pre class="code-line"><span class="comnt">//some code</span></pre>
                                            <pre class="code-line">character = <span class="char">'1'</span>;</pre></code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">Here, <span class="hl">character</span> is a variable of <span class="var hl">char</span> type. This variable is first assigned the character of <span class="hl char">a</span>.<br>
                                Then, it is later reassigned to a new character value which is <span class="hl char">1</span>.</p><br>

                                <hr>
                                <h4 class="m-b-20 hov-blue">Rules for naming a variable</h4>
                                    <ol class="f-16 m-l-50">
                                            <li>A variable name can only have letters (both uppercase and lowercase letters), digits and underscore.</li>
                                            <li>The first letter of a variable should be either a letter or an underscore.</li>
                                            <li>There is no rule on how long a variable name (identifier) can be. However, you may run into problems in some compilers if the variable name is longer than 31 characters.</li>
                                    </ol><br>
                                    <div class="col-sm-8">
                                        <div class="card social-widget-card">
                                            <div class="card-body bg-dark">
                                                <blockquote class="blockquote mb-0">
                                                    <span class="badge badge-info">Note:</span>
                                                    <p class="f-14 m-l-25 m-t-10">You should always try to give meaningful names to variables.</p>
                                                    <p class="f-14 m-l-25">For example: <span class="hl">firstName</span> is a better variable name than <span class="hl">fn</span>.</p>
                                                </blockquote>
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                    </div> <br>
                                    <p class="card-text f-16 m-l-50">C is a strongly typed language. This means that the variable type cannot be changed once it is declared. <br><em>For example:</em><br></p>
                                        <div class="col-sm-8  mx-auto">
                                            <div class="snippet"><code>
                                                <pre class="code-line"><span class="var">int</span> number = <span class="int">5</span>;      <span class="comnt">//declared as integer variable</span></pre>
                                                <pre class="code-line">number = <span class="int">5.5</span>;        <span class="comnt">//error</span></pre>
                                                <pre class="code-line"><span class="var">double</span> number;       <span class="comnt">//error</span></pre></code>
                                            </div>
                                        </div>
                                    <p class="card-text f-16 m-l-50">Here, the type of <span class="hl">number</span> variable is <span class="hl var">int</span>. You cannot assign a floating-point (decimal) value <span class="hl int">5.5</span> to this variable.</p>
                                    <p class="card-text f-16 m-l-50">Also, you cannot redefine the data type of the variable to <span class="hl var">double</span>. By the way, to store the decimal values in C, you need to declare its type to either <span class="hl var">double</span> or <span class="hl var">float</span>.</p><br>
                                    <p class="card-text f-16 m-l-50">You may click <a href="1-data-types.html" class="blu-lk">here</a> to learn more about different types of data, a variable can store.</p>
                                    </div>
                            </div>
                        </div>
                </div>
      
            <!--Character Set End-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">Literals</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">Literals are data used for representing fixed values. They can be used directly in the code.</p>
                                <p class="card-text f-16 m-l-50">For example: <span class="hl int">1</span>, <span class="hl int">2.5</span>, <span class="hl char">'c'</span> etc.</p>
                                <p class="card-text f-16 m-l-50">Here,<span class="hl int">1</span>, <span class="hl int">2.5</span>, and <span class="hl char">'c'</span> are literals. Why? Because you cannot assign different values to these terms.</p><br>

                            <hr>
                                 <h4 class="m-b-20 hov-blue">1. Integers</h4>
                                 <p class="card-text f-16 m-l-50">An integer is a numeric literal(associated with numbers) without any fractional or exponential part. There are three types of integer literals in C programming:</p>
                                    <ul class="f-16 m-l-50">
                                            <li>decimal (base 10)</li>
                                            <li>octal (base 8)</li>
                                            <li>hexadecimal (base 16)</li>
                                    </ul><br>
                                 <p class="card-text f-16 m-l-50">For example:</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Decimal: <span class="int">0</span>, <span class="int">-9</span>, <span class="int">22</span>, etc.</pre>
                                            <pre class="code-line">Octal: <span class="oct">021</span>, <span class="oct">077</span>, <span class="oct">033</span>, etc.</pre>
                                            <pre class="code-line">Hexadecimal = <span class="hex">0x2a</span>, <span class="hex">0x7f</span>, <span class="hex">0x521</span>, etc.</pre>
                                            </code>
                                        </div>
                                    </div>
                                 <p class="card-text f-16 m-l-50">In C programming, octal starts with a <span class="hl">0</span>, and hexadecimal starts with a <span class="hl">0x</span>.</p>
                            <hr>
                                 <h4 class="m-b-20 hov-blue">2. Floating-point Literals</h4>
                                 <p class="card-text f-16 m-l-50">A floating-point literal is a numeric literal that has either a fractional form or an exponent form.</p>
                                 <p class="card-text f-16 m-l-50">For example:</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="int">-2.0</span></pre>
                                            <pre class="code-line"><span class="int">0.0000234</span></pre>
                                            <pre class="code-line"><span class="int">-0.22E-5</span></pre></code>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card social-widget-card">
                                            <div class="card-body bg-dark">
                                                <blockquote class="blockquote mb-0">
                                                    <span class="badge badge-info">Note:</span>
                                                    <p class="f-16 m-l-25 m-t-10"><span class="hl">E-5</span> = 10 <sup>-5</sup></p>
                                                </blockquote>
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                            <hr>
                                 <h4 class="m-b-20 hov-blue">3. Characters</h4>
                                 <p class="card-text f-16 m-l-50">A character literal is created by enclosing a single character inside single quotation marks.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="char">'a'    '2'</span></pre>
                                            <pre class="code-line"><span class="char">'m'    '}'</span></pre>
                                            <pre class="code-line"><span class="char">'F'</span></pre></code>
                                        </div>
                                    </div>
                            <hr>
                                 <h4 class="m-b-20 hov-blue">4. Escape Sequences</h4>
                                 <p class="card-text f-16 m-l-50">Sometimes, it is necessary to use characters that cannot be typed or has special meaning in C programming. For example: newline(enter), tab, question mark etc.</p>
                                 <p class="card-text f-16 m-l-50">In order to use these characters, escape sequences are used.</p>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-4">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td>\n</td>
                                                            <td>New Line</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\t</td>
                                                            <td>Horizontal Tab</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\b</td>
                                                            <td>Backspace</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\r</td>
                                                            <td>Carriage Return</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\a</td>
                                                            <td>Audible Bell</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\'</td>
                                                            <td>Print apostrophe</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\"</td>
                                                            <td>Print quotation mark</td>
                                                        </tr>
                                                    </tbody>
                                            </table></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" ><caption>Escape Sequences in C Programming</caption>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td>\?</td>
                                                            <td>Question mark sequence</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\\</td>
                                                            <td>Print backslash</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\f</td>
                                                            <td>Form feed</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\v</td>
                                                            <td>Vertical tab</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\0</td>
                                                            <td>Null value</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\nnn</td>
                                                            <td>Print octal value</td>
                                                        </tr>
                                                        <tr>
                                                            <td>\xhh</td>
                                                            <td>Print hexadecimal value</td>
                                                        </tr>
                                                    </tbody>
                                            </table></div>
                                        </div>
                                    </div>
                                 <p class="card-text f-16 m-l-50">For example: <span class="hl">\n</span> is used for a newline. The backslash <span class="hl">\</span> causes escape from the normal way the characters are handled by the compiler.</p><br>
                                    
                            <hr>
                                 <h4 class="m-b-20 hov-blue">5. String Literals</h4>
                                 <p class="card-text f-16 m-l-50">A string literal is a sequence of characters enclosed in double-quote marks.</p>
                                 <p class="card-text f-16 m-l-50">For example:</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="char">"good"</span> <span class="comnt">          //string constant</span></pre>
                                            <pre class="code-line"><span class="char">""</span> <span class="comnt">              //null string constant</span></span></pre>
                                            <pre class="code-line"><span class="char">"      "</span></span> <span class="comnt">        //string constant of six white space</span></pre>
                                            <pre class="code-line"><span class="char">"x"</span></span> <span class="comnt">             //string constant having a single character.</span></pre>
                                            <pre class="code-line"><span class="char">"Earth is round\n"</span></span> <span class="comnt">       //prints string with a newline</span></pre></code>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div> <!-- end row-->
            </div>

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">Constants</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">If you want to define a variable whose value cannot be changed, you can use the <span class="hl var">const</span> keyword. This will create a constant.</p>
                                <p class="card-text f-16 m-l-50">For example,</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">constant double</span> PI = <span class="int">3.14</span>;</pre></code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">Notice, we have added keyword <span class="hl var">const</span>.</p>
                                <p class="card-text f-16 m-l-50">Here, <span class="hl">PI</span> is a symbolic constant; its value cannot be changed.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">constant double</span> PI = <span class="int">3.14</span>;</pre>
                                             <pre class="code-line">PI = <span class="int">2.9</span>; <span class="comnt">    //Error</span></pre></code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50"> You cannot reassign the value of <span class="hl">PI</span>.</p>

                            <hr>
                                <p class="card-text f-16 m-l-50">You can also define a constant using the <span class="hl head">#define</span> preprocessor directive. We will learn about it in C Macros tutorial...</p>
                          
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
                        <a class="page-link" href="1-identifiers.php" tabindex="-1">Previous Lesson</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="1-data-types.php">Next Topic</a>
                    </li>
                </ul>           
        </nav>
        </footer>
        <!-- [ Footer Content ] end -->
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
        <script src="assets/js/video.js"></script>
        <script src="assets/js/custom.js"></script>

    <!-- prism Js -->
    <script src="assets/js/plugins/prism.js"></script>

</body>

</html>