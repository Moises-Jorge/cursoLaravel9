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

/* Route::get('/empresa', function () { // Criacao de rotas comuns
    return view('site/empresa'); 
}); ESSA ROTA FOI ESCRITA DE FORMA MAIS FACIL NA LINHA 40*/

Route::any('/any', function() { // Any: permite todo tipo de acesso http (get, post, put, delete...)
    return "Estou aqui porque fui chamado, tenho passe livre na rota Any";
});

Route::match(['put', 'post'],'/match', function() { // Match: permite apenas acessos definidos
    return "Estou aqui porque tenho permissao da rota Match";
});

// Os valores entre chaves depois da rota sao os "parametros"
Route::get('/produto/{id}/{cat?}', function($id_prod, $categoria = '') {
    return "O id do produto eh: ".$id_prod."<br>"."A categorai eh: ".$categoria;
});

Route::redirect('/sobre', '/empresa');

// Se quando uma rota for chamada, tiver que renderizar apenas uma view; entao pode ser escrito de forma mais facil:
Route::view('/empresa', 'site/empresa');

Route::get('/news', function() {
    return view('news');
}) -> name('noticias'); // 'noticias' eh o nome da minha rota /news

Route::get('/novidades', function() {
    return redirect() -> route('noticias'); // Redirecionando a rota "/novidades" para a rota "/news", mas usando o nome que atribui a rota.
});
