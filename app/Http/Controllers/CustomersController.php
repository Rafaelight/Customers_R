<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\customer; //importar el modelo
//use Laracast\Flash\Flash;

class CustomersController extends Controller
{
    
    public function Customers(){
        $lista = customer::all();
        
        return view('index', compact('lista'));
    }

    public function Search(Request $request){
        
        //return dd($request->('dni'));
        $dni = $request->input('dni');
        $select = $request->get('option');
        
        if ($select == 'Email')
             $select = 'email';
        else $select = 'dni';
        //dd($select);
            
        

        //$customer = customer::find($dni);
        //$customer = customer::where('dni','like',"%$dni%");
        //$customer = customer::find($dni);
       //dd($customer);
       // $customer = customer::with('dni')->get();
       // echo var_dump($customer); 
       $status = 'A';
          $customer = customer::where($select,'like',"%$dni%")
                 ->join('communes', 'customers.id_com', '=', 'communes.id_com')
                 ->join('regions', 'customers.id_reg', '=', 'regions.id_reg')
                 ->select( 'customers.*','communes.description as descriptionC',
                 'regions.description as descriptionR')
                 ->get();
                   
        return view('customerfind', compact('customer'));
        
    }
    public function Delete(){
        // request()->validate([
        //     'del'=> required
        // ]);
        try {
            if(request('del')){
                $customer_dni = request('del');
                //dd($customer_dni);
                $customer = customer::where('dni','like', "%$customer_dni%")
                // foreach ($customer as $cs) {
                //     $cs->status = 3;
                //     $cs->update();
                // }
                ->update(['status'=>3]);
                flash('Se ha eliminado el registro')->success();
                
            }
        } catch (\Throwable $error) {
            flash('Ha ocurrido un error: '. $error)->error();
            //throw $th;
        }
        return redirect('/');
         
        
    }

}
