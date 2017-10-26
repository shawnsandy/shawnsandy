@php
$theme_class = "cover-page";
jarvis_theme("shawnsandy");
@endphp

@extends(jarvis_views('layouts.main'))
@push("styles")

<link rel="stylesheet" href="/css/shawnsandy/app.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
@endpush

@section('content')
<header class="header">
    <section class="hero">
        <div class="hero-body has-text-centered" data-aos="fade"  data-aos-duration="3000">
            <div class="section is-large">
                <img src="/img/site-cover.png">
            </div>
        </div>
        <div class="section is-medium has-text-centered flex-center" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="1000">
            <div class="section-marker"><i class="im im-angle-down"></i></div>
        </div>
    </section>
</header>
<section class="pitch is-medium">
@include(jarvis_views("components.pitch"))
</section>

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

@endsection
@push("scripts")
<script src="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.min.js"></script>
  <script>
    AOS.init();
  </script>
@endpush
