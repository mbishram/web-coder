@extends('layouts.main-layout')

@section('content')
  <section id="about">
    <div class="wrap">
        <!-- Judul -->
        <section id="judul">
            <div class="wrap grid h-centered-grid">
                <h1 class="h-centered"><span class="text-coder">Tentang</span> <span class="text-dark">Kami</span>
                </h1>
                <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider">
            </div>
        </section>
        <!-- Judul END -->
    </div>

    <div class="wrap">
        <div class="grid-container">
            <div class="grid-item">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                      <img src="{{ asset('images/blog1.png') }}" style="width:100%">
                    </div>
                    
                    <div class="mySlides fade">
                      <img src="{{ asset('images/blog6.png') }}" style="width:100%">
                    </div>
                    
                    <div class="mySlides fade">
                      <img src="{{ asset('images/blog9.png') }}" style="width:100%">
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    
                </div>
                    <br>
                    
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
            <div class="grid-item tentang">
                <p>Coder Institute adalah organisasi otonom dibawah naungan HMIF FT-UH. Coder Institude adalah tempat dimana mahasiswa Informatika yang ingin belajar dan mengembangankan kemampuan pemrogramannya</p>
            </div>
        </div>
    </div>
  </section>


  <!-- Divisi -->
  <section id="divisi">
    <div class="wrap grid h-centered-grid">
      <h1 class="h-centered"><span class="text-coder">Divisi</span> <span class="text-dark">Kami</span></h1>
      <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider">
      <div class= "list grid">
        <div class="list-content h-centered">
          <img src="{{ asset('images/web.png') }}" alt="" class="list-content-images">
          <h2 class="weight-semibold list-content-header">Divisi Website</h2>
          <p>Divisi Web ada dua, yaitu front-end dan back-end. front-end lebih fokus pada tampilan website sedangkan back-end fokus pada fungsi-fungsi website.</p>
        </div>
        <div class="list-content h-centered">
          <img src="{{ asset('images/mobile.png') }}" alt="" class="mobile-image">
          <h2 class="weight-semibold list-content-header">Divisi Mobile</h2>
          <p>Divisi MObile belajar cara-cara membuat suatu aplikasi berbasis android/IOS.</p>
        </div>
        <div class="list-content h-centered">
          <img src="{{ asset('images/iot.png') }}" alt="" class="list-content-images">
          <h2 class="weight-semibold list-content-header">Divisi IoT</h2>
          <p>Divisi IoT merupakan sebuah konsep yang bertujuan untuk memperluas manfaat dari konectivitas internet secara terus menerus.</p>
        </div>
        <div class="list-content h-centered">
          <img src="{{ asset('images/game.png') }}" alt="" class="list-content-images">
          <h2 class="weight-semibold list-content-header">Divisi Game</h2>
          <p>Divisi Game mempelajari tentang bagaimana cara membuat game mulai dari dasar sampai proses release.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Divisi END -->

  <!-- visi -->
    <section id="visi">
        <div class="wrap">
            <!-- Judul -->
            <section id="judul">
                <div class="wrap grid h-centered-grid">
                    <h1 class="h-centered"><span class="text-coder">Visi</span> <span class="text-white">Kami</span>
                    </h1>
                    <img src="{{ asset('images/devider-center-dark.png') }}" alt="------" class="devider">
                </div>
            </section>
            <p><span class="weight-semibold">Coder Institute</span> bertujuan untuk menjadi wadah kolaborasi dan pendidikan yang mampu melahirkan <span class="weight-semibold">programmer kelas dunia</span></p>
            <!-- Judul END -->
        </div>
    </section>
  <!-- end visi -->


  <section id="tim">
    <div class="wrap">
        <!-- Judul -->
        <section id="judul">
            <div class="wrap grid h-centered-grid">
                <h1 class="h-centered"><span class="text-coder">Tim</span> <span class="text-dark">Kami</span>
                </h1>
                <img src="{{ asset('images/devider-center.png') }}" alt="------" class="devider">
            </div>
        </section>
        <!-- Judul END -->
    </div>

    <div class="wrap">
        <div class="grid-container">
            <div class="grid-item">
            </div>
            <div class="grid-item">
                <img src="https://www.library.caltech.edu/sites/default/files/styles/headshot/public/default_images/user.png?itok=1HlTtL2d" alt="">
                <p class="text-coder weight-medium">Muhammad Zul Fahmi Sadrah</p>
                <h3>Ketua</h3>
            </div>
            <div class="grid-item">
            </div>
            <div class="grid-item">
                <img src="https://www.library.caltech.edu/sites/default/files/styles/headshot/public/default_images/user.png?itok=1HlTtL2d" alt="">
                <p class="text-coder weight-medium">Amiruddin</p>
                <h3>Sekretaris</h3>
            </div>
            <div class="grid-item">
                <img src="https://www.library.caltech.edu/sites/default/files/styles/headshot/public/default_images/user.png?itok=1HlTtL2d" alt="">
                <p class="text-coder weight-medium">Giyani Rayani</p>
                <h3>Bendahara</h3>
            </div>
            <div class="grid-item">
                <img src="https://www.library.caltech.edu/sites/default/files/styles/headshot/public/default_images/user.png?itok=1HlTtL2d" alt="">
                <p class="text-coder weight-medium">Fitriani Nasir</p>
                <h3>Ketua Divisi Website</h3>
            </div>
            <div class="grid-item">
                <img src="https://www.library.caltech.edu/sites/default/files/styles/headshot/public/default_images/user.png?itok=1HlTtL2d" alt="">
                <p class="text-coder weight-medium">Glenn Claudio Evan Petrus</p>
                <h3>Ketua Divisi Mobile</h3>
            </div>
            <div class="grid-item">
                <img src="https://www.library.caltech.edu/sites/default/files/styles/headshot/public/default_images/user.png?itok=1HlTtL2d" alt="">
                <p class="text-coder weight-medium">Eugenius Wahyudiarto</p>
                <h3>Ketua Divisi IoT</h3>
            </div>
            <div class="grid-item">
                <img src="https://www.library.caltech.edu/sites/default/files/styles/headshot/public/default_images/user.png?itok=1HlTtL2d" alt="">
                <p class="text-coder weight-medium">Suci Awaliyah Muzakkir</p>
                <h3>Ketua Divisi Game</h3>
            </div>
        </div>
    </div>
  </section>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
  </script>
@endsection