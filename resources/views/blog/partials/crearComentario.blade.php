<div class="add-comment">
    <header>
        <h3 class="h6">Deja una respuesta</h3>
    </header>
    <form method="POST" action="{{ route('blog.crearComentario', $postId->id) }}" class="commenting-form">
        @csrf
        <div class="row">
            <div class="form-group col-md-12">
                <textarea name="description" id="description" placeholder="Comentario" class="form-control"></textarea>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </div>
        </div>
    </form>
</div>
