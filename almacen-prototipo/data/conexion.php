<?php
/**
 * Funciones para realizar la conexion a la base de datos
 *
 * @author Lcampos
 */
class Conexion {
    
    private $servidor;
    private $user;
    private $password;
    private $conexion;

    
    public function __construct() {

        $this->servidor = 'localhost';
        $this->user = 'root';
        $this->password = '';
    }


    public function abrirConexion(){
        $this->conexion = mysql_connect($this->servidor,  $this->user, $this->password) or die('no se conectó');
    }


    public function cerrarConexion(){
        mysql_close($this->conexion);
    }


    public function getConexion(){
        return $this->conexion;
    }

}

?>