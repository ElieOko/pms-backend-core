<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'number_appartement',
        'capacite',
        'tarif_base',
        'promotion_tarif',
        'devise_id',
        'is_reserve'
    ];
}
