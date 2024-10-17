<?php
require 'config.php';

$sql="SELECT Question,Answone,Answtwo FROM exams";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo"<table border='1'>";
    while($row = $result->fetch_assoc())
    {
        echo"<tr>";
        echo "<td>".$row["Question"]."</td> "."<td>".$row["Answone"]."</td>"."<td>".$row["Answtwo"]."</td>";
        echo"</tr>";
    }
    echo"</table>";
}
else
{
    echo "No Result";
}


$con->close();


?>