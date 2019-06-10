@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Ver Categoria</h1>

				</div>
			
			<div class="panel-body">
				<p><strong>Nombre</strong>{{$category->descripcion}}</p>
				<p><strong>Slug</strong>{{$category->slug}}</p>
			</div>
		</div>
	</div>

	<div class="col-md-4 pull-left">
					<a href="{{route('categories.index')}}" class="btn btn-default btn-lg pull-center">
						<i class="glyphicon glyphicon-circle-arrow-right pull-center" style="font-size:xx-large "><br/>ListaCategorias</i>
					</a>
				</div>
</div>
</div>





@endsection