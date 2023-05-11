@extends('layouts.base')

@section('titulo', 'Inicio')

@section('principal')

<div class="container">
  <h1>
  </h1>
</div>

{{-- <h2>  {{ $imagenes[0] }}</h2> --}}

{{-- @include('layouts.parts.carrusel') --}}

<h1 class="big text-center" data-aos="fade-down" data-aos-delay="0" style="padding-top: 50px;padding-bottom: 25px;">
  {{ $titulo }} 
</h1>
<div class="mw-auto mx-auto mt-30 f-22 color-heading text-center text-adaptive" data-aos="fade-down" data-aos-delay="250">
  <div>
      <img src="logoiep.jpg" alt="Logo IEP"  class="img-fluid" data-aos="fade-down" data-aos-delay="0" >
  </div>
</div>

<!-- Showcase 1 -->
<section class="pt-50 pb-50 bg-light showcase_1">
  <div class="container px-xl-0">
      <div class="row justify-content-center text-center">
          <div class="col-xl-8 col-lg-10">
              <h2 class="small" data-aos="fade-down" data-aos-delay="0">
                  Matriculas IEP 2022 - 2023
              </h2>
              <div class="mt-15 mb-30 f-22 color-heading text-adaptive description" data-aos="fade-down" data-aos-delay="250">
                  Requisitos para la legalización de la matrícula 
              </div>
              <div class="buttons" data-aos="fade-down" data-aos-delay="500">
                  <a href="./documents/LEGALIZACION DE MATRICULAS IEP 22-23.pdf" class="btn mt-25 mx-15 action-2" target="_blank">
                      Legalización de matricula .pdf
                  </a>
                  <a href="./documents/REGISTRO ACUMULATIVO 22-23.pdf" class="btn mt-25 mx-15 action-2" target="_blank">
                      Registro acumulativo .pdf
                  </a>
                  <a href="./documents/ACTA COMPROMISO IEP 22-23.pdf" class="btn mt-25 mx-15 action-2" target="_blank">
                      Acta Compromiso DECE .pdf
                  </a>
                  <a href="./documents/FICHA DE SEGUIMIENTO IEP 22-23.pdf" class="btn mt-25 mx-15 action-2" target="_blank">
                      Ficha de seguimiento .pdf
                  </a>
                  <a href="./documents/ACTA DE COMPROMISOS IEP 2022-2023 INSPECCION.pdf" class="btn mt-25 mx-15 action-2" target="_blank">
                      Acta compromiso Insp .pdf
                  </a>
                  <a href="./documents/FICHA INSPECCION 2022.pdf" class="btn mt-25 mx-15 action-2" target="_blank">
                      Ficha Inspección .pdf
                  </a>
              </div>
          </div>
      </div>
      <!-- <div class="mt-10 row justify-content-center text-center text-md-left">
          <div class="mt-70 col-lg-4 col-md-6 col-sm-9 block" data-aos="fade-down" data-aos-delay="0">
              <a href="#" class="d-block link img_link">
                  <img src="i/showcase_1_img_1.jpg" srcset="i/showcase_1_img_1@2x.jpg 2x" alt="" class="img-fluid radius10">
              </a>
              <a href="#" class="link mt-20 mb-10 f-22 color-main title">
                  iPhone Features
              </a>
              <div class="color-heading text-adaptive">
                  Startup Framework works fine on devices supporting Retina Display. Feel the clarity!
              </div>
          </div>
          <div class="mt-70 col-lg-4 col-md-6 col-sm-9 block" data-aos="fade-down" data-aos-delay="250">
              <a href="#" class="d-block link img_link">
                  <img src="i/showcase_1_img_2.jpg" srcset="i/showcase_1_img_2@2x.jpg 2x" alt="" class="img-fluid radius10">
              </a>
              <a href="#" class="link mt-20 mb-10 f-22 color-main title">
                  Bootstrap Based Design
              </a>
              <div class="color-heading text-adaptive">
                  HTML layout is based on one of the most common and reliable framework - Bootstrap.
              </div>
          </div>
          <div class="mt-70 col-lg-4 col-md-6 col-sm-9 block" data-aos="fade-down" data-aos-delay="500">
              <a href="#" class="d-block link img_link">
                  <img src="i/showcase_1_img_3.jpg" srcset="i/showcase_1_img_3@2x.jpg 2x" alt="" class="img-fluid radius10">
              </a>
              <a href="#" class="link mt-20 mb-10 f-22 color-main title">
                  Prototyping
              </a>
              <div class="color-heading text-adaptive">
                  We used only time-tested technologies for 
                  <br>the best results.
              </div>
          </div>
          <div class="mt-70 col-lg-4 col-md-6 col-sm-9 block" data-aos="fade-down" data-aos-delay="0">
              <a href="#" class="d-block link img_link">
                  <img src="i/showcase_1_img_4.jpg" srcset="i/showcase_1_img_4@2x.jpg 2x" alt="" class="img-fluid radius10">
              </a>
              <a href="#" class="link mt-20 mb-10 f-22 color-main title">
                  More than Image
              </a>
              <div class="color-heading text-adaptive">
                  We prepared some high-quality photos, that you can use in your projects.
              </div>
          </div>
          <div class="mt-70 col-lg-4 col-md-6 col-sm-9 block" data-aos="fade-down" data-aos-delay="250">
              <a href="#" class="d-block link img_link">
                  <img src="i/showcase_1_img_5.jpg" srcset="i/showcase_1_img_5@2x.jpg 2x" alt="" class="img-fluid radius10">
              </a>
              <a href="#" class="link mt-20 mb-10 f-22 color-main title">
                  Startup Framework Generator
              </a>
              <div class="color-heading text-adaptive">
                  Startup Framework contains components 
                  <br>and complex blocks which can easily.
              </div>
          </div>
          <div class="mt-70 col-lg-4 col-md-6 col-sm-9 block" data-aos="fade-down" data-aos-delay="500">
              <a href="#" class="d-block link img_link">
                  <img src="i/showcase_1_img_6.jpg" srcset="i/showcase_1_img_6@2x.jpg 2x" alt="" class="img-fluid radius10">
              </a>
              <a href="#" class="link mt-20 mb-10 f-22 color-main title">
                  More than Design
              </a>
              <div class="color-heading text-adaptive">
                      Carefully crafted precise design, with harmonious typography and perfect padding.
              </div>
          </div>
      </div> -->
  </div>
