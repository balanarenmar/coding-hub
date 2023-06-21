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
    <title>{C} - Strings</title>
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
                                <h5 class="m-b-10">Chapter 6</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-minus"></i></li>
                                <li class="breadcrumb-item"><a href="#!">C Programming Strings</a></li>
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
                            <h4 style="color: #FC3;">C Programming Strings</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you'll learn about strings in C programming. You'll learn to declare them, initialize them and use them for various I/O operations with the help of examples.</p>
                            <p class="f-16">In C programming, a string is a sequence of characters terminated with a null character <span class="var hl">\0</span>. For example:</p>
                             <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">char</span> c[] =<span class="int">"c string"</span>;</pre></code>
                                        </div>                                        
                                    </div>
                                    <p class="f-16">When the compiler encounters a sequence of characters enclosed in the double quotation marks, it appends a null character <span class="var hl">\0</span> at the end by default</p>
                                    <div class="snippet"><code>
                                            <pre class="code-line" align="center">|c| |s|t|r|i|n|g|\0|</pre></code>
                                            <p class="card-text f-16 m-l-50" align="center">(Memory Diagram)</p>
                                    </div>                              
                            <i class="feather icon-minus st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>   <!-- end row -->

            
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y">How to declare a string?</h3>
                                    <p class="card-text f-16 m-l-50">Here's how you can declare strings:</p>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">char </span>s[<span class="int">5</span>];</pre></code>
                                    </div>
                                    </div>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                            <pre class="code-line">  s[0]   s[1]    s[2]    s[3]   s[4]</pre>
                                            <pre class="code-line">|      |       |       |      |      |</pre></code><br>
                                            <p class="card-text f-16 m-l-50">(String Declaration in C)</p>
                                        </div>
                                        <p class="f-16">Here, we have declared a string of 5 characters.</p>
                                    </div>
                                    </div>
                            <div class="card-body">
                                <div class="card-header"><h3 class="yellow-head un-y">How to initialize strings?</h3>
                                <p class="card-text f-16 m-l-50">You can initialize strings in a number of ways.</p>
                                    <div class="col-sm-8  mx-auto">                                        
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">char</span> c[] =<span class="int">"abcd"</span>;</pre>
                                            <pre class="code-line"><span class="var">char</span> c[50] =<span class="int">"abcd"</span>;</pre>
                                            <pre class="code-line"><span class="var">char</span> c[] ={<span class="int">'a', 'b', 'c', 'd', '\0'</span>};</pre>
                                            <pre class="code-line"><span class="var">char</span> c[5] ={<span class="int">'a', 'b', 'c', 'd', '\0'</span>};</pre></code>
                                        </div>
                                        <div class="snippet"><code>
                                            <pre class="code-line">  c[0]   c[1]    c[2]    c[3]   c[4]</pre>
                                            <pre class="code-line">|  a   |   b   |   c   |   e  |  \0  |</pre></code><br>
                                            <p class="card-text f-16 m-l-50">(String Initialization in C)</p>
                                        </div>
                                    </div>
                                    <p class="card-text f-16 m-l-50">Let's take another example:</p>
                                        <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">char</span> c[<span class="int">5</span>] =<span class="int">"abcde"</span>;</pre></code>
                                        </div>
                                        </div>
                                        <p class="card-text f-16 m-l-50">Here, we are trying to assign 6 characters (the last character is <span class="var hl">'\0'</span>) to a <span class="var hl">char</span> array having 5 characters. This is bad and you should never do this.</p><br>
                                    </div>
                                <h4 class="m-b-20 hov-blue">Assigning Values to Strings</h4>
                                <p class="card-text f-16 m-l-50">Arrays and strings are second-class citizens in C; they do not support the assignment operator once it is declared. For example,</p>
                                <div class="col-sm-8  mx-auto">
                                <div class="snippet"><code>
                                            <pre class="code-line"><span class="var">char</span> c[<span class="int">100</span>];</pre>
                                            <pre class="code-line">c = <span class="int">"C programming"</span>; // Error! array type is not assignable.</pre></code>
                                        </div>
                                </div>
                                        <p class="card-text f-16 m-l-50"><b>Note:</b> Use the <font color="cyan">strcpy() function</font> to copy the string instead.</p><br>
                                    <h4 class="m-b-20 hov-blue">Read String from the user</h4>
                                    <p class="card-text f-16 m-l-50">You can use the <span class="var hl">scanf()</span> function to read a string.</p>
                                    <p class="card-text f-16 m-l-50">The <span class="var hl">scanf()</span> function reads the sequence of characters until it encounters <font color="cyan">whitespace</font> (space, newline, tab, etc.).</p><br>

                                    <h4 class="m-b-20 hov-blue">Example 1: scanf() to read a string</h4>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space from < stdio.h></pre>
                                            <pre class="code-line"><span class="var">#include </span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">int</span><span class="int"> main</span>()</pre>
                                            <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">  char</span> name [<span class="int">20</span>];</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("Enter name: ");</pre>
                                            <pre class="code-line"><span class="int">  scanf</span>("%s", name);</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("Your name is: ", name);</pre>
                                            <pre class="code-line"><span class="var">  return</span><span class="int"> 0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    </div>
                                <hr>
                                <h4 class="m-b-20 hov-blue">Output</h4>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">Enter name: Amelia Watson</pre>
                                        <pre class="code-line">Your name is Amelia</pre></code>
                                    </div><br>
                                    </div>
                                    
                                    <p class="card-text f-16 m-l-50">Even though <span class="var hl">Amelia Watson</span> was entered in the above program, only <span class="var hl">"Amelia"</span> was stored in the <span class="var hl">name</span> string. It's because there was a space after <span class="var hl">Amelia</span>.</p><br>
                                    <p class="card-text f-16 m-l-50">Also notice that we have used the code <span class="var hl">name</span>  instead of <span class="var hl">&name</span> with <span class="var hl">scanf()</span></p>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="int">  scanf</span>("%s", name);</pre></code>
                                    </div>
                                    </div>
                                    <p class="card-text f-16 m-l-50">This is because <span class="var hl">name</span> is a <span class="var hl">char</span> array, and we know that array names decay to pointers in C.</p>
                                    <p class="card-text f-16 m-l-50">Thus, the <span class="var hl">name</span> in <span class="var hl">scanf()</span> already points to the address of the first element in the string, which is why we don't need to use <span class="var hl">&</span></p><br>

                                    <h4 class="m-b-20 hov-blue">How to read a line of text?</h4>
                                    <p class="card-text f-16 m-l-50">You can use the <span class="var hl">fgets()</span> function to read a line of string. And, you can use <span class="var hl">puts()</span> to display the string.</p><br>
                                    <h4 class="m-b-20 hov-blue">Example 2: fgets() and puts()</h4>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space from < stdio.h></pre>
                                            <pre class="code-line"><span class="var">#include </span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">int</span><span class="int"> main</span>()</pre>
                                            <pre class="code-line">  {</pre>
                                            <pre class="code-line"><span class="var">  char</span> name [<span class="int">30</span>];</pre>
                                            <pre class="code-line">  fgets(name, <span class="var">  sizeof</span>(name), <span class="int">  stdin; //  read string</span></pre>
                                            <pre class="code-line"><span class="int">  printf</span>("Name: ");</pre>
                                            <pre class="code-line"><span class="int">  puts</span>(name); // display string</pre>    
                                            <pre class="code-line"><span class="var">  return</span><span class="int"> 0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Output</h4>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                            <pre class="code-line">Enter name: Mori Calliope</pre>
                                            <pre class="code-line">Name: Mori Calliope</pre></code>
                                    </div>
                                    </div>
                                    <p class="card-text f-16 m-l-50">Here, we have used <span class="var hl">fgets()</span> function to read a string from the user.</p>
                                    <p class="card-text f-16 m-l-50"><span class="var hl">fgets(name, sizeof(name), stdlin); // read string</span></p>
                                    <p class="card-text f-16 m-l-50">The <span class="var hl">sizeof(name)</span> results to 30. Hence, we can take a maximum of 30 characters as input which is the size of the <span class="var hl">name</span> string</p>
                                    <p class="card-text f-16 m-l-50">To print the string, we have used <span class="var hl">puts(name);</span>.</p><br>
                                    <p class="card-text f-16 m-l-50"><b>Note:</b> The <span class="var hl">gets()</span> function can also be to take input from the user. However, it is removed from the C standard.</p>
                                    <p class="card-text f-16 m-l-50">It's because <span class="var hl">gets()</span> allows you to input any length of characters. Hence, there might be a buffer overflow.</p><br>
                                    <h4 class="m-b-20 hov-blue">Passing Strings to Functions</h4>
                                    <p class="card-text f-16 m-l-50">Strings can be passed to a function in a similar way as arrays.</p><br>
                                    <h4 class="m-b-20 hov-blue">Example 3: Passing string to a Function</h4>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space from < stdio.h></pre>
                                            <pre class="code-line"><span class="var">#include </span>< stdio.h></pre>
                                            <pre class="code-line"><span class="var">void</span><span class="int"> displayString</span>(<span class="var">char</span> str[]);</pre><br>
                                            <pre class="code-line"><span class="var">int</span> char[<span class="int">50</span>];</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("Enter string: ");</pre>
                                            <pre class="code-line">  {</pre>
                                            <pre class="code-line">  fgets(str, <span class="var">  sizeof</span>(str), <span class="int">  stdin;</span></pre>
                                            <pre class="code-line">  displayString(str);     // Passing string to a function.</span></pre>
                                            <pre class="code-line"><span class="var">  return</span><span class="int"> 0</span>;</pre>
                                            <pre class="code-line">}</pre>
                                            <pre class="code-line"><span class="var">void</span><span class="int"> displayString</span>(<span class="var">char</span> str[]);</pre>
                                            <pre class="code-line">{</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("String Output: ");</pre>
                                            <pre class="code-line"><span class="int">  puts</span>(str);</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    </div>
                                    <h4 class="m-b-20 hov-blue">Strings and Pointers</h4>
                                    <p class="card-text f-16 m-l-50">Similar like arrays, string names are "decayed" to pointers. Hence, you can use pointers to manipulate elements of the string. We recommended you to check <font color ="cyan">C Arrays and Pointers</font> before you check this example.</p><br>
                                    <h4 class="m-b-20 hov-blue">Example 4: Strings and Pointers</h4>
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                            <pre class="code-line">// remove space from < stdio.h></pre>
                                            <pre class="code-line"><span class="var">#include </span>< stdio.h></pre>
                                           <pre class="code-line"><span class="var">int</span><span class="int"> main</span>(<span class="int">void</span>) {</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("%c", *name);     // Output: H</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("%c", *(name+<span class="int">1</span>));     // Output: a</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("%c", *(name+<span class="int">7</span>));     // Output: o</pre><br>
                                            <pre class="code-line"><span class="var">  void</span> *namePtr;</pre><br>
                                            <pre class="code-line">  namePtr = name;</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("%c", *name);     // Output: H</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("%c", *(name+<span class="int">1</span>));     // Output: a</pre>
                                            <pre class="code-line"><span class="int">  printf</span>("%c", *(name+<span class="int">7</span>));     // Output: o</pre>
                                            <pre class="code-line">}</pre></code>
                                    </div>
                                    </div>
                                    <br>
                                    <h4 class="m-b-20 hov-blue">Commonly Used String Functions</h4>
                                    <ul class="card-text f-16 m-l-50">
                                        <li>strlen() - calculates the length of a string</li>
                                        <li>strcpy() - copies a string to another</li>
                                        <li>strcmp() - compares two strings</li>
                                        <li>strcat() - concatenates two strings</li>
                                    </ul>
                                    <br>
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
                            <a class="page-link" href="5-arrays-functions.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="6-string-functions.php">Next Topic</a>
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