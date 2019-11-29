@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" arial-label="Close"><span
                        aria-hidden="true">x</span></button>
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
                <div class="card-header">Editar Post</div>
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

                    <form method="POST" action="{{ route('blog.update', $post->id) }}" enctype="multipart/form-data">
                        {{ @method_field('PUT') }}
                        @csrf

                        <div class="form-group row">
                            <label for="full_name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                    name="description_post"
                                    value="{{ $post->description_post }}">{{ $post->description_post }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_address"
                                class="col-md-4 col-form-label text-md-right">{{ __('Recomendación') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="recomendations"
                                    value="{{ $post->recomendations }}">
                            </div>
                        </div>

                        <div class="form-group row" style="padding-left: 255px;">
                            <img class=" img-fluid" src="{{ asset('storage'). '/' .$post->image }}" alt="card image"
                                style="max-width: 327px; margin-bottom: 10px;">
                            <input type="file" class="form-control-file" name="image" value="{{ $post->image }}">
                        </div>

                        <div class="form-group row">
                            <label for="category_id"
                                class="col-md-4 col-form-label text-md-right">{{ __('Selecciona un estado') }}</label>
                            <div class="col-md-6">
                                <select name="state_id" id="state_id" class="form-control" required>
                                    @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 d-flex justify-content-between">
                            <button type="submit" class="btn btn-success btn-lg">
                                {{ __('Actualizar Post') }}
                            </button>
                            <a href="{{ url('/blog/show') }}" type="button" class="btn btn-warning btn-lg">
                                {{ __('Volver') }}
                            </a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
