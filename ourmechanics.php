<?php

include "connectdatabase.php";




?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find our mechanics</title>
</head>
<body class="bg-warning">
<div class="row" m-2>
    <div class="card bg-warning">
        <div class="card-header text-center justify-content-center bg-white">view our mechanics</div>
        <div class="card-body">

        <?php

        $sql = " SELECT * FROM `applymechanic`";

        $result = mysqli_query($link , $sql);

        if($result){

            $data = mysqli_num_rows($result);
            if($data>0){
                echo "<table class='table table-striped table-bordered'>";
                echo "<tr>";
                echo "<th>id </th>";
                echo "<th>Full Name </th>";
                echo "<th> Email </th>";
                echo "<th> Contacts </th>";
                echo "<th> shop </th>";
                echo "<th> location</th>";
                echo "<th> services </th>";
                //echo "<th> </th>";
                //echo "<th> </th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" .$row['id'] .  "</td>";
                    echo "<td>" .$row['fullname'] .  "</td>";
                    echo "<td>" .$row['email'] .  "</td>";
                    echo "<td>" .$row['contact'] .  "</td>";
                    echo "<td>" .$row['shop'] .  "</td>";
                    echo "<td>" .$row['location'] .  "</td>";
                    echo "<td>" .$row['services'] .  "</td>";
                    echo "</tr>";

                }
                echo"</table>";
                



            }
            else{
                echo "<p>no data was found</p>";
            }


        }
        else{

        }




?>
        </div>
        <a href = "dashboard.php" style="border-radius: 3px;">Go back home</a>
    </div>
    

    
</div>

</body>
</html>