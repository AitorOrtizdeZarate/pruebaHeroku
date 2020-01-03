<?php

use Illuminate\Database\Seeder;
use App\Prueba;

class PruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prueba = Prueba::create([
    		'nombre' => 'Aitor'
		]);
    }
}
