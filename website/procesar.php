<?php 
if (!$_POST){
	 echo "Problemas."; 
}else{ 
    //Estoy recibiendo el formulario, compongo el cuerpo 
    $cuerpo = "Formulario enviado\n"; 
    $cuerpo .= "Nombre: " .  $_POST ["nombre"] . "\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\n";    
    $cuerpo .= "Asunto: " . $_POST["asunto"] . "\n";
    $cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\n";


    //mando el correo... 
    mail("rakel_ls25@hotmail.com","Formulario recibido",$cuerpo); 

    //doy las gracias por el envío 
    echo "Gracias por rellenar el formulario. Se ha enviado correctamente."; 
    container( "refresh:5; url=index.html" );
} 

?>