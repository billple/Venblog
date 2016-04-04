<?php
/**
 * Created by PhpStorm.
 * User: Bill
 * Date: 2/29/2016 AD
 * Time: 5:51 PM
 */

require('config.php');
?>
<?php
require ('password.php');
?>
<?php

if(isset($_POST['login'])){

    $UName= $_POST['Username'];
    $Pass = $_POST['Password'];

    $result = $success->query("SELECT * FROM users WHERE username='$UName' ");

    $row = $result->fetch_array(MYSQLI_BOTH);
    
    if(password_verify($Pass, $row['password'])){
    session_start();
    $_SESSION["UserID"] =$row['UserID'];
    
    header('Location: Account.php');
    }else{
        session_start();
        $_SESSION['LogInFail'] = "Yes";
    }
    
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
        <a href="index.php">Home</a>
        <a href="">About</a>
        <a href="">Blog</a>
        <a href="">Contact</a>
        <a href="login.php" id="login">Log In</a>
        <a href="signup.php">Sign Up</a>
    </nav>
    <h1><span>Venblog</span></h1>
    <p class="kicker">Where you find different products by different venders.</p>
</header>

<body>

    <div class="container">
<h1> Log In. </h1>
        <form action="" method="post">
            <div class="userElements">
                <?php if(isset($_SESSION["LogInFail"])) { ?>
                    <div class="FormElement">Log In Failed</div>
                <?php } ?>
            <div class="FormElement">
                <input type="text" name="Username" id="user" required="required" class="TField" placeholder="Username">
                 </div>
<div class="FormElement">
                <input type="password" name="Password" required="required" class="TField" placeholder="Password">
                </div>
<div class="FormElement">
                <input type="submit" name="Login" id="loginButton" value="Login">
	</div>
	            
</div>
        </form>
   
</div>

</body>



<footer>
    <div class="lockup">
        <div class="logo">
<img src="Vlogo.png" id="vLogo" height="80" width="80">				</div>
        <div class="content-wrap">
            <nav>
                <a href="">About</a>
                <a href="">Blog</a>
                <a href="signup.php">Sign Up</a>
            </nav>
            <br>
            <p class="copyright">All Contents Copyright ©2016. All Contents Are Used For Educational Purposes Only.</p>
        </div>
    </div>
</footer>

</html>