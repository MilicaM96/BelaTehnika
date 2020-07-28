<?php 
	include "../connection.php";

	if (isset($_POST['pretragaP']) && isset($_POST['kategorijaP'])) {
		$pretraga = $_POST['pretragaP'];	
		$kategorija = $_POST['kategorijaP'];
		$pretraga= trim($pretraga);
		if ($kategorija == 999 && empty($pretraga))  {
			$sql = "SELECT*FROM proizvod ORDER BY  id DESC";
		}elseif ($kategorija !=999 && empty($pretraga)) {
			$sql = "SELECT*FROM proizvod WHERE kategorija_id == '$kategorija' ORDER BY id DESC";
		}elseif ($kategorija ==999 && !empty($pretraga)) {
			$sql = "SELECT*FROM proizvod WHERE naslov LIKE '%$pretraga' ORDER BY id DESC";
		}
		else  {
			$sql = "SELECT*FROM proizvod WHERE kategorija_id == '$kategorija' AND naslov  LIKE '%$pretraga' ORDER BY id DESC";
		}




		
		$sql = "SELECT * FROM proizvod ORDER BY id DESC";
		$q = mysqli_query($mysqli,$sql);
?>
					<div class="row">
					<?php 
						while ($red=$q->fetch_object()) {
					 ?>		
					<div class="col-lg-12">
						<h3><?php echo $red->naslov; ?></h3>
						<p><?php echo $red->opis; ?></p>
						<hr>
					</div>

 <?php 
	}

 ?>

					
				</div>


<?php 
	}
	
?>