<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCuisine extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'nom'
    ];
}
