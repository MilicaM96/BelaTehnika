<?php 
	include "../connection.php";

	if (isset($_GET['proizvod_id'])) {
		$proizvod_id = $_GET['proizvod_id'];	
		$sql = "DELETE FROM proizvod WHERE id='$proizvod_id'";
		if (mysqli_query($mysqli, $sql)) {
			echo "Vest je uspešno obrisana.";
		}else{
			echo "Došlo je do greške.";
		}
	}
	
?>