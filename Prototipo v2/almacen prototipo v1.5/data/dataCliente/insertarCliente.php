<?php

include '../conexionCliente.php';
$con = getConexion();
$cedula = $_GET['cedula'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$salario = $_GET['salario'];
$correo = $_GET['correo'];
$provincia = $_GET['provincia'];
$ciudad = $_GET['ciudad'];
$direccion = $_GET['direccion-empresa'];

mysqli_query($con, "insert into cliente (cedula,nombre,apellidos,salario,correo,provincia,ciudad,direccion) values ('$cedula','$nombre','$apellidos','$salario','$correo','$provincia','$ciudad','$direccion');");

mensaje();

desconectar($con);

function mensaje() {
    echo"<script>alert('Se ingresó el cliente correctamente')</script>";
    redireccion();
}

function redireccion() {
    header('Location: http://127.0.0.1:8181/almacen-prototipo/clientes.php');
}


?>

