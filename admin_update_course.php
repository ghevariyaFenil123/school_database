
<?php
include 'conn.php';
session_start();
error_reporting(0);
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}


//$data=mysqli_connect($host,$user,$password,$db);
include 'conn.php';

if($_GET['course_id']){
    $t_id=$_GET['course_id'];
    $sql="select * from course where id='$t_id'";
    $result=mysqli_query($data,$sql);

    $info=$result->fetch_assoc();


}

if(isset($_POST['update_course']))
{
    $id=$_POST['id'];
    $t_name=$_POST['name'];
    $t_des=$_POST['description'];
    $t_fees=$_POST['fees'];
    $file=$_FILES['image']['name'];
  
    $dst="./image/".$file;
    $dst_db="image/".$file;
    move_uploaded_file($_FILES['image']['tmp_name'],$dst);
   if($file)
   {
    $sql2="update course set name='$t_name',description='$t_des',image='$dst_db',fees='$t_fees' where id='$id'";
   }
   else{
    $sql2="update course set name='$t_name',description='$t_des',fees='$t_fees' where id='$id'";
   }

   
    $result2=mysqli_query($data,$sql2);
    if($result2){
        echo "success";
        header("location:admin_view_course.php");
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
    
    <?php
      include 'admin_css.php';
   ?>

  </head>

  <style type="text/css">
    label{
        display:inline-block;
        width:150px;
        text-align:right;
        padding-top:10px;
        padding-bottom:10px;
       
    }
    .form_deg{
       
        background-color:aqua;
        width:600px;
        padding-top:70px;
        padding-bottom:70px
    }

  </style>
<body>
<?php
include 'admin_sidebar.php';
?>

<div class="content">
    <center>
  <h1 style="border:2px solid darkblue; color:aqua;  border-radius:30px; width:600px; padding:10px; background-color:darkblue;">Update Teacher Data</h1>
    <bt><bt>
  <form class="form_deg" action="#" method="POST" enctype="multipart/form-data">

  <input type="text" name="id" value="<?php  echo "{$info['id']}"?>" hidden>
    <div>
        <label for="">Course Name:</label>
        <input type="text" name="name" value="<?php  echo "{$info['name']}"?>">
    </div>

    <div>
        <label for="">About course:</label>
       <textarea name="description" id="" cols="30" rows="10" >
       <?php  echo "{$info['description']}"?>

       </textarea>
    </div>

    <div>
        <label for="">course Old Image</label>
        <img  width="100px" height="100px" src="<?php  echo "{$info['image']}"?>">
    </div>

    <div>
        <label for="">Course Fees:</label>
        <input type="text" name="fees" value="<?php  echo "{$info['fees']}"?>">
    </div>

    <div>
         <label for=""> Choose course New  Image</label>
        <input type="file" name="image">
    </div>

    <div>
       <input type="submit"  class="btn btn-primary" name="update_course">
    </div>
  </form>
</center>
</div>

</body>
</html>