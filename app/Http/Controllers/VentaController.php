<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    function index()
    {
        $prods = Producto::all();
        return view('salidas.salidas', array('prods' => $prods));
    }

    public function store (Request $r)
    {
        // dd($r->all());
        DB::transaction(function () use($r){
            $v = new Venta();
            $v->user = Auth::id(); 
            $v->fecha = Carbon::now();
            $v->save();
            $vecId = $r->id;
            $vecCants = $r->cantidad;
            $vecPrecios = $r->precio;
            for ($i=0; $i < count($vecId); $i++) { 
                $p = Producto::find($vecId[$i]);
                $p->stock-=$vecCants[$i];
                $p->save();
                $v->productos()->attach($vecId[$i],['cantidad' => $vecCants[$i], 'precio'=>$vecPrecios[$i]]);
            }
        });
        return redirect('/ventas/create');

    }
}
