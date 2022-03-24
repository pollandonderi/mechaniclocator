<?php

include "../googleapi/vendor/autoload.php";

$gClient = new Google_Client();


$gClient -> setClientId("677737485463-avi0l9kin81lko7siuvsd198do1ku68d.apps.googleusercontent.com");
$gClient -> setClientSecret("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");
$gClient -> setApplicationName("Emobilis");
$gClient -> setRedirectUri("https://localhost/EMOBILIS/PHP/dashboard.php");
$gClient ->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");


$login_url = $gClient -> createAuthUrl();

if(isset($_GET["code"])){

    //get token
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET["code"]);
    if(!isset($token["error"])){
        $gClient -> setAccessToken($token["access_token"]);

        $_SESSION["access_token"] = $token["access_token"];

        //object for service
//CHECK ON THE Oauth2 thing Google_Service_oauth($gClient);
       // $gservice = new Google_Service($gClient);
        //getting user data
       // $data = $gservice ->userinfo ->get();

        //if(!empty($data["given_name"])){
           // $fullname_ = $data["given_name"];
           // $_SESSION["fullname_"] = $fullname_;
       // }


      //  if(!empty($data["family_name"])){
       //     $secondname = $data["family_name"];
       //     $_SESSION["secondname"] = $secondname;
       // }

       // if(!empty($data["email"])){
       //     $email = $data["email"];
        //    $_SESSION["email"] = $email;
      //  }


       // if(!empty($data["gender"])){
        //    $gender = $data["gender"];
        //    $_SESSION["gender"] = $gender;
       // }

        //if(!empty($data["picture"])){
        //    $picture = $data["picture"];
        //    $_SESSION["picture"] = $picture;
        //}
        
$_SESSION["loggedin"] = true;
    }
}

?>