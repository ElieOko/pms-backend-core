<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'number_room' =>'required',
            'is_reserve' =>'required',
            'capacite' =>'required',
            'tarif_base' =>'required',
            'promotion_tarif' =>'required',
            'devise_id' =>'required',

        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        Room::updateOrCreate([
            'parent_space_id'   =>   $field['parent_space_id'],
            'branch_id'         =>   $field['branch_id'],
            'number_room'               =>   $field['number_room'],
            'is_reserve'               =>   $field['is_reserve'],
            'capacite'               =>   $field['capacite'],
            'tarif_base'               =>   $field['tarif_base'],
            'promotion_tarif'               =>   $field['promotion_tarif'],
            'devise_id'               =>   $field['devise_id'],            
        ]);
        return response()->json([
            'message' => $this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
