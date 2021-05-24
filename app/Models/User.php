<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Retourne les commentaires que l'utilisateur à poster
     *
     * @return App\Models\Comment
     */
    public function comments()
    {
      return $this->hasMany(Comment::class,'user_id','id')->orderBy('created_at','desc');
    }

    /**
     * Retourne les abonnés d'un utilisateur
     *
     * @return App\Models\Subscriber
     */
    public function subscribers()
    {
      return $this->hasMany(Subscriber::class,'creator_id','id');
    }

    /**
     * Retourne les abonnements d'un utilisateur
     *
     * @return App\Models\Subscriber
     */
    public function subscriptions()
    {
      return $this->hasMany(Subscriber::class,'user_id','id');
    }

    /**
     * Retourne les likes d'un utilisateur
     *
     * @return App\Models\Like
     */
    public function likes()
    {
      return $this->hasMany(Like::class,'user_id','id');
    }

    /**
     * Retourne les dislikes d'un utilisateur
     *
     * @return App\Models\Dislike
     */
    public function dislikes()
    {
      return $this->hasMany(Dislike::class,'user_id','id');
    }
}
