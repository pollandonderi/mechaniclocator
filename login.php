<?php

include "handleglogin.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../CSS/signup.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-7 col-sm-7">
          <img src="../IMAGES/loginnow.jpg" width="790px" height="637px">
        </div>

        <div class="col-lg-5 col-sm-5 " id="formsection">
            <h3 class="m-4 p-4">log in</h3>
            <form class="signform m-3" action="handlelogin.php" method="post">
               

                <label>What is your email?*</label><br>
                <input class="input" type="text" name="email" placeholder="pollandsabisa@gmail.com" required><br>

               

                <label>password*</label><br>
                <input class="input" type="password" name="password" required><br>

               
                <input  class="loginbutton bg-primary" type="submit" name="loginbutton" value="submit" >
                <div class="m-4">
                    
                </div>
                <div class="row p-4">
                <p class="text m-4"><b">login with your google account</b></p>
        
                <button onclick = "window.location='<?php echo $login_url?>' " class="input rounded-pill bg-primary"><i class="fa fa-google "></i>login with google</button>
                </div>

            </form>
            <div class="under">
            <p class="text m-4"><b>Do not have an account? <b><a href="signup.php">Register now</a></b></p>
           
            </div>
        </div>
    </div>
    
</body>
</html>