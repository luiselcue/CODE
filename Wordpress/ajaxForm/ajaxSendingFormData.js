/****************************************************
**************** FORM CONTACT AJAX ******************
****************************************************/
$(document).ready(function(){

	$('#contact_form').on('submit', function($e)
	{
		$e.preventDefault();
		
		var ContactForm = new FormData(this);
		//Añade el atributo action y asigna nombre de funcion PHP
		ContactForm.append('action', 'enviaForm');
		//Recorre elemento FormData y reasigna campos a nuevo elemento Data
		var Data = new Object();
		ContactForm.forEach(function(value, name)
		{
			Data[name] = value;
		});

		$.post("/wp-admin/admin-ajax.php", Data, function(respuesta){

			if(respuesta)
			{
				$('#t_message').text(respuesta);
				$('#telon').removeClass('inactive').addClass('active');
			}
 
		});
	})

});