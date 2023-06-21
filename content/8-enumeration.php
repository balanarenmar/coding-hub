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
    <title>{C} - Enumeration</title>
   
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
                                <li class="breadcrumb-item"><a href="#!">C Enumeration</a></li>
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
                            <h4 style="color: #FC3;">C enums</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you will learn about enum (enumeration) in C programming with the help of examples.</p>
                            <i class="feather icon-aperture st-icon bg-c-red"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ Body ] start -->

            <div class="row text-center">
                <div class="col-sm-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5>Video Presentation</h5>
                        </div>
                        <div class="card-body">
                            <div class="row  text-center ">
                                <div class="col-xl-12">
                                      <!-- Video embed: YT -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9QdJExC2AVg" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-body"><br>
                            <p class="f-16">In C programming, an enumeration type (also called enum) is a data type that consists of integral constants. To define enums, the <span class="hl">enum</span> keyword is used.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">enum</span> flag {const1, const2, ..., constN};</pre></code>
                                    </div>
                                </div> 
                            <p class="f-16">By default, <span class="hl">const1</span> is 0, <span class="hl">const2</span> is 1 and so on. You can change default values of enum elements during declaration (if necessary).</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="comnt">// Changing default values of enum constants</span>
                                        <pre class="code-line"><span class="var">enum</span> suit {<br>   club = 0,<br>   diamonds = 10,<br>   hearts = 20,<br>   spades = 3,<br>};</pre></code>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row text-center">
                <div class="col-sm-8 mx-auto">
                    <div class="card widget-visitor-card">
                        <div class="card-header">
                            <h5>Diagram of <span class="var hl">enum</span> syntax</h5>
                        </div>
                        <div class="card-body">
                            <i class="feather icon-crosshair"></i> 
                            <div class="row  text-center ">
                                <div class="col-xl-12">
                                      <article class="video-item">
                                        <figure>
                                          <a href="assets/images/video-lesson/enum.png" class="play"><img src="assets/images/video-lesson/enum.png" width="100%"></a>
                                        </figure>
                                      </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y ">Enumerated Type Declaration</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">When you define an enum type, the blueprint for the variable is created. Here's how you can create variables of enum types.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">enum</span> boolean {false, true};</pre>
                                        <pre class="code-line"><span class="var">enum</span> boolean check; <span class="comnt">// declaring an enum variable</span></pre></code>
                                    </div>
                                </div>
                                <p class="card-text f-16 m-l-50">Here, a variable <span class="hl">check</span> of the type <span class="hl">enum boolean</span> is created.You can also declare enum variables like this.</p>
                                <p class="card-text f-16 m-l-50">You can also declare enum variables like this.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">enum</span> boolean {false, true} check;</pre></code>
                                    </div>
                                </div>
                                <p class="card-text f-16 m-l-50">Here, the value of <span class="hl">false</span>  is equal to 0 and the value of <span class="hl">true</span> is equal to 1.</p>
                                <br><hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example: Enumeration Type</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre><br>
                                        <pre class="code-line"><span class="var">enum</span> week {Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday};</pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="comnt">  // creating today variable of enum week type</span></pre>
                                        <pre class="code-line"><span class="var">enum</span> week today;</pre>
                                        <pre class="code-line">today = Wednesday;</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Day %d"</span>,today+<span class="int">1</span>);</pre>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div> 
                                <br>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Day 4</pre></code>
                                        </div>
                                    </div>      
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y ">Why enums are used?</h3></div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">An enum variable can take only one value. Here is an example to demonstrate it, variables, functions, structures etc.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre><br>
                                        <pre class="code-line"><span class="var">enum</span> suit {</pre>
                                        <pre class="code-line">   club = <span class="int">0</span>,</pre>
                                        <pre class="code-line">   diamonds = <span class="int">10</span>,</pre>
                                        <pre class="code-line">   hearts = <span class="int">20</span>,</pre>
                                        <pre class="code-line">   spades = <span class="int">3</span><br>} card;</pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line">   card = club;</pre>
                                        <pre class="code-line"><span class="function">      printf</span>(<span class="char">"Size of enum variable = %d bytes"</span>, <span class="function">sizeof</span>(card));</pre>
                                        <pre class="code-line"><span class="var">      return</span> <span class="int">0</span>;<br>}</pre></code>
                                    </div>
                                </div>
                                <br>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">Size of enum variable = 4 bytes</pre></code>
                                        </div>
                                    </div> 
                            <p class="f-16">Here, we are getting <span class="hl int">4</span> because the size of <span class="hl var">int</span> is 4 bytes.</p>
                            <p class="f-16">This makes enum a good choice to work with flags.</p>

                            <hr>
                            <h4 class="m-b-20 m-l-50 hov-blue">How to use enums for flags?</h4>
                            <p class="f-16">Let us take an example,</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">enum</span> designFlags {</pre>
                                        <pre class="code-line">   ITALICS = <span class="int">1</span>,</pre>
                                        <pre class="code-line">   BOLD = <span class="int">2</span>,</pre>
                                        <pre class="code-line">   UNDERLINE = <span class="int">4</span><br>} card;</pre></code>
                                    </div>
                                </div> 
                            <p class="f-16">Suppose you are designing a button for Windows application. You can set flags <span class="hl">ITALICS</span>, <span class="hl">BOLD</span> and <span class="hl">UNDERLINE</span> to work with text.</p>
                            <p class="f-16">There is a reason why all the integral constants are a power of 2 in the above pseudocode.</p>   
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="comnt">// In binary</span></pre><br>
                                        <pre class="code-line">ITALICS = <span class="int">00000001</span></pre>
                                        <pre class="code-line">BOLD = <span class="int">00000010</span></pre>
                                        <pre class="code-line">UNDERLINE = <span class="int">00000100</span></pre></code>
                                    </div>
                                </div> 
                            <p class="f-16">Since the integral constants are a power of 2, you can combine two or more flags at once without overlapping using bitwise OR | operator. This allows you to choose two or more flags at once. <br>For example,</p>  
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre><br>
                                        <pre class="code-line"><span class="var">enum</span> designFlags {</pre>
                                        <pre class="code-line">   ITALICS = <span class="int">1</span>,</pre>
                                        <pre class="code-line">   BOLD = <span class="int">2</span>,</pre>
                                        <pre class="code-line">   UNDERLINE = <span class="int">4</span><br>};</pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   int</span> myDesign = BOLD | UNDERLINE;</pre><br>
                                        <pre class="code-line"><span class="comnt">   //    00000001</span></pre>
                                        <pre class="code-line"><span class="comnt">   //  | 00000100</span></pre>
                                        <pre class="code-line"><span class="comnt">   //  ___________</span></pre>
                                        <pre class="code-line"><span class="comnt">   //    00000101</span></pre><br>
                                        <pre class="code-line"><span class="function">      printf</span>(<span class="char">"%d"</span>, myDesign);</pre><br>
                                        <pre class="code-line"><span class="var">      return</span> <span class="int">0</span>;<br>}</pre></code>
                                    </div>
                                </div>
                                <br>
                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="int">5</span></pre></code>
                                        </div>
                                    </div> 
                                <p class="f-16">When the output is 5, you always know that bold and underline is used.</p> 
                                <p class="f-16">Also, you can add flags according to your requirements.</p>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">if</span> (myDesign & ITALICS) {</pre>
                                            <pre class="code-line"><span class="comnt">  // code for italics</span>}</pre></code>
                                        </div>
                                    </div>
                                <p class="f-16">Here, we have added italics to our design. Note, only code for italics is written inside the <span class="hl function">if</span> statement.</p> 
                                <p class="f-16">You can accomplish almost anything in C programming without using enumerations. However, they can be pretty handy in certain situations.</p>  
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
                        <a class="page-link" href="7-check-eof.php" tabindex="-1">Previous Lesson</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="8-preprocessors.php">Next Topic</a>
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