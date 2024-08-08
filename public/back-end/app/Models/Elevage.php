<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Elevage extends Model
{
    use HasFactory;

    protected $fillable=['user_id','years','elevage_name','speciality','address','city','space','number_animals','url','phone'];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the reviews for the Elevage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(App\Models\Review::class, 'elevage_id', 'id');
    }
}
