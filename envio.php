<?php
	$nombre =$_POST["nombre"];
	$telefono=$_POST["telefono"];
	$correo=$_POST["correo"];
	$comentarios=$_POST["comentarios"];
	
	//Mensaje al ADMINISTRADOR
	$correo_destino = "franccesca.epifani.ibarra@ciisa.cl";
	$asunto = "Contacto Ciisa Hot";

	$mensaje='<b>CONTACTO DESDE CIISA HOT</b>';	
	$mensaje=$mensaje . '<br><br><b>Datos de Cliente</b> ';
	$mensaje=$mensaje . '<br>Nombre: ' . $nombre;
	$mensaje=$mensaje . '<br>Fono: ' . $telefono ;	   
	$mensaje=$mensaje . '<br>Correo: ' . $correo;
	$mensaje=$mensaje . '<br>Comentarios: ' . $comentarios;
	$mensaje=$mensaje . '<br><br>Atte';
	$mensaje=$mensaje . '<br><b>Equipo CIISA HOT</b>';
	$mensaje=$mensaje . '<table> ';
	$mensaje=$mensaje . '<tr> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '<img src="http://www.familog.com/franccesca/imagenes/logo.jpg" width="100px" /> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '</td> ';
	$mensaje=$mensaje . '</tr> ';
	$mensaje=$mensaje . '</table> ';

	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'From: Pizza No-Reply<No-Reply@ciisa.cl>' . "\r\n" .
	$cabeceras .= 'Reply-To: Pizza No-Reply<No-Reply@ciisa.cl>' . "\r\n" .
	$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$cabeceras .= 'X-Mailer:PHP/' . phpversion();
	mail($correo_destino, $asunto, $mensaje, $cabeceras);
	
	$asunto = "";
	$mensaje = "";
	$cabeceras = "";
	
	//Respuesta al cliente
	$asunto = "Gracias por su Contacto - Ciisa Hot";

	$mensaje='<b>RESPUESTA AUTOMÁTICA</b>';	
	$mensaje=$mensaje . '<br><br>Estimado(a): ' . $nombre;
	$mensaje=$mensaje . '<br><br>Hemos recibido sus comentarios satisfactoriamente.';
	$mensaje=$mensaje . '<br>Nos pondremos en contacto con usted a la brevedad.';
	$mensaje=$mensaje . '<br><br>Atte' ;
	$mensaje=$mensaje . '<br><b>Equipo CIISA HOT</b>';
	$mensaje=$mensaje . '<table> ';
	$mensaje=$mensaje . '<tr> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '<img src="http://www.familog.com/franccesca/imagenes/logo.jpg" width="100px" /> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '</td> ';
	$mensaje=$mensaje . '</tr> ';
	$mensaje=$mensaje . '</table> ';

	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'From: Pizza No-Reply<No-Reply@ciisa.cl>' . "\r\n" .
	$cabeceras .= 'Reply-To: Pizza No-Reply<No-Reply@ciisa.cl>' . "\r\n" .
	$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$cabeceras .= 'X-Mailer:PHP/' . phpversion();
	mail($correo, $asunto, $mensaje, $cabeceras);

	header("Location: contacto2.html");

?>