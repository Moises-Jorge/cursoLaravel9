<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

// Para chamar/usar os metodos do ProdutoController -- resource, nao precisa criar uma rota para cada metodo, basta criar a rota como "resource". Assim:
Route::resource('produtos', ProdutoController::class); // Dessa forma, usando o nome "produtos" (nome da rota), podemos chamar todas as funcoes(nesse caso especifico, a rota esta chamando o metodo "index") Para outras rotas e chamar outros metodos, basta rodar o comando: "php artisan route:list"!


// Apenas Add esse comentario para me guiar com a configuracao da BD: Aula 18 -> Criacao da BD e alteracao do nome da BD no ficheiro ".env"