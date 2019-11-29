@extends('layouts.app')

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style type="text/css">
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
    }

    .table-wrapper {
        background: #fff;
        padding: 20px;
        margin: 30px 0;
    }

    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }

    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }

    .search-box {
        position: relative;
        float: right;
    }

    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }

    .search-box input:focus {
        border-color: #3FBAE4;
    }

    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }

    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table td:last-child {
        width: 130px;
    }

    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }

    table.table td a.publicado {
        color: green;
    }

    table.table td a.despublicado {
        color: #E34724;
    }

    table.table td a.view {
        color: #03A9F4;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #E34724;
    }

    table.table td i {
        font-size: 19px;
    }

</style>

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

@section('listado')
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

<div class="container" style="margin-top:-50px;">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Listado de <b>Posts</b></h2>
                </div>
                <div class="col-sm-4">
                    <form method="GET" action="{{ url('/blog/show') }}" class="search-form">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" name="title" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (count($user) > 0)
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>nº</th>
                <th>Titulo del post</th>
                <th>Creado</th>
                <th>Estado</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->created_at->format('d-m-Y') }}</td>
                <td>
                    @if($row->state->id == 1)
                        <span class="badge badge-success">{{ $row->state->name }}</span>
                    @elseif($row->state->id == 2)
                        <span class="badge badge-danger">{{ $row->state->name }}</span>
                    @endif
                </td>
                <td>
                    <a href="{{ url('/blog/buscarPostId', $row->id) }}" class="View" title="Ver Post"
                        data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>

                    <a href="{{ route('blog.editar_post', $row->id) }}" class="edit" title="Editar Post"
                        data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                        <form action="{{ route('eliminar_post', ['id' => $row->id]) }}" class="d-inline form-eliminar" method="POST">
                        @csrf 
                        @method("delete")

                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                        <i class="material-icons">delete</i>
                                    </button>
                        
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container mt-5">
        <div class="row">
            {{ $user->links() }}
        </div>
    </div>

    @else
    <p>No se encontraron resultados, vuelva a intentarlo!</p>

    @endif

</div>
</div>
@endsection
