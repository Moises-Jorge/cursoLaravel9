<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ // Aqui definimos a estrutura dos seeders que serao executados
            // this->faker: classe que gera registro falso (soh para testes mesmo, para noa escrever todos os valores no braco)
            'nome' => $this->faker->unique()->word,
            'descricao' => $this->faker->text, // Depois de criar essa estrutura, vamos agora criar um seeder para lhe executar.
        ];
    }
}
