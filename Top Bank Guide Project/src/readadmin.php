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