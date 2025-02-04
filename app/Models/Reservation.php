<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'client_id',
        'bedroom_id',
        'room_id',
        'status',
        'date_debut',
        'date_fin'
    ];
}
