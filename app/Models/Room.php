<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'number_room',
        'is_reserve',
        'capacite',
        'tarif_base',
        'promotion_tarif',
        'devise_id'
    ];
}
