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
        //
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

        return response ()->json([
            'success'
        ]);
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
