
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".pagination a").click(function() {
			var url = $(this).attr('href');						
			$.ajax({
				url: url,
				type: "GET",
				data: $('#{{ $form }}').serialize(),	
				datatype: "html",
				beforeSend: function() {
					$('#loading-admin-app').modal('show');
				}
			})
			.done(function(data) {		
				$('#loading-admin-app').modal('hide');
				$('#{{ $tablespace }}').empty().html(data.html);
			})
			.fail(function(jqXHR, ajaxOptions, thrownError)
			{
				$('#loading-admin-app').modal('hide');
				alert("No hay respuesta del servidor - Consulte al administrador. "+thrownError);	
			});
			return false;
		});
	});
</script>