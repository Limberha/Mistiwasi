<?php

namespace App\Http\Controllers;

use App\Models\Coleccion;
use App\Models\Producto;
use App\Models\TipoFibra;
use Illuminate\Http\Request;

class ProductosApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $datos = Producto::all();
        return response()->json($datos, 200);
        // return Producto::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
