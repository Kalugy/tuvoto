<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    

    /**
     * Get the candidato that owns propuesta.
     */
    public function candidato()
    {
        return $this->belongsTo('App\Candidato');
    }
}
