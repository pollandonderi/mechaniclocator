<?php

include "connectdatabase.php";

if(isset($_POST["submitapplication"])){
    $full_name = $_POST["full_name"];
    $email_ = $_POST["email_"];
    $contact_ = $_POST["contact_"];
    $shop_ = $_POST["shop_"];
    $location_ = $_POST["location_"];
    $services_ = $_POST["services_"];

    $sql = "INSERT INTO `applymechanic`( `fullname`, `email`, `contact`, `shop`, `location`, `services`) VALUES 
    ('$full_name','$email_','$contact_','$shop_','$location_','$services_')";

$result = mysqli_query($link , $sql);

    if($result){
        echo '<script>alert("Congratulations! You are now one of our mechanics.")</script>';
        //echo" Message has been sent succesfully";
        //header("location:dashboard.php");
    }
    else{
        echo"error connecting to database $Sql".mysqli_error($link);
    }

}




?>
