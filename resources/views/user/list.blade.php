@extends('layout.master')
@section('content')
<h3 class="page-title"> 
	Usuarios <small>Lista</small>
</h3>
<div class="row">
	<div class="col-xs-12 col-sm-11">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Formulario de busqueda</h4>
				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>

			<div class="widget-body" style="display: block;">
				{!! Form::open(array('route' => 'usuario.index', 'method' => 'POST', 'id' => 'form-search-user'), array('role' => 'form')) !!}
				<div class="form-body">
					<div class="row form-group">
						<div class="col-md-6">
							<label class="control-label">Nombre</label>
							<div class="input-icon">
								<input type="text" class="form-control" placeholder="Nombre usuario" id="nombre_usuario" name="nombre_usuario">
							</div>
						</div>
					</div>
					<div class="form-actions" align="center">
						<button type="submit" class="btn btn-mini btn-default"><i class="fa fa-search"></i>Buscar</button>
						{!!Form::button('<i class="fa fa-search-minus"></i>Limpiar', array('class'=>'btn btn-mini btn-default', 'id' => 'button-clear-search-user' ));!!} 
						<a href="{{ URL::route('usuario.create')}}" class="btn btn-mini btn-default"><i class="fa fa-plus-square"></i> Agregar</a>			
					</div> 
				</div>	
				{!! Form::close() !!}		
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-11">
		<div class="portlet box red">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-cogs"></i>Usuarios registrados en la plataforma
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-responsive">					
					<div id="users">
						@include('user.users')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
 {!! HTML::script('modules/user/list.js') !!}
@stop