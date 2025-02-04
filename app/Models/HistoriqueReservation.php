<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriqueReservation extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'client_id',
        'reservation_id'
    ];
}
