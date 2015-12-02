<?php
/**
 * Funciones para realizar la conexion a la base de datos
 *
 * @author Lcampos
 */
class Conexion {

    private define("servidor", "localhost");
    private define("user", "root");
    private define("password", "");
    private define("dataBase", "almacen_el_hogar");


    public function abrirConexion(){
        $this->conexion = mysql_connect($this->servidor,  $this->user, $this->password) or die('no se conectó');
        mysql_db_name($this->dataBase, $conexion);

        return conexion;
    }


    public function cerrarConexion(){
        mysql_close($this->conexion);
    }


    public function getConexion(){
        return $this->conexion;
    }

}

?>