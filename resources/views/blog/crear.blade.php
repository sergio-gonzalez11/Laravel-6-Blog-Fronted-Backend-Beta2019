@extends('layouts.app')

@section('contenido')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('mensaje'))
                    <div class="alert alert-success alert-dismissible" role="alert" id="resultado">
                        <button type="button" class="close" data-dismiss="alert" arial-label="Close"><span aria-hidden="true">x</span></button>
                        {{ Session::get('mensaje') }}	
                    </div>
                @endif
            </div>
        </div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Post</div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif

                    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="full_name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Titulo del post') }}</label>
                            <div class="col-md-6">
                            <input type="hidden" class="form-control" name="user_id"
                                     value="{{ Auth::user()->id }}">

                                <input type="text" class="form-control" name="title"
                                    id="title" value="{{ old('title') }}" required
                                    autocomplete="title" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description_post"
                                class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="description_post" id="description_post"
                                    value="{{ old('description_post') }}" required autocomplete="description_post" autofocus></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_address"
                                class="col-md-4 col-form-label text-md-right">{{ __('Recomendación') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="recomendations" id="recomendations"
                                    value="{{ old('recomendations') }}" required autocomplete="recomendations" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id"
                                class="col-md-4 col-form-label text-md-right">{{ __('Selecciona una categoria') }}</label>
                            <div class="col-md-6">
                            <select name="category_id" id="category_id" class="form-control">

                            <?php
                                use App\Category;
                                $category = Category::all();
                            ?>
                            
                            <option>Elige una categoria</option>
                                @foreach ($category as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name_category }} </option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="image"
                                class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" name="image" id="image"
                                    value="{{ old('image') }}" required autocomplete="image" autofocus>
                            </div>
                        </div>

                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-lg-large">
                                {{ __('Crear Post') }}
                            </button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
