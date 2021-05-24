<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Les attributs assignablent
     *
     * @var array
     */
    protected $fillable = [
      'user_id',
      'video_id',
      'content',
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
     * Retourne la vidéo
     *
     * @return App\Models\Video
     */
    public function video()
    {
      return $this->belongsTo(Video::class,'video_id','id');
    }
}
