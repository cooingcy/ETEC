<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/quem_somos', function () {
    return view('quem_somos');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::post('/contato', [ContatoController::class, 'enviar'])->name('contato.enviar');

