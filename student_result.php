
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
    <title></title>
    
    <?php
      include 'admin_css.php';
   ?>

  </head>
  <style>
    .rows{
        padding:20px;
        background-color:darkblue;
        color:aqua;
    }
    .head{
        padding:20px;
        margin:20px;
        background-color:aqua;
        color:darkblue;
       
    }
    .h4-card-title{
        padding:10px;
        color:aqua;
        background-color:darkblue;
        width:200px;
        
    }
  </style>
<body>
<?php
include 'student_sidebar.php';
?>

<div class="content">
    <center><h1 style="border:2px solid darkblue;  border-radius:30px; width:600px; padding:10px; background-color:aqua;">Result</h1><br><br>
 </center>
  <div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                
                <div class="card-header">
                
                     <div class="h4-card-title">Find result By Id</div>

                </div><br>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST">
                        <div class="form-group">
                            <input type="text"  class="form-control"name="get_id" placeholder="enter id" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="search_by_id">
                            find result
                        </button>
                        </form>
                    </div>
                    </div>
                </div>

               <br>
                <div class="table-responsive ">
                     <table class="table table-bordered" >
                        <thead>
                            <tr>
                                <th class="head">Id</th>
                                <th class="head" >Name</th>
                                <th class="head" >sub1</th>
                                <th class="head">sub2</th>
                                <th class="head" >sub3</th>
                                <th class="head" >sub4</th>
                                <th class="head" >sub5</th>
                                <th class="head" >total</th>
                                <th class="head" >per</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           
            
                           if(isset($_POST['search_by_id']))
                           {
                            $id=$_POST['get_id'];
                            $query="select * from result where id='$id'";
                            $query_run = mysqli_query($data,$query);
                           
                               
                           if(mysqli_num_rows($query_run)>0)
                           {
                             while($row =mysqli_fetch_array($query_run))
                             {
                           
                           ?>
                           
                            <tr>
                                <td class="rows"><?php  echo $row['id']; ?></td>
                                <td class="rows"><?php  echo $row['name']; ?></td>
                                <td class="rows"><?php  echo $row['sub1']; ?></td>
                                <td class="rows"><?php  echo $row['sub2']; ?></td>
                                <td class="rows"><?php  echo $row['sub3']; ?></td>
                                <td class="rows"><?php  echo $row['sub4']; ?></td>
                                <td class="rows"><?php  echo $row['sub5']; ?></td>
                                <td class="rows"><?php  echo $row['total']; ?></td>
                                <td class="rows"><?php  echo $row['per']; ?></td>
                            </tr>

                            <?php
                              }
                            }
                            else{
                               ?>
                               <tr>
                                 <td colspan="6">
                                    no record found
                                 </td>
                               </tr>
                               <?php
                            }
                        }
                            ?>
                        </tbody>
                   </table>
                 
                </div>

                <?php
                
                ?>
            </div>
        </div>
        
    </div>
  </div>
  

</div>

</body>
</html>