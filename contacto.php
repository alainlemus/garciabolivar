<?php

	error_reporting(E_ALL);
  	ini_set('display_errors', '1');

	$nombre = utf8_decode($_POST['nombre']);
	$telefono = $_POST['telefono'];
	$email = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = utf8_decode($_POST['mensaje']);
 
    if($_POST)
    {
	     // Correo al que queremos que llegue
	     $destinatario = "alta_lere@hotmail.com";
	     // Asunto
	     $asunto = "Email de contacto del sitio web garciadebolivar.com";
	     // Mensaje
	      $mensaje = "Mensaje de contacto del sitio web garciadebolivar.com: <br><br> 
	            Nombre: ".$nombre."<br>
	            Telefono: ".$telefono."<br>
	            Email: ".$email."<br>
	            Asunto: ".$asunto."<br>
	            Mensaje: ".$mensaje."<br><br>
	 
	            ";
	      // Cabeceras
	      // Para enviar un correo HTML, debe establecerse la cabecera Content-type
	       $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	       $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	       // Cabeceras adicionales
	        $cabeceras .= 'To: '.'alainttlm@gmail.com'.' ' . "\r\n";
	        $cabeceras .= 'From: '.$destinatario. "\r\n";
	     // Enviamos el email
	 
	 
	     if(mail($destinatario, $asunto, $mensaje, $cabeceras))
	     {
	         echo "<script>
	         swal('Bien Hecho!', 'Se mando tu informacion, pronto nos pondremos en contacto', 'success');
	         document.getElementById('contactForm').reset();
			 $('.remodal-close-blue').click();
	         </script>";

	      }
	     else{
	         echo '<script>swal("Ocurrio un error!", "No se pudo mandar el correo!, por favor intentelo nuevamente.", "info");</script>';
	     }
 
    }
 
 



