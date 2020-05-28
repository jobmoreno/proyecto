<?php

use Illuminate\Database\Seeder;

class Cliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('clientes')->insert([
        	'nombre'=>'Kevin Orozco',
        	'rfc' => '123456789', 
        	'domicilio' => 'Rinconada del Auditorio #35',
        	'telefono' => '3526478512',
        ]);
    }
}
