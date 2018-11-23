@extends('layouts.plantilla')

@section('title','Noticias')
@section('encabezado','Gestion de Tareas')

@section('body')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Activo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inactivo</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <br>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                  <th scope="col">Titulo</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Cargos</th>
                  <th scope="col">Disponible desde</th>
                  <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>    
                  <th>adam test</th>
                  <th>Register</th>
                  <th>Activo</th>
                  <th>$344.00 USD</th>
                  <th>Fri 31th January 2018</th>
                  <th><a class="btn btn-default btn-xs lw-btn" title="Actualizar Estado" href=""><i class="fa fa-pencil-square-o"></i> Editar</a>
                    <a class="btn btn-default btn-xs lw-btn" title="Asignar usuario" href=""><i class="fa fa-remove"></i> Borrar</a></th>
                  <th></th>
                  <th></th>
                </tr>
            </tbody>
          </table>
          <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item inactive"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <br>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                  <th scope="col">Titulo</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Cargos</th>
                  <th scope="col">Disponible desde</th>
                  <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>    
                  <th>adam test</th>
                  <th>Register</th>
                  <th>Activo</th>
                  <th>$344.00 USD</th>
                  <th>Fri 31th January 2018</th>
                  <th><a class="btn btn-default btn-xs lw-btn" title="Actualizar Estado" href=""><i class="fa fa-pencil-square-o"></i> Editar</a>
                    <a class="btn btn-default btn-xs lw-btn" title="Asignar usuario" href=""><i class="fa fa-remove"></i> Borrar</a></th>
                  <th></th>
                  <th></th>
                </tr>
            </tbody>
          </table>
          <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item inactive"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
        </div>

      </div>
    </div>
    
@endsection