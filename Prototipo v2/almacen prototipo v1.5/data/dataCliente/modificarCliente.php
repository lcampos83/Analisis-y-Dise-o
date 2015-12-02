<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../../almacen-prototipo/data/conexionCliente.php';
$con = getConexion();
$cedula = $_GET['cedula'];
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$salario = $_GET['salario'];
$correo = $_GET['correo'];
$telefono = $_GET['telefono'];
$provincia = $_GET['provincia'];
$ciudad = $_GET['ciudad'];
$direccion = $_GET['direccion-empresa'];


mysqli_query($con,"UPDATE cliente SET nombre='$nombre', apellidos='$apellidos', salario='$salario', correo='$correo', provincia='$provincia', ciudad='$ciudad', direccion='$direccion' WHERE cedula='$cedula';");
redireccion();

desconectar($con);

function redireccion() {
    header('Location: http://127.0.0.1:8181/almacen-prototipo/clientes.php');
}

?>