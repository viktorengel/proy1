@extends('layouts.base')

@section('titulo', 'Inicio')

@section('principal')

<div class="container"><h1> {{ $titulo }} </h1></div>

{{-- <h2>  {{ $imagenes[0] }}</h2> --}}


<div id="carouselExample" class="carousel slide container">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset ('banner/01.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset ('banner/02.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset ('banner/03.jpg') }}" class="d-block w-100" alt="...">
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
  </div>
@endsection