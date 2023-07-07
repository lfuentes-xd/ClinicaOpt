<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pacientesController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\GruposController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\HistorialClinicoController;
// use App\Models\HistorialClinico;
use App\Http\Controllers\pruebasController;
use App\Http\Controllers\PruebasFuncionalesController;
use App\Http\Controllers\refraccionController;
use App\Http\Controllers\RXController;
use App\Http\Controllers\saludOcularController;

Route::get('/', function () {
    return view('bienvenida.first');
})->name('bienvenida.first');

Route::get('/about', function(){
    return view('bienvenida.aboutUS');
})->name('bienvenida.aboutUs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/Pacientes', [pacientesController::class, 'index'])->name('pacientes.index')->withoutMiddleware(['auth']);
    Route::get('/Pacientes/create', [pacientesController::class, 'create'])->name('pacientes.create');
    Route::post('/Pacientes', [pacientesController::class, 'store'])->name('pacientes.store');
    Route::get('/Pacientes/{paciente}', [pacientesController::class, 'show'])->name('pacientes.show');
    Route::get('/Pacientes/{paciente}/edit', [pacientesController::class, 'edit'])->name('pacientes.edit');
    Route::patch('/Pacientes/{paciente}', [pacientesController::class, 'update'])->name('pacientes.update');
    Route::delete('/Pacientes/{paciente}', [pacientesController::class, 'destroy'])->name('pacientes.destroy');
});

// Route::group(['middleware' => ['auth', 'verified']], function () {
//     Route::get('/Productos', [productosController::class, 'index'])->name('productos.index');
//     Route::get('/Productos/create', [productosController::class, 'create'])->name('productos.create');
//     Route::post('/Productos', [productosController::class, 'store'])->name('productos.store');
//     Route::get('/Productos/{producto}', [productosController::class, 'show'])->name('productos.show');
//     Route::get('/Productos/{producto}/editar', [productosController::class, 'edit'])->name('productos.edit');
//     Route::put('/Productos/{producto}', [productosController::class, 'update'])->name('productos.update');
//     Route::delete('/Productos/{producto}', [productosController::class, 'destroy'])->name('productos.destroy');
// });

// Route::resource('/catProd',CatProdController::class);
Route::resource('/grupos',GruposController::class);
Route::resource('/Marcas',MarcasController::class);
Route::resource('/historial',HistorialClinicoController::class);
Route::resource('/pruebas', pruebasController::class);
Route::resource('/productos',productosController::class)->middleware(['auth', 'verified']);
Route::resource('/refraccion',refraccionController::class);
Route::resource('/pruebasFuncionales', PruebasFuncionalesController::class);
Route::resource('/RX',RXController::class);
Route::resource('/SaludOcular', saludOcularController::class);

Route::resource('/ventas',VentasController::class);
Route::post('/obtener', [VentasController::class, 'datosProd']);

require __DIR__.'/auth.php';

