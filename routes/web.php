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
Route::resource('permisos', App\Http\Controllers\PermisoController::class)->names('permisos')->middleware('auth');
Route::get('/export', 'ExportController@export')->name('export');
Route::resource('roles', App\Http\Controllers\RoleController::class)->names('roles')->middleware('auth');
Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class)->middleware('auth');
Route::resource('dependencias', App\Http\Controllers\DependenciaController::class)->middleware('auth');
Route::resource('policias', App\Http\Controllers\PoliciaController::class)->middleware('auth');
Route::resource('dependencias', App\Http\Controllers\DependenciaController::class)->middleware('auth');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('usuarios', App\Http\Controllers\AsignarController::class)->names('asignar')->middleware('auth');;
Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::resource('sugerencia', App\Http\Controllers\SugerenciumController::class);
Route::get('sugerencias', [App\Http\Controllers\SugerenciumController::class, 'create'])->name('sugerencia.create');
Route::resource('reporte', App\Http\Controllers\SugerenciumController::class);
Route::post('reporte', [App\Http\Controllers\SugerenciumController::class, 'reportes'])->name('reporte.reportes');
Route::get('subcircuitos/{categoria_id}', [App\Http\Controllers\SugerenciumController::class, 'getSubcircuitos']);
Route::get('generate-pdf', [App\Http\Controllers\SugerenciumController::class, 'generatePDF'])->name('generate-pdf.generatePDF');

Route::get('getPertrechos/{tipoArma}', [App\Http\Controllers\PersonalPertrechoController::class, 'getPertrechos']);

Route::resource('reportes', App\Http\Controllers\HistoricoPersonalPertrechoController::class)->middleware('auth');
Route::resource('pertrechos', App\Http\Controllers\PertrechoController::class)->middleware('auth');
Route::resource('personal-pertrechos', App\Http\Controllers\PersonalPertrechoController::class);
Route::get('PersonalPertrechos', [App\Http\Controllers\PersonalPertrechoController::class, 'index']);
Route::get('PersonalPertrechos/{id}', [App\Http\Controllers\PersonalPertrechoController::class, 'edit']);
Route::put('PersonalPertrechos/{id}', [App\Http\Controllers\PersonalPertrechoController::class, 'update'])->name('PersonalPertrechos.update');
Route::resource('SolicitudMantenimiento',App\Http\Controllers\SolicitudMantenimientoController::class)->middleware('auth');

//Route::resource('PersonalSubcircuito', App\Http\Controllers\PersonalSubcircuitoController::class);
Route::get('PersonalSubcircuito', [App\Http\Controllers\PersonalSubcircuitoController::class, 'index']);
Route::get('PersonalSubcircuito/{id}', [App\Http\Controllers\PersonalSubcircuitoController::class, 'edit']);
Route::put('PersonalSubcircuito/{id}', [App\Http\Controllers\PersonalSubcircuitoController::class, 'update'])->name('PersonalSubcircuito.update');

Route::get('VehiculoSubcircuito', [App\Http\Controllers\VehiculoSubcircuitoController::class, 'index']);
Route::get('VehiculoSubcircuito/{id}', [App\Http\Controllers\VehiculoSubcircuitoController::class, 'edit']);
Route::put('VehiculoSubcircuito/{id}', [App\Http\Controllers\VehiculoSubcircuitoController::class, 'update'])->name('VehiculoSubcircuito.update');
Route::get('SolicitudMantenimiento', [App\Http\Controllers\SolicitudMantenimientoController::class, 'index']);
Route::put('SolicitudMantenimiento/{id_vehiculo}/{id_policia}', [App\Http\Controllers\SolicitudMantenimientoController::class, 'update'])->name('SolicitudMantenimiento.update');
Route::get('OrdenCombustible', [App\Http\Controllers\OrdenCombustibleController::class, 'index']);
Route::resource('OrdenCombustibles', App\Http\Controllers\OrdenCombustibleController::class);
Route::put('OrdenCombustible/{id_vehiculo}/{id_policia}', [App\Http\Controllers\OrdenCombustibleController::class, 'update'])->name('OrdenCombustible.update');

Route::get('Ordenes', [App\Http\Controllers\OrdenCombustibleController::class, 'ordenes']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
