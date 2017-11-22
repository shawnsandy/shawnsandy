@php
$theme_class = "cover-page";
jarvis_theme("shawnsandy");
@endphp

@extends(jarvis_views('layouts.main'))
@push("styles")

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
<link rel="stylesheet" href="/css/shawnsandy/app.css">
@endpush

@section('content')
<header class="header">
    <section class="hero">
        <div class="hero-body has-text-centered" data-aos="fade"  data-aos-duration="3000">
            <div class="section is-medium">
                <img src="/img/site-cover.png" alt="Shawn Sandy Fullstack Designer">
            </div>
            <div class="container">
            <div class="columns">
            <div class="column">
                <p class="is-size-1 has-text-centered feature-text" data-aos="fade-up" data-aos-duration="800">Hi, I’m a full stack freelance FRONT END DESIGNER &amp; DEVELOPER, with a passion for building applications that actively engage users in responsive thought.
                </p>
            </div>
            </div>
        </div>
        <div class="section is-medium has-text-centered flex-center" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="1000">
            <div class="section-marker"><i class="im im-angle-down"></i></div>
        </div>
    </section>
</header>

{{--  <section class="pitch is-medium">
@include(jarvis_views("components.pitch"))
</section>  --}}

<main class="projects">
   @include(jarvis_views("components.projects"))
</main>

<section class="info post-section">
<div class="section is-paddingless">
    <div class="columns is-marginless">

        <div class="column is-paddingless">
            <div class="container is-fluid">
                <div class="section">

                @include(jarvis_views("components.articles"))
                @include(jarvis_views("components.connect"))


                </div>
            </div>
        </div>

        <div class="column about is-paddingless">
         @include(jarvis_views("components.about"))
        </div>

    </div>
</div>

</section>
<div>
            <a data-scroll="" href="#body" class="back-to-top animated bounceInUp">
  <i class="im im-arrow-up-circle is-2"></i>
  </a>
        </div>
@endsection
@push("scripts")
<script src="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.min.js"></script>
  <script>
    AOS.init();
  </script>
@endpush
