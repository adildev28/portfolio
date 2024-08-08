<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;



class Profil extends Model
{
    use HasFactory;

    protected $fillable=[
        'profile_picture_id',
        'bio',
        'username',
        'user_id',
    ];
    /**
     * Get the user associated with the Veterinarian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
   public function user(): BelongsTo
   {
       return $this->belongsTo(User::class,'profile_id');
   }
}
