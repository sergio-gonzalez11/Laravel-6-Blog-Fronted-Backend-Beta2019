<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    protected $table = "states";
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'name',
    ];


    public function post()
    {
        return $this->hasMany('App\Post');// Un Post puede tener muchos comentarios deshabilitados
    }
}
