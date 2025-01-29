<?php

use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\SingledocController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
}); */
// ambulancecontroller router for store data

Route::post('/create_ambulance', [AmbulanceController::class, 'store']);
Route::get('/ambulance', [AmbulanceController::class, 'index']);
Route::get('/ambulance/{id}', [AmbulanceController::class, 'show']);

//doctor router for post and get data
Route::post('/create_doctor', [DoctorsController::class, 'store']);
Route::get('/doctors', [DoctorsController::class,'index']);
Route::get('/doctors/{id}', [DoctorsController::class, 'show']);


//hospital routes
Route::post('/create_hospital', [HospitalController::class, 'store']);
Route::get('/hospital', [HospitalController::class,'index']);
Route::get('/hospital/{id}', [HospitalController::class,'show']);

//single doctor routes

Route::post('/create_singledoc', [SingledocController::class, 'store']);
Route::get('/singledoc', [SingledocController::class,'index']);
Route::get('/singledoc/{id}', [SingledocController::class,'show']);

