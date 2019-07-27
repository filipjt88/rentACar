<?php
require_once 'config/db.php';

class DAO
{
	private $db;
	// za 2. nacin resenja
	private $GETALLAUTOMOBILI = "SELECT * FROM automobili";
	
	private $CHECKAVAILABLE       = "SELECT * FROM iznajmljivanje WHERE id_auto = ? AND datum_vracanja > ? ";
	private $INSERTIZNAJMLJIVANJE = "INSERT INTO iznajmljivanje(datum_uzimanja,datum_vracanja,id_auto,mesto_preuzimanja,mesto_vracanja,email,telefon,dodatna_oprema,ime,prezime,komentar) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
	private $INSERTAUTOMOBIL      = "INSERT INTO automobili(marka,slika,tip_automobila,cena_30,cena_16,cena_3,broj_vrata,broj_sedista,vrsta_goriva,klima,menjac) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
	private $DELETEAUTOMOBIL      = "DELETE FROM automobili WHERE id_automobil = ?";
	private $UPDATEAUTOMOBIL      = "UPDATE automobili SET id_automobil WHERE  ";

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

	public function checkAvailableCarOrInsertCar($location,$startDate,$endDate, $id_auto){

		$statement = $this->db->prepare($this->CHECKAVAILABLE);
		$statement->bindValue(1, $id_auto);
		$statement->bindValue(2,$startDate);
		$statement->execute();

		$result = $statement->fetch(PDO::FETCH_ASSOC);
		//echo "DAO: " . $result . "   is_array: ". is_array($result);
		if(is_array($result) != NULL){
		return $result;
		}		
	}

	//metoda koja insertuje u bazu novu rezervaciju
	public function insertReservation($datum_uzimanja,$datum_vracanja,$id_auto,$mesto_vracanja,$mesto_preuzimanja,$email,$telefon,$dodatna_oprema,$ime,$prezime,$komentar){
		 $statement = $this->db->prepare($this->INSERTIZNAJMLJIVANJE);
		 $statement->bindValue(1,$datum_uzimanja);
		 $statement->bindValue(2,$datum_vracanja);
		 $statement->bindValue(3,$id_auto);
		 $statement->bindValue(4,$mesto_preuzimanja);
		 $statement->bindValue(5,$mesto_vracanja);
		 $statement->bindValue(6,$email);
		 $statement->bindValue(7,$telefon);
		 $statement->bindValue(8,$dodatna_oprema);
		 $statement->bindValue(9,$ime);
		 $statement->bindValue(10,$prezime);
		 $statement->bindValue(11,$komentar);
		 $result = $statement->execute();
		 return $result;
	}

	public function insertAutomobil($marka,$slika,$tip,$cena_30,$cena_16,$cena_3,$broj_vrata,$broj_sedista,$vrsta_goriva,$klima,$menjac){
		$statement = $this->db->prepare($this->INSERTAUTOMOBIL);
		$statement->bindValue(1,$marka);
		$statement->bindValue(2,$slika);
		$statement->bindValue(3,$tip);
		$statement->bindValue(4,$cena_30);
		$statement->bindValue(5,$cena_16);
		$statement->bindValue(6,$cena_3);
		$statement->bindValue(7,$broj_vrata);
		$statement->bindValue(8,$broj_sedista);
		$statement->bindValue(9,$vrsta_goriva);
		$statement->bindValue(10,$klima);
		$statement->bindValue(11,$menjac);
		$result = $statement->execute();
		return $result;

	}

	public function deleteAutomobil($id_automobil){
		$statement = $this->db->prepare($this->DELETEAUTOMOBIL);
		$statement->bindValue(1,$id_automobil);
		$result = $statement->execute();
		return $result;
	}

	
}
