
<?php
include 'conn.php';
session_start();
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}




$sql="select * from admission";
$result=mysqli_query($data,$sql);


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
    th{
         padding:20px;
         font-size:20px;
         background-color:darkblue;
         color:aqua;

    }
    td{
        padding:20px;
        background-color:aqua;
    }

    </style>
<body>

<?php
include 'admin_sidebar.php';
?>
 

<div class="content">
<center>
  <h1 style="border:2px solid darkblue;  border-radius:30px; width:600px; padding:10px; background-color:aqua;">Applied For Admission</h1><br><br>
 
  <table border="1px">
    <tr>
        <th style="padding:20px; font-size:15px;">Name</th>
        <th style="padding:20px; font-size:15px;">Email</th>
        <th style="padding:20px; font-size:15px;">Phone</th>
        <th style="padding:20px; font-size:15px;">Message</th>
    </tr>

    <?php
      while($info=$result->fetch_assoc())
      {
      ?>

    <tr>
        <td style="padding:20px;"> 
           <?php echo "{$info['name']}"; ?>
        </td>
          
        <td style="padding:20px;">
           <?php echo "{$info['email']}"; ?>
         </td>
        <td style="padding:20px;">
            <?php echo "{$info['phone']}"; ?>
         </td>
        <td style="padding:20px;">
            <?php echo "{$info['message']}"; ?>
        </td>
    </tr>

    <?php
      }
    ?>
  </table>
    </center>
  

</div>

</body>
</html>