<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Candidato extends Model
{
    
	protected $fillable=['candidato','partido','perfil','nombreprograma','idpropuesta'];
    /**
     * Get the propuestas for the candidato.
     */
    public function propuestas()
    {
        return $this->hasMany('App\Propuesta');
    }
}
