<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    /**
     * Les attributs assignablent
     *
     * @var array
     */
    protected $fillable = [
      'creator_id',
      'user_id',
    ];

    /**
     * Récupère le créateur
     *
     * @return App\Models\Creator
     */
    public function creator()
    {
      return $this->belongsTo(Creator::class,'creator_id','id');
    }

    /**
    * Récupère l'utilisateur
    *
    * @return App\Models\User
    */
    public function user()
    {
      return $this->belongsTo(User::class,'user_id','id');
    }
}
