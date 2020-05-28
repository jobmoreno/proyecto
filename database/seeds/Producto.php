<?php

use Illuminate\Database\Seeder;

class Producto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
        	'codigo'=> 12345,
        	'descripcion' => 'Papas Sabritas',
        	'precio' => 12.5,
        	'existencia' => 10,
        ]);
    }
}
