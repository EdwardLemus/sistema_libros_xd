<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        $prestamos = Prestamo::latest()->paginate(8);
        return view('prestamos.index', compact( 'usuarios', 'libros' ,'prestamos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('prestamos.create', compact('usuarios', 'libros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required',
            'id_libro' => 'required',
            'fecha_prestamo' => 'required',
            'fecha_devolucion'=> 'required',
            'status' => 'required',
        ]);

        Prestamo::create($request->all());

        return redirect()->route('prestamos.index')->with('success', 'Préstamo agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestamo $prestamo)
    {
        return view('prestamos.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('prestamos.edit', compact('prestamo', 'usuarios', 'libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        $request->validate([
            'id_usuario' => 'required',
            'id_libro' => 'required',
            'fecha_prestamo' => 'required',
            'fecha_devolucion' => 'required',
            'status' => 'required',
        ]);

        $prestamo->update($request->all());

        return redirect()->route('prestamos.index')->with('success', 'Préstamo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamo $prestamo)
    {
        $prestamo->delete();
        return redirect()->route('prestamos.index')->with('success', 'Préstamo eliminado exitosamente');
    }
}
