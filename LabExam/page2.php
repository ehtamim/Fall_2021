<?php  include 'Form2.php';
 //include 'Db.php';
  
  /* session_start();
  
  if(session_destroy()) // Destroying All Sessions
 //header("Location:Page2.php"); */
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>

 <h1>Education</h1>
 <form action=""method="post">
      University: <input type="text" name="university"> <br> <?php echo $university; ?> <br>
       Degree: <input type="text" name="degree"> <br> <?php echo $degree;?> <br>
       Major: <input type="text" name ="major"> <br>  <?php echo $major; ?> <br>
       Results: <input type="text" name="result"><br>  <?php echo $result; ?> <br>
        passing Years: <input type="date" name="passing"><br>  <?php echo  $passing;?> <br>
       <input type="submit" name= "submit"value ="submit">
 </form>
<body>
    
</body>
</html>