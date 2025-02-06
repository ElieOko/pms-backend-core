<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ClientCollection;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Client::all();
        if($data->count() != 0 ){
            return new ClientCollection($data);
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
        $data['error'] = null ;
        $data['sys']   = "" ;
        $validator = Validator::make($request->all(),[
            'nom'               =>  'required',
            'prenom'            =>  'required',
            'parent_space_id'   =>  'required',
            'branch_id'         =>  'required',
            'type_clients_id'   =>  'required',
            'telephone'         =>  'string',
            'adress'            =>  'string'
        ]);

        if(!$validator->stopOnFirstFailure()->fails()){
            $field = $validator->validated();
            $state = Client::updateOrCreate([
                'parent_space_id'   =>  $field['parent_space_id'],
                'branch_id'         =>  $field['branch_id'],
                'nom'               =>  $field['nom'],
                'prenom'            =>  $field['prenom'],
                'type_client_id'    =>  $field['type_client_id']
            ]);

            //$data['sys'] = $state;
            return response()->json([
                "message"   =>  $this->msg_success,
                "data"      => $state
            ],200);
        }
        $data['error']  = $validator->errors()??"";
        return response()->json([
            "message"   => $data['error'],
        ],400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
