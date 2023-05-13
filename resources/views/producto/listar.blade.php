
<a href="/productos/crear">Nuevo producto</a>

<table border="1">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>PRECIO</td>
            <td>CANTIDAD</td>
            <td>ST</td>
            <td>IMAGEN</td>
            <td>ACCIÓN</td>
        </tr>
    @foreach ($productos as $prod)
        <tr>
            <td>{{ $prod -> id }}</td>
            <td>{{ $prod -> nombre }}</td>
            <td>{{ $prod -> precio }}</td>
            <td>{{ $prod -> cantidad }}</td>
            <td>{{ $prod -> cantidad * $prod -> precio }}</td>
            <td><img src="{{  $prod -> imagen }}" alt="" width="100px"></td>
            <td><a href="">editar</a></td>
        </tr>
    @endforeach
</table>