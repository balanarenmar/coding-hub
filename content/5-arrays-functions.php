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
    <title>{C} - Arrays and Functions</title>
    
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
                                <li class="breadcrumb-item"><i class="feather icon-codepen"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Arrays</a></li>
                                <li class="breadcrumb-item"><a href="#!">Arrays and Functions</a></li>
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
                            <h3 style="color: #FC3;">Pass arrays to a function in C</h3>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you'll learn to pass arrays (both one-dimensional and multidimensional arrays) to a function in C programming with the help of examples</p>
                            <p class="f-16">In C programming, you can pass an entire array to functions. Before we learn that, let's see how you can pass individual elements of an array to functions.</p><br>

                            <i class="feather icon-codepen st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y">Initializing a multidimensional array</h3>
                                    <p class="card-text f-16 m-l-50">Here is how you can initialize two-dimensional and three-dimensional arrays:</p>
                                    <div class="col-sm-8  mx-auto"> 
                                    <div class="snippet"><code>
                                            <pre class="code-line">// Different ways to initialize two-dimensional array</pre>
                                            <pre class="code-line"><span class="var">int</span> c<span class="int">[2][3]</span>= {{<span class="int">1, 3, 0</span>}, {<span class="int">-1, 5, 9</span>}};</pre>
                                            <pre class="code-line"><span class="var">int</span> c<span class="int">[][3]</span>= {{<span class="int">1, 3, 0</span>}, {<span class="int">-1, 5, 9</span>}};</pre>
                                            <pre class="code-line"><span class="var">int</span> c<span class="int">[2][3]</span>= {<span class="int">1, 3, 0, -1, 5, 9</span>};</pre></code>
                                    </div>
                                    </div>
                            </div>
                        <div class="card-body">

                             <h4 style="color: #FC3;">Pass Individual Array Elements</h4>                                    
                                    <p class="f-16">Passing array elements to a function is similar to <font color="cyan">passing variables to a function.</font></p><br>
                                    <h4 style="color: #FC3;">Example 1: Pass Individual Array Elements</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove the space from < stdio.h></pre>
                                            <pre class="code-line"><span class="var">#include</span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">void</span><span class="int">display</span>(<span class="var">int</span> age1, <span class="var">int</span> age2); {</pre>
                                            <pre class="code-line">  <span class="var">printf</span>("%d\n", age1);</pre>
                                            <pre class="code-line">  <span class="var">printf</span>("%d\n", age2);</pre>
                                            <pre class="code-line">}</pre></code><br>
                                            <pre class="code-line"><span class="var">int</span><span class="int">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">int</span>ageArray[] = {<span class="int">2, 8, 4, 12</span>};</pre><br>
                                            <pre class="code-line">  // pass second and third elements to display()</pre>
                                            <pre class="code-line">  display(ageArray[<span class="int">1</span>], ageArray[<span class="int">2</span>]);</pre>
                                            <pre class="code-line"><span class="var">  return</span>0</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    <h4 style="color: #FC3;">Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">8</pre>
                                            <pre class="code-line">4</pre></code>
                                    </div>
                                    <p class="f-16">Here, we have passed array parameters to the <span class="var hl">display()</span> function in the same way we pass variables to a function.</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// pass second and third elements to display()</pre>
                                            <pre class="code-line">display(ageArray[<span class="int">1</span>], ageArray[<span class="int">2</span>]);</pre></code>
                                    </div>
                                    <p class="f-16">We can see this in the function definition, where the function parameters are individual variables:</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">void</span> <span class="int">display</span>(<span class="var">int</span>age1, <span class="var">int</span>age2){</pre>
                                            <pre class="code-line">  // code</pre>
                                            <pre class="code-line">  }</pre></code>
                                    </div>
                                    <h4 style="color: #FC3;">Example 2: Pass Arrays to Functions</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">  // Program to calculate the sum of array elements by passing to a function</pre>
                                            <pre class="code-line">  // remove the space from < stdio.h></pre><br>
                                            <pre class="code-line"><span class="var">#include</span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">float</span><span class="int">calcultaeSum</span>(<span class="var">float</span>num1[]);</pre><br>
                                            <pre class="code-line"><span class="var">int</span><span class="int">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">  float</span>result, num[] = {<span class="int">23.4, 55, 22.6, 3, 40.5, 18</span>};</pre><br>
                                            <pre class="code-line">  // num array is passed to calculateSum()</pre>
                                            <pre class="code-line">  result = calculateSum(num);</pre>
                                            <pre class="code-line">  <span class="var">printf</span>("Result = %.2f", result);</pre>
                                            <pre class="code-line"><span class="var">  return</span>0</pre>
                                            <pre class="code-line">    }</pre><br>
                                            <pre class="code-line"><span class="var">  float</span>calculateSum<<span class="var">float</span>num[]) {</pre>
                                            <pre class="code-line"><span class="var">  float</span>sum =<span class="var">0.0</span>;</pre><br>
                                            <pre class="code-line"><span class="var">  for</span>(<span class="int">int</span>i = 0; i < 6; ++i) {</pre>
                                            <pre class="code-line">    }</pre><br>
                                            <pre class="code-line"><span class="var">  return</span>sum;</pre>
                                            <pre class="code-line">  }</pre></code>
                                    </div>
                                    <h4 style="color: #FC3;">Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">Result = 162.50</pre></code>                                            
                                    </div>
                                    <p class="f-16">To pass an entire array to a function, only the name of the array is passed as an argument.</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line">result = calculateSum(num);</pre></code>
                                    </div>
                                    <p class="f-16">However, notice the use of <span class="var hl">[]</span> in the function definition.</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">float</span>calculateSum(<span class="var">float</span>num[]) {</pre>
                                            <pre class="code-line">  ... ..</pre>
                                            <pre class="code-line">  }</pre></code>
                                    </div>
                                    <p class="f-16">This informs the compiler that you are passing a one-dimensional array to the function.</p>
                        </div>
                    </div>
                </div>
               
            </div> <!-- [ end row ]  -->


            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            <!--Character Set Start-->
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y">Pass Multidimensional Arrays to a Function</h3>
                                    <p class="card-text f-16 m-l-50">To pass multidimensional arrays to a function, only the name of the array is passed to the function (similar to one-dimensional arrays).</p>
                            </div>
                            <div class="card-body">
                                    <h4 class="m-b-20 hov-blue">Example 3: Pass two-dimensional arrays</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space from < stdio.h></pre>
                                            <pre class="code-line"><span class="var">#include </span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">void </span><span class="int">displayNumbers</span>(<span class="var">int</span> num[<span class="int">2</span>][<span class="int">2</span>]);</pre><br>
                                            <pre class="code-line"><span class="var">int</span><span class="int"> main</span>() {</pre>
                                            <pre class="code-line"><span class="var">  int</span> num[<span class="int">2</span>][<span class="int">2</span>];</pre>
                                            <pre class="code-line">  <span class="var">  printf</span>("Enter 4 numbers:\n");</pre>
                                            <pre class="code-line"><span class="var">  for</span>(<span class="int">int</span> i = 0; i < 2; ++i) {</pre>
                                            <pre class="code-line"><span class="var">    for</span>(<span class="int">int</span> j = 0; j < 2; ++j) {</pre>
                                            <pre class="code-line">  <span class="var">    scanf</span>("%d", &num[i][j]);</pre></code>
                                            <pre class="code-line">    }</pre>
                                            <pre class="code-line">  }</pre><br>
                                            <pre class="code-line">// pass multi-dimensional array to a function</pre>
                                            <pre class="code-line">displayNumbers(num);</pre><br>
                                            <pre class="code-line"><span class="var">  return</span>0;</pre>
                                            <pre class="code-line">}</pre><br>
                                            <pre class="code-line"><span class="var">void </span><span class="int">displayNumbers</span>(<span class="var">int</span> num[<span class="int">2</span>][<span class="int">2</span>]) {</pre>
                                            <pre class="code-line">  <span class="var">  printf</span>("Displaying:\n");</pre>
                                            <pre class="code-line"><span class="var">  for</span>(<span class="int">int</span> i = 0; i < 2; ++i) {</pre>
                                            <pre class="code-line"><span class="var">    for</span>(<span class="int">int</span> j = 0; j < 2; ++j) {</pre>
                                            <pre class="code-line">  <span class="var">      printf</span>("%d\n", num[i][j]);</pre>
                                            <pre class="code-line">    }</pre>
                                            <pre class="code-line">  }</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    <h4 style="color: #FC3;">Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">Enter 4 numbers:</pre>
                                            <pre class="code-line">2</pre>
                                            <pre class="code-line">3</pre>                                         
                                            <pre class="code-line">4</pre>
                                            <pre class="code-line">5</pre>
                                            <pre class="code-line">Displaying</pre>
                                            <pre class="code-line">2</pre>
                                            <pre class="code-line">3</pre>                                      
                                            <pre class="code-line">4</pre>
                                            <pre class="code-line">5</pre></code>
                                    </div>
                                    <p class="f-16">Notice the parameter <span class="var hl">int num[2][2]</span>in the function prototype and function definition:</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// function prototype</pre>
                                            <pre class="code-line"><span class="var">void </span>displayNumbers(<span class="var">int </span>num[<span class="int">2</span>][<span class="int">2</span>]);</pre></code>
                                    </div>
                                    <p class="card-text f-16 m-l-50">This signifies that the function takes a two-dimensional array as an argument. We can also pass arrays with more than 2 dimensions as a function argument.</p>
                                    <p class="card-text f-16 m-l-50">When passing two-dimensional arrays, it is not mandatory to specify the number of rows in the array. However, the number of columns should always be specified.</p>
                                    <p class="card-text f-16 m-l-50">For example,</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">void </span>displayNumbers(<span class="var">int </span>num[][<span class="int">2</span>]);</pre>
                                            <pre class="code-line">// code</pre>
                                            <pre class="code-line">}</pre></code>
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
                            <a class="page-link" href="5-multidimen-arrays.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="quiz-5.php">Take Chapter 5 Quiz</a>
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