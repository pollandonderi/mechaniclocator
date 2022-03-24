<?php

include "connectdatabase.php";

if (isset($_POST["submit"])){
    $id = $_POST["id"];
    $sql = "DELETE FROM `addrepair` WHERE id=$id";
    $result = mysqli_query($link,$sql);
    if ($result){
        echo "Record was deleted";
        header("location:repairhistory.php");
    }
    else{
        echo "Error executing query $sql".mysqli_error($link);
    }
}



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
    <title>Delete record</title>
</head>
<body>
<div class="alert alert-danger">
    <form action="delete.php" method="post" "><div class="p-2 text-center">
    <label> Are you sure you want to delete this record? </label>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
</div>
<div class="p-2 text-center">
    <input type="submit" name="submit" value="YES" class="btn btn-danger col-md-4">
    <a href="repairhistory.php" class="btn btn-primary col-md-3">NO</a>
</div>
</form>
</div>

    
</body>
</html>




