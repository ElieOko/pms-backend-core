<?php

namespace App\Models;

use App\Models\Branch;
use App\Models\TypeCantine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cantine extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'type_cantine_id',
        'nom'
    ];

    public function branch() : BelongsTo
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }

    public function type_cantine() : BelongsTo
    {
        return $this->belongsTo(TypeCantine::class,'type_cantine_id','id');
    }
}
