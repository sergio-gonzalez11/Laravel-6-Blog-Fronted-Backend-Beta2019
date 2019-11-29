<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $table = "categories";

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name_category',
    ];


    public function post()//$post->user->nombre
    { 
        return $this->hasMany('App\Post'); //Una categoria puede tener muchos post
    }

}
