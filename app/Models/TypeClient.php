<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeClient extends Model
{
    //
    protected $fillable = [
       'parent_space_id',
       'nom'
    ];
    
}
