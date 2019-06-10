@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Editar Imagenes

				</div>
			
			<div class="panel-body">
				{!!Form::model($imagen, ['route' => ['imagenesRADIOUNNE997.update', $imagen->id], 'method' => 'PUT', 'files' => true])!!}

			<div class="form-group" style="color:black">
				{{Form::label('descripcion', 'Nombre de la etiqueta')}}
				{{Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion'])}}
			</div>

			<div class="form-group" style="color:black">
					{{Form::label('url', 'Imagen')}}
					{{Form::file('url')}}
				</div>

				<div class="form-group">
					{{Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
	
				</div>

				{!!Form::close()!!}	
			</div>
		</div>
	</div>
</div>
</div>

@endsection