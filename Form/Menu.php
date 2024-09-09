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
	<link rel="stylesheet" href="../css/menu.css">
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
						<li><a href="#altas" id="altas-link"><span class="icono-container">Altas<img class="icono"
										src="../images/icono-alta.png"></span></a></li>
						<li><a href="#bajas" id="bajas-link"><span class="icono-container">Bajas<img class="icono"
										src="../images/icono-baja.png"></span></a></li>
						<li><a href="#modificacion" id="modificacion-link"><span
									class="icono-container">Modificacion<img class="icono"
										src="../images/icono-modificar.png"></span></a></li>
						<li><a href="#listar" id="listar-link"><span class="icono-container">Listar<img class="icono"
										src="../images/icono-listar.png"></span></a>
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
				<div class="container">
					<?php
					include("Listar.php");
					?>
				</div>
			</section>

			<!-- Footer -->
			<footer id="footer">
			<div class="FooterPadre" >
				<div class="Footer1">
					<h3>Que la fuerza te acompañe.</h3>
					<h3>La fuerza estará contigo, siempre</h3>
					<h3>No subestimes el poder del Lado Oscuro</h3>
				</div>
								
					<div class="Footer2">
						<h2>Desarrollado con la Fuerza de:</h2>
						<h3>Barrios Nehuen</h3>
						<h3>Nicolas Delgado</h3>
						<h3>Jorge Fuentes</h3>
						<h3>Maximo Hermann</h3>
					</div>

				<div class="Footer3">
					<img url(data:image/png;base64,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)>
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