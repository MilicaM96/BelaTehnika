<?php
	 include "connection.php"; 
	 include "Category.class.php";
	  include "Product.class.php";
	$sve_kategorije = Kategorija::vratiKategoriju();

 if (isset($_POST['submit'])) {
 $kategorija_id = $_POST['kategorija'];
 $naslov = $_POST['naslov'];
 $opis = $_POST['opis'];

$nov_proizvod = new Proizvod($naslov, $opis, $kategorija_id);


 if ( $nov_proizvod->dodajProizvod()==true) {
 	$msg="Uspešno dodato.";
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
 			 <h1>Bela-tehnika <small>Dodaj proizvod</small></h1>
		</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row dodaj_proizvod">
		<div class="col-lg-6 col-xs-12">
			<img src="img/1.jpg">
		</div>
		<div class="col-lg-6 col-xs-12">
			<div class="well1">
				<?php if(isset($msg)){ ?>
					<div class="alert alert-info">
						<?php echo $msg; ?>
					</div>
				<?php 
					} 
				?>
				<form action="" method="POST">
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
				<input type="text" id="naslov" name="naslov" class="form" placeholder="Naslov">
				<textarea name="opis" id="opis" cols="30" rows="10" class="form-control" style="margin-top: 5px;margin-bottom: 5px;" placeholder="Unesite opis boga"></textarea>
				<input type="submit" id="submit" name="submit" class="btn btn-success btn-block" placeholder="Naslov" value="Pošalji">
			</form>
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