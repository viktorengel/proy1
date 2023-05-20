@extends('layouts.base')

@section('titulo', 'Inicio')

@section('principal')
<div class="container">
    <h1>Lista de productos</h1>
    <a href="/productos/crear">Nuevo producto</a>

    <table class="table table-responsive table-hover  table-bordered">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>ST</th>
                <th>IMAGEN</th>
                <th>ACCIÓN</th>
            </tr>
        @foreach ($productos as $prod)
            <tr>
                <td>{{ $prod -> id }}</td>
                <td>{{ $prod -> nombre }}</td>
                <td>{{ $prod -> precio }}</td>
                <td>{{ $prod -> cantidad }}</td>
                <td>{{ $prod -> cantidad * $prod -> precio }}</td>
                <td><img src="{{ $prod -> imagen }}" alt="" width="100px"></td>
                <td><a href="/productos/{{ $prod->id }}/editar">editar</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection