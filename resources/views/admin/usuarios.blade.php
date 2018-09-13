@extends('layouts.app')

@section('title','Crear Noticia')

@section('body')
    <h4>Usuarios Registrados</h4>
    <br>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre(s)</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">eMail</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Móvil</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuarios as $usuario)
            <tr>
              <th scope="row">{{$usuario->id}}</th>
              <td>{{$usuario->nombre}}</td>
              <td>{{$usuario->aPaterno}}</td>
              <td>{{$usuario->aMaterno}}</td>
              <td>{{$usuario->email}}</td>
              <td>{{$usuario->password}}</td>
              <td>{{$usuario->telefono}}</td>
              <td>{{$usuario->movil}}</td>
              <td><a href="#" class="btn btn-primary">Editar</a></td>
              <td><a class="btn btn-primary" href="#">Eliminar</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection