<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoordonneeClient;
use App\Http\Resources\CoordonneeClientCollection;

class CoordonneeClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CoordonneeClient::all();
        if($data->count() != 0 ){
            return new CoordonneeClientCollection($data);
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
    public function show(CoordonneeClient $coordonneeClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CoordonneeClient $coordonneeClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CoordonneeClient $coordonneeClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoordonneeClient $coordonneeClient)
    {
        //
    }
}
