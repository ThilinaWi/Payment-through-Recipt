<?php

require 'config.php';

$queNo = $_POST["queno"];
$queID = $_POST["que"];
$aoneID = $_POST["aone"];
$atwoID = $_POST["atwo"];
$athreeID = $_POST["athree"];


$sql = "INSERT INTO exams VALUES ('$queNo','$queID','$aoneID','$atwoID','$athreeID')";

if($conn -> query($sql))
{
   echo "Insert Successfull";
}
else 
{
   echo "Error".$conn -> error;
}

$conn -> close();



?>