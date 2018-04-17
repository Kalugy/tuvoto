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
    
    // para obtener una propuesta en especifico los de abajo son intentos que se podrian hacer
    public function propu(){
    	// return Propuesta::where('key',$this->propuesta_id)->get();
        // return $this->belongsTo('App\Propuesta','propuesta_id','key');
    	return $this-> hasMany(Propuesta::class, 'key','propuesta_id');
    	// $readings = Reading::with('')->get();
    	// return Propuesta::where('key',$this->propuesta_id)->get();
    	// return $this->belongsTo('App\Propuesta');
    // 	return $this->belongsTo('App\Propuesta')->withDefault(function ($user) {
    //     $user->name = 'Guest Author';
    // });
    
    }
    


}
