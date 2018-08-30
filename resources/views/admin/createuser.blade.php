@extends('layouts.app')

@section('title','Crear Usuario')

@section('body')
    <h4>Crear Usuario</h4>
    <div class="container">
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
                    <label for="email">Correo Electronico</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="email@email.com"></input>
                </div>
                <div class="col-sm">
                    <label for="password">Contraseña</label>
                    <input class="form-control" type="text" id="password" name="password" placeholder="xxxxxxxxxxx"></input>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="telefono">Datos de Contacto</label>
            <div class="row">
                <div class="col-sm">
                    <input type="phone" name="telefono" class="form-control" id="telefono">
                    <small id="_telefono" class="form-text text-muted text-center">Telefono de Oficina</small>
                </div>
                <div class="col-sm">
                    <input type="phone" name="movil" class="form-control" id="movil">
                    <small id="_telefono" class="form-text text-muted text-center">Telefono Móvil</small>
                </div>
            </div>
            
        </div>
        <div class="form-group">
            <label for="archivo">Adjuntar fotografia (opcional)</label>
            <input type="file" class="form-control-file" id="archivo" name="archivo">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
@endsection