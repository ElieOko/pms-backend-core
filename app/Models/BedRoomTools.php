<?php

namespace App\Models;

use App\Models\Tools;
use App\Models\Branch;
use App\Models\BedRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BedRoomTools extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'bedroom_id',
        'tools_id'
    ];

    public function branch() : BelongsTo
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }

    public function tools() : BelongsTo
    {
        return $this->belongsTo(Tools::class,'tools_id','id');
    }

    public function bedroom() : BelongsTo
    {
        return $this->belongsTo(BedRoom::class,'bedrom_id','id');
    }
}
