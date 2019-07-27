<?php

include ('DAO/DAO.php');

class Controller{
   
     public function getAllAutomobili(){
         $dao = new DAO();
        
        $automobili = $dao->getAllAutomobili();
        return $automobili;
     }

     public function checkAvailableCarOrInsertCar($location,$startDate,$endDate, $id_auto) {
         $dao = new DAO();

         $result = $dao->checkAvailableCarOrInsertCar($location,$startDate,$endDate,$id_auto);
        //echo "<br>controller: " . $result;
          if(is_array($result)) {
             //Nije slobodan auto
             $result = "no";
         }else{ 
             //Slobodan auto
             $result = "yes";
         }
         return $result;
     }

     //f-ja koja insertuje podatak
     public function insertReservation($datum_uzimanja,$datum_vracanja,$id_auto,$mesto_vracanja,$mesto_preuzimanja,$email,$telefon,$dodatna_oprema,$ime,$prezime,$komentar)
     {
        $dao = new DAO();

        $result = $dao->insertReservation($datum_uzimanja,$datum_vracanja,$id_auto,$mesto_vracanja,$mesto_preuzimanja,$email,$telefon,$dodatna_oprema,$ime,$prezime,$komentar);
        if($result != NULL){
            $msg = "Postovani,uspesno ste rezervisali automobil";
            header("Location:index.php?msg=$msg");
        }
     }
     public function insertAutomobil($marka,$slika,$tip,$cena_30,$cena_16,$cena_3,$vrata,$sedista,$gorivo,$klima,$menjac) {
        $dao = new DAO();

        $result = $dao->insertAutomobil($marka,$slika,$tip,$cena_30,$cena_16,$cena_3,$vrata,$sedista,$gorivo,$klima,$menjac);
        if($result != NULL){
            $msg = "Uspesno unet automobil.";
            header("Location:dashboard.php?msg=$msg");

        }else{
            $msg = "Greska pri insertu u bazu.";
            header("Location:dashboard.php?msg=$msg");
        }
     }
     public function deleteAutomobil($id_automobil){
        $dao = new DAO();
        $result = $dao->deleteAutomobil($id_automobil);
        if($result != null){
            $msg = "Uspesno obrisan automobil";
            header("Location:index1.php?action=allCars&msg=$msg");
        }else{
            $msg = "Nije obrisan automobil";
            header("Location:index1.php?action=allCars&msg=$msg");
        }
     }
}














?>