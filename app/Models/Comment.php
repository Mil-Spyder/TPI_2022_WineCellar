<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bottle;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Comment extends Model
{

    protected $fillable = [
        'label',
        'bottle_id',
        'user_id'
    ];

    public function bottle()
    {
        return $this->belongsTo(Bottle::class);
    }
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
