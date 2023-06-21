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
    <title>{C} - Operators</title>
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

<body class="background-img-4 ">
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
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?php echo "" . $_SESSION['username'] . ""; ?></span>
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
                                <li class="breadcrumb-item"><a href="#!">C Operators</a></li>
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
                            <h4 style="color: #FC3;">C Programming Operators</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you will learn about different operators in C programming with the help of examples.</p>
                            <p class="f-16">An operator is a symbol that operates on a value or a variable. For example: + is an operator to perform addition.</p>
                            <p class="f-16">C has a wide range of operators to perform various operations.</p>
                            <i class="fas fa-plus st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
                <!-- [ dark-layout ] end -->
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
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
                                  <a href="assets/images/video-lesson/opera.mp4" class="play"><img src="assets/images/video-lesson/thumb/2.jpg"></a>
                                </figure>
                              </article>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h3 class="yellow-head un-y">C Arithmetic Operators</h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">An arithmetic operator performs mathematical operations such as addition, subtraction, multiplication, division etc on numerical values (constants and variables).</p>

                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>Operator</th>
                                                            <th>Meaning of Operator</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td><span class="opp f-20">+</span></td>
                                                            <td>addition or unary plus</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">-</span></td>
                                                            <td>subtraction or unary minus</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">*</span></td>
                                                            <td>multiplication</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">/</span></td>
                                                            <td>division</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">%</span></td>
                                                            <td>remainder after division (modulo division)</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                <br><hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 1: Arithmetic Operators</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="comnt">// Working of arithmetic operators</span></pre></code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a = <span class="int">9</span>, b = <span class="int">4</span>, c;</pre>
                                            <br>
                                            <pre class="code-line">   c = a+b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"a+b = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c = a-b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"a-b = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c = a*b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"a*b = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c = a/b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"a/b = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c = a%b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Remainder when a divided by b = %d \n"</span>, c);</pre>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre>
                                        </div>
                                    </div>
                                <br>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">a+b = 13</pre></code>
                                            <pre class="code-line">a-b = 5</pre>
                                            <pre class="code-line">a*b = 36</pre>
                                            <pre class="code-line">a/b = 2</pre>
                                            <pre class="code-line">Remainder when a divided by b = 1</pre>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">The operators <span class="hl opp">+</span> , <span class="hl opp">-</span> and <span class="hl opp">*</span> computes addition, subtraction, and multiplication respectively as you might have expected.</p>
                                <p class="card-text f-16 m-l-50">In normal calculation, <span class="hl">9/4 = 2.25</span> . However, the output is <span class="hl">2</span> in the program.</p>
                                <p class="card-text f-16 m-l-50">It is because both the variables <span class="hl">a</span> and <span class="hl">b</span> are integers. Hence, the output is also an integer. The compiler neglects the term after the decimal point and shows answer <span class="hl">2</span> instead of <span class="hl">2.25</span> .</p>
                                <p class="card-text f-16 m-l-50">The modulo operator <span class="hl opp">%</span> computes the remainder. When <span class="hl">a=9</span> is divided by <span class="hl">b=4</span>, the remainder is <span class="hl">1</span> . The <span class="hl opp">%</span> operator can only be used with integers.</p>
                                <br>
                                <p class="card-text f-16 m-l-50">Suppose <span class="hl">a = 5.0</span> , <span class="hl">b = 2.0</span> , <span class="hl">c = 5</span> and <span class="hl">d = 2</span> . Then in C programming,</p>

                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">float</span> a = <span class="int">5.0</span>, b = <span class="int">2.0</span>;</pre>
                                            <pre class="code-line"><span class="var">int</span> c = <span class="int">5</span>, d = <span class="int">2</span>;</pre>
                                            <br>
                                            <pre class="code-line">   c = a+b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"a+b = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c = a-b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"a-b = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c = a*b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"a*b = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c = a/b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"a/b = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c = a%b;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Remainder when a divided by b = %d \n"</span>, c);</pre>
                                            </code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="comnt">// Either one of the operands is a floating-point number</span></pre>
                                            <pre class="code-line">a/b = 2.5</pre></code>
                                            <pre class="code-line">a/d = 2.5</pre>
                                            <pre class="code-line">c/b = 2.5</pre>
                                            <br>
                                            <pre class="code-line"><span class="comnt">// Both operands are integers:</span></pre>
                                            <pre class="code-line">c/d = 2</pre>
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
                                <h3 class="yellow-head un-y">C Increment and Decrement  (UNARY)  Operators</h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">C programming has two operators: increment <span class="hl">++</span> and decrement <span class="hl">--</span> , to change the value of an operand (constant or variable) by 1.</p>

                                <p class="card-text f-16 m-l-50">Increment <span class="hl">++</span> increases the value by 1 whereas decrement <span class="hl">--</span> decreases the value by 1. These two operators are unary operators, meaning they only operate on a single operand.</p>
                                <hr><br>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 2.1: Increment and Decrement Operators</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="comnt">// Working of increment and decrement operators</span></pre>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a = <span class="int">10</span>, b = <span class="int">100</span>;</pre>
                                            <pre class="code-line"><span class="var">   float</span> c = <span class="int">10.5</span>, d = <span class="int">100.5</span>;</pre>
                                            <br>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"++a = %d \n"</span>, ++a);</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"--b = %d \n"</span>, --b);</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"++c = %d \n"</span>, ++c);</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"--d = %d \n"</span>, --d);</pre>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <br>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">++a = 11</pre></code>
                                            <pre class="code-line">--b = 99</pre>
                                            <pre class="code-line">++c = 11.500000</pre>
                                            <pre class="code-line">--d = 99.500000</pre>
                                            <pre class="code-line">Remainder when a divided by b = 1</pre>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">Here, the operators <span class="hl">++</span> and <span class="hl">--</span> are used as prefixes. These two operators can also be used as postfixes like <span class="hl">a++</span> and <span class="hl">a--</span>.</p>
                            <hr><br>
                                    <h4 class="m-b-20 m-l-50 hov-blue">++ and -- operator as prefix and postfix</h4>
                                    <ul class="f-16 m-l-50">
                                        <li class="m-b-20">If you use the <span class="hl">++</span> operator as a prefix like: <span class="hl">++var</span> , the value of <span class="hl">var</span> is incremented by 1; then it returns the value.</li>
                                        <li class="m-b-20">If you use the <span class="hl">++</span> operator as a postfix like: <span class="hl">var++</span> , the original value of <span class="hl">var</span> is returned first; then <span class="hl">var</span> is incremented by 1.</li>
                                    </ul>
                                    <br>
                                <div class="col-sm-8">
                                        <div class="card social-widget-card">
                                            <div class="card-body bg-dark">
                                                <blockquote class="blockquote mb-0">
                                                    <span class="badge badge-info">Note:</span>
                                                    <p class="f-14 m-l-25 m-t-10">The <span class="hl">--</span> operator works in a similar way to the <span class="hl">++</span> operator except <span class="hl">--</span> decreases the value by 1.</p>
                                                </blockquote>
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                </div>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 2.2: Increment as postfix vs prefix</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> var1 = <span class="int">5</span>, var2 = <span class="int">5</span>;</pre>
                                            <br>
                                            <pre class="code-line"><span class="comnt">   // 5 is displayed</pre>
                                            <pre class="code-line"><span class="comnt">   // Then, var1 is increased to 6.</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"%d\n"</span>, var1++);</pre>
                                            <br>
                                            <pre class="code-line"><span class="comnt">   // var2 is increased to 6</pre>
                                            <pre class="code-line"><span class="comnt">   // Then, it is displayed.</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"%d\n"</span>, ++var2);</pre>
                                            <br>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">5</pre>
                                            <pre class="code-line">6</pre></code>
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
                                <h3 class="yellow-head un-y">C Assignment Operators</h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">An assignment operator is used for assigning a value to a variable. The most common assignment operator is <span class="hl">=</span></p>

                                <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>Operator</th>
                                                            <th>Example</th>
                                                            <th>Same as</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td><span class="opp f-20">=</span></td>
                                                            <td>a = b</td>
                                                            <td>a = b</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">+=</span></td>
                                                            <td>a += b</td>
                                                            <td>a = a+b</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">-=</span></td>
                                                            <td>a -= b</td>
                                                            <td>a = a-b</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">*=</span></td>
                                                            <td>a *= b</td>
                                                            <td>a = a*b</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">/=</span></td>
                                                            <td>a /= b</td>
                                                            <td>a = /b</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">%=</span></td>
                                                            <td>a %= b</td>
                                                            <td>a = a%b</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>

                                <br><hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 3: Assignment Operators</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="comnt">// Working of assignment operators</span></pre>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a = <span class="int">5</span>, c;</pre>
                                            <br>
                                            <pre class="code-line">   c = a;      <span class="comnt">// c is 5</span></pre>   
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c += a;     <span class="comnt">// c is 10</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c -= a;     <span class="comnt">// c is 5</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c *= a;     <span class="comnt">// c is 25</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c /= a;     <span class="comnt">// c is 5</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c %= a;     <span class="comnt">// c is 0</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <br>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">c = 5</pre>
                                            <pre class="code-line">c = 10</pre>
                                            <pre class="code-line">c = 5</pre>
                                            <pre class="code-line">c = 25</pre>
                                            <pre class="code-line">c = 5</pre>
                                            <pre class="code-line">c = 0</pre></code>
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
                                <h3 class="yellow-head un-y">C Relational Operators</h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">A relational operator checks the relationship between two operands. If the relation is true, it returns 1; if the relation is false, it returns value 0.</p>
                                <p class="card-text f-16 m-l-50">Relational operators are used in <a href="#" class="blu-lk">decision making</a>  and <a href="#" class="blu-lk">loops</a>.</p>

                                <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>Operator</th>
                                                            <th>Meaning of Operator</th>
                                                            <th>Example</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td><span class="opp f-20">==</span></td>
                                                            <td>Equal to</td>
                                                            <td><span class="hl">5 == 3</span> is evaluated to 0</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">></span></td>
                                                            <td>Greater than</td>
                                                            <td><span class="hl">5 > 3</span> is evaluated to 1</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20"><</span></td>
                                                            <td>Less than</td>
                                                            <td><span class="hl">5 < 3</span> is evaluated to 0</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">!=</span></td>
                                                            <td>Not equal to</td>
                                                            <td><span class="hl">5 != 3</span> is evaluated to 1</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">>=</span></td>
                                                            <td>Greater than or Equal to</td>
                                                            <td><span class="hl">5 >= 3</span> is evaluated to 0</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20"><=</span></td>
                                                            <td>Less than or Equal to</td>
                                                            <td><span class="hl">5 <= 3</span> is evaluated to 0</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>

                                <br><hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 4: Relational Operators</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="comnt">// Working of assignment operators</span></pre>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a = <span class="int">5</span>, c;</pre>
                                            <br>
                                            <pre class="code-line">   c = a;      <span class="comnt">// c is 5</span></pre>   
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c += a;     <span class="comnt">// c is 10</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c -= a;     <span class="comnt">// c is 5</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c *= a;     <span class="comnt">// c is 25</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c /= a;     <span class="comnt">// c is 5</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <pre class="code-line">   c %= a;     <span class="comnt">// c is 0</span></pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"c = %d \n"</span>, c);</pre>
                                            <br>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">c = 5</pre>
                                            <pre class="code-line">c = 10</pre>
                                            <pre class="code-line">c = 5</pre>
                                            <pre class="code-line">c = 25</pre>
                                            <pre class="code-line">c = 5</pre>
                                            <pre class="code-line">c = 0</pre></code>
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
                                <h3 class="yellow-head un-y">C Logical Operators</h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">An expression containing logical operator returns either 0 or 1 depending upon whether expression results true or false. Logical operators are commonly used in <a href="#" class="blu-lk">decision making</a> in C programming..</p>

                                <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>Operator</th>
                                                            <th>Meaning</th>
                                                            <th>Example</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td><span class="opp f-20">&&</span></td>
                                                            <td>Logical AND.<br>True only of all operands are true</td>
                                                            <td>If c=5 and d=2, then the expression <br><span class="hl">((c==5) && (d>5))</span> equals to 0</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">||</span></td>
                                                            <td>Logical OR.<br>True only if either one operand is true</td>
                                                            <td>If c=5 and d=2, then the expression <br><span class="hl">((c==5) || (d>5))</span> equals to 1</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">!</span></td>
                                                            <td>Logical NOT.<br>True only if the operand is 0</td>
                                                            <td>If c=5, then the expression <br><span class="hl">! (c==5)</span> is evaluated to 0</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>

                                <br><hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 5: Logical Operators</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="comnt">// Working of logical operators</span></pre>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a = <span class="int">5</span>, b = <span class="int">5</span>, c = <span class="int">10</span>;</pre>
                                            <br>
                                            <pre class="code-line">   result = (a == b) && (c > b);</pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"(a == b) && (c > b) is %d \n"</span>, result);</pre>
                                            <br>
                                            <pre class="code-line">   result = (a == b) && (c < b);</pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"(a == b) && (c < b) is %d \n"</span>, result);</pre>
                                            <br>
                                            <pre class="code-line">   result = (a == b) || (c < b);</pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"(a == b) || (c < b) is %d \n"</span>, result);</pre>
                                            <br>
                                            <pre class="code-line">   result = (a != b) || (c < b);</pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"(a != b) || (c < b) is %d \n"</span>, result);</pre>
                                            <br>
                                            <pre class="code-line">   result = !(a != b);</pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"!(a != b) is %d \n"</span>, result);</pre>
                                            <br>
                                            <pre class="code-line">   result = !(a == b);</pre> 
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"!(a == b) is %d \n"</span>, result);</pre>
                                            <br>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">(a == b) && (c > b) is 1 </pre>
                                            <pre class="code-line">(a == b) && (c < b) is 0 </pre>
                                            <pre class="code-line">(a == b) || (c < b) is 1 </pre>
                                            <pre class="code-line">(a != b) || (c < b) is 0 </pre>
                                            <pre class="code-line">!(a != b) is 1 </pre>
                                            <pre class="code-line">!(a == b) is 0 </pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 hov-blue">Explanation of Logical Operator Program:</h4>
                                    <ul class="f-16 m-l-50">
                                        <li class=" m-t-15"><span class="hl">(a == b) && (c > 5)</span> evaluates to 1 because both operands <span class="hl">(a == b)</span> and <span class="hl">(c > b)</span> is 1 (true).</li>
                                        <li class=" m-t-15"><span class="hl">(a == b) && (c < b)</span> evaluates to 0 because operand <span class="hl">(c < b)</span> is 0 (false).</li>
                                        <li class=" m-t-15"><span class="hl">(a == b) || (c < b)</span> evaluates to 1 because <span class="hl">(a = b)</span> is 1 (true).</li>
                                        <li class=" m-t-15"><span class="hl">(a != b) || (c < b)</span> evaluates to 0 because both operand <span class="hl">(a != b)</span> and <span class="hl">(c < b)</span> are 0 (false).</li>
                                        <li class=" m-t-15"><span class="hl">!(a != b)</span> evaluates to 1 because operand <span class="hl">(a != b)</span> is 0 (false). Hence, <span class="hl">!(a != b)</span> is 1 (true).</li>
                                        <li class=" m-t-15"><span class="hl">! (a == b)</span> evaluates to 0 because <span class="hl">(a == b)</span> is 1 (true). Hence, <span class="hl">! (a == b)</span> is 0 (false).</li>
                                    </ul>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h3 class="yellow-head un-y">C Bitwise Operators</h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">During computation, mathematical operations like: addition, subtraction, multiplication, division, etc are converted to bit-level which makes processing faster and saves power.</p>
                                <p class="card-text f-16 m-l-50">Bitwise operators are used in C programming to perform bit-level operations.</p>
                                <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>Operator</th>
                                                            <th>Meaning of Operator</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td><span class="opp f-20">&</span></td>
                                                            <td>Bitwise AND</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">|</span></td>
                                                            <td>Bitwise OR</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">^</span></td>
                                                            <td>Bitwise exclusive OR</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">~</span></td>
                                                            <td>Bitwise complement</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20"><<</span></td>
                                                            <td>Shift Left</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="opp f-20">>></span></td>
                                                            <td>Shift Right</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                <br>
                                <p class="card-text f-16 m-l-50">Truth table for some of the bitwise operators:</p>
                                
                                <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>p</th>
                                                            <th>q</th>
                                                            <th>~ p</th>
                                                            <th>p & q</th>
                                                            <th>p | q</th>
                                                            <th>p ^ q</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr>
                                                            <td>0</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                            <br><hr>
                                <h4 class="subheader"><i class="feather icon-chevrons-right text-primary"></i> Bitwise AND Operator &</h4>
                                <br>
                                <p class="card-text f-16 m-l-50">The output of bitwise AND is 1 if the corresponding bits of two operands is 1. If either bit of an operand is 0, the result of corresponding bit is evaluated to 0.</p>
                                <p class="card-text f-16 m-l-50">Let us suppose the bitwise AND operation of two integers 12 and 25.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">12 = 00001100 (In Binary)</pre>
                                            <pre class="code-line">25 = 00011001 (In Binary)</pre>
                                            <br>
                                            <pre class="code-line">Bit Operation of 12 and 25</pre>
                                            <pre class="code-line">  00001100</pre>
                                            <pre class="code-line">& 00011001</pre>
                                            <pre class="code-line">  ________</pre>
                                            <pre class="code-line">  00001000  = 8 (In decimal)</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Example 6.1: Bitwise AND</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a = <span class="int">12</span>, b = <span class="int">25</span>;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Output = %d"</span>, a&b);</pre>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Output = 8</pre></code>
                                        </div>
                                    </div>

                            <br><hr>
                                <h4 class="subheader"><i class="feather icon-chevrons-right text-primary"></i> Bitwise OR Operator |</h4>
                                <br>
                                <p class="card-text f-16 m-l-50">The output of bitwise OR is 1 if at least one corresponding bit of two operands is 1. In C Programming, bitwise OR operator is denoted by |.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">12 = 00001100 (In Binary)</pre>
                                            <pre class="code-line">25 = 00011001 (In Binary)</pre>
                                            <br>
                                            <pre class="code-line">Bit Operation of 12 and 25</pre>
                                            <pre class="code-line">  00001100</pre>
                                            <pre class="code-line">| 00011001</pre>
                                            <pre class="code-line">  ________</pre>
                                            <pre class="code-line">  00011101  = 29 (In decimal)</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Example 6.2: Bitwise OR</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a = <span class="int">12</span>, b = <span class="int">25</span>;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Output = %d"</span>, a|b);</pre>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Output = 29</pre></code>
                                        </div>
                                    </div>

                            <br><hr>
                                <h4 class="subheader"><i class="feather icon-chevrons-right text-primary"></i> Bitwise XOR (exclusive OR) Operator ^</h4>
                                <br>
                                <p class="card-text f-16 m-l-50">The result of bitwise XOR operator is 1 if the corresponding bits of two operands are opposite. It is denoted by ^.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">12 = 00001100 (In Binary)</pre>
                                            <pre class="code-line">25 = 00011001 (In Binary)</pre>
                                            <br>
                                            <pre class="code-line">Bit Operation of 12 and 25</pre>
                                            <pre class="code-line">  00001100</pre>
                                            <pre class="code-line">^ 00011001</pre>
                                            <pre class="code-line">  ________</pre>
                                            <pre class="code-line">  00010101  = 21 (In decimal)</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Example 6.3: Bitwise XOR</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a = <span class="int">12</span>, b = <span class="int">25</span>;</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Output = %d"</span>, a^b);</pre>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Output = 21</pre></code>
                                        </div>
                                    </div>

                            <br><hr>
                                <h4 class="subheader"><i class="feather icon-chevrons-right text-primary"></i> Bitwise complement Operator ~</h4>
                                <br>
                                <p class="card-text f-16 m-l-50">Bitwise compliment operator is an unary operator (works on only one operand). It changes 1 to 0 and 0 to 1. It is denoted by ~.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">35 = 00100011 (In Binary)</pre>
                                            <br>
                                            <pre class="code-line">Bitwise complement Operation of 35</pre>
                                            <pre class="code-line">~ 00100011 </pre>
                                            <pre class="code-line">  ________</pre>
                                            <pre class="code-line">  11011100  = 220 (In decimal)</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 hov-blue">Twist in bitwise complement operator in C Programming</h4>
                                <p class="card-text f-16 m-l-50">The bitwise complement of 35 (~35) is -36 instead of 220, but why?</p>
                                <p class="card-text f-16 m-l-50">For any integer <span class="hl">n</span> , bitwise complement of <span class="hl">n</span> will be <span class="hl">-(n+1)</span> . To understand this, you should have the knowledge of 2's complement.</p>
                                <br>
                                <h4 class="m-l-50 text-info">2's Complement</h4>
                                <p class="card-text f-16 m-l-50">Two's complement is an operation on binary numbers. The 2's complement of a number is equal to the complement of that number plus 1. For example:</p>
                                    <div class="col-sm-10  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"> Decimal         Binary           2's complement 
   0            00000000           -(11111111+1) = -00000000 = -0(decimal)
   1            00000001           -(11111110+1) = -11111111 = -256(decimal)
   12           00001100           -(11110011+1) = -11110100 = -244(decimal)
   220          11011100           -(00100011+1) = -00100100 = -36(decimal)

