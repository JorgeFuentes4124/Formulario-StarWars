<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

include("../Conexion/usuario.php");

$usu = $_POST['usuario'];
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$fe = $_POST['fecha'];
$cla = $_POST['clave'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

echo $usu, $nom, $ape, $fe, $cla, $foto, $fotoTamanio;
$result = insertar($usu, $nom, $ape, $fe, $cla, $foto, $fotoTamanio);

if(strlen($result) > 5 ) {
    echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">' . $result . '</h3>
        <a href="../from/menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
} else {
    return include("../Form/Menu.php");
}
?>
