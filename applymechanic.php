<?php





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/applymechanic.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply to be a mechanic today</title>
</head>
<body>
<div class="containerfluid">
     <div class="row text-center">
         <h2>APPLY NOW TO BE A MECHANIC</h2>
     </div>
     <div class="row text-center">
         <h5>Apply only if qualified for the job. Filure to meet standards will lead to dismissal and even fines for damages</h5>
     </div>
     <div class="row">
     <div class="col-lg-6 col-sm-6">
         <div class="row text-center justify-content-center">
         <i class="fa fa-exclamation-triangle" style="font-size:36px"></i><br>
         <h4>terms and conditions<h4><br>
         <h5>1. You must be a driver with an original driver,s license<h5>

         </div>
         <hr>

         <div class="row text-center justify-content-center">
             <div class="row">
             <div class="col-lg-4"><i class="fa fa-female" style="font-size:36px"></i><br></div>
             <div class="col-lg-4"><i class="fa fa-male" style="font-size:36px"></i><br></div>
             <div class="col-lg-4"><i class="fa fa-blind" style="font-size:36px"></i><br></div>
             
             </div>
         
         
         <h5>2. You have to be polite and courteous to everyone as this is likely to get you more clients<h5><br>

         </div>
         <hr>

         <div class="row text-center justify-content-center">
             <div class="row">
                 <div class="col-lg-4"><i class="fa fa-cc-mastercard" style="font-size:36px"></i><br></div>
                 <div class="col-lg-4"><i class="fa fa-cc-paypal" style="font-size:36px"></i><br></div>
                 <div class="col-lg-4"><i class="fa fa-cc-visa" style="font-size:36px"></i><br></div>
             </div>
         
         <h5>3. You have to be willing to allow payments using the methods shown due to our wide range of platform users<h5><br>

         </div>
     

     </div>
     <div class="col-lg-6 col-sm-6 bg-warning">
      <form action="handleapplymechanic.php" method="post" class="justify-content-center m-4 p-4">
          <label class="formula">Full Name</label><br>
          <input type="text" name="full_name" class="formula m-3 p-3" required><br>
          <label>Email</label><br>
          <input type="text" name="email_" class="formula m-3 p-3" required><br>
          <label>contact</label><br>
          <input type="text" name="contact_" class="formula m-3 p-3" required><br>
          <label>shop location</label><br>
          <input type="text" name="shop_" class="formula m-3 p-3" required><br>
          <label>location</label><br>
          <input type="text" name="location_" class="formula m-3 p-3" required><br>
          <label>Services</label><br>
          <input type="text" name="services_" class="formula m-3 p-3"><br>

          
          <div class="row">
              <div class="col-lg-6"></div>
              <div class="col-lg-6"><input type="submit" name="submitapplication" value="submit" class=" submitmessage"></div>
            </div>
      </form>


     </div>



    </div>
    
</body>
</html>