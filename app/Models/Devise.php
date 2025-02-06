<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devise extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'taux',
        'nom',
        'code'
    ];
}
