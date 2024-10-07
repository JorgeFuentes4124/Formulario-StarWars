<?php
include('../../Conexion/Usuario.php');
$respuesta = getUsuarioUserNames();
echo json_encode($respuesta, true);
?>
