<?php include 'Form_validation.php';
//include 'Db.php';
session_start(); 

//header("Location:page1.php"); // Redirecting To Home Page

$username="";
$password="";
$fullname="";
$mobile="";
$dob=""; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
 <h1>Personal Details</h1>
 <form action="" method="post">
      Username: <input type="text" name="user"> <br>  <?php echo  $username; ?> <br>
       Password: <input type="password" name="pass"> <br> <?php  echo $password;?> <br>
       Full name: <input type="text" name ="Full"> <br>   <?php echo $fullname;?> <br>
       Mobile no: <input type="number" name="mobile"><br> <?php  echo $mobile; ?> <br>
       Date of birth : <input type="date" name="dob"><br>  <?php  echo $dob; ?><br>
       <input type="submit" name= "submit"value ="Next">
 </form>
<body>
</body>
</html>
if ($username !="" && $password !="" && $fullname !="" && $mobile !="" && $dob !="" )
 {
    header("Location:page2.php");
 }
    
