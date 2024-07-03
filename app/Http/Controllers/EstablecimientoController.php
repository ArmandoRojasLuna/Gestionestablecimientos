<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Establecimiento;
use App\Models\Responsable;

class EstablecimientoController extends Controller
{
    public function index()
    {
        $establecimientos = Establecimiento::all();
        return view('establecimiento.index', compact('establecimientos'));
    }

    public function create()
    {

        $responsables = Responsable::all();
        return view('establecimiento.create', compact('responsables'));
        return view("establecimiento.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'tipo' => 'required',
            'responsable_id' => 'required|exists:responsables,id',
        ]);

        Establecimiento::create($request->all());

        return redirect()->route('establecimientos.index')
                        ->with('success', 'Establecimiento creado exitosamente.');
    }

    // Mostrar un establecimiento específico
    public function show($id)
    {
        $establecimiento = Establecimiento::find($id);
        return view('establecimiento.show', compact('establecimiento'));
    }

    // Método para mostrar el formulario de edición de un establecimiento
    public function edit($id)
    {
       $establecimiento = Establecimiento::find($id);
       $responsables = Responsable::all();
       return view('establecimiento.edit', compact('establecimiento', 'responsables'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'tipo' => 'required',
        ]);

        $establecimiento = Establecimiento::find($id);
        $establecimiento->update($request->all());

        return redirect()->route('establecimientos.index')
                        ->with('success', 'Establecimiento actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $establecimiento = Establecimiento::find($id);
        $establecimiento->delete();

        return redirect()->route('establecimientos.index')
                        ->with('success', 'Establecimiento eliminado exitosamente.');
    }
}
