<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'priorite',
        'description',
        'min_point',
        'max_point',
        'reduction'
    ];
}
