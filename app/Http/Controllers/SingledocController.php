<?php

namespace App\Http\Controllers;

use App\Models\Singledoc;
use Illuminate\Http\Request;

class SingledocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $singledoc = Singledoc::all();
       return response()->json($singledoc);
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
        $data = new Singledoc();

        $data->s_doc_name = $request->s_doc_name;
        $data->s_doc_location = $request->s_doc_location;
        $data->s_doc_hospital = $request->s_doc_hospital;
        $data->s_doc_position = $request->s_doc_position;
        $data->s_doc_experience = $request->s_doc_experience;
        $data->s_doc_phonenumber = $request->s_doc_phonenumber;
        $data->s_doc_specialized = $request->s_doc_specialized;

        if ($request->file('s_doc_picture')) {
            $file = $request->file('s_doc_picture');
            $filename = date('Ymdhi') . $file->getClientOriginalName();
            $file->move(public_path('admin/singledoc'), $filename);
            $data['s_doc_picture'] = $filename;
        }

        $data->save();
        return response()->json([
            'success' => true,
            'message' => 'Doctor created successfully',
            'data' => $data,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $singledoc = Singledoc::find($id);
       if ($singledoc) {
        return response()->json($singledoc);
       }
       return response()->json(['error' => 'Doctor not found'],404);
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
