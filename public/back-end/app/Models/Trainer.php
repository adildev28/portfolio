<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','experience_years','elevage_name','speciality','address','phone','Mobility','city'];

    /**
     * Get the user associated with the Trainer
     *
     **/ //@return \Illuminate\Database\Eloquent\Relations\BelongsTo
     
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get all of the reviews for the Trainer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(App\Models\Review::class, 'trainer_id', 'id');
    }

}


	
	
	
	
	
	
	
	
