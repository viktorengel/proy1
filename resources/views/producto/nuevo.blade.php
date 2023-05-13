<form action="/producto" method="post">
    @csrf
    <label for="">Ingrese Nombre</label>
    <input type="text" name="nombre">
    <br/>
    <label for="">Ingrese Precio</label>
    <input type="number" name="precio" step="0.5">
    <br/>
    <label for="">Cantidad</label>
    <input type="number" name="cantidad">
    <br/>
    <label for="">Ingrese Imagen</label>
    <input type="text" name="imagen">
    <br/>
    <label for="">Ingrese Descripción</label>
    <textarea name="descripción" id="" cols="30" rows="10"></textarea>
    <br/>
    <input type="submit">
</form>