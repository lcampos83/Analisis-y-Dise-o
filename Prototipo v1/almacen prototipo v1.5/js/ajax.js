 
// Funcion para mortrar/ocultar los combobox
$(document).ready(function(){


    $("#financiar").on( "click", function() {
      $('#plazoFinanciar').show(); //muestro mediante id
      $('#precioContado').hide();     
     });

    $("#contado").on( "click", function() {
      $('#precioContado').show(); //muestro mediante id
      $('#plazoFinanciar').hide();     
     });
  });



function actualizar(){

  $salida = "";

   $.ajax({    <!--  --------------------------> método ajax de jquery  -->
    url: "controlador/dataVentas.php", <!--  --> especifica la url a llamar  -->
    type: "post",    <!--  --------------------> método por donde se envia  -->
    dataType: "json",    <!--  ----------------> especifica el tipo de datos  -->                             
    data: "actualizar=1",            <!--  ----------------> valores a enviar  -->                    
                
      success: function(datos){  <!--  --------> Si la funcion es verdadera  -->
                
      $salida = datos.contenido;
    },
      error: function(datos){
      alert("Error " + datos.contenido);
      $salida = datos.contenido;
    }
  });
  
  return $salida;
}






// funcion para las ventanas modales

$(document).ready(function(){ <!-- --------> ejecuta el script jquery cuando el documento ha terminado de cargarse -->
  
    $("#btnAdd").click(function() { <!-- ------> al pulsar (.click) el boton 1 (#b1) -->
     
        $("#ventanaArticulos").dialog({ <!--  ------> muestra la ventana  -->
            autoOpen: true,  <!--  ------> oculta la ventana  -->
            width: 250,  <!-- -------------> ancho de la ventana -->
            height: 450,<!--  -------------> altura de la ventana -->
            show: "scale", <!-- -----------> animación de la ventana al aparecer -->
            hide: "scale", <!-- -----------> animación al cerrar la ventana -->
            resizable: "false", <!-- ------> fija o redimensionable si ponemos este valor a "true" -->
            position: "center",<!--  ------> posicion de la ventana en la pantalla (left, top, right...) -->
            modal: "true" <!-- ------------> si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
        });
    });
});




/*Función para capturar el evento de preionar la tecla enter*/

$(document).ready(function(){
  
    $("#cod").bind('keypress',function(e){

        if(e.keyCode==13){

        $codigo = $("#cod").val();   <!--  ------> obtengo el dato del input  -->
        
        $.ajax({    <!--  --------------------------> método ajax de jquery  -->
          url: "controlador/dataVentas.php",<!--  --> especifica la url a llamar  -->
          type: "post",   <!--  --------------------> método por donde se envia  -->
          dataType: "json",   <!--  ----------------> especifica el tipo de datos  -->                             
          data: "codigo="+ $codigo,   <!--  --------> valores a enviar  -->                    
          
            success: function(datos){ <!--  --------> Si la funcion es verdadera  -->
             
              $("#descripcion").val(datos.contenido); <!--  ------> muestra los datos en el input  -->
              $("#cantidad").val(1);
              $("#descuento").val(0);
              $("#total").val(datos.contenido2);
            }
          });
        }
    });

});





// Funcion para mostrar los datos en la tabla

$(document).ready(function(){
        // 
       $("#btnConfirmar").on('click', function(){

        $cod = $("#cod").val();
        var dataString = $('.form-agregar').serialize();
      

          if ($cod !="") {
        
            $.ajax({    <!--  --------------------------> método ajax de jquery  -->
              url: "controlador/dataVentas.php",<!--  --> especifica la url a llamar  -->
              type: "post",   <!--  --------------------> método por donde se envia  -->
              dataType: "json",   <!--  ----------------> especifica el tipo de datos  -->                             
              data: dataString,   <!--  ----------------> valores a enviar  -->                    
                
               success: function(datos){ <!--  --------> Si la funcion es verdadera  -->
                
                $("#listaArticulos").html(datos.contenido);//cargo los registros que devuelve ajax
                $("#ventanaArticulos").dialog('close'); <!-- --> Cierra la venta modal  -->

              },
                error: function(datos){
                alert("Error " + datos.contenido);
              }
            });

          } else {
            alert("Debe digitar el código del artículo");
          } 
       }); 
});


$(document).ready(function(){
  $("#prima").bind('keypress',function(e){

  if(e.keyCode==13){

    var strg = $('#form_credito').serialize();   <!--  ------> obtengo el dato del input  -->   
        
    $.ajax({    <!--  --------------------------> método ajax de jquery  -->
      url: "controlador/dataVentas.php",<!--  --> especifica la url a llamar  -->
      type: "post",   <!--  --------------------> método por donde se envia  -->
      dataType: "json",   <!--  ----------------> especifica el tipo de datos  -->                             
      data: strg,                 <!--  --------> valores a enviar  -->                    
          
        success: function(datos){ <!--  --------> Si la funcion es verdadera  -->
          
          if (datos.respuesta == true) {

            $("#subtotal").html(datos.subTotal); <!--  ------> muestra los datos en el input  -->
            $("#financiamiento").val(55555);
            $("#saldo").val(datos.Saldo);
            $("#abono").val(datos.mensualidad);

          }else {
            alert("ERROR: " + datos.mensaje);
          }
        }
      }); 
    }
  });
});