
<?php 
include ('conexion.php');
error_reporting(0);

$respuestaOK = false;
$msjError = "La operación falló";
$contenidoOK = "";
$contenidoOK2 = "";




/* Función para obtener todos los articulos de la DB */
function getArticulos($cod){

 $salida = '';
 	if ($cod != "") {
 		$sql = mysql_db_query("almacen_el_hogar", "SELECT * FROM listaarticulostemp");
 
    	if(mysql_num_rows($sql)>0){
			while ($row = mysql_fetch_array($sql)){
		  	$salida .= '
		   		<tr>
		   			<td>'.$row[0].'</td>
		   			<td>'.$row[1].'</td>
		   			<td>'.$row[2].'</td>
		   			<td>'.$row[3].'</td>
		   			<td>'.$row[4].'</td>
		   		</tr>'; 
 			}
 		} else {
 			$salida = '<tr id="sinDatos"> 
 							<td colspan="5" style="text-align:center">---[[ NO SE ENCONTRARON COINCIDENCIAS ]]---</td>
 						</tr>'; 
 		} 
 	} else {
 		$salida = '<tr id="sinDatos"> 
 							<td colspan="5" style="text-align:center">---No hay artículo registrados---</td>
 						</tr>'; 
 	}
 	
 	return $salida;
}





/*-FUNCION PARA OBTENER UN ARTICULO DE LA DB-*/

$valor = $_POST['codigo']; //Capturo el dato enviado por metodo post
	
	if ($valor != "") {
		$sql = mysql_db_query("almacen_el_hogar", 'SELECT descripcion, costo FROM articulos WHERE codigo = '.$valor);
		$row = mysql_fetch_array($sql);
		$respuestaOK = true;
		$contenidoOK = $row[0];
		$contenidoOK2 = $row[1];

		$retorno = array("respuesta" => $respuestaOK, 
					"mensaje" => $msjError,
					"contenido" => $contenidoOK,
					"contenido2" => $contenidoOK2);

	echo json_encode($retorno);
		
	}else {
		$datos = "No se encontraron coincidencias";
	}






/*SE INSENTA LOS ARTUCULOS ENVIADOS X POST A TABLA TEMPORAL DE DB*/

if($_POST['cod'] != "") {

	$des = (int )$_POST['descuento'];
	$tot = (int )$_POST['total'];
	$monto = $tot - $des;

	$sql = "INSERT INTO listaarticulostemp VALUES('".$_POST['cod']."', '".$_POST['descripcion']."', '"
												 .$_POST['cantidad']."', '".$_POST['descuento']."', '".$monto."')";

	$consulta = mysql_db_query("almacen_el_hogar", $sql);
			
	if (mysql_affected_rows() > 0) {
			$contenidoOK = getArticulos($_POST['cod']);
			$respuestaOK = true;
			$out = array("respuesta" => $respuestaOK, 
					"mensaje" => $msjError,
					"contenido" => $contenidoOK);
	} else {
			$contenidoOK = "El articulo ya se incluyó en la factura, seleccione editar o eliminar";
			$respuestaOK = false;
			$out = array("respuesta" => $respuestaOK, 
					"mensaje" => $msjError,
					"contenido" => $contenidoOK);
	}
	
	echo json_encode($out);
}





/*SI PLAZOFINACIAR O PRECIOCONTADO > 0 REALIZA CALCULOS DE FINACIAMIENTO*/

if ($_POST['plazoFinanciar'] > 0 || $_POST['precioContado'] > 0) {
	$plazo = "";

	if ($_POST['plazoFinanciar'] > 0) {
		$plazo = $_POST['plazoFinanciar'];
	}else {
		$plazo = $_POST['precioContado'];
	}

	$subTotal = actualizar() - (int) $_POST['prima'];
	$financiar = ($subTotal*0.04)*$plazo;
	$Saldo = $subTotal + $financiar;
	$mensualidad = $Saldo/$plazo;

	$respuestaOK = true;
	$out = array("respuesta" => $respuestaOK, 
				 "mensaje" => $msjError,
				 "subTotal" => $subTotal,
				 "financiar" => $financiar,
				 "Saldo" => $Saldo,
				 "mensualidad" => $mensualidad);

	echo json_encode($out);

}






/*FUNCION PARA OBTENER LA SUMATORIA DE LOS ARTICULOS AGREGADOS*/

function actualizar(){

	$salida = ""; 	
 	$sql = mysql_db_query("almacen_el_hogar", "SELECT sum(totalArt) FROM listaarticulostemp");
 
    	if(mysql_num_rows($sql) == 1){
    		$row = mysql_fetch_array($sql);
		  	$salida = $row[0];  		
 		}else {
 			$salida =  0;
 		} 
 	 	
 	return $salida;
}




 

/*---------------------------------------------------------------------------------------------------------------*/





 ?>