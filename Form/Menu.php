<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu general</title>
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&family=Dosis:wght@300&family=Fuggles&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="../css/Menu.css">
	<link rel="stylesheet" href="../css/formAltas.css">

</head>

<body>
	<div id="contenedor">

		<div class="header">

			<div class="top">
				<!-- Logo -->
				<div id="logo">

					<h1 id="title">Administra Usuario</h1>
					<p>Gestiona los usuarios de este sistema</p>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
					<li><a href="#altas" id="altas-link"><span class="icono-container">Altas
							<img class="icono" src="Imagen/X-WING.png" ></span></a></li>
						<li><a href="#bajas" id="bajas-link"><span class="icono-container">Bajas<img class="icono"
										src="Imagen/stormtrooper.png"></span></a></li>
						<li><a href="#modificacion" id="modificacion-link"><span
									class="icono-container">Modificacion<img class="icono"
										src="Imagen/R2-D2.png"></span></a></li>
						<li><a href="#listar" id="listar-link"><span class="icono-container">Listar<img class="icono"
										src="Imagen/c-3po.png"></span></a>
						</li>
					</ul>
				</nav>

			</div>
		</div>

		<div class="main">
			<div class="image-menu"><img id="menuLateral" src="../images/menu.png" alt="" /></div>
			<section class="banner">
				<div class="container">
					<h2 class="titulo">Administración de Usuario</h2>
				</div>
			</section>

			<!-- Intro -->
			<section id="altas" class="one dark cover">
				<div class="container">
					<?php
					include("formaltas.php");
					?>
				</div>
			</section>

			<!-- Portfolio -->
			<section id="bajas" class="two">
				<div class="container">
					<?php
					include("formbajas.php");
					?>
				</div>
			</section>

			<!-- About Me -->
			<section id="modificacion" class="three">
				<div class="container">
					<?php
					include("formModificar.php");
					?>
				</div>
			</section>

			<!-- Contact -->
			<section id="listar" class="four">
				<div class="container listar">
					<?php
					include("Listar.php");
					?>
				</div>
			</section>

			<!-- Footer -->
			<footer id="footer">
			<div class="FooterPadre" >
				<div class="Footer1">
					<p>Que la fuerza te acompañe.</p>
					<p>La fuerza estará contigo, siempre</p>
					<p>No subestimes el poder del Lado Oscuro</p>
				</div>
								
					<div class="Footer2">
						<h2>Desarrollado con la Fuerza de:</h2>
						<h3>Barrios Nehuen</h3>
						<h3>Nicolas Delgado</h3>
						<h3>Jorge Fuentes</h3>
						<h3>Maximo Hermann</h3>
					</div>

				<div class="Footer3">
					<h2>Transmision asegurada por Coruscant. </h2>
				</div>

			</div>
				 
				 

			</footer>
		</div>
	</div>

	<script src="../js/menu.js"></script>
	<script src="../js/form-altas.js"></script>
	<script src="../js/form-bajas.js"></script>
	<script src="../js/form-modificar.js"></script>
</body>

</html>