<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'nom',
        'prenom',
        'coordonnee_client_id',
        'type_client_id'
    ];
}
