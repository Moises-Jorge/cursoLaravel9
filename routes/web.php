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
    //return view('welcome');
    return redirect() -> route('admin.users'); // fazendo o redirecionamento para testar se o agrupamento por nome esta funcionando.
});

// Nesse caso, ao inves de agrupar pelo "prefixo" ou pelo "nome", vamos agrupar pelos dois ("por prefixo" e por "nome").
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.' // 'as' == 'name'
], function() {

    Route::get('dashboard', function() {
        return 'dashboard';
    }) -> name('dashboard');
    
    Route::get('users', function() {
        return 'users';
    }) -> name('users');
    
    Route::get('clientes', function() {
        return 'clientes';
    }) -> name('clientes');
});
