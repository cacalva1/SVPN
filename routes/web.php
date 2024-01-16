<?php
use App\Http\Controllers\SugerenciumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class)->middleware('auth');
Route::resource('dependencias', App\Http\Controllers\DependenciaController::class);
Route::resource('policias', App\Http\Controllers\PoliciaController::class);
Route::resource('sugerencia', App\Http\Controllers\SugerenciumController::class);
Route::get('sugerencias', [App\Http\Controllers\SugerenciumController::class, 'create'])->name('sugerencia.create');
Route::resource('reporte', App\Http\Controllers\SugerenciumController::class);
Route::post('reporte', [App\Http\Controllers\SugerenciumController::class, 'reportes'])->name('reporte.reportes');
Route::get('subcircuitos/{categoria_id}', [App\Http\Controllers\SugerenciumController::class, 'getSubcircuitos']);



//Route::resource('PersonalSubcircuito', App\Http\Controllers\PersonalSubcircuitoController::class);
Route::get('PersonalSubcircuito', [App\Http\Controllers\PersonalSubcircuitoController::class, 'index']);
Route::get('PersonalSubcircuito/{id}', [App\Http\Controllers\PersonalSubcircuitoController::class, 'edit']);
Route::put('PersonalSubcircuito/{id}', [App\Http\Controllers\PersonalSubcircuitoController::class, 'update'])->name('PersonalSubcircuito.update');

Route::get('VehiculoSubcircuito', [App\Http\Controllers\VehiculoSubcircuitoController::class, 'index']);
Route::get('VehiculoSubcircuito/{id}', [App\Http\Controllers\VehiculoSubcircuitoController::class, 'edit']);
Route::put('VehiculoSubcircuito/{id}', [App\Http\Controllers\VehiculoSubcircuitoController::class, 'update'])->name('VehiculoSubcircuito.update');
Route::get('SolicitudMantenimiento/{id}', [App\Http\Controllers\SolicitudMantenimientoController::class, 'index']);
Route::put('SolicitudMantenimiento/{id_vehiculo}/{id_policia}', [App\Http\Controllers\SolicitudMantenimientoController::class, 'update'])->name('SolicitudMantenimiento.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
