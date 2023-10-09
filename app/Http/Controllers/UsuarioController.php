<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $usuarios = Usuario::latest()->paginate(8);
        return view('usuarios.index', ['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'nombres'=> 'required',
            'apellidos'=> 'required',
            'email'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required'
        ]);
        //dd($request->all());
        Usuario::create($request->all());
        return redirect()->route('usuario.index') -> with ('success','nuevo usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario): View
    {
        //
        // dd($usuario);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario): RedirectResponse
    {
        //
        $request->validate([
            'nombres'=> 'required',
            'apellidos'=> 'required',
            'email'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required'
        ]);
        // dd($request);
        $usuario->update($request->all());
        return redirect()->route('usuario.index') -> with ('success','nuevo usuario creado exitosamente');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
        $usuario->delete();
        return redirect()->route('usuario.index') -> with ('success','usuario eliminado exitosamente');

    }
}
