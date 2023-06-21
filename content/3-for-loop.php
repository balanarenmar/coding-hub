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
    <title>{C} - for Loop</title>
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
                                <li class="breadcrumb-item"><i class="feather icon-refresh-cw"></i></li>
                                <li class="breadcrumb-item"><a href="#!">Repetition</a></li>
                                <li class="breadcrumb-item"><a href="#!">for Loop</a></li>
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
                            <h4 style="color: #FC3;">for Loop</h4></div>
                        <div class="card-body">
                            <p class="card-text f-16 m-l-25">In this tutorial, you will learn to create <span class="hl var">for</span> loop in C programming with the help of examples.</p>
                            <i class="feather icon-refresh-cw st-icon bg-c-blue"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] start -->
          <div class="row">
                <div class="col-md-12">
                        <div class="card text-white bg-dark ">
                            <div class="card-header"><h3 class="yellow-head un-y ">for loop</h3></div>
                            <div class="card-body">
                                <p class="card-text f-16 m-l-50">The syntax of the <span class="hl var">for </span> loop is:</p>
                               <br> <div class="col-sm-8  mx-auto">
                                            <div class="snippet"><code>
                                                <pre class="code-line"><span class="var">for</span>(initializationStatement; testExpression; updateStatement) </pre>
                                                <pre class="code-line">{</pre>
                                                <pre class="code-line"><span class="comnt">   // statements inside the body of the loop </span></pre>
                                                <pre class="code-line">}</pre>
                                                </code>
                                            </div>
                                        </div>
                            <hr>
                                 <h4 class="m-b-20 hov-blue">How for loop works?</h4>
                                    <ul class="f-16 m-l-50">
                                            <li>The initialization statement is executed only once.</li>
                                            <li>Then, the test expression is evaluated. If the test expression is evaluated to false, the <span class="hl var">for</span> loop is terminated.</li>
                                            <li>However, if the test expression is evaluated to true, statements inside the body of the <span class="hl var">for</span> loop are executed, and the update expression is updated.</li>
                                            <li>Again the test expression is evaluated.</li>
                                    </ul><br>
                                 <p class="card-text f-16 m-l-50">This process goes on until the test expression is false. When the test expression is false, the loop terminates.</p>
                            <hr>
                                 <h4 class="m-b-20 hov-blue">for loop Flowchart</h4>

                                       <div class="row text-center">
                                            <div class="col-sm-12">
                                                <img src="assets/images/video-lesson/forloop.jpg" alt="recursion img" width="100%" height="auto" style="max-width: 500px;">
                                                <br><br>
                                            </div>
                                        </div>
                            <hr>                                      
                             <h4 class="m-l-50 hov-blue">Example 1: for loop</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code><pre class="code-line"><span class="hljs-comment">// Print numbers from 1 to 10</span></pre>
<pre class="code-line"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span></pre>

<pre class="code-line"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span> </span>{</pre>
  <pre class="code-line"><span class="hljs-keyword">int</span> i;</pre>

  <pre class="code-line"><span class="hljs-keyword">for</span> (i = <span class="hljs-number">1</span>; i &lt; <span class="hljs-number">11</span>; ++i)</pre>
  <pre class="code-line">{</pre>
    <pre class="code-line"><span class="hljs-built_in">printf</span>(<span class="hljs-string">"%d "</span>, i);</pre>
  <pre class="code-line">}</pre>
  <pre class="code-line"><span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;</pre>
<pre class="code-line">}</pre>
</code></pre></div></div>
 <h4 class="m-l-50 hov-blue">Output</h4> 
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="int">1 2 3 4 5 6 7 8 9 10</span></pre></code>
                                        </div>
                                    </div> 
