@extends('layouts.main-layout')

@section('content')
  <section id="artikel">
    <div class="wrap h-centered">
      <h1 class="text-dark">Pelatihan #6 : Pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan pelatihan</h1>
      <p class="post-info">1 April 2019 | Pelatihan Website</p>
      <div class="isi">
        <img src="{{ asset('images/blog5.png') }}" alt="">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora ducimus aliquid unde placeat vero corporis velit ex quod temporibus consectetur ipsum molestias perspiciatis eligendi harum necessitatibus totam nam facere, hic possimus accusamus illo nesciunt? Impedit sapiente alias deleniti ex maiores quo cupiditate, eligendi modi! Qui magnam, vero asperiores, iusto id fugit inventore sapiente, voluptates ipsum aliquid eaque animi provident? Excepturi odio praesentium magnam aut, consectetur doloribus vitae hic saepe aliquam impedit distinctio quaerat ratione voluptatem dicta illum molestiae laboriosam nobis placeat laborum quo quia. Odit voluptate exercitationem qui nostrum natus praesentium earum perspiciatis tempore. Repudiandae, numquam! Quas ad odio nulla!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam neque aliquid, quo, iure pariatur architecto corporis animi ut rerum sed quasi, incidunt impedit inventore molestias temporibus asperiores unde nesciunt voluptas vero debitis porro. Magnam, voluptatem hic eaque, facilis ad vitae esse culpa labore, sapiente impedit repellat! Et dolores praesentium accusamus.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro tempore quo pariatur asperiores sunt distinctio ipsa, modi voluptate ratione, explicabo commodi accusantium aliquam perferendis magni molestiae aspernatur aliquid tenetur? Eos obcaecati, asperiores molestias architecto libero tenetur repellendus nihil quas illum ab sint eveniet hic totam itaque iusto assumenda debitis eius aliquam, at officiis earum labore corporis! Quas voluptatum praesentium unde et quod placeat quis officia vero officiis. Nam nesciunt accusantium laudantium mollitia quidem? Sequi omnis quibusdam veritatis ipsum, consectetur temporibus explicabo iusto obcaecati consequatur deleniti in? Delectus consequuntur, magnam adipisci incidunt, molestias unde perspiciatis nobis aspernatur laborum ex veritatis architecto.</p>
      </div>
    </div>
  </section>

  <section id="other-post">
    <div class="wrap">
      <h1 class="weight-bold text-dark">Artikel Lainnya</h1>
      <div class= "post grid">
        <div class="post-content">
          <img src="{{ asset('images/blog1.png') }}" alt="">
          <h2 class="weight-semibold"><a href="/blog/judul-dari-artikel-disini">Pelatihan #6 : Pelatihan pelatihan pelatihan</a></h2>
          <div class="post-info">1 April 2019 | Pelatihan Website</div>
        </div>
        <div class="post-content">
          <img src="{{ asset('images/blog2.png') }}" alt="">
          <h2 class="weight-semibold"><a href="/blog/judul-dari-artikel-disini">Berita #4 : Berita berita berita</a></h2>
          <div class="post-info">1 April 2019 | Berita</div>
        </div>
      </div>
    </div>
  </section>
@endsection