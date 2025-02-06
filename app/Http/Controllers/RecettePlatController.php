<?php

namespace App\Http\Controllers;

use App\Models\RecettePlat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\RecettePlatCollection;

class RecettePlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RecettePlat::all();
        if($data->count() != 0 ){
            return new RecettePlatCollection($data);
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
    public function show(RecettePlat $recettePlat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecettePlat $recettePlat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecettePlat $recettePlat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecettePlat $recettePlat)
    {
        //
    }
}
