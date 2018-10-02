<?php

namespace hoyTampico\Http\Controllers;

use hoyTampico\Noticia;
use Illuminate\Http\Request;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $request->user()->authorizeRoles('admin');

        $noticias = Noticia::all();/*Consultar usuarios y traerlos*/
        return view('admin.pruebafuncionario',compact('noticias'));/*compact genera un array*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required'
        ]);
        $noticia = new Noticia();
        $noticia->titulo = $request->input('titulo');
        $noticia->subtitulo = $request->input('subtitulo');
        $noticia->fecha = $request->input('fecha');
        $noticia->descripcion = $request->input('descripcion');
        
        $noticia->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $noticias = Noticia::findOrFail($request->noticia_id);
        $noticias->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $noticias = Noticia::findOrFail($request->noticia_id);
        $noticias->delete();
        return back();
    }
}
