<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Dec 05 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center justify-content-center justify-content-md-start mb-2 mb-md-0">
          <i class="bi bi-envelope me-2"></i>
          <a href="mailto:pusdainfo@untirta.ac.id">pusdainfo@untirta.ac.id</a>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62254 280330</span></i>
        </div>
        <div class="social-links d-flex align-items-center justify-content-center justify-content-md-end gap-3">
          <a href="https://x.com/HumasUntirta"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/untirtabantenofficial"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/untirta_official"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/school/universitassultanagengtirtayasa"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="branding bg-white border-bottom py-3">
      <div class="container d-flex align-items-center justify-content-between flex-wrap">
        <a href="{{ route('user.dashboard') }}" class="logo d-flex align-items-center text-decoration-none">
          <h1 class="sitename m-0">SIJARU</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('user.dashboard') }}">Home</a></li>
            <li><a href="{{ route('user.ruangan') }}">Ruangan</a></li>
            <li><a href="{{ route('user.peminjaman') }}">Peminjaman</a></li>
            <li class="dropdown">
              <a href="#"><span>Data Pinjam</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('user.data.pinjaman') }}">Histori Peminjaman</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('user.profile') }}">Akun Saya</a></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger" style="background:none;border:none;padding:8px 16px;text-align:left;">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Selamat datang di <span>SIJARU</span></h1>
            <p>Sistem Informasi Peminjaman Ruangan UNTIRTA.</p>
            <div class="d-flex">
              <a href="#featured-services" class="btn btn-primary me-2">
                <i class="bi bi-book me-1"></i> Cara Peminjaman
              </a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured short introduction Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">
        <div class="section-title text-center mb-5">
          <h2>Cara Menggunakan SIJARU</h2>
          <p>Ikuti langkah mudah berikut untuk melakukan peminjaman ruangan di UNTIRTA melalui platform SIJARU.</p>
        </div>

        <div class="row gy-4">

          <!-- Step 1: Login -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative text-center">
              <div class="icon"><i class="bi bi-box-arrow-in-right icon"></i></div>
              <h4><a href="#" class="stretched-link">Login Akun</a></h4>
              <p>Masuk menggunakan akun yang telah terdaftar untuk mengakses sistem peminjaman ruangan.</p>
            </div>
          </div>

          <!-- Step 2: Pilih Ruangan -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative text-center">
              <div class="icon"><i class="bi bi-building icon"></i></div>
              <h4><a href="#" class="stretched-link">Pilih Ruangan</a></h4>
              <p>Telusuri daftar ruangan yang tersedia dan pilih ruangan sesuai kebutuhan acara Anda.</p>
            </div>
          </div>

          <!-- Step 3: Ajukan Peminjaman -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative text-center">
              <div class="icon"><i class="bi bi-pencil-square icon"></i></div>
              <h4><a href="#" class="stretched-link">Ajukan Peminjaman</a></h4>
              <p>Isi formulir peminjaman dengan lengkap dan kirimkan permohonan untuk diproses admin.</p>
            </div>
          </div>

          <!-- Step 4: Tunggu Persetujuan -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative text-center">
              <div class="icon"><i class="bi bi-hourglass-split icon"></i></div>
              <h4><a href="#" class="stretched-link">Tunggu Persetujuan</a></h4>
              <p>Permintaan Anda akan ditinjau oleh admin, dan status peminjaman akan diinformasikan melalui sistem.</p>
            </div>
          </div>

        </div>

      </div>

      <div class="text-center mb-4" style="margin-top: 1.5rem;">
        <a href="#faq" class="btn btn-outline-secondary btn-sm">
          <i class="bi bi-question-circle me-1"></i> Butuh Bantuan? Lihat FAQ
        </a>
      </div>

    </section><!-- /Featured Introduction Section -->


    <!-- Ruangan Section -->
    <section id="ruangan" class="ruangan section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Ruangan</h2>
        <p><span>Pilih</span> <span class="description-title">Ruangan Tersedia</span></p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <!-- Ruangan -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="ruangan-item service-item text-center shadow-sm rounded">
              <img src="assets/img/ruangan/aula.jpg" class="img-fluid rounded-top" alt="Ruang Aula">
              <div class="ruangan-info p-3">
                <h4>Aula Fakultas Teknik</h4>
                <p>Gedung Aula Utama</p>
                <a href="assets/img/ruangan/aula.jpg" class="glightbox preview-link" title="Lihat Foto"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route('ruang.aula') }}" class="details-link" title="Detail"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <div class="ruangan-item service-item text-center shadow-sm rounded">
              <img src="assets/img/ruangan/dekanat.jpg" class="img-fluid rounded-top" alt="Ruang 102">
              <div class="ruangan-info p-3">
                <h4>Aula Dekanat</h4>
                <p>Gedung Dekanat</p>
                <a href="assets/img/ruangan/dekanat.jpg" class="glightbox preview-link" title="Lihat Foto"><i class="bi bi-zoom-in"></i></a>
                <a href="ruang-102.html" class="details-link" title="Detail"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="ruangan-item service-item text-center shadow-sm rounded">
              <img src="assets/img/ruangan/vicon.jpg" class="img-fluid rounded-top" alt="Ruang 201">
              <div class="ruangan-info p-3">
                <h4>VICON</h4>
                <p>Gedung Vicon</p>
                <a href="assets/img/ruangan/vicon.jpg" class="glightbox preview-link" title="Lihat Foto"><i class="bi bi-zoom-in"></i></a>
                <a href="ruang-201.html" class="details-link" title="Detail"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="ruangan-item service-item text-center shadow-sm rounded">
              <img src="assets/img/ruangan/exFK.jpg" class="img-fluid rounded-top" alt="Ruang 202">
              <div class="ruangan-info p-3">
                <h4>Ruang Kelas CoE</h4>
                <p>Gedung CoE</p>
                <a href="assets/img/ruangan/exFK.jpg" class="glightbox preview-link" title="Lihat Foto"><i class="bi bi-zoom-in"></i></a>
                <a href="ruang-202.html" class="details-link" title="Detail"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="ruangan-item service-item text-center shadow-sm rounded">
              <img src="assets/img/ruangan/R.jpg" class="img-fluid rounded-top" alt="Ruang 301">
              <div class="ruangan-info p-3">
                <h4>Ruang Kelas R</h4>
                <p>Gedung LabKom</p>
                <a href="assets/img/ruangan/R.jpg" class="glightbox preview-link" title="Lihat Foto"><i class="bi bi-zoom-in"></i></a>
                <a href="ruang-301.html" class="details-link" title="Detail"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="ruangan-item service-item text-center shadow-sm rounded">
              <img src="assets/img/ruangan/BR.jpg" class="img-fluid rounded-top" alt="Ruang 302">
              <div class="ruangan-info p-3">
                <h4>Ruang Kelas BR</h4>
                <p>Gedung BR</p>
                <a href="assets/img/ruangan/BR.jpg" class="glightbox preview-link" title="Lihat Foto"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route('ruang.br') }}" class="details-link" title="Detail"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section><!-- Ruangan Section -->

    <section id="calendar-section" class="calendar section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-3">
            <div class="mb-3">
              <select class="form-select" id="room-filter">
                <option value="aula" selected>Ruang Aula</option>
                <option value="labkom">Lab Komputer</option>
              </select>
            </div>
            <button class="btn btn-primary w-100 mb-3" id="filter-btn">Filter</button>
            <div class="mb-4">
              <strong>Keterangan Warna:</strong>
              <div class="mt-2">
                <span class="badge bg-warning text-dark">Diajukan</span><br>
                <span class="badge bg-success">Disetujui</span><br>
                <span class="badge bg-danger">Ditolak</span><br>
                <span class="badge bg-secondary">Dibatalkan</span>
              </div>
            </div>
            <img src="assets/img/illustration.jpeg" alt="Illustration" class="img-fluid d-none d-lg-block mt-4">
          </div>
          <div class="col-lg-9">
            <div class="card card-calendar">
              <div class="card-body p-3">
                <!-- Pastikan ini satu-satunya ID "calendar" -->
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>F.A.Q</h2>
      <p><span>Frequently Asked</span> <span class="description-title">Questions</span></p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

          <div class="faq-container">

            <!-- FAQ Item 1 -->
            <div class="faq-item">
              <h3>Kapan waktu paling lambat mengajukan peminjaman ruangan?</h3>
              <div class="faq-content">
                <p>Pengajuan peminjaman harus dilakukan minimal 7 (tujuh) hari sebelum tanggal kegiatan.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
              <h3>Dokumen apa saja yang perlu diunggah saat mengajukan peminjaman?</h3>
              <div class="faq-content">
                <ul class="ps-4">
                  <li>Surat permohonan peminjaman yang ditandatangani pejabat terkait (Wakil Dekan III, Koordinator Kemahasiswaan, atau unit masing-masing).</li>
                  <li>Surat harus bertanda tangan asli dan stempel basah.</li>
                </ul>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="faq-item">
              <h3>Berapa lama proses verifikasi pengajuan peminjaman?</h3>
              <div class="faq-content">
                <p>Pengajuan akan diverifikasi maksimal dalam 3 (tiga) hari kerja sejak tanggal pengajuan.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
              <h3>Apa yang terjadi jika tidak ada konfirmasi setelah pengajuan?</h3>
              <div class="faq-content">
                <p>Jika dalam 3 (tiga) hari tidak ada konfirmasi, pengajuan akan otomatis ditolak dan dibatalkan tanpa pemberitahuan lebih lanjut.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
              <h3>Bagaimana jika peminjam ingin membatalkan pengajuan?</h3>
              <div class="faq-content">
                <p>Jika peminjaman batal, pemohon wajib menginformasikan pembatalan kepada bagian Rumah Tangga atau BUKK. Jika tidak, dapat dikenai teguran dan sanksi administratif.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
              <h3>Siapa yang bertanggung jawab jika ada kerusakan pada ruangan?</h3>
              <div class="faq-content">
                <p>Segala kerusakan yang terjadi akibat penggunaan ruangan menjadi tanggung jawab penuh peminjam, baik sengaja maupun tidak sengaja.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item">
              <h3>Bagaimana kondisi ruangan setelah peminjaman selesai?</h3>
              <div class="faq-content">
                <p>Peminjam wajib mengembalikan kondisi ruangan dalam keadaan bersih, rapi, dan sebagaimana kondisi awal sebelum dipinjam.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

            <!-- FAQ Item 8 -->
            <div class="faq-item">
              <h3>Apa sanksi jika melanggar ketentuan peminjaman?</h3>
              <div class="faq-content">
                <p>Peminjam yang melanggar ketentuan tidak diperkenankan untuk melakukan peminjaman ruangan/kendaraan lagi di kemudian hari.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div>

          </div>

        </div><!-- End Faq Column -->
      </div>

    </div>

    </section><!-- /Faq Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 justify-content-center">

        <div class="col-lg-6">
          <div class="info-wrap">

            <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0 me-3 fs-4 text-primary"></i>
              <div>
                <h5 class="mb-1">Address</h5>
                <p class="mb-0">Jl. Jenderal Sudirman Km 3, Kotabumi, Kec. Purwakarta, Kota Cilegon, Banten 42435</p>
              </div>
            </div>

            <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0 me-3 fs-4 text-primary"></i>
              <div>
                <h5 class="mb-1">Call Us</h5>
                <p class="mb-0">+62254 280330</p>
              </div>
            </div>

            <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0 me-3 fs-4 text-primary"></i>
              <div>
                <h5 class="mb-1">Email Us</h5>
                <p class="mb-0">pusdainfo@untirta.ac.id</p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6">
          <div class="map-responsive shadow-sm rounded overflow-hidden">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.9883110570104!2d106.02950537355092!3d-5.996339958909738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e2782651571%3A0x249411dd80bfd66e!2sEngineering%20Faculty%20of%20Sultan%20Ageng%20Tirtayasa%20University!5e0!3m2!1sen!2sus!4v1745619912127!5m2!1sen!2sus"
              width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

      </div>
    </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">BizLand</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">SIJARU UNTIRTA</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Kelompok 4 Kelas B</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fullcalendar/index.global.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const eventsByRoom = {
        aula: [
          { title: 'Rakor Inflasi', start: '2025-04-14', className: 'bg-warning text-dark' },
          { title: 'Verifikasi', start: '2025-04-15', className: 'bg-success text-white' },
          { title: 'WORKSHOP', start: '2025-04-17', className: 'bg-success text-white' },
          { title: 'Sosialisasi', start: '2025-04-23', className: 'bg-success text-white' },
          { title: 'Kegiatan P', start: '2025-04-24', className: 'bg-success text-white' },
          { title: 'PELATIHAN', start: '2025-04-29', className: 'bg-success text-white' }
        ],
        labkom: [
          { title: 'Pelatihan Komputer', start: '2025-04-10', className: 'bg-warning text-dark' },
          { title: 'Tes Aplikasi', start: '2025-04-18', className: 'bg-success text-white' }
        ]
      };

      const calendarEl = document.getElementById('calendar');
      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          start: 'title',
          center: '',
          end: 'today prev,next'
        },
        selectable: true,
        editable: false,
        height: 650,
        events: eventsByRoom['aula'],
        eventClassNames: function (arg) {
          return arg.event.classNames || [];
        }
      });

      calendar.render();

      document.getElementById('filter-btn').addEventListener('click', function () {
        const selectedRoom = document.getElementById('room-filter').value;
        calendar.removeAllEvents();
        eventsByRoom[selectedRoom].forEach(event => calendar.addEvent(event));
      });
    });
  </script>

</body>

</html>