  

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

        <div> 
          <input type="button" id="btnAdd" class="enviar btn btn-primary" value="Nuevo Artículo">           
        </div>
      </form> 


      <div class="tabla_datos" border="0" cellpadding="0" cellspacing="0">
        <table>  
          <tr>
            <th class="cabecera" colspan="5">Detalles de Venta</th>
          </tr>              
          <tr>
            <th>Código</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Total</th>
          </tr>
          <tbody id="listaArticulos">          
          <?php echo getArticulos(1); ?>   <!-- aqui se agregan los datos actualizados con ajax -->           
          </tbody>
        </table>            
      </div>


      <form class="formulario" id="form_credito" method="POST" action="">
        <div class="container-ventas">

          <div class="input-group radio">
            <input type="radio" class="plazos" name="rbPlazo" id="financiar">
            <label for="financiar">Plazo de financiemiento</label>

            <input type="radio" class="plazos" name="rbPlazo" id="contado">
            <label for="contado">Precio de contado</label>
          </div>

          <select id="plazoFinanciar" name="plazoFinanciar">
            <option name="opcion" value="0">Seleccione plazo</option>
            <option name="opcion" value="3">3 Meses</option>
            <option name="opcion" value="6">6 Meses</option>
            <option name="opcion" value="12">12 Meses</option>
          </select>


          <select id="precioContado" name="precioContado">
            <option name="opcion" value="0">Seleccione plazo</option>
            <option name="opcion" value="2">2 Meses</option>
            <option name="opcion" value="3">3 Meses</option>
          </select>          

          <div>
          <div class="input-group">
            <input type="number" id="prima" name="prima" value="0">
            <label class="label active" for="prima">Prima:</label>
          </div>

          <div class="input-group"> 
            <input type="text" id="subtotal" name="subtotal" value="<?php echo actualizar(); ?>" readonly="readonly">
            <label class="label active" for="subtotal">SubTotal:</label>
          </div> 

          <div class="input-group">
            <input type="text" id="financiamiento" value="0" name="financiamiento" readonly="readonly">
            <label class="label active" for="financiamiento">Finaciamiento:</label>
          </div>
          </div>

          <div class="input-group">
            <input type="text" id="saldo" name="saldo" value="0" readonly="readonly">
            <label class="label active" for="saldo">Saldo a Pagar:</label>
          </div>

          <div class="input-group">
            <input type="text" id="abono" name="abono" value="0" readonly="readonly">
            <label class="label active" for="abono">Abono Mensual:</label>
          </div>
          <input type="submit" id="btn-submit" value="Realizar Venta">
        </div>
      </form>





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