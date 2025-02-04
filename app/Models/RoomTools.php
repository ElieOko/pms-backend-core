<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomTools extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'room_id',
        'tools_id'
    ];
}
