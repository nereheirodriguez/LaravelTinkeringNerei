<?php

namespace App\Http\Controllers;

use App\Models\Basketballer;
use Illuminate\Http\Request;

class BasketballerController extends Controller
{
    public function index()
    {
        $basketballers = Basketballer::all();
        return view('basketballers.index', compact('basketballers'));
    }

    public function create()
    {
        return view('basketballers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombasketballer' => 'required|string',
            'equipbasketballer' => 'nullable|string',
            'edatbasketballer' => 'required|integer',
            'posiciobasketballer' => 'required|string',
            'dorsalbasketballer' => 'required|integer',
        ]);

        Basketballer::create($validatedData);

        return redirect()->route('basketballer.index')->with('success', 'Basketballer added successfully.');
    }

    public function edit($id)
    {
        $basketballer = Basketballer::findOrFail($id);
        return view('basketballers.edit', compact('basketballer'));
    }

    public function update(Request $request, $id)
    {
        $basketballer = Basketballer::findOrFail($id);

        $validatedData = $request->validate([
            'nombasketballer' => 'required|string',
            'equipbasketballer' => 'nullable|string',
            'edatbasketballer' => 'required|integer',
            'posiciobasketballer' => 'required|string',
            'dorsalbasketballer' => 'required|integer',
        ]);

        $basketballer->update($validatedData);

        return redirect()->route('basketballer.index')->with('success', 'Basketballer updated successfully.');
    }

    public function destroy($id)
    {
        $basketballer = Basketballer::findOrFail($id);
        $basketballer->delete();

        return redirect()->route('basketballer.index')->with('success', 'Basketballer deleted successfully.');
    }
    public function show($id)
    {
        $basketballer = Basketballer::findOrFail($id);
        return view('basketballers.show', compact('basketballer'));
    }
}
