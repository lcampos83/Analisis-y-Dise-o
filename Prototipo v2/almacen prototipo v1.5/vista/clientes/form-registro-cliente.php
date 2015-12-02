<div class="col-md-12">
    <div class="form-reg-cliente">
        <div class="wrap">
            <form action="../../../almacen-prototipo/data/dataCliente/insertarCliente.php" class="formulario" name="formulario_registro_cliente" method="GET">
                <div>

                    <div class="input-group">
                        <input type="text" id="cedula" name="cedula" ng-model="cedula" required="">
                        <label class="label" for="cedula">Cédula:</label>
                    </div>

                    <br>    
                    
                    <div class="input-group">
                        <input type="text" id="nombre" name="nombre" ng-model="nombre" required="">
                        <label class="label" for="nombre">Nombre:</label>
                    </div> 

                    <div class="input-group">
                        <input type="text" id="apellidos" name="apellidos" ng-model="apellidos" required="">
                        <label class="label" for="apellidos">Apellidos:</label>
                    </div>  

                    <div class="input-group">
                        <input type="text" id="provincia" name="provincia" ng-model="provincia" required="">
                        <label class="label" for="provincia">Provincia:</label>
                    </div>

                    <div class="input-group">
                        <input type="text" id="ciudad" name="ciudad" ng-model="ciudad" required="">
                        <label class="label" for="ciudad">Canton:</label>
                    </div>      

                    <div class="input-group">
                        <input type="text" id="direccion-empresa" name="direccion-empresa" ng-model="direccion-empresa" required="">
                        <label class="label" for="direccion-empresa">Direccion Exacta:</label>
                    </div>

                     <br>
                    
                     <div class="input-group">
                        <input type="text" id="telefono1" name="telefonoP" ng-model="telefonoP" required="">
                        <label class="label" for="telefonoP">Teléfono Principal:</label>       
                    </div>    
                        
                     <div class="input-group">
                        <input type="text" id="telefonoS" name="telefonoS" ng-model="telefonoS" required="">
                        <label class="label" for="telefonoS">Teléfono Secundario:</label>
                    </div>
                     
                     <div class="input-group">
                         <input type="text" id="salario" name="salario" ng-model="salario" required="">
                         <label class="label" for="salario">Salario Mensual:</label>
                     </div>

                     <br>

                     <div class="input-group">
                         <input type="email" id="correo" name="correo" ng-model="correo" required="">
                         <label class="label" for="correo">Correo:</label>
                     </div>

                     <br>               

                    <input type="submit" id="btn-submit" value="Registrar">
                </div>
            </form>
        </div>
    </div>
   
<script src="../almacen-prototipo/js/jquery.js"></script>
<script src="../almacen-prototipo/js/bootstrap.min.js"></script>
<script src="../almacen-prototipo/js/formulario.js"></script>
