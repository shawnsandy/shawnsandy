@php $theme_class = "cover-page"; @endphp
@extends(jarvis_views('layouts.main'))
 @push("styles")

<link rel="stylesheet" href="/css/shawnsandy/app.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.2.0/dist/aos.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
@endpush

@section('content')
<header class="header">
    <section class="hero is-medium">

        <div class="hero-body has-text-centered" data-aos="fade"  data-aos-duration="3000">
            <div class="section is-large">
                <img src="/img/site-cover.png">
            </div>
        </div>
        <div class="section has-text-centered flex-center" data-aos="fade-down" data-aos-duration="1000">
            <div class="section-marker"><i class="im im-angle-down"></i></div>
        </div>

    </section>
</header>
<section class="pitch is-medium">
@include(jarvis_views("components.pitch", "shawnsandy"))
</section>

<main class="projects">
   @include(jarvis_views("components.projects", "shawnsandy"))
</main>

<section class="info post-section">
<div class="section is-paddingless">
    <div class="columns is-marginless">

        <div class="column is-paddingless">
            <div class="container is-fluid">
                <div class="section">

                @include(jarvis_views("components.articles", "shawnsandy"))
                <div class="columns">

                        <div class="column is-10 is-offset-1-desktop ">
                        <div class="section">
            <div class="section-marker">Connect</div>
        </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio ad perspiciatis aliquam,
                                explicabo quaerat deleniti expedita quae? Corrupti, consectetur ipsum.</p>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="column about is-paddingless">
         @include(jarvis_views("components.about", "shawnsandy"))
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
