<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $doctors = Doctors::all();
       return response()->json($doctors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Doctors();
       $data->name = $request->name;
       $data->degree = $request->degree;
       $data->specialized = $request->specialized;
       $data->experience = $request->experience;
       $data->hospital = $request->hospital;
       $data->appointment_time = $request->appointment_time;
       $data->address = $request->address;
       $data->consultation_fee = $request->consultation_fee;
       $data->contact = $request->contact;
       $data->abount_doctor = $request->abount_doctor;
       $data->doctors_cat = $request->doctors_cat;
       $data->e_hospital = $request->e_hospital;
       $data->e_degree = $request->e_degree;
       $data->e_experience_year = $request->e_experience_year;
       //For Image
       if ($request->file('doctor_img')) {
        $file = $request->file('doctor_img');
        $filename = date('Ymdhi') . $file->getClientOriginalName();
        $file->move(public_path('admin/doctors'), $filename);
        $data['doctor_img'] = $filename;
    }
       $data->save();

       return response()->json([
           'success' => true,
           'message' => 'Doctor Created Successfully',
           'data' => $data,
       ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
