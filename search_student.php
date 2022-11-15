
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
  <div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                
                <div class="card-header">
                
                     <div class="h4-card-title">Search Student By Id</div>

                </div><br>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                        <form action="" method="POST">
                        <div class="form-group">
                            <input type="text"  class="form-control"name="get_id" placeholder="enter id" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="search_by_id">
                            search
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
                                <th class="head" >Email</th>
                                <th class="head">Phone no</th>
                                <th class="head" >Message</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                           
            
                           if(isset($_POST['search_by_id']))
                           {
                            $id=$_POST['get_id'];
                            $query="select * from admission where id='$id'";
                            $query_run = mysqli_query($data,$query);
                           
                               
                           if(mysqli_num_rows($query_run)>0)
                           {
                             while($row =mysqli_fetch_array($query_run))
                             {
                           
                           ?>
                           
                            <tr>
                                <td class="rows"><?php  echo $row['id']; ?></td>
                                <td class="rows"><?php  echo $row['name']; ?></td>
                                <td class="rows"><?php  echo $row['email']; ?></td>
                                <td class="rows"><?php  echo $row['phone']; ?></td>
                                <td class="rows"><?php  echo $row['message']; ?></td>
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