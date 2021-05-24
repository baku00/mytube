<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use Auth;

class Video extends Model
{
    use HasFactory;

    /**
     * Les attributs assignablent
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'creator_id',
      'title',
      'description',
      'src',
      'video_ext',
      'miniature_ext',
      'video',
      'miniature',
    ];

    /**
     * Assigne une valeur à l'attribut vidéo
     *
     * @return string
     */
    public function getVideoAttribute()
    {
      return env('APP_URL').'/storage/videos/'.$this->attributes['src'].'/video.'.$this->attributes['video_ext'];
    }

    /**
     * Assigne une valeur à l'attribut miniature
     *
     * @return string
     */
    public function getMiniatureAttribute()
    {
      return env('APP_URL').'/storage/videos/'.$this->attributes['src'].'/miniature.'.$this->attributes['miniature_ext'];
    }

    /**
     * Retourne le créateur
     *
     * @return App\Models\Creator
     */
    public function creator()
    {
      return $this->belongsTo(Creator::class,'creator_id','id');
    }

    /**
     * Retourne les commentaires
     *
     * @return App\Models\Comment
     */
    public function comments()
    {
      return $this->hasMany(Comment::class,'video_id','id')->orderBy('created_at','desc');
    }

    /**
     * Retourne les likes
     *
     * @return App\Models\Like
     */
    public function likes()
    {
      return $this->hasMany(Like::class,'video_id','id');
    }

    /**
     * Retourne les dislikes
     *
     * @return App\Models\Dislike
     */
    public function dislikes()
    {
      return $this->hasMany(Dislike::class,'video_id','id');
    }
}
