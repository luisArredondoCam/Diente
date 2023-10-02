@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center d-none">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('../registros') }}" class="btn btn-info">Mostrar registros</a>
            </div>
            <div class="col-md-6">
                <form action="{{ route('search.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Valor</th>
                        <th>Icon</th>
                        <td>
                            <a href="{{ url('/admin/create') }}" class="btn btn-warning">Crear</a>
                        </td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($info_web as $value)
                    <tr {{ $value->estado=="OFF" ? "class=table-danger" : "" }}>
                        <td>{{ $value->clave }}</td>
                        <td>{{ $value->valor }}</td>
                        <td>{{ $value->icon }}</td>
                        <td>
                            <a href="{{ url('/admin/editar/'.$value->id) }}" class="btn btn-success">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                @if ($info_web->currentPage() > 1)
                <a href="{{ $info_web->previousPageUrl() }}" class="page-link"><i class="fa-solid fa-arrow-left"></i> Anterior</a>
                @endif

                @if ($info_web->hasMorePages())
                <span class="pagination-space"></span>
                <a href="{{ $info_web->nextPageUrl() }}" class="page-link">Siguiente <i class="fa-solid fa-arrow-right"></i></a>
                @endif
            </div>
            <style>
                .pagination-space {
                    margin: 0 10px;
                }
                .page-link{
                    border-radius: 10px;
                }
            </style>
        </div>
    </div>
</div>
@endsection