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

$use = $_POST['usuario'];
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$fe = $_POST['fecha'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

$result = modificar($use, $ape, $nom, $fe, $foto, $fotoTamanio);

if (!$result) {
	echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">' . $result . '</h3>
        <a href="../Form/Menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
} else {
	return include("../Form/Respuestas-server/respuestasModificar.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<a href="formModificar.php">Volver</a>

</body>

</html>