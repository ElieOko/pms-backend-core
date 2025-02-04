<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammeFidelisation extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'type_programme_fidelisation_id'
    ];
}
