<?php

require 'config.php';

$eid =  $_POST["id"];
$efirstName = $_POST["fname"];
$elastName = $_POST["lname"];
$edateofbirth = $_POST["day"];
$egender = $_POST["gender"];
$emaritalStatus = $_POST["mstatus"];
$emailaddress = $_POST["email"];
$eaddress = $_POST["address"];
$ecity = $_POST["city"];
$enic = $_POST["nicnumber"];
$emobileNumber = $_POST["mnumber"];
$ebank = $_POST["bname"];
$ebankBranch = $_POST["bplace"];
$ebankId = $_POST["bid"];
$epassword = $_POST["password"];


$sql="INSERt INTO users VALUES ('$eid','$efirstName','$elastName','$edateofbirth','$egender','$emaritalStatus','$emailaddress','$eaddress','$ecity','$enic','$emobileNumber','$ebank','$ebankBranch','$ebankId','$epassword')";
     
if($conn->query($sql))
{
	echo "Insert Successful";
}
else
{
	echo "Error".$conn->error;
}


$conn->close();


?>