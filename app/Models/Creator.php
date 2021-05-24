<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;
    
    /**
     * Les attributs assignablent
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'user_id',
    ];

    /**
     * Retourne l'utilisateur
     *
     * @return App\Models\User
     */
    public function user()
    {
      return $this->belongsTo(User::class,'user_id','id');
    }

    /**
     * Récupère les vidéos du créateur
     *
     * @return App\Models\Video
     */
    public function videos()
    {
      return $this->hasMany(Video::class,'user_id','id');
    }

    /**
     * Récupère les abonnés du créateur
     *
     * @return App\Models\Subscriber
     */
    public function subscribers()
    {
      return $this->hasMany(Subscriber::class,'creator_id','id');
    }

    /**
     * Récupère les likes du créateur
     *
     * @return App\Models\Like
     */
    public function likes()
    {
      return $this->hasMany(Like::class,'creator_id','id');
    }

    /**
     * Récupère les dislikes du créateur
     *
     * @return App\Models\Dislike
     */
    public function dislikes()
    {
      return $this->hasMany(Dislike::class,'creator_id','id');
    }
}
