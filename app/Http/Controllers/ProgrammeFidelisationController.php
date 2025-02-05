<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgrammeFidelisation;
use App\Http\Resources\ProgrammeFidelisationCollection;

class ProgrammeFidelisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProgrammeFidelisation::all();
        if($data->count() != 0 ){
            return new ProgrammeFidelisationCollection($data);
        }
        return response()->json([
            "message"=>"Ressource not found",
        ],400);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgrammeFidelisation $programmeFidelisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgrammeFidelisation $programmeFidelisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgrammeFidelisation $programmeFidelisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgrammeFidelisation $programmeFidelisation)
    {
        //
    }
}
