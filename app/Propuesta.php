<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    
	// protected $primaryKey = 'idpropuesta';
    /**
     * Get the candidato that owns propuesta.
     */
    public function candidato()
    {
        return $this->HasOne(Candidato::class);
    }

    public function getpropuesta(){

    	return Propuesta::where('key',$this->propuesta_id)->first()->descripcionpropuesta;
    	// return $this->belongsTo('App\Propuesta');
    // 	return $this->belongsTo('App\Propuesta')->withDefault(function ($user) {
    //     $user->name = 'Guest Author';
    // });
    
    }


}
