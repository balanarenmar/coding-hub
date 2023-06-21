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
    <title>{C} - Identifiers</title>
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
                                <li class="breadcrumb-item"><a href="#!">Key Words & Identifiers</a></li>
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
                            <h4 style="color: #FC3;">Key Words & Identifiers</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">
                               In this tutorial, you will learn about keywords; reserved words in C programming that are part of the syntax. </p>
                            <p class="f-16"> Also, you will learn about identifiers and how to name them.</p>
                            <i class="fas fa-key st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
                <!-- [ dark-layout ] end -->
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            <!--Character Set Start-->
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y">Character Set</h3><p class="card-text f-16 m-l-50 m-t-20">A character set is a set of alphabets, letters and some special characters that are valid in C language.</p></div>
                            <div class="card-body">
                                <h4 class="m-b-20 hov-blue">Alphabets</h4>
                                    <ul>
                                        <li><h5>Uppercase:</h5> 
                                            <pre>     <span class="f-18 black-hlight">A  B  C  D  E  F  G  H  I  J  K  L  M  N  O  P  Q  R  S  T  U  V  W  X  Y  Z</span></pre>
                                        </li>
                                        <li><h5>Lowercase:</h5>
                                            <pre>     <span class="f-18 black-hlight">a  b  c  d  e  f  g  h  i  j  k  l  m  n  o  p  q  r  s  t  u  v  w  x  y  z</span></pre>
                                        </li>
                                    </ul>
                                <hr><h4 class="m-b-20 hov-blue">Digits</h4>
                                    <pre>       <span class="f-18 black-hlight">0   1   2   3   4   5   6   7   8   9</span></pre>
                                <hr><h4 class="m-b-20 hov-blue">Special Characters</h4>
                                    <div class="col-sm-6 mx-auto">
                                       <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" ><caption>Special Characters in C Programming</caption>
                                            <tbody style="text-align: center; font-weight: bolder;"><tr><td data-toggle="tooltip" data-placement="top" title="comma">,</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="less-than">&lt;</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="greater-than">&gt;</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="period">.</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="underscore">_</td>
                                                </tr><tr><td data-toggle="tooltip" data-placement="bottom" title="open parenthesis">(</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="close parenthesis">)</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="semicolon">;</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="dollar sign">$</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="colon">:</td>
                                                </tr><tr><td data-toggle="tooltip" data-placement="bottom" title="percent">%</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="open bracket">[</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="close bracket">]</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="number sign">#</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="question mark">?</td>
                                                </tr><tr><td data-toggle="tooltip" data-placement="bottom" title="apostrophe">'</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="ampersand">&amp;</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="open braces">{</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="close braces">}</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="quotation mark">"</td>
                                                </tr><tr><td data-toggle="tooltip" data-placement="bottom" title="circumflex">^</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="exclamation mark">!</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="asterisk">*</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="slash">/</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="vertical bar">|</td>
                                                </tr><tr><td data-toggle="tooltip" data-placement="bottom" title="minus sign">-</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="back slash">\</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="tilde">~</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="plus sign">+</td>
                                                    <td data-toggle="tooltip" data-placement="bottom" title="space">&nbsp;</td>
                                                </tr></tbody></table>
                                        </div> 
                                    </div>
                                 <hr><h4 class="m-b-20 hov-blue">Escape Sequences</h4>
                                 <div class="row d-flex justify-content-center text-center">

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
                            </div>
                        </div>
                </div>
            </div>
            <!--Character Set End-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">C Keywords</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">Keywords are predefined, reserved words used in programming that have special meanings to the compiler. Keywords are part of the syntax and they cannot be used as an identifier.</p>
                                <p class="card-text f-16 m-l-50">As C is a case sensitive language, all keywords must be written in lowercase. Here is a list of all keywords allowed in ANSI C.</p>
                                <div class="row d-flex justify-content-center text-center">
                                    <div class="col-sm-6">
                                        <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                <tbody style="text-align: center; font-weight: bolder;" class="f-16">
                                                    <tr>
                                                        <td><code class="keyword hov-blue">auto</code></td>
                                                        <td><code class="keyword hov-blue">double</code></td>
                                                        <td><code class="keyword hov-blue">int</code></td>
                                                        <td><code class="keyword hov-blue">struct</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code class="keyword hov-blue">break</code></td>
                                                        <td><code class="keyword hov-blue">else</code></td>
                                                        <td><code class="keyword hov-blue">long</code></td>
                                                        <td><code class="keyword hov-blue">switch</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code class="keyword hov-blue">case</code></td>
                                                        <td><code class="keyword hov-blue">enum</code></td>
                                                        <td><code class="keyword hov-blue">register</code></td>
                                                        <td><code class="keyword hov-blue">typedef</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code class="keyword hov-blue">char</code></td>
                                                        <td><code class="keyword hov-blue">extern</code></td>
                                                        <td><code class="keyword hov-blue">return</code></td>
                                                        <td><code class="keyword hov-blue">union</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code class="keyword hov-blue">continue</code></td>
                                                        <td><code class="keyword hov-blue">for</code></td>
                                                        <td><code class="keyword hov-blue">signed</code></td>
                                                        <td><code class="keyword hov-blue">void</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code class="keyword hov-blue">do</code></td>
                                                        <td><code class="keyword hov-blue">if</code></td>
                                                        <td><code class="keyword hov-blue">static</code></td>
                                                        <td><code class="keyword hov-blue">while</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code class="keyword hov-blue">default</code></td>
                                                        <td><code class="keyword hov-blue">goto</code></td>
                                                        <td><code class="keyword hov-blue">sizeof</code></td>
                                                        <td><code class="keyword hov-blue">volatile</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code class="keyword hov-blue">const</code></td>
                                                        <td><code class="keyword hov-blue">float</code></td>
                                                        <td><code class="keyword hov-blue">short</code></td>
                                                        <td><code class="keyword hov-blue">unsigned</code></td>
                                                    </tr>
                                                </tbody>
                                        </table></div>
                                    </div>
                                    </div>
                                    <p class="card-text f-14 m-l-50">All these keywords, their syntax, and application will be discussed in their respective topics. </p>          
                            </div>
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">C Identifiers</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">Identifier refers to name given to entities such as variables, functions, structures etc.</p>
                                <p class="card-text f-16 m-l-50">Identifiers must be unique. They are created to give a unique name to an entity to identify it during the execution of the program. <br>For example:</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int</span> money;</pre>
                                            <pre class="code-line"><span class="var">int</span> accountBalance;</pre></code>
                                        </div>
                                    </div>
                                    <p class="card-text f-16 m-l-50">Here, <span class="hl">money</span> and <span class="hl">accountBalance</span> are identifiers.</p> 
                                    <p class="card-text f-16 m-l-50">Also remember, identifier names must be different from keywords. You cannot use <span class="var hl">int</span> as an identifier because <span class="var hl">int</span> is a keyword. </p> 
                                <hr>
                                <div class="row">
                                    
                                        <div class="col-md-12">
                                            <h4 class="m-l-25 m-t-10 text-info">Rules for naming Identifiers</h4>
                                            <ol class="m-l-50 m-t-20 f-16 text-white">
                                                <li class="m-b-10"> A valid identifier can have letters (both uppercase and lowercase letters), digits and underscores.</li>
                                                <li class="m-b-10">The first letter of an identifier should be either a letter or an underscore.</li>
                                                <li class="m-b-10"> You cannot use keywords like <span class="var hl">int</span>, <span class="var hl">while</span> etc. as identifiers.</li>
                                                <li class="m-b-10"> There is no rule on how long an identifier can be. However, you may run into problems in some compilers if the identifier is longer than 31 characters.</li>
                                            </ol>
                                            <p class="card-text f-16 m-l-50 m-t-25"> You can choose any name as an identifier if you follow the above rules. But it is good coding practice to give meaningful names to identifiers that make sense. </p>
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
                        <a class="page-link" href="1-getting_started.php" tabindex="-1">Previous Lesson</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="1-variables-constants.php">Next Topic</a>
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


    <!-- prism Js -->
    <script src="assets/js/plugins/prism.js"></script>

</body>

</html>