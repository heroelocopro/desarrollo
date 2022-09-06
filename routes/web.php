<?php

use App\Http\Controllers\CiudadanoController;
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

//Retorna el inicio de la pagina web
Route::get('/', function () {
    return view('inicio');
});

//Estas rutas agrupadas permiten utilizar las herramientas de un controlador en especifico
Route::controller(CiudadanoController::class)->group(function () {
    Route::get('/registrar', 'index')->name('registroCiudadano');
    Route::post('/registrar', 'store')->name('registrarCiudadano');
});

//Aca estan todos los recursos que deben utilizar las vistas, en donde se especifica las URL, asi como le da la posibilidad de poder acceder a estos metodos
Route::resource('/Administrador/{$id}', AdministradorController::class)->middleware(['auth']);
Route::resource('/Certificado', CertificadoController::class);
Route::resource('/CiudadanoHasSondeos', CiudadanoHasSondeosController::class);
Route::resource('/Condicion', CondicionController::class);
Route::resource('/ConfirmacionVoto', ConfirmacionVotoController::class);
Route::resource('/DispositivoTecno', DispositivoTecnoController::class);
Route::resource('/Estrato', EstratoController::class);
Route::resource('/Filtro', FiltroController::class);
Route::resource('/GrupoPoblacional', GrupoPoblacionalController::class);
Route::resource('/Informe', InformeController::class);
Route::resource('/NivelEdu', NivelEduController::class);
Route::resource('/Opcion', OpcionController::class);
Route::resource('/Pregunta', PreguntaController::class);
Route::resource('/Sexualidad', SexualidadController::class);
Route::resource('/Sondeo', SondeoController::class);
Route::resource('/Tipodoc', TipodocController::class);
Route::resource('/Usuario', UsuarioController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';