@extends('layouts.app')
@section('content')

<section class="content">
  <div class="row">
	<div class="col-md-10 col-md-offset-1">

	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h3 class="panel-title">Libro</h3>
		</div>

		<div class="panel-body">
		  <form method="POST" action="{{ url($action) }}" role="form">
			{{ csrf_field() }}
			<input name="id" type="hidden" value="{{ old('id', $libro->id) }}">

			<div class="row">
			  <div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label class="control-label">Nombre:</label>
				  <input type="text" name="nombre" value="{{ old('nombre', $libro->nombre) }}" class="form-control input-sm"/>
				  <span class="text-danger">{{ $errors->first('nombre') }}</span>
			    </div>
			  </div>

			  <div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label class="control-label">NPagina:</label>
				  <input type="number" name="npagina" value="{{ old('npagina', $libro->npagina) }}" class="form-control input-sm">
				  <span class="text-danger">{{ $errors->first('npagina') }}</span>
				</div>
			  </div>
			</div>

			<div class="form-group">
			  <label class="control-label">Resumen:</label>
			  <textarea name="resumen" class="form-control input-sm">{{ old('resumen', $libro->resumen) }}</textarea>
			  <span class="text-danger">{{ $errors->first('resumen') }}</span>
		    </div>

			<div class="row">
			  <div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label class="control-label">Edición:</label>
				  <input type="text" name="edicion" value="{{ old('edicion', $libro->edicion) }}" class="form-control input-sm">
				  <span class="text-danger">{{ $errors->first('edicion') }}</span>
				</div>
			  </div>

			  <div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label class="control-label">Precio $:</label>
				  <input type="text" name="precio" value="{{ old('precio', $libro->precio) }}" class="form-control input-sm">
				  <span class="text-danger">{{ $errors->first('precio') }}</span>
				</div>
			  </div>
			</div>

		    <div class="form-group">
			  <label class="control-label">Autor:</label>
			  <textarea name="autor" class="form-control input-sm">{{ old('autor', $libro->autor) }}</textarea>
			  <span class="text-danger">{{ $errors->first('autor') }}</span>
			</div>

		    <div class="form-group">
			   <a href="{{ url('/libro') }}" class="btn btn-default" >Atrás</a>
			   <input type="submit" value="Guardar" class="btn btn-success">
			</div>

		  </form>
		</div><!-- end panel-body -->

	  </div><!-- end panel -->
	  </div><!-- end col -->
  </div>
</section> <!-- end row -->
@endsection
