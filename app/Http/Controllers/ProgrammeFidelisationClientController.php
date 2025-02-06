<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgrammeFidelisationClient;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProgrammeFidelisationClientCollection;

class ProgrammeFidelisationClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProgrammeFidelisationClient::all();
        if($data->count() != 0 ){
            return new ProgrammeFidelisationClientCollection($data);
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
    public function show(ProgrammeFidelisationClient $programmeFidelisationClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgrammeFidelisationClient $programmeFidelisationClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgrammeFidelisationClient $programmeFidelisationClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgrammeFidelisationClient $programmeFidelisationClient)
    {
        //
    }
}
