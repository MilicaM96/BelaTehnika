<?php 
	 include "connection.php"; 
	 include "Category.class.php";
	 include "Product.class.php";


	$sve_kategorije = Kategorija::vratiKategoriju();

	$svi_proizvodi = Proizvod::vratiProizvode();



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bela-tehnika</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<?php
include "include/leftside.php";
 ?>

<img src="img/logo.png" width="200">
<div class="container-fluid">
	<div class="row best">
		<div class="col-lg-12 img-colm">
		 <div class="column1">
		 	<img src="img/proizvodi1.jpg"  alt="">
		  
		    
		    
		 </div>
		 <div class="column1">
		 	<img src="img/proizvodi3.jpg"  alt="">
		     
		    
		 </div>
		 <div class="column1 ">
		 	<img src="img/proizvodi4.jpg"  alt="">
		   
		   
		 </div>
		</div>
		
	</div>
</div>
<div class="container">
	<div class="row pretraga_proizvoda">
		<div class="col-lg-3 filt ">
			<h2>Filteri</h2>
			<hr>
			<select name="kategorija" id="kategorija" class="form">
					<option value="999">Sve kategoriju</option>
					<?php	
					 for($i=0; $i<count($sve_kategorije); $i++){
					?>
						<option value="<?php echo $sve_kategorije[$i]->id ?>"><?php echo $sve_kategorije[$i]->naziv; ?></option>

					<?php
						}
					?>
					
					
				</select>
				<br>
				<input type="text" name="pretraga" id="pretraga" class=" form" placeholder="Unesi naslov">
			<br>
			<button class="btn btn-primary bnt-block" onclick="primeniFilter()">Primeni filtere</button>
		</div>
		<div class="col-lg-9 ">
			<h2>Proizvodi</h2>
			<hr>
			<div id="svi_proizvodovi">
				<div class="row">
					<?php	
					for($i=0; $i<count($svi_proizvodi); $i++){
					?>	
					<div class="col-lg-12">
						<h3><?php echo $svi_proizvodi[$i]->naslov; ?></h3>
						<p class="text5"><?php echo $svi_proizvodi[$i]->opis; ?></p>
						<hr>
					</div>

					 <?php 
						}

					 ?>

					
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include "include/footer.php";
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>	
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog==" crossorigin="anonymous"></script>
<script type="text/javascript">
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
function primeniFilter(){
		var kategorija = $("#kategorija").val();
		var pretraga = $("#pretraga").val();

		$.post( "controller.php?akcija=pretraga", { kategorijaP: kategorija, pretragaP: pretraga })
		  .done(function( data ) {
		   $("#svi_proizvodovi").html(data);
		  });


	}
</script>
</body>
</html>