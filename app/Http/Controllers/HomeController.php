<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Storage;

class HomeController extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
    {
        //Para el scope
        $title = $request->get('title');
        
        $post = Post::ListadoPostPublicados()->title($title)->paginate(6);
        $post_latest = Post::UltimosPostPublicados()->take(6)->get();
        $categories = Category::all();

        return view('home', compact('post', $post, 'post_latest', $post_latest,'categories', $categories));
    }

    

    public function buscarPostId($id)
    {
        $postId = Post::find($id);
        $comment = $postId->comment()->get();

        return view('/blog/buscarPostId', compact('postId', $postId, 'comment', $comment));
    }

    
    
    public function crearComentario(Request $request, $id)
    {
                
        $comentario = request()->except(['_token']);

        // $comentario['description'] = $request->get('description'); 
        $comentario['date'] = Carbon::now();
        $comentario['post_id'] = $id; 
        $comentario['user_id'] = Auth::user()->id;
        $comentario['created_at'] = Carbon::now();
        $comentario['updated_at'] = Carbon::now();

        Comment::insert($comentario);

        return back();

    }



    public function buscarPostPorCategorias($id)
    {    
        $post_categorias = Post::where('category_id', $id)->paginate(2);

        return view('/categorias_id', compact('post_categorias', $post_categorias));
    }



    public function show()
    {
        if (Auth::check() == true)
        {
            $id = Auth::id();

            $user = Post::where('user_id', $id)
            ->paginate(5);

        }else
        {
            return 'Página no encontrada';
        }

        
        return view('blog.show', compact('user', $user));
    }


    public function create()
    {
        
       
    }


}
