<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Server altas</title>
	<link rel="stylesheet" href="../css/respuestas-alta.css">
</head>

<?php

include("../Conexion/Usuario.php");

$use = $_POST['userName'];

$result = deleteUser($use);

if ($result) {
	return include("../Form/Respuestas-server/respuestasBajas.php");
} else {
	echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">No se pudo eliminar correctamente este registro</h3>
        <a href="../Form/Menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
}
?>