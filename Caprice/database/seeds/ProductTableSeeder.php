<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enum = 'plato,bebida';
        $papas = 'papas caprice';
        //
        DB::table('product')->insert([
            'nombre'=> $papas.random_int(1,123456),
            'cantidad'=>random_int(2,6),
            'precio'=>mt_rand(2,4520),       
            'tipo'=> $enum
        ]);
    }
}
