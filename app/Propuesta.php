<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    // para prevenir inyeccion de datos por seguridad que solo reciba los siguientes datos
    protected $fillable=['descripcionpropuesta,valor'];
	// protected $primaryKey = 'idpropuesta';
    /**
     * Get the candidato that owns propuesta.
     */

    // funciones para recibir datos de otras tablas (toco con where por que el belong tiene un error)
    public function candidato()
    {
        return $this->belongsTo('Candidato','propuesta_id','key');
    }

    public function getpropuesta(){

    	return Propuesta::where('key',$this->propuesta_id)->first()->descripcionpropuesta;
    	// return $this->belongsTo('App\Propuesta');
    // 	return $this->belongsTo('App\Propuesta')->withDefault(function ($user) {
    //     $user->name = 'Guest Author';
    // });
    
    }
    public function getcandidato(){

        return Candidato::where('propuesta_id',$this->id)->first()->candidato;
        // return $this->belongsTo('App\Propuesta');
    //  return $this->belongsTo('App\Propuesta')->withDefault(function ($user) {
    //     $user->name = 'Guest Author';
    // });
    
    }



}
