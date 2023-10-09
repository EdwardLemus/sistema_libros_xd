<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        //
        $libros = libro::latest()->paginate(8);
        return view('libros.index', ['libros'=>$libros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        //
        $request->validate([
            'titulo'=> 'required',
            'autor'=> 'required',
            'editorial'=> 'required',
            'genero'=> 'required',
            'stock'=> 'required'
        ]);
        //dd($request->all());
        Libro::create($request->all());
        return redirect()->route('libro.index') -> with ('success','nuevo usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro) : View
    {
        //
        return view('libros.edit', ['libro' => $libro]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro) : RedirectResponse
    {
        //
        $request->validate([
            'titulo'=> 'required',
            'autor'=> 'required',
            'editorial'=> 'required',
            'genero'=> 'required',
            'stock'=> 'required'
        ]);
        // dd($request);
        $libro->update($request->all());
        return redirect()->route('libro.index') -> with ('success','nuevo usuario creado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
        $libro->delete();
        return redirect()->route('libro.index') -> with ('success','usuario eliminado exitosamente');
    }
}
