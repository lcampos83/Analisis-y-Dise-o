$(document).ready(function(){
	var estado = false;

	$('#btn-toggle').on('click',function(){
		$('.seccionToggle').slideToggle();

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