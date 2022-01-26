<?php

use Illuminate\Database\Seeder;
use sistemaLaravel\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nome' => 'Categoria 1',
            'descricao' => 'Descricao 1',
            'condicao' => 'condicao 1'
            ]);
    }
}
