
<?php include('vista/header.php');  ?>
<?php include('controlador/dataVentas.php'); ?>

   <!--  <script src="js/jquery.js"></script> -->
    <script src="js/ajax.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ctrl_Menu.js"></script>
  
	<section class="main container">
		<div class="row">
			<?php include('vista/ventas/aside-ventas.php'); ?> 

  			<div class="col-md-9" id="creditos">
  			<?php include('vista/ventas/form-registro-ventas.php'); ?>
  			</div> 

  			<div class="col-md-9" id="contado">
  			<?php include('vista/ventas/form_registro_contado.php');  ?>
  			</div> 
  			<div class="col-md-9" id="abonos">
  			<?php include('vista/ventas/form_abonos.php');  ?>
  			</div> 
  			<div class="col-md-9" id="estadoCuenta">
  			<?php include('vista/ventas/form_estadoCuenta.php');  ?>
  			</div>
  			<div class="col-md-9" id="proforma">
  			<?php include('vista/ventas/form_proforma.php');  ?>
  			</div>
  			<div class="col-md-9" id="ventaContado">
  			<?php include('vista/ventas/form_ventaContado.php');  ?>
  			</div>  
			
		</div>
	</section>


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
 <script src="js/formulario.js"></script>
</body>
</html>
