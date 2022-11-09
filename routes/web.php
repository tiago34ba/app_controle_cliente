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
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth']], function () {
    Route::resource('produtos', 'produtos\produtosController');

    Route::resource('categorias', 'categorias\categoriasController');

    Route::resource('vendas', 'vendas\vendasController');

    Route::get('numero-vendas', 'vendas\vendasController@numeroVendas')->name('numero-vendas');

    Route::get('numero-produtos', 'produtos\produtosController@numeroProdutos')->name('numero-produtos');

    Route::get('numero-categorias', 'categorias\categoriasController@numeroCategorias')->name('numero-categorias');

    Route::get('categorias-produtos', 'categorias\categoriasController@categoriaCadastraProduto')->name('categorias-produtos');

    Route::get('relatorio-mensal', 'relatorios\relatoriosController@relatorioMensal')->name('relatorio-mensal');
});
