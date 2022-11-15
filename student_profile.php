
<?php
include 'conn.php';
session_start();
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}
elseif($_SESSION['usertype']=='admin'){
    header("location:login.php");
}


$name=$_SESSION['username'];
$sql="select * from user  where username='$name'";
$result=mysqli_query($data,$sql);

$info=mysqli_fetch_assoc($result);

if(isset($_POST['update_profile']))
{
    $s_email=$_POST['email'];
    $s_phone=$_POST['phone'];
    $s_password=$_POST['password'];

    $sql2="update user set email='$s_email',phone='$s_phone',password='$s_password'  where username='$name'";
    $result2=mysqli_query($data,$sql2);

    if($result2)
     {
    echo "update sucess";
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student dashboard</title>
   <style  type="text/css">
    
   </style>

    <?php
     include 'student_css.php';
  ?>
 

   
<style trype="text/css">
  label{
    display:inline-block;
    width:100px;
    text-align:right;
    padding-top:10px;
    padding-bottom:10px;
  }
  .div_deg{
    background-color:aqua;
    padding-top:70px;
    padding-bottom:70px;
    width:400px;
  }
  </style>
<body>
  <?php
     include 'student_sidebar.php';
  ?>

  <div  class="content">
    <center>
        <h1>Update profile</h1>
        <br><br>
    <form action="#" method="POST">
       <div class="div_deg">

      
       <div>
        <label for="">Email:</label>
        <input type="email" name="email"  value="<?php echo "{$info['email']}"?>">
       </div>
       <div>
        <label for="">Phone:</label>
        <input type="number" name="phone" value="<?php echo "{$info['phone']}"?>">
       </div>
       <div>
        <label for="">Password:</label>
        <input type="text" name="password"  value="<?php echo "{$info['password']}"?>">
       </div>
       <div>
       
        <input type="submit" value="update" class="btn btn-primary" name="update_profile">
       </div>
       </div>
    </form>
</center>
  </div>
 



</body>
</html>