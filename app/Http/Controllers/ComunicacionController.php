<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunicacion;

class ComunicacionController extends Controller
{
    public function index()
    {
        $comunicaciones = Comunicacion::all();
        return view('comunicacion.index', compact('comunicaciones'));
    }

    public function create()
    {
        return view("comunicacion.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'mensaje' => 'required',
            'fechaEnvio' => 'required',
        ]);

        Comunicacion::create($request->all());

        return redirect()->route('comunicaciones.index')
                        ->with('success', 'Comunicacion creado exitosamente.');
    }

    // Mostrar un comunicacion específico
    public function show($id)
    {
        $comunicacion = Comunicacion::find($id);
        return view('comunicacion.show', compact('comunicacion'));
    }


    public function edit($id)
    {
       $comunicacion = Comunicacion::find($id);
       return view('comunicacion.edit', compact('comunicacion'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'mensaje' => 'required',
            'fechaEnvio' => 'required',
        ]);

        $comunicacion = Comunicacion::find($id);
        $comunicacion->update($request->all());

        return redirect()->route('comunicaciones.index')
                        ->with('success', 'Comunicacion actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $comunicacion = Comunicacion::find($id);
        $comunicacion->delete();

        return redirect()->route('comunicaciones.index')
                        ->with('success', 'Comunicado eliminado exitosamente.');
    }
}
