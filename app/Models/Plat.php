<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'nom',
        'prix',
        'image'
    ];
}
