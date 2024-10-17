<?php

$conn = new mysqli("localhost","root","","onlinees");

if ($conn->connect_error) 
{
    die("Connection failed".$conn->connect_error);
}

?>