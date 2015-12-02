  <div class="col-md-12">
  <div class="form-reg-cliente">
    <div class="wrap">
      <form action="controlador/dataVentas.php" class="formulario" name="formulario_registro_cliente" method="get">
        
        <div class="container-ventas">
          <div class="input-group">
            <input type="text" id="cedula" name="cedula" placeholder="Cédula">            
          </div>

          <div class="input-group">
            <input type="text" id="nombre" name="nombre">            
          </div> 

          <div class="input-group">
            <input type="text" id="apellidos" name="apellidos">            
          </div> 
        </div>
      </form> 


      <div class="tabla_datos" border="0" cellpadding="0" cellspacing="0">
        <table>  
          <tr>
            <th class="cabecera" colspan="4">Estado de Cuenta del Cliente</th>
          </tr>              
          <tr>
            <th># Factura</th>
            <th>Monto Total</th>
            <th>Saldo Actual</th>
            <th>Mensualidad</th>
          </tr>
          <tbody id="listaArticulos">
          <tr>
            <td>1254698</td>
            <td>182950</td>
            <td>121950</td>
            <td>30500</td>
          </tr>          
        <!--  <?php echo getArticulos(1); ?>    aqui se agregan los datos actualizados con ajax -->           
          </tbody>
        </table>            
      </div>


  <div class="contenido">
    <div id="ventanaArticulos" class="ventana"  title="Detalles del Artículo">
       
    <form class="form-agregar" id="formVentanna" method="Post" action="">

        <label class="label-add" for="codigo">Código del Artículo:</label>
        <input type="text" id="cod" name="cod" class="txtArticulo">

        <label class="label-add" for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" class="txtArticulo">

        <label class="label-add" for="cantidad">Cantidad:</label>
        <input type="text" id="cantidad" name="cantidad" class="txtArticulo">

        <label class="label-add" for="descuento">Descuento:</label>
        <input type="text" id="descuento" name="descuento" class="txtArticulo">

        <label class="label-add" for="total">Total:</label>
        <input type="text" id="total" name="total" class="txtArticulo">  

        <div class="btn-add">
          <input type="button" id="btnConfirmar" class="btn btn-primary" value="Agregar el nuevo artículo">
        </div>        
    </form>

    </div>     
  </div> 
  </div>
</div>
</div>