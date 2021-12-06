<?php
include('../model/database.php');

if (empty($_REQUEST["checkName"]))
{
    echo "Enter your name please!!!";
}
else
{
    $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->SearchName($conobj,"faculty",$_REQUEST["checkName"]);
if ($userQuery->num_rows > 0)
{
    while($row = $userQuery->fetch_assoc())
     {
        $id=$row['ID'];
        $name= $row['Name'];
        $department=$row['Department'];
        $interest=$row['Interest']; 
        $desig=$row['Designation'];
   
      
  
    echo "  ID : ".$id."<br>";
    echo "  Name : ".$name."<br>";
    echo " Department : ".$department."<br>";
    echo " Interest: ".$interest."<br>";
    echo " Designation : ".$desig."<br>";
}
}
else
{
    echo "No name found.";
}
$connection->CloseCon($conobj);
}
?>