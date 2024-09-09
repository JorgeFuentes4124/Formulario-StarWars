<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("../Conexion/Usuario.php");

// Recibir datos del formulario
$usu = $_POST['usuario'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$fe = $_POST['fecha'];
$cla = $_POST['clave'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

// Llamar a la función de inserción
$result = insertar($usu, $nom, $ape, $fe, $cla, $foto, $fotoTamanio);

// Mostrar resultado
if(strlen($result) > 5) {
    echo '<div class="Rcontainer">
        <div class="Rbox">
            <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
            <h3 class="Rcuerpo">' . htmlspecialchars($result, ENT_QUOTES, 'UTF-8') . '</h3>
            <a href="../form/Menu.php" class="cerrar">Cerrar</a>
        </div>
    </div>';
} else {
    include("../Form/Menu.php");
}
?>
</body>
</html>
