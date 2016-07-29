$("#form-add-user").submit(function( event ) {  
	event.preventDefault()	
	var action = $(this).attr('action');
    $.ajax({
        type: 'POST',
        cache: false,
        dataType: 'json',
        data: $('#form-add-user').serialize(),
        url : action,
        beforeSend: function() { 
            $('#loading-admin-app').modal('show')
			//$("#validation-errors-webinar").hide().empty();*/                                     
        },
        success: function(data) {
            if(data.success == false) {
                $('#loading-admin-app').modal('hide')
				//$("#validation-errors-webinar").append(data.errors);
				//$("#validation-errors-webinar").show();*/
			}else{
                window.location = window.document.url+Route.route('usuario.index') 
			}
        },
        error: function(xhr, textStatus, thrownError) {
            $('#loading-admin-app').modal('hide')
			//alertify.error("No hay respuesta del servidor - Consulte al administrador. "+thrownError)*/	
        }
    });
})