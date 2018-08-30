@extends('layouts.app')

@section('title','Crear Noticia')

@section('body')
    <h4>Generador de Noticias</h4>
    <form class="form-group" method="POST" action="/noticias/create">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="titulo">Encabezado de la noticia</label>
                <div class="row">
                    <div class="col-sm">
                        <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Título"></input>
                        <small id="_titulo" class="form-text text-muted text-center">Título</small>
                    </div>
                    <div class="col-sm">
                        <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Subtítulo"></input>
                        <small id="_subtitulo" class="form-text text-muted text-center">Subtítulo</small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" class="form-control" id="fecha" width="276">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Resúmen de la noticia" rows="7"></textarea>
            </div>
            <div class="form-group">
                <label for="archivo">Adjuntar fotografia (opcional)</label>
                <input type="file" class="form-control-file" id="archivo" name="archivo">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
    
@endsection