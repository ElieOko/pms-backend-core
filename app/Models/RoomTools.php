<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Tools;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomTools extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'room_id',
        'tools_id'
    ];

    public function room() : BelongsTo
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }

    public function tools() : BelongsTo
    {
        return $this->belongsTo(Tools::class,'tools_id','id');
    }
    
    public function branch() : BelongsTo
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }
}
