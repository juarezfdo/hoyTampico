@extends('layouts.app')

@section('title','Usuarios')
@section('encabezado','Registro de Usuarios')

@section('body')
    <div class="container">
      <div class="d-flex flex-row-reverse bd-highlight">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create"><i class="material-icons">person_add</i> Añadir</button>
      </div>
      <br>
      <table class="table table-hover table-responsive">
        <thead>
          <tr>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Correo Electronico</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Móvil</th>
            <th scope="col">Opciones</th>
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
                <button type="button" class="btn btn-info" data-toggle="modal" data-rol="{{$usuario->rol}}"data-name="{{$usuario->nombre}}" data-pat="{{$usuario->aPaterno}}" data-mat="{{$usuario->aMaterno}}" data-email="{{$usuario->email}}" data-password="{{$usuario->password}}" data-telefono="{{$usuario->telefono}}" data-movil="{{$usuario->movil}}"  data-target="#show">
                  <i class="material-icons">remove_red_eye</i></button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit" data-user_id="{{$usuario->id}}" data-rol="{{$usuario->rol}}" data-name="{{$usuario->nombre}}" data-pat="{{$usuario->aPaterno}}" data-mat="{{$usuario->aMaterno}}" data-email="{{$usuario->email}}" data-password="{{$usuario->password}}" data-telefono="{{$usuario->telefono}}" data-movil="{{$usuario->movil}}"><i class="material-icons">edit</i></button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" data-user_id="{{$usuario->id}}"><i class="material-icons">delete</i></button>
            </tr>
          @endforeach


        </tbody>
      </table>

<!-- CREAR USUARIO MODAL-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Crear Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form action="{{route('usuario.store')}}" method="post">
          {{csrf_field()}}
        <div class="modal-body">
          @include('admin.createuser')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- EDITAR USUARIO MODAL-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form action="{{route('usuario.update','test')}}" method="post">
          {{method_field('patch')}}
          {{csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="user_id" id="user_id" value="">
          @include('admin.createuser')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ELIMINAR USUARIO MODAL-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form action="{{route('usuario.destroy','test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          ¡Estas a punto de eliminar este usuario! <br>
          ¿Deseas Continuar?
        </p>
            <input type="hidden" name="user_id" id="user_id" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
          <button type="submit" class="btn btn-warning">Si, Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Show User-->
<div class="modal fade" id="show" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Detalles de Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
        <div class="modal-body">


          
            <form class="form-group">
              <div class="form-group">
                Nombre Completo<input class="form-control" type="text" name="nombre" id="nombre" readonly>
              </div>
              <div class="form-group">
                eMail<input class="form-control" type="text" name="aPaterno" id="email" readonly>
              </div>
              <div class="form-group">
                Contraseña<input class="form-control" type="text" name="aPaterno" id="password" readonly>
              </div>
              
              <div class="form-group">
                Teléfonos
                  <div class="row">
                    <div class="col-sm">
                      <input class="form-control" type="text" name="aPaterno" id="telefono" readonly>
                      <small class="form-text text-muted text-center">Oficina</small>
                    </div>
                    <div class="col-sm">
                      <input class="form-control" type="text" name="aPaterno" id="movil" readonly>
                      <small class="form-text text-muted text-center">Celular</small>
                    </div>
                  </div>
              </div>
              <div class="form-group"> 
                  Tipo de Usuario <input type="text" name="rol" id="rol" class="form-control" readonly>
              </div>
            </form>
          
          
          
        </div>
    </div>
  </div>
</div>
@endsection