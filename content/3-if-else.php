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
    <title>{C} - if...else</title>
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

<body class="background-img-6 ">
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
                                <h5 class="m-b-10">Chapter 3</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><i class="feather icon-navigation"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Selection</a></li>
                                <li class="breadcrumb-item"><a href="#!">if...else</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card widget-statstic-card">
                        <div class="card-header">
                            <h4 style="color: #FC3;"> C if...else Statement</h4></div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-25">The <span class="hl var">if</span> statement may have an optional <span class="hl var">else</span></p>
                            <p class="card-text f-16 m-l-25">The syntax of the <span class="hl var">if..else</span> statement is:</p>
                            <br>
                            <div class="col-sm-8  mx-auto">
                                <div class="snippet"><code>
                                    <pre class="code-line">if (test expression) {</pre>
                                    </code>
                                    <pre class="code-line">// run code if test expression is true.</pre>
                                    </code>
                                    <pre class="code-line">}</pre>
                                    </code>
                                    <pre class="code-line">else {</pre>
                                    </code>
                                    <pre class="code-line">// run code if test expression is false</pre>
                                    </code>
                                    <pre class="code-line">}</pre>
                                    </code>
                                </div>
                            </div>
                            <i class="fas fa-arrows-alt-h st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
            <!-- [ Main Content ] start -->
            
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h3 class="yellow-head un-y">How if...else statement works?</h3>
                            </div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">If the test expression is evaluated to true,</p>
                                <ul class="card-text f-16 m-l-50"> 
                                <li> statements inside the body of  <span class="hl var">if</span>are executed.</li>
                                <li> statements inside the body of  <span class="hl var">else</span> are skipped from execution.</li>
                                </ul> <br>
                                <p class="card-text f-16 m-l-50">If the test expression is evaluated to false,</p>
                                <ul class="card-text f-16 m-l-50"> 
                                <li> statements inside the body of  <span class="hl var">else</span>are executed.</li>
                                <li> statements inside the body of  <span class="hl var">if</span> are skipped from execution.</li>
                                </ul> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="table-responsive"><table class="table table-xs table-hover table-dark" border="0" >
                                                    <thead style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <th>Expression is true</th>
                                                            <th>Expression is false</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center; font-weight: bolder;">
                                                        <tr>
                                                            <td>int - test = 5;</td>
                                                            <td>int test = 5;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>if (test < 10) </td>
                                                            <td>if (test > 10) </td>
                                                        </tr>
                                                        <tr>
                                                            <td>{</td>
                                                            <td>}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>// body of if</td>
                                                            <td>// body of if</td>
                                                        </tr>
                                                        <tr>
                                                            <td>}</td>
                                                            <td>}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>else</td>
                                                            <td>else</td>
                                                        </tr>
                                                        <tr>
                                                            <td>{</td>
                                                            <td>{</td>
                                                        </tr>
                                                        <tr>
                                                            <td>// body of else</td>
                                                            <td>// body of else</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">Example 2: if...else statement</h3></div>
                            <div class="card-body">
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">// Check whether an integer is odd or even</pre>
                                             <br>
                                            <pre class="code-line">#include < stdio.h></pre>
                                            <pre class="code-line">int main() {</pre>
                                            <pre class="code-line">int number;</pre>
                                             <br>
                                            <pre class="code-line">printf("Enter an integer: ");</pre>
                                            <pre class="code-line">scanf("%d", &number);</pre>
                                             <br>
                                            <pre class="code-line">// true if number remainder is 0</pre>
                                            <pre class="code-line">if  (number%2 == 0) {</pre>
                                            <pre class="code-line">printf("%d is an even integer.",number);</pre>
                                            <pre class="code-line">}</pre>
                                             <br>
                                            <pre class="code-line"> else {</pre>
                                             <br>
                                            <pre class="code-line">printf("%d is an odd integer.",number);</pre>
                                            <pre class="code-line">}</pre><br>
                                            <pre class="code-line"> return 0;</pre>
                                            <pre class="code-line">}</pre>
                                            </code>
                                        </div>
                                    </div>   

                                <h3 class="yellow-head un-y m-l-50">Output</h3> 
                                    <div class="col-sm-8  mx-auto">
                                    <div class="snippet"><code>
                                            <pre class="code-line">Enter an integer: 7</pre>
                                            <pre class="code-line">7 is an odd integer.</pre>
                                            </code>
                                    </div>
                                    <p class="f-16">
                                    When the user enters 7, the test expression <span class="hl var">number%2==0</span> is evaluated to false. Hence, the statement inside the body of <span class="hl var">else</span> is executed.</p>
                                    </div>
                         </div>
                    </div>
                </div>       
            </div> <!-- end row-->

            <hr>
            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header">
                                <h3 class="yellow-head un-y">C if...else Ladder</h3>
                            </div>

                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">The<span class="hl var">if...else</span>statement executes two different codes depending upon whether the test expression is true or false. Sometimes, a choice has to be made from more than 2 possibilities.</p>
                                <p class="card-text f-16 m-l-50">The if...else ladder allows you to check between multiple test expressions and execute different statements.</p>
                            </div>
                        </div>
                </div>
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">Syntax of if...else Ladder</h3></div>
                            <div class="card-body">
                            <div class="col-sm-8  mx-auto">
                                <div class="snippet"><code>
                                    <pre class="code-line">if (test expression1) {</pre>
                                    <pre class="code-line">// statement(s)</pre>
                                    <pre class="code-line">}</pre>
                                    <pre class="code-line">else if(test expression2) {</pre>
                                    <pre class="code-line">// statement(s)</pre>
                                    <pre class="code-line">}</pre>
                                    <pre class="code-line">else if (test expression3) {</pre>
                                    <pre class="code-line"> // statement(s)</pre>
                                    <pre class="code-line">}</pre>
                                    <pre class="code-line">.</pre>
                                    <pre class="code-line">.</pre>
                                    <pre class="code-line">else {</pre>
                                    <pre class="code-line">// statement(s)</pre>
                                    <pre class="code-line">}</pre>
                                    </code>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header"><h3 class="yellow-head un-y ">Example 3: C if...else Ladder</h3></div>
                        <div class="card-body">
                            <div class="col-sm-8  mx-auto">
                                <div class="snippet"><code>
                                    <pre class="code-line">// Program to relate two integers using =, > or < symbol</pre>
                                     <br>
                                    <pre class="code-line">#include < stdio.h></pre>
                                     
                                    <pre class="code-line">int main() {</pre>
                                     
                                    <pre class="code-line">int number1, number2;</pre>
                                     <br>
                                    <pre class="code-line">printf("Enter two integers: ");</pre>
                                     
                                    <pre class="code-line">scanf("%d %d", &number1, &number2);</pre>
                                     <br>
                                    <pre class="code-line">//checks if the two integers are equal.</pre>
                                    
                                    <pre class="code-line">if(number1 == number2) {</pre>
                                    
                                    <pre class="code-line">printf("Result: %d = %d",number1,number2);</pre>
                                    
                                    <pre class="code-line">}</pre>
                                     <br>
                                    <pre class="code-line">//checks if number1 is greater than number2.</pre>
                                     <br>
                                    <pre class="code-line">else if (number1 > number2) {</pre>
                                    
                                    <pre class="code-line">printf("Result: %d > %d", number1, number2);</pre>
                                     
                                    <pre class="code-line">}</pre>
                                     <br>
                                    <pre class="code-line">//checks if both test expressions are false</pre>
                                    
                                    <pre class="code-line">else {</pre>
                                    <pre class="code-line">printf("Result: %d < %d",number1, number2);</pre>
                                    <pre class="code-line">}</pre> <br>
                                    <pre class="code-line">return 0;</pre>
                                    <pre class="code-line">}</pre>
                                    </code>
                                </div>
                            </div>

                            <h3 class="yellow-head un-y m-l-50">Output</h3>
                            <div class="col-sm-8 mx-auto">
                                <div class="snippet"><code>
                                    <pre class="code-line">Enter an integer: 12</pre>
                                    <pre class="code-line">23</pre>
                                    <pre class="code-line">Result: 12 < 23</pre>
                                    </code>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> <!-- end row-->

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="card text-white bg-dark ">
                        <div class="card-header">
                            <h3 class="yellow-head un-y">Nested if...else</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-50">It is possible to include an <span class="hl var">if...else</span> statement inside the body of another <span class="hl var">if...else</span> statement.</p>
                        </div>
                    </div>
                </div>        
            </div> <!-- end row-->

            <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">Example 4: Nested if...else</h3></div>
                            <div class="card-body">
                            <p class="card-text f-16 m-l-50">This program given below relates two integers using either <span class="hl var"><</span> , <span class="hl var">></span> and <span class="hl var">=</span> similar to these <span class="hl var">if...else</span> ladder's example. However, we will use a nested <span class="hl var">if..else</span> statement to solve this problem:</p>
                            <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line">#include < stdio.h></span></pre>
                                            <pre class="code-line">int main() {</pre>
                                            <pre class="code-line">int number1, number2;</pre>
                                            <pre class="code-line">printf("Enter two integers: ");</pre>
                                            <pre class="code-line">scanf("%d %d", &number1, &number2);</pre>
                                            <pre class="code-line">if (number1 >= number2) {</pre>
                                            <pre class="code-line">if (number1 == number2) {</pre>
                                            <pre class="code-line">printf("Result: %d = %d",number1,number2);</pre>
                                            <pre class="code-line">}</pre>
                                            <pre class="code-line">else {</pre>
                                            <pre class="code-line">printf("Result: %d > %d", number1, number2);</pre>
                                            <pre class="code-line">}</pre>
                                            <pre class="code-line">}</pre>
                                            <pre class="code-line">else {</pre>
                                            <pre class="code-line"> printf("Result: %d < %d",number1, number2);</pre>
                                            <pre class="code-line">}</pre>
                                            <pre class="code-line">return 0;</pre>
                                            <pre class="code-line">}</pre>
                                            </code>

                                 </div>
                            </div>
                        </div>
                    </div>
                </div> 
                </div> <!-- end row-->





            <!-- [ Main Content ] end -->
            <!-- [ Footer Content ] start -->
        <footer>
            <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item m-r-50">
                            <a class="page-link" href="3-if.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="3-switch.php">Next Topic</a>
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