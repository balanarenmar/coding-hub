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
    <title>{C} - Multidimensional Arrays</title>
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
                                <li class="breadcrumb-item"><i class="feather icon-box"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Arrays</a></li>
                                <li class="breadcrumb-item"><a href="#!">Multi-dimensional Arrays</a></li>
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
                            <h4 style="color: #FC3;">C Multidimensional Arrays</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you will learn to work with multidimensional arrays (two-dimensional and three-dimensional arrays) with the help of examples.</p>
                            <p class="f-16">In C programming, you can create an array of arrays. These arrays are known as multidimensional arrays. For example,</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">float</span> x<span class="int">[3]</span><span class="int">[4]</span>;</pre></code>
                                        </div>
                                    </div>
                                    <p class="f-16">Here, <span class="var hl">x</span> is a two-dimensional (2d) array. The array can hold 12 elements. You can think the array as a table with 3 rows and each row has 4 columns.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">        Column 1   Column 2   Column 3   Column 4<br>Row 1   x[0][0]    x[0][1]    x[0][2]    x[0][3]<br>Row 2   x[1][0]    x[1][1]    x[1][2]    x[1][3]<br>Row 3   x[2][0]    x[2][1]    x[2][2]    x[2][3]</pre></code><br>

                                            <p class="card-text f-16 m-l-50">Two dimensional array</p>
                                        </div>
                                    </div>
                                    <p class="f-16">Similarly, you can declare a three-dimensional (3d) array. For example,</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">float</span> y<span class="int">[2]</span><span class="int">[4]</span><span class="int">[3]</span>;</pre></code>
                                        </div>
                                    </div>
                                    <p class="f-16">Here, the array <span class="var hl">y</span> can hold 24 elements.</p>
                                <i class="feather icon-box st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y">Initializing a multidimensional array</h3>
                                    <p class="card-text f-16 m-l-50">Here is how you can initialize two-dimensional and three-dimensional arrays:</p>
                                    <h6 class="yellow-head un-y">Initializing a multidimensional array</h6>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// Different ways to initialize two-dimensional array</pre>
                                            <pre class="code-line"><span class="var">int</span> c<span class="int">[2][3]</span>= {{<span class="int">1, 3, 0</span>}, {<span class="int">-1, 5, 9</span>}};</pre>
                                            <pre class="code-line"><span class="var">int</span> c<span class="int">[][3]</span>= {{<span class="int">1, 3, 0</span>}, {<span class="int">-1, 5, 9</span>}};</pre>
                                            <pre class="code-line"><span class="var">int</span> c<span class="int">[2][3]</span>= {<span class="int">1, 3, 0, -1, 5, 9</span>};</pre></code>
                                    </div>
                            </div>
                            <div class="card-body">
                                <div class="card-header"><h3 class="yellow-head un-y">Initialization of a 3d array</h3>
                                <p class="card-text f-16 m-l-50">You can initialize a three-dimensional array in a similar way like a two-dimensional array. Here's an example,</p>
                                    <div class="col-sm-8  mx-auto">                                        
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">int</span> test<span class="int">[2][3][4]</span>= {</pre>
                                            <pre class="code-line">    {{<span class="int">3, 4, 2, 3</span>}, {<span class="int">0, -3, 9, 11</span>}, <span class="int">23, 12, 23, 2</span>}},</pre>
                                            <pre class="code-line">    {{<span class="int">13, 4, 56, 3</span>}, {<span class="int">5, 9, 3, 5</span>}, <span class="int">3, 1, 4, 9</span>}}};</pre></code>
                                        </div>
                                    </div>
                                    </div>
                                <h4 class="m-b-20 hov-blue">Example 1: Two-dimensional array to store and print values</h4>
                                <div class="snippet"><code>
                                            <pre class="code-line">// remove space from < stdio.h></pre>
                                            <pre class="code-line">// C program to store temperature of two cities of a week and display it.</pre>
                                            <pre class="code-line"><span class="var">#include </span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">const int</span> CITY =<span class="int">2</span></pre>
                                            <pre class="code-line"><span class="var">const int</span> WEEK =<span class="int">7</span></pre>
                                            <pre class="code-line"><span class="var">int</span><span class="int"> main</span>()</pre>
                                            <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">  int</span> temperature[CITY][WEEK];</pre><br>
                                            <pre class="code-line">  // Using nested loop to store values in a 2d array</pre>
                                            <pre class="code-line"><span class="var">  for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < CITY; ++i)</pre>
                                            <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">    for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < WEEK; ++j)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line"><span class="int">      printf</span>("City %d, Day %d: ", i +  <span class="var">1</span>, j + <span class="int">1</span>);</pre>
                                            <pre class="code-line"><span class="int">      scanf</span>("%d", &temperature[i][j]);</pre>
                                            <pre class="code-line">    }</pre>
                                            <pre class="code-line">  }</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("\nDisplaying values: \n\n");<span class="int">1</span>, j + <span class="int">1</span>, temperature[i][j]);</pre><br>
                                            <pre class="code-line">    // Using nested loop to display vlues of a 2d array</pre>
                                            <pre class="code-line"><span class="var">  for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < CITY; ++i)</pre>
                                            <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">    for</span> (<span class="var">int</span> j = <span class="int">0</span>; i < WEEK; ++j)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line"><span class="int">      printf</span>("City %d, Day %d = %d\n", i + <span class="var">1</span>, j + <span class="int">1</span>, temperature[i][j]);</pre>
                                            <pre class="code-line">    }</pre>
                                            <pre class="code-line">  }</pre>
                                            <pre class="code-line">  <span class="var">return</span><span class="int"> 0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">City 1, Day 1: 33</pre>
                                            <pre class="code-line">City 1, Day 2: 34</pre>
                                            <pre class="code-line">City 1, Day 3: 35</pre>
                                            <pre class="code-line">City 1, Day 4: 33</pre>
                                            <pre class="code-line">City 1, Day 5: 32</pre>
                                            <pre class="code-line">City 1, Day 6: 31</pre>
                                            <pre class="code-line">City 1, Day 7: 30</pre>
                                            <pre class="code-line">City 2, Day 1: 23</pre>
                                            <pre class="code-line">City 2, Day 2: 22</pre>
                                            <pre class="code-line">City 2, Day 3: 21</pre>
                                            <pre class="code-line">City 2, Day 4: 24</pre>
                                            <pre class="code-line">City 2, Day 5: 22</pre>
                                            <pre class="code-line">City 2, Day 6: 25</pre>
                                            <pre class="code-line">City 2, Day 7: 26</pre><br>
                                            <pre class="code-line">Displaying Values: </pre><br>
                                            <pre class="code-line">City 1, Day 1: 33</pre>
                                            <pre class="code-line">City 1, Day 2: 34</pre>
                                            <pre class="code-line">City 1, Day 3: 35</pre>
                                            <pre class="code-line">City 1, Day 4: 33</pre>
                                            <pre class="code-line">City 1, Day 5: 32</pre>
                                            <pre class="code-line">City 1, Day 6: 31</pre>
                                            <pre class="code-line">City 1, Day 7: 30</pre>
                                            <pre class="code-line">City 2, Day 1: 23</pre>
                                            <pre class="code-line">City 2, Day 2: 22</pre>
                                            <pre class="code-line">City 2, Day 3: 21</pre>
                                            <pre class="code-line">City 2, Day 4: 24</pre>
                                            <pre class="code-line">City 2, Day 5: 22</pre>
                                            <pre class="code-line">City 2, Day 6: 25</pre>
                                            <pre class="code-line">City 2, Day 7: 26</pre></code>
                                    </div>
                                <hr>
                                <h4 class="m-b-20 hov-blue">Example 2: Sum of two matrices</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space from < stdio.h></pre>
                                            <pre class="code-line">// C program to find the sum of two matrices of order 2*2</pre><br>
                                            <pre class="code-line"><span class="var">#include </span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">int</span><span class="int"> main</span>()</pre>
                                            <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">  float</span> a<span class="int">[2][2]</span>, b<span class="int">[2][2]</span>, result<span class="int">[2][2]</span>;</pre><br>
                                            <pre class="code-line">  // Taking input using nested for loop</pre><br>
                                            <pre class="code-line"><span class="int">  printf</span>("Enter elements of 1st matrix\n");</pre>
                                            <pre class="code-line"><span class="var">  for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < 2; ++i)</pre>
                                            <pre class="code-line"><span class="var">    for</span> (<span class="var">int</span> j = <span class="int">0</span>; i < 2; ++j)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line"><span class="int">    printf</span>("Enter a%d%d: ", i + <span class="int">1</span>, j + <span class="int">1</span>);</pre>
                                            <pre class="code-line"><span class="int">    scanf</span>("%f", &a[i][j]);</pre><br>
                                            <pre class="code-line">  // Taking input using nested for loop</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("Enter elements of 1st matrix\n");</pre>
                                            <pre class="code-line"><span class="var">  for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < 2; ++i)</pre>
                                            <pre class="code-line"><span class="var">    for</span> (<span class="var">int</span> j = <span class="int">0</span>; i < 2; ++j)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line"><span class="int">    printf</span>("Enter b%d%d: ", i + <span class="int">1</span>, j + <span class="int">1</span>);</pre>
                                            <pre class="code-line"><span class="int">    scanf</span>("%f", &b[i][j]);</pre><br>
                                            <pre class="code-line">  // adding corresponding elements of two arrays</pre>
                                            <pre class="code-line"><span class="var">  for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < 2; ++i)</pre>
                                            <pre class="code-line"><span class="var">    for</span> (<span class="var">int</span> j = <span class="int">0</span>; i < 2; ++j)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line">      result[i][j] = a[i][j] + b[i][j];</pre>
                                            <pre class="code-line">    }</pre><br>
                                            <pre class="code-line">  // Displaying the sum</pre><br>
                                            <pre class="code-line"><span class="int">  printf</span>("\nSum Of Matrix:");</pre><br>
                                            <pre class="code-line"><span class="var">  for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < 2; ++i)</pre>
                                            <pre class="code-line"><span class="var">    for</span> (<span class="var">int</span> j = <span class="int">0</span>; i < 2; ++j)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line"><span class="int">    printf</span>("%.1f\t", result[i][j]);</pre><br>
                                            <pre class="code-line"><span class="var">    if</span> (j == <span class="int">1</span>)</pre>
                                            <pre class="code-line"><span class="int">    printf</span>("\n");</pre>
                                            <pre class="code-line">    }</pre>
                                            <pre class="code-line"><span class="var">  return</span><span class="int"> 0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">Enter elements of 1st matrix</pre>
                                            <pre class="code-line">Enter a11: 2;</pre>
                                            <pre class="code-line">Enter a12: 0.5;</pre>
                                            <pre class="code-line">Enter a21: -1.1;</pre>
                                            <pre class="code-line">Enter a22: 2;</pre>
                                            <pre class="code-line">Enter elements of 2nd matrix</pre>
                                            <pre class="code-line">Enter b11: 0.2;</pre>
                                            <pre class="code-line">Enter b12: 0;</pre>
                                            <pre class="code-line">Enter b21: 0.23;</pre>
                                            <pre class="code-line">Enter b22: 23;</pre><br>
                                            <pre class="code-line">Sum Of Matrix:</pre>
                                            <pre class="code-line">2.2     0.5</pre>
                                            <pre class="code-line">-0.9    25.0</pre></code>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Example 3: Three-dimensional array</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space from < stdio.h></pre>
                                            <pre class="code-line">// C Program to store and print 12 values entered by the user</pre><br>
                                            <pre class="code-line"><span class="var">#include </span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">int</span><span class="int"> main</span>()</pre>
                                            <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">  int</span> test<span class="int">[2][3][2]</span>;</pre><br>
                                            <pre class="code-line"><span class="int">  printf</span>("Enter 12 values: \n");</pre><br>
                                            <pre class="code-line"><span class="var">  for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < 2; ++i)</pre>
                                             <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">    for</span> (<span class="var">int</span> j = <span class="int">0</span>; i < 2; ++j)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line"><span class="var">      for</span> (<span class="var">int</span> k = <span class="int">0</span>; k < 2; ++k)</pre>
                                            <pre class="code-line">      {</pre>
                                            <pre class="code-line"><span class="int">      scanf</span>("%d", &test[i][j][k]);</pre>
                                            <pre class="code-line">      }</pre>
                                            <pre class="code-line">    }</pre>
                                            <pre class="code-line">  }</pre><br>
                                            <pre class="code-line">// Printing values with proper index</pre><br>
                                            <pre class="code-line"><span class="int">  printf</span>("\nDisplaying values:\n");</pre><br>
                                            <pre class="code-line"><span class="var">  for</span> (<span class="var">int</span> i = <span class="int">0</span>; i < 2; ++i)</pre>
                                             <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">    for</span> (<span class="var">int</span> j = <span class="int">0</span>; i < 2; ++j)</pre>
                                            <pre class="code-line">    {</pre>
                                            <pre class="code-line"><span class="var">      for</span> (<span class="var">int</span> k = <span class="int">0</span>; k < 2; ++k)</pre>
                                            <pre class="code-line">      {</pre>
                                            <pre class="code-line"><span class="int">      printf</span>("test[%d][%d][%d] = %d\n", i, j, k, test[i][j][k]);</pre>
                                            <pre class="code-line">      }</pre>
                                            <pre class="code-line">    }</pre>
                                            <pre class="code-line">  }</pre><br>
                                            <pre class="code-line"><span class="var">  return</span><span class="int"> 0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Output</h4>
                                    <div class="snippet"><code>
                                            <pre class="code-line">Enter 12 values:</pre>
                                            <pre class="code-line">1</pre>
                                            <pre class="code-line">2</pre>
                                            <pre class="code-line">3</pre>
                                            <pre class="code-line">4</pre>
                                            <pre class="code-line">5</pre>
                                            <pre class="code-line">6</pre>
                                            <pre class="code-line">7</pre>
                                            <pre class="code-line">8</pre>
                                            <pre class="code-line">9</pre>
                                            <pre class="code-line">10</pre>
                                            <pre class="code-line">11</pre>
                                            <pre class="code-line">12</pre><br>
                                            <pre class="code-line">Displaying Values: </pre>
                                            <pre class="code-line">test[0][0][0] = 1</pre>
                                            <pre class="code-line">test[0][0][1] = 2</pre>
                                            <pre class="code-line">test[0][1][0] = 3</pre>
                                            <pre class="code-line">test[0][1][1] = 4</pre>
                                            <pre class="code-line">test[0][2][0] = 5</pre>
                                            <pre class="code-line">test[0][2][1] = 6</pre>
                                            <pre class="code-line">test[1][0][0] = 7</pre>
                                            <pre class="code-line">test[1][0][1] = 8</pre>
                                            <pre class="code-line">test[1][1][0] = 9</pre>
                                            <pre class="code-line">test[1][1][1] = 10</pre>
                                            <pre class="code-line">test[1][2][0] = 11</pre>
                                            <pre class="code-line">test[1][2][1] = 12</pre></code>
                                    </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
            <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item m-r-50">
                            <a class="page-link" href="5-arrays.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="5-arrays-functions.php">Next Topic</a>
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