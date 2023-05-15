<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;




Route::get('/', [frontendController::class, 'showhomepage']) -> name('home.page');
Route::get('/login', [frontendController::class, 'showLoginPage']) -> name('login.page');

// Patient route setup
Route::get('/register', [frontendController::class, 'patientRegisterPage']) -> name('patientRegister.page');
Route::get('/Patient-dashboard', [frontendController::class, 'patientDashboardPage']) -> name('patientDashboard.page');

// Doctor route setup
Route::get('/doctor', [frontendController::class, 'doctorRegisterPage']) -> name('RegisterDoctor.page');
Route::get('/doctor-dashboard', [frontendController::class, 'doctorDashboardPage']) -> name('doctorDashboard.page');





