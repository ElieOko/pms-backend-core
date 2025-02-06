<?php

namespace App\Models;

use App\Models\TypeClient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'nom',
        'prenom',
        'type_client_id'
    ];
    
    public function type_client() : BelongsTo
    {
        return $this->belongsTo(TypeClient::class,'type_client_id','id');
    }
}
