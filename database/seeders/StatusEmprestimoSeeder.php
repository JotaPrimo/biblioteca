<?php

namespace Database\Seeders;

use App\Models\StatusEmprestimo;
use Illuminate\Database\Seeder;

class StatusEmprestimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusEmprestimo::create([
            'descricao' => 'ATIVO'
        ]);

        StatusEmprestimo::create([
            'descricao' => 'ATRASADO'
        ]);        
    }
}
