<?php

use Illuminate\Database\Seeder;

class ProdutosVendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos_vendas')->insert([
            'id_venda' => 1,
            'id_produto' => 1,
        ]);
        DB::table('produtos_vendas')->insert([
            'id_venda' => 2,
            'id_produto' => 1,
        ]);
        DB::table('produtos_vendas')->insert([
            'id_venda' => 2,
            'id_produto' => 2,
        ]);
        DB::table('produtos_vendas')->insert([
            'id_venda' => 3,
            'id_produto' => 1,
        ]);
        DB::table('produtos_vendas')->insert([
            'id_venda' => 3,
            'id_produto' => 2,
        ]);

    }
}
