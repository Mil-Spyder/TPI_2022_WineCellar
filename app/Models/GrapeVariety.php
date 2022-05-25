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
    ];

    public function bottle(): BelongsTo
    {
        return $this->belongsTo(Bottle::class,'bottle_id');
    }
   
    use HasFactory;
}
