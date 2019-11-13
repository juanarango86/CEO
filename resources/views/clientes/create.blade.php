@extends ('layouts.admin')
@section('contenido')
<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12">
		<h3>Nuevo Proyecto</h3>
		@if(count($errors)>0)
			<div class="alert alert-danger">
			<ul>
			@foreach ($erros->all() as $error)
					<li>{{$error}}</li>
			@endforeach
			</ul>
			</div>
		@endif
		{!!Form::open(array('url'=>'proyectos','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
			<div class="form-group">
			<label for="name">Nombre Proyecto</label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre...">
			</div>
			<div class="form-group">
			<label for="descripcion">Descripción Proyecto</label>
			<input type="text" name="descripcion" class="form-control" placeholder="Descripción...">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="submit">Cancelar</button>
			</div>
		{!!form::close()!!}
		</div>
	</div>
@stop