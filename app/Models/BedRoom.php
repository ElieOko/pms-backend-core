<?php

namespace App\Models;

use App\Models\Branch;
use App\Models\Devise;
use App\Models\BedRoomTools;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BedRoom extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'number_bed_room',
        'capacite',
        'tarif_base',
        'promotion_tarif',
        'devise_id',
        'is_reserve'
    ];

    public function branch() : BelongsTo
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }
    
    public function devise() : BelongsTo
    {
        return $this->belongsTo(Devise::class,'devise_id','id');
    }

    public function bedroom_tools(): HasMany
    {
        return $this->hasMany(BedRoomTools::class);
    }
}
