<?php
	 include "connection.php"; 
	 include "Product.class.php";

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
</head>
<body>
<?php
include "include/leftside.php";
 ?>
<img src="img/logo.png" width="200">

<div class="container">
	<div class="row ">
		<div class="col-lg-6 col-xs-12">
			<img src="img/3.jpg">
		</div>
		<div class="col-lg-6 col-xs-12"><div class="page-header">
 			 <h1>Bela-tehnika <small>Obriši proizvod</small></h1>
		</div>
			<p class="text4" >
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div>
		<div class="row dodaj_proizvod">
		<div class="col-lg-5 col-xs-12">
			<div class="well1">
				<form action="" method="POST">
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
				
				<button type="button" id="submit" name="submit" onclick="obrisi()" class="btn btn-danger btn-block"  >Obriši</button> 
			</form>
			</div>
		</div>
		<div class="col-lg-7 ">
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

	function obrisi(){
		var proizvod_id = $("#proizvod").val();
		$.get( "controller.php?proizvod_id="+proizvod_id + "&akcija=obrisiProizvode", function( data ) {
  		$( ".result" ).html( data );
  		alert( data);
		});

	}
</script>
</body>
</html>