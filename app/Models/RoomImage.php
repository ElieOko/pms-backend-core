<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'room_id',
        'image_room'
    ];
}
