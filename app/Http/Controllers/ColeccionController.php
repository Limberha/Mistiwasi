<?php

namespace App\Http\Controllers;

use App\Models\Coleccion;
use Illuminate\Http\Request;

class ColeccionController extends Controller
{
    function index()
    {
        $listaColec = Coleccion::all();
        return view('coleccion.coleccion', array('listaColec' => $listaColec));
    }

    function store(Request $r)
    {
        $validate = $r->validate([
            'nombre' => 'required|string|max:50|unique:coleccions',
        ]);
        // dd($r->all());
        $col = new Coleccion();
        $col->nombre = $r->nombre;
        $col->save();
        return redirect('/coleccion');
    }

    function edit($id)
    {
        $col = Coleccion::find($id);
        return view('coleccion.edit', array('col' => $col));
    }
    public function putedit(Request $r, $id)
    {
        $col = Coleccion::find($id);
        $col->nombre = $r->nombre;
        $col->save();
        return redirect('/coleccion');
    }

    /////////////////////////////////
    // para eliminar
    public function destroy($id)
    {
        $col = Coleccion::find($id);
        if ($col) {
            $col->delete();
            return redirect('/coleccion')->with('success', 'Producto eliminad correctamente.');
        } else {
            return redirect('/coleccion')->with('error', 'El Producto no existe.');
        }
    }
}
