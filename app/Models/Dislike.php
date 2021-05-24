<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    use HasFactory;

    /**
     * Les attributs assignablent
     *
     * @var array
     */
    protected $fillable = [
      'user_id',
      'creator_id',
      'video_id',
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

    /**
    * Récupère la vidéo
    *
    * @return App\Models\Video
    */
    public function video()
    {
      return $this->belongsTo(Video::class,'video_id','id');
    }
}
