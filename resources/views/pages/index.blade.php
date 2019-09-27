@extends('layouts.main-layout')

@section('content')
  <!-- Hero -->
  <section id="hero">
    <div class="wrap h-centered v-centered">
      <h1>Coder Institute</h1>
      <img src="{{ asset('images/divider-main.png') }}" alt="------" class="devider">
      <h2>For a <span class="text-coder weight-semibold">Better Future</span></h2>
      <a href="#intro"><img src="{{ asset('images/scroll.png') }}" alt="v" class="scroll"></a>
    </div>
  </section>
  <!-- Hero END -->

  <!-- Intro -->
  <section id="intro">
    <div class="wrap grid h-centered-grid">
      <h1 class="h-centered"><span class="text-coder">Hello</span> <span class="text-dark">World!</span></h1>
      <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider">
      <p class="h-centered">Coder Institute adalah organisasi otonom dibawah naungan HMIF FT-UH. Coder Institute adalah tempat dimana mahasiswa informatika yang ingin  belajar dan mengembangkan kemampuan pemrogramannya.</p>
      <a href="/about" class="text-coder">Lihat Tentang Kami</a>
    </div>
  </section>
  <!-- Intro END -->

  <!-- Services -->
  <section id="services">
    <div class="wrap grid h-centered-grid">
      <h1 class="h-centered"><span class="text-dark">Our</span> <span class="text-coder">Services</span></h1>
      <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider">
      <div class= "list grid">
        <div class="list-content h-centered">
          <img src="{{ asset('images/website.svg') }}" alt="" class="list-content-images">
          <h2 class="weight-semibold list-content-header">Website <br/>Solutions</h2>
          <p>Kami dapat membuat website sesuai dengan visi Anda secara gesit dan profesional.</p>
        </div>
        <div class="list-content h-centered">
          <img src="{{ asset('images/app.svg') }}" alt="" class="list-content-images">
          <h2 class="weight-semibold list-content-header">Aplication <br/>Solutions</h2>
          <p>Kami dapat membuat aplikasi berbasis desktop maupun android. Aplikasi ini akan kami buat secara profesional dan cepat.</p>
        </div>
        <div class="list-content h-centered">
          <img src="{{ asset('images/design.svg') }}" alt="" class="list-content-images">
          <h2 class="weight-semibold list-content-header">Design <br/>Solutions</h2>
          <p>Kami akan mendesain sesuai dengan keperluan Anda, baik itu logo, pamflet, baliho, dan banyak lainnya.</p>
        </div>
        <div class="list-content h-centered">
          <img src="{{ asset('images/video.svg') }}" alt="" class="list-content-images">
          <h2 class="weight-semibold list-content-header">Video <br/>Editing</h2>
          <p>Kami dapat menyunting video Anda sesuai dengan imaginasi Anda.</p>
        </div>
      </div>
      <a href="/contact" class="button">Hubungi Kami</a>
    </div>
  </section>
  <!-- Services END -->

  <!-- Blog -->
  <section id="blog">
    <div class="wrap">
      <h1><span class="text-dark">Postingan</span> <span class="text-coder">Blog</span></h1>
      <img src="{{ asset('images/devider-left.png') }}" alt="------" class="devider">
      <div class= "post grid">
        <div class="post-content">
          <img src="{{ asset('images/blog1.png') }}" alt="">
          <h2 class="weight-semibold"><a href="#">Pelatihan #6 : Pelatihan pelatihan pelatihan</a></h2>
          <div class="post-info">1 April 2019 | Pelatihan Website</div>
        </div>
        <div class="post-content">
          <img src="{{ asset('images/blog2.png') }}" alt="">
          <h2 class="weight-semibold"><a href="#">Berita #4 : Berita berita berita</a></h2>
          <div class="post-info">1 April 2019 | Berita</div>
        </div>
      </div>
      <a href="/blog" class="text-coder blog-link weight-medium">Lihat Semua Postingan</a>
    </div>
  </section>
  <!-- Blog END -->
@endsection