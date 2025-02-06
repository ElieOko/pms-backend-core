<?php

namespace App\Models;

use App\Models\Plat;
use App\Models\Room;
use App\Models\BedRoom;
use App\Models\Appartement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Devise extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'taux',
        'nom',
        'code',
        'symbole'
    ];

    public function plat(): HasMany
    {
        return $this->hasMany(Plat::class);
    }

    public function room(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function bedroom(): HasMany
    {
        return $this->hasMany(BedRoom::class);
    }

    public function appartement(): HasMany
    {
        return $this->hasMany(Appartement::class);
    }
    
}
