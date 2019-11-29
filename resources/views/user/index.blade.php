@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('/css/perfil.css') }}">

@section('perfil')

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

<div class="container mt-5" id="body">

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    <div class="row">
        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3" id="sombraCard">
                <div class="author-card-cover"
                    style="background-image: url(https://www.freewebheaders.com/wp-content/gallery/water-coast/water-coast-header-47622-800x200.jpg);">
                </div>
                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="{{ asset('storage').'/'.$user_perfil->image }}" alt=" "
                            class="img-fluid">
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg">{{ $user_perfil->name }} {{ $user_perfil->last_name }}</h5>
                        <span class="author-card-position">Cuenta creada el
                            {{ $user_perfil->created_at->format('d-m-Y') }}</span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">
                    <a class="list-group-item" href="{{ url('/blog/show') }}">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Post
                                    <small>creados</small></div>
                            </div><span class="badge badge-secondary">{{ $user_perfil->post->count() }}</span>
                        </div>
                    </a>
                    <a class="list-group-item" href="">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Comentarios
                                    <small>recibidos</small></div>
                            </div><span class="badge badge-secondary">{{ $user_perfil->comment->count() }}</span>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <!-- Profile Settings-->
        <div class="col-lg-8 pb-5">
            <form class="row" method="POST" action="{{ route('actualizar_perfil', $user_perfil->id) }}">
                {{ @method_field('PUT') }}
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Nombre</label>
                        <input class="form-control" type="text" name="name" value="{{ $user_perfil->name }}" required
                            autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Apellidos</label>
                        <input class="form-control" type="text" name="last_name" value="{{ $user_perfil->last_name }}"
                            required autocomplete="last_name" autofocus>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">E-mail</label>
                        <input class="form-control" type="email" name="email" value="{{ $user_perfil->email }}"
                            disabled>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Ciudad</label>
                        <input class="form-control" type="text" id="account-ln" value="Adams" required="">
                    </div>
                </div> -->

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">Password</label>
                        <input class="form-control" type="password" name="password" value="{{ $user_perfil->password }}"
                            required autocomplete="new-password" id="account-pass" disabled>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Confirmar Password</label>
                        <input class="form-control" type="password" id="account-confirm-pass" required autocomplete="new-password">
                    </div>
                </div> -->
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-end align-items-center">
                        <button type="submit"
                            class="btn btn-style-1 btn-success sombraButtom">{{ __('Actualizar') }}</button>
                    </div>
                </div>
                </>
        </div>
    </div>
</div>
@endsection
