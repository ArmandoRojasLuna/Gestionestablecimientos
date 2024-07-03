<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;

class ResponsableController extends Controller
{
    
    public function index()
    {
        $responsables = Responsable::all();
        return view('responsable.index', compact('responsables'));
    }

    public function create()
    {
        return view("responsable.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
        ]);

        Responsable::create($request->all());

        return redirect()->route('responsables.index')
                        ->with('success', 'Responsable creado exitosamente.');
    }

    // Mostrar un responsable específico
    public function show($id)
    {
        $responsable = Responsable::find($id);
        return view('responsable.show', compact('responsable'));
    }


    // Método para mostrar el formulario de edición de un responsable
    public function edit($id)
    {
       $responsable = Responsable::find($id);
       return view('responsable.edit', compact('responsable'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
        ]);

        $responsable = Responsable::find($id);
        $responsable->update($request->all());

        return redirect()->route('responsables.index')
                        ->with('success', 'Responsable actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $responsable = Responsable::find($id);
        $responsable->delete();

        return redirect()->route('responsables.index')
                        ->with('success', 'Responsable eliminado exitosamente.');
    }
}