<span class="comnt">Note: Overflow is ignored while computing 2's complement.</span></pre></code>
                                        </div>
                                    </div>
                                <p class="card-text f-16 m-l-50">The bitwise complement of 35 is 220 (in decimal). The 2's complement of 220 is -36. Hence, the output is -36 instead of 220.</p>

                                <h4 class="m-l-50 p-l-50 hov-blue">Bitwise complement of any number N is -(N+1). Here's how:</h4>
                                    <div class="col-sm-10  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">bitwise complement of N = ~N (represented in 2's complement form)<br>2'complement of ~N= -(~(~N)+1) = -(N+1)</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Example 6.4: Bitwise Complement</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Output = %d\n"</span>, ~<span class="int">35</span>);</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Output = %d\n"</span>, ~<span class="int">-12</span>);</pre>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Output = -36<br>Output = 11</pre></code>
                                        </div>
                                    </div>
                            <br><hr>
                                <h4 class="subheader"><i class="feather icon-chevrons-right text-primary"></i> Shift Operators in C programming</h4>
                                <br>
                                <p class="card-text f-16 m-l-50">There are two shift operators in C programming:</p>
                                <h4 class="m-l-50 text-info">Right Shift Operator >></h4>
                                <p class="card-text f-16 m-l-50">Right shift operator shifts all bits towards right by certain number of specified bits. It is denoted by >>.</p>
                                    <div class="col-sm-10  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">212 = 11010100 (In binary)<br>212>>2 = 00110101 (In binary) [Right shift by two bits]<br>212>>7 = 00000001 (In binary)<br>212>>8 = 00000000<br>212>>0 = 11010100 (No Shift)</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 text-info">Left Shift Operator <<</h4>
                                <p class="card-text f-16 m-l-50">Left shift operator shifts all bits towards left by a certain number of specified bits. The bit positions that have been vacated by the left shift operator are filled with 0. The symbol of the left shift operator is <<.</p>
                                    <div class="col-sm-10  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">212 = 11010100 (In binary)<br>212<<1 = 110101000 (In binary) [Left shift by one bit]<br>212<<0 = 11010100 (Shift by 0)<br>212<<4 = 110101000000 (In binary) =3392(In decimal)</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Example 6.5: Shift Operators</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">int</span> num = <span class="int">212</span>, i;</pre>
                                            <pre class="code-line"><span class="var">for</span> (i=<span class="int">0</span>; i<=<span class="int">2</span>; ++i)</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Right shift by %d: %d\n"</span>, i, num>>i);</pre>
                                            <br><pre class="code-line"><span class="function">printf</span>(<span class="char">"\n"</span>);</pre><br>
                                            <pre class="code-line"><span class="var">for</span> (i=<span class="int">0</span>; i<=<span class="int">2</span>; ++i)</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Left shift by %d: %d\n"</span>, i, num<< i);</pre>
                                            
                                            <br><pre class="code-line"><span class="var">return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Right Shift by 0: 212<br>Right Shift by 1: 106<br>Right Shift by 2: 53<br>Left Shift by 0: 212<br>Left Shift by 1: 424<br>Left Shift by 2: 848</pre></code>
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
                                <h3 class="yellow-head un-y">Special Operators</h3>
                            </div>
                            <div class="card-body">
                                <h4 class="subheader"><i class="feather icon-chevrons-right"></i> The Comma Operator</h4>
                                <p class="card-text f-16 m-l-50">The Comma operator  can be used to link the related expressions together.</p>
                                <br>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 7.1: Comma Operator</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="comnt">//Comma Operator to declare multiple instances of a variable type</span></pre>
                                            <pre class="code-line"><span class="var">int</span> a, c = <span class="int">5</span>, d;</pre>
                                            <br>
                                            <pre class="code-line"><span class="comnt">//Comma Operator In for Loops</span></pre>
                                            <pre class="code-line"><span class="function">for</span> (i=<span class="int">0</span> , j=<span class="int">1</span>; i><span class="int">10</span> ; i++, j++)</pre>
                                            </code>
                                        </div>
                                    </div>
                            <hr>
                                <h4 class="subheader"><i class="feather icon-chevrons-right"></i> Type Cast Operator</h4>
                                <p class="card-text f-16 m-l-50">Converts a variable to the specified type.</p>
                                <p class="card-text f-16 m-l-50">Note that the use of a parenthesized type in a method declaration or definition is not an example of the use of the type cast operator.</p>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 7.2: Type Cast Operator</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">float</span> s = <span class="int">12.5</span>;</pre>
                                            <pre class="code-line"><span class="var">int</span> a;</pre>
                                            <pre class="code-line">a = (<span class="var">int</span>) s;        <span class="comnt">//now, the value of variable a is 12</span></pre>
                                            </code>
                                        </div>
                                    </div>
                            <hr>
                                <h4 class="subheader"><i class="feather icon-chevrons-right"></i> Reference Operator ("&") or Address Operator</h4>
                                <p class="card-text f-16 m-l-50">The reference operator noted by ampersand ("&"), is also a unary operator in c languages that uses for assign address of the variables. It returns the pointer address of the variable. This is called "referencing" operater.</p>
                                <h4 class="subheader"><i class="feather icon-chevrons-right"></i> Dereference Operator ("*") or Pointer Operator</h4>
                                <p class="card-text f-16 m-l-50">The dereference operator or indirection operator, noted by asterisk ("*"), is also a unary operator in c languages that uses for pointer variables. It operates on a pointer variable, and returns l-value equivalent to the value at the pointer address. This is called "dereferencing" the pointer.</p>
                                <h4 class="subheader"><i class="feather icon-chevrons-right"></i> Double Pointer operator ("**")</h4>
                                <p class="card-text f-16 m-l-50">Double Pointer is, a pointer that points to another pointer variable address.</p>
                            <hr>
                                <h4 class="subheader"><i class="feather icon-chevrons-right"></i> sizeof Operator</h4>
                                <p class="card-text f-16 m-l-50">The <span class="hl">sizeof</span> is a unary operator that returns the size of data (constants, variables, array, structure, etc).</p>
                                <br>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 7.3: sizeof Operator</h4>
                                <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                            <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                            <pre class="code-line"><span class="var">   int</span> a;</pre>
                                            <pre class="code-line"><span class="var">   float</span> b;</pre>
                                            <pre class="code-line"><span class="var">   double</span> c;</pre>
                                            <pre class="code-line"><span class="var">   char</span> d;</pre>
                                              
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Size of int = %lu bytes\n"</span>, <span class="function">sizeof</span>(a));</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Size of float = %lu bytes\n"</span>, <span class="function">sizeof</span>(b));</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Size of double = %lu bytes\n"</span>, <span class="function">sizeof</span>(c));</pre>
                                            <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Size of char = %lu bytes\n"</span>, <span class="function">sizeof</span>(d));</pre><br>
                                            <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                    </div>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Size of int = 4 bytes</pre>
                                            <pre class="code-line">Size of float = 4 bytes</pre>
                                            <pre class="code-line">Size of double = 8 bytes</pre>
                                            <pre class="code-line">Size of char = 1 byte</pre></code>
                                        </div>
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
                        <a class="page-link" href="1-data-types.php" tabindex="-1">Previous Lesson</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="1-program-structure.php">Next Topic</a>
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