<?php

namespace App\Http\Controllers;

use App\Models\Hospitals;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Hospitals::all();
        return response()->json($hospitals);
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
        $data = new Hospitals();
        //$data->hospital_picture = $request->hospital_picture;
        $data->name = $request->name;
        $data->location = $request->location;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->about_hospital = $request->about_hospital;
        $data->services = $request->services;
        //For Image
        if ($request->file('hospital_picture')) {
            $file = $request->file('hospital_picture');
            $filename = date('Ymdhi') . $file->getClientOriginalName();
            $file->move(public_path('admin/hospitals'), $filename);
            $data['hospital_picture'] = $filename;
        }
        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Hospital created successfully',
            'data' => $data,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hospital = Hospitals::find($id);
        if ($hospital) {
            return response()->json($hospital);
    }
    return response()->json(['error' => 'Hospital Not found'], status :404);
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
