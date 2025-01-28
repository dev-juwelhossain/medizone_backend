<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ambulance = Ambulance::all();
        return response()->json($ambulance);
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

        $data = new Ambulance();
        $data->name = $request->name;
        $data->ambulance_picture = $request->ambulance_picture;
        $data->location = $request->location;
        $data->phone_number = $request->phone_number;
        //For Image
        if ($request->file('ambulance_picture')) {
            $file = $request->file('ambulance_picture');
            $filename = date('Ymdhi') . $file->getClientOriginalName();
            $file->move(public_path('admin/ambulance'), $filename);
            $data['ambulance_picture'] = $filename;
        }
        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Ambulance created successfully',
            'data' => $data,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ambulance = Ambulance::find($id);
        if ($ambulance) {
            return response()->json($ambulance);
    }
    return response()->json(['error'=>'Ambulance not found'], 404);
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
