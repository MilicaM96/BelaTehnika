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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<?php
include "include/navbar.php";
 ?>


		  <div class="splitview skewed">
        <div class="panel bottom">
            <div class="content">
                <div class="description">
                    <h1>Gorenje</h1>
                    <p>Ponosni na domace.</p>
                </div>

                <img src="https://www.tehnomanija.rs/UserFiles/products/128777.jpg" alt="Original">
            </div>
        </div>

        <div class="panel top">
            <div class="content">
                <div class="description">
                    <h1>Beko</h1>
                    <p>Tehnologija savršenog pranja veša koja olakšava svakodnevicu.</p>
                </div>
                <img src="https://skycom.rs/fajlovi/product/beko-masina-za-ves-wue-6536-xo-wue-6536-xo-0_5db1951f368a5.jpg" alt="Original">
            </div>
        </div>

        <div class="handle"></div>
    </div>

<div class="container">
	<div class="row first">
		<div class="col-lg-6">
			<h1 class="">Bela-tehnika <small> Opremite svoj dom!</small></h1>
		<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			
		</p>
		<p><a href="products.php" style="color: black;font-size: 14px;">Više <i class="fas fa-arrow-right"></i></a></p>
		
		</div>
		<div class="col-lg-6">
			<img src="img/proizvodi.jpg" style="width:100%">
		</div>

	</div>
</div>
<div class="container-fluid">
	<div class="row best">
		<div class="col-lg-12 img-colm">
		 <div class="column">
		 	<h2 class="title2">25% <small>popusta </small></h2>
		    <p class="text1"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <div class="button-cent"><a href="products.php" class="btn "style="color: white">Više <i class="fas fa-arrow-right"></i></a></div>
		    
		 </div>
		 <div class="column">
		 	<h2 class="title2">Dostava <small>na kućnu adresu</small> </h2>
		     <p class="text1" > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <div class="button-cent"><a href="products.php" class="btn "style="color: white">Više <i class="fas fa-arrow-right"></i></a></div>
		 </div>
		 <div class="column">
		 	<h2 class="title2">5 godina <small>garancije </small> </h2>
		     <p class="text1"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <div class="button-cent"><a href="products.php" class="btn "style="color: white">Više <i class="fas fa-arrow-right"></i></a></div>
		 </div>
		</div>
		
	</div>
</div>
<div class="container">
	<div class="row ">
		<div class="col-lg-6 ">
			
  <div class="img-grid">
    <img src="img/proizvodi1.jpg" class="grid" alt="">
    <img src="img/proizvodi2.jpg" class="grid" alt="">
    <img src="img/proizvodi3.jpg" class="grid" alt="">
    <img src="img/proizvodi4.jpg" class="grid" alt="">
 
  </div>

		</div>

		<div class="col-lg-6 ">
			<h2 class="title3">Brojke kojima se ponosimo</h2>
		<p class="text3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			
		</p>
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
document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});


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