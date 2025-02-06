<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoriqueReservation extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'client_id',
        'reservation_id'
    ];
    
    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class,'client_id','id');
    }

    public function reservation() : BelongsTo
    {
        return $this->belongsTo(Reservation::class,'reservation_id','id');
    }
    
}
