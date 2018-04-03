<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Candidato extends Model
{
    
	protected $fillable=['candidato','partido','perfil','nombreprograma','propuesta_id'];
    /**
     * Get the propuestas for the candidato.
     */
    // public function propuestas()
    // {
    //     return $this->hasOne('App\Propuesta');
    // }

    public function propu(){

    	return Propuesta::where('key',$this->propuesta_id)->first()->descripcionpropuesta;
    	// return $this->belongsTo('App\Propuesta');
    // 	return $this->belongsTo('App\Propuesta')->withDefault(function ($user) {
    //     $user->name = 'Guest Author';
    // });
    
    }

    public function datos(){

    	return \App\Propuesta::with('candidato')->get();
    	// return Propuesta::where('key',$this->propuesta_id)->first()->descripcionpropuesta;
    	// return $this->belongsTo('App\Propuesta');
    // 	return $this->belongsTo('App\Propuesta')->withDefault(function ($user) {
    //     $user->name = 'Guest Author';
    // });
    
    }

    public function candidato()
     {
         return $this->hasMany(Propuesta::class);
     }

     public function candi()
     {
     	return $this->hasMany(Propuesta::class);
         // return $this->belongsTo(Propuesta::class);
         // return $this->hasOne('App\Propuesta', 'propuesta_id', 'key');
     	// return 'hola';
     	// return \App\Propuesta::with('candidato')->get();
     }

}
