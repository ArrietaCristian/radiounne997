@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Ver Etiqueta</h1>

				</div>
			
			<div class="panel-body">
				<p><strong>Nombre</strong>{{$tag->descripcion}}</p>
				<p><strong>Slug</strong>{{$tag->slug}}</p>
			</div>
		</div>
	</div>

	<div class="col-md-4 pull-left">
					<a href="{{route('tags.index')}}" class="btn btn-default btn-lg pull-center">
						<i class="glyphicon glyphicon-circle-arrow-right pull-center" style="font-size:xx-large "><br/>ListaEtiquetas</i>
					</a>
				</div>
</div>
</div>





@endsection