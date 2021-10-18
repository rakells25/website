<?php
// Free Bootstrap Themes : www.365bootstrap.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Por favor, intentelo de nuevo.</span>";

if(isset($_POST['submitcontact']))
{
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$asunto=$_POST['asunto'];
	$mensaje=$_POST['mensaje'];
	

	$to = "rakel_ls25@hotmail.com";
	$message = " nombre: " . $nonmbre ."\r\n Email: " . $email . "\r\n Message:\r\n" . $mensaje;
	 
	$from = "365Bootstrap.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$asunto,$mensaje,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Gracias, tu mensaje se ha enviado correctamente</span>";
	   header( "refresh:5; url=contact.html" );
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.365bootstrap.com">
	
    <title>Raquel López</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../fonts/stylesheet.css">
	<link href="../css/mb-comingsoon-iceberg.css" rel="stylesheet" />
	
	<!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="../js/jquery-2.1.1.js"></script>
	<script src="../js/modernizr.custom.97074.js"></script>

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sub-page">
	
	<header class="sub-header">
	
		<!-- /////////////////////////////////////////Navigation -->
		<nav id="menu" class="navbar container">
				<div class="">
					<div class="navbar-header">
						<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
						<a href="index.html" class="navbar-brand visible-xs">Raquel López - Contacto</a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="../index.html">Inicio</a></li>
							
							<li class="dropdown"><a href="archive.html" class="dropdown-toggle" data-toggle="dropdown">Categorias <i class="fa fa-chevron-down"></i></a>
								<div class="dropdown-menu" style="margin-left: -203.625px;">
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											<li><a href="../logotipos/logotipos.html">Logotipos</a></li>
											<li><a href="../Carteleria/carteleria.html">Cartelería</a></li>
											
										</ul>
										<ul class="list-unstyled">
											<li><a href="../web/web.html">Diseño Web</a></li>
											<li><a href="../ilustracion/ilustracion.html">Ilustracion</a></li>
											
										</ul>
										<ul class="list-unstyled">
											<li><a href="../fotografia/fotografia.html">Fotografia</a></li>
										
										
										</ul>
									</div>
								</div>
							</li>
							<li><a href="../blog/archive.html">Blog</a></li>
							<li><a href="#">Contacto</a></li>
						</ul>
					</div>
				</div>
			</nav>
		<!-- Navigation -->
		
		<div class="crumbs">
			<div class="container">
			<h2><a href="#">Contacto</a></h2>
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
			</div>
		</div>
	</header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		<div class="container">
			<div class="row">
				<div id="main-content">
					<div class="row">
						
						<div class="col-md-6" style="margin-bottom: 20px;">
						
							<h3>Gracias por rellenar el formulario. Se ha enviado correctamente.</h>
							<form name="form1" id="ff" method="post" action="contact.php">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nombre *" name="name" id="name" required data-validation-required-message="Please enter your name.">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Asunto *" name="subject" id="subject" required data-validation-required-message="Please enter subject.">
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Escribe tu mensaje *" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
								</div>
								<button type="submit" class="btn btn-skin" id="submitcontact" name="submitcontact">Enviar Mensaje</button>
							</form>
						</div>
						<div class="col-md-6">
							<h1>CONTACTA</h1>
							
							<p><span class="glyphicon glyphicon-earphone"></span> +603 69 18 13</p>
							<p><span class="glyphicon glyphicon-envelope"></span> Rakel_ls25@hotmail.com</p>
							<p><span class="glyphicon glyphicon-home"></span> Torrelavega, Cantabria 39300</p>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25314.59848157755!2d-4.02918271533627!3d43.34149347173824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493e7a531f6e41%3A0x9955af4fadb7a83f!2sCalle+Barrio+Sierrapando%2C+39300+Torrelavega%2C+Cantabria!5e0!3m2!1ses!2ses!4v1495612774796" width="550" height="230" frameborder="0" style="border:0" allowfullscreen></iframe>

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<ul class="list-inline social-buttons">
						<li><a href="https://www.facebook.com/raquel.lopezsanchez.9" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/rakells25/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://twitter.com/RakelLs26" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://es.pinterest.com/rakel_ls25/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCwSTjwWZi_kAxNfNMoxqElA" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<div class="copyright">
						<p>Copyright 20xx - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">365BOOTSTRAP</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>

    <!-- Core JavaScript Files -->
   	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Google Map -->
	<script>
	  var marker;
	  var image = 'images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

		// Specify features and elements to define styles.
        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
		   // Apply the map style array to the map.
          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

		// Create a marker and set its position.
        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
  
	

</body>

</html>
