<?php

namespace App\Http\Controllers;

use App\Models\TipoFibra;
use Illuminate\Http\Request;


class TipoFibraController extends Controller
{
    function index()
    {
        $listaTF = TipoFibra::all();

        return view('tipo_fibra.tipo_fibra', array('listaTipofibra' => $listaTF));
    }

    function store(Request $r)
    {
        $validate = $r->validate([
            'tipo_fibra' => 'required|string|max:50|unique:tipo_fibras',
        ]);
        // dd($r->all());
        $tf = new TipoFibra();
        $tf->tipo_fibra = $r->tipo_fibra;
        $tf->save();
        return redirect('/tipofibra');
    }

    function edit($id)
    {
        $tf = TipoFibra::find($id);
        return view('tipo_fibra.edit', array('tf' => $tf));
    }
    public function putedit(Request $r, $id)
    {
        $tf = TipoFibra::find($id);
        $tf->tipo_fibra = $r->tipo_fibra;
        $tf->save();
        return redirect('/tipofibra');
    }

    /////////////////////////////////
    // para eliminar
    public function destroy($id)
    {
        $tf = TipoFibra::find($id);
        if ($tf) {
            $tf->delete();
            return redirect('/tipofibra')->with('success', 'Producto eliminad correctamente.');
        } else {
            return redirect('/tipofibra')->with('error', 'El Producto no existe.');
        }
    }
}
