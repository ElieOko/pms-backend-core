<?php

namespace App\Http\Controllers;

use App\Models\BedRoomTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\BedRoomToolsCollection;

class BedRoomToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BedRoomTools::all();
        if($data->count() != 0 ){
            return new BedRoomToolsCollection($data);
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
    public function show(BedRoomTools $bedRoomTools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BedRoomTools $bedRoomTools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BedRoomTools $bedRoomTools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BedRoomTools $bedRoomTools)
    {
        //
    }
}
