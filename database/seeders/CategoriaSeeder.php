<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'descricao' => 'Ficção'
        ]);

        Categoria::create([
            'descricao' => 'Romance'
        ]);

        Categoria::create([
            'descricao' => 'Terror'
        ]);

        Categoria::create([
            'descricao' => 'Aventura'
        ]);
    }
}
