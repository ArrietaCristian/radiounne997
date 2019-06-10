@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Ver imagenes

				</div>
			
			<div class="panel-body">
				<p style="color:black"><strong>Nombre</strong>{{$imagen['descripcion']}}</p>
				<p>  <img src="{{$imagen['url']}}" class="img-responsive"></p>
			</div>
		</div>
	</div>
</div>
</div>




@endsection