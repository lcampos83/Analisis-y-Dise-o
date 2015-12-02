$(document).ready(function(){
	var estado = false;
	
	/*MOSTRAR/OCULTAR FORMULARIO REGISTRO CLIENTES*/
	$('#btn-toggle').on('click',function(){		
		$('.seccionToggle').slideToggle();

		if (estado == true) {
			$('body').css({
				"overflow": "auto"
			});
			estado = false;
		} else {
				$('body').css({
				"overflow": "hidden"
			});
			estado = true;
		}
	});


	 $('#btn-edit').on('click',function(){
		$('.seccionEdit').slideToggle();
		if (estado == true) {
			$('body').css({
				"overflow": "auto"
			});
			estado = false;
		} else {
			//$(this).text("Cerrar");
			$('body').css({
				"overflow": "hidden"
			});
			estado = true;
		}
	});
        
         $('#btn-habilitar').on('click',function(){
		$('.seccionHabilitar').slideToggle();
		if (estado == true) {
			$('body').css({
				"overflow": "auto"
			});
			estado = false;
		} else {
			//$(this).text("Cerrar");
			$('body').css({
				"overflow": "hidden"
			});
			estado = true;
		}
	});
        
         $('#btn-inhabilitar').on('click',function(){
		$('.seccionInhabilitar').slideToggle();
		if (estado == true) {
			$('body').css({
				"overflow": "auto"
			});
			estado = false;
		} else {
			//$(this).text("Cerrar");
			$('body').css({
				"overflow": "hidden"
			});
			estado = true;
		}
	});
        
        $('#btn-listaNegra').on('click',function(){
		$('.seccionListaNegra').slideToggle();
		if (estado == true) {
			$('body').css({
				"overflow": "auto"
			});
			estado = false;
		} else {
			//$(this).text("Cerrar");
			$('body').css({
				"overflow": "hidden"
			});
			estado = true;
		}
	});

});


	/*MOSTRAR/OCULTAR FORMULARIO VENTA CREDITO*/
$(document).ready(function(){

    $("#btn_cretitos").on( "click", function() {
      $('#contado').hide();
      $('#estadoCuenta').hide();
      $('#abonos').hide();
      $('#proforma').hide(); 
      $('#ventaContado').hide(); 
      $('#creditos').show(1000); //muestro mediante id           
     });

    $("#btn_contados").on( "click", function() {
      $('#creditos').hide();
      $('#estadoCuenta').hide(); 
      $('#abonos').hide(); 
      $('#proforma').hide(); 
      $('#ventaContado').hide();
      $('#contado').show(1000); //muestro mediante id          
     });

    $("#btn_abonos").on( "click", function() {
      $('#creditos').hide();
      $('#estadoCuenta').hide(); 
      $('#contado').hide();
      $('#proforma').hide();
      $('#ventaContado').hide();  
      $('#abonos').show(1000); //muestro mediante id          
     });

    $("#btn_estadoCuenta").on( "click", function() {
      $('#creditos').hide();       
      $('#contado').hide(); 
      $('#abonos').hide(); 
      $('#proforma').hide();
      $('#ventaContado').hide();  
      $('#estadoCuenta').show(1000);         
     });

    $("#btn_proforma").on( "click", function() {
      $('#creditos').hide();       
      $('#contado').hide(); 
      $('#abonos').hide(); 
      $('#estadoCuenta').hide(); 
      $('#ventaContado').hide(); 
      $('#proforma').show(1000);         
     });

    $("#btn_vtaContado").on( "click", function() {
      $('#creditos').hide();       
      $('#contado').hide(); 
      $('#abonos').hide(); 
      $('#estadoCuenta').hide();
      $('#proforma').hide();  
      $('#ventaContado').show(1000);         
     });

  });