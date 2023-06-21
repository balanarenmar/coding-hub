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
    <title>{C} - Getting Started</title>
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
                                <h5 class="m-b-10">Chapter 1</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-home"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Introduction</a></li>
                                <li class="breadcrumb-item"><a href="#!">Getting Started</a></li>
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
                            <h4 style="color: #FC3;">Environment Setup</h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">
                               Before you can start coding and learning, you must first set up your environment for C programming language.</p>
                            <p class="f-16"> You will need the following two software tools available on your computer: (a) <strong>Text Editor</strong> and (b) <strong>The C Compiler</strong>. Or you can also install an IDE to make the process easier.
                            </p>
                            <i class="feather icon-check-circle st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
                <!-- [ dark-layout ] end -->
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            
            <div class="row">
                <div class="col-md-6">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h4 class="yellow-head un-y">Text Editor</h4></div>
                            <div class="card-body">
                                <p class="card-text f-14">This will be used to type your program. Examples of few a editors include Windows Notepad, OS Edit command, Brief, Epsilon, EMACS, Sublime, Visual Studio Code and vim or vi.</p>
                                <p class="card-text f-14">The name and version of text editors can vary on different operating systems. For example, Notepad will be used on Windows, and vim or vi can be used on windows as well as on Linux or UNIX.</p>
                                <p class="card-text f-14">The files you create with your editor are called the source files and they contain the program source codes. The source files for C programs are typically named with the extension ".c".</p>
                                <p class="card-text f-14">Before starting your programming, make sure you have one text editor in place and you have enough experience to write a computer program, save it in a file, compile it and finally execute it.</p>
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h4 class="yellow-head un-y">The C Compiler</h4></div>
                            <div class="card-body">
                                <p class="card-text f-14">The source code written in source file is the human readable source for your program. It needs to be "compiled", into machine language so that your CPU can actually execute the program as per the instructions given.</p>
                                <p class="card-text f-14">The compiler compiles the source codes into final executable programs. The most frequently used and free available compiler is the GNU C/C++ compiler, otherwise you can have compilers either from HP or Solaris if you have the respective operating systems.</p>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark">
                            <a id="section_ide"></a>
                            <div class="card-header"><h4 class="yellow-head un-y">Integrated Development Environment (IDE)</h4></div>
                            <div class="card-body">
                                <p class="card-text f-16"> An integrated development environment (IDE) is software for building applications that combines common developer tools into a single graphical user interface (GUI). An IDE typically consists of:</p>
                                <ul>
                                    <li class="m-b-10">
                                        <span class="text-info"><strong>Source code editor:</strong></span> A text editor that can assist in writing software code with features such as syntax highlighting with visual cues, providing language specific auto-completion, and checking for bugs as code is being written.
                                    </li>
                                    <li class="m-b-10">
                                        <span class="text-info"><strong>Compiler:</strong></span> Compilers transform source code that is written in a human readable/writable language in a form that computers can execute.
                                    </li>
                                    <li class="m-b-10">
                                        <span class="text-info"><strong>Local Build Automation:</strong></span> Utilities that automate simple, repeatable tasks as part of creating a local build of the software for use by the developer, like compiling computer source code into binary code, packaging binary code, and running automated tests.
                                    </li>
                                    <li class="m-b-10">
                                        <span class="text-info"><strong>Debugger:</strong></span> A program for testing other programs that can graphically display the location of a bug in the original code.
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                
            </div>
            <div class="row">
                <div class="container">
                    <hr style="border-top: 1px solid #FC3">
                    <div class="col-sm-12 mb-3">
                        <h3 class="mb-3">You may choose to install one of these IDE's to help you start your first C program:</h3>
                        <hr>
                       <div class="row text-center">
                            <div class="col-sm-6">
                                <img src="assets/images/icon/codeblocks.png" width="150px"  class="m-b-10">
                            </div>
                            <div class="col-sm-6">
                                <img src="assets/images/icon/dev.png" width="150px" class="m-b-10">
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col-sm-6">
                                    <a class="btn mb-1 btn-primary btn-lg" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Code::Blocks</a>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn mb-1 btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Dev C++</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="mb-0 f-14"><a href="https://www.codeblocks.org/" class="text-info">Code::Blocks</a> is a free C/C++ and Fortran IDE built to meet the most demanding needs of its users. It is designed to be very extensible and fully configurable.</p>
                                            <p class="mb-0 f-14">Built around a plugin framework, Code::Blocks can be extended with plugins. Any kind of functionality can be added by installing/coding a plugin. For instance, event compiling and debugging functionality is provided by plugins!</p>
                                            <br><h5>Steps:</h5>
                                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Windows</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mac</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Linux</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <ol class="mb-0 f-14">
                                                                    <li>Visit <a href="https://www.codeblocks.org/" class="text-info">CodeBlocks.org</a>'s official webiste.</li>
                                                                    <li> Click Download from the menu, then select <em>download the binary release</em>.</li>
                                                                    <li>Go to your operating platform section (e.g., Windows XP / Vista / 7 / 8.x / 10), then download the installer with GCC Compiler, or Click here to <a href="http://sourceforge.net/projects/codeblocks/files/Binaries/17.12/Windows/codeblocks-17.12mingw-setup.exe" class="text-info">download</a>.</li>
                                                                    <li>Double-click to run the downloaded installer and click Next on the pop-up window. Now click on <strong>“I Agree”</strong> to accept the license agreement.</li>
                                                                    <li>On the new pop-up, don’t change the preset configurations, and just click <strong>Next</strong> and then change the installation directory if you want (default directory recommended). Click <strong>Install.</strong></li>
                                                                    <li>Wait a few minutes for installation to finish. A new pop-up will then ask you to run Codeblocks. Click <strong>YES</strong>, and then it shows the compiler Codeblocks detected. Click <strong>OK</strong>.</li>
                                                                    <li>Now we have installed Codeblocks on Windows.</li>
                                                                    <li>We need to verify the Compiler and Debugger path <em>(this step is optional)</em>.
                                                                        <ul>
                                                                            <li>Go to menu options and click on Settings >> Compiler. In the selected compiler, by default, it shows GNU GCC Compiler. Now select the “Toolchain Executables” tab from the below tabs and check the Compiler’s Installation Directory is set to <code class="text-warning">C:\Program Files\codeblocks\MinGW.</code></li>
                                                                            <li>Similarly, for debugger path: Settings >> Debugger >> GDB/CDB debugger >> Default. In Executable, the path should be<br> <code class="text-warning">C:\Program Files\codeblocks\MinGW\bin\gdb.exe</code> or <code class="text-warning">C:\MinGW\bin\gdb.exe</code> if you have installed MinGW compiler before installing Codeblocks.</li>
                                                                        </ul>
                                                                    </li>
                                                                </ol>
                                                        
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                        <p class="mb-0">Installing Code::Blocks on a Mac is a single-step process. To install Codeblock on Mac, you need Xcode first because the Mac version relies on the Xcode distribution from Apple for its compiler.</p><br>
                                                        <h5>Install Xcode on Mac:</h5>
                                                        <ol class="mb-0 f-14">
                                                            <li>For installing Xcode, go to the Appstore and enter ‘Xcode’ in the search bar. Then click on the app.</li>
                                                            <li>Click on <strong>Get</strong> and <strong>Install App</strong>. Next, enter your Apple ID and password to download Xcode.</li>
                                                            <li>After the download is complete, open the application, agree to the license agreement, and finally enter your password to complete the Xcode installation.</li>
                                                            <li>Installing just Xcode isn’t enough, as we also need the GCC compiler for that. Go to the Apple developers site and log in with your ID.</li>
                                                            <li>Search for <strong>Command-line tools</strong> and download the <strong>dmg</strong> file. Once the download is complete, you’ll get a package file <strong>(.pkg)</strong>. Just double-click it and accept all defaults to complete the installation.</li>
                                                        </ol>
                                                        <br>
                                                        <h5>Installing CodeBlocks:</h5>
                                                        <ol class="mb-0 f-14">
                                                            <li>Go to <a href="https://www.codeblocks.org/" class="text-info">codeblocks.org</a>. Click Download from the menu. Next, click on download the binary release.</li>
                                                            <li>Then, go to your operating platform section (e.g. Mac OS X). Click on the link opposite to CodeBlocks-13.12-mac.zip to download the package, or click here to <a href="http://sourceforge.net/projects/codeblocks/files/Binaries/13.12/MacOS/CodeBlocks-13.12-mac.zip" class="text-info">download</a>.</li>
                                                            <li>Now extract the downloaded file and open a New Finder window. Click on Application and move the extracted CodeBlocks file here (in applications).</li>
                                                            <li>We need to authorize CodeBlocks to run. Now, go to <br><code class="text-warning f-14">System Preferences >> Security & Privacy.</code></li>
                                                            <li>Now, under the General tab, we need to click on lock pad, shown below, and enter the password to unlock.</li>
                                                            <li>In <strong>“Allow app downloaded from”</strong>, click on open anyway, a window appears showing the verification process.</li>
                                                            <li>Then, a new window will open asking us to run CodeBlocks. Click on <strong>Open</strong>. The first time it opens, all compilers get detected. You need to click on <strong>OK</strong> so you can change the compiler.</li>
                                                            <li>We have successfully installed CodeBlocks on your Mac.</li>
                                                        </ol>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                        <p class="mb-0">Installing CodeBlocks on Linux is easier than both Mac and Windows because it is already present in the package repository by default. All you need to do is update or install the stable version.</p><br>
                                                        <ol class="mb-0 f-14">
                                                            <li>Open the terminal and type the following commands one by one:
                                                                <ul>
                                                                    <li><code class="text-warning f-14">sudo add-apt-repository ppa:damien-moore/codeblocks-stable</code></li>
                                                                    <li><code class="text-warning f-14">sudo apt update</code></li>
                                                                    <li><code class="text-warning f-14">sudo apt install codeblocks codeblocks-contrib</code></li>
                                                                </ul>
                                                            </li>
                                                            <li>After the installation, open Codeblocks. On the first launch, as with Mac and Windows, it will detect compilers present on the system.</li>
                                                            <li>Select the according to your preference or leave it for default. Then click <strong>OK</strong>.</li>
                                                            <li>That's it! CodeBlocks is now installed on your Linux/Ubuntu device.</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="mb-0 f-14"><a href="https://www.bloodshed.net/" class="text-info">Dev-C++</a> , developed by Bloodshed Software, is a fully-featured graphical IDE for C and C++ programming. It is distributed under the GNU General Public License for programming in C and C++.</p>
                                            <br><h5>Steps:</h5>
                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="pills-win-tab" data-toggle="pill" href="#pills-win" role="tab" aria-controls="pills-win" aria-selected="true">Windows</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-mac-tab" data-toggle="pill" href="#pills-mac" role="tab" aria-controls="pills-mac" aria-selected="false">Mac</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-lin-tab" data-toggle="pill" href="#pills-lin" role="tab" aria-controls="pills-lin" aria-selected="false">Ubuntu / Linux</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-win" role="tabpanel" aria-labelledby="pills-win-tab">
                                                                <ol class="mb-0 f-14">
                                                                    <li> Head over to <a href="http://www.bloodshed.net/"><span class="text-info">bloodshed.net</span></a>'s official website.</li>
                                                                    <li>Click the package <em>Dev-C++ 5.0 (4.9.9.2) with Mingw/GCC 3.4.2 compiler and GDB 5.2.1 debugger</em>.</li>
                                                                    <li>You will be redirected to SourceForge and the download will start automatically. This program is compatible with Windows 7/8/XP/Vista/10.</li>
                                                                    <li>After the download is finished click on the installer and run as administrator.</li>
                                                                    <li>The installer will then ask you to select your language.</li>
                                                                    <li>The license agreement will appear. Click on “I agree” to proceed.</li>
                                                                    <li>Then you will choose which components of Dev C++ will be installed, you can just press next.</li>
                                                                    <li>By default, the destination folder is in C drive. You are free to change this destination folder but make sure you have enough memory. Click on install button.</li>
                                                                    <li>Now, Dev C++ is installed successfully on your Windows. Select ” Run Dev C++” to run it and click on ” Finish” button.</li>
                                                                </ol>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-mac" role="tabpanel" aria-labelledby="pills-mac-tab">
                                                            <p class="mb-0 f-14">Unfortunately, Dev-C++ for Mac has not been released by Orwell so far, so you can't simply use it in Macintosh devices. However, there are many C/C++ IDEs that are compatible for this OS.
                                                            </p>
                                                             
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-lin" role="tabpanel" aria-labelledby="pills-lin-tab">
                                                            <ol class="mb-0 f-14">
                                                                    <li>Check if you have an Ubuntu 32-bit or 64-bit system. Open the Terminal either through Ubuntu Dash or the Ctrl+Alt+T shortcut.</li>
                                                                    <li> Installing “Wine”. Use the following command in terminal to install wine to your Ubuntu OS: 
                                                                        <ul style="list-style-type: none">
                                                                            <li><code> sudo apt-get install wine</code></li>
                                                                        </ul></li>
                                                                    <li>Confirm installation by typing "<code>wine</code>" in the command line. Then you should get this message:</li>
                                                                        <ul style="list-style-type: none">
                                                                                <li class="f-12">Usage: wine PROGRAM [ARGUMENTS…] Run the specified program</li>
                                                                                <li class="f-12">wine –help Display this help and exit</li>
                                                                                <li class="f-12">wine –version Output version information and exit</li>
                                                                            </ul></li>
                                                                    <li>Download Dev-C++ portable version from <a href="https://sourceforge.net/projects/orwelldevcpp/files/Portable%20Releases/Dev-Cpp%205.11%20TDM-GCC%20x64%204.9.2%20Portable.7z/download" class="text-info">SourceForge.</a> </li>
                                                                    <li>Extract the file, then right click and open the terminal in the same directory where devcpp.exe exists.</li>
                                                                    <li>Run the following command:
                                                                        <ul style="list-style-type: none">
                                                                                    <li> <code>wine devcpp.exe</code></li>
                                                                        </ul></li>
                                                                    <li>You are now done. The program should now work properly. If not, try re-installing wine.</li>
                                                                </ol>
                                                        </div>
                                                    </div>
                                                
                                             <!-- 1st Card end -->
                                        </div><!--  Card Body end -->
                                    </div><!-- Card end -->
                                </div>
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
                        <a class="page-link" href="1-welcome.php" tabindex="-1">Previous Lesson</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="1-identifiers.php">Next Topic</a>
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


    <!-- prism Js -->
    <script src="assets/js/plugins/prism.js"></script>

</body>

</html>