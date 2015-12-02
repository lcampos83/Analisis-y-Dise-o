<?php
/**
 * Funciones para realizar la conexion a la base de datos
 *
 */
function getConexion() {
    
$servername ="localhost";
$username= "root";
$password= "";
$database = "almacen_el_hogar";

return $conn = new mysqli($servername, $username, $password,$database);

}

function desconectar($con) {
    
    mysqli_close($con);
    
}

?>