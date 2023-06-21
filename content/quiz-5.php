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
    <title>{C} - Chapter 5 QUIZ</title>
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

<body class="background-img-2 container box-layout">
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
                                <h5 class="m-b-10">Chapter 5</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="fas fa-lightbulb"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Quiz # 5</a></li>
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
                            <h4 style="color: #FC3;">QUIZ # 5 </h4>
                        </div>
                        <div class="card-body">
                            <p class="f-16">Test your knowledge about what you've learned in the past lessons of Chapter 5.</p>
                            <p class="f-16">The quiz contains 20 questions and there is no time limit.</p>
                            <p class="f-16">The quiz is all about C Arrays.</p>
                            <p class="f-16 m-l-15"><strong>NOTE:</strong> <em>Only your first time taking the quiz will count towards the leaderboards...  </em></p>
                            <p class="f-18 text-center" style="color: #FC3;">Good Luck!</p>
                            <i class="fas fa-lightbulb st-icon bg-c-yellow"></i>
                        </div>
                    </div>
                </div>
                <!-- [ dark-layout ] end -->
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            <form action="quiz-5-result.php" method="post" id="quiz">
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 1 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">An _______ is a variable that can store multiple values.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/>
                                        <label for="question-1-answers-A"><li> integer</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                        <label for="question-1-answers-B"><li> array</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                        <label for="question-1-answers-C"><li> string</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                                        <label for="question-1-answers-D"><li> union</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 2 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Which of these choices are the correct way to initialize an array?</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                                        <label for="question-2-answers-A"><li> int mark()={1, 3, 5, 8}</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                                        <label for="question-2-answers-B"><li> float mark={1, 3, 5, 8}</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                                        <label for="question-2-answers-C"><li> int mark[]={1, 3, 5, 8}</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                                        <label for="question-2-answers-D"><li> float mark[]=(1, 3, 5, 8)</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 3 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Size and type of an array cannot be changed once it is declared</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                                        <label for="question-3-answers-A"><li> True</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                                        <label for="question-3-answers-B"><li> False</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 4 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question"></p>
                                <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">#include &ltstdio.h&gt</pre>
                                            <pre class="code-line">int main() {</pre>
                                            <pre class="code-line">  int values[3]</pre>
                                            <br>
                                            <pre class="code-line">  printf("Enter 3 integers: ");</pre>
                                            <pre class="code-line">  for(int i = 0; i < 3; ++i) {</pre>
                                            <pre class="code-line">    scanf("%d", &values[i]);</pre><br>
                                            <pre class="code-line">  }</pre><br>
                                            <pre class="code-line">  printf("\nDisplaying integers: ");</pre>
                                            <br>
                                            <pre class="code-line">  for(int i = 0; i < 3; ++i) {</pre>
                                            <pre class="code-line">    printf("%d ", values[i]);</pre></code>
                                            <pre class="code-line">  }</pre></code>
                                            <pre class="code-line">  return 0;</pre></code>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                </div>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                                        <label for="question-4-answers-A"><li> Enter 5 integers: 1 2 3<br> Displaying integers: 1 2 3</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                                        <label for="question-4-answers-B"><li> Enter 5 integers: 1 2 3<br> Displaying integers: 123</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                                        <label for="question-4-answers-C"><li> Enter 5 integers: 1 2 3<br> Displaying integers: 1, 2, 3</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                        <label for="question-4-answers-D"><li> Enter 5 integers: 1 2 3<br> Displaying integers: "1 2 3"</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 5 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">What is the first index of an array?</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                                        <label for="question-5-answers-A"><li> 2</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                                        <label for="question-5-answers-B"><li> 1</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                                        <label for="question-5-answers-C"><li> 3</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                                        <label for="question-5-answers-D"><li> 0</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 6 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">How to input from user and store it an array element?</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/>
                                        <label for="question-6-answers-A"><li> scanf("%d", &values[i]);</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                                        <label for="question-6-answers-B"><li> scanf("%s", &values[i]);</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                                        <label for="question-6-answers-C"><li> scanf("%*", &values[i]);</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                                        <label for="question-6-answers-D"><li> scanf("%i", &values[i]);</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 7 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">What is the correct way to initialize a two-dimensional array</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/>
                                        <label for="question-7-answers-A"><li> int c[2][3] = (1, 3, 0, -1, 5, 9);</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                                        <label for="question-7-answers-B"><li> int c[2][3] = ((1, 3, 0), (-1, 5, 9));</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                                        <label for="question-7-answers-C"><li> int c[2][3] = "1, 3, 0", "-1, 5, 9";</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                                        <label for="question-7-answers-D"><li> int c[2][3] = {{1, 3, 0}, {-1, 5, 9}};</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 8 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">This is an array with more than two dimensions</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required/>
                                        <label for="question-8-answers-A"><li> Indexed Arrays</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                                        <label for="question-8-answers-B"><li> Multidimensional Arrays</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                                        <label for="question-8-answers-C"><li> Linear Array</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                                        <label for="question-8-answers-D"><li> Associative Arrays</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 9 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Passing array elements to a function is similar to passing ________ to a function.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required/>
                                        <label for="question-9-answers-A"><li> integers</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                                        <label for="question-9-answers-B"><li> variables</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                                        <label for="question-9-answers-C"><li> strings</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                                        <label for="question-9-answers-D"><li> arrays</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 10 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">To pass multidimensional arrays to a function, only the ____ of the array is passed to the function</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required/>
                                        <label for="question-10-answers-A"><li> string</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                                        <label for="question-10-answers-B"><li> attribute</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                                        <label for="question-10-answers-C"><li> name</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                                        <label for="question-10-answers-D"><li> element</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

           <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 11 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">What will be the printed output of this code?</p>
                                <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">#include &ltstdio.h&gt</pre>
                                            <pre class="code-line">void display(int age1, int age2) {</pre>
                                            <pre class="code-line">  printf("%d\n", age1);</pre>
                                            <pre class="code-line">  printf("%d\n", age2);</pre>
                                            <pre class="code-line">  }</pre><br>
                                            <pre class="code-line">int main() {</pre>
                                            <br>
                                            <pre class="code-line">int ageArray[] = {2, 8, 4, 12};</pre><br>
                                            <pre class="code-line">  display(ageArray[1], ageArray[2]); </pre></code>
                                            <pre class="code-line">  return 0;</pre></code>
                                            <pre class="code-line">}</pre><br>
                                        </div>
                                </div>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" required/>
                                        <label for="question-11-answers-A"><li> 8<br>4</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                                        <label for="question-11-answers-B"><li> 2<br>4</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                                        <label for="question-11-answers-C"><li> 8<br>12</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                                        <label for="question-11-answers-D"><li> 2<br>12</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 12 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Type of data structure in C that holds multiple elements of the same data type.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" required/>
                                        <label for="question-12-answers-A"><li> C Array Functions</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                                        <label for="question-12-answers-B"><li> C Strings</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                                        <label for="question-12-answers-C"><li> C Arrays</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                                        <label for="question-12-answers-D"><li> C Functions</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 13 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">What will be the printed output of this code?</p>
                                <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">#include &ltstdio.h&gt</pre>
                                            <pre class="code-line">float calculateSum(float num[]);</pre><br>
                                            <pre class="code-line">int main() {</pre>
                                            <pre class="code-line">  float result, num[] = {23.4, 55, 22.6, 3, 40.5, 18};</pre><br>
                                            <pre class="code-line">  result = calculateSum(num); </pre>
                                            <pre class="code-line">  printf("Result = %.2f", result);</pre>
                                            <pre class="code-line">  return 0;</pre>
                                            <pre class="code-line">}</pre></code><br>
                                            <pre class="code-line">float calculateSum(float num[]) {</pre>
                                            <pre class="code-line">  float sum = 0.0;</pre></code><br>
                                            <pre class="code-line">  for (int i = 0; i < 6; ++i) {</pre></code>
                                            <pre class="code-line">    sum += num[i];</pre></code>
                                            <pre class="code-line">  }</pre></code><br>
                                            <pre class="code-line">  return sum;</pre></code>
                                            <pre class="code-line">}</pre></code>
                                        </div>
                                </div>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" required/>
                                        <label for="question-13-answers-A"><li> Result = 162.50</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                                        <label for="question-13-answers-B"><li> Result = 125.78</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                                        <label for="question-13-answers-C"><li> Result = 168.80</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                                        <label for="question-13-answers-D"><li> Result = 159.25</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 14 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">A function that arranges a set of arrays in an alphabetical order</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" required/>
                                        <label for="question-14-answers-A"><li> Traverse</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                                        <label for="question-14-answers-B"><li> Insertion</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                                        <label for="question-14-answers-C"><li> Deletion</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                                        <label for="question-14-answers-D"><li> Sorting</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 15 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">If a function is not returning anything, its return type should be _____ ?</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" required/>
                                        <label for="question-15-answers-A"><li> void</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                                        <label for="question-15-answers-B"><li> null</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                                        <label for="question-15-answers-C"><li> empty</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                                        <label for="question-15-answers-D"><li> bool</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 16 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">A kind of sort that is based on comparisons</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" required/>
                                        <label for="question-16-answers-A"><li> Quick Sort</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                                        <label for="question-16-answers-B"><li> Merge Sort</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                                        <label for="question-16-answers-C"><li> Heap Sort</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />
                                        <label for="question-16-answers-D"><li> Bubble Sort</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 17 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">A kind of function that searches an element in a set of array and then deletes it.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" required/>
                                        <label for="question-17-answers-A"><li> Searching</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                                        <label for="question-17-answers-B"><li> Deletion</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                                        <label for="question-17-answers-C"><li> Sorting</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                                        <label for="question-17-answers-D"><li> Traverse</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 18 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">A kind of function that adds a new element in an array.</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" required/>
                                        <label for="question-18-answers-A"><li> Insertion</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                                        <label for="question-18-answers-B"><li> Traverse</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                                        <label for="question-18-answers-C"><li> Deletion</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                                        <label for="question-18-answers-D"><li> Searching</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 19 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">You can access an array by their in their indices</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" required/>
                                        <label for="question-19-answers-A"><li> True</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                                        <label for="question-19-answers-B"><li> False</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h4 class="blue-head un-b f-14">Question 20 of 20</h4>
                            </div>
                            <div class="card-body">
                                <p class="question">Multidimensional arrays can have one-dimension</p>
                                <ol class="choices">
                                    <div class="choice">
                                        <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" required/>
                                        <label for="question-20-answers-A"><li> True</li></label>
                                    </div>
                                    <div class="choice">
                                        <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                                        <label for="question-20-answers-B"><li> False</li></label>
                                    </div>
                                </ol>
                            </div>
                        </div>
                </div>
            </div>  <!--End Row-->
            
            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
            <div class="col-sm-4 mx-auto">
                <button class="btn btn-block btn-primary mb-4">Submit</button>       
            </div>
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