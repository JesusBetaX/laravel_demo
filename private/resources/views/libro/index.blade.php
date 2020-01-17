@extends('layouts.app')
@section('content')
<div class="row">
  <section class="content">

    <!-- Filtros -->
    <div class="col-md-10 col-md-offset-1">
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-brand">
              <span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
            </span>
          </div>
          <div style="padding-right: 38px">
            <form method="GET" action="{{ url('/libro') }}" class="navbar-form navbar-right">
              {{ csrf_field() }}
              
              <div class="form-group">
                <input type="text" name="nombre" value="{{ $nombre }}" class="form-control" data-toggle="tooltip" data-placement="top" title="Nombre">
              </div>
              
              <div class="form-group">
                <input type="text" name="resumen" value="{{ $resumen }}" class="form-control" data-toggle="tooltip" data-placement="top" title="Resumen">
              </div>
              
              <div class="form-group">
                <input type="text" name="edicion" value="{{ $edicion }}"class="form-control" data-toggle="tooltip" data-placement="top" title="Edicion">
              </div>
              
              <div class="form-group">
                <input type="text" name="autor" value="{{ $autor }}" class="form-control" data-toggle="tooltip" data-placement="top" title="Autor">
              </div>
              
              <button type="submit" class="btn btn-success">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    </div>

    <!-- Listado de la tabla -->
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        
        <div class="panel-body">
          <div class="pull-left">
            <label class="lead">Lista Libros</label>
          </div>
          
          <div class="pull-right">
            <div class="btn-group">
              <a href="#" class="btn btn-default">Más cosas</a>
            </div>
            <div class="btn-group">
              <a href="#" class="btn btn-default">Otra cosa</a>
              <a href="{{ url('/libro/add') }}" class="btn btn-primary">Añadir Libro</a>
            </div>
          </div>

          <div class="table-container">
            <table id="mytable" class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Resumen</th>
                  <th>No. Páginas</th>
                  <th>Edicion</th>
                  <th>Autor</th>
                  <th>Precio</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                @if($libros->count())  
                  @foreach($libros as $libro)  
                    <tr>
                      <td>{{$libro->nombre}}</td>
                      <td>{{$libro->resumen}}</td>
                      <td>{{$libro->npagina}}</td>
                      <td>{{$libro->edicion}}</td>
                      <td>{{$libro->autor}}</td>
                      <td>$ {{$libro->precio}}</td>
                      <td><a class="btn btn-primary btn-xs" href="{{url('/libro/edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                      <td><a class="btn btn-danger btn-xs" href="{{url('/libro/delete', $libro->id)}}" ><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                  @endforeach 
                @else
                  <tr>
                    <td colspan="8">No hay registro !!</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div> <!-- end table-container -->
          
          <div class="btn-group">
            {{ $libros->links() }}
          </div>

        </div> <!-- end panel-body -->

      </div><!-- end panel panel-default -->
    </div><!-- col -->

  </section>
</div>
@endsection