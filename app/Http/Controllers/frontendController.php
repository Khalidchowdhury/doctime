<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{

    /**
     * 
     * Doctime application main view Home Page
     * 
     */
    public function showhomepage()
    {
        return view('frontend.home');
    }


    /**
     * 
     * Doctime application Login page view Home Page
     * 
     */
    public function showLoginPage()
    {
        return view('frontend.login');
    }

    /**
     * 
     * Doctime application Register page view Home Page
     * 
     */
    public function patientRegisterPage()
    {
        return view('frontend.Patients.register');
    }


    /**
     * 
     * Doctime application Register page view Home Page
     * 
     */
    public function patientDashboardPage()
    {
        return view('frontend.Patients.dashboard');
    }

    /**
     * 
     * Doctime application Register page view Home Page
     * 
     */
    public function doctorRegisterPage()
    {
        return view('frontend.doctor.register');
    }


    /**
     * 
     * Doctime application Register page view Home Page
     * 
     */
    public function doctorDashboardPage()
    {
        return view('frontend.doctor.dashboard');
    }


























}
