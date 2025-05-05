<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Depois criar o seeder e atribuir os valores desejados, basta chamar o metodo "call" aqui dentro e passar um array com as classes dos seeders que serao executados
        $this->call([
            UserSeeder::class,
        ]);
    }
}
