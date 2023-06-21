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
    <title>{C} - getchar() and putchar()</title>
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
                                <li class="breadcrumb-item"><a href="#!">getchar() and putchar()</a></li>
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
                            <h4 style="color: #FC3;">C getchar() and putchar()</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">The <span class="function hl">getchar()</span> function in C reads the next character from stdin and the <span class="function hl">putchar()</span> function in C writes a character to stdout.</p>
                            <i class="feather icon-corner-down-left st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] start -->

            
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">

                            <div class="card-header"><h2 class="yellow-head un-y">putchar()</h2> </div>
                            <div class="card-body">
                                 <h4 class="m-l-50 hov-blue">putchar() prototype</h4>
                               <div class="col-sm-8  mx-auto">
                                            <div class="snippet"><code><pre class="code-line">int putchar(int ch);</pre></code></div></div>
                                <br>
                               <p class="card-text f-16 m-l-50">The <span class="hl function">putchar()</span> function takes an integer argument to write it to <span class="hl">stdout</span> . The integer is converted to unsigned char and written to the file. A call to <span class="hl">putchar(ch)</span> is equivalent to <strong>putc(ch, stdout).</strong> </p>
                               <br>
                               <p class="card-text f-16 m-l-50">It is defined in <span class="head hl">&ltcstudio></span> header file.</p>
                               <br>
                                <h4 class="m-l-50 hov-blue">putchar() Parameters</h4>
                               <br>
                               <p class="card-text f-16 m-l-50"><span class="hl">ch</span>:The character to be written.</p>
                               <br><hr><br>
                               <h4 class="m-l-50 hov-blue">putchar() Return Values</h4>
                               <br>
                               <p class="card-text f-16 m-l-50">On success, the <span class="hl">putchar()</span>function returns the character represented by<span class="hl">ch</span>.On failure, it returns<span class="hl">EOF</span>and sets the error indicator on <span class="hl">stdout</span>.</p><br>
                                <h4 class="m-l-50 hov-blue">Example: How putchar() function works</h4>
                               <br>
                               <div class="col-sm-8  mx-auto">
                                            <div class="snippet"><code><pre class="code-line"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> &lt;cstdio&gt;</span></pre>
                                            <pre class="code-line"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span></pre>
                                            <pre class="code-line"></span>{</pre>   
                                            <pre class="code-line"><span class="hljs-keyword">for</span> (<span class="hljs-keyword">int</span> i=<span class="hljs-number">48</span>; i&lt;<span class="hljs-number">58</span>; i++)</pre>
                                            <pre class="code-line">{</pre>
                                            <pre class="code-line"><span class="hljs-comment">/*  Writes the equivalent character */</span></pre>
                                            <pre class="code-line"><span class="hljs-built_in">putchar</span>(i);</pre>
                                            <pre class="code-line"><span class="hljs-built_in">putchar</span>(<span class="hljs-string">' '</span>);</pre>
                                            <pre class="code-line">}</pre>
                                            <pre class="code-line"><span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;</pre>
                                            <pre class="code-line">}</pre></code>
                                            </div>
                                        </div>
                                        <p class="card-text f-16 m-l-50 m-t-20">When you run the program, the output will be:</p>
                                        <div class="col-sm-8  mx-auto">
                                            <div class="snippet"><code><pre class="code-line">0 1 2 3 4 5 6 7 8 9</pre></code>
                                            </div>
                                        </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h2 class="yellow-head un-y ">getchar()</h2></div>
                            <div class="card-body">
                                 <h4 class="m-l-50 hov-blue">getchar() prototype</h4>
                                   <div class="col-sm-8  mx-auto">
                                            <div class="snippet"><code>
                                                <pre class="code-line">int getchar();</pre></code>
                                            </div>
                                        </div>
                            <hr><br>
                                <p class="card-text f-16 m-l-50">The <span class="hl function">getchar()</span> function takes an integer argument to write it to <span class="hl">stdin</span>.The integer is converted to unsigned char and written to the file. A call to <span class="hl">getchar(ch)</span> is equivalent to <strong>putc(ch, stdin).</strong> </p>
                               <br>
                               <p class="card-text f-16 m-l-50">It is defined in <span class="hl head">&ltcstudio></span> header file.</p>
                               <br><hr><br>
                                <h4 class="m-l-50 hov-blue">getchar() Parameters</h4>
                               <br>
                               <p class="card-text f-16 m-l-50"><span class="hl">ch</span>:The character to be written.</p>
                               <br>
                               <h4 class="m-l-50 hov-blue">getchar() Return value</h4>
                               <br>

                               <ul><li class="f-16 m-l-50">On success, the <span class="hl function">getchar()</span> function returns the entered character.</li>
                                    <li class="f-16 m-l-50">On failure, it returns <span class="var hl">EOF</span>.

                                        <ul><li>If the failure is caused due to end of file condition, it sets the <span class="var hl">eof</span> indicator on <span class="head hl">stdin</head>.</li>
                                            <li>If the failure is caused by some other error, it sets the <span class="text-danger hl">error</span> indicator on <span class="head hl">stdin</spans>.</li>
                                        </ul></li>
                                </ul><br>

                             <h4 class="m-l-50 hov-blue">Example: How getchar() function works</h4>
                               <div class="col-sm-8  mx-auto">
                                            <div class="snippet"><code><pre class="code-line"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;iostream&gt;</span></span></pre>
<pre class="code-line"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;cstdio&gt;</span></span></pre><br>

<pre class="code-line"><span class="hljs-keyword">using</span> <span class="hljs-keyword">namespace</span> <span class="hljs-built_in">std</span>;</pre><br>

<pre class="code-line"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span></pre>
<pre class="code-line"></span>{</pre>
    <pre class="code-line"><span class="hljs-keyword">  int</span> c,i=<span class="hljs-number">0</span>;</pre>
    <pre class="code-line"><span class="hljs-keyword">  char</span> str[<span class="hljs-number">100</span>];</pre><br>
    
    <pre class="code-line"><span class="hljs-built_in">  cout</span> &lt;&lt; <span class="hljs-string">"Enter characters, Press Enter to stop\n"</span>;</pre><br>
    
    <pre class="code-line"><span class="hljs-keyword">  do</span></pre>
    <pre class="code-line">  {</pre>
        <pre class="code-line">    c = getchar();</pre>
        <pre class="code-line">    str[i] = c;</pre>
        <pre class="code-line">    i++;</pre>
    <pre class="code-line">  } <span class="hljs-keyword">while</span>(c!=<span class="hljs-string">'\n'</span>);</pre><br>
    
    <pre class="code-line"><span class="hljs-built_in">  cout</span> &lt;&lt; str;</pre>
    <pre class="code-line"><span class="hljs-keyword">  return</span> <span class="hljs-number">0</span>;</pre>
<pre class="code-line">}</pre></code>
                                            </div>
                                        </div>
                                        <p class="card-text f-16 m-l-50 m-t-20">When you run the program, a possible output will be:</p>
                                <div class="col-sm-8  mx-auto">
                                            <div class="snippet"><code><pre class="code-line">Enter characters, Press Enter to stop</pre>
                                            <pre class="code-line">rtq paSd12 6.2 haQ</pre>
                                            <pre class="code-line">rtq paSd12 6.2 haQ</pre></code>
                                            </div>
                                        </div>
                                <hr>
                            </div></div></div></div>

            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
            <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item m-r-50">
                            <a class="page-link" href="2-standard-files.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="2-gets-puts.php">Next Lesson</a>
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