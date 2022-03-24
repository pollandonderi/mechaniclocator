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
    <title>check your repair history</title>
</head>
<body class="bg-warning">
<div class="row" m-2>
    <div class="card bg-warning">
        <div class="card-header text-center justify-content-center bg-white"><h3>This is your repair history</h3></div>
        <div class="card-body">

        <?php

        $sql = " SELECT * FROM `addrepair`";

        $result = mysqli_query($link , $sql);

        if($result){

            $data = mysqli_num_rows($result);
            if($data>0){
                echo "<table class='table table-striped table-bordered'>";
                echo "<tr>";
                echo "<th>id </th>";
                echo "<th>Registration Number </th>";
                echo "<th> Service Done </th>";
                echo "<th> Time Taken </th>";
                echo "<th> location </th>";
                echo "<th> Mechanic Responsible</th>";
                echo "<th> Amount charged</th>";
                echo "<th> Recommendation </th>";
                echo "<th> Date Done</th>";
                echo "<th> Additional Activity</th>";
                echo "<th> Actions</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" .$row['id'] .  "</td>";
                    echo "<td>" .$row['reight'] .  "</td>";
                    echo "<td>" .$row['rone'] .  "</td>";
                    echo "<td>" .$row['rtwo'] .  "</td>";
                    echo "<td>" .$row['rthree'] .  "</td>";
                    echo "<td>" .$row['rfour'] .  "</td>";
                    echo "<td>" .$row['rfive'] .  "</td>";
                    echo "<td>" .$row['rsix'] .  "</td>";
                    echo "<td>" .$row['rseven'] .  "</td>";
                    echo "<td>" .$row['rnine'] .  "</td>";

                    echo"<td> 
                    <a href='delete.php?id=".$row['id']."'><i class='fa fa-trash'></i></a>



                    </td";
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
<a href = "dashboard.php" style="border-radius: 3px;">Go back home</a>
        </div>
    </div>

    
</div>
</body>
</html>