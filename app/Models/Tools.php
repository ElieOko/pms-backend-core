<?php

namespace App\Models;

use App\Models\TypeTools;
use App\Models\BedRoomTools;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tools extends Model
{
    //
    protected $fillable = [
        'type_tools_id',
        'nom'
    ];
    
    public function user() : BelongsTo
    {
        return $this->belongsTo(TypeTools::class,'type_tools_id','id');
    }

    public function bedroom_tools(): HasMany
    {
        return $this->hasMany(BedRoomTools::class);
    }
}
