<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capacitacion;

class CapacitacionController extends Controller
{
    public function index()
    {
        $capacitaciones = Capacitacion::all();
        return view('capacitacion.index', compact('capacitaciones'));
    }

    public function create()
    {
        return view("capacitacion.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
        ]);

        Capacitacion::create($request->all());

        return redirect()->route('capacitaciones.index')
                        ->with('success', 'Capacitacion creado exitosamente.');
    }

    // Mostrar un capacitacion específico
    public function show($id)
    {
        $capacitacion = Capacitacion::find($id);
        return view('capacitacion.show', compact('capacitacion'));
    }

    // Método para mostrar el formulario de edición de un capacitacion
    public function edit($id)
    {
       $capacitacion = Capacitacion::find($id);
       return view('capacitacion.edit', compact('capacitacion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
        ]);

        $capacitacion = Capacitacion::find($id);
        $capacitacion->update($request->all());

        return redirect()->route('capacitaciones.index')
                        ->with('success', 'Capacitacion actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $capacitacion = Capacitacion::find($id);
        $capacitacion->delete();

        return redirect()->route('capacitaciones.index')
                        ->with('success', 'Capacitacion eliminado exitosamente.');
    }
}
