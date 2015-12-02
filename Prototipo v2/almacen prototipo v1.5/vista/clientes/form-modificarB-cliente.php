<?php
include '../../../almacen-prototipo/data/conexionCliente.php';
$cedula = $_GET['cedula'];
$con = getConexion();
$nombre = "SELECT nombre FROM cliente where cedula = '$cedula;'";
$apellidos = "SELECT apellidos FROM cliente where cedula = '$cedula;'";
$salario = "SELECT salario FROM cliente where cedula = '$cedula;'";
$correo = "SELECT correo FROM cliente where cedula = '$cedula;'";
$provincia = "SELECT provincia FROM cliente where cedula = '$cedula;'";
$ciudad = "SELECT ciudad FROM cliente where cedula = '$cedula;'";
$direccion = "SELECT direccion FROM cliente where cedula = '$cedula;'";
$resultNombre = mysqli_query($con, $nombre);
$resultApellidos = mysqli_query($con, $apellidos);
$resultSalario = mysqli_query($con, $salario);
$resultCorreo = mysqli_query($con, $correo);
$resultProvincia = mysqli_query($con, $provincia);
$resultCuidad = mysqli_query($con, $ciudad);
$resultDireccion = mysqli_query($con, $direccion);
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../../../almacen-prototipo/css/estilosCliente.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../../../almacen-prototipo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../almacen-prototipo/css/estilos.css">
        <link rel="stylesheet" href="../../../almacen-prototipo/css/estilosForm.css">
        <link rel="stylesheet" href="../../../almacen-prototipo/css/tablas.css">
        <title>Almacen el Hogar</title>
    </head>
    <body>

        <header>
            <section class="jumbotron">
                <div class="container">
                    <h1>Almacen El Hogar</h1>
                    <p>...Siempre a su servicio</p>
                </div>
            </section>

            <!-- Navigation -->
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <!-- esta seccion permite visualizar el menu en dispositivos mobiles -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><b>Inicio</b></a></li>

                            <li><a href="clientes.php"><b>Clientes</b></a></li>

                            <li><a href="ventas.php"><b>Ventas</b></a></li>

                            <li><a href="inventario.php"><b>Inventario</b></a></li>

                            <li><a href="reportes.php"><b>Reportes</b></a></li>

                            <li><a href="utilidades.php"><b>Utilidades</b></a></li>
                        </ul>
                    </div>           
                </div>        
            </nav>

            <div class="contenedor-formulario">
                <div class="wrap">
                    <form action="../../../almacen-prototipo/data/dataCliente/modificarCliente.php" class="formulario" name="formulario_registro_cliente" method="GET" >
                        <div>

                            <div class="input-group">
                                <input type="text" id="cedula" readonly="readonly" name="cedula" ng-model="cedula" required="" <?php echo 'value="' . $cedula . '"'; ?>>
                                <label class="label active"  for="cedula">Cédula:</label>
                            </div>

                            <div class="input-group">
                                <input type="text" id="nombre" name="nombre" ng-model="nombre" required="" 
                                <?php
                                if (mysqli_num_rows($resultNombre) > 0) {
                                    while ($row = mysqli_fetch_assoc($resultNombre)) {
                                        $nombre = $row["nombre"];
                                        echo 'value="' . $nombre . '"';
                                    }
                                }
                                ?>>
                                <label class="label active" for="nombre">Nombre:</label>
                            </div> 

                            <div class="input-group">
                                <input type="text" id="apellidos" name="apellidos" ng-model="apellidos" required=""
                                <?php
                                if (mysqli_num_rows($resultApellidos) > 0) {
                                    while ($row = mysqli_fetch_assoc($resultApellidos)) {
                                        $apellidos = $row["apellidos"];
                                        echo 'value="' . $apellidos . '"';
                                    }
                                }
                                ?>>
                                <label class="label active" for="apellidos">Apellidos:</label>
                            </div>  

                            <div class="input-group">
                                <input type="text" id="salario" name="salario" ng-model="salario" required="" 
                                <?php
                                if (mysqli_num_rows($resultSalario) > 0) {
                                    while ($row = mysqli_fetch_assoc($resultSalario)) {
                                        $salario = $row["salario"];
                                        echo 'value="' . $salario . '"';
                                    }
                                }
                                ?>>
                                <label class="label active" for="salario">Salario Mensual:</label>
                            </div>

                            <div class="input-group">
                                <input type="email" id="correo" name="correo" ng-model="correo" required=""
                                <?php
                                if (mysqli_num_rows($resultCorreo) > 0) {
                                    while ($row = mysqli_fetch_assoc($resultCorreo)) {
                                        $correo = $row["correo"];
                                        echo 'value="' . $correo . '"';
                                    }
                                }
                                ?>>
                                <label class="label active" for="correo">Correo:</label>
                            </div>

                            <div class="input-group">
                                <input type="text" id="telefono" name="telefono" ng-model="telefono" required="" value="89459334">
                                <label class="label active" for="telefono">Teléfono:</label>
                            </div>

                            <div class="input-group">
                                <input type="text" id="provincia" name="provincia" ng-model="provincia" required=""
                                <?php
                                if (mysqli_num_rows($resultProvincia) > 0) {
                                    while ($row = mysqli_fetch_assoc($resultProvincia)) {
                                        $provincia = $row["provincia"];
                                        echo 'value="' . $provincia . '"';
                                    }
                                }
                                ?>>
                                <label class="label active" for="provincia">Provincia:</label>
                            </div>

                            <div class="input-group">
                                <input type="text" id="ciudad" name="ciudad" ng-model="ciudad" required=""
                                <?php
                                if (mysqli_num_rows($resultCuidad) > 0) {
                                    while ($row = mysqli_fetch_assoc($resultCuidad)) {
                                        $ciudad = $row["ciudad"];
                                        echo 'value="' . $ciudad . '"';
                                    }
                                }
                                ?>>
                                <label class="label active" for="ciudad">Ciudad:</label>
                            </div>      


                            <div class="input-group">
                                <input type="text" id="direccion-empresa" name="direccion-empresa" ng-model="direccion - empresa" required="" 
                                <?php
                                if (mysqli_num_rows($resultDireccion) > 0) {
                                    while ($row = mysqli_fetch_assoc($resultDireccion)) {
                                        $direccion = $row["direccion"];
                                        echo 'value="' . $direccion . '"';
                                    }
                                }
                                ?>>
                                <label class="label active" for="direccion-empresa">Direccion:</label>
                            </div>

                            <input type="submit" id="btn-submit" value="Modificar">
                        </div>
                    </form>
                </div>
            </div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <p>Almacen el Hogar</p>
                        </div>
                        <div class="col-xs-6">
                            <ul class="list-inline text-right">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <script src="../../../almacen-prototipo/js/formularioCliente.js"></script>
    </body>
</html>