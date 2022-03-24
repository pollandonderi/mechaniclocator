<?php




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
            <h3 class="m-3">sign up now!,<br> avoid getting your hands dirty</h3>
            <form class="signform m-3" action="register.php" method="post">
                <label>What should we call you? *</label><br>
                <input class="input" type="text" name="fullname" placeholder="polland onderi" required><br>

                <label>What is your email?*</label><br>
                <input class="input" type="text" name="email" placeholder="pollandsabisa@gmail.com" required><br>

                <label>phone number*</label><br>
                <input class="input" type="tel" name="phonenumber" placeholder="0723477853" required><br>

                <label>password*</label><br>
                <input class="input" type="password" name="password" placeholder="password" required><br>

                <label>confirm password*</label><br>
                <input  class="input" type="password" name="confirmpassword"  placeholder="confirm your password" required><br>
                <input  class="loginbutton bg-primary" type="submit" name="loginbutton" value="submit" >

            </form>
            <div class="under">
            <p class="text m-4"><b>already have an account?<a href="login.php">log in</a></b></p>
            <checkbox ><a class="text-center m-4" href="index.php">have you read to our terms and conditions?</a></checkbox><br>
            <checkbox ><a class="text-center m-4" href="index.php">Do you agree to our terms and conditions?</a></checkbox>
            </div>
        </div>
    </div>
    
</body>
</html>