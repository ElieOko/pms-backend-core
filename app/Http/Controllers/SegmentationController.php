<?php

namespace App\Http\Controllers;

use App\Models\Segmentation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SegmentationController extends Controller
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
            'branch_id'=>'required'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        TypeBedRoom::updateOrCreate([
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
