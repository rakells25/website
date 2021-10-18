<?php 
if (!$_POST){
	 echo "Error! intentelo de nuevo."; 
}else{ 
    //Estoy recibiendo el formulario, compongo el cuerpo 
    
    $cuerpo = "<h1>Formulario enviado</h1>"; 
    $cuerpo .= "<p style='color:red'>Nombre: " .  $_POST ["nombre"] . "</p>"; 
    $cuerpo .= "<p>Email: " . $_POST["email"] . "</p>";  
    $cuerpo .= "<p>Asunto: " . $_POST["asunto"] . "</p>"; 
    $cuerpo .= "<p>Mensaje: " . $_POST["mensaje"] . "</p>"; 

   
 
    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    //mando el correo... 
    mail("rakel_ls25@hotmail.com","Formulario recibido",$cuerpo,$cabeceras); 

    //doy las gracias por el envío 
    echo ""; 
    header( "refresh:4; url=index.html#main-content" );
} 

?>

<!-- ////////////Content Box 04 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.365bootstrap.com">

<!--botón-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/scroll.js" ></script>
<script src="js/modernizr.custom.63321.js"></script>
<!--Botón-->

    
    <title>Raquel López </title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">





    <!-- jQuery and Modernizr-->

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="index-page">
    <div class="custom-banner">
        <header class="main-header">
          

                
        
        <!-- ////////////Content Box 04 -->

        <section class="box-content box-4 box-style-2">
            <div class="container">
                <div id="page-content">
        <div class="container">
            <div class="row">
                <div id="main-content">
                    <div class="row">
                        
                        <div class="col-md-6" style="margin-bottom: 20px;">

        

                            <h3 class="agradecimiento">Gracias por rellenar el formulario. Se ha enviado correctamente.</h3>
                            <form name="form1" id="ff" method="post" action="procesar_3.php"onsubmit="return validacion();">
                                    
                            
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre *" name="nombre" id="name" required data-validation-required-message="Please enter your name.">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Asunto *" name="asunto" id="subject" required data-validation-required-message="Please enter subject.">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Escribe tu mensaje *" name="mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                </div>
                                <button type="submit" class="btn btn-skin" id="submitcontact" name="submitcontact">Enviar mensaje</button>
                            </form>
                        </div>




                        <div class="col-md-6">


                        
                            
                            <p><span class="glyphicon glyphicon-earphone"></span> +603 69 18 13</p>
                            <p><span class="glyphicon glyphicon-envelope"></span> rakel_ls25@hotmail.com</p>
                            <p><span class="glyphicon glyphicon-home"></span> Torrelavega, Cantabria</p>

                        

                        <br>


                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25314.59848157755!2d-4.02918271533627!3d43.34149347173824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493e7a531f6e41%3A0x9955af4fadb7a83f!2sCalle+Barrio+Sierrapando%2C+39300+Torrelavega%2C+Cantabria!5e0!3m2!1ses!2ses!4v1495612774796" width="550" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <br>
                        <br>
                            


                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Botón-->

                        <div id="ToTopTarget">
     
    </div>
    <a href="#ToTopTarget"><img class="boton" src="images/boton.png"></a>

<!--Botón-->

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
    <script src="<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23212.794044293045!2d-4.063760123510977!3d43.343574224933015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd493e72ed01f43d%3A0xb11dcb6f47adc1a3!2s39300+Torrelavega%2C+Cantabria!5e0!3m2!1ses!2ses!4v1494840092461" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>" async defer></script>
        </section>
    
    
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
    
    <!-- Light Box -->
    <script src="js/lightbox-plus-jquery.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/isotope.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        var myTheme = window.myTheme || {},
        $win = $( window );
        myTheme.Isotope = function () {
            // 4 column layout
            var isotopeContainer = $('.isotopeContainer');
            if( !isotopeContainer.length || !jQuery().isotope ) return;
            $win.load(function(){
                isotopeContainer.isotope({
                    itemSelector: '.isotopeSelector'
                });
                $('.isotopeFilters').on( 'click', 'a', function(e) {
                    $('.isotopeFilters').find('.active').removeClass('active');
                    $(this).parent().addClass('active');
                    var filterValue = $(this).attr('data-filter');
                    isotopeContainer.isotope({ filter: filterValue });
                    e.preventDefault();
                });
                
            });
        };
        myTheme.Isotope();

    });</script>
    
    <!-- carousel -->
    <script src="js/circletype.min.js"></script>
    <script src="js/plugins.js"></script>
    <script>
        $('#logo').circleType({fluid:true,radius: 360});
    </script>

                
    
</body>

</html>
