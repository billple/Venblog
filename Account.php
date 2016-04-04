<?php
/**
 * Created by PhpStorm.
 * User: Bill
 * Date: 3/8/2016 AD
 * Time: 7:25 PM
 */
require ('config.php');
?>
<?php
session_start();

if(isset($_SESSION["UserID"])){
}else{
    header('Location: login.php');
}
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
        <a href="">Blog</a>
        <a href="Logout.php">Log Out</a>
        <a href="UpdateAccount.php">Update Profile</a>
	<a href="#Checkout">Checkout</a>
    </nav>
    <h1><span>Venblog</span></h1>
    <p class="kicker">Where You Find Awesome Things From Different People.</p>
</header>

<body>

<h1>My Account</h1>

</body>
<footer>
    <div class="lockup">
        <div class="logo"><img src="Vlogo.png" id="vLogo" height="80" width="80"></div>
        <div class="content-wrap">
            <nav>
                <a href="">Blog</a>
                <a href="">Contact</a>
                <a href="Logout.php" id="logout">Log Out</a>
                <a href="UpdateAccount.php">Update Profile</a>
            </nav>
            <br>
            <p class="copyright">All Contents Copyright ©2016. All Contents Are Used For Educational Purposes Only.</p>
        </div>
    </div>
</footer>

</html>