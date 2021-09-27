<?php include "Control/Result.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="" method="post">
First name: <input type="text" name="fname"> <?php echo $validatefname; ?>
<br>
Last name: <input type="text" name="lname"> <?php echo $validatelname; ?>
<br>
Age: <input type="text" name="lname"> <?php echo $validatelname; ?>
<br>
<p>Designation
  <input type="radio" id="opt1" name="designation" value="Junior Programmer">
  <label for="opt1">Junior Programmer</label>
  <input type="radio" id="opt2" name="designation" value="Senior Programmer">
  <label for="opt2">Senior Programmer</label>
  <input type="radio" id="opt3" name="designation" value="Project Lead">
  <label for="opt3">Project Lead</label>
</p>
  <?php echo $validateradio; ?>
<br>

Preferred language
<input type="checkbox" id="lan1" name="lan1" value="JAVA">
Preferred language is JAVA <br>
<input type="checkbox" id="lan2" name="lan2" value="PHP">
Preferred language is PHP <br>
<input type="checkbox" id="lan3" name="lan3" value="C++">
Preferred language is C++ <br>
<br>
<?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>

E-mail: <input type="text" name="email"> <?php echo $validateemail; ?>
<br>
Password: <input type="text" name="password"> <?php echo $validatepass; ?>
<br>
Please choose a file  <input type="submit" value="Choose File"> 
No file choosen
<br>




<input type="submit" value="SUBMIT">
<input type="submit" value="RESET">
</form>
</body>
</html>
