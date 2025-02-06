<?php

namespace App\Models;

use App\Models\Plat;
use App\Models\Room;
use App\Models\Badge;
use App\Models\BedRoom;
use App\Models\Cantine;
use App\Models\RoomTools;
use App\Models\Appartement;
use App\Models\BedRoomTools;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeProgrammeFidelisation;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    //
    protected $fillable = [
        'parent_space_id',
        'nom'
    ];

    public function appartement(): HasMany
    {
        return $this->hasMany(Appartement::class);
    }

    public function badge(): HasMany
    {
        return $this->hasMany(Badge::class);
    }
    
    public function bedroom(): HasMany
    {
        return $this->hasMany(BedRoom::class);
    }

    public function room(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function cantine(): HasMany
    {
        return $this->hasMany(Cantine::class);
    }

    public function plat(): HasMany
    {
        return $this->hasMany(Plat::class);
    }
   
    public function room_tools(): HasMany
    {
        return $this->hasMany(RoomTools::class);
    }

    public function type_programme_fidelisation(): HasMany
    {
        return $this->hasMany(TypeProgrammeFidelisation::class);
    }

    public function bedroom_tools(): HasMany
    {
        return $this->hasMany(BedRoomTools::class);
    }
    //
}
