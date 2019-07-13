<?php
require_once 'config/db.php';

class DAO
{
	private $db;
	// za 2. nacin resenja
	private $GETALLAUTOMOBILI = "SELECT * FROM automobili";
	
	private $CHECKAVAILABLE   = "SELECT * FROM iznajmljivanje WHERE id_auto = ? AND datum_vracanja > ? ";
	private $INSERTIZNAJMLJIVANJE = "INSERT INTO iznajmljivanje(datum_uzimanja,datum_vracanja,id_auto, mesto_preuzimanja,email,telefon) VALUES (?,?,?,?,?,?)";
	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function getAllAutomobili()
	{
		$statement = $this->db->prepare($this->GETALLAUTOMOBILI);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}
	public function checkAvailableCarOrInsertCar($location,$startDate,$endDate,$email,$phone, $id_auto) {
		$statement = $this->db->prepare($this->CHECKAVAILABLE);
		$statement->bindValue(1, $id_auto);
		$statement->bindValue(2,$startDate);
		$statement->execute();

		$result = $statement->fetch(PDO::FETCH_ASSOC);
		echo "DAO: " . $result . "   is_array: ". is_array($result);
		if(is_array($result) != NULL){
			
			return $result;
		}else{
			
			$statement = $this->db->prepare($this->INSERTIZNAJMLJIVANJE);
			$statement->bindValue(1, $startDate);
			$statement->bindValue(2, $endDate);
			$statement->bindValue(3, $id_auto);
			$statement->bindValue(4, $location);//id_korisnik treba da bude a ne ceo email			
			$statement->bindValue(5, $email);
			$statement->bindValue(6, $phone);

			$result = 	$statement->execute();
			
			return $result;
		}
	}

	
}
