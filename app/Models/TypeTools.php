<?php

namespace App\Models;

use App\Models\CategorieTypeTools;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeTools extends Model
{
    //
    protected $fillable = [
        'categorie_type_tool_id',
        'nom'
    ];
    public function categorie_type_tools() : BelongsTo
    {
        return $this->belongsTo(CategorieTypeTools::class,'categorie_type_tool_id','id');
    }
}
