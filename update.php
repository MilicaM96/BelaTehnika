<?php
	 include "connection.php"; 
	 include "Category.class.php";
	 include "Product.class.php";


	$sve_kategorije = Kategorija::vratiKategoriju();

	$svi_proizvodi = Proizvod::vratiProizvode();


 if (isset($_GET['submit'])) {
 	$proizvod = $_GET['proizvod'];
 	$kategorija = $_GET['kategorija'];

 	$nov_proizvod =  new Proizvod ("","", $kategorija);
 	
 	 if ( $nov_proizvod->izmeniProizvod($proizvod)==true) {
 	$msg="Uspešno izmenjeno.";
  } 
  else{
  	$msg="Greška!";
  }
 }
 
 


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
</head>
<body>
<?php
include "include/leftside.php";
 ?>
<img src="img/logo.png" width="200">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
		<div class="page-header">
 			 <h1>Bela-tehnika <small>Izmeni proizvod</small></h1>
		</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row dodaj_proizvod">
		<div class="col-lg-2 col-xs-12">
		</div>
		<div class="col-lg-8 col-xs-12">
			<div class="well1">
				<?php if(isset($msg)){ ?>
					<div class="alert alert-info">
						<?php echo $msg; ?>
					</div>
				<?php 
					} 
				?>
				<form action="" method="GET">
				<select name="proizvod" id="proizvod" class="form">
					<option value="">Izaberi proizvod</option>
					<?php	
					for($i=0; $i<count($svi_proizvodi); $i++){
					?>
						<option value="<?php echo $svi_proizvodi[$i]->id ?>"><?php echo $svi_proizvodi[$i]->naslov; ?></option>
					<?php
						}
					?>
				</select>
				<select name="kategorija" id="kategorija" class="form">
					<option value="">Izaberi kategoriju</option>
					<?php	
					 for($i=0; $i<count($sve_kategorije); $i++){
					?>
						<option value="<?php echo $sve_kategorije[$i]->id ?>"><?php echo $sve_kategorije[$i]->naziv; ?></option>

					<?php
						}
					?>
					
					
				</select>
				<input type="submit" id="submit" name="submit" class="btn btn-success btn-block" placeholder="Naslov" value="Izmeni">
			</form>
			</div>
		</div></div>
		<div class="row ">
		<div class="col-lg-2 col-xs-12">
		</div>
		<div class="col-lg-6 col-xs-12">
			<img src="img/2.jpg">
			<p class="text4" >
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div class="col-lg-6 ">
			<h2 style="text-align: center;">Proizvodi</h2>
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
<script type="text/javascript">
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>
</body>
</html>