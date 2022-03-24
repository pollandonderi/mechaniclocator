<?php
//if(isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!== true){
    //header("location:index.php");
    //exit();
 // }
  //include "header.php"

//include "dashboard.php"






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/addcar.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add car record</title>
</head>
<body class="bg-warning">
    <div class="row justify-content-center text-center m-3 p-3">
        <div class="col-lg-6 col-sm-6">
        <form action="handleaddcar.php" method="post" class="form-control m-3 p-3">
            <h3>Got a new car? Add it here for easy tracking</h3>

        <label>car registration number*</label><br>
        <input type="text" name="registration_" placeholder="KBB 509B" required class=""><br><hr>
        <label>Date of purchase*</label><br>
        <input type="date" name="date_" class="" width="200px"><br><hr>
        <label>does it have an insurance cover?*</label><br>
        <select name="select1">
            <option>YES</option>
            <option>NO</option>
        </select><br><hr>
        <label> If yes please say the number of years</label><br>
        <input type="text" name="years_" class=""><br><r><hr>
        <label> Does it have any previous owners?</label><br>
        <select name="select2">
            <option>YES</option>
            <option>NO</option>
        </select><br><hr>
        <label>If yes, kindly state how many </label><br>
        <input type="text" name="explain" class=""><hr>
        <input  class="addcarbutton bg-primary" type="submit" name="addcarbutton" value="Add The Car" width="400px" >




        </form>
    </div>
    </div>
    
</body>
</html>