<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProgrammeFidelisation;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\TypeProgrammeFidelisationCollection;

class TypeProgrammeFidelisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TypeProgrammeFidelisation::all();
        if($data->count() != 0 ){
            return new TypeProgrammeFidelisationCollection($data);
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
            'parent_space_id'=>'required',
            'branch_id'=>'required'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        TypeProgrammeFidelisation::updateOrCreate([
            'nom'               =>   $field['nom'],
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
    public function show(TypeProgrammeFidelisation $typeProgrammeFidelisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeProgrammeFidelisation $typeProgrammeFidelisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeProgrammeFidelisation $typeProgrammeFidelisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeProgrammeFidelisation $typeProgrammeFidelisation)
    {
        //
    }
}
