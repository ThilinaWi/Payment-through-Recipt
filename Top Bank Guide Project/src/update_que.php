<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bank Guide</title>
    <link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/cont_dash.css">
	
	<body>
	<div class="side-menu">
	    <div class="brand-name">
		    <h1>Top Bank Guide</h1>
		</div>
        <ul>
			<li><a href="#"><img src="Images/usericon.png" alt="User Icon">Users</a></li>
            <li><a href="#"><img src="Images/examicon.png" alt="Exam Icon">Exam</a></li>
            <li><a href="#"><img src="Images/result.png" alt="Result Icon">Result</a></li> 
            <li><a href="#"><img src="Images/savepay1.png" alt="Payment Icon">Payment</a></li>
	        <li><a href="#"><img src="Images/help.png" alt="Help Icon">Help</a></li><br><br><br><br><br><br><br><br><br><br><br>
            <li><a href="index.html">Log out</a></li>
		</ul>		
	</div>
	
    <fieldset>
    <legent>Exam Info</legend>

<form method="post" action="update.php" class="form1">


        <h2>Update Your Questions</h2>

		<div class="cont">
		<h3>Question Number:</h3>
		<input type="text" name="queno" class="fld">
		</div>

        <div class="cont">
		<h3>Question:</h3>
		<input type="text"name="que" class="fld">
		</div>

		<div class="cont">
		<h3>Option 1:</h3>
		<input type="text" name="aone" class="fld">
		</div>

		<div class="cont">
		<h3>Option 2:</h3>
		<input type="text" name="atwo" class="fld">
		</div>

		<div class="cont">
		<h3>Option 3:</h3>
		<input type="text" name="athree" class="fld">
		</div>

		<div class="sub-btn">
        	<input type="submit" value="update">
        </div>

</form>



<form method="post" action="delete.php" class="form1">

<h2>Delete Your Questions</h2>
        
        <div class="cont">
		<h3>Question Number:</h3>
		<input type="text" name="queno" class="fld">
		</div>

		<div class="sub-btn">
        	<input type="submit" value="delete">
        </div>
</fieldset>
</form>


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