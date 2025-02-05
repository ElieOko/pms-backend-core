<?php

namespace App\Http\Controllers;

use App\Models\RoomTools;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RoomToolsCollection;

class RoomToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RoomTools::all();
        if($data->count() != 0 ){
            return new RoomToolsCollection($data);
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
            'tools_id'=>'required',
            'room_id'=>'required',
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        RoomTools::updateOrCreate([
            'parent_space_id'   =>   $field['parent_space_id'],
            'branch_id'         =>   $field['branch_id'],
            'tools_id'          =>   $field['tools_id'],
            'room_id'           =>   $field['room_id'],
        ]);
        return response()->json([
            'message' => $this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomTools $roomTools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomTools $roomTools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomTools $roomTools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomTools $roomTools)
    {
        //
    }
}
