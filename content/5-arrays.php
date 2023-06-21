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
    <title>{C} - Arrays</title>
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

<body class="background-img-2 ">
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
                                <h5 class="m-b-10">Chapter 5</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-square"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Arrays</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
       <div class="row">
                <div class="col-sm-12">
                    <div class="card widget-statstic-card">
                        <div class="card-header">
                            <h4 style="color: #FC3;">C Programming Arrays</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you will learn to work with arrays. You will learn to declare, initialize and access elements of an array with the help of examples.</p>
                            <p class="f-16">An array is a variable that can store multiple values. For example, if you want to store 100 integers, you can create an array for it.</p>
                             <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int</span> data<span class="int">[100]</span>;</pre></code>
                                        </div>
                                    </div>
                            <i class="feather icon-square st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>  <!-- [ end row ] -->

                        <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y">How to declare an array?</h3>
                                <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">datatype</span> arrayName<span class="int">[arraySize]</span>;</pre></code>
                                </div>
                                    <p class="card-text f-16 m-l-50">For example:</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">float</span> mark<span class="int">[5]</span>;</pre></code>
                                    </div>
                                    <p class="card-text f-16 m-l-50">Here, we declared an array, <span class="var hl">mark</span>, of floating-point type. And its size is 5. Meaning, it can hold 5 floating-point values.</p>
                                    <p class="card-text f-16 m-l-50">It's important to note that the size and type of an array cannot be changed once it is declared.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-header"><h3 class="yellow-head un-y">Access Array Elements</h3>
                                <p class="card-text f-16 m-l-50">You can access elements of an array by indices.</p>
                                <p class="card-text f-16 m-l-50">Suppose you declared an array <span class="var hl">mark</span> as above. The first element is <span class="var hl">mark[0]</span>, the second element is <span class="var hl">mark[1]</span> and so on.</p>
                                    <div class="col-sm-8  mx-auto">                                        
                                        <div class="snippet"><code>
                                            <pre class="code-line">mark[0] mark[1] mark[2] mark[3] mark[4]</pre></code>
                                            <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                                            <p class="card-text f-16 m-l-50">(Declare an array)</p>
                                        </div>
                                    </div>
                                    </div>
                                <h4 class="m-b-20 hov-blue">Few keynotes:</h4>
                                <ul class="card-text f-16 m-l-50">
                                    <li>Arrays have 0 as the first index, not 1. In this example, <span class="var hl">mark[0]</span> is the first element.</li>
                                    <li>If the size of an array is <span class="var hl">n</span>, to access the last element, the <span class="var hl">n-1</span> index is used. In this example, <span class="var hl">mark[4]</span>.</li>
                                    <li>Suppose the starting address of <span class="var hl">mark[0]</span> is <b>2120d.</b> Then, the address of the <span class="var hl">mark[1]</span> will be <b>2124d. </b>Similarly, the address of <span class="var hl">mark[2]</span> will be <b>2128d</b> and so on. This is because the size of a <span class="var hl">float</span> is 4 bytes.</li>
                                </ul>
                                <hr>
                                <h4 class="m-b-20 hov-blue">How to initialize an array?</h4>
                                    <p class="card-text f-16 m-l-50">It is possible to initialize an array during declaration. For example,</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int</span> mark<span class="int">[5]</span>= {<span class="int">19</span>, <span class="int">10</span>, <span class="int">8</span>, <span class="int">17</span>, <span class="int">9</span>};</pre></code>
                                    </div>
                                    <p class="card-text f-16 m-l-50">You can also initialize an array like this.</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int</span> mark<span class="int">[]</span>= {<span class="int">19</span>, <span class="int">10</span>, <span class="int">8</span>, <span class="int">17</span>, <span class="int">9</span>};</pre></code>
                                    </div>
                                    <p class="card-text f-16 m-l-50">Here, we haven't specified the size. However, the compiler knows its size is 5 as we are initializing it with 5 elements.</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line">mark[0] mark[1] mark[2] mark[3] mark[4]</pre>
                                            <pre class="code-line">  19      10      8       17      9</pre></code><br>
                                            <p class="card-text f-16 m-l-50">Initialize an array</p>
                                        </div>
                                    <p class="card-text f-16 m-l-50">Here</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line">mark[0] is equal to 19</pre>
                                            <pre class="code-line">mark[1] is equal to 10</pre>
                                            <pre class="code-line">mark[2] is equal to 8</pre>
                                            <pre class="code-line">mark[3] is equal to 17</pre>
                                            <pre class="code-line">mark[4] is equal to 9</pre></code>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Input and Output Array Elements</h4>
                                    <p class="card-text f-16 m-l-50">Here's how you can take input from the user and store it in an array element.</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// take input and store it in the 3rd element</pre>
                                            <pre class="code-line"><span class="var">scanf</span>(<span class="int">"%d", &mark[2]</span>);</pre>
                                            <br>
                                            <pre class="code-line">// take input and store it in the ith element</pre>
                                            <pre class="code-line"><span class="var">scanf</span>(<span class="int">"%d", &mark[i-1]</span>);</pre></code>
                                    </div>
                                    <p class="card-text f-16 m-l-50">Here's how you can print an individual element of an array.</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// print the first element of the arra</pre>
                                            <pre class="code-line"><span class="var">printf</span>(<span class="int">"%d", mark[0]</span>);</pre>
                                            <br>
                                            <pre class="code-line">// print the third element of the array</pre>
                                            <pre class="code-line"><span class="var">scanf</span>(<span class="int">"%d", mark[2]</span>);</pre>
                                            <br>
                                            <pre class="code-line">// print ith element of the array</pre>
                                            <pre class="code-line"><span class="var">scanf</span>(<span class="int">"%d", mark[i-1]</span>);</pre></code>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Example 1: Array Input/Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space in < stdio.h></pre>
                                            <pre class="code-line">// Program to take 5 values from the user and store them in an array</pre>
                                            <pre class="code-line">// Print the elements stored in the array</pre>
                                            <pre class="code-line">#include<span class="var">< stdio.h></span></pre>
                                            <pre class="code-line"><span class="var">int </span><span class="int">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">  int </span>values[<span class="int">5</span>]</pre>
                                            <br>
                                            <pre class="code-line">  printf(<span class="var">"Enter 5 integers: "</span>);</pre><br>
                                            <pre class="code-line">  // taking input and storing it in an array</pre>
                                            <pre class="code-line"><span class="var">  for</span>(<span class="var">int </span>i = <span class="int">0</span>; i < <span class="int">5</span>; ++i) {</pre>
                                            <pre class="code-line">    scanf(<span class="var">"%d", </span>&values[i]);</pre>
                                            <pre class="code-line">  }</pre>
                                            <br>
                                            <pre class="code-line">  printf(<span class="var">"Displaying integers: "</span>);</pre><br>
                                            <pre class="code-line">  // printing elements of an array</pre>
                                            <pre class="code-line"><span class="var">  for</span>(<span class="var">int </span>i = <span class="int">0</span>; i < <span class="int">5</span>; ++i) {</pre>
                                            <pre class="code-line">    printf(<span class="var">"%d"\n, </span>values[i]);</pre>
                                            <pre class="code-line">  }</pre>
                                            <pre class="code-line">  <span class="var">return</span> 0;</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">Enter 5 integers: 1</pre>
                                            <pre class="code-line">-3</pre>
                                            <pre class="code-line">34</pre>
                                            <pre class="code-line">0</pre>
                                            <pre class="code-line">3</pre>
                                            <pre class="code-line">Displaying integers: 1</pre>
                                            <pre class="code-line">-3</pre>
                                            <pre class="code-line">34</pre>
                                            <pre class="code-line">0</pre>
                                            <pre class="code-line">3</pre></code>
                                    </div>
                                    <p class="card-text f-16 m-l-50">Here, we have used a <span class="var hl">for</span> loop to take 5 inputs from the user and store them in an array. Then, using another <span class="var hl">for</span> loop, these elements are displayed on the screen.</p><br>
                                    <h4 class="m-b-20 hov-blue">Example 2: Calculate Average</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space in < stdio.h></pre>
                                            <pre class="code-line">// Program to find the average of n numbers using arrays</pre><br>
                                            <pre class="code-line">#include<span class="var">< stdio.h></span></pre>
                                            <pre class="code-line"><span class="var">int </span><span class="int">main</span>()</pre>
                                            <pre class="code-line">  }</pre>
                                            <pre class="code-line"><span class="var">  int </span>marks[<span class="int">10</span>] i, n, sum = <span class="int">0</span>, average;</pre>
                                            <br>
                                            <pre class="code-line">    printf(<span class="var">"Enter number of elements: "</span>);</pre>
                                            <pre class="code-line">    scanf(<span class="var">"%d"</span>, &n);</pre>
                                            <br>
                                            <pre class="code-line"><span class="var">    for</span>(i = <span class="int">0</span>; i < n; ++i)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line">      printf(<span class="var">"Enter number%d: "</span>, i+1);</pre>
                                            <pre class="code-line">      scanf(<span class="var">"%d"</span>, &marks[i]);</pre><br>
                                            <pre class="code-line">    // adding integers entered by the user to the sum variable</pre>
                                            <pre class="code-line">    sum += marks[i];</pre>
                                            <pre class="code-line">    }</pre><br>
                                            <pre class="code-line">  average = sum/n;</pre>
                                            <pre class="code-line">  printf(<span class="var">"Average = %d",</span> average);</pre><br>
                                            <pre class="code-line"><span class="var">  return </span>0;</pre></code>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">Enter n: 5</pre>
                                            <pre class="code-line">Enter number1: 45</pre>
                                            <pre class="code-line">Enter number2: 35</pre>
                                            <pre class="code-line">Enter number3: 38</pre>
                                            <pre class="code-line">Enter number4: 31</pre>
                                            <pre class="code-line">Enter number5: 49</pre>
                                            <pre class="code-line">Average = 39</pre></code>
                                    </div>
                                    <p class="card-text f-16 m-l-50">Here, we have computed the average of <span class="var hl">n</span>  numbers entered by the user.</p><br>
                                    <h4 class="m-b-20 hov-blue">Access elements out of its bound!</h4>
                                    <p class="card-text f-16 m-l-50">Suppose you declared an array of 10 elements. Let's say,</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line">int testArray[10];</pre></code>
                                    </div>
                                    <p class="card-text f-16 m-l-50">You can access the array elements from <span class="var hl">testArray[0]</span>to <span class="var hl">testArray[9]</span></p>
                                    <p class="card-text f-16 m-l-50">Now let's say if you try to access <span class="var hl">testArray[12]</span>. The element is not available. This may cause unexpected output (undefined behavior). Sometimes you might get an error and some other time your program may run correctly.</p>
                                    <p class="card-text f-16 m-l-50">Hence, you should never access elements of an array outside of its bound.</p>
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
                            <a class="page-link" href="4-storage-class.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="5-multidimen-arrays.php">Next Topic</a>
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