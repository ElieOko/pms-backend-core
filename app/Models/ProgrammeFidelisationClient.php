<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammeFidelisationClient extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'client_id',
        'badge_id',
        'points_utilise',
        'points_disponible'
    ];
}
