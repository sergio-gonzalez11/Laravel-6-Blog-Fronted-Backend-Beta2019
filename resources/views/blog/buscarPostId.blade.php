@extends('layouts.app')

@section('postId')
<div class="container">

    <div class="row">

        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8">

            <div class="container">
                <div class="post-single">
                    <div class="post-details">

                        <div class="post-meta d-flex justify-content-between">
                            <div class="category"><a href="#"></a><a href="#">
                                    <p>{{ $postId->category->name_category }}</p>
                                </a>
                            </div>
                        </div>
                        <h1>{{ $postId->title }}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                        <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#"
                                class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="{{ asset('storage').'/'.$postId->user->image }}" alt="..."
                                        class="img-fluid"></div>
                                <div class="title"><span>{{ $postId->user->name }}</span></div>
                            </a>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="date"><i class="icon-clock"></i> {{ $postId->created_at->diffForHumans() }}
                                </div>
                                <div class="comments meta-last"><i class="icon-comment"></i>({{ $postId->comment->count() }})</div>
                            </div>
                        </div>
                        <div class="post-body">
                            <p class="lead">{{ $postId->description_post }}</p>
                            <p> <img src="{{ asset('storage').'/'.$postId->image }}" alt="..." class="img-fluid" style="box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);"></p>
                            <blockquote class="blockquote">
                                <p>{{ $postId->recomendations }}</p>
                                <footer class="blockquote-footer">
                                    <cite title="Source Title">{{ $postId->title }}</cite>
                                </footer>
                            </blockquote>
                        </div>

                        <div class="post-comments">
                            <header>
                                <h3 class="h6">Mensajes<span class="no-of-comments">
                                ({{ $postId->comment->count() }})</span></h3>
                            </header>
                           @foreach ($comment as $ca)
                            <div class="comment">
                                <div class="comment-header d-flex justify-content-between">
                                    <div class="user d-flex align-items-center">
                                        <div class="image"><img src="{{ asset('storage').'/'.$ca->user->image }}" alt="..."
                                                class="img-fluid rounded-circle"></div>
                                        <div class="title"><strong>{{ $ca->user->name }}</strong><span class="date">{{ \Carbon\Carbon::parse($ca->date)->format('d/m/Y') }}</span></div>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <p>{{ $ca->description }}</p>
                                </div>
                            </div>
                          @endforeach
                        </div>
                        
                        @include('blog.partials.crearComentario')

                    </div>

                </div>
            </div>
        </main>
    </div>
</div>
@endsection
