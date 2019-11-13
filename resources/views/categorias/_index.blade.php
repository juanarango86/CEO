@extends ('layouts.admin')
@section('contenido')
<div  class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col xs-12">
		<h3>Listado Categorías <a href="categorias/create"><button class="btn btn-success">Nuevo</button></a>
        </h3>
        <br>
		@include('categorias.search')
		</div>
	</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table stripped table-bordered table-condesed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Opciones</th>
				</thead>
				@foreach ($categorias as $cat)
				<tr>
					<td>{{ $cat->idcategoria }}</td>
					<td>{{ $cat->nombre }}</td>
					<td>{{ $cat->descripcion }}</td>
					<td><a href="{{URL::action('CategoriaController@edit', $cat->idcategoria)}}"><button class="btn btn-info">Editar</button></a>
					<a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>
@stop