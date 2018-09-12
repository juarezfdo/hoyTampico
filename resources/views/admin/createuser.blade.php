@extends('layouts.app')

@section('title','Crear Usuario')

@section('body')
    <h4>Crear Usuario</h4>
    <div class="container">
        <form class="form-group" method="POST" action="/usuario">
            @csrf
            <div class="form-group">
                <label for="nombre">Datos Generales</label>
                <div class="row">
                    <div class="col-sm">
                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre(s)"></input>
                        <small id="_nombre" class="form-text text-muted text-center">Nombre(s)</small>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" id="aPaterno" name="aPaterno" placeholder="Apellido Paterno"></input>
                        <small id="_aPaterno" class="form-text text-muted text-center">Apellido Paterno</small>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" id="aMaterno" name="aMaterno" placeholder="Apellido Materno"></input>
                        <small id="_aMaterno" class="form-text text-muted text-center">Apellido Materno</small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm">
                        <label for="email">Correo Electrónico</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="email@email.com"></input>
                        <small id="_email" class="form-text text-muted text-center">Correo Electrónico</small>
                    </div>
                    <div class="col-sm">
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="text" id="password" name="password" placeholder="xxxxxxxxxxx"></input>
                        <small id="_contraseña" class="form-text text-muted text-center">Contraseña</small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="telefono">Datos de Contacto</label>
                <div class="row">
                    <div class="col-sm">
                        <input type="tel" name="telefono" class="form-control" id="telefono">
                        <small id="_telefono" class="form-text text-muted text-center">Teléfono de Oficina</small>
                    </div>
                    <div class="col-sm">
                        <input type="tel" name="movil" class="form-control" id="movil">
                        <small id="_telefono" class="form-text text-muted text-center">Teléfono Móvil</small>
                    </div>
                </div>
                
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
        
@endsection