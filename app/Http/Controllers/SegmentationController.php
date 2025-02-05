<?php

namespace App\Http\Controllers;

use App\Models\Segmentation;
use Illuminate\Http\Request;
use App\Http\Resources\SegmentationCollection;

class SegmentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Segmentation::all();
        if($data->count() != 0 ){
            return new SegmentationCollection($data);
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
    public function show(Segmentation $segmentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Segmentation $segmentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Segmentation $segmentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Segmentation $segmentation)
    {
        //
    }
}
