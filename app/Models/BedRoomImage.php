<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BedRoomImage extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'image_bedroom'
    ];
}
