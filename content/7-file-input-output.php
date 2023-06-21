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
    <title>{C} - File Input / Output</title>
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
                                <li class="breadcrumb-item"><i class="feather icon-folder"></i></li>
                                <li class="breadcrumb-item"><a href="#!">File Handling</a></li>
                                <li class="breadcrumb-item"><a href="#!">File Input/Output</a></li>
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
                            <h4 style="color: #FC3;">C File Handling</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">In this tutorial, you will learn about file handling in C.</p>
                            <p class="f-16">You will learn to handle standard I/O in C using <span class="hl function">fprintf()</span> , <span class="hl function">fscanf()</span> , <span class="hl function">fread()</span> , <span class="hl function">fwrite()</span> , <span class="hl function">fseek()</span> etc. with the help of examples.</p>
                            <br>
                            <p class="f-16">A file is a container in computer storage devices used for storing data.</p>
                            <i class="feather icon-folder st-icon bg-c-blue"></i>
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
                        <div class="card-header">
                            <h3 class="yellow-head un-y">Why files are needed?</h3>
                        </div>
                        <div class="card-body">
                            <ul class="f-16 m-l-50">
                                <li>When a program is terminated, the entire data is lost. Storing in a file will preserve your data even if the program terminates.</li>
                                <li>If you have to enter a large number of data, it will take a lot of time to enter them all.<br>However, if you have a file containing all the data, you can easily access the contents of the file using a few commands in C.</li>
                                <li>You can easily move your data from one computer to another without any changes.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y ">Types of Files</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">When dealing with files, there are two types of files you should know about:</p>
                                <ol class="f-16 m-l-50">
                                    <li>Text files</li>
                                    <li>Binary files</li>       
                                </ol><br>
                            <hr>
                                 <h4 class="m-b-20 hov-blue">1. Text files</h4>
                                 <p class="card-text f-16 m-l-50">Text files are the normal <b>.txt</b> files. You can easily create text files using any simple text editors such as Notepad.</p> 
                                 <p class="card-text f-16 m-l-50">When you open those files, you'll see all the contents within the file as plain text. You can easily edit or delete the contents.</p>
                                 <p class="card-text f-16 m-l-50">They take minimum effort to maintain, are easily readable, and provide the least security and takes bigger storage space.</p>
                            <hr>
                                 <h4 class="m-b-20 hov-blue">2. Binary files</h4>
                                 <p class="card-text f-16 m-l-50">Binary files are mostly the <b>bin</b> files in your computer.</p>
                                 <p class="card-text f-16 m-l-50">Instead of storing data in plain text, they store it in the binary form (0's and 1's).</p>
                                 <p class="card-text f-16 m-l-50">They can hold a higher amount of data, are not readable easily, and provides better security than text files.</p>   
                            </div>
                    </div>
                </div> <!-- end row-->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">File Operations</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">In C, you can perform four major operations on files, either text or binary:<span class="hl">=</span></p>

                            <ol class="f-16 m-l-50">
                                    <li>Creating a new file</li>
                                    <li>Opening an existing file</li>
                                    <li>Closing a file</li>
                                    <li>Reading from and writing information to a file</li>       
                            </ol><br>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">Working with files</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">When working with files, you need to declare a pointer of type file. This declaration is needed for communication between the file and the program.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">FILE *fptr;</pre>
                                        </code>
                                    </div>
                                </div>    
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y ">Opening a file - for creation and edit</h3></div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">Opening a file is performed using the <span class="hl function">fopen()</span> function defined in the <span class="hl head">stdio.h</span> header file.</p>
                            <p class="card-text f-16 m-l-50">The syntax for opening a file in standard I/O is:</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">ptr = fopen(<span class="char">"fileopen"</span>,<span class="char">"mode"</span>);</pre>
                                        </code>
                                    </div>
                                </div>
                            <p class="card-text f-16 m-l-50">For example:</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">fopen(<span class="char">"E:\\cprogram\\newprogram.txt"</span>,<span class="char">"w"</span>);</pre>
                                        <pre class="code-line">fopen(<span class="char">"E:\\cprogram\\oldprogram.bin"</span>,<span class="char">"rb"</span>);</pre></code>
                                    </div><br>
                                </div>
                                    <ul class="f-16 m-l-50">
                                        <li>Let's suppose the file <span class="hl">newprogram.txt</span> doesn't exist in the location <span class="hl">:\cprogram.</span> The first function creates a new file named <span class="hl">newprogram.txt</span> and opens it for writing as per the mode <b>'w'</b>.</li>
                                        <li>If you have to enter a large number of data, it will take a lot of time to enter them all.<br>However, if you have a file containing all the data, you can easily access the contents of the file using a few commands in C.</li>
                                        <li>You can easily move your data from one computer to another without any changes.</li>
                                    </ul>
                            <p class="card-text f-16 m-l-50">The reading mode only allows you to read the file, you cannot write into the file.</p>
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                            <thead style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <th></th>
                                                    <th>Opening Modes in Standard I/O</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <th>Mode</th>
                                                    <th>Meaning of Mode</th>
                                                    <th>During Inexistence of file</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <td><span class="hl">r</span></td>
                                                    <td>Open for reading.</td>
                                                    <td>If the file does not exist,<span class="hl">fopen()</span> returns NULL.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">rb</span></td>
                                                    <td>Open for reading in binary mode.</td>
                                                    <td>If the file does not exist,<span class="hl">fopen()</span> returns NULL.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">w</span></td>
                                                    <td>Open for writing.</td>
                                                    <td>If the file exists, its contents are overwritten.<br>If the file does not exist, it will be created.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">wb</span></td>
                                                    <td>Open for writing in binary mode.</td>
                                                    <td>If the file exists, its contents are overwritten.<br>If the file does not exist, it will be created.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">a</span></td>
                                                    <td>Open for append.<br>Data is added to the end of the file.</td><td>If the file does not exist, it will be created.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">ab</span></td>
                                                    <td>Open for append.<br>Data is added to the end of the file.</td><td>If the file does not exist, it will be created.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">r+</span></td>
                                                    <td>Open for both reading and writing.</td>
                                                    <td>If the file does not exist,<span class="hl">fopen()</span> returns NULL.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">rb+</span></td>
                                                    <td>Open for both reading and writing in binary mode.</td>
                                                    <td>If the file does not exist,<span class="hl">fopen()</span> returns NULL.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">w+</span></td>
                                                    <td>Open for both reading and writing.</td>
                                                     <td>If the file exists, its contents are overwritten.<br>If the file does not exist, it will be created.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">wb+</span></td>
                                                    <td>Open for both reading and writing in binary mode.</td>
                                                    <td>If the file exists, its contents are overwritten.<br>If the file does not exist, it will be created.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">a+</span></td>
                                                    <td>Open for both reading and appending.</td>
                                                    <td>If the file does not exist, it will be created.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">ab+</span></td>
                                                    <td>Open for both reading and appending in binary mode.</td>
                                                    <td>If the file does not exist, it will be created.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
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
                            <h3 class="yellow-head un-y">Closing a File</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">The file (both text and binary) should be closed after reading/writing.</p>
                            <p class="card-text f-16 m-l-50">Closing a file is performed using the <span class="hl function">fclose()</span> function.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet">
                                        <code><pre class="code-line">fclose(fptr);</pre></code>
                                    </div>
                                </div> 
                            <p class="card-text f-16 m-l-50">Here, <span class="hl">fptr</span> is a file pointer associated with the file to be closed. function.</p>   
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">Reading and writing to a text file</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">For reading and writing to a text file, we use the functions <span class="hl function">fprintf()</span>and <span class="hl function">fscanf()</span>.</p>
                            <p class="card-text f-16 m-l-50">They are just the file versions of <span class="hl function">printf()</span> and <span class="hl function">scanf()</span>. The only difference is that <span class="hl function">fprintf()</span>and <span class="hl function">fscanf()</span> expects a pointer to the structure FILE.</p>
                            <hr><br>
                            <h4 class="m-b-20 m-l-50 hov-blue">Example 1: Write to a text file</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlio.h&gt</span></pre>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlib.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   int</span> num;</pre>
                                        <pre class="code-line">   FILE *fptr;</pre><br>
                                        <pre class="code-line"><span class="comnt">   // use appropriate location if you are using MacOS or Linux</span></pre>
                                        <pre class="code-line">   fptr = <span class="function">fopen</span>(<span class="char">"C:\\program.txt"</span>,<span class="char">"w"</span>);</pre><br>
                                        <pre class="code-line"><span class="var">   if</span> (fptr == <span class="char">NULL</span>) {</pre>
                                        <pre class="code-line"><span class="function">      printf</span>(<span class="char">"Error!"</span>);</pre>
                                        <pre class="code-line"><span class="function">      exit</span>(<span class="char">1</span>);<br>   }</pre><br>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Enter num: "</span>);</pre>
                                        <pre class="code-line"><span class="function">   scanf</span>(<span class="char">"%d"</span>,&num);</pre><br>
                                        <pre class="code-line"><span class="function">   fprintf</span>(fptr,<span class="char">"%d"</span>,num);</pre>
                                        <pre class="code-line">   <span class="function">fclose</span>(fptr);</pre><br>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div><br>
                                <p class="card-text f-16 m-l-50">This program takes a number from the user and stores in the file <span class="hl">program.txt</span>.</p>
                                <p class="card-text f-16 m-l-50">After you compile and run this program, you can see a text file <span class="hl">program.txt</span> and <span class="hl function">scanf()</span> created in C drive of your computer. When you open the file, you can see the integer you entered.</p>
                          
                                <hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 2: Read from a text file</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlio.h&gt</span></pre>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlib.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   int</span> num;</pre>
                                        <pre class="code-line">   FILE *fptr;</pre><br>
                                        <pre class="code-line"><span class="var">   if</span> ((fptr = <span class="function">fopen</span>(<span class="char">"C:\\program.txt"</span>,<span class="char">"r"</span>)) == <span class="char">NULL</span>) {</pre>
                                        <pre class="code-line"><span class="function">      printf</span>(<span class="char">"Error! opening file"</span>);</pre><br>
                                        <pre class="code-line"><span class="comnt">      // Program exits if the file pointer returns NULL.</span></pre>
                                        <pre class="code-line"><span class="function">      exit</span>(<span class="char">1</span>)<br>    }</pre><br>
                                        <pre class="code-line"><span class="function">   fscanf</span>(fptr,<span class="char">"%d"</span>,num);</pre><br>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"Value of n=%d"</span>,num);</pre>
                                        <pre class="code-line">   <span class="function">fclose</span>(fptr);</pre><br>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div><br>

                            <p class="card-text f-16 m-l-50">This program reads the integer present in the <span class="hl">program.txt</span> file and prints it onto the screen.</p>
                            <p class="card-text f-16 m-l-50">Other functions like <span class="hl function">fgetchar()</span>, <span class="hl function">fputc()</span> etc. can be used in a similar way.</p>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">Reading and writing to a binary file</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">Functions <span class="hl function">fread()</span>and <span class="hl function">fwrite()</span>are used for reading from and writing to a file on the disk respectively in case of binary files.</p>
                            <hr><br>
                            <h4 class="m-b-20 m-l-50 hov-blue">Writing to a binary file</h4>
                            <p class="card-text f-16 m-l-50">To write into a binary file, you need to use the <span class="hl function">fwrite()</span> function. The functions take four arguments:</p>
                            <ol class="f-16 m-l-50">
                                    <li>address of data to be written in the disk</li>
                                    <li>size of data to be written in the disk</li>
                                    <li>number of such type of data</li>
                                    <li>pointer to the file where you want to write.</li>           
                            </ol><br>
                            <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line">fwrite(addressData, sizeData, numbersData, pointerToFile);</pre></code>
                                        </code>
                                    </div>
                            </div> 

                            <h4 class="m-b-20 m-l-50 hov-blue">Example 3: Write to a binary file using fwrite()</h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlio.h&gt</span></pre>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlib.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">struct</span><span class="char">threeNum</span> {</pre>
                                        <pre class="code-line"><span class="var">   int</span> n1, n2, n3;<br>};</pre><br>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   int</span> n;<br>}</pre>
                                        <pre class="code-line"><span class="var">   struct</span><span class="char">threeNum num</span>;</pre>
                                        <pre class="code-line">   FILE *fptr;</pre><br>
                                        <pre class="code-line"><span class="var">   if</span> ((fptr = <span class="function">fopen</span>(<span class="char">"C:\\program.bin"</span>,<span class="char">"w"</span>)) == <span class="char">NULL</span>) {</pre>
                                        <pre class="code-line"><span class="function">      printf</span>(<span class="char">"Error! opening file"</span>);</pre><br>
                                        <pre class="code-line"><span class="comnt">      // Program exits if the file pointer returns NULL.</span></pre>
                                        <pre class="code-line"><span class="function">      exit</span>(<span class="char">1</span>)<br>}</pre><br>
                                        <pre class="code-line"><span class="var">   for</span> (n = <span class="char">1</span>; n < <span class="char">5</span>; ++n) {</pre>
                                        <pre class="code-line">      num.n1 = n;</pre>
                                        <pre class="code-line">      num.n2 = <span class="char">5</span>*n;</pre>
                                        <pre class="code-line">      num.n3 = <span class="char">5</span>*n + <span class="char">1</span>;</pre>
                                        <pre class="code-line">      <span class="function">fwrite</span>(&num, <span class="function">sizeof</span>(struct threeNum), <span class="char">1</span>, fptr)<br>}</pre>
                                        <pre class="code-line">   <span class="function">fclose</span>(fptr);</pre><br>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div><br>
                                <p class="card-text f-16 m-l-50">In this program, we create a new file <span class="hl">program.bin</span>in the C drive.</p>
                                <p class="card-text f-16 m-l-50">We declare a structure <span class="hl">threeNum</span> with three numbers - <span class="hl">n1, n2 and n3</span>, and define it in the main function as num.</p>
                                <p class="card-text f-16 m-l-50">Now, inside the for loop, we store the value into the file using <span class="hl function">fwrite()</span>.</p>
                                <p class="card-text f-16 m-l-50">The first parameter takes the address of <span class="hl">num</span> and the second parameter takes the size of the structure <span class="hl">threeNum</span>.</p>
                                <p class="card-text f-16 m-l-50">Since we're only inserting one instance of <span class="hl">num</span>, the third parameter is <span class="hl">1</span>.And, the last parameter <span class="hl">fptr</span>* points to the file we're storing the data.</p>
                                <p class="card-text f-16 m-l-50">Since Finally, we close the file.</p>
                          
                                <hr>
                                <h4 class="m-b-20 m-l-50 hov-blue">Reading from a binary file</h4>
                                <p class="card-text f-16 m-l-50">Function <span class="hl function">fread()</span> also take 4 arguments similar to the <span class="hl function">fwrite()</span> function as above.</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="hl function">fread()</span>(addressData, sizeData, numbersData, pointerToFile);</code>
                                    </div>
                                </div> 
                                <h4 class="m-b-20 m-l-50 hov-blue">Example 4: Read from a binary file using fread()
                                </h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlio.h&gt</span></pre>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlib.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">struct</span><span class="char">threeNum</span> {</pre>
                                        <pre class="code-line"><span class="var">   int</span> n1, n2, n3;<br>};</pre><br>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   int</span> n;<br>};</pre>
                                        <pre class="code-line"><span class="var">   struct</span><span class="char">threeNum num</span>;</pre>
                                        <pre class="code-line">   FILE *fptr;</pre><br>
                                        <pre class="code-line"><span class="var">   if</span> ((fptr = <span class="function">fopen</span>(<span class="char">"C:\\program.bin"</span>,<span class="char">"rb"</span>)) == <span class="char">NULL</span>) {</pre>
                                        <pre class="code-line"><span class="function">      printf</span>(<span class="char">"Error! opening file"</span>);</pre><br>
                                        <pre class="code-line"><span class="comnt">      // Program exits if the file pointer returns NULL.</span></pre>
                                        <pre class="code-line"><span class="function">      exit</span>(<span class="char">1</span>)<br>};</pre><br>
                                        <pre class="code-line"><span class="var">   for</span> (n = <span class="char">1</span>; n < <span class="char">5</span>; ++n) {</pre>
                                        <pre class="code-line">   fread(&num, <span class="function">sizeof</span>(struct threeNum), <span class="char">1</span>, fptr);</pre>
                                        <pre class="code-line"><span class="function">   printf</span>(<span class="char">"n1: %d\tn2: %d\tn3: %d\n"</span>, num.n1, num.n2, num.n3);</pre>
                                        <pre class="code-line">   <span class="function">fclose</span>(fptr);</pre><br>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;</pre>
                                        <pre class="code-line">}</pre></code>
                                    </div>
                                </div><br>
                                <p class="card-text f-16 m-l-50">In this program, you read the same file program.bin and loop through the records one by one. <span class="hl">program.bin</span> and loop through the records one by one.</p>
                                <p class="card-text f-16 m-l-50">In simple terms, you read one <span class="hl">threeNum</span> record of <span class="hl">threeNum</span>, size from the file pointed by <span class="hl">*fptr</span>into the structure<span class="hl">num</span></p>
                                <p class="card-text f-16 m-l-50">Now, You'll get the same records you inserted in <b>Example 3</b>.</span>.</p>
                        </div>
                    </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y ">Getting data using fseek()</h3></div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">If you have many records inside a file and need to access a record at a specific position, you need to loop through all the records before it to get the record.</p>
                            <p class="card-text f-16 m-l-50">This will waste a lot of memory and operation time. An easier way to get to the required data can be achieved using <span class="hl char">fseek()</span>.</p>
                            <p class="card-text f-16 m-l-50">As the name suggests, <span class="hl char">fseek()</span> seeks the cursor to the given record in the file.</p>
                            <p class="card-text f-16 m-l-50">The syntax for opening a file in standard I/O is:</p>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">fseek</span>(FILE * stream, <span class="var">long int</span> offset, <span class="var">int</span> whence);</pre></code>
                                    </div>
                                </div>
                            <p class="card-text f-16 m-l-50">The first parameter stream is the pointer to the file. The second parameter is the position of the record to be found, and the third parameter specifies the location where the offset starts.</p>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                        <thead style="text-align: center; font-weight: bolder;">
                                            <tr>
                                                <th></th>
                                                <th>Different whence in fseek()</th>
                                            </tr>
                                            <tr>
                                                <th>Whence</th>
                                                <th>Meaning</th>
                                            </tr>
                                            </thead>
                                            <tbody style="text-align: center; font-weight: bolder;">
                                                <tr>
                                                    <td><span class="hl">SEEK_SET</span></td>
                                                    <td>Starts the offset from the beginning of the file.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">SEEK_END</span></td>
                                                    <td>Starts the offset from the end of the file.</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="hl">SEEK_CUR</span></td>
                                                    <td>Starts the offset from the current location of the cursor in the file.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                             </div>

                             <hr>
                             <h4 class="m-b-20 m-l-50 hov-blue">Example 5: fseek()
                                </h4>
                                <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlio.h&gt</span></pre>
                                        <pre class="code-line"><span class="function">#include</span> <span class="head">&ltstdlib.h&gt</span></pre>
                                        <pre class="code-line"><span class="var">struct</span><span class="char">threeNum</span>{</pre>
                                        <pre class="code-line"><span class="var">   int</span> n1, n2, n3;<br>};</pre>
                                        <pre class="code-line"><span class="var">int</span> <span class="function">main</span>() {</pre>
                                        <pre class="code-line"><span class="var">   int</span> n;</pre>
                                        <pre class="code-line"><span class="var">   struct</span><span class="char">threeNum num</span>;</pre>
                                        <pre class="code-line">   FILE *fptr;</pre><br>
                                        <pre class="code-line"><span class="var">   if</span> ((fptr = <span class="function">fopen</span>(<span class="char">"C:\\program.bin"</span>,<span class="char">"rb"</span>)) == <span class="char">NULL</span>) {</pre>
                                        <pre class="code-line"><span class="function">      printf</span>(<span class="char">"Error! opening file"</span>);</pre><br>
                                        <pre class="code-line"><span class="comnt">      // Program exits if the file pointer returns NULL.</span></pre>
                                        <pre class="code-line"><span class="function">      exit</span>(<span class="char">1</span>)<br>}</pre><br>
                                        <pre class="code-line"><span class="comnt">   // Moves the cursor to the end of the file</span></pre>
                                        <pre class="code-line">   <span class="function">fseek</span>(fptr, <span class="function">-sizeof</span>(struct threeNum), SEEK_END);</pre><br>
                                        <pre class="code-line"><span class="var">   for</span> (n = <span class="char">1</span>; n < <span class="char">5</span>; ++n) {</pre>
                                        <pre class="code-line">      fread(&num, <span class="function">sizeof</span>(struct threeNum), <span class="char">1</span>, fptr);</pre>
                                        <pre class="code-line"><span class="function">      printf</span>(<span class="char">"n1: %d\tn2: %d\tn3: %d\n"</span>, num.n1, num.n2, num.n3);</pre>
                                        <pre class="code-line">      fseek(fptr, <span class="function">-<span class="char">-2</span>*sizeof</span>(struct threeNum), SEEK_CUR);</pre>
                                        <pre class="code-line">   <span class="function">fclose</span>(fptr);</pre><br>
                                        <pre class="code-line"><span class="var">   return</span> <span class="int">0</span>;<br>}</pre></code>
                                    </div>
                                </div><br>
                                <p class="card-text f-16 m-l-50">This program will start reading the records from the file <span class="hl">program.bin</span> in the reverse order (last to first) and prints it.</p>
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
                            <a class="page-link" href="6-string-functions.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="7-check-eof.php">Next Topic</a>
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