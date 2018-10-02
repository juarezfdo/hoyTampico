@extends('layouts.plantilla')

@section('title','Noticias')
@section('encabezado','Generador de Noticias')

@section('body')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h4 class="alert-heading">¡Noticia no Almacenada! </h4>
                Complete todos los datos para continuar
            </ul>
        </div>
    @endif
    <form action="{{route('noticias.store')}}" method="post">
          {{csrf_field()}}
        <div class="container">
            <div class="form-group">
                <label for="titulo">Encabezado de la noticia</label>
                <div class="row">
                    <div class="col-sm">
                        <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Título"></input>
                        <small id="_titulo" class="form-text text-muted text-center">Título</small>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" id="subtitulo" name="subtitulo" placeholder="Subtítulo"></input>
                        <small id="_subtitulo" class="form-text text-muted text-center">Subtítulo</small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" class="form-control" id="fecha">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Resúmen de la noticia" rows="8"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    
@endsection