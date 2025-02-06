<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoordonneeClient extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'client_id',
        'telephone',
        'email',
        'adresse'
    ];
}
