<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <nav>
        <label class="logo" >G-school</label>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#teacher">Teacher</a></li>
            <li><a href="#course">Course</a></li>
            <li><a href="#admission">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>  

    <center style="padding-top:30px;" >
    <h1 id="admission" style="margin:70px; border:2px solid aqua; padding:10px; width:400px; border-radius:30px; 
    background-color:darkblue; color:white;">Admission </h1>
    <div  align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm">
                <label  class="label_text"for="">Name</label>
                <input  class="input_deg"type ="text" name="name">
            </div>
            <div class="adm">
                <label    class="label_text"for="">Email</label>
                <input  class="input_deg"type ="text" name="email">
            </div>
            <div class="adm">
                <label  class="label_text"  for="">Phone</label>
                <input  class="input_deg"type ="text" name="phone">
            </div>
            <div class="adm">
                <label  class="label_text" for="">Message</label>
                <textarea class="input_text" name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="adm">
                <input  class="btn"type="submit" id="submit" name="apply" value="apply">
            </div>
        </form>
    </div>
   </center>

   <footer class="footer">
        <div class="continer">
            <i class="fab fa-facebook fa-4x text-light"></i>
            <i class="fab fa-twitter fa-4x text-light"></i>
            <i class="fab fa-instagram fa-4x text-light"></i>

        </div>
        <p class="text-light sm-heading">G-school &copy; 2020, all Rights Reserved by fenil</p>
    </footer>
    
</body>
</html>