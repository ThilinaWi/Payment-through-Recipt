<?php

require 'config.php';


$emailaddress = $_POST["email"];
$epassword = $_POST["password"];


$sql="INSERt INTO login VALUES ('$emailaddress','$epassword')";
     
if($conn->query($sql))
{
	header('Location:admin.php');
	echo "Insert Successful";
	//header("location:admin.php");
}
     
elseif($conn->query($sql))
{
	header('Location:cont_dash.php');
	echo "Insert Successful";
	//header("location:cont_dash.php");
}
else
{
	echo "Error".$conn->error;
}


$conn->close();


?>