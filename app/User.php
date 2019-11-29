<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table = "users";

    protected $primaryKey = 'id';


    protected $fillable = [
        'id', 'name', 'last_name', 'image', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function post()
    {
        return $this->hasMany('App\Post');// Puede tener muchos comentarios
    }


    public function comment()
    {
        return $this->hasMany('App\Comment');// Puede tener muchos comentarios
    }

}
