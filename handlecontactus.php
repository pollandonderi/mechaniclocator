<?php

include "connectdatabase.php";
if(isset($_POST["submitmessage"])){

    $full_name = $_POST["full_name"];
    $email_ = $_POST["email_"];
    $text_ = $_POST["text_"];


    $sql = "INSERT INTO `contactus`( `full_name`, `email_`, `text_`) VALUES ('$full_name','$email_','$text_')";

    $result = mysqli_query($link , $sql);
if($result){
    echo'<script>alert("Your message is sent succesfuly. We will reach out soon")</script>';
    //header("location:index.php");
    }
    else{
        echo"error connecting to database $Sql".mysqli_error($link);
    }
}













?>