<?php
include "controller/controller.php";

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "all";

$controller = new Controller();
switch($action){
    case "all" : {
        header("Location:index.php"); break;
    }
    //Sakupljanje podatak sa modala za unos u bazu!
    case "book" : {
        $mesto_preuzimanja     = isset($_GET['mesto_preuzimanja']) ? clearData($_GET['mesto_preuzimanja']) : "";
        $mesto_vracanja        = isset($_GET['mesto_vracanja']) ? clearData($_GET['mesto_vracanja']) : "";
        $datum_preuzimanja     = isset($_GET['datum_preuzimanja']) ? clearData($_GET['datum_preuzimanja']) : "";
        $datum_vracanja        = isset($_GET['datum_vracanja']) ? clearData($_GET['datum_vracanja']) : "";
        $gears = isset($_GET['gear']) ? $_GET['gear'] : "";
        foreach($gears as $gear ){
            $allGear .= $gear . ",  ";
        } 
        $id_auto               = isset($_GET['automobili']) ? clearData($_GET['automobili']) : "";
        $ime                   = isset($_GET['ime']) ? clearData($_GET['ime']) : "";
        $prezime               = isset($_GET['prezime']) ? clearData($_GET['prezime']) : "";
        $telefon               = isset($_GET['telefon']) ? clearData($_GET['telefon']) : "";
        $email                 = isset($_GET['email']) ? clearData($_GET['email']) : "";
        $komentar              = isset($_GET['komentar']) ? clearData($_GET['komentar']) : "";

        $controller = new Controller();

        //Prvo proveriti da li je automobil slobodan!!!!!
        $resultAvailableCar = $controller->checkAvailableCarOrInsertCar($mesto_preuzimanja,$datum_preuzimanja,$datum_vracanja,$id_auto);
        
        if($resultAvailableCar == 'yes'){
            //priveriti da li je automobil slobodan da se rentira ako jeste upisati u bazu i vratiti odgovoarajucu poruku ($result = yes/no)
        $result = $controller->insertReservation($datum_preuzimanja,$datum_vracanja,$id_auto,$mesto_vracanja,$mesto_preuzimanja,$email,$telefon,$allGear,$ime,$prezime,$komentar);
        $insert = "bezProvere";
        include ("functionality/SendEmail.php");    
            $msg = "Uspesno izvrsena rezervacija. Uskoro cemo vas kontaktirati. Hvala na poverenju!";
            header("Location:index.php?msg=$msg");

        }else{
            $msg = "Automobil nije slobodan za iznajmljivanje.";
            header("Location:index.php?msg=$msg");
        }

        break;
    }
    case "checkCar" :{
        $location              = isset($_GET['location']) ? clearData($_GET['location']) : "";
        $startDate             = isset($_GET['startDate']) ? clearData( $_GET['startDate']) : "";
        $endDate               = isset($_GET['endDate']) ? clearData($_GET['endDate']) : "";
        $id_auto               = isset($_GET['type']) ? clearData($_GET['type']) : "";
        

        $controller = new Controller();

        //proveriti da li je automobil slobodan da se rentira ako jeste upisati u bazu i vratiti odgovoarajucu poruku ($result = yes/no)
        $result = $controller->checkAvailableCarOrInsertCar($location,$startDate,$endDate,$id_auto);
        //ispis poruke na index.php da li je auto slobodan ili ne!
        if($result == 'yes'){
            $msg = "Automobil je slobodan za iznajmljivanje.";
            header("Location:index.php?msg=$msg");
        }else{
            $msg = "Automobil nije slobodan za iznajmljivanje.";
            header("Location:index.php?msg=$msg");
        }
        break;
    }
    case "allCars":{

        $controller = new Controller();
        $cars = $controller->getAllAutomobili();
        include ("allCars.php");
        break;
    }

    case "insert_car" :{
        $marka = isset($_POST['marka']) ? clearData($_POST['marka']) : "";
        $slika = isset($_POST['slika']) ? clearData($_POST['slika']) : "";
        $tip = isset($_POST['tip']) ? clearData($_POST['tip']) : "";
        $cena_30 = isset($_POST['cena_30']) ? clearData($_POST['cena_30']) : "";
        $cena_16 = isset($_POST['cena_16']) ? clearData($_POST['cena_16']) : "";
        $cena_3 = isset($_POST['cena_3']) ? clearData($_POST['cena_3']) : "";
        $vrata = isset($_POST['vrata']) ? clearData($_POST['vrata']) : "";
        $sedista = isset($_POST['sedista']) ? clearData($_POST['sedista']) : "";
        $gorivo = isset($_POST['gorivo']) ? clearData($_POST['gorivo']) : "";
        $klima = isset($_POST['klima']) ? clearData($_POST['klima']) : "";
        $menjac = isset($_POST['menjac']) ? clearData($_POST['menjac']) : "";

        $slika  = $_FILES['slika']['name'];
        $source = $_FILES['slika']['tmp_name'];
        $moveto = "uploads//" . $_FILES['slika']['name'];
        move_uploaded_file($source,$moveto);
        $controller = new Controller();
        $controller->insertAutomobil($marka,$slika,$tip,$cena_30,$cena_16,$cena_3,$vrata,$sedista,$gorivo,$klima,$menjac);
        break;
    }

    case "login" : {
        $username = isset($_POST['username']) ? clearData($_POST['username']) : "";
        $password = isset($_POST['password']) ? clearData($_POST['password']) : "";

        if($username == "admin" && $password == "admin"){
            header("Location:dashboard.php");
        }else{
            $msg = "Username ili password nisu tacni.";
            header("Location:login.php?msg=$msg");
        }
        break;
    } 
    case "delete_car" : {
        $id_automobil = isset($_GET['id_automobil']) ? clearData($_GET['id_automobil']) : "";
        echo $id_automobil;
        $controller = new Controller();
        $controller->deleteAutomobil($id_automobil);
        break;
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