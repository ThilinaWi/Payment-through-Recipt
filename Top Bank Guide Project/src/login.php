<?php

session_start(); // Start the session

require 'config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailaddress = $_POST['email'];
    $epassword = $_POST['password'];
    
	
	if($emailaddress=="admin@gmail.com" && $epassword=="1234"){  //Admin account
		$_SESSION['logged_user']=$emailaddress;
		header("location:admin.php");   
        exit();
	}
    else if($emailaddress=="content@gmail.com"&& $epassword=="1235"){  //Admin account
		$_SESSION['logged_user']=$emailaddress;
		header("location:cont_dash.php");   
        exit();
	}
	else{
	    echo"<script>alert('You have not entered correct username and password')</script>";
        exit();
	}	

}	
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bank Guide</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <header class="head1">
        <div class="logo">
           
            <h1>Online Examination Platform</h1>
        </div>
        <div class="user-section">
            <button class="btn1" id="btn1" type="button" onclick ="loadData('btn1')"><a href="register.html">Sign Up</a></button>
            <button class="btn1" id="btn2" type="button" onclick ="loadData('btn2')"><a href="login.html">Sign In</a></button>
        </div>
    </header>
    <header  class="head2">
        <nav>
            <ul class="nav-menu">
                <li><a href="index.html"><img src="Images/homeicon.png" alt="Home Icon"> Home</a></li>
                <li><a href="exam.html"><img src="Images/examicon.png" alt="Exam Icon"> Exam</a></li>
                <li><a href="result.html"><img src="Images/result.png" alt="Result Icon"> Result</a></li>
                <li><a href="payment.html"><img src="Images/savepay1.png" alt="Payment Icon"> Payment</a></li>
                <li><a href="library.html"><img src="Images/libraryicon.png" alt="Library Icon"> Library</a></li>
                <li><a href="help.html"><img src="Images/help.png" alt="Help Icon"> Help</a></li>
            </ul>
        </nav>
    </header>
   <main>
       
            <div class="container">
                <div class="box from-box">
                    <center><h1>Login</h1></center>
                    <form action="submitlogin.php" method="post">
                        <div class="input-box">
						<label>E-mail Address:</label>
						<input type="text" id="email" name="email" placeholder="abc@gmail.com"><br><br>
                        </div>

                        <div class="input-box">
						<label>Password:</label>
						<input type="password" id="password" name="password" ><br><br>
                        </div>
                                
    
                        <div class="remember-forgot">
                            <lable><input type="checkbox"> Remember me</lable>
                           
                        </div>
                            
                        <center><button type="Submit" class="btn">Login</button></center>

                        <div class="Register-link">
                            <p>Don't have an account?
                            <a href="register.html">Sign Up</a></p>
                        </div>
                </form>
        
            </div>        
            
    </main>

    <footer>
        <div class="footer-container">
            <div class="logo">
                <img src="Images/logo.jpg" alt="Logo">
            </div>

            <div class="footer-follow-us">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><img src="Images/fbicon.png" alt="Facebook"></a>
                    <a href="#"><img src="Images/whatsappicon.png" alt="WhatsApp"></a>
                    <a href="#"><img src="Images/youtube.png" alt="YouTube"></a>
                    <a href="#"><img src="Images/tiwitter.png" alt="Twitter"></a>
                </div>
            </div>

            <div class="footer-links">
                <a href="aboutus.html"><img src="Images/about.png" alt="About Icon">About Us</a>
                <a href="t&c.html"><img src="Images/t&c.png" alt="t&c Icon">Terms and Conditions</a>
                <a href="contactus.html"><img src="Images/callicon.png" alt="Contact Icon">Contact Us</a>
          
            </div>
        </div>

        <div class="footer-copyright">
            <p>Copyright 2024 © TopBankGuide. All Rights Reserved.</p>
        </div>
    </footer> 
</body>
</html>    
