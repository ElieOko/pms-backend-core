<?php

namespace App\Http\Controllers;

use App\Models\BedRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\BedRoomCollection;

class BedRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BedRoom::all();
        if($data->count() != 0 ){
            return new BedRoomCollection($data);
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
    public function show(BedRoom $bedRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BedRoom $bedRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BedRoom $bedRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BedRoom $bedRoom)
    {
        //
    }
}
