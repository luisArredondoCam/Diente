<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('auth.login');});
Route::get('/', function () {
    return view('pagina.inicio');
});
Route::get('/inicio', function () {
    return view('pagina.inicio');
});

Route::get('/nosotros', function () {
    return view('pagina.nosotros');
});

Route::get('/galeria', function () {
    return view('pagina.galeria');
});

Route::get('/puentes', function () {
    return view('pagina.servicios.puentes');
});

Route::get('/destartraje', function () {
    return view('pagina.servicios.destartraje');
});

Route::get('/profilaxis', function () {
    return view('pagina.servicios.profilaxis');
});

Route::get('/coronas', function () {
    return view('pagina.servicios.coronas');
});

Route::get('/cirugias_dentales', function () {
    return view('pagina.servicios.cirugias_dentales');
});

Route::get('/endodoncia', function () {
    return view('pagina.especialidades.endodoncia');
});

Route::get('/ortodoncia', function () {
    return view('pagina.especialidades.ortodoncia');
});

Route::get('/operatorias', function () {
    return view('pagina.especialidades.operatorias');
});

Route::get('/protesis_total', function () {
    return view('pagina.especialidades.protesis_total');
});

Route::get('/protesis_parcial', function () {
    return view('pagina.especialidades.protesis_parcial');
});

Route::get('/separar_cita', function () {
    return view('pagina.separar_cita');
})->name('separar_cita1');


Route::get('/gabriela', function () {
    return view('pagina.cirujanos.gabriela');
});

Route::get('/jenny', function () {
    return view('pagina.cirujanos.jenny');
});

Route::get('/shyro', function () {
    return view('pagina.cirujanos.shyro');
});



Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/editar/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');

Route::post('/admin', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
Route::put('/admin/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');

Route::post('/mensajes', [App\Http\Controllers\MensajesController::class, 'guardarmensaje'])->name('mensajes.store');

Route::get('/registros', [App\Http\Controllers\RegistrosController::class, 'index'])->name('registros.index');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search.index');
