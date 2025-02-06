<?php

namespace App\Models;

use App\Models\BedRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BedRoomImage extends Model
{
    //
    protected $fillable = [
        'bedroom_id',
        'image_bedroom'
    ];

    public function bedroom() : BelongsTo
    {
        return $this->belongsTo(BedRoom::class,'bedroom_id','id');
    }
}
