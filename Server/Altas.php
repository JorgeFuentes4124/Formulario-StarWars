<<<<<<< HEAD
<div class="form">
	<h3 class="bajaTitulo" style="text-align: center;">FORMULARIO DE BAJA</h3>
	<form class="bajaInput" action="../server/bajas.php" method="POST">
		<div class="grupoInputs">
			<label for="userName">Seleccione un nombre de usuario:</label>
			<div class="container-select">
				<?php
				include("../modelo/usuario.php");
				echo getUsuarioUsersNames();
				?>
				<div id="modal" class=""></div>
			</div>
		</div>

		<div class="btn-baja">
			<input type="submit" value="Eliminar"><br>
		</div>
	</form>
</div>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

include("../modelo/usuario.php");

$usu = $_POST['usuario'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$fe = $_POST['fecha'];
$cla = $_POST['clave'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"]

$result = insertar($usu, $nom, $ape, $fe, $cla, $foto, $fotoTamanio);

if(strlen($result) > 5 ) {
    echo '<div class="Rcontainer">
    <div class="Rbox">
	<h1>hola</h1>
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">' . $result . '</h3>
        <a href="../from/menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
} else {
    return include("../from/respuestas-server/respuesta-alta.php");
}
?>
>>>>>>> c1bf82fb827f39584dfe28ad498e578ca509edf3
