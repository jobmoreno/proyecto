<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
        	'nombre'=>'Job Moreno',
        	'direccion' => 'paseo de los rosales #24',
        	'ciudad' => 'Zapopan',
        	'telefono' => '3336252391',
        	'cargo' => 'Gerente',
        	'salario' => 200,
        	'email' => 'jobmoreno@gmail.com',
        	'password' => Hash::make('jobmoreno'),
        ]);
    }
}
