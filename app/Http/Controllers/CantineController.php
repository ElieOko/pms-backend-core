<?php

namespace App\Http\Controllers;

use App\Models\Cantine;
use Illuminate\Http\Request;
use App\Http\Resources\CantineCollection;

class CantineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cantine::all();
        if($data->count() != 0 ){
            return new CantineCollection($data);
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
    public function show(Cantine $cantine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cantine $cantine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cantine $cantine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cantine $cantine)
    {
        //
    }
}
