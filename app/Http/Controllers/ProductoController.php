<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

use App\Models\Coleccion;
use App\Models\TipoFibra;


class ProductoController extends Controller
{
    function index()
    {
        $listaTF = TipoFibra::all();
        $listaColec = Coleccion::all();
        $listaProd = Producto::all();
        return view('productos.productos', array('listaProd' => $listaProd, 'listaTF' => $listaTF, 'listaColec' => $listaColec));
    }

    function store(Request $r)
    {
        $validate = $r->validate([
            'nombre' => 'required|string|max:50|unique:productos',
            'img' => 'required|file|mimes:png,jpg|max:5000',
            'gramos' => 'required|integer',
            'palitos_crochet' => 'required|string|max:10',
            'precio' => 'required|numeric|between:0,9999.99',
            'stock' => 'required|integer',
            'grosor' => 'required|string|max:20',
        ]);
        // dd($r->all());
        $pr = new Producto();
        $pr->nombre = $r->nombre;
        $pr->img = $r->img->store("images", "public");
        $pr->gramos = $r->gramos;
        $pr->palitos_crochet = $r->palitos_crochet;
        $pr->precio = $r->precio;
        $pr->tipo_fibra_id = $r->tipo_fibra_id;
        $pr->stock = $r->stock;
        $pr->coleccion_id = $r->coleccion_id;
        $pr->grosor = $r->grosor;
        $pr->save();
        return redirect('/productos');
    }



    function edit($id)
    {
        $pr = Producto::find($id);
        $listaTF = TipoFibra::all();
        $listaColec = Coleccion::all();
        return view('productos.edit', array('pr' => $pr, 'listaTF' => $listaTF, 'listaColec' => $listaColec));
    }
    public function putedit(Request $r, $id)
    {
        $pr = Producto::find($id);
        $pr->nombre = $r->nombre;
        if ($r->hasFile('img')) {
            $pr->img = $r->img->store("images", "public");
        }
        $pr->gramos = $r->gramos;
        $pr->palitos_crochet = $r->palitos_crochet;
        $pr->precio = $r->precio;
        $pr->tipo_fibra_id = $r->tipo_fibra_id;
        $pr->stock = $r->stock;
        $pr->coleccion_id = $r->coleccion_id;
        $pr->grosor = $r->grosor;
        $pr->save();
        return redirect('/productos');
    }

    /////////////////////////////////
    // para eliminar
    public function destroy($id)
    {
        $pr = Producto::find($id);
        if ($pr) {
            $pr->delete();
            return redirect('/productos')->with('success', 'Producto eliminad correctamente.');
        } else {
            return redirect('/productos')->with('error', 'El Producto no existe.');
        }
    }
}
