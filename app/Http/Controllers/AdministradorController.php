<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function index()
    {
        $administradores = Administrador::all();
        return view('administrador.index', compact('administradores'));
    }

    public function create()
    {
        return view("administrador.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
        ]);

        Administrador::create($request->all());

        return redirect()->route('administradores.index')
                        ->with('success', 'Administrador creado exitosamente.');
    }

     // Mostrar un administrador específico
     public function show($id)
     {
         $administrador = Administrador::find($id);
         return view('administrador.show', compact('administrador'));
     }

     // Método para mostrar el formulario de edición de un administrador
     public function edit($id)
     {
        $administrador = Administrador::find($id);
        return view('administrador.edit', compact('administrador'));
     }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
        ]);


        $administrador = Administrador::find($id);
        $administrador->update($request->all());

        return redirect()->route('administradores.index')
                        ->with('success', 'Administrador actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $administrador = Administrador::find($id);
        $administrador->delete();

        return redirect()->route('administradores.index')
                        ->with('success', 'Administrador eliminado exitosamente.');
    }
}
