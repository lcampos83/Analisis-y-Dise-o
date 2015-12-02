<?php
include 'conexion.php';
$con = getConexion();
$consulta = "SELECT * FROM cliente where estado = '0'";
$resultConsulta = mysqli_query($con, $consulta);
?>

<head>  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../../almacen-prototipo/css/tablas-cliente.css">
</head>
<div class="contenedor-formulario">
                <div class="wrap">
                    <center>
                    <table cellspacing="2" border="1">
                        <?php
                        if (mysqli_num_rows($resultConsulta) > 0) {
                            echo '<tr>';
                                echo "<td>Cédula</td>"
                                . "<td>Nombre</td>"
                                . "<td>Apellidos</td>"
                                . "<td>Telefono Primario</td>"
                                . "<td>Telefono Secundario</td>"
                                . "<td>Correo</td>";
                            echo '</tr>';
                            while ($row = mysqli_fetch_assoc($resultConsulta)) {
                                $cedula = $row["cedula"];
                                echo '<tr>';
                                echo "<td>" . $row["cedula"] . "</td>"
                                . "<td>" . $row["nombre"] . "</td>"
                                        . "<td>" . $row["apellidos"] . "</td>"
                                        . "<td>89459334</td>"
                                        . "<td>89459334</td>"
                                        . "<td>" . $row["correo"] . "</td>";
                                echo '</tr>';
                            }
                        } else {
                            
                        }
                        desconectar($con);
                        ?>
                    </table>
                    </center>
                </div>
            </div>
           
            <script src="../../../almacen-prototipo/js/formularioCliente.js"></script>
    </body>
</html>