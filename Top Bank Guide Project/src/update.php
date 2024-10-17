<?php
    require 'config.php';

    $queNo = $_POST["queno"];
    $queID = $_POST["que"];
    $aoneID = $_POST["aone"];
    $atwoID = $_POST["atwo"];
    $athreeID = $_POST["athree"];


if(empty($queNo)||empty($queID)||empty($aoneID)||empty($atwoID)||empty($athreeID))
{
    echo "All Required";
}
else{
   $sql= "UPDATE exams set QuestionNo='$queNo', Question='$queID', Option1='$aoneID', Option2='$atwoID', Option3='$athreeID' WHERE QuestionNo='$queNo' ";

   if($conn->query($sql))
   {
        header("Location:update_que.php");
   }
   else
   {
        echo "Not Updated";
   }
}



?>