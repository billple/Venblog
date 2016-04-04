<?php
require ('config.php');

?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css"/>
    <title>Welcome to Venblog!</title>

</head>

<header>
    <div class="logo"><img src="Vlogo.png" id="vLogo" height="80" width="80"></div>
    <nav>
        <a href="index.php">Home</a>
        <a href="#about">About</a>
        <a href="">Blog</a>
        <a href="#ContactForm">Contact</a>
        <a href="login.php#user" id="login">Log In</a>
        <a href="signup.php#First_Name">Sign Up</a>
    </nav>

    <h1><span>Venblog</span></h1>
    <p class="kicker">Where you find different products by different venders.</p>
</header>


<body>

<div>
</div>





<div class="about">
 <div class="aboutContainer">
<h2 id="about">About</h2>
    <p id="aboutSection">
       	Our goal is to provide a responsive environment for small business vendors to blog and sell their supply of valuables. Any consumer or company may be able to create an account and browse through the many different vendors and shop their needs. They also are able to become a vendor and start their own blog. Our challenge is to blend the blogging style with business like atmosphere. We include a shopping cart for all your product interests as you browse the blog. Although there are many companies such as Ebay and Amazon who are top dogs of the online shopping industries. It can be someone selling their custom wallet set, or a tech company who is selling computer accessories tailored for gamers and programmers. We provide  Paypal compatibility for security and easy checkout. 
    </p>
</div>
</div>
<div class="contact">
<?php
if(isset($_POST['submit'])){
    $to = "billpleee@gmail.com"; // this is your Email address
    $from = $_POST['contactEmail']; // this is the sender's Email address
    $first_name = $_POST['contactName'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['contactMessage'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['contactMessage'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    
   }
?>
<h3>Contact us here</h3>
    <form action="" method="post" name="ContactForm" id="ContactForm">

            <p class="name">
                <input type="text" name="contactName" class="TField" required="required" placeholder="Name" >
            </p>

            <p class="email">
                 <input type="text" name="contactEmail" class="TField" required="required" placeholder="E-mail" >
            </p>
            <p class="subject"> 
                 <input type="text" name="contactSubject" class="TField" placeholder="Subject">
            </p>
            <p class="message">
                <textarea name="contactMessage" class="TField" required="required" placeholder="a Message"></textarea>
            </p>

                <p class="Submit">
                    <input type="submit" name="submit" value="Send">
                </p>

    </form>
</div>
</body>



<footer>
    <div class="lockup">
        <div class="logo"><img src="Vlogo.png" id="vLogo" height="80" width="80"></div>
        <div class="content-wrap">
            <nav>
                <a href="#header">Home</a>
                <a href="#aboutSection">About</a>
                <a href="">Blog</a>
                <a href="signup.php">Sign Up</a>
            </nav>
            <br>
            <p class="copyright">All Contents Copyright ©2016. All Contents Are Used For Educational Purposes Only.</p>
        </div>
    </div>
</footer>
</html>