<?php
session_start();
include 'conn.php';
if($_GET['student_id'])
{
    $user_id=$_GET['student_id'];

    $sql="delete from user where id='$user_id' ";
    
    $result=mysqli_query($data,$sql);
    if($result){
        $_SESSION['message']="delete student is sucessful";
        header("location:view_student.php");
    }


}

?>