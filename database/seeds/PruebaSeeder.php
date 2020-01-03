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
        $prueba = Prueba::create([
            'nombre' => 'Adrian'
        ]);
        $prueba = Prueba::create([
            'nombre' => 'Koldo'
        ]);
        $prueba = Prueba::create([
            'nombre' => 'Iñigo'
        ]);
        $prueba = Prueba::create([
            'nombre' => 'David'
        ]);
        $prueba = Prueba::create([
            'nombre' => 'Aaron'
        ]);

    }
}
