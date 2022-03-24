<?php
include "navbar.php";





?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../CSS/index.css">
<link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mechanic locator</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-sm-5 justify-content-center">
                <h1 class="text-center m-4 p-3">
                    what is a mech locator?
                </h1>
                <p class="m-4 p-3">
                     MechLocator is a website that connects <span>car owners</span> with <span>competent mechanics</span>.
                   It also helps keep track of your car's repair history.
                </p>
                <div  class="row p-4">
                <a href="signup.php" class="text-center m-4 bg-primary rounded-pill bg-primary text-dark" ><button class="bg-primary" style="border: none; ;">Register now for free</button></a>
                </div>
            </div>
            <div class="col-lg-7 col-sm-7">

            <img src="../IMAGES/brown-mech.svg" alt="a mechanic finding location" width="600px" height="500" >
            </div>
            
        </div>

        <div class="row">

        <div class="scroll text-center">
                <div class="rectangle">
                    <img src="../IMAGES/arrow-down-white.svg" alt="down" class="icon arrow-icon">
                </div>
                <p>
                    Scroll down
                </p>
            </div>
        </div>

            <div class="row">
            
                <div class="col-lg-7 col-sm-7 justify-content-center d-flex p-4">
               
                  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                  <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_5xqvi8pf.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay alt="finding location now"></lottie-player>
                </div>
                <div class="col-lg-5 col-sm-5 text-center justify-content-center">
                    <div class="row p-4 m-2">
                    <h3><b class="m-2 p-2">Mechanics near me</b></h3>
                    <p>From the comfort of your home locate the mechanics who are near you.this app is even better when you are stranded as it will give you <b>best options to look forward to</b></p>
                    </div>
                    <div class="row p-4 m-2">
                    <a href="mechanicnear.php" class="text-center m-4 bg-primary rounded-pill"> <button class="bg-primary rounded-pill" class="bg-primary" style="border: none;">Mechanics near me</button></a>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-sm-5">
                    <h3 class="p-4 m-2 text-center"><b>Keep track of your records</b></h3>
                    <p class="p-4 m-2 text-center"> follow in <b>real time</b> the repairs to your car and the mechanics who have done the work</p>
                    <p class="text-center m-2 p-2">see what needs to be done and what does not by having everything at hand.you will receive a notification once the 
                        work has been done to completion on your car.
                    </p>
                    <div class="row p-4 m-2">
                     <a href="login.php" class="text-center m-4 bg-primary rounded-pill"><button class="bg-primary rounded-pill" style="border: none;">View records</button></a>
                     </div>
                </div>
                <div class="col-lg-7 col-sm-7 d-flex justify-content-center">
                  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                  <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_bcmjcj8d.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-sm-7">
                    <img  style="border-radius: 15px;" src="../IMAGES/mechanicapplicant.jpg" alt="man holding an engine" width="600px" height="500">
                </div>
                <div class="col-lg-5 col-sm-5">
                <h3 class="p-4 m-2"><b>Apply to be a mechanic</b></h3>
                <b>Increase</b> your range of customers by applying to be a registered mechanic. Reach out some more and make yourself greater with new challenges of new cars.
                <div class="row p-4 m-2">
                     <a href="login.php" class="text-center m-4 bg-primary rounded-pill"><button class="bg-primary rounded-pill" style="border: none;">Apply today!</button></a>
                     </div>
                </div>
            </div>
        </section>

        <div class="row m-3">
            <h3 class="text-center"><b>Don,t believe us? <span style="color:blue">Trust</span><br>what our customers have said</b></h3>
        </div>
        
        <div class="row d-flex justify-content-between">
           <div class="card m-3 " style="width: 18rem;">
           <p><b>polland onderi says:</b></p>
          <img src="../IMAGES/image1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title">TIMELY SERVICE</p>
          <p class="card-text">My engine overhaul was fast because of the many qualified mechanics who were working on it.</p>
          </div>
          </div>

          <div class="card m-3" style="width: 18rem;">
          <p><b>saalam says:</b></p>
          <img src="../IMAGES/card1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-title">Happy hour</p>
           <p class="card-text"> i was given a discount aftyer making many trips to the mechanic after my car developed several challenges.</p>
            </div>
           </div>

           <div class="card m-3" style="width: 18rem;">
           <p><b>Judith says:</b></p>
          <img src="../IMAGES/card2.jpg" class="card-img-top" alt="...">
           <div class="card-body">
            <p class="card-title">CONVENIENT</p>
           <p class="card-text">The mechanics i was given on <b>mechaniclocator</b>were just qualified for my job and right around the corner. i did not have to look for any more help everything was done well and on time.</p>
           </div>
            </div>
        </div>
        <footer class="justify-content-between">
            <div class="row d-flex "> 
                <div class="col-lg-3 col-sm-3 quick-links d-flex flex-column m-2 p-2">
                    <h4><b>Quick links</b></h4>
                   <a href="index.php">home</a>
                    <a href="login.php">our mechanics</a>
                   <a href="login.php"> our repair history</a>
                   <a href="contactus.php">contact us</a>
                   <a href="login.php">login</a>
                   <a href="signup.php">sign up</a>
                </div>

                <div class="col-lg-4 col-sm-4 m-2 p-2">
                    <h3><b>vision</b></h3>
                    <p>To be a world classleading innovator for future solutions</p>
                    <h3><b>Mission</b></h3> 
                    <p>Strenght for today bright hope for tomorrow</p>
                </div>

                <div class="col-lg-4 col-sm-4 d-flex flex-column m-2 p-2">
                   
                    <h4><b>connect with us<br>on our social media platforms</b></h4>


                    <div><i class="fa fa-facebook-official p-3" style="font-size:36px"></i><a href="index.php">Facebook</a></div>
                    <div><i class="fa fa-linkedin-square p-3" style="font-size:36px"></i><a href="index.php">linkedin</a></div>
                    <div><i class="fa fa-twitter p-3" style="font-size:36px"></i><a href="index.php">twitter</a></div>
                    <div><i class="fa fa-instagram p-3" style="font-size:36px"></i><a href="index.php">instagram</a></div

                </div>

            
            </div>
            


        </footer>


        
    




















    </div>
</body>
</html>