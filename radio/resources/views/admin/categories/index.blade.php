@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Lista de Categorias</h1>
					<a href="{{route('categories.create')}}" class="btn btn-lg btn-primary pull-right">
						Crear	
					 </a>
				</div>
			
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px" style="color:black">ID</th>
							<th style="color:black">Nombre</th>
							<th colspan="3">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
							<tr>
								<td style="color:black">{{$category['id']}}</td>
								<td style="color:black">{{$category['descripcion']}}</td>
								<td width="10px"><a href="{{route('categories.show', $category['id'])}}" class="btn btn-lg btn-default"> Ver
								</a>
							</td>
							
								<td width="10px"><a href="{{route('categories.edit', $category['id'])}}" class="btn btn-lg btn-default"> Editar
								</a>
							</td>
							<td width="10px">
							
									{!!Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE'])!!}

								<button class="btn btn-lg btn-danger">
									Eliminar
								</button>
									{!! Form::close() !!}
								
							</td>
							</tr>

						@endforeach
					</tbody>
				</table>
				{{$categories->render()}}
			</div>

		</div>
		</div>
	</div>
</div>




@endsection
