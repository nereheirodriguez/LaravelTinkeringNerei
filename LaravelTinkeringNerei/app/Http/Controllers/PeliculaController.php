<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all the films
        $films = Pelicula::all();
        return view('pelicules.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelicules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NomPelicula' => 'required|string',
            'Sipnosis' => 'required|string',
            'Paisorigen' => 'required|string',
            'Durada' => 'required|integer',
            'Dataestreno' => 'required',
        ]);

        Pelicula::create($validatedData);

        return redirect()->route('pelicula.index')->with('success', 'Película añadida correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Pelicula::findOrFail($id);
        return view('pelicules.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'NomPelicula' => 'required|string',
            'Sipnosis' => 'required|string',
            'Paisorigen' => 'required|string',
            'Durada' => 'required|integer',
            'Dataestreno' => 'required',
        ]);

        $film = Pelicula::findOrFail($validatedData['id']);
        $film->update($validatedData);

        return redirect()->route('pelicula.index')->with('success', 'Película actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $film = Pelicula::findOrFail($id);
        $film->delete();

        return redirect()->route('pelicula.index')->with('success', 'Película eliminada correctamente.');
    }
    public function show($id)
    {
        $film = Pelicula::findOrFail($id);
        return view('pelicules.show', compact('film'));
    }
}
