<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="image/login-page.webp" class="body_img">
    
<center>
    <div class="form_design">
        <center class="title_deg">Login Form</center>
        <h4>
            <?php
            include 'conn.php';
            error_reporting(0);
            session_start();
            session_destroy();
              echo $_SESSION['loginMessage'];
            ?>
        </h4>

        <form  class="login_form" action="login_check.php" method="POST">
          <div>
                <label class="label_deg" for="">Username</label>
                <input type="text" name="username">
            </div>
            <div>
                <label class="label_deg" for="">Password</label>
                <input type="text" name="password">
            </div>
            <div>
               
                <input class="btn" id="submit2" type="submit" name="sumit" value="submit">
                <a  class="btn btn-danger" href="index.php">Exit</a>
            </div>
         </form>
    </div>
</center>
</body>
</html>