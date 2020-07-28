<?php 
 	include "connection.php"; 
	 include "Product.class.php";
	 include  "Category.class.php";


		if (isset($_GET['akcija']) && $_GET['akcija'] == "obrisiProizvode"){
			if (Proizvod::obrisiProizvode($_GET['proizvod_id'])== true) {
				echo "Proizvod je uspesno obrisan";
			}else{
				echo "Greska!";
			}


		}
		if (isset($_GET['akcija']) && $_GET['akcija'] == "pretraga"){
			$pretraga = Proizvod::Pretraga(trim($_POST['kategorijaP']), trim($_POST['pretragaP']));
 		?>
 				<div class="row">
					<?php 
						for($i=0; $i<count($pretraga); $i++){
					 ?>		
					<div class="col-lg-12">
						<h3><?php echo $pretraga[$i]->naslov; ?></h3>
						<p class="text5"><?php echo $pretraga[$i]->opis; ?></p>
						<hr>
					</div>
				 <?php 
					}

				 ?>

					
				</div>

		<?php 

		}

 ?>