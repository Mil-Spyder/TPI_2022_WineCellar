<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\GrapeVariety;
use App\Models\Winemaker;
use App\Models\Culture;
use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bottle extends Model
{
    protected $fillable = [
        'appelation',
        'cuvee_name',
        'region',
        'vintage',
        'capacity',
        'color',
        'unit',
        'consumable_date',
        'peak_date',
        'danger_date',
        'description',
        'culture_id',
        'grape_variety_id',
        'winemaker_id'
    ];

    public function grapeVarieties()
    {
        return $this->hasMany(GrapeVariety::class, 'grape_variety_id');
    }
    public function wineMaker()
    {
        return $this->belongsTo(Winemaker::class, 'winemaker_id');
    }
    public function culture()
    {
        return $this->belongsTo(Culture::class, 'culture_id');
    }
    public function comments()
    {

        return $this->hasMany(Comment::class);
    }

    public function ratings()
    {

        return $this->hasMany(Rating::class);
    }

    /*
    protected $dates = [
        'consumable_date',
        'danger_date',
        'peak_date'
    ];

   
   
    public function setConsumableDateattribute($value)
    {
        $this->attributes['consumable_date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }
    public function setPeakDateattribute($value)
    {
        $this->attributes['peak_date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }
    public function setDangerDateattribute($value)
    {
        $this->attributes['danger_date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }
*/


    use HasFactory;
}
