<?php
//session_start();
include "handleglogin.php";
include "handlelogin.php";




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/dashindex.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <section >
        
        
        <div class="content" >
        <div style="margin-top: auto; margin-bottom:20px;"><img class="logo" src="../IMAGES/logo1.svg" alt="logo here" width="200px" height="200px"></div>
            <h1 style="margin:50px" > <img class="logo" src="../IMAGES/mech-notebook.svg" alt="logo here" width="120px" height="120px">   Welcome<hr> </h1>
            <div class=" nav text-dark">
    <ul class="navlinks">
       
        <li >
          <a href="repairhistory.php">
              <i class="fa fa-clone text-white fa-lg m-1"></i>
            Repair history
          </a>
        </li>
        
        <li >
            <a href="ourmechanics.php">
                <i class="fa fa-users text-white fa-lg m-1"></i>
                our mechanics
            </a>
          </li>
          
          <li >
            <a href="addrepair.php">
                <i class="fa fa-calendar-check-o text-white fa-lg m-1"></i>
                add repair record
            </a>
          </li>
          
          <li>
              <a href="addcar.php">
                  <i class="fa fa-arrows text-white fa-lg m-1"></i>
                  add a new car
              </a>
            </li>
            
            <li>
                <a href="mechanicnear.php" style="background-color:white;">
                    <i class="fa fa-map-marker text-white fa-lg m-1"></i>
                    mechanic near you
                </a>
              </li>
              
              <li>
                  <a href="applymechanic.php" style="background-color:white;">
                      <i class="fa fa-wrench text-white fa-lg m-1"></i>
                      Become a mechanic
                  </a>
                </li>
                
              <li style="margin:40px">
                  <a href="logout.php" style="background-color:white;">
                      <i class="fa fa-share-square-o text-white fa-2x m-1"></i>
                      logout
                  </a>
                </li>
              
                
      </ul>
</div>
            
        </div>
 
    </section>
    <section>

    </section>
    
</body>
</html>