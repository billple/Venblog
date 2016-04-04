<?php
/**
 * Created by PhpStorm.
 * User: Bill
 * Date: 2/29/2016 AD
 * Time: 5:52 PM
 */
require ('config.php');
?>
<?php
require ('password.php');	

?>

<?php

    if(isset($_POST['register'])){
       
        session_start();

        $FName = $_POST['First_Name'];
        $LName = $_POST['Last_Name'];
        $Email= $_POST['Email'];
        $UName= $_POST['username'];
        $Pass = $_POST['password'];
        
     
 $StorePassword = password_hash($Pass, PASSWORD_BCRYPT, array('cost' => 10));

        $sql = $success->query("INSERT INTO users (Fname, Lname, Email, username, password) Values ('{$FName}', '{$LName}', '{$Email}',
 '{$UName}', '{$StorePassword}')");
    
    header('Location: login.php');
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="main.css" rel="stylesheet" type="text/css"/>
</head>

<header>
    <div class="logo"><img src="Vlogo.png" id="vLogo" height="80" width="80"></div>
    <nav>
        <a href="index.php">Home</a>
        <a href="">About</a>
        <a href="">Blog</a>
        <a href="">Contact</a>
        <a href="login.php#user" id="login">Log In</a>
        <a href="signup.php">Sign Up</a>
    </nav>

    <h1><span>Venblog</span></h1>
    <p class="kicker">Where you find different products by different venders.</p>
</header>

<body>
<div class="signContainer">
<h1> Create your account.</h1>

    <form action="" method="post" name="RegisterForm" id="RegisterForm">

        <div class="userElements">

            <div class="FormElement">
                <input name="First_Name" type="text" required="required" class="TField" id="First_Name" placeholder="First Name">
            </div>
            <div class="FormElement">
                <input name="Last_Name" type="text" required="required" class="TField" id="Last_Name" placeholder="Last Name">
            </div>
            <div class="FormElement">
                <input name="Email" type="text" required="required" class="TField" id="Email" placeholder="Email">
            </div>
            <div class="FormElement">
                <input name="username" type="text" required="required" class="TField" id="cUsername" placeholder="Create Username">
            </div>
            <div class="FormElement">
                <input name="password" type="password" required="required" class="TField" id="Password" placeholder="Password">
            </div>
            <div class="FormElement">
                <input name="register" type="submit"  id="registerButton" value="REGISTER">
            <br>
        <a href="login.php">Already have an account? log in</a>
            </div>
        </div>

    </form>

</div>

<footer>
    <div class="lockup">
        <div class="logo"><img src="Vlogo.png" id="vLogo" height="80" width="80"></div>
        <div class="content-wrap">
            <nav>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Blog</a>
                <a href="">Contact</a>
                <a href="index.php" id="login">Log In</a>
                <a href="signup.php">Sign Up</a>
            </nav>
            <br>
            <p class="copyright">All Contents Copyright ©2016. All Contents Are Used For Educational Purposes Only.</p>
        </div>
    </div>
</footer>

</body>
</html>