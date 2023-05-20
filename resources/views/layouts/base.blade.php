<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEP - Institución Educativa Pomasqui</title>
    <meta charset="utf-8" >
    <META NAME="REPLY-TO" CONTENT="17h01988@gmail.com">
    <LINK REV="made" href="mailto:17h01988@gmail.com">
    <META NAME="DESCRIPTION" CONTENT="La Institución Educativa Pomasqui es un lugar donde los estudiantes pueden adquirir conocimientos, habilidades y valores que les permitirán tener éxito en sus futuros estudios y en la vida.">
    <META NAME="KEYWORDS" CONTENT="Institucion,Educación,Educativa,Colegio,Pomasqui,Quito,Técnico,bachillerato">
    <META NAME="Resource-type" CONTENT="Document">
    <META NAME="DateCreated" CONTENT="Thu, 1 September 2022 00:00:00 GMT-5">
    <META NAME="Revisit-after" CONTENT="1 days">
    <META NAME="robots" content="ALL">
    <link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon">
    
    <title> @yield("titulo") | IEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- AOS 2.3.4 jQuery plugin CSS (Animations) -->
    <!-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"> -->
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script src="https://kit.fontawesome.com/a551737ba0.js" crossorigin="anonymous"></script>
    <!-- jQuery 3.5.1 -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
        <!-- Startup CSS (Styles for all blocks) - Remove ".min" if you would edit a css code -->
        <link rel="stylesheet" href="{!! asset('css/style.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/framework.min.css') !!}">

  </head>
  <body>
    {{-- <h1>Hello, EcuaFix!</h1> --}}

    @include('layouts.parts.menu')

    @yield('principal')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  </body>
</html>

