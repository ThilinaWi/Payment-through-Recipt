<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bank Guide</title>
    
	<link rel="stylesheet" href="styles/Admins.css">
	<link rel="stylesheet" href="styles/Admins1.css">
	
</head>
<body>
	<div class="side-menu">
	    <div class="brand-name">
		    <h1>Top Bank Guide</h1>
		</div>
        <ul>
			<li><a href="admin.php"><img src="Images/usericon.png" alt="User Icon">Users</a></li>
            <li><a href="#"><img src="Images/examicon.png" alt="Exam Icon">Exam</a></li>
            <li><a href="#"><img src="Images/result.png" alt="Result Icon">Result</a></li> 
            <li><a href="#"><img src="Images/savepay1.png" alt="Payment Icon">Payment</a></li>
	        <li><a href="#"><img src="Images/help.png" alt="Help Icon">Help</a></li><br><br><br><br><br><br><br><br><br><br><br>
            <li><a href="index.html">Log out</a></li>
		</ul>		
	</div>
	<div class="container">
	    <div class="header">
		    <div class="nav">
				<div class="user">
					<div class="img-case">
					   <h1>Dashboard</h1>
						<span class="user-name">Admin</span>
					   <img src="Images/usericon.png" alt="User Icon">
					</div>
				</div>	
			</div>	
	    </div>
		<br><br><br><br>
	    
        <div class="form-container">
            <form action="upregister.php" method="post">
                <fieldset class="fieldset">
                    <h2>User Profile</h2>
                    <br>

                    <div class="form-container">
                        <!-- Left Column -->
                        <div class="form-column">
                            <div class="field">
                                <label>User ID:</label>
                                <input type="text" id="eid" name="id" placeholder="0767" pattern="[0-9]{4}">
                            </div>

                            <div class="field">
                                <label>First name:</label>
                                <input type="text" id="fname" name="fname" placeholder="First name" required>
                            </div>

                            <div class="field">
                                <label>Last name:</label>
                                <input type="text" id="lname" name="lname" placeholder="Last name" required>
                            </div>

                            <div class="field">
                                <label>Date of Birth:</label>
                                <input type="date" name="day" required>
                            </div>

                            <div class="field">
                                <label>Gender:</label>
                                <input type="radio" name="gender" value="Male" checked>Male
                                <input type="radio" name="gender" value="Female">Female
                                <input type="radio" name="gender" value="Prefer not to say">Prefer not to say
                            </div>

                            <div class="field">
                                <label>Marital Status:</label>
                                <input type="radio" name="mstatus" value="Single" checked>Single
                                <input type="radio" name="mstatus" value="Married">Married
                            </div>

                            <div class="field">
                                <label>E-mail Address:</label>
                                <input type="email" id="email" name="email" placeholder="abc@gmail.com">
                            </div>

                            <div class="field">
                                <label>Address:</label>
                                <textarea name="address" rows="4" cols="30" required></textarea>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="form-column">
                            <div class="field">
                                <label>City:</label>
                                <input type="text" name="city" required>
                            </div>

                            <div class="field">
                                <label>NIC:</label>
                                <input type="text" id="nicnumber" name="nicnumber" placeholder="076767676767" pattern="[0-9]{12}">
                            </div>

                            <div class="field">
                                <label>Mobile Number:</label>
                                <input type="text" id="mnumber" name="mnumber" placeholder="0767676767" pattern="[0-9]{10}">
                            </div>

                            <div class="field">
                                <label>Bank:</label>
                                <input type="text" id="bname" name="bname" placeholder="Bank name" required>
                            </div>

                            <div class="field">
                                <label>Bank Branch:</label>
                                <input type="text" id="bplace" name="bplace" placeholder="Bank Place" required>
                            </div>

                            <div class="field">
                                <label>Bank ID:</label>
                                <input type="text" id="bid" name="bid" placeholder="0767" pattern="[0-9]{4}">
                            </div>

                            <div class="field">
                                <label>Password:</label>
                                <input type="password" id="password" name="password" required>
                            </div>

                            <div class="field">
                                <label>Re-enter Password:</label>
                                <input type="password" id="repassword" name="repassword" required>
                            </div>

                            <div class="field">
                                <input type="checkbox" onclick="enablebutton()">Accept privacy policy and terms
                            </div>
                        </div>
                    </div>

                <div class="field">
                    <input type="Submit" id="Submit" class="btn" value="Update">
					<button class="btn1" id="btn1" type="button" onclick ="loadData('btn1')"><a href="deleteregister.php">Delete</a></button>
                </div>  
                </fieldset>  
            </form> 
        </div>  
    </div>          

    </div>		
    <script src="scripts.js"></script>
</body>
</html>