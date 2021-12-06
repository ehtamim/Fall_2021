<!DOCTYPE html>

<head>
<script src="../js/myjs.js"></script>
</head>
<body>
    <form action="">
       Search by Faculty Name:   <input type="text" id="name" name="name" onkeyup="SearchName()"> 
       <p id="message"> </p> <br>
       Search by Reseach Internet: <input type="text" id="interst" name=""> <br>
       Search by Designation :
      <select  id="desig">
          <option value="Select Designation">Select Designation</option>
          <option value="Lecturer">Lecturer</option>
          <option value="Assistant Professor">Assistant Professor</option>
          <option value="Professor">Professor</option>

</select>
<br>
<input name="submit" type="submit" value="Search">
    </form>
    <?php 
include ('../control/formValidate.php');
?>
    <?php echo $error; ?>
</body>
</html>