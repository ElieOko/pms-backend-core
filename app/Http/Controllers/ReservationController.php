<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReservationCollection;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Reservation::all();
        if($data->count() != 0 ){
            return new ReservationCollection($data);
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
        $validator = Validator::make($request->all(),[
            'parent_space_id'=>'required',
            'branch_id'=>'required',
            'client_id'=>'required',
            'room_id'=>'required',
            'bed_room_id'=>'required',
            'start_date' =>'required',
            'end_date' =>'required',
            'status' =>'required',        


        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        Resrvation::updateOrCreate([
            'parent_space_id'   =>   $field['parent_space_id'],
            'branch_id'         =>   $field['branch_id'],
            'client_id'         =>   $field['client_id'],
            'room_id'           =>   $field['room_id'],
            'bed_room_id'       =>   $field['bed_room_id'],
            'start_date'        =>   $field['start_date'],
            'end_date'          =>   $field['end_date'],
            'status'            =>   $field['status'],

        ]);
        return response()->json([
            'message' => $this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
