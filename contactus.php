<?php





?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../CSS/contactus.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body>
    <div class="containerfluid">
     <div class="row text-center">
         <h2>Contact Us</h2>
     </div>
     <div class="row text-center">
         <h5>Do you have any questions / complaints or suggestions? Please reach out and we shall reply as soon as possible.</h5>
     </div>
     <div class="row">
     <div class="col-lg-6 col-sm-6">
         <div class="row text-center justify-content-center">
         <i class="fa fa-drivers-license" style="font-size:36px"></i><br>
         <h4>Adress:3307<h4><br>
         <h4>Ongata Rongai njambi street house 2<h4>

         </div>
         <hr>

         <div class="row text-center justify-content-center">
         <i class="fa fa-phone" style="font-size:36px"></i><br>
         <h4>Emergency contact<h4><br>
         <h4>0795836437<h4>

         </div>
         <hr>

         <div class="row text-center justify-content-center">
         <i class="fa fa-envelope-o" style="font-size:36px"></i><br>
         <h4>Email<h4><br>
         <h4>Pollandsabisa@gmail<h4>

         </div>
     

     </div>
     <div class="col-lg-6 col-sm-6 bg-warning">
      <form action="handlecontactus.php" method="post" class="justify-content-center m-4 p-4">
          <label class="formula">Full Name</label><br>
          <input type="text" name="full_name" class="formula m-3 p-3" required><br>
          <label>Email</label><br>
          <input type="text" name="email_" class="formula m-3 p-3"><br>
          <label>please type your message</label><br>
          <input type="text" name="text_" placeholder="type your message" class="formula2 m-3 p-3" required>
          <div class="row">
              <div class="col-lg-6"></div>
              <div class="col-lg-6"><input type="submit" name="submitmessage" value="submit" class=" submitmessage"></div>
            </div>
      </form>


     </div>



    </div>
    
</body>
</html>