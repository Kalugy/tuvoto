<?php

use Illuminate\Database\Seeder;
use App\Candidato;
class Candidatoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidato::create([
            'candidato' => 'Edita tu candidato',
            'partido' => 'conservador-liberal',
            'perfil' => 'Es politologo apasionado por la politica y ciencia',
            'nombreprograma' => 'Cambiamos el ahora -> nombre del programa del candidato',
            'imagen' => 'one.png',
            'propuesta_id' => '1',
        ]);
    }
}
