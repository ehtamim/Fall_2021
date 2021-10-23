<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="cv";
$conn=new mysqli($servername,$username,$password,$dbname);


$username=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
$fullname=$_REQUEST["full"];
$mobile=$_REQUEST["mobile"];
$birthdate=$_REQUEST["dob"];
$university=$_REQUEST["university"];
$degree=$_REQUEST["degree"];
$major=$_REQUEST["major"];
$results=$_REQUEST["result"];
$passingyear=$_REQUEST["passing"];


$sql = "INSERT INTO employee (Username, Password, FullName, MobileNo, DateofBirth, University, Degree, Major, Results,PassingYear)
VALUES ('$username', '$pass', '$fullname', '$mobile', '$birthdate', '$university','$degree', '$major', '$results', '$passingyear')";
$result = $conn->query($sql);

  
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } 
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>