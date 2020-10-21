<?php
	$pedido = $_GET["pedido"];
?>	

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="author" content="Franccesca Epifani"/>
		<title>CIISA HOT Ltda | Pedido</title>
		<link href="imagenes/icono.png" rel="shortcut icon" type="image/x-icon" />
		<link href="css/style.css" rel="stylesheet" />
	</head>
	<body>
		<header>
            <ul>
                <li><img src="imagenes/ubicacion-b.png" height="25" /><a href= "https://waze.com/ul/h66j9xyv8t" target="_blank">Av. República #20 - Santiago</a></li>
                <li><img src="imagenes/fijo-b.png" height="25" /><a href= "tel:+56229990000"> (2) 2999 00 00</a></li>
                <li><img src="imagenes/whspp.png" height="25" /><a href="https://api.whatsapp.com/send?phone=56987654321" target="_blank" rel="noopener"> (+56) 9 8765 43 21</a></li>
                <li><img src="imagenes/correo-b.png" height="25" /><a href="mailto:franccesca.epifani.ibarra@ciisa.cl">franccesca.epifani.ibarra@ciisa.cl</a></li>
            </ul>
			<div class="cabecera">
			<div class="col-md-3">
				<a href="index.html"><img src="imagenes/logo.jpg" border="0" width="85"></a>
			</div>
				<h1>¡LA MEJOR COMIDA ITALIANA!</h1>
			</div>
			<br clear="all" />
		</header>
		<nav>
			<ul class="menu">
				<li><a href="index.html">INICIO</a></li>
				<li><a href="nuestrosplatos.html">NUESTROS PLATOS</a></li>
				<li><a href="contacto.html">CONTACTO</a></li>
			</ul>
		</nav>
		<section>
				<form name="formulario_pedido" action="envio_pedido.php" method="post">
					<h2>Formulario de Pedido:</h2>
					<div>
						<label></label>
						<input type="text" name="nombre" placeholder="Nombre" required />
					</div>
					<div>
						<label></label>
						<input type="text" name="telefono" placeholder="Fono" required />
					</div>
					<div>
						<label></label>
						<input type="email" name="correo" placeholder="Correo: ejemplo@mail.com" required />
					</div>
					<div>
						<label></label>
						<textarea name="comentarios" placeholder="Comentarios" required></textarea>
						<input type="hidden" name="pedido" value="<?php echo $pedido ?>" />
					</div>
					<div>
						<button class="boton" type="submit">Comprar</button>
					</div>
				</form>
		<br clear="all" />
		</section>
		<footer>
			<div class="contenedor">
				<div class="izquierda">
					<ul>
						<li><h3>Menú:</h3></li>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="nuestrosplatos.html">Nuestros Platos</a></li>
						<li><a href="contacto.html">Contacto</a></li>
						<li></li>
					</ul>
				</div>
				<div class="derecha">
					<ul>
						<li><h3>Contáctanos:</h3></li>
						<li><img src="imagenes/ubicacion-b.png" height="25" /><a href= "https://waze.com/ul/h66j9xyv8t" target="_blank">Av. República #20 - Santiago</a></li>
						<li><img src="imagenes/fijo-b.png" height="25" /><a href= "tel:+56229990000"> (2) 2999 00 00</a></li>
						<li><img src="imagenes/whspp.png" height="25" /><a href="https://api.whatsapp.com/send?phone=56987654321" target="_blank" rel="noopener"> (+56) 9 8765 43 21</a></li>
						<li><img src="imagenes/correo-b.png" height="25" /><a href="mailto:franccesca.epifani.ibarra@ciisa.cl">franccesca.epifani.ibarra@ciisa.cl</a></li>
					</ul>
				</div>
			</div>
			<div class="copyright">
				<p>&copy; 2019 Todos los Derechos Reservados | Franccesca Epifani</p>
			</div>
		</footer>
	</body>
</html>