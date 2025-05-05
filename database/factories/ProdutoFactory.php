<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; // tive que importar esse modulo para poder usar o Str::slug()
use App\Models\User;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'slug' => Str::slug($nome), // Classe Str: classe auxiliar com diversos metodos para tratar strings. Como queremos criar uma URL amigal para o nosso produto, a classe ja tem um metodo que faz isso, que eh "slug($objecto_desejado)"
            'imagem' => $this->faker->imageUrl(400, 400),
            'id_user' => User::pluck('id')->random(), // metdo "pluck('info')" extrai a informacao passada como parametro da tabela representada pela model no inicio.
            'id_categoria' => Categoria::pluck('id')->random(), //O random serve para pegar essa informacao de forma aleatoria dentre as que existem
        ];
    }
}
