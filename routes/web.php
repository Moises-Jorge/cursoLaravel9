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
    return redirect() -> route('admin.clientes'); // fazendo o redirecionamento para testar se o agrupamento por nome esta funcionando.
});

// Nesse caso, ao inves de agrupar pelo "prefixo", agrupamos pelo "nome".
Route::name('admin.') -> group(function() {
    Route::get('/admin/dashboard', function() {
        return 'dashboard';
    }) -> name('dashboard');
    
    Route::get('/admin/users', function() {
        return 'users';
    }) -> name('users');
    
    Route::get('/admin/clientes', function() {
        return 'clientes';
    }) -> name('clientes');
});
