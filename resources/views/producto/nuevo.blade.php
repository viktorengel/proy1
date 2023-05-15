@extends('layouts.base')

@section('titulo', 'Inicio')

@section('principal')

<div class="container">
    <h1>Crear nuevo productos</h1>
    <form action="/producto" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Ingrese Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto">
        </div>
        <br>
        <div class="mb-3">
        <label for="">Ingrese Precio</label>
        <input type="number" name="precio" step="0.5" class="form-control" placeholder="Precio">
        </div>
        <br>
        <div class="mb-3">
        <label for="">Cantidad</label>
        <input type="number" name="cantidad" class="form-control" placeholder="Cantidad">
        </div>
        <br>
        <div class="mb-3">
        <label for="">Ingrese Imagen</label>
        {{-- <input type="text" name="imagen" class="form-control" placeholder="Imagen"> --}}
        <input type="file" name="imagen">
        </div>
        <br>
        <div class="mb-3">
        <label for="">Ingrese Descripción</label>
        <textarea name="descripción" id="" cols="10" rows="3" class="form-control" placeholder="Descripción"></textarea>
        </div>
        <br>
        {{-- <input type="submit" class="btn btn-primary"> --}}
        <input type="submit"  class="btn btn-primary">
        
    </form>
</div>
@endsection