@extends('layouts.base')

@section('titulo', 'Inicio')

@section('principal')
<div class="container">
    <h1>Editar producto</h1>
    <form action="/producto/{{$producto->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <label for="">Ingrese Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
        <br/>
        <label for="">Ingrese Precio</label>
        <input type="number" name="precio" class="form-control" step="0.01" value="{{$producto->precio}}">
        <br/>
        <label for="">Cantidad</label>
        <input type="number" name="cantidad" class="form-control" step="1" value="{{$producto->cantidad}}">
        <br/>
        <label for="">Ingrese Imagen</label>
        {{-- <input type="text" name="imagen" class="form-control" value="{{$producto->imagen}}"> --}}
        <input type="file" name="imagen" class="form-control" value="{{$producto->imagen}}>
        <br/>
        <label for="">Ingrese Descripción</label>
        <textarea name="descripción" class="form-control" cols="10" rows="3">{{$producto->id}}</textarea>
        <br/>
        <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
            <input type="submit" class="btn btn-warning btn-block" value="Modificar">
            <input type="submit"  class="btn btn-danger" value="CANCEL" />
        </div>
    </form>
</div>
@endsection