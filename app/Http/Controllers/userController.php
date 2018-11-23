<?php

namespace hoyTampico\Http\Controllers;

use hoyTampico\Usuario;
use hoyTampico\Role;
use hoyTampico\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $usuarios = Usuario::all();/*Consultar usuarios y traerlos*/
        return view('admin.usuarios',compact('usuarios'));/*compact genera un array*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return back();
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
            'nombre' => 'required|max:50',
            'aPaterno' => 'required|max:50',
            'aMaterno' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|max:50',
            'telefono' => 'required',
            'movil' => 'required',
            'rol' => 'required'
        ]);

        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();

        $user = new User();
        $pass = $request->input('password');
        $user->name=$request->input('nombre');
        $user->email=$request->input('email');
        $user->password=bcrypt($pass);
        $user->save();
        if ($request->input('rol')=='Administrador') {
            $user->roles()->attach($role_admin);
        }else{
            $user->roles()->attach($role_user);
        }

        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->aPaterno = $request->input('aPaterno');
        $usuario->aMaterno = $request->input('aMaterno');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->telefono = $request->input('telefono');
        $usuario->movil = $request->input('movil');
        $usuario->rol = $request->input('rol');
        $usuario->save();

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
        $usuario = Usuario::findOrFail($request->user_id);
        $usuario->update($request->all());
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
        if (User::where('email',$request->user_id)->first()) {
            #$rol_id = (User::where('email',$request->user_id)->first())->id;
            $user = User::where('email',$request->user_id)->first();
            $rol_id = $user->id;
            #return $user;
            $user->roles()->wherePivot('user_id',$rol_id)->detach();
            $user->delete();
        }
        
        if (Usuario::where('email',$request->user_id)->first()) {
            $usuario = Usuario::where('email',$request->user_id)->first();
            $usuario->delete();        
        }
        

        return back();
    }
}
