<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['reviewer_id','value','reviewed_id','comment','type_reviewed','elevage_id','trainer_id','veterinarian_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'reviewer_id');
    }
}