</section>
<!-- Feature 1 -->
<section class="pt-50 pb-30 bg-light text-center feature_1">
  <div class="container px-xl-0">
      <div class="row justify-content-center">
          <div class="col-xl-10">
              <h2 class="mb-45 small" data-aos="fade-down" data-aos-delay="0">
                  Oferta Académica IEP
              </h2>
              <div class="row justify-content-center">
                  <div class="col-md-4 mb-50" data-aos="fade-down" data-aos-delay="250">
                      <i class="fas fas fa-book-reader f-60 action-3">
                      </i>
                      <div class="mt-20 mb-25 f-22 title">
                          Educación General Básica Superior
                          <br>EGB
                      </div>
                      <div class="color-heading text-adaptive">
                          Estudiantes de: 
                          <br>8vo, 9no y 10mo.
                      </div>
                  </div>
                  <div class="col-md-4 mb-50" data-aos="fade-down" data-aos-delay="500">
                      <i class="fas fad fa-users f-60 action-3">
                      </i>
                      <div class="mt-20 mb-25 f-22 title">
                          Bachillerato General Unificado 
                          <br>BGU
                      </div>
                      <div class="color-heading text-adaptive">
                          Estudiantes de: 
                          <br>1ro, 2do y 3ro.
                      </div>
                  </div>
                  <div class="col-md-4 mb-50" data-aos="fade-down" data-aos-delay="750">
                      <i class="fas fa-laptop f-60 action-3">
                      </i>
                      <div class="mt-20 mb-25 f-22 title">
                          Bachillerato Técnico en Informática
                          <br>BTI
                      </div>
                      <div class="color-heading text-adaptive">
                          Estudiantes de: 
                          <br>1ro, 2do y 3ro.
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Content 2 -->
<section class="pt-30 pb-50 bg-light content_2">
  <div class="container px-xl-0 text-center">
      <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10">
              <h2 data-aos="fade-down" data-aos-delay="0">
                  Ingenio, Esfuerzo y Pasión
              </h2>
          </div>
          <div class="col-xl-7 col-lg-9 col-md-10">
              <div class="mt-35 f-18 medium color-heading op-7 text-adaptive" data-aos="fade-down" data-aos-delay="250">
                  Nuestro lema, lo llevamos cada día en la mente y en el corazón
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Application 2 -->
<section class="pt-50 pb-50 bg-light application_2">
  <div class="container px-xl-0">
      <div class="row justify-content-center justify-content-md-between align-items-center">
          <div class="mb-15 mb-md-0 col-12 col-md-5 col-xl-6 d-flex justify-content-center">
              <img src="i/application_2_img_1.png" srcset="i/application_2_img_1@2x.png 2x" alt="" class="img-fluid application_2_left_img" data-aos="fade-down" data-aos-delay="500">
          </div>
          <div class="col-md-7 col-xl-6">
              <h2 class="col-lg-11 color-main" data-aos="fade-down" data-aos-delay="0">
                  Orgullosos de nuestra Institución
              </h2>
              <div class="mt-25 col-lg-9 color-heading f-18 text-adaptive" data-aos="fade-down" data-aos-delay="0">
                  Con Ingenio, Esfuerzo y Pasión hacemos que cada día sea mucho mejor.
              </div>
              <div class="mt-45 row">
                  <div class="col-6 col-lg-4 pb-25 with_borders" data-aos="fade-down" data-aos-delay="250">
                      <!-- <img src="i/application_2_img_2.png" srcset="i/application_2_img_2@2x.png 2x" alt="" class="pl-15"> -->
                      <i class="fas fa-chalkboard-teacher f-60 action-4 pl-30">
                      </i>
                      <div class="mt-15 col-xl-11 color-main f-14 bold sp-20 text-uppercase">
                          Compromiso Docente
                      </div>
                  </div>
                  <div class="col-6 col-lg-4 pb-25 with_borders" data-aos="fade-down" data-aos-delay="250">
                      <!-- <img src="i/application_2_img_3.png" srcset="i/application_2_img_3@2x.png 2x" alt="" class="pl-15"> -->
                      <i class="fas fa-award f-60 action-4 pl-30"></i>
                      <div class="mt-15 col-xl-11 color-main f-14 bold sp-20 text-uppercase">
                          Calidad Educativa
                      </div>
                  </div>
                  <div class="col-6 col-lg-4 pb-25 with_borders" data-aos="fade-down" data-aos-delay="500">
                      <!-- <img src="i/application_2_img_4.png" srcset="i/application_2_img_4@2x.png 2x" alt="" class="pl-15"> -->
                      <i class="fas fa-graduation-cap f-60 action-4 pl-30"></i>
                      <div class="mt-15 col-xl-11 color-main f-14 bold sp-20 text-uppercase">
                          Excelentes Resultados
                      </div>
                  </div>
                  <div class="col-6 col-lg-4 pb-25 pt-35 with_borders" data-aos="fade-down" data-aos-delay="500">
                      <!-- <img src="i/application_2_img_5.png" srcset="i/application_2_img_5@2x.png 2x" alt="" class="pl-15"> -->
                      <i class="fas fa-microscope f-60 action-4 pl-30"></i>
                      <div class="mt-15 col-xl-11 color-main f-14 bold sp-20 text-uppercase">
                          Investigación Científica
                      </div>
                  </div>
                  <div class="col-6 col-lg-4 pb-25 pt-35 with_borders" data-aos="fade-down" data-aos-delay="750">
                      <!-- <img src="i/application_2_img_6.png" srcset="i/application_2_img_6@2x.png 2x" alt="" class="pl-15"> -->
                      <i class="fas fa-school f-60 action-4 pl-30"></i>
                      <div class="mt-15 col-xl-11 color-main f-14 bold sp-20 text-uppercase">
                          Espacios de Aprendizaje
                      </div>
                  </div>
                  <div class="col-6 col-lg-4 pb-25 pt-35 with_borders" data-aos="fade-down" data-aos-delay="750">
                      <!-- <img src="i/application_2_img_7.png" srcset="i/application_2_img_7@2x.png 2x" alt="" class="pl-15"> -->
                      <i class="fas fa-users-cog f-60 action-4 pl-30"></i>
                      <div class="mt-15 col-xl-11 color-main f-14 bold sp-20 text-uppercase">
                          Pensamiento critico
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Team 1 -->
<section class="pt-50 pb-50 bg-light text-center team_1">
  <div class="container px-xl-0">
      <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-10">
              <h2 class="mb-20 small" data-aos="fade-down" data-aos-delay="0">
                  Nuestras Autoridades
              </h2>
              <div class="f-22 color-heading text-adaptive" data-aos="fade-down" data-aos-delay="250">
                  Concentran un esfuezo conjunto por el futuro de la juventud.
              </div>
              <div data-aos="fade-down" data-aos-delay="500">
                  <a href="#" class="btn mt-45 border-gray color-main">
                      Equipo de trabajo
                  </a>
              </div>
          </div>
      </div>
      <div class="mt-20 row justify-content-center">
          <div class="mt-60 col-lg-4 col-md-7 col-sm-10" data-aos="fade-down" data-aos-delay="0">
              <div class="radius10 pt-50 block">
                  <img src="i/team_1_img_1.jpg" srcset="i/team_1_img_1@2x.jpg 2x" alt="" class="radius_full">
                  <div class="mt-25 mb-15 f-22 title">
                      MSc. María Gloria De la Cruz
                  </div>
                  <div class="f-14 semibold text-uppercase sp-20 color-heading">
                      Rectora
                  </div>
                  <!-- <div class="mt-35 row no-gutters block_socials">
                      <div class="col-4 border_right">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-twitter">
                              </i>
                          </a>
                      </div>
                      <div class="col-4 border_right">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-facebook-square">
                              </i>
                          </a>
                      </div>
                      <div class="col-4">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-dribbble">
                              </i>
                          </a>
                      </div>
                  </div> -->
              </div>
          </div>
          <div class="mt-60 col-lg-4 col-md-7 col-sm-10" data-aos="fade-down" data-aos-delay="250">
              <div class="radius10 pt-50 block">
                  <img src="i/team_1_img_2.jpg" srcset="i/team_1_img_2@2x.jpg 2x" alt="" class="radius_full">
                  <div class="mt-25 mb-15 f-22 title">
                      Lic. Marco Loachamin
                  </div>
                  <div class="f-14 semibold text-uppercase sp-20 color-heading">
                      Inspector General
                  </div>
                  <!-- <div class="mt-35 row no-gutters block_socials">
                      <div class="col-4 border_right">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-twitter">
                              </i>
                          </a>
                      </div>
                      <div class="col-4 border_right">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-facebook-square">
                              </i>
                          </a>
                      </div>
                      <div class="col-4">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-dribbble">
                              </i>
                          </a>
                      </div>
                  </div> -->
              </div>
          </div>
          <div class="mt-60 col-lg-4 col-md-7 col-sm-10" data-aos="fade-down" data-aos-delay="500">
              <div class="radius10 pt-50 block">
                  <img src="i/team_1_img_3.jpg" srcset="i/team_1_img_3@2x.jpg 2x" alt="" class="radius_full">
                  <div class="mt-25 mb-15 f-22 title">
                      Lic. Josefina Minango
                  </div>
                  <div class="f-14 semibold text-uppercase sp-20 color-heading">
                      Secretaria
                  </div>
                  <!-- <div class="mt-35 row no-gutters block_socials">
                      <div class="col-4 border_right">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-twitter">
                              </i>
                          </a>
                      </div>
                      <div class="col-4 border_right">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-facebook-square">
                              </i>
                          </a>
                      </div>
                      <div class="col-4">
                          <a href="#" class="link f-22 lh-60 color-heading" target="_blank">
                              <i class="fab fa-dribbble">
                              </i>
                          </a>
                      </div>
                  </div> -->
              </div>
          </div>
      </div>
  </div>
