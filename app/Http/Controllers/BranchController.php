<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\BranchCollection;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Branch::all();
        if($data->count() != 0 ){
            return new BranchCollection($data);
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
            'parent_space_id'=>'required'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        Branch::updateOrCreate([
            'nom'               =>   $field['nom'],
            'parent_space_id'   =>   $field['parent_space_id']
        ]);
        return response()->json([
            'message' => $this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
