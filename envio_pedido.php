<?php
	$pedido = $_POST["pedido"];
	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
	$correo = $_POST["correo"];
	$comentarios = $_POST["comentarios"];
	
	switch($pedido){
		case 1:
			$pedido = "Pizza Mediterránea";
			$precio = "$14.990.-";
			$imagen = "http://www.familog.com/franccesca/imagenes/pizza2.jpg";
			break;
		case 2: 
			$pedido = "Ñoquis con salsa boloñesa";
			$precio = "$6.990.-";
			$imagen = "http://www.familog.com/franccesca/imagenes/%C3%B1oquis.jpg";
			break;
		case 3:
			$pedido = "Tiramisú";
			$precio = "$2.990.-";
			$imagen = "http://www.familog.com/franccesca/imagenes/tiramisu.jpg";
			break;
	}
	
	//Mensaje al ADMINISTRADOR
	$correo_destino = "franccesca.epifani.ibarra@ciisa.cl";
	$asunto = "Pedido desde Ciisa Hot";

	$mensaje='<b>PEDIDO DESDE CIISA HOT</b>';	
	$mensaje=$mensaje . '<br><br><b>Datos de Cliente</b> ';
	$mensaje=$mensaje . '<br>Nombre: ' . $nombre;
	$mensaje=$mensaje . '<br>Fono: ' . $telefono ;	   
	$mensaje=$mensaje . '<br>Correo: ' . $correo;
	$mensaje=$mensaje . '<br>Comentarios: ' . $comentarios;
	$mensaje=$mensaje . '<br><br><b>Detalles del Pedido</b> ';
	$mensaje=$mensaje . '<br>Producto: ' . $pedido;
	$mensaje=$mensaje . '<table> ';
	$mensaje=$mensaje . '<tr> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '<img src='.$imagen.' width="300px" /> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '</td> ';
	$mensaje=$mensaje . '</tr> ';
	$mensaje=$mensaje . '</table> ';
	$mensaje=$mensaje . '<br>Precio: ' . $precio;
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
	$asunto = "Detalles de su Pedido - Ciisa Hot";

	$mensaje='<b>RESPUESTA AUTOMÁTICA</b>';	
	$mensaje=$mensaje . '<br><br>Estimado(a): ' . $nombre;
	$mensaje=$mensaje . '<br><br>Hemos recibido su pedido satisfactoriamente.';
	$mensaje=$mensaje . '<br>Enviaremos su producto a la brevedad.';
	$mensaje=$mensaje . '<br><br><b>Detalles del Pedido</b> ';
	$mensaje=$mensaje . '<br>Producto: ' . $pedido;
	$mensaje=$mensaje . '<table> ';
	$mensaje=$mensaje . '<tr> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '<img src='.$imagen.' width="300px" /> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '</td> ';
	$mensaje=$mensaje . '</tr> ';
	$mensaje=$mensaje . '</table> ';
	$mensaje=$mensaje . '<br>Precio: ' . $precio;
	$mensaje=$mensaje . '<br><br>Gracias por escogernos.';
	$mensaje=$mensaje . '<br><br>Atte' ;
	$mensaje=$mensaje . '<br><b>Equipo CIISA HOT</b>';
	$mensaje=$mensaje . '<table> ';
	$mensaje=$mensaje . '<tr> ';
	$mensaje=$mensaje . '<td> ';
	$mensaje=$mensaje . '<img src="http://fepifani.informaticaciisa.cl/Evaluacion3-Fran/imagenes/logo.jpg" width="100px" alt="Logo CIISA HOT" /> ';
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

	header("Location: formulario_pedido2.html");

?>