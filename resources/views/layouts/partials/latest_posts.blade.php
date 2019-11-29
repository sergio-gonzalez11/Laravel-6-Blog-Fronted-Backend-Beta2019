<!-- Widget [Latest Posts Widget]        -->
<div class="widget latest-posts">
    <header>
        <h3 class="h6">Últimos Posts</h3>
    </header>

    @foreach ($post_latest as $row)

    <div class="blog-posts"><a href="{{ url('/blog/buscarPostId', $row->id) }}">
            <div class="item d-flex align-items-center">
                <div class="image"><img src="{{ asset('storage').'/'.$row->image }}" alt="..." class="img-fluid"
                        style="width:60px; height:60px;"></div>
                <div class="title"><strong>{{ $row->title }}</strong>
                    <div class="d-flex align-items-center">
                        <div class="comments"><i class="icon-comment"></i>{{ $row->comment->count() }}</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    @endforeach

</div>
