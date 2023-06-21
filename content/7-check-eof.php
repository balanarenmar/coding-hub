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
    <title>{C} - Checking for EOF</title>
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

<body class="background-img-3">
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
                                <h5 class="m-b-10">Chapter 7</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-triangle"></i></li>
                                <li class="breadcrumb-item"><a href="#!">File Handling</a></li>
                                <li class="breadcrumb-item"><a href="#!">Checking for EOF</a></li>
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
                            <h4 style="color: #FC3;">Checking for End Of File</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">
                               EOF stands for End of File.</p>
                            <p class="f-16">
                               It is a condition in a computer operating system where no more data can be read from a data source. The data source is usually called a file or stream.</p>
                            <p class="f-16 m-l-30">
                               The keyboard represents a text file (a file of characters). C interprets program formatting instructions that we provide and change the data into the appropriate form.</p>
                            <p class="f-16 m-l-30">
                               The standard input file is usually <strong>buffered</strong>. In other words, a temporary storage area holds the input character sequence until one complete line has been received. Thus, we can backspace and change the input sequence before pressing the enter key.</p>  
                            <p class="f-16 m-l-30">
                               The standard output file is the <strong>monitor</strong>. Like the keyboard, it is a text file. When you need to display data that is not text, it must be converted to text before it is written. There is also a standard function to convert and display data.</p>  
                            <i class="feather icon-triangle st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
                <!-- [ dark-layout ] end -->
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
          
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">EOF character</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">Input from a terminal never really "ends" (unless the device is disconnected), but it is useful to enter more than one "file" into a terminal, so a key sequence is reserved to indicate end of input.</p>
                                <p class="card-text f-16 m-l-50">In UNIX the translation of the keystroke to EOF is performed by the terminal driver, so a program does not need to distinguish terminals from other input files. </p>
                                <p class="card-text f-16 m-l-50">By default, the driver converts a Control-D character at the start of a line into an end-of-file indicator. To insert an actual Control-D (ASCII 04) character into the input stream, the user precedes it with a "quote" command character (usually Control-V).</p>
                                <br>
                                
                    </div>
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">getc()</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">It reads a single character from the input and return an integer value. If it fails, it returns EOF.</p>
                                <p class="card-text f-16 m-l-50">Here is the syntax of <span class="function hl">getc()</span> in C language,</p>

                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">getc</span>(FILE *stream);</pre></code>
                                    </div>
                                </div>

                                <p class="card-text f-16 m-l-50">Here is an example of EOF in C language,</p>
                                <p class="card-text f-16 m-l-50">Let’s say we have “new.txt” file with the following content.</p>

                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">This is demo!</pre>
                                        <pre class="code-line">This is demo!</pre>
                                        </code>
                                    </div>
                                </div>

                                <h4 class="m-b-20 m-l-50 hov-blue">Example: EOF</h4>

                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {<br>   FILE *f = <span class="function">fopen</span>(<span class="char">"new.txt", "r"</span>);<br>   <span class="function">int</span> c = getc(f);<br>   <span class="function">while</span> ( c!= EOF) { <br>      <span class="function">putchar</span>(c);<br>      c = <span class="function">getc</span>(f);<br>   }<br>   <span class="function">fclose</span>(f);<br>   <span class="function">getchar()</span>;<br>   return</span> <span class="int">0</span>;<br>}</pre>
                                        </code>
                                    </div>
                                </div>

                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">This is demo!</pre>
                                            <pre class="code-line">This is demo!</pre></code>
                                        </div>
                                    </div>

                                <br>
                                <p class="card-text f-16 m-l-50">In the above program, file is opened by using <span class="function hl">fopen()</span>. When integer variable c is not equal to EOF, it will read the file.</p>
                                <p class="card-text f-16 m-l-50">The function <span class="function hl">getc()</span> is reading the characters from the file.</p>
                                <br><hr>
                            
                        </div>
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">feof()</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">The function <span class="function hl">feof()</span> is used to check the end of file after EOF.<br>It tests the end of file indicator. It returns non-zero value if successful otherwise, zero.</p>
                                <p class="card-text f-16 m-l-50">Here is the syntax of feof() in C language,</p>

                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">feof</span>(FILE *stream);</pre></code>
                                    </div>
                                </div>

                                <p class="card-text f-16 m-l-50">Here is an example of EOF in C language,</p>
                                <p class="card-text f-16 m-l-50">Let’s say we have “new.txt” file with the following content.</p>

                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">This is demo!</pre>
                                        <pre class="code-line">This is demo!</pre>
                                        </code>
                                    </div>
                                </div>

                                <h4 class="m-b-20 m-l-50 hov-blue">Example: EOF</h4>

                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdio.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {<br>   FILE *f = <span class="function">fopen</span>(<span class="char">"new.txt", "r"</span>);<br>   <span class="function">int</span> c = getc(f);<br>   <span class="function">while</span> ( c!= EOF) { <br>      <span class="function">putchar</span>(c);<br>      c = <span class="function">getc</span>(f);<br>   }<br>   <span class="variable">if</span> (<span class="function">feof</span>(f))<br>      <span class="function">printf</span>(<span class="char">"\n Reached to the end of file."</span>)<br>   <span class="function">else</span><br>      <span class="function">printf</span>(<span class="char">"\n Failure."</span>)<br><br>   <span class="function">fclose</span>(f);<br>   <span class="function">getchar()</span>;<br>   return</span> <span class="int">0</span>;<br>}</pre>
                                        </code>
                                    </div>
                                </div>

                                <h4 class="m-l-50 p-l-50 hov-blue">Output:</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">This is demo!</pre>
                                            <pre class="code-line">This is demo!</pre>
                                            <pre class="code-line">Reached to the end of file.</pre></code>
                                        </div>
                                    </div>

                                <br>
                                <p class="card-text f-16 m-l-50">In the above program, file is opened by using <span class="function hl">fopen()</span>. When integer variable c is not equal to EOF, it will read the file.</p>
                                <p class="card-text f-16 m-l-50">The function <span class="function hl">feof()</span> is checking again whether that pointer has reached to the end of file or not.</p>
                                <br><hr>
                        
                    </div>
                </div> <!-- end row-->



                </div> 
            </div>

            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
            <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item m-r-50">
                            <a class="page-link" href="7-file-input-output.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="quiz-7.php">Take Chapter 7 Quiz</a>
                        </li>
                    </ul>           
            </nav>
        </footer>
        <!-- [ Footer Content ] end -->
    </div>

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