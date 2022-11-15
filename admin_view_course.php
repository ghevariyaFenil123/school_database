
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



$sql="select * from course";
$result=mysqli_query($data,$sql);

if($_GET['course_id'])
{
    $t_id=$_GET['course_id'];
    $sql2="delete from course where id='$t_id' ";
    $result2=mysqli_query($data,$sql2);
    if($result2)
    {
       
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

   <style type="text/css">
    .table_th{
         padding:20px;
         font-size:20px;
         background-color:darkblue;
         color:white;
    }
    .table_td{
        padding:20px;
        background-color:aqua;
    }
   </style>

  </head>
<body>
<?php
include 'admin_sidebar.php';
?>

<div class="content">
    <center>
  <h1  style="border:2px solid darkblue;  border-radius:30px; width:600px; padding:10px; background-color:aqua;">View Courses</h1>
  <br><br>
     <table border="2px">
        <tr>
            <th class="table_th">Course Name</th>
            <th class="table_th"> About Course</th>
            <th class="table_th">Course Image</th>
            <th class="table_th">Course Fees</th>
            <th class="table_th">Delete</th>
            <th class="table_th">Update</th>
           
        </tr>
     
       <?php
       while($info=$result->fetch_assoc())
       {
       ?>
       
    

        <tr>
            <td class="table_td">
            <?php  echo "{$info['name']}" ?>
            </td>
            <td class="table_td">
            <?php  echo "{$info['description']}" ?>
            </td>      
            <td class="table_td">
               <img  width="150px" width="100px" src= "<?php  echo "{$info['image']}" ?>">

            </td>
            <td class="table_td">
            <?php  echo "{$info['fees']}" ?>
            </td> 

            <td class="table_td">

              <?php
              echo"
                <a   onclick=\"javascript:return confirm('are you sure to delete this'); \" class='btn btn-danger' href='admin_view_course.php?course_id={$info['id']}'>
                    Delete</a>";
               ?>   
            </td>
             
            <td class="table_td">
                <?php
                echo"

                <a href='admin_update_course.php?course_id={$info['id']}'  class='btn btn-primary'>Update</a>";
                ?>
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