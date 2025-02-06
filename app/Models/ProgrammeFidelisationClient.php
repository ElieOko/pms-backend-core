<?php

namespace App\Models;

use App\Models\Badge;
use App\Models\Branch;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgrammeFidelisationClient extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'client_id',
        'badge_id',
        'points_utilise',
        'points_disponible'
    ];
    public function branch() : BelongsTo
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }
    
    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }

    public function badge() : BelongsTo
    {
        return $this->belongsTo(Badge::class,'badge_id','id');
    }
}
