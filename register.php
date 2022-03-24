<?php

include "connectdatabase.php";
if(isset($_POST["loginbutton"])){

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $confirmpassword = $_POST[""];
}

if(strlen($password)<7){
    $passError = "password must be more than six characters";
    echo"$passError";
}
else{
    $storePass = password_hash($password , PASSWORD_DEFAULT);
}

if($password != $password){
    $confirmError = "passwords do not match";
    echo"$confirmError";
}
if(empty($passError) and empty($confirmError)){
    $sql="INSERT INTO `userregistration`( `fullname`, `email`, `phonenumber`, `password`) 
                             VALUES ('$fullname','$email','$phonenumber','$storePass')";


   $result = mysqli_query($link , $sql);
   if($result){
       echo"You have been registered succesfully";
       header("location:login.php");
   }
   else{
       echo"error executing query $sql".mysqli_error($link);
   }



}











?>