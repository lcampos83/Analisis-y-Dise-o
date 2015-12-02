<?php

include '../../../almacen-prototipo/data/conexionCliente.php';
$con = getConexion();
$cedula = $_GET['cedula'];
$estado = "SELECT estado FROM cliente where cedula = '$cedula;'";

if ($estado == 0) {
    echo 'El cliente se encuentra deshabilitado';
    redireccion();
} else {
    mysqli_query($con, "UPDATE cliente SET estado='0' WHERE cedula='$cedula';");
    redireccion();
    desconectar($con);
    echo 'Cliente deshabilitado correctamente';
}

function redireccion() {
    header('Location: http://127.0.0.1:8181/almacen-prototipo/index.php');
}

?>