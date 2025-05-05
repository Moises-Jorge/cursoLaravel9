<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->double('preco', 10, 2);
            $table->string('slug'); // slug: Titulo da nossa url
            $table->string('imagem')->nullable(); // caminho onde se encontra a imagem

            // Criando e estabelecendo relacionamento com a tabela "users"
            $table->unsignedBigInteger('id_user'); // Criando o campo que vai ser a chave estrangeira
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); // Configurando o campo 'id_user' como a chave estrangeira. Os metodos "onDelete e onUpdate" servem para deletar/atualizar dados caso o usuario que cadastrou os produtos seja eliminado da BD.

            // Criando e estabelecendo relacionamento com a tabela "categoria"
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps(); // Responsavel pela criacao das colunas: created & updated -> correspondem as datas de criacao e atualizacao de cada registo.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
