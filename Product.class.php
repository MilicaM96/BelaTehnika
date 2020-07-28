<?php 

	class Proizvod{

		private $naslov;
		private $opis;
		private $kategorija_id;

		public function __construct($naslov,$opis,$kategorija_id){
			$this->naslov = $naslov;
			$this->opis = $opis;
			$this->kategorija_id = $kategorija_id;

		}

		public function dodajProizvod(){
			global $mysqli;
			$sql= "INSERT INTO proizvod (naslov, opis, kategorija_id) VALUES ('".$this->naslov."','".$this->opis."','".$this->kategorija_id."') ";		
			if ($q=$mysqli->query($sql)) {
				return true;
			}else{
				return false;
			}

		}

		public function izmeniProizvod($id) {
			global $mysqli;
			$sql= "UPDATE  proizvod  SET kategorija_id='$this->kategorija_id' WHERE  id='$id'" ;		
			if ($q=$mysqli->query($sql)) {
				return true;
			}else{
				return false;
			}

		}

		public static function obrisiProizvode($id){

		 	global $mysqli;
		  	$sql = "DELETE FROM proizvod WHERE id='$id'";
		  	if ($q=$mysqli->query($sql)) {
				return true;
			}else{
				return false;
			}

		 }

		public static function vratiProizvode(){

		 	global $mysqli;
		  	$sql = "SELECT * FROM proizvod";
		  	$q = $mysqli->query($sql);
		  	$niz = [];
		  	while ($red =$q->fetch_object()){
		  			$niz[] = $red;
		  	}
		  	return $niz;
		 }


		public static function Pretraga($kategorija, $pretraga){
			global $mysqli;
		if ($kategorija == 999 && empty($pretraga))  {
			$sql = "SELECT*FROM proizvod ORDER BY  id DESC";
		}elseif ($kategorija !=999 && empty($pretraga)) {
			$sql = "SELECT*FROM proizvod WHERE kategorija_id ='$kategorija' ORDER BY id DESC";
		}elseif ($kategorija ==999 && !empty($pretraga)) {
			$sql = "SELECT*FROM proizvod WHERE naslov LIKE '%$pretraga%' ORDER BY id DESC";
		}
		else  {
			$sql = "SELECT*FROM proizvod WHERE kategorija_id = '$kategorija' AND naslov  LIKE '%$pretraga%' ORDER BY id DESC";
		}
				$q = $mysqli->query($sql);
				$niz=[];
				while ($red = $q->fetch_object()) {
					$niz[] = $red;
				}
				return $niz;
		}

	}


 ?>