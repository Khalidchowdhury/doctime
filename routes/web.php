<?php

use App\Http\Controllers\Auth\PatientRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;


// Doctime application all route 


Route::get('/', [frontendController::class, 'showhomepage']) -> name('home.page');
Route::get('/login', [frontendController::class, 'showLoginPage']) -> name('login.page') -> middleware('adminRedirect');


// Patient route setup
Route::get('/patient-register', [frontendController::class, 'patientRegisterPage']) -> name('patientRegister.page') -> middleware('adminRedirect');
Route::get('/patient-dashboard', [frontendController::class, 'patientDashboardPage']) -> name('patientDashboard.page') -> middleware('admin');
Route::post('/patient-register', [PatientRegisterController::class, 'register']) -> name('patient.register');
Route::post('/patient-login', [PatientRegisterController::class, 'login']) -> name('patient.login');
Route::get('/patient-logout', [PatientRegisterController::class, 'logout']) -> name('patient.logout');
Route::get('/patient-setting', [PatientRegisterController::class, 'showSettingPage']) -> name('patient.setting');
Route::get('/patient-password', [PatientRegisterController::class, 'showPasswordPage']) -> name('patient.password');

// Doctor route setup
Route::get('/doctor', [frontendController::class, 'doctorRegisterPage']) -> name('RegisterDoctor.page');
Route::get('/doctor-dashboard', [frontendController::class, 'doctorDashboardPage']) -> name('doctorDashboard.page');







