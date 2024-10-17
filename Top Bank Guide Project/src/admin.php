<?php

require 'config.php'; // Database connection

session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailaddress = $_POST['email'];
    $epassword = $_POST['password'];
    
	
	if($emailaddress=="admin@gmail.com"&& $epassword=="1234"){  //Admin account
		$_SESSION['logged_user']=$emailaddress;
		header('Location : login.php');
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
    
	<link rel="stylesheet" href="styles/Admins.css">
	
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
		<div class="content">
		    <div class="cards">
			    <div class="card">
			        <div class="box">
			            <h2>2194</h2>
						<h3>Employees</h3>
			        </div>
					<div class="icon-case">
			            <img src="employees.png" alt="">
			        </div>
			    </div>
				<div class="card">
			        <div class="box">
			            <h2>2000</h2>
						<h3>Exams</h3>
			        </div>
					<div class="icon-case">
			            <img src="employees.png" alt="">
			        </div>
			    </div>
				<div class="card">
			        <div class="box">
			            <h2>2000</h2>
						<h3>Results</h3>
			        </div>
					<div class="icon-case">
			            <img src="employees.png" alt="">
			        </div>
			    </div>
				<div class="card">
			        <div class="box">
			            <h2>2500 </h2>
						<h3>Payments</h3>
			        </div>
					<div class="icon-case">
			            <img src="employees.png" alt="">
			        </div>
			    </div>
			</div>
<table>			
			
<?php	
require 'config.php';

$sql="SELECT id,first_name,last_name,dob,gender,marital_status,email,address,city,nic,mobile_number,bank,bank_branch,bank_id,password FROM users";

$result=$conn->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";
    while($row=$result->fetch_assoc())
	{
	    echo "<tr>";
	    echo "<td>".$row["id"]."</td>"."<td>".$row["first_name"]."</td>"."<td>".$row["last_name"]."</td>"."<td>".$row["dob"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["marital_status"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["city"]."</td>"."<td>".$row["nic"]."</td>"."<td>".$row["mobile_number"]."</td>"."<td>".$row["bank"]."</td>"."<td>".$row["bank_branch"]."</td>"."<td>".$row["bank_id"]."</td>"."<td>".$row["password"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
else
{
    echo "No Results";
}

$conn->close();
?>

</table>
		</div>
    </div>		
    <script src="scripts.js"></script>
</body>
</html>