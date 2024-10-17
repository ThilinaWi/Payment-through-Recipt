<?php

require 'config.php';

$queNo = $_POST["queno"];

$sql="DELETE FROM exams WHERE QuestionNo='$queNo'";

if($conn->query($sql))
{
    echo "Deleted";
}
else{
    echo "Not Success";
}




?>