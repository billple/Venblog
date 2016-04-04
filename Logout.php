<?php
/**
 * Created by PhpStorm.
 * User: Bill
 * Date: 3/8/2016 AD
 * Time: 1:23 PM
 */
require ('config.php');
?>
<?php
    session_start();
    unset($_SESSION["UserID"]);
    session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link href="main.css" rel="stylesheet" type="text/css"/>
</head>


<header>
    <div class="logo"><img src="Vlogo.png" id="vLogo" height="80" width="80"></div>
    <nav>
        <a href="index.php">Home</a>
        <a href="#about">About</a>
        <a href="">Blog</a>
        <a href="#ContactForm">Contact</a>
        <a href="login.php" id="login">Log In</a>
        <a href="signup.php">Sign Up</a>
    </nav>
    <h1><span>Venblog</span></h1>
    <p class="kicker">Where you find different products by different venders.</p>
</header>

<body>

<div class="logoutContainer">
<p id="logoutMessage">Successfully Logged Out!</p>
</div>

</body>
<footer>
    <div class="lockup">
        <div class="logo"><img src="Vlogo.png" id="vLogo" height="80" width="80"></div>
        <div class="content-wrap">
            <nav>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Blog</a>
                <a href="">Contact</a>
                <a href="login.php" id="login">Log In</a>
                <a href="signup.php">Sign Up</a>
            </nav>
            <br>
            <p class="copyright">All Contents Copyright ©2016. All Contents Are Used For Educational Purposes Only.</p>
        </div>
    </div>
</footer>

</html>