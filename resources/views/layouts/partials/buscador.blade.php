<!-- Widget [Search Bar Widget]-->
<div class="widget search">
    <header>
        <h3 class="h6">Buscar en el blog</h3>
    </header>
    <form method="GET" action="{{ route('home') }}" class="search-form">
        <div class="form-group">
            <input type="search" name="title" placeholder="Qué estás buscando?">
            <button type="submit" class="submit"><i class="icon-search"></i></button>
        </div>
    </form>
</div>
