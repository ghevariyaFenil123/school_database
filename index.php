<?php
include 'conn.php';
 error_reporting(0);
 session_start();
 session_destroy();

 if($_SESSION['message']){
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
      alert('$message');
    </script>";
 }
 
 
 $sql="select * from teacher";
 $result=mysqli_query($data,$sql);

 $sql2="select * from course";
 $result2=mysqli_query($data,$sql2);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/0041c71342.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student managment system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
         .design{
            border:2px solid lightgrey;
            margin-left:18px;
            margin-right:18px;
            text-align:left;
            padding-left:7px;
            margin-bottom:40px;
        }
    </style>
</head>
<body>
    <nav>
        <label class="logo">G-school</label>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#teacher">Teacher</a></li>
            <li><a href="#course">Course</a></li>
            <li><a href="#admission">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>  

   <div  class="section" id="home">
    <label class="img_text">Bring Fun Life To Your Kids</label>
     <img class="main_img" src="image/header.jpg">
   </div>

   <div class="container">
     <div class="row">
        <div class="col-md-4">
            <img  class="welcome_img"src="image/school2.jpg">
        </div>
        <div class="col-md-8">
            <h1>Welcome to G-school Academy</h1>
            <p>The compulsory education law as amended in 1907 and 1909 requires the full attendance at a public school, or at a school which is an approximate equivalent, of all children who are between seven and fourteen years of age, are in the proper physical and mental condition, and reside in a city or school district having a population of 5000 or more and employing a superintendent of schools; in such a city or district children between fourteen and sixteen years must attend school unless they obtain an employment certificate and are regularly engaged in some useful employment or service; and outside of such a city or district all children between the ages of eight and fourteen years and those between fourteen and sixteen years who are not regularly employed must attend school on all school days from October to June.</p>
        </div>
     </div>
   </div>

   <center style="padding-top:30px;" >
    <h1 id="teacher" style="border:2px solid darkblue;  color:white; border-radius:30px; width:405px; padding:10px; background-color:darkblue;">Our Teachers</h1>
  


   <div class="container">
    <div class="row"> 

        <?php
        while($info=$result->fetch_assoc())
        {
           
        
        ?>

         <div class="col-md-4">

             <img  class="teacher" src="<?php echo "{$info['image']}" ?>">
             <h3><?php echo "{$info['name']}" ?></h3>
             <h5><?php echo "{$info['description']}" ?></h5>
             <br>
         </div>

         <?php
         }
         ?>
         
         </center>
    </div>
   </div>

   <center style="padding-top:30px;" >
    <h1 id="course" style="border:2px solid darkblue;  color:white; border-radius:30px; width:405px; padding:10px; background-color:darkblue;">Our Courses</h1>
  

    <div class="container">
    <div class="row"> 
    <?php
        while($info=$result2->fetch_assoc())
        {
        ?>
        

         <div class="col-md-4" >

             <img  class="teacher" src="<?php echo "{$info['image']}" ?>">
             <div class="design">
                    <h3><?php echo "{$info['name']}" ?></h3>
                    <p><?php echo "{$info['description']}" ?></p>
                    <h3 style="color:darkblue; font-weight:bold;" >Fees:<span ><?php echo "{$info['fees']}" ?></span></h3>   

             </div>
             
         </div>
         <?php
         }
         ?>

         
        </center>
    </div>
   </div>

   <center style="padding-top:30px;" >
    <h1 id="admission" style="border:2px solid darkblue;  color:white; border-radius:30px; width:405px; padding:10px; background-color:darkblue;">Admission </h1>
    <div  align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm">
                <label  class="label_text"for="">Name</label>
                <input  class="input_deg"type ="text" name="name">
            </div>
            <div class="adm">
                <label    class="label_text"for="">Email</label>
                <input  class="input_deg"type ="text" name="email">
            </div>
            <div class="adm">
                <label  class="label_text"  for="">Phone</label>
                <input  class="input_deg"type ="text" name="phone">
            </div>
            <div class="adm">
                <label  class="label_text" for="">Message</label>
                <textarea class="input_text" name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="adm">
                <input  class="btn"type="submit" id="submit" name="apply" value="apply">
            </div>
        </form>
    </div>
   </center>

   <footer class="footer">
        <div class="continer">
            <i class="fab fa-facebook fa-4x text-light"></i>
            <i class="fab fa-twitter fa-4x text-light"></i>
            <i class="fab fa-instagram fa-4x text-light"></i>

        </div>
        <p class="text-light sm-heading">G-school &copy; 2020, all Rights Reserved by fenil</p>
    </footer>


  
    
</body>
</html>