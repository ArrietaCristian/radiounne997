@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Ver Post</h1>

				</div>
			
			<div class="panel-body">
				<p><strong>Nombre</strong>{{$post->descripcion}}</p>
				<p><strong>Slug</strong>{{$post->slug}}</p>
			</div>
		</div>
	</div>

	<div class="col-md-4 pull-left">
					<a href="{{route('posts.index')}}" class="btn btn-default btn-lg pull-center">
						<i class="glyphicon glyphicon-circle-arrow-right pull-center" style="font-size:xx-large "><br/>ListaPosts</i>
					</a>
				</div>
</div>
</div>





@endsection