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
    <title>{C} - Preprocessors</title>
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
                                <li class="breadcrumb-item"><a href="#!">C Preprocessors</a></li>
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
                            <h4 style="color: #FC3;">C Preprocessor and Macros</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you will be introduced to c preprocessors, and you will learn to use #include, #define and conditional compilation with the help of examples.</p>
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
                            <p class="f-16">The C preprocessor is a macro preprocessor (allows you to define macros) that transforms your program before it is compiled. These transformations can be the inclusion of header file, macro expansions etc.</p>
                            <p class="f-16">All preprocessing directives begin with a <span class="hl">#</span> symbol. For example,</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">#define</span> PI 3.14</pre></code>
                                    </div>
                                </div> 
                            <p class="f-16">Some of the common uses of C preprocessor are:</p>
                            <br><hr>
                            <h4 class="m-b-20 m-l-50 hov-blue">Including Header Files: #include</h4>
                            <p class="f-16">The <span class="hl var">#include</span> preprocessor is used to include header files to C programs. For example,</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre></code>
                                    </div>
                                </div>
                            <p class="f-16">The <span class="hl head">&ltstdio.h&gt</span> is a header file. The <span class="hl var">#include</span> preprocessor directive replaces the above line with the contents of <span class="hl head">&ltstdio.h&gt</span> header file.</p>
                            <p class="f-16">That's the reason why you need to use <span class="hl var">#include <span class="head">&ltstdio.h&gt</span></span> before you can use functions like <span class="hl function">scanf()</span> and <span class="hl function">printf()</span></p>
                            <p class="f-16">You can also create your own header file containing function declaration and include it in your program using this preprocessor directive.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="char">"my_header.h"</span></pre></code>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y ">Macros using #define</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">A macro is a fragment of code that is given a name. You can define a macro in C using the <span class="hl var">#define</span> preprocessor directive.</p>
                                <p class="card-text f-16 m-l-50">Here's an example.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">#define</span> c 299792458  <span class="comnt">// speed of light</span></pre></code>
                                    </div>
                                </div>
                                <p class="card-text f-16 m-l-50">Here, when we use <span class="hl int">c</span>in our program, it is replaced with <span class="hl">299792458</span>.</p>
                                <br><hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 1: #define preprocessor</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="function">#define</span> PI 3.1415</pre><br>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   float</span> radius, area;</pre>
                                        <pre class="code-line"><span class="function">   printf</span> (<span class="char">"Enter the radius: "</span>);</pre>
                                        <pre class="code-line"><span class="function">   scanf</span> (<span class="function">"%f"</span>, &radius );</pre><br>
                                        <pre class="code-line"><span class="comnt">  // Notice, the use of PI</span></pre>
                                        <pre class="code-line">area = PI*radius*radius;</pre><br>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Area=%.2f"</span>,area>);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div>     
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y ">Function like Macros</h3></div>
                            <div class="card-body">
                            <p class="card-text f-16 m-l-50">You can also define macros that work in a similar way like a function call. This is known as function-like macros. For example,</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">#define</span> circleArea(r) (<span class="int">3.1415</span>*(r)*(r))</pre></code>
                                    </div>
                                </div>
                            <p class="card-text f-16 m-l-50">Every time the program encounters <span class="hl">circleArea(argument)</span>, it is replaced by <span class="hl">circleArea(argument)(3.1415*(argument)*(argument))</span>.</p>
                            <p class="card-text f-16 m-l-50">Suppose, we passed 5 as an argument then, it expands as below:</p>
                            <p class="card-text f-16 m-l-50"><span class="hl">circleArea</span>(<span class="hl int">5</span>)  expands to (<span class="hl int">3.1415</span>*<span class="hl int">5</span>*</span><span class="hl int">5</span>)</p>
                            <hr>
                            <h4 class="m-l-50 p-l-50 hov-blue">Example 2: Using #define preprocessor</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="function">#define</span> PI 3.1415</pre>
                                        <pre class="code-line"><span class="function">#define</span> circleArea(r) (PI*r*r)</pre><br>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   float</span> radius, area;</pre><br>
                                        <pre class="code-line"><span class="function">   printf</span> (<span class="char">"Enter the radius: "</span>);</pre>
                                        <pre class="code-line"><span class="function">   scanf</span> (<span class="function">"%f"</span>, &radius );</pre>
                                        <pre class="code-line">area = circleArea(radius);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Area=%.2f"</span>,area>);</pre><br>
                                        <pre class="code-line"><span class="var">      return</span> <span class="int">0</span>;<br>}</pre></code>
                                    </div>
                                </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y">Conditional Compilation</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50 m-t-20">In C programming, you can instruct preprocessor whether to include a block of code or not. To do so, conditional directives can be used.</p>
                                <p class="card-text f-16 m-l-50 m-t-20">It's similar to a <span class="hl var">if</span> statement with one major difference </p>
                                <p class="card-text f-16 m-l-50 m-t-20">The <span class="hl var">if</span> statement is tested during the execution time to check whether a block of code should be executed or not whereas, the conditionals are used to include (or skip) a block of code in your program before execution.</p><br><hr>
                                <h4 class="m-b-20 hov-blue">Uses of Conditional</h4>
                                    <ul class="f-16 m-l-50">
                                        <li>use different code depending on the machine, operating system</li>
                                        <li>compile same source file in two different programs</li>
                                        <li>to exclude certain code from the program but to keep it as reference for future purpose</li>
                                    </ul><br>
                                <h4 class="m-b-20 hov-blue">How to use conditional?</h4>
                                    <p class="card-text f-16 m-l-50 m-t-20">To use conditional, <span class="hl var">#ifdef</span>,<span class="hl var">#if</span>,<span class="hl var">#defined</span>,<span class="hl var">#else</span> and <span class="hl var">#elseif</span> directives are used.</p>
                                <hr>
                                <h4 class="m-b-20 hov-blue">#ifdef Directive</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">#ifdef</span> MACRO</pre>
                                        <pre class="code-line"><span class="comnt">  // conditional codes</span></pre>
                                        <pre class="code-line"><span class="var">#endif</span></pre></code>
                                    </div>
                                </div>
                                <p class="card-text f-16 m-l-50 m-t-20">Here, the conditional codes are included in the program only if <span class="hl">MACRO</span> is defined.</p>
                                <hr>
                                <h4 class="m-b-20 hov-blue">#if, #elif and #else Directive</h4></div>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">#if</span> expression</pre>
                                        <pre class="code-line"><span class="comnt">  // conditional codes</span></pre>
                                        <pre class="code-line"><span class="var">#endif</span></pre></code>
                                    </div>
                                </div>
                                <p class="card-text f-16 m-l-50">Here, <span class="hl">expression</span> is an expression of integer type (can be integers, characters, arithmetic expression, macros and so on).</p>
                                <p class="card-text f-16 m-l-50">The conditional codes are included in the program only if the <span class="hl">expression</span> is evaluated to a non-zero value.</p>
                                <p class="card-text f-16 m-l-50 m-t-20">The optional <span class="hl var">#else</span> directive can be used with <span class="hl var">#if</span> directive.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">#if</span> expression</pre>
                                            <pre class="code-line"><span class="comnt">  // conditional codes if expression is non-zero</span></pre>
                                            <pre class="code-line"><span class="var">#else</span></pre>
                                            <pre class="code-line"><span class="comnt">  // conditional codes if expression is 0</span></pre>
                                            <pre class="code-line"><span class="var">#endif</span></pre></code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50 m-t-20">You can also add nested conditional to your <span class="hl var">#if...#else</span> using <span class="hl var">#elif</span></p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">#if</span> expression</pre>
                                            <pre class="code-line"><span class="comnt">  // conditional codes if expression is non-zero</span></pre>
                                            <pre class="code-line"><span class="var">#elif</span> expression</pre>
                                            <pre class="code-line"><span class="comnt">  // conditional codes if expression is non-zero</span></pre>
                                            <pre class="code-line"><span class="var">#elif</span> expression</pre>
                                            <pre class="code-line"><span class="comnt">  // conditional codes if expression is non-zero</span></pre>
                                            <pre class="code-line"><span class="var">#else</span></pre>
                                            <pre class="code-line"><span class="comnt">  // conditional codes if expression is 0</span></pre>
                                            <pre class="code-line"><span class="var">#endif</span></pre></code>
                                        </div>

                                    </div>
                                <h4 class="m-b-20 m-l-50 hov-blue">#defined</h4>
                                <p class="card-text f-16 m-l-50 m-t-20">The special operator <span class="hl var">#defined</span> is used to test whether a certain macro is defined or not. It's often used with <span class="hl var">#if</span> directive.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">#if defined</span> BUFFER_SIZE <span class="opp">&&</span> BUFFER_SIZE >= <span class="int">2048</span></pre>
                                        <pre class="code-line"><span class="comnt">  // codes</span></pre></code>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>  <!--End Row-->
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">Predefined Macros</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50 m-t-20">Here are some predefined macros in C programming.</p>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="table-responsive">
                                        <table class="table table-xs table-hover table-dark" border="0" >
                                            <thead style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <th>Data Type</th>
                                                    <th>Format Specifier</th>
                                                </tr>
                                            </thead>
                                                <tbody style="text-align: center; font-weight: bolder;">
                                                    <tr>
                                                        <td><span class="hl">__DATE__</span></td>
                                                        <td>A string containing the current date</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl">__FILE__</span></td>
                                                        <td>A string containing the file name</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl">__LINE__</span></td>
                                                        <td>An integer representing the current line number</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl">__STDC__</span></td>
                                                        <td>An integer representing the current line number</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl">__TIME__</span></td>
                                                        <td>A string containing the current date.</td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                                <h4 class="m-b-20 hov-blue">Example 3: Using Macro</h4>
                                <p class="card-text f-16 m-l-50 m-t-20">The special operator <span class="hl var">#defined</span> is used to test whether a certain macro is defined or not. It's often used with <span class="hl var">#if</span> directive.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"File :%s\n"</span>, __FILE__);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"File :%s\n"</span>, __DATE__);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"File :%s\n"</span>, __TIME__);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"File :%d\n"</span>, __LINE__);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"File :%d\n"</span>, __STDC__);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">File :main.c</pre>
                                        <pre class="code-line">Date :Dec  3 2021</pre>
                                        <pre class="code-line">Time :18:07:06</pre>
                                        <pre class="code-line">Line :8</pre>
                                        <pre class="code-line">ANSI :1</pre></code>
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
                        <a class="page-link" href="8-enumeration.php" tabindex="-1">Previous Lesson</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="8-std-library.php">Next Topic</a>
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