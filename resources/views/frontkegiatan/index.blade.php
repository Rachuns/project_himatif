@extends('layouts.base')

@section('main')
<main id="main">

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Kegiatan HIMATIF</p>
      </header>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <img src="{{asset('frontend/assets')}}/img/sertijab.png" class="img-fluid" alt="">
            <h3>Serah Terima Jabatan HIMATIF Periode 2023/2024</h3>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="{{asset('frontend/assets')}}/img/mubes.png" class="img-fluid" alt="">
            <h3>Musyawarah Besar HIMATIF 2023</h3>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="box">
            <img src="{{asset('frontend/assets')}}/img/hicare.png" class="img-fluid" alt="">
            <h3>HIMATIFCARE</h3>
          </div>
        </div>

      </div>
      <br>
      <div>
    </div>
    </div>

  </section><!-- End Values Section -->

</main><!-- End #main -->
@endsection