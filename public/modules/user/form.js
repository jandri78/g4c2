$("#form-register-user").submit(function( event ) {  
	event.preventDefault()	
	var action = $(this).attr('action');
    $.ajax({
        type: 'POST',
        cache: false,
        dataType: 'json',
        data: $('#form-register-user').serialize(),
        url : action,
        beforeSend: function() { 
            /*$('#loading-admin-app').modal('show')
			$("#validation-errors-webinar").hide().empty();*/                                     
        },
        success: function(data) {
            if(data.success == false) {
                /*$('#loading-admin-app').modal('hide')
				$("#validation-errors-webinar").append(data.errors);
				$("#validation-errors-webinar").show();*/
			}else{
                //window.location = $("#urlgeneral").val()+Route.route('admintp.webinars.show',{webinars:data.webinar}) 
			}
        },
        error: function(xhr, textStatus, thrownError) {
            /*$('#loading-admin-app').modal('hide')
			alertify.error("No hay respuesta del servidor - Consulte al administrador. "+thrownError)*/	
        }
    });
})