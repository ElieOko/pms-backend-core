<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PlatCollection;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Plat::all();
        if($data->count() != 0 ){
            return new PlatCollection($data);
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
            'nom'=>'required',
            'prix'=>'required',
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        Plat::updateOrCreate([
            'parent_space_id'   =>   $field['parent_space_id'],
            'branch_id'         =>   $field['branch_id'],
            'nom'          =>   $field['nom'],
            'prix'           =>   $field['prix'],
            'image' => $field['image'],
        ]);
        return response()->json([
            'message' => $this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plat $plat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plat $plat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plat $plat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plat $plat)
    {
        //
    }
}
