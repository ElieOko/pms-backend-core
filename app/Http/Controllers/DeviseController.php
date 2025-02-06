<?php

namespace App\Http\Controllers;

use App\Models\Devise;
use Illuminate\Http\Request;
use App\Http\Resources\DeviseCollection;
use Illuminate\Support\Facades\Validator;

class DeviseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Devise::all();
        if($data->count() != 0 ){
            return new DeviseCollection($data);
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
        $msg = "Enregistrement réussie avec succès";
        $status = 201;
        $dt = json_decode($request->getContent());
        $state_save = Devise::updateOrCreate([
                "nom"  => $dt->nom,
                'taux' => $dt->taux,
                'code' => $dt->code,
            ]);
       
            return response()->json([
                "message"=>$msg,
                "data"=>$state_save
            ],$status);
    }

    /**
     * Display the specified resource.
     */
    public function show(Devise $devise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devise $devise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devise $devise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devise $devise)
    {
        //
    }
}
