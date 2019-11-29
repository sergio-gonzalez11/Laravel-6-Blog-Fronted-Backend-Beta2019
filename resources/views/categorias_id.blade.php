@extends('layouts.app')

@section('categorias')
<div class="container">

    <div class="row d-flex justify-content-center">

        @foreach ($post_categorias as $item)

        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8">

            <div class="container">
                <div class="post-single">
                    <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{ $item->created_at->format('d-m-Y') }}</div>
                    <div class="category"><a href="#">{{ $item->category->name_category}}</a></div>
                    </div>
                        <h1>{{ $item->title }}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                        <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#"
                                class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="{{ asset('storage').'/'.$item->user->image }}" alt="..."
                                        class="img-fluid"></div>
                                <div class="title"><span>{{ $item->user->name }}</span></div>
                            </a>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="date"><i class="icon-clock"></i> {{ $item->created_at->diffForHumans() }}
                                </div>
                                <div class="views"><i class="icon-eye"></i> 500</div>
                                <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                            </div>
                        </div>
                        <div class="post-body">
                            <p class="lead">{{ $item->description_post }}</p>
                            <p> <img src="{{ asset('storage').'/'.$item->image }}" alt="..." class="img-fluid"></p>
                            <blockquote class="blockquote">
                                <p>{{ $item->recomendations }}</p>
                                <footer class="blockquote-footer">
                                    <cite title="Source Title">{{ $item->title }}</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        @endforeach
    </div>
    {{ $post_categorias->links() }}
</div>
@endsection
