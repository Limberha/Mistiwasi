<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ColeccionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TipoFibraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentaController;
use App\Models\TipoFibra;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('wel');
});

Route::get('/contactos', function () {
    return view('contact');
});

Route::get('/nosotros', function () {
    return view('about');
});

Route::get('/productos', [ProductoController::class, 'index']);


Route::group(['middleware' => ['auth']], function () {
    Route::post('/productos', [ProductoController::class, 'store']);
    Route::get('/productos/edit/{id}', [ProductoController::class, 'edit']);
    Route::put('/productos/edit/{id}', [ProductoController::class, "putEdit"]);
    Route::delete('/productos/delete/{id}', [ProductoController::class, 'destroy']);
    
    Route::get('/coleccion', [ColeccionController::class, 'index']);
    Route::post('/coleccion', [ColeccionController::class, 'store']);
    Route::get('/coleccion/edit/{id}', [ColeccionController::class, 'edit']);
    Route::put('/coleccion/edit/{id}', [ColeccionController::class, "putEdit"]);
    Route::delete('/coleccion/delete/{id}', [ColeccionController::class, 'destroy']);
    
    
    Route::get('/tipofibra', [TipoFibraController::class, 'index']);
    Route::post('/tipofibra', [TipoFibraController::class, 'store']);
    Route::get('/tipofibra/edit/{id}', [TipoFibraController::class, 'edit']);
    Route::put('/tipofibra/edit/{id}', [TipoFibraController::class, "putEdit"]);
    Route::delete('/tipofibra/delete/{id}', [TipoFibraController::class, 'destroy']);
    
    Route::get('/ventas/create', [VentaController::class, 'index']);
    Route::post('/ventas/create', [VentaController::class, "store"]);
    
    Route::group(['middleware' => ['role:owner']], function () {
        Route::resource('permission', PermissionController::class);
        Route::resource('user', UserController::class);
        Route::resource('role', RoleController::class);
    }); 
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
