<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class customer extends Model
{
    
    public $timestamps = false;

    //  public function scopeBuscar($query, $dni, $tipo) {
    //  	if (    ($dni)&& ($tipo)    ) {
    //  		return $query->where($tipo,'like',"%$dni%");
    //  	}
    //  }

//      public function descripcion(){
//         return $this->hasMany('App\Models\Estados', 'id_estado');
//    }

    // public function scopeEmail($query, $email) {
    // 	if ($email) {
    // 		return $query->where('email','like',"%$email%");
    // 	}
    // }
    // public function scopeAddress($query, $address){
    //     if ($address === ''){
    //        return $address = 'adasdasdda';
    //     }
    // }
    
    //
}
