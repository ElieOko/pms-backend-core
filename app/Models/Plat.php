<?php

namespace App\Models;

use App\Models\Branch;
use App\Models\Devise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plat extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'branch_id',
        'nom',
        'prix',
        'devise_id',
        'image'
    ];

    public function branch() : BelongsTo
    {
        return $this->belongsTo(Branch::class,'branch_id','id');
    }

    public function devise() : BelongsTo
    {
        return $this->belongsTo(Devise::class,'devise_id','id');
    }
}
