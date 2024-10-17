<?php

require 'config.php';

$eid =  $_POST["id"];


$sql="DELETE FROM users WHERE id='$eid'";

if($conn->query($sql))
{
    echo "Deleted";
}
else
{
    echo "Not Success";
}

?>