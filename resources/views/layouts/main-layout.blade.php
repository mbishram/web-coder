<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS reset -->
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <!-- CSS pages -->
  <link rel="stylesheet" href="{{ asset('css/style-landing.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-about.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-contact.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-blog.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-artikel.css') }}">
  <!-- Font yang digunakan -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <title>{{ $title }}</title>
</head>
<body>
  <!-- Navigation -->
  <nav id="navigation">
    <div class="wrap grid">
      <a href="/"><img src="{{ asset('images/coder_logo_nama.png') }}" alt="Logo Coder Institute" class="site-logo">
      <ul class="horizontal-links"></a>
        <li><a href="/" class="weight-medium {{ Request::is('/') ? 'page-selected' : '' }}">Home</a></li>
        <li><a href="/about" class="weight-medium {{ Request::is('about') ? 'page-selected' : '' }}">About Us</a></li>
        <li><a href="/blog" class="weight-medium {{ Request::is('blog*') ? 'page-selected' : '' }}">Blog</a></li>
        <li><a href="/contact" class="weight-medium {{ Request::is('contact') ? 'page-selected' : '' }}">Contact</a></li>
      </ul>
    </div>
  </nav>
  <!-- Navigation END -->

  @yield('content')

  <!-- Footer -->
  <footer id="footer">
    <div class="wrap">
      <p class="text-dark-mode weight-bold">Follow Us</p>
      <ul class="horizontal-links">
        <li>
          <a href="" class="text-dark-mode">
            <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="logo">Facebook
          </a>
        </li>
        <li>
          <a href="" class="text-dark-mode">
            <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="logo">Twitter
          </a>
        </li>
        <li>
          <a href="" class="text-dark-mode">
            <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="logo">Instagram
          </a>
        </li>
        <li>
          <a href="" class="text-dark-mode">
            <img src="{{ asset('images/youtube.png') }}" alt="Youtube" class="logo">Youtube
          </a>
        </li>
      </ul>
      <p class="text-dark-mode">Coder Institute &#169; 2019. All Rights Reserved.</p>
    </div>
  </footer>
  <!-- Footer END -->
</body>
</html>