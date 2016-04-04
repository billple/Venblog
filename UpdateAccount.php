<?php require ('config.php');
?>

<?php
session_start();
if(isset($_SESSION["UserID"])){
}else{
    header('Location: login.php');
}

?>

<?php
$UserID = $_SESSION["UserID"];

$result = $success->query("SELECT * FROM users WHERE UserID='$UserID'");

$row = $result->fetch_array(MYSQLI_BOTH);

session_start();

$_SESSION["FirstName"] = $row['Fname'];
$_SESSION["LastName"] = $row['Lname'];
$_SESSION["Email"]=$row['Email'];
$_SESSION["Password"]=$row['password'];
?>

<?php
if(isset($_POST['UpdateInfo'])){

    $UpdateFName = $_POST['FirstName'];
    $UpdateLName = $_POST['LastName'];
    $UpdateEmail = $_POST['Email'];
    $UpdatePass = $_POST['Password'];

    $sql = $success->query("UPDATE users SET Fname ='{$UpdateFName}', Lname='{$UpdateLName}', Email='{$UpdateEmail}', Password='{$UpdatePass}' WHERE UserID= $UserID");

    header('Location = UpdateAccount.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css"/>
    <title>Update Your Account</title>

</head>

<header>
    <div class="logo"><img src="Vlogo.png" id="vLogo" height="80" width="80"></div>
    <nav>
        <a href="">Blog</a>
        <a href="Logout.php">Log Out</a>
        <a href="">Update Profile</a>
	<a href="#Checkout">Checkout</a>
    </nav>

    <h1><span>Venblog</span></h1>
    <p class="kicker">Where you find different products by different venders.</p>
</header>


<body>
<h1>Update Your Account</h1>
    <div class="signContainer">
        <div class="userElements">
        <form action="" method="post" name="UpdateForm" id="UpdateAccount">
            <div class="FormElement">
                <input name="FirstName" type="text" class="TField" id="FirstName" value="<?php echo $_SESSION["FirstName"];?>">
            </div>
            <div class="FormElement">
                <input name="LastName" type="text" class="TField" id="LastName" value="<?php echo $_SESSION["LastName"];?>">
            </div>
            <div class="FormElement">
                <input name="Email" type="text" class="TField" id="Email" value="<?php echo $_SESSION["Email"];?>">
            </div>
            <div class="FormElement">
                <input name="Password" type="password" class="TField" id="Password" value="<?php echo $_SESSION["Password"];?>">
            </div>
            <div class="FormElement">
                <input name="UpdateInfo" type="submit" value="Update" class="registerButton" id="UpdateInfo">
            </div>

        </form>
        </div>
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
                

            </nav>
            <br>
            <p class="copyright">All Contents Copyright ©2016. All Contents Are Used For Educational Purposes Only.</p>
        </div>
    </div>
</footer>
</html>