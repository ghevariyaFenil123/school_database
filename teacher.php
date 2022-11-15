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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <nav>
        <label class="logo" >G-school</label>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#teacher">Teacher</a></li>
            <li><a href="#course">Course</a></li>
            <li><a href="#admission">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>  

<center style="padding-top:30px;" >
    <h1 id="teacher" style="margin-top:70px; border:2px solid aqua; padding:10px; width:400px; border-radius:30px; 
    background-color:darkblue; color:white;">Our Teachers</h1>
  


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
         
         
    </div>
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