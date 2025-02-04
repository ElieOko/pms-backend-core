<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BedRoomTools extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'bedrom_id',
        'tools_id'
    ];
}
