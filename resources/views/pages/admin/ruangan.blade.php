<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Ruangan - Aula Fakultas Teknik</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href={{asset('assets/img/favicon.png')}} rel="icon">
  <link href={{asset('assets/img/apple-touch-icon.png')}} rel="apple-touch-icon">

  <!-- Fonts -->
  <link href={{asset('https://fonts.googleapis.com')}} rel="preconnect">
  <link href={{asset('https://fonts.gstatic.com')}} rel="preconnect" crossorigin>
  <link href={{asset('https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap')}} rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
  <link href={{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}} rel="stylesheet">
  <link href={{asset('assets/vendor/aos/aos.css')}} rel="stylesheet">
  <link href={{asset('assets/vendor/glightbox/css/glightbox.min.css')}} rel="stylesheet">
  <link href={{asset('assets/vendor/swiper/swiper-bundle.min.css')}} rel="stylesheet">

  <!-- Main CSS File -->
  <link href={{asset('assets/css/main.css')}} rel="stylesheet">
</head>

<body class="ruang-aula-page">

  <!-- ======= Header ======= -->
  <header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center">
            <a href="mailto:pusdainfo@untirta.ac.id">pusdainfo@untirta.ac.id</a>
          </i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62254 280330</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <a href="{{ route('admin.profile') }}" class="akun"><i class="bi bi-person"></i></a>
          <a href="{{ route('admin.notifikasi')}}"><i class="bi bi-bell"></i></a>
          <a href="{{ route('admin.notifikasi')}}"><i class="bi bi-bell"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href={{ route('admin.dashboard')}} class="logo d-flex align-items-center">
          <h1 class="sitename">SIJARU</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href={{ route('admin.dashboard') }}>Home</a></li>
            <li><a href={{ route('admin.ruangan') }}>Ruangan</a></li>
            <li><a href={{ route('admin.dashboard') }}>Status Ruangan</a></li>
            <li><a href={{ route('admin.peminjaman') }}>Peminjaman</a></li>
            <li class="dropdown">
              <a href="#"><span>Riwayat</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href={{ route('admin.history') }}>Data Histori Peminjaman</a></li>
              </ul>
            </li>
            <li><a href={{ route('admin.dashboard#contact') }}>Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <!-- ======= Main ======= -->
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Detail Ruangan</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href={{route('admin.dashboard')}}>Home</a></li>
            <li class="current">Aula Fakultas Teknik</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Ruang Aula Section -->
    <section id="ruang-aula" class="portfolio-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="{{ asset('assets/img/ruangan/aula.jpg') }}" class="img-fluid" alt="Aula Fakultas Teknik">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Informasi Ruangan</h3>
              <ul>
                <li><strong>Nama Ruangan:</strong> Aula Fakultas Teknik</li>
                <li><strong>Gedung:</strong> Aula Utama</li>
                <li><strong>Kapasitas:</strong> 100 orang</li>
                <li><strong>Fasilitas:</strong> Proyektor, Mic, Sound System, AC</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h4>Deskripsi Ruangan</h4>
              <p>
                Aula ini digunakan untuk kegiatan besar seperti seminar, workshop, dan acara seremonial. Terletak di Gedung Aula Utama dan memiliki akses parkir yang mudah.
              </p>
              <div class="mt-4">
                <a href="login.html" class="btn btn-primary w-100">Booking Ruangan</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container text-center py-4">
      <p>&copy; <strong>SIJARU UNTIRTA</strong>. All Rights Reserved</p>
      <div class="credits">Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div><div></div><div></div><div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src={{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
  <script src={{asset('assets/vendor/aos/aos.js')}}></script>
  <script src={{asset('assets/vendor/glightbox/js/glightbox.min.js')}}></script>
  <script src={{asset('assets/vendor/swiper/swiper-bundle.min.js')}}></script>
  <script src={{asset('assets/js/main.js')}}></script>

</body>

</html>
