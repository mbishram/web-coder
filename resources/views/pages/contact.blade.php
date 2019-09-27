@extends('layouts.main-layout')

@section('content')
  <section id="content">
    <div class="wrap">
        <!-- Judul -->
        <section id="judul">
            <div class="wrap grid h-centered-grid">
                <h1 class="h-centered"><span class="text-coder">Hubungi</span> <span class="text-dark">Kami</span>
                </h1>
                <img src="images/devider-center.png" alt="------" class="devider">
            </div>
        </section>
        <!-- Judul END -->

        <!-- Gambar -->
        <section id="gambar">
            <div class="gambar">
                <img src="images/photos.png">
            </div>
        </section>
        <!-- Gambar END -->

        <!-- Form -->
        <section id="form">
            <div class="formulir">
                <h2>Send us an email!</h2>
                <form action="contact.html" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="text-coder">Nama Lengkap</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Nama Lengkap Anda">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email" class="text-coder">Alamat Email</label>
                        </div>
                        <div class="col-75">
                            <input type="email" id="email" name="email" placeholder="Alamat Email Anda">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="subjek" class="text-coder">Subjek Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="subjek" name="subjek" placeholder="Subjek Email Anda">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="message" class="text-coder">Subject</label>
                        </div>
                        <div class="col-75">
                            <textarea id="message" name="subject" placeholder="Pesan Anda..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit" class="button submit-button">
                    </div>
                </form>
            </div>

            <!-- Contact Information -->
            <section id="contact">
                <div class="contact-box">
                    <h2 class="text-dark-mode weight-semibold">Contact</h2>
                    <div class="contact-info">
                        <p class="text-coder weight-semibold">082192060015</p>
                        <p class="text-dark-mode"><img src="images/wa.png" alt="WhatsApp" class="logo">WhatsApp</p>
                        <p class="text-dark-mode"><img src="images/phone.png" alt="Call" class="logo">Call/Message </p>
                    </div>
                    <div class="contact-info">
                        <p class="text-coder weight-semibold">coderistitute-uh@gmail.com</p>
                        <p class="text-dark-mode"><img src="images/email.png" alt="Email" class="logo">Email</p>
                    </div>
                </div>
            </section>
            <!-- Contact Information END -->
        </section>
        <!-- Form END -->
    </div>
  </section>

@endsection