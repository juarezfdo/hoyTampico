@extends('layouts.app')

@section('title','Crear Noticia')

@section('body')
    <h4>Usuarios Registrados</h4>
    <br>
    <div class="container">
      <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">eMail</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Móvil</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>


          @foreach($usuarios as $usuario)
            <tr>
              <td>{{$usuario->nombre.' '.$usuario->aPaterno.' '.$usuario->aMaterno}}</td>
              <td>{{$usuario->email}}</td>
              <td>{{$usuario->password}}</td>
              <td>{{$usuario->telefono}}</td>
              <td>{{$usuario->movil}}</td>
              <td>
                <button href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  <i class="material-icons">remove_red_eye</i></button>
              <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar"><i class="material-icons">edit</i></a>
              <a class="btn btn-primary" href="#" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="material-icons ">delete</i></a></td>
            </tr>
          @endforeach


        </tbody>
      </table>
      <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
    </div>
@endsection