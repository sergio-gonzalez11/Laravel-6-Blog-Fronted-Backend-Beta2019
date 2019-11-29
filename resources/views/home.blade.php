@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8">
            <div class="container">

                <div class="row">

                    @foreach ($post as $row)

                    <!-- post             -->
                    <div class="post col-xl-6">
                        <div class="post-thumbnail"><a href=""><img src="{{ asset('storage').'/'.$row->image }}" alt="..." class="img-fluid" style="width:350px; height:250px;box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date meta-last">{{ $row->created_at->format('d-m-Y') }}</div>
                                <div class="category"><a href="#">{{ $row->category->name_category}}</a></div>
                            </div><a href="{{ url('/blog/buscarPostId', $row->id) }}">
                                <h3 class="h4">{{ $row->title }}</h3>
                            </a>
                            <p class="text-muted">{{ $row->description }}</p>
                            <div class="post-footer d-flex align-items-center"><a href="#"
                                    class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar"><img src="{{ asset('storage').'/'.$row->user->image }}"
                                            alt="..." class="img-fluid"></div>
                                    <div class="title"><span>{{ $row->user->name }}</span></div>
                                </a>
                                <div class="date"><i class="icon-clock"></i>{{ $row->created_at->diffForHumans() }}
                                </div>
                                <div class="comments meta-last"><i class="icon-comment"></i>{{ $row->comment->count() }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">

                    {{ $post->links() }}
                
                </div>
            </div>
        
        </main>

        <aside class="col-lg-4">
        
            @include('layouts.partials.buscador')
            @include('layouts.partials.latest_posts')
            @include('layouts.partials.categorias')

        </aside>

    </div>
</div>
@endsection
