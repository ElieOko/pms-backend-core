<?php

namespace App\Http\Controllers;

use App\Models\Cantine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $validator = Validator::make($request->all(),[
            'nom' =>'required',
            'type_cantine_id' =>'required',
            'parent_space_id'=>'required',
            'branch_id'=>'required'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        Cantine::updateOrCreate([
            'nom'               =>   $field['nom'],
            'type_cantine_id' => $field['type_cantine_id'],
            'parent_space_id'   =>   $field['parent_space_id'],
            'branch_id'         =>   $field['branch_id']
        ]);
        return response()->json([
            'message' => $this->msg_success,
         ],$this->status_ok);
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
