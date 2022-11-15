
<?php
session_start();
include 'conn.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    
    <?php
      include 'admin_css.php';
   ?>

  </head>
<body>
<?php
include 'student_sidebar.php';
?>

<div class="content">
    <center>

  <h1 style=" padding:20px; margin:34px; color:aqua;  width:450px; border:2px solid auqa; border-radius:30px;background-color:darkblue;">student course</h1>
</center>
  <div class="container">
    <div class="row"> 
         <div class="col-md-4">

             <img  class="teacher" src="image/market1.jpg">
             <h3 >Digital Marketing</h3>
             <p>Students planning to pursue Engineering in India will come across hundreds of specializations out there. Among the Engineering Courses out there some of the Best Ones are Electronics Engineering, Electrical Engineering, Civil Engineering, Mechanical Engineering, etc. </p>
             <h style="font-weight:bold; font-size:20px;">fees : 20000</h><br>
             <input type="button" value="view more" class="btn btn-primary">
         </div>

         <div class="col-md-4">
            <img  class="teacher"  src="image/lang1.jpg">
            <h3>Web Development</h3>
            <p>Students planning to pursue Engineering in India will come across hundreds of specializations out there. Among the Engineering Courses out there some of the Best Ones are Electronics Engineering, Electrical Engineering, Civil Engineering, Mechanical Engineering, etc. </p>
            <h style="font-weight:bold; font-size:20px;">fees : 23000</h><br>
            <input type="button" value="view more" class="btn btn-primary">
         </div>

         <div class="col-md-4">
            <img class="teacher" src="image/graphic1.jpg">
            <h3>Graphic Designning</h3>
            <p>Students planning to pursue Engineering in India will come across hundreds of specializations out there. Among the Engineering Courses out there some of the Best Ones are Electronics Engineering, Electrical Engineering, Civil Engineering, Mechanical Engineering, etc. </p>
            <h style="font-weight:bold; font-size:20px;">fees : 1,00,000</h><br>
            <input type="button" value="view more" class="btn btn-primary">
        </div>
        </center>
    </div>
  </div>
</div>
</body>
</html>