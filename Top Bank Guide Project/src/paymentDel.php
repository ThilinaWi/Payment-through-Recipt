<?php
require 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from`payment`where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"deleted succesfull";
        header('location:paymentView.php');
    }else{
        die(mysqli_error($conn));
    }
}


?>