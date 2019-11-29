<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\State;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
// Uso storage, porque a las fotos las e agregado una ruta con php artisan storage:link
use Storage;

use App\Http\Requests\CrearPostRequest;
use App\Http\Requests\EditarPostRequest;

class PostController extends Controller
{
    
    public function index(Request $request)
    {
        
        if (Auth::check())
        {
            //Para el scope
            $title = $request->get('title');

            $user = Post::where('user_id', Auth::id())
            ->title($title)
            ->paginate(5);

        }else
        {
            return 'Página no encontrada';
        }

        
        return view('blog.show', compact('user', $user));
    }

    

    public function create()
    {

        $category = Category::all();

        return view('blog.crear', compact('category', $category));
    }

    

    public function store(CrearPostRequest $request)
    {
       
        $datosPost = request()->except(['_token']);

        if($request->hasFile('image'))
        {
            $datosPost['image'] = $request->file('image')->store('uploads', 'public');
        }

        $datosPost['created_at'] = Carbon::now();
        $datosPost['updated_at'] = Carbon::now();

        Post::create($datosPost);
        
        return back()->with('mensaje', 'Post creado correctamente');
    }


    
    public function show()
    {
        
    }

    
    public function edit($id)
    {

        $post = Post::findOrFail($id);
        $states = State::all();

        return view('blog.edit', compact('post','states'));
    
    }

    
    public function update(EditarPostRequest $request, $id)
    {
        
        $post_seleccionado = request()->except(['_token', '_method']);

        if($request->hasFile('image')){

            //Buscamos el objeto para borrar su foto guardada en el sistema
            $post = Post::findOrFail($id);
            
            Storage::delete('public/'.$post->image);

            $post_seleccionado['image'] = $request->file('image')->store('uploads', 'public');

        }

        Post::where('id', '=' , $id)->update($post_seleccionado);

        
        return redirect('/blog/show')->with('mensaje', 'Post actualizado correctamente');
    }



    public function destroy($id)
    {
        //Buscamos el objeto para borrar su foto guardada en el sistema
        $post = Post::findOrFail($id);

        Post::destroy($id);
        
        if(Storage::delete('public/'.$post->image)){

            Post::destroy($id);
        
        }
        
        return back()->with('mensaje', 'Post eliminado correctamente');
    }
    

}
