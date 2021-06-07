<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class RegisterController extends Controller
{
    //
   public function Customer(){
       return view('register');
   }
   public function CustomerRegister(){
    request()->validate([
        
    ]);
    try {
        $customer = new customer();
        $customer->dni = request('dni');
        $customer->id_reg = request('communes');
        $customer->id_com = request('regions');
        $customer->name = request('name');
        $customer->last_name = request('last_name');
        $customer->address = request('address');
        $customer->email = request('email');
        $customer->date_reg = date('Y-m-d H:i:s');
        $customer->save();
        flash('Se ha guardado el registro')->success();
    } catch (\Throwable $error) {
        flash('Ocurrió un error: '. $error)->error();
        //throw $th;
    }
    return redirect('/');

    
    
   }
}
