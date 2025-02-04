<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cantine extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'type_cantine_id',
        'nom'
    ];
}
