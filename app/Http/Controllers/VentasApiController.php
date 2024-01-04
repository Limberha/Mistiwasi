<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class VentasApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prods = Producto::all();
        return response()->json(['prods' => $prods], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $v = new Venta();
            $v->user = 7; 
            $v->fecha = Carbon::now();
            $v->save();

            $vecId = $request->id;
            $vecCants = $request->cantidad;
            $vecPrecios = $request->precio;

            for ($i = 0; $i < count($vecId); $i++) { 
                $p = Producto::find($vecId[$i]);
                if ($p) {
                    $p->stock -= $vecCants[$i];
                    $p->save();
                    $v->productos()->attach($vecId[$i], ['cantidad' => $vecCants[$i], 'precio' => $vecPrecios[$i]]);
                }
            }

            DB::commit();
            return response()->json(['message' => 'Venta realizada con éxito'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Error al procesar la venta', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