<br>
                                <h5>Here, we have initialized <span class="hl">i</span> to 1.</h5>
                                    <ol class="f-16 m-l-50">
                                            <li><span class="hl">i</span> i is initialized to 1.</li>
                                            <li>The test expression <span class="hl">i < 11</span> is evaluated. Since 1 less than 11 is true, the body of <span class="hl">for</span> loop is executed. This will print the<strong>1</strong>(value of <span class="hl">i</span>) on the screen.</li>
                                            <li>The update statement <span class="hl">++i</span> is executed. Now, the value of <span class="hl">i</span> will be 2. Again, the test expression is evaluated to true, and the body of <span class="hl">for</span> loop is executed. This will print <strong>2</strong>(value of<span class="hl">i</span>) on the screen.</li>
                                            <li>Again, the update statement <span class="hl">++i</span> is executed and the test expression <span class="hl">i < 11</span> is evaluated. This process goes on until <span class="hl">i</span> becomes 11.</li>
                                            <li>When <span class="hl">i</span> becomes 11, <span class="hl">i < 11</span> will be false, and the <span class="hl">for</span> loop terminates.</li>
                                    </ol>
                                    <hr>
                                     <h4 class="m-l-50 hov-blue">Example 2: for loop</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code><pre class="code-line"><span class="hljs-comment">// Program to calculate the sum of first n natural numbers</span></pre>
<pre class="code-line"><span class="hljs-comment">// Positive integers 1,2,3...n are known as natural numbers</span></pre>

<pre class="code-line"><span class="hljs-meta">#<span class="hljs-meta-keyword">include</span> <span class="hljs-meta-string">&lt;stdio.h&gt;</span></span></pre>
<pre class="code-line"><span class="hljs-function"><span class="hljs-keyword">int</span> <span class="hljs-title">main</span><span class="hljs-params">()</span></span></pre>
<pre class="code-line"></span>{</pre>
    <pre class="code-line"><span class="hljs-keyword">  int</span> num, count, sum = <span class="hljs-number">0</span>;</pre>

    <pre class="code-line"><span class="hljs-built_in">  printf</span>(<span class="hljs-string">"Enter a positive integer: "</span>);</pre>
    <pre class="code-line"><span class="hljs-built_in">  scanf</span>(<span class="hljs-string">"%d"</span>, &amp;num);</pre>

    <pre class="code-line"><span class="hljs-comment">  // for loop terminates when num is less than count</span></pre>
    <pre class="code-line"><span class="hljs-keyword">  for</span>(count = <span class="hljs-number">1</span>; count &lt;= num; ++count)</pre>
    <pre class="code-line">  {</pre>
        <pre class="code-line">  sum += count;</pre>
    <pre class="code-line">  }</pre>

    <pre class="code-line"><span class="hljs-built_in">  printf</span>(<span class="hljs-string">"Sum = %d"</span>, sum);</pre>

    <pre class="code-line"><span class="hljs-keyword">  return</span> <span class="hljs-number">0</span>;</pre>
<pre class="code-line">}</pre></code></pre></div></div>
 <h4 class="m-l-50 hov-blue">Output</h4>
                                    <div class="col-sm-8  mx-auto">
                                        <div class="snippet"><code>
                                            <pre class="code-line"><span class="int">Enter a positive integer: 10</span></pre>
                                            <pre class="code-line"><span class="int">Sum = 55</span></pre></code>
                                        </div>
                                    </div> 
                                     <h5>The value entered by the user is stored in the variable <span class="hl">num</span>. Suppose, the user entered 10.</h5><br>

                                            <h5>The <span class="hl">count</span> is initialized to 1 and the test expression is evaluated. Since the test expression <span class="hl">count<=num</span> 1 less than or equal to 10) is true, the body of <span class="hl">for</span> loop is executed and the value of <span class="hl">sum</span> will equal to 1.</h5><br>

                                            <h5>Then, the update statement<span class="hl">++count</span> is executed and<span class="hl">count</span> will equal to 2. Again, the test expression is evaluated. Since 2 is also less than 10, the test expression is evaluated to true and the body of the <span class="hl">for</span> loop is executed. Now,<span class="hl">sum</span> will equal 3.</h5><br>

                                            <h5>This process goes on and the sum is calculated until the<span class="hl">count</span> reaches 11.</h5><br>

                                            <h5>When the <span class="hl">count</span> is 11, the test expression is evaluated to 0 (false), and the loop terminates.</h5><br>

                                            <h5>Then, the value of <span class="hl">sum</span> is printed on the screen.</h5>
<br>
                            <hr>
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
                            <a class="page-link" href="3-do-while.php" tabindex="-1">Previous Lesson</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="3-break-continue.php">Next Topic</a>
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