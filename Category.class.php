<?php 

	class Kategorija{

		private $naziv;

		  public static function vratiKategoriju()
		 {
		 	global $mysqli;
		  	$sql = "SELECT * FROM kategorija";
		  	$q = $mysqli->query($sql);
		  	$niz = [];
		  	while ($red =$q->fetch_object()){
		  			$niz[] = $red;
		  	}
		  	return $niz;
		 }
	}


 ?>