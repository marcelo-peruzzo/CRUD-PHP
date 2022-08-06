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

Route::get('/', function () {

$nome = "Marcelo";
$idade = 29;

$arr = [1,2,3,4,5];

    return view('welcome',
     ['nome' => $nome,
      'idade' => $idade,
       'arr' => $arr
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});

Route::get('/cadastro', function () {
    return view('cadastrar');
});

Route::post('/cadastrar_produto', 'App\Http\Controllers\Controller@cadastrar');

Route::get('/listar_produtos', 'App\Http\Controllers\Controller@retorno');
