<!-- Widget [Categories Widget]-->
<div class="widget categories">
    <header>
        <h3 class="h6">Categorias</h3>
    </header>

    @foreach ($categories as $cat)

    <div class="item d-flex justify-content-between"><a
            href="{{ url('/categorias_id', $cat->id) }}">{{ $cat->name_category }}</a></div>

    @endforeach
</div>
