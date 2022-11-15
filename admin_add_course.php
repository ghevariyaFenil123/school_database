
<?php
include 'conn.php';
session_start();
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}




//$data=mysqli_connect($host,$user,$password,$db);
include 'conn.php';
   if(isset($_POST['add_course']))
   {
    $t_name=$_POST['name'];
    $t_description=$_POST['description'];
    $t_fees=$_POST['fees'];

    $file=$_FILES['image']['name'];
    $dst="./image/".$file;

    $dst_db="image/".$file;
    move_uploaded_file($_FILES['image']['name'],$dst);
   
    $sql="insert into course (name,description,fees,image) values ('$t_name','$t_description','$t_fees','$dst_db') ";
    $result=mysqli_query($data,$sql);

    if($result){
        header("location:admin_add_course.php");
    }

   }

   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <style type="text/css">
    .div_deg{
        background-color:aqua;
        padding-top:70px;
        padding-bottom:70px;
        width:500px;

    }
  </style>
    
    <?php
      include 'admin_css.php';
   ?>

  </head>
<body>
<?php
include 'admin_sidebar.php';
?>

<div class="content">
<center>
  <h1  style="border:2px solid darkblue;  color:white; border-radius:30px; width:505px; padding:10px; background-color:darkblue;" >Add course</h1>
  
  
  <br><br>
    <div class="div_deg">
        <form action="#" method="POST" enctype="multipart/form-data">
           <div>
               <label for="">Course Name:</label>
               <input type="text" name="name">
           </div>
           <br>
           <div>
               <label for="">Desription:</label>
              <textarea name="description" id="" ></textarea>
           </div>
           <br>
           <div>
               <label for=""> Course fees:</label>
               <input type="text" name="fees">
           </div>
           <br>
           <div>
               <label for="">Image:</label>
               <input type="file" name="image">
           </div>
           <br>
           <div>
             
               <input class="btn btn-primary" type="submit" name="add_course" value="Add course">
           </div>
        </form>
    </div>

       
</center>
  

</div>

</body>
</html>