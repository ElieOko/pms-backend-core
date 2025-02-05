<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriqueReservation;
use App\Http\Resources\HistoriqueReservationCollection;

class HistoriqueReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = HistoriqueReservation::all();
        if($data->count() != 0 ){
            return new HistoriqueReservationCollection($data);
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
    public function show(HistoriqueReservation $historiqueReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HistoriqueReservation $historiqueReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HistoriqueReservation $historiqueReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HistoriqueReservation $historiqueReservation)
    {
        //
    }
}
