<h1>Editar producto</h1>
<form action="/producto/{{$producto->id}}" method="post">
    @csrf
    @method('put')

    <label for="">Ingrese Nombre</label>
    <input type="text" name="nombre" value="{{$producto->nombre}}">
    <br/>
    <label for="">Ingrese Precio</label>
    <input type="number" name="precio" step="0.5" value="{{$producto->precio}}">
    <br/>
    <label for="">Cantidad</label>
    <input type="number" name="cantidad" value="{{$producto->cantidad}}">
    <br/>
    <label for="">Ingrese Imagen</label>
    <input type="text" name="imagen" value="{{$producto->imagen}}">
    <br/>
    <label for="">Ingrese Descripción</label>
    <textarea name="descripción" id="" cols="30" rows="10">{{$producto->id}}</textarea>
    <br/>
    <input type="submit" value="Modificar">
</form>