</section>	

</main>
<!-- Footer 1 -->
<footer class="pt-50 pb-25 bg-light text-center footer_1">
  <div class="container px-xl-0">
      <div class="row justify-content-between align-items-center lh-40 links">
          <div class="col-lg-4 col-sm-6 text-sm-right text-lg-left order-1 order-lg-0" data-aos="fade-down" data-aos-delay="250">
              <a href="#" class="link mr-15 color-main">
                  Nosotros
              </a>
              <a href="#" class="link mx-15 color-main">
                  Normas
              </a>
              <a href="#" class="link mx-15 color-main">
                  Equipo
              </a>
          </div>
          <div class="mb-10 mb-lg-0 col-lg-auto order-0">
              <a href="https://iepomasqui.com" class="link img_link">
                  <img src="i/IEP.png" alt="Logo IEP" class="img-fluid" data-aos="fade-down" data-aos-delay="0">
              </a>
          </div>
          <div class="col-lg-4 col-sm-6 text-sm-left text-lg-right order-2 order-lg-0" data-aos="fade-down" data-aos-delay="250">
              <a href="/formcont.php" class="link mr-15 color-main">
                  Contactenos
              </a>
              <!-- <a href="#" class="mx-15 link color-main">
                  <i class="fab fa-twitter">
                  </i>
              </a> -->
              <a href="https://www.facebook.com/colegio.pomasqui" class="mx-15 link color-main">
                  <i class="fab fa-facebook-square">
                  </i>
              </a>
              <!-- <a href="#" class="ml-15 link color-main">
                  <i class="fab fa-google-plus-g">
                  </i>
              </a> -->
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="mt-10 col-xl-4 col-lg-5 col-md-6 col-sm-8" data-aos="fade-down" data-aos-delay="0">
              <div class="color-heading text-adaptive">
                  © 2022 IEPomasqui.
                  <br> Todos los derechos reservados.
              </div>
              <div class="mt-50 f-14 light color-white op-3 copy">
                  © 2022 IEPomasqui. Todos los derechos reservados.
              </div>
          </div>
      </div>
  </div>
</footer>

@endsection