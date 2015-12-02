<?php
/**
 * Funciones para realizar la conexion a la base de datos
 *
 * @author Lcampos
 */
error_reporting(0);

$enlace =  mysql_connect('localhost', 'root', '');

if ($enlace) {
    $db = mysql_db_name("almacen_el_hogar", $enlace);
}

?>