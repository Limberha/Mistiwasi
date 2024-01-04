<?php

use App\Http\Controllers\ProductosApiController;
use App\Http\Controllers\VentasApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/productos',[ProductosApiController::class,'index']);

route::get('/images/{filename}', function ($filename){
    $path = public_path('images/' .$filename);
    if(file_exists($path)){
        return response()->file($path);
    }else{
        abort(404);
    }
})->where('filename','.*');

Route::post('/ventas/create', [VentasApiController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
