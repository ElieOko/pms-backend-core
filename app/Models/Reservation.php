<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Branch;
use App\Models\Client;
use App\Models\BedRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'client_id',
        'bedroom_id',
        'room_id',
        'status',
        'start_date',
        'end_date',
        'is_expired'
    ];

    public function branch() : BelongsTo
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }
    
    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }

    public function bedroom() : BelongsTo
    {
        return $this->belongsTo(BedRoom::class,'bedroom_id','id');
    }

    public function room() : BelongsTo
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }
}
