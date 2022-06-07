<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bottle;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class GrapeVariety extends Model
{
    
    protected $fillable = [
        'label',
        'id' 
    ];

    public function bottles()
    {
        return $this->belongsToMany(Bottle::class,'bottle_grape_variety','bottle_id','grape_variety_id');
    }
   
    use HasFactory;
}
