<?php

use Illuminate\Database\Seeder;
use sistemaLaravel\Produto;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'codigo' => '121233',
            'estoque' => 1123,
            'descricao' => 'Descrição 1',
            'imagem' => '123',
            'estado' => 'SP'
        ]);
    }
}
