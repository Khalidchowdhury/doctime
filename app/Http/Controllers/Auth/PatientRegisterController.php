<?php

namespace App\Http\Controllers\Auth;

use App\Models\patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class PatientRegisterController extends Controller
{

    /**
    *
    * Patient register system
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
        'password'   => password_hash($request -> password, PASSWORD_DEFAULT),
       ]);

       return redirect() -> route('patientRegister.page') -> with('success', 'Patient Account Created');

   }




    /**
     *
     * Patient login system
     *
     */
    public function login(Request $request)
    {
        $this -> validate($request , [
            'email'         => 'required',
            'password'      => 'required',
        ]);

        // Auth Process
        if
        (
            Auth::guard('patient') -> attempt([ 'email' => $request -> email, 'password' => $request -> password ]) ||  Auth::guard('patient') -> attempt([ 'mobile' => $request -> email, 'password' => $request -> password ]))
        {
            return redirect() -> route('patientDashboard.page');
        }else{
            return redirect() -> route('login.page') -> with('danger'. 'Auth Failed');
        }
 
    }





        /**
         * 
         *  Patient logout system
         * 
         */
        public function logout()
        {
            Auth::guard('patient') -> logout();
            return redirect() -> route('login.page');
        }





        /**
         * 
         *  patient profile setting page
         * 
         */
        public function showSettingPage()
        {
            return view('frontend.Patients.setting');
        }




        /**
         * 
         *  patient profile setting page
         * 
         */
        public function showPasswordPage()
        {
            return view('frontend.Patients.password');
        }






}
