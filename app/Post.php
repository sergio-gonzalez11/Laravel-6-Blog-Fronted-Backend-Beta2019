<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //

    protected $table = "posts";
    
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'image', 'title', 'description_post', 'recomendations', 'user_id', 'category_id', 'state_id',
    ];


    public function scopeTitle($query, $title)
    {
        if($title)
        {
            return $query->where('title', 'LIKE', "%$title%")
                         ->orwhere('description_post', 'LIKE', "%$title%")
                         ->orwhere('recomendations', 'LIKE', "%$title%");        
        }
    }


    public function scopeListadoPostPublicados($query)
    {
        return $query->where('state_id', '1')->orderBy('created_at', 'desc');
    }


    public function scopeUltimosPostPublicados($query)
    {
        return $query->where('state_id', '1')->latest();
    }


    public function user()//$post->user->nombre
    { 
        return $this->belongsTo('App\User'); //Un post pertenece a un usuario
    }


    public function category()//$post->categoria->nombre
    { 
        return $this->belongsTo('App\Category'); //Un post pertenece a una categoría.
    }


    public function comment()
    {
        return $this->hasMany('App\Comment');// Un Post puede tener muchos comentarios
    }

    
    public function state()
    {
        return $this->belongsTo('App\State'); //Un estado pertenece a un post.
    }


}
