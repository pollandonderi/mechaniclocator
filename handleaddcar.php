<?php

include "connectdatabase.php";

if(isset($_POST["addcarbutton"])){

    $registration_ = $_POST["registration_"];
    $date_ = $_POST["date_"];
    $select1 = $_POST["select1"];
    $years_ = $_POST["years_"];
    $select2 = $_POST["select2"];
    $explain = $_POST["explain"];

    $sql = " INSERT INTO `addcar`( `registration`, `date`, `select1`, `years`, `select2`, `explain_`) VALUES ('$registration_','$date_','$select1','$years_','$select2','$explain')";
    
    $result = mysqli_query($link , $sql);
    if($result){
        //echo'<script>alert("Your message is sent succesfuly. We will reach out soon")</script>';
        echo "<p class='alert alert-primary'>message has been sent succesfully</p>";
            header("location:dashboard.php");
        }
        else{
            echo"error connecting to database $Sql".mysqli_error($link);
        }
}









?>