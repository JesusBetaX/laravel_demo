@extends('layouts.app')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Libro</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ url('/libro/save') }}"  role="form">
							{{ csrf_field() }}
							<input name="id" type="hidden" value="{{$libro->id}}">
							
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$libro->nombre}}" placeholder="nombre">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="npagina" id="npagina" class="form-control input-sm" value="{{$libro->npagina}}" placeholder="npagina">
									</div>
								</div>
							</div>
 
							<div class="form-group">
								<textarea name="resumen" class="form-control input-sm" placeholder="Resumen">{{$libro->resumen}}</textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="edicion" id="edicion" class="form-control input-sm" value="{{$libro->edicion}}" placeholder="edicion">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="precio" id="precio" class="form-control input-sm" value="{{$libro->precio}}" placeholder="precio">
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="autor" class="form-control input-sm" placeholder="Autor">{{$libro->autor}}</textarea>
							</div>

							<div class="form-group">
								<a href="{{ url('/libro') }}" class="btn btn-info" >Atrás</a>
								<input type="submit" value="Guardar" class="btn btn-success">
							</div>

						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection