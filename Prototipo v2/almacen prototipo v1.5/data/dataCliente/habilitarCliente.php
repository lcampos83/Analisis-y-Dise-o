<?php

include '../conexionCliente.php';
$con = getConexion();
$cedula = $_GET['cedula'];
$estado = "SELECT estado FROM cliente where cedula = '$cedula;'";

if ($estado == 1) {
    echo 'El cliente se encuentra Habilitado';
} else {
    mysqli_query($con, "UPDATE cliente SET estado='1' WHERE cedula='$cedula';");
    redireccion();
    desconectar($con);
    echo 'Cliente habilitado correctamente';
}

function redireccion() {
    header('Location: http://127.0.0.1:8181/almacen-prototipo/index.php');
}

?>