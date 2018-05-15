<?php

use Illuminate\Database\Seeder;
use App\Propuesta;
class PropuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Propuesta::create([
        	'id' => '1',
            'descripcionpropuesta' => 'En esta seccion iria la propuesta del candidato',
            'tipo' => 'de que clase, o de que enfazis es la propuesta? (salud,educacion..)',
            
        ]);

        
    }
}
