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
			<li><a href="updateregister.php"><img src="Images/usericon.png" alt="User Icon">Users</a></li>
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
    </div>
	<br>
    <div class="container">
        <div clss="box form_box">
            <form action="dregister.php" method="post">
                <fieldset class="fieldset">
                <h1>User Profile</h1><br>
				<div class="field input">
                    <label>User ID:</label>
                    <input type="text" id="eid" name="id" placeholder="0767" pattern="[0-9]{4}"><br><br>
                </div> 
                
                 <div class="field">
                    <input type="Submit" id="Submit" class="btn" value="Delete">
                </div>  
				
                </fieldset>
			</form>	
		</div>	
	</div>	
    <script src="scripts.js"></script>
</body>
</html>