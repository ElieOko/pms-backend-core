<?php

namespace App\Http\Controllers;

use App\Models\BedRoomImage;
use Illuminate\Http\Request;
use App\Http\Resources\BedRoomImageCollection;

class BedRoomImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BedRoomImage::all();
        if($data->count() != 0 ){
            return new BedRoomImageCollection($data);
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
    public function show(BedRoomImage $bedRoomImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BedRoomImage $bedRoomImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BedRoomImage $bedRoomImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BedRoomImage $bedRoomImage)
    {
        //
    }
}
