<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // O metodo create (passando uma lista com os valores dos atributos presentes no fillable) eh que nos permite criar uma instancia de user.
        User::create([
            'first_name' => 'Rodrigo',
            'last_name' => 'Oliveira',
            'email' => 'contato@rodrigo.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
