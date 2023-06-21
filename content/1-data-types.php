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
    <title>{C} - Data Types</title>
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
                                <li class="breadcrumb-item"><a href="#!">C Data Types</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Head Content ] start -->
            <div class="row">
                <!-- [ dark-layout ] start -->
                <div class="col-sm-12">
                    <div class="card widget-statstic-card">
                        <div class="card-header">
                            <h4 style="color: #FC3;">C Data Types</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">
                               In this tutorial, you will learn about basic data types such as int, float, char etc. in C programming.</p>
                            <p class="f-16">
                               In C programming, data types are declarations for variables. This determines the type and size of data associated with variables. For example,</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int </span> myVar;</pre></code>
                                        </div>
                                    </div>
                            <p class="f-16">
                               Here, <span class="hl">myVar</span> is a variable of <span class="hl var">int</span> (integer) type. The size of int is 4 bytes.</p>

                            <i class="fas fa-boxes st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Head Content ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h3 class="yellow-head un-y">Basic Data Types</h3>
                            </div>

                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">Here's a table containing commonly used types in C programming for quick access.</p>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Size (bytes)</th>
                                                            <th>Format Specifier</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td><span class="hl var">int</span></td>
                                                            <td>at least 2, usually 4</td>
                                                            <td><span class="hl">%d</span> , <span class="hl">%i</span></td>
                                                        </tr>   
                                                        <tr>
                                                            <td><span class="hl var">char</span></td>
                                                            <td>1</td>
                                                            <td><span class="hl">%c</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">float</span></td>
                                                            <td>4</td>
                                                            <td><span class="hl">%f</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">double</span></td>
                                                            <td>8</td>
                                                            <td><span class="hl">%lf</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">short int</span></td>
                                                            <td>2 usually</td>
                                                            <td><span class="hl">%hd</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">unsigned int</span></td>
                                                            <td>at least 2, usually 4</td>
                                                            <td><span class="hl">%u</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">long int</span></td>
                                                            <td>at least 4, usually 8</td>
                                                            <td><span class="hl">%ld</span> , <span class="hl">%li</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">long long int</span></td>
                                                            <td>at least 8</td>
                                                            <td><span class="hl">%lld</span> , <span class="hl">%lli</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">unsigned long int</span></td>
                                                            <td>at least 4</td>
                                                            <td><span class="hl">%lu</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">unsigned long long int</span></td>
                                                            <td>at least 8</td>
                                                            <td><span class="hl">%llu</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">signed char</span></td>
                                                            <td>1</td>
                                                            <td><span class="hl">%c</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">unsigned char</span></td>
                                                            <td>1</td>
                                                            <td><span class="hl">%c</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="hl var">long double</span></td>
                                                            <td>at least 10, usually 12 or 16</td>
                                                            <td><span class="hl">%Lf</span></td>
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
      
            <!--Character Set End-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">int</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">Integers are whole numbers that can have both zero, positive and negative values but no decimal values. </p>
                                <p class="card-text f-16 m-l-50">For example: <span class="hl int">0</span> , <span class="hl int">-5</span> , <span class="hl int">10</span></p>
                                <p class="card-text f-16 m-l-50">We can use <span class="hl var">int</span> for declaring an integer variable.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int</span> id;</pre>
                                            </code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">Here, <span class="hl">id</span> is a variable of type integer.</p>
                            <hr>
                                <p class="card-text f-16 m-l-50">You can declare multiple variables at once in C programming. For example,</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int</span> id, age;</pre>
                                            </code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">The size of <span class="hl">int</span> is usually 4 bytes (32 bits). And, it can take <span class="hl">2<sup>32</sup></span> distinct states from <span class="hl">-2147483648</span> to <span class="hl">2147483647</span>.</p>
                            </div>
                        </div>
                </div> 
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">float and double</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50"><span class="hl var">float</span> and <span class="hl var">double</span> are used to hold real numbers.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">float</span> salary;</pre>
                                            <pre class="code-line"><span class="var">double</span> price;</pre>
                                            </code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">In C, floating-point numbers can also be represented in exponential. For example,</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">float</span> normalizationFactor = <span class="int">22.442e2</span>;</pre>
                                            </code>
                                        </div>
                                    </div>
                            <hr>            
                                <p class="card-text f-16 m-l-50">What's the difference between <span class="hl var">float</span> and <span class="hl var">double</span>?</p>
                                <p class="card-text f-16 m-l-50">The size of <span class="hl var">float</span> (single precision float data type) is 4 bytes. And the size of <span class="hl var">double</span> (double precision float data type) is 8 bytes.</p>
                            </div>
                        </div>
                </div> 
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">char</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">Keyword <span class="hl var">char</span> is used for declaring character type variables. For example,</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">char</span> test = <span class="char">'h'</span>;</pre>
                                            </code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">The size of the character variable is 1 byte.</p>
                            
                            </div>
                        </div>
                </div> 
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">void</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50"><span class="hl var">void</span> is an incomplete type. It means "nothing" or "no type". You can think of void as <strong>absent</strong>.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">void</span> function() {</pre>
                                            <pre class="code-line"><span class="comnt">      //some code</span></pre>
                                            <pre class="code-line">}</pre>
                                       
                                            </code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">For example, if a function is not returning anything, its return type should be <span class="hl var">void</span> .</p>
                                <p class="card-text f-16 m-l-50">Note that, you cannot create variables of void type.</p>
                            
                            </div>
                        </div>
                </div> 
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">short and long</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">If you need to use a large number, you can use a type specifier <span class="hl var">long</span>. Here's how:</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">long</span> a;</pre>
                                            <pre class="code-line"><span class="var">long long</span> b;</pre>
                                            <pre class="code-line"><span class="var">long double</span> c;</pre>
                                            </code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">Here variables <span class="hl">a</span> and <span class="hl">b</span> can store integer values. And, <span class="hl">c</span> can store a floating-point number.</p>
                                <p class="card-text f-16 m-l-50">If you are sure, only a small integer (<span class="hl">[ −32,767, +32,767 ]</span> range) will be used, you can use <span class="var">short</span>.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">short</span> d;</pre>
                                            </code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">You can always check the size of a variable using the <span class="function">sizeof</span>() operator.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   short</span> a;</pre>
                                            <pre class="code-line"><span class="var">   long</span> b;</pre>
                                            <pre class="code-line"><span class="var">   long long</span> c;</pre>
                                            <pre class="code-line"><span class="var">   long double</span> d;</pre>
                                            <br>
                                            <pre class="code-line"><span class="function">   printf</span> (<span class="char">"size of short = %d bytes\n", <span class="function">sizeof</span>(a)"</span>);</pre>
                                            <pre class="code-line"><span class="function">   printf</span> (<span class="char">"size of long = %d bytes\n", <span class="function">sizeof</span>(b)"</span>);</pre>
                                            <pre class="code-line"><span class="function">   printf</span> (<span class="char">"size of long long = %d bytes\n", <span class="function">sizeof</span>(c)"</span>);</pre>
                                            <pre class="code-line"><span class="function">   printf</span> (<span class="char">"size of long double = %d bytes\n", <span class="function">sizeof</span>(d)"</span>);</pre>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre>
                                            </code>
                                        </div>
                                    </div>


                            </div>
                        </div>
                </div> 
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">signed and unsigned</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">In C, <span class="var">signed</span> and <span class="var">unsigned   </span> are type modifiers. You can alter the data storage of a data type by using them. For example,</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">unsigned int</span> x;</pre>
                                            <pre class="code-line"><span class="var">int</span> y;</pre>
                                            </code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">Here, the variable <span class="hl">x</span> can hold only zero and positive values because we have used the <span class="var">unsigned</span> modifier.</p>
                                <p class="card-text f-16 m-l-50">Considering the size of <span class="var">int</span> is 4 bytes, variable <span class="hl">y</span> can hold values from <span class="hl">-2<sup>31</sup></span> to <span class="hl">2<sup>31</sup>-1</span> ,<br>
                                whereas variable <span class="hl">x</span> can hold values from <span class="hl">0</span> to <span class="hl">2<sup>31</sup>-1</span> .</p>
                            
                            </div>
                        </div>
                </div> 
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">Derived Data Types</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">Data types that are derived from fundamental data types are derived types. For example: arrays, pointers, function types, structures, etc.</p>
                                <p class="card-text f-16 m-l-50">Besides the ones discussed here, there are other data types defined in C programming such as:</p>
                                <ul class="card-text f-16 m-l-50">
                                    <li>bool Type</li>
                                    <li>Enumerated type</li>
                                    <li>Complex types</li>
                                </ul>
                                <p class="card-text f-16 m-l-50">We will learn about these data types in later tutorials.</p>
                            
                            </div>
                        </div>
                </div> 
            </div> <!-- end row-->

            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
        <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item m-r-50">
                        <a class="page-link" href="1-variables-constants.php" tabindex="-1">Previous Lesson</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="1-operator.php">Next Topic</a>
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