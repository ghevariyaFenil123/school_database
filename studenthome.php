
<?php
session_start();
include 'conn.php';
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}
elseif($_SESSION['usertype']=='admin'){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student dashboard</title>
    <?php
     include 'student_css.php';
  ?>
 

   
<style trype="text/css">
  
  </style>
<body>
  <?php
     include 'student_sidebar.php';
  ?>

</body>
</html>