<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoordonneeClient extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'telephone',
        'email',
        'adresse'
    ];
}
