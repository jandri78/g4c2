{{ $users->links() }}
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th>Nombre</th>
			<th>Fecha</th>
		</tr>	
	</thead>     	    	
	<tbody>
		@foreach ($users as $user)
			<tr>
				<td>
				</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->created_at }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
{{ $users->links() }}
@include('layouts.paginate', array('tablespace'=>'users','form'=>'form-search-user'))
