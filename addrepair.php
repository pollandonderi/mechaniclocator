<?php








?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a repair record</title>
</head>
<body class="bg-warning">
    <div class="bg-light m-2 p-2 text-center">
    <h2>Kindly fill in to add a repair service done to your car </h2>
    </div>
    <div>
     <form class="form-control bg-warning justify-content-center" action="handlerepair.php" method="post">
     <label class="m-2">1. what is the registration number to your car?</label>
        <input name="reight" type="text" class="rounded-pill m-2" placeholder=" e.g KBA 234C" required><br>
        <label class="m-2">2. what was the repair done to your car?</label>
        <input name="rone" type="text" class="rounded-pill m-2" placeholder=" e.g wheel alignment" required><br>
        <label class="m-2">3. How long did it take to finish the repairs?</label>
        <input name="rtwo" type="text" class="rounded-pill m-2" placeholder=" e.g 2 hours"><br>
        <label class="m-2">4. Where was the repair done?</label>
        <input name="rthree" type="text" class="rounded-pill m-2" placeholder=" e.g Rongai"><br>
        <label class="m-2">5. Who did the repairs?</label>
        <input name="rfour" type="text" class="rounded-pill m-2" placeholder=" e.g Mechanic jason obuu" required><br>
        <label class="m-2">6. How much was the charge for the service?</label>
        <input name="rfive" type="text" class="rounded-pill m-2" placeholder=" e.g 2,000" required><br>
        <label class="m-2">7. Would you recommend the mechanic to other people?</label>
        <input name="rsix" type="text" class="rounded-pill m-2" placeholder=" e.g YES" required><br>
        <label class="m-2">8. Date of repairs</label>
        <input name="rseven" type="date"  class="rounded-pill" ><br>
        <label class="m-2">9. Additional information</label>
        <input name="rnine" type="text" class="rounded-pill m-2" placeholder=" e.g brake alignment"><br>
        <div class=" justify-content-center text-center  m-3 p-3"width="400px" >
        <i class="fa fa-plus-circle"></i>
            
        <input class="bg-primary rounded-pill " type="submit" name="addrepairbutton" value="Add Repair"  >
    
        
        


        
    </form>

    </div>

    
</body>
</html>