<?php

namespace App\Http\Controllers\Auth;

use App\Models\patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientRegisterController extends Controller
{
    
    /**
    * 
    * Patient register
    * 
    */
   public function register(Request $request)
   {
       $this -> validate($request , [
        'name'          => 'required',
        'mobile'        => 'required',
        'email'         => 'required',
        'password'      => 'required',
       ]);

        //  data store 
       patient::create([
        'name'       => $request -> name,
        'mobile'     => $request -> mobile,
        'email'      => $request -> email,
        'password'   => $request -> password,
       ]);

       return redirect() -> route('patientRegister.page') -> with('success', 'Patient Account Created');

   }




   

   
   





}
