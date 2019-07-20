<?php
include 'controller/controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
#container{
    margin-left:30%;
    margin-top:5%;
}
.form-control{
    width:35%;
}

</style>
</head>
<body>
<div id="container">
<form method = "POST" action = "index1.php" enctype="multipart/form-data">
<input type = "hidden" name = "action" value = "insert_car" id = "car">
<div class="form-group">
<label>NAZIV AUTOMOBILA:</label>
<input type = "text" name = "marka" autocomplete="off" class = "form-control" required>
</div>
<div class="form-group">
<label>SLIKA AUTOMOBILA:</label>
<input type = "file" name = "slika" autocomplete="off" class = "form-control" required>
</div>
<input type = "submit" value = "Unesi" class = "btn btn-success">
<input type = "reset" value="Reset" class = "btn btn-danger">
</form>
<p>
    <?php 
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
        ?>
</p>
<button><a href="index1.php">Početna strana portala</a></button>
<button><a href="index1.php?action=allCars">Prikaz svih automobila</a></button>
</div>

</body>
</html>