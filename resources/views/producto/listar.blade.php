@foreach ($productos as $prod)
    {{ $prod->nombre }}
@endforeach

<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>PRECIO</td>
        <td>CANTIDAD</td>
        <td>ST</td>
        <td>IMAGEN</td>
        <td>ACCIÓN</td>
    </tr>
</table>