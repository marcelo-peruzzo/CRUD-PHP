<?php

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



Route::get('/cadastro', function () {
    return view('cadastrar');
});

Route::post('/cadastrar_produto/{produto?}', 'App\Http\Controllers\Controller@cadastrar');

Route::get('/listar_produtos', 'App\Http\Controllers\Controller@retorno');

Route::get('/deletar/{id}', 'App\Http\Controllers\Controller@deletar');

Route::get('/editar/{id}', 'App\Http\Controllers\Controller@editar');

Route::get('/', 'App\Http\Controllers\Controller@retorno');
