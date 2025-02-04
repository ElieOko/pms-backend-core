<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BedRoom extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'number_bed_room',
        'capacite',
        'tarif_base',
        'promotion_tarif',
        'is_reserve'
    ];
}
