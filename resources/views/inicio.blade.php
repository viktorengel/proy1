@extends('layouts.base')

@section('principal')
<h1>Home Page Laravel</h1>

<h2>{{ $titulo }}</h2>

<h3>{{ $imagenes[0] }}</h3>

{{ count($imagenes) }}

@if (count($imagenes)>0)

<table border="2">
  <tr>
    @foreach ($imagenes as $img)
    <td>
      <img src="{{ $img }}" alt="" width="150">
    </td>
    @endforeach
  </tr>
  @endif
</table>

@php
    $prueba = "Un valor";

    echo $prueba;
@endphp

{{-- <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://img.freepik.com/vector-premium/banner-diseno-colorido-azul-oscuro-digital-tecnologia-red_181182-33509.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://img.freepik.com/vector-gratis/fondo-banner-tecnologia-formas-hexagonales-espacio-texto_1017-22589.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://thumbs.dreamstime.com/b/tecnolog%C3%ADa-engranajes-ordenador-banner-fondo-fuente-circuito-futurista-c%C3%ADrculo-azul-rel%C3%A1mpago-electricidad-abstracto-vector-220508888.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}


@endsection