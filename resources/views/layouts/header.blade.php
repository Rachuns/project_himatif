<!-- Start Header -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="/" class="logo d-flex align-items-center">
      <img src="{{asset('frontend/assets')}}/img/himatif.png" alt="">
      <span>HIMATIF</span>
    </a>
    <!-- Start Navbar -->
    <nav id="navbar" class="navbar">
      <ul>
        <li>
          <a class="nav-link scrollto" href="/">Beranda</a>
        </li>
        <li class="dropdown">
          <a href="#"><span>Tentang Kami</span><i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Visi Misi</a></li>
            <li><a href="#">Sejarah</a></li>
          </ul>
        </li>
        <li>
          <a class="nav-link scrollto" href="{{route('frontpengumuman.index')}}">Pengumuman</a>
        </li>
        <li>
          <a class="nav-link scrollto" href="{{route('frontberita.index')}}">Berita</a>
        </li>
        <li>
          <a class="nav-link scrollto" href="#">E-Voting</a>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- End Navbar -->
  </div>
</header>
<!-- End Header -->