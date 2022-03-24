<?php
include "connectdatabase.php";

if(isset($_POST["loginbutton"])){
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];

    $sql = "SELECT * FROM `userregistration` WHERE email='$useremail'";

    $result = mysqli_query($link , $sql);

    if($result){
        $data = mysqli_num_rows($result);
        if($data == 1){
            while( $row = mysqli_fetch_array($result)){

                $id = $row["id"];
                $email = $row["email"];
                $password = $row["password"];
                //verify password here
                if(password_verify($userpassword , $password)){
                    session_start();

                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username "] = $fullname;


                    header("location:dashboard.php");
                }
                else{
                    echo "passwords do not match";
                }
            }


        }
        else{
            echo"no such user was found";
        }



    }
    else{
        echo" error executing query$sql".mysqli_error($link);
    }
}

?>