<?php

include "connectdatabase.php";


if(isset($_POST["addrepairbutton"])){

    $reight = $_POST["reight"];
    $rone = $_POST["rone"];
    $rtwo = $_POST["rtwo"];
    $rthree = $_POST["rthree"];
    $rfour = $_POST["rfour"];
    $rfive = $_POST["rfive"];
    $rsix = $_POST["rsix"];
    $rseven = $_POST["rseven"];
    $rnine = $_POST["rnine"];


    $sql = "INSERT INTO `addrepair`( `reight`, `rone`, `rtwo`, `rthree`, `rfour`, `rfive`, `rsix`, `rseven`, `rnine`) VALUES ('$reight','$rone','$rtwo','$rthree','$rfour','$rfive','$rsix','$rseven','$rnine')";

    $result = mysqli_query($link , $sql);
if($result){

echo'<script>alert("Your repair has been sent succesfuly. Please track your repair has been added.")</script>';
header("location:repairhistory.php");
    }
    else{
        echo"error connecting to database $Sql".mysqli_error($link);
    }
}






?>