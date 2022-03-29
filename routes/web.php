<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crearApiController;
use App\Http\Controllers\apiController;
use App\Http\Controllers\hackersController;
use App\Http\Controllers\grupoHackerController;



//inicio de rutas
Route::get('/', function () {
    return view('index');
})->name('index');
//sobre nosotros
Route::get('/about', function () {
    return view('about');
})->name('about');
//documentacion
Route::get('/documentacion', function () {
    return view('documentacion');
})->name('documentacion');

//consumo de api origen
Route::get('/api',[crearApiController::class,'apiorigen'])->name('apitipohacker');

//Consumo de api de tipo hacker
Route::get('/api/tipohacker',[crearApiController::class,'apitipohacker'])->name('apitipohacker');
Route::get('/api/tipohacker/{id}',[crearApiController::class,'apitipohackerbusqueda'])->name('apitipohackerbusqueda');
Route::get('/api/tipohackerrandom',[crearApiController::class,'apitipohackerrandom'])->name('apihackerrandom');
//consumo de api de hacker
Route::get('/api/hacker',[crearApiController::class,'apihacker'])->name('apihacker');
Route::get('/api/hacker/{id}',[crearApiController::class,'apihackerbusqueda'])->name('apihackerbusqueda');
Route::get('/api/hackerrandom',[crearApiController::class,'apihackerrandom'])->name('apihackerrandom');
//consumo de api de grupo hacker
Route::get('/api/grupohacker',[crearApiController::class,'apigrupohacker'])->name('apigrupohacker');
Route::get('/api/grupohacker/{id}',[crearApiController::class,'apibusquedagrupohacker'])->name('apibusquedagrupohacker');
Route::get('/api/grupohackerrandom',[crearApiController::class,'apigrupohackerrandom'])->name('apigrupohackerrandom');

//consumo de la base de datos hacker
Route::get('/hacker',[hackersController::class,'mostrarhackers'])->name('hacker');
Route::get('/hacker/{id}',[hackersController::class,'detallehacker'])->name('detallehacker');
Route::get('/hackerandom/{id}',[hackersController::class,'detallehackerandom'])->name('detallehackerandom');
Route::get('/hacker/grupo/{id}',[grupoHackerController::class,'mostrargrupo'])->name('detallegrupo');

//consumo de api pokemon
Route::get('/pokemon',[apiController::class,'pokemon'])->name('apipokemon');
Route::get('/pokemon/{nombre}',[apiController::class,'detallepokemon'])->name('detallepokemon');
