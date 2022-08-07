<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::create([
            'nome' => 'Nicolas Sparks',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie auctor ullamcorper. Donec ultrices auctor neque, a ornare arcu blandit ac. Aenean a nisl eget nulla blandit fringilla ac vel erat. Vivamus posuere, lorem id suscipit hendrerit, urna lectus semper erat, vitae fermentum magna turpis ac enim. Aenean quis ultricies massa. Donec non nisl quam.'
        ]);

        Autor::create([
            'nome' => 'C. S. Lewis',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie auctor ullamcorper. Donec ultrices auctor neque, a ornare arcu blandit ac. Aenean a nisl eget nulla blandit fringilla ac vel erat. Vivamus posuere, lorem id suscipit hendrerit, urna lectus semper erat, vitae fermentum magna turpis ac enim. Aenean quis ultricies massa. Donec non nisl quam.'
        ]);

        Autor::create([
            'nome' => 'Joaquim Jeremias',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie auctor ullamcorper. Donec ultrices auctor neque, a ornare arcu blandit ac. Aenean a nisl eget nulla blandit fringilla ac vel erat. Vivamus posuere, lorem id suscipit hendrerit, urna lectus semper erat, vitae fermentum magna turpis ac enim. Aenean quis ultricies massa. Donec non nisl quam.'
        ]);
    }
}
