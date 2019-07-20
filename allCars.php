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
.tab{
    width: 35%;
    margin-left: 30%;
}

</style>
</head>
<body>
    
</body>
</html>

<?php
 echo "<table class = ' table table tab'>";
 echo "<tr>";
 echo "<th>ID AUTOMOBIL</th>";
 echo "<th>MARKA</th>";
 echo "<th>SLIKA</th>";
echo "</tr>";
foreach($cars as $car) {
   
    echo "<tr>";
    echo "<tbody>";
    echo "<td>". $car['id_automobil']."</td><td>".$car['marka']."</td><td>".$car['slika']."</td><td>";
    echo "<td><img src='uploads/" . $car['slika'] . "' style='height:100px; width:100px;'></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "<button><a href='dashboard.php'>Nazad</a></button>";
?>