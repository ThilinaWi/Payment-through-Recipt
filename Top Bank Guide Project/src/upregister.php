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
 $ebank= $_POST["bname"];
 $ebankBranch = $_POST["bplace"];
 $ebankId = $_POST["bid"];
 $epassword = $_POST["password"];

 if(empty($eid)||empty($efirstName)||empty($elastName)||empty($edateofbirth)||empty( $egender)||empty($emaritalStatus)||empty($emailaddress)||empty($eaddress)||empty($ecity)||empty($enic)||empty( $emobileNumber)||empty($ebank)||empty( $ebankBranch)||empty($ebankId )||empty( $epassword))
{
    echo "All required";
}
else
{
   $sql="UPDATE users set id='$eid',first_name='$efirstName',last_name='$elastName',dob='$edateofbirth',gender=' $egender',marital_status='$emaritalStatus',email='$emailaddress',address='$eaddress',city='$ecity',nic='$enic',mobile_number='$emobileNumber',bank='$ebank',bank_branch=' $ebankBranch',bank_id='$ebankId',password=' $epassword' WHERE id='$eid'";
   
   if($conn->query($sql))
   {
       echo "Updated";
   }
   else
   {
       echo "Not Updated";
   }
}


?>