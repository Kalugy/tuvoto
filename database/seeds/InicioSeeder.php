<?php

use Illuminate\Database\Seeder;
use App\Inicio;
class InicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inicio::create([
        	'elecciones' => 'De que son las elecciones',
            
         
        ]);
    }
}
