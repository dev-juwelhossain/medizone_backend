<?php

use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HospitalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
}); */
// ambulancecontroller router for store data

Route::post('/create_ambulance', [AmbulanceController::class, 'store']);

Route::post('/create_doctor', [DoctorsController::class, 'store']);

Route::post('/create_hospital', [HospitalController::class, 'store']);

Route::get('/doctors', [DoctorsController::class,'index']);

