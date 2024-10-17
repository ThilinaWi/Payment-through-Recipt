<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bank Guide</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/register.css">
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
    <br>

   <div class="container">
        <div clss="box form_box">
            <form action="submitregister.php" method="post">
                <fieldset class="fieldset">
                <h1>Sign Up</h1><br>
				<div class="field input">
                    <label>User ID:</label>
                    <input type="text" id="eid" name="id" placeholder="0767" pattern="[0-9]{4}"><br><br>
                </div>   
				
                <div class="field input">
                    <label>First name:</label>
                    <input type="text" id="fname" name="fname" placeholder="First name" required><br><br>
                </div>   
            
                <div class="field input">    
                    <label>Last name:</label>
                    <input type="text" id="lname" name="lname" placeholder="Last name" required><br><br>
                </div>    

                <div class="field input">
                    <label>Date of Birth:</label>
                    <input type="date" name="day" required><br><br>
                </div>    

                 
                <div class="field input">
                    <label>Gender:</label>
                    <input type="radio" name="gender" value="Male" checked>Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Prefer not to say">Prefer not to say<br><br>
                </div>
				
                <div class="field input">
                    <label>Marital Status:</label>
                    <input type="radio" name="mstatus" value="Single" checked>Single
                    <input type="radio" name="mstatus" value="Married">Married<br><br>
                </div>   

                <div class="field input">
                    <label>E-mail Address:</label>
                    <input type="text" id="email" name="email" placeholder="abc@gmail.com"><br><br>
                </div>     

                <div class="field input">
                    <label>Address:</label><br>
                    <textarea name="address" rows="8" cols="30" required></textarea><br><br>
                </div>    

                <div class="field input">
                    <label>City:</label>
                    <input type="text" name="city" required></textarea><br><br>
                </div>      

                <div class="field input">
                    <label>NIC:</label>
                    <input type="text" id="nicnumber" name="nicnumber" placeholder="076767676767" pattern="[0-9]{12}"><br><br>
                </div>      

                <div class="field input">
                    <label>Mobile Number:</label>
                    <input type="text" id="mnumber" name="mnumber" placeholder="0767676767" pattern="[0-9]{10}"><br><br>
                </div>      

                <div class="field input">
                    <label>Bank:</label>
                    <input type="text" id="lname" name="bname" placeholder="Bank name" required><br><br>
                </div>      

                <div class="field input">
                    <label>Bank Branch:</label>
                    <input type="text" id="lname" name="bplace" placeholder="Bank Place" required><br><br>
                </div>      

                <div class="field input">
                    <label>Bank ID:</label>
                    <input type="text" id="bnumber" name="bid" placeholder="0767" pattern="[0-9]{4}"><br><br>
                </div>      
      
                <div class="field input">
                    <label>Password:</label>
                    <input type="password" id="password" name="password" ><br><br>
                </div>      

                <div class="field input">
                    <label>Re-enter Password:</label>
                    <input type="password" id="repassword" name="repassword"><br><br>
                </div>      

                <input type="checkbox" class="check">Accept privacy policy and terms<br><br>

                <div class="field">
                    <input type="Submit" id="Submit" class="btn" value="Register">
                </div>  
                <div class="links">
                    Already a member?<a href="index.html">Sign In</a><br>
                   
                </div>  
                </fieldset>  
            </form> 
        </div>  
    </div>          

   <br>
  <!-- add main-->
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