<?php

include ('DAO/DAO.php');

class Controller{
   
     public function getAllAutomobili(){
         $dao = new DAO();
        
        $automobili = $dao->getAllAutomobili();
        return $automobili;
     }

     public function checkAvailableCarOrInsertCar($location,$startDate,$endDate,$email,$phone, $id_auto) {
         $dao = new DAO();

         $result = $dao->checkAvailableCarOrInsertCar($location,$startDate,$endDate,$email,$phone, $id_auto);
        echo "<br>controller: " . $result;
          if(is_array($result)) {
             //Nije slobodan auto
             $result = "no";
         }else{
             //Slobodan auto
             $result = "yes";
         }
         return $result;
        
     }
}














?>