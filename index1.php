<?php
include "controller/controller.php";

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "all";

switch($action){
    case "all" : {
        header("Location:index.php"); break;
    }
    case "book" : {
        $location = isset($_GET['location']) ? clearData($_GET['location']) : "";
        $startDate = isset($_GET['startDate']) ?clearData( $_GET['startDate']) : "";
        $endDate = isset($_GET['endDate']) ? clearData($_GET['endDate']) : "";
        $email = isset($_GET['email']) ? clearData($_GET['email']) : "";
        $phone = isset($_GET['phone']) ? clearData($_GET['phone']) : "";
        $id_auto = isset($_GET['type']) ? clearData($_GET['type']) : "";

        $controller = new Controller();

        //priveriti da li je automobil slobodan da se rentira ako jeste upisati u bazu i vratiti odgovoarajucu poruku ($result = yes/no)
        $result = $controller->checkAvailableCarOrInsertCar($location,$startDate,$endDate,$email,$phone, $id_auto);
       
        include ("functionality/SendEmail.php");
        
        break;
    }
    case "books":{
        

    }
    default: {
        header ("Location:404.html");
    }
}

function clearData($data) {
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}
?>