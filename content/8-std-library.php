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
    <title>{C} - Standard Library</title>
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
                                <h5 class="m-b-10">Additional Topics</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-aperture"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Standard Library</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            
       
           
        <!-- [ Main Content ] start -->
            <!-- [ Head Content ] start -->
            <div class="row">
                
                <div class="col-sm-12">
                    <div class="card widget-statstic-card">
                        <div class="card-header">
                            <h4 style="color: #FC3;">C Standard Library Functions</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you'll learn about the standard library functions in C. More specifically, what are they, different library functions in C and how to use them in your program.</p>
                            <i class="feather icon-aperture st-icon bg-c-red"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ Body ] start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-body"><br>
                            <p class="f-16">C Standard library functions or simply C Library functions are inbuilt functions in C programming.</p>
                            <p class="f-16">The prototype and data definitions of these functions are present in their respective header files. To use these functions we need to include the header file in our program. For example,</p>
                            <p class="f-16">If you want to use the <span class="hl function">printf()</span> function, the header file <span class="hl head">stdio.h</span> should be included.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Catch me if you can."</span>);</pre></code>
                                    </div>
                                </div> 
                            <p class="f-16">
                               If you try to use <span class="hl function">printf()</span> without including the <span class="hl head">stdio.h</span> header file, you will get an error.</p>
                        </div>
                    </div>
                </div>
            </div> <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y">Advantages of Using C library functions</h3></div>
                            <div class="card-body">
                                <h4 class="m-b-20 hov-blue">1. They work</h4>
                                    <p class="card-text f-16 m-l-50 m-t-20">One of the most important reasons you should use library functions is simply because they work. These functions have gone through multiple rigorous testing and are easy to use.</p><br>
                                    <h4 class="m-b-20 hov-blue">2. The functions are optimized for performance</h4>
                                    <p class="card-text f-16 m-l-50 m-t-20">Since, the functions are "standard library" functions, a dedicated group of developers constantly make them better. In the process, they are able to create the most efficient code optimized for maximum performance.</p><br>
                                    <h4 class="m-b-20 hov-blue">3. It saves considerable development time</h4>
                                    <p class="card-text f-16 m-l-50 m-t-20">Since the general functions like printing to a screen, calculating the square root, and many more are already written. You shouldn't worry about creating them once again.</p><br>
                                    <h4 class="m-b-20 hov-blue">3. It saves considerable development time</h4>
                                    <p class="card-text f-16 m-l-50 m-t-20">Since the general functions like printing to a screen, calculating the square root, and many more are already written. You shouldn't worry about creating them once again.</p><br>
                                    <h4 class="m-b-20 hov-blue">4. The functions are portable</h4>
                                    <p class="card-text f-16 m-l-50 m-t-20">With ever-changing real-world needs, your application is expected to work every time, everywhere. And, these library functions help you in that they do the same thing on every computer.
                                    </p><br>

                                <hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example: Square root using sqrt() function </h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   float</span> num, root;</pre>
                                        <br>
                                        <pre class="code-line"><span class="function">   printf</span> (<span class="char">"Enter a number: "</span>);</pre>
                                        <pre class="code-line"><span class="function">   scanf</span> (<span class="string">"%f"</span>, &num);</pre><br>
                                        <pre class="code-line"><span class="comnt">  // Computes the square root of num and stores in root.</span></pre>
                                        <pre class="code-line">  root = <span class="char">sqrt</span>(num);</pre>
                                        <br>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Square root of %.2f = %.2f", num, root</span>);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre> </code>
                                    </div>
                                </div>
                                <p class="card-text f-16 m-l-50">When you run the program, the output will be:</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">Enter a number: 12</pre>
                                        <pre class="code-line">Square root of 12.00 = 3.46</pre></code>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div> <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y">Library Functions in Different Header Files</h3></div>
                            <div class="card-body">
                                 <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="table-responsive">
                                            <table class="table table-xs table-hover table-dark" border="0" >
                                                <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>C Header Files</th>
                                                            <th>Description</th>
                                                        </tr>
                                                </thead>
                                                <tbody style="text-align: center; font-weight: bolder;">
                                                    <tr>
                                                        <td><span class="function f-16">&ltassert.h&gt</span></td>
                                                        <td>Program assertion functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&ltctype.h&gt</span></td>
                                                        <td>Character type functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&ltmath.h&gt</span></td>
                                                        <td>Mathematics functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&ltsetjmp.h&gt</span></td>
                                                        <td>Jump functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&ltsignal.h&gt</span></td>
                                                        <td>Signal handling functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&ltstdarg.h&gt</span></td>
                                                        <td>Variable arguments handling functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&ltstdio.h&gt</span></td>
                                                        <td>Standard Input/Output functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&ltstdlib.h&gt</span></td>
                                                        <td>Standard Utility functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&ltstring.h&gt</span></td>
                                                        <td>String handling functions</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="function f-16">&lttime.h&gt</span></td>
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
            </div> <!-- End row -->

        <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
        <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="8-preprocessors.php">Previous Lesson</a>
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