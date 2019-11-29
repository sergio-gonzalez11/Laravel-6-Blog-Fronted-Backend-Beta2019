<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use Carbon\Carbon;
use \Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EditarUserRequest;

class UserController extends Controller
{
    
    public function index($id)
    {
        if (Auth::check() == true)
        {
            $id = Auth::id();
            $user_perfil = User::find($id);

            $user = Post::where('user_id', $id)->get();
            
        }else{

            return 'Página no encontrada';
        }

        return view('/user/index', compact('user_perfil', $user_perfil, 'user', $user));
    }


    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(EditarUserRequest $request, $id)
    {
        $id = Auth::id();
        
        $datosPerfil = new User();

        if($request->has(['name', 'last_name']))
        {
            $datosPerfil = request()->all(); 
            // $datosPerfil['password'] = Hash::make($request['password']);
            $datosPerfil['updated_at'] = Carbon::now();
        }

        $user = User::find($id)->update($datosPerfil);
    
        return back()->with('mensaje', 'Datos actualizados correctamente');
    }

 
    
    public function destroy($id)
    {
        //
    }
}
