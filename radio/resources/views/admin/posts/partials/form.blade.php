{{Form::hidden('user_id', auth()->user()->id)}}

<div class="form-group input-group-lg" style="color:black">
	{{Form::label('category_id', 'Categorias')}}
	{{Form::select('category_id', $categories, null, ['class' => 'form-control'])}}
</div>

<div class="form-group input-group-lg" style="color:black">
	{{Form::label('descripcion', 'Descripcion del Post')}}
	{{Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion'])}}
</div>

<div class="form-group input-group-lg" style="color:black">
	{{Form::label('slug', 'URL amigable')}}
	{{Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'])}}
</div>

<div class="form-group input-group-lg" style="color:black">
	{{Form::label('titulo', 'titulo del Post')}}
	{{Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo'])}}
</div>

<div class="form-group input-group-lg" style="color:black">
	{{Form::label('cabeceraimagen', 'Imagen')}}
	{{Form::file('cabeceraimagen', null, ['class' => 'form-control', 'id' => 'cabeceraimagen'])}}
</div>

<div class="form-group" style="color:black">
	{{Form::label('tags', 'Etiquetas')}}
	<div>
		@foreach($tags as $tag)
		<label>{{Form::checkbox('tags[]', $tag->id)}}{{$tag->descripcion}}</label>
		@endforeach
	</div>
</div>


<div class="form-group " style="color:black">
	{{Form::label('texto', 'texto del Post')}}
	{{Form::textarea('texto', null, ['class' => 'form-control'])}}
</div>


<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-lg btn-primary'])}}
	
</div>

@section('scripts')
	<script src="{{asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>
	<script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
	<script>
		$(document).ready(function(){
			$("#descripcion, #slug").stringToSlug({
				callback: function(text){
					$("#slug").val(text);
				}
			});
		});

		CKEDITOR.config.height=400;
		CKEDITOR.config.width='auto';

		CKEDITOR.replace('texto');
	</script>

@endsection