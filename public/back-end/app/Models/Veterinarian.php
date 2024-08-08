<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Veterinarian extends Model
{
    use HasFactory;
        protected $table = 'veterinarians';
        protected $primaryKey = 'id';

    // Specify any fillable fields if needed
    protected $fillable = ['user_id','experience','clinic_name','speciality','address','phone','mobility','city'];
    
    /**
     * Get the user associated with the Veterinarian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
        /**
     * Get all of the reviews for the Veterinarian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(App\Models\Review::class, 'veterinarian_id', 'id');
    }
}
