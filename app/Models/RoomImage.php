<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomImage extends Model
{
    //
    protected $fillable = [
        'room_id',
        'image_room'
    ];
    
    public function room() : BelongsTo
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }
}
