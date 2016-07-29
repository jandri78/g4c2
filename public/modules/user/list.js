var user = { 
	search : function(){		
		$.ajax({	
			url: window.document.url+Route.route('usuario.index'),		
			type : 'get',
			data: $('#form-search-user').serialize(),	
			datatype: "html",
			beforeSend: function() {
				$('#loading-admin-app').modal('show')
			}
		})
		.done(function(data) {	
			$('#loading-admin-app').modal('hide')
			$('#users').empty().html(data.html)
		})
		.fail(function(jqXHR, ajaxOptions, thrownError)
		{
			$('#loading-admin-app').modal('hide')
		});		
	},
	clearSearch : function(){
		$("#nombre_usuario").val("")	
	}
}

$("#form-search-user").submit(function( event ) {  
	event.preventDefault()
	user.search()	
})

$("#button-clear-search-user").click(function( event ) {  
	user.clearSearch()
	user.search()	
})
