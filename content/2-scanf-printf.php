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
    <title>{C} - printf() and scanf()</title>
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

<body class="background-img-5 ">
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
                                <h5 class="m-b-10">Chapter 2</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-folder"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Standard I/O</a></li>
                                <li class="breadcrumb-item"><a href="#!">scanf() and printf()</a></li>
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
                            <h4 style="color: #FC3;">Formatted Input/Ouput</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">
                               In this tutorial, you will learn how to use <span class="function hl">scanf()</span> function to take input from the user,<br>and <span class="function hl">printf()</span> function to display output to the user.</p>
                            <i class="feather icon-corner-down-left st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] start -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">C Output</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">In C programming, <span class="hl function">printf()</span> is one of the main output function. The function sends formatted output to the screen. For example,</p>
                            <br><hr>
                            <h4 class="m-b-20 m-l-50 hov-blue">Example 1: C Output</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="comnt">  // Displays the string inside quotations</span></pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"C Programming"</span>);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">C Programming</pre></code>
                                    </div>
                                </div>
                            <h4 class="m-b-20 m-l-50 hov-blue">How does this program work?</h4>
                                <ul class="f-16 m-l-50">
                                    <li>All valid C programs must contain the <span class="hl function">main()</span> function. The code execution begins from the start of the <span class="hl function">main()</span> function.</li>
                                    <li>The <span class="hl function">printf()</span> is a library function to send formatted output to the screen. The function prints the string inside quotations.</li>
                                    <li>To use <span class="hl function">printf()</span> in our program, we need to include <span class="hl head">stdio.h</span> header file using the <span class="hl function">#include <span class="head">&ltstdio.h&gt</span></span> statement.</li>
                                    <li>The <span class="hl"><span class="var">return</span> <span class="int">0</span></span> statement inside the <span class="hl function">main()</span> function is the "Exit status" of the program. It's optional.
                                    </li>
                                </ul><br>
                                <hr>

                                <h4 class="m-b-20 m-l-50 hov-blue">Example 2: Integer Output</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   int</span> testInteger = <span class="int">5</span>;</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Number = %d"</span>, testInteger);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                 </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                         <pre class="code-line">Number = 5</pre></code>
                                    </div>
                                </div>
                            <p class="card-text f-16 m-l-50">We use <span class="hl">%d</span> format specifier to print <span class="hl var">int</span>types. Here, the <span class="hl">%d</span> inside the quotations will be replaced by the value of <span class="hl">testInteger</span></p>

                            <hr>
                            <h4 class="m-b-20 m-l-50 hov-blue">Example 3: float and double Output</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   float</span> number1 = <span class="int">13.5</span>;</pre>
                                        <pre class="code-line"><span class="var">   double</span> number2 = <span class="int">12.4</span>;</pre>
                                        <br>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"number1 = %f\n"</span>, number1);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"number2 = %lf"</span>, number2);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                 </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                         <pre class="code-line">number1 = 13.500000</pre>
                                         <pre class="code-line">number2 = 12.400000</pre></code>
                                    </div>
                                </div>
                            <p class="card-text f-16 m-l-50">To print <span class="hl var">float</span> , we use <span class="hl">%f</span>format specifier. Similarly, we use <span class="hl">%lf</span> to print <span class="hl var">double</span> values.</p>

                            <hr>
                            <h4 class="m-b-20 m-l-50 hov-blue">Example 4: Print Characters</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   char</span> chr = <span class="int">'a'</span>;</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"character = %c"</span>,  chr);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                 </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                         <pre class="code-line">character = a</pre></code>
                                    </div>
                                </div>
                            <p class="card-text f-16 m-l-50">To print <span class="hl var">char</span> , we use <span class="hl">%c</span>format specifier.</p>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">C Input</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">In C programming, <span class="hl function">scanf()</span> is one of the commonly used function to take input from the user. The <span class="hl function">scanf()</span> function reads formatted input from the standard input such as keyboards.</p>
                            <hr><br>
                            <h4 class="m-b-20 m-l-50 hov-blue">Example 5: Integer Input/Output</h4>
                            <div class="col-sm-8  mx-auto">
                                <div class="snippet"><code>
                                    <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                    <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                    <pre class="code-line"><span class="var">   int</span> testInteger;</pre>
                                    <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Enter an integer: "</span>);</pre>
                                    <pre class="code-line"><span class="function">   scanf</span>(<span class="char">"%d"</span>,  &testInteger);</pre>
                                    <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Number = %d"</span>,  testInteger);</pre>
                                    <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                    <pre class="code-line">}</pre></code>
                                </div>
                            </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                         <pre class="code-line">Enter an integer: 4</pre>
                                         <pre class="code-line">Number = 4</pre></code>
                                    </div>
                                </div>
                                <p class="card-text f-16 m-l-50">Here, we have used <span class="hl">%d</span> format specifier inside the <span class="hl function">scanf()</span> function to take <span class="hl var">int</span> input from the user. When the user enters an integer, it is stored in the <span class="hl">testInteger</span> variable.</p>
                                <div class="col-sm-8">
                                    <div class="card social-widget-card">
                                        <div class="card-body bg-dark">
                                            <blockquote class="blockquote mb-0">
                                            <p class="f-14 m-l-25">Notice, that we have used <span class="hl">&testInteger</span> inside <span class="hl function">scanf()</span> gets the address of <span class="hl">testInteger</span>, and the value entered by the user is stored in that address.</p>
                                            </blockquote>
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                             <h4 class="m-b-20 m-l-50 hov-blue">Example 6: Float and Double Input/Output</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   float</span> num1;</pre>
                                        <pre class="code-line"><span class="var">   double</span> num2;</pre>
                                        <br>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Enter a number: "</span>);</pre>
                                        <pre class="code-line"><span class="function">   scanf</span>(<span class="char">"%f"</span>, &num1);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Enter another number: "</span>);</pre>
                                        <pre class="code-line"><span class="function">   scanf</span>(<span class="char">"%lf"</span>, &num2);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"num1 = %f\n"</span>, num1);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"num2 = %lf"</span>, num2);</pre>
                                        <br>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                 </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                         <pre class="code-line">Enter a number: 12.523</pre>
                                         <pre class="code-line">Enter another number: 10.2</pre>
                                         <pre class="code-line">num1 = 12.523000</pre>
                                         <pre class="code-line">num2 = 10.200000</pre></code>
                                    </div>
                                </div>
                            <p class="card-text f-16 m-l-50">We use <span class="hl">%f</span> and <span class="hl">%f</span>format specifier for <span class="hl var">float</span> and <span class="hl var">double</span> respectively.</p>

                            <hr>
                            <h4 class="m-b-20 m-l-50 hov-blue">Example 7: C Character I/O</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   char</span> chr;</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Enter a character: "</span>);</pre>
                                        <pre class="code-line"><span class="function">    scanf</span>(<span class="char">"%c"</span>, &chr);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"You entered %c."</span>, chr);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                 </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                         <pre class="code-line">Enter a character: g</pre>
                                         <pre class="code-line">You entered g</pre></code>
                                    </div>
                                </div>
                            <p class="card-text f-16 m-l-50">When a character is entered by the user in the above program, the character itself is not stored. Instead, an integer value (ASCII value) is stored.<br>
                            And when we display that value using<span class="hl">%c</span> text format, the entered character is displayed. If we use <span class="hl">%d</span> to display the character, it's ASCII value is printed.</p>

                            <hr>
                            <h4 class="m-b-20 m-l-50 hov-blue">Example 8: ASCII Value</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   char</span> chr;</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Enter a character: "</span>);</pre>
                                        <pre class="code-line"><span class="function">   scanf</span>(<span class="char">"%c"</span>, &chr);</pre><br>
                                        <pre class="code-line"><span class="comnt">  // When %c is used, a character is displayed</span></pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"You entered %c.\n"</span>, chr);</pre><br>
                                        <code><pre class="code-line"><span class="comnt">  // When %d is used, ASCII value is displayed</span></pre></code>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"ASCII value is %d."</span>, chr);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">Enter a character: g</pre>
                                        <pre class="code-line">You entered g.</pre>
                                        <pre class="code-line">ASCII value is 103.</pre></code>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                                <h3 class="yellow-head un-y">I/O Multiple Values</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">Here's how you can take multiple inputs from the user and display them.</p>

                            <div class="col-sm-8  mx-auto">
                                <div class="snippet"><code>
                                    <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                    <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                    <pre class="code-line"><span class="var">   int</span> a;</pre>
                                    <pre class="code-line"><span class="var">   float</span> b;</pre><br>
                                    <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Enter integer and then a float: "</span>);</pre><br>
                                    <pre class="code-line"><span class="comnt">  // Taking multiple inputs</span></pre>
                                    <pre class="code-line"><span class="function">   scanf</span>(<span class="char">"%d%f"</span>, &a, &b);</pre><br>
                                    <pre class="code-line"><span class="function">   printf</span>(<span class="char">"You entered %d and %f"</span>, a, b);</pre>
                                    <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                    <pre class="code-line">}</pre></code>
                                </div>
                            </div>
                            <br>
                            <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">Enter integer and then a float: -3</pre>
                                        <pre class="code-line">3.4</pre>
                                        <pre class="code-line">You entered -3 and 3.400000</pre></code>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">Format Specifiers for I/O</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">As you can see from the above examples, we use</p>
                                <ul class="f-16 m-l-50">
                                    <li>%d for <span class="var">int</span></li>
                                    <li>%f for <span class="var">float</span></li>
                                    <li>%lf for <span class="var">double</span></li>
                                    <li>%c for <span class="var">char</span></li>
                                </ul>
                            <p class="card-text f-16 m-l-50">Here's a list of commonly used C data types and their format specifiers.</p>

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
                                                        <td><span class="hl var">int</span></td>
                                                        <td>%d</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">char</span></td>
                                                        <td>%c</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">float</span></td>
                                                        <td>%f</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">double</span></td>
                                                        <td>%lf</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">short int</span></td>
                                                        <td>%hd</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">unsigned int</span></td>
                                                        <td>%u</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">long int</span></td>
                                                        <td>%li</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">long long int</span></td>
                                                        <td>%lli</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">unsigned long int</span></td>
                                                        <td>%lu</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">unsigned long long int</span></td>
                                                        <td>%llu</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">signed char</span></td>
                                                        <td>%c</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">unsigned char</span></td>
                                                        <td>%c</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="hl var">long double</span></td>
                                                        <td>%Lf</td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>
                             </div>
                        </div>
                    </div>
            </div>  <!--End Row-->
            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
            <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item m-r-50">
                            <a class="page-link" href="2-gets-puts.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="quiz-2.php">Take Chapter 2 Quiz</a>
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