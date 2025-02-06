<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeProgrammeFidelisation extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'nom'
    ];
    
    public function branch() : BelongsTo
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }
}
