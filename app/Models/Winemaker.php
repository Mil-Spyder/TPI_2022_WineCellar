<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Winemaker extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'adress',
        'city',
        'locality',
        'country',
        'domain_name'
    ];
    use HasFactory;
    public function bottle()
    {
        return $this->belongsTo(Bottle::class);
    }
}
