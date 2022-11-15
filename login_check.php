<?php
include 'conn.php';
  error_reporting(0);
  session_start();

/*if(isset($REQUEST['submit2'] ))
{
    $con=("localhost","root","","schoolproject");
    $data=mysql_connect($con);
}*/


if($data===false){
    die("connetion error");
}
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $name=$_POST['username'];
    $pass=$_POST['password'];

    $sql="select * from user where username='".$name."'  AND password='".$pass."' ";
    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="student")
    {
       //session_start();
      
      $_SESSION['username']=$name;
      $_SESSION['usertype']="student";
      //echo "<script>window.location.href='index4.html#/student'</script>";
      header("location:studenthome.php");
    }

    elseif($row["usertype"]=="admin")
    {
    
      $_SESSION['username']=$name;
      $_SESSION['usertype']="admin";
       header("location:adminhome.php");
    }
    else{
      
        $message="username or password do not match";
        $_SESSION['loginMessage']=$message;
        header("location:login.php");
    }
  }

?>