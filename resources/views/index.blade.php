<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - BizLand Bootstrap Template</title>
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
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:pusdainfo@untirta.ac.id">pusdainfo@untirta.ac.id</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62254 280330</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://x.com/HumasUntirta" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/untirtabantenofficial" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/untirta_official" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/school/universitassultanagengtirtayasa" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <a href="{{ route('akun_user') }}" class="akun"><i class="bi bi-person"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="#hero" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">SIJARU</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#ruangan">Ruangan</a></li>
            <li><a href="#peminjaman">Peminjaman</a></li>
            <li class="dropdown"><a href="#"><span>Data Pinjaman</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Data Histori Peminjaman </a></li>
              </ul>
            </li>
            <li><a href="#contact">Kontak</a></li>
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
            <p>Sistem Peminjaman Ruangan.</p>
            <div class="d-flex">
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">
            <i class="bi bi-box-arrow-in-right me-1"></i> Login
            </a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary register-btn">
              REGISTER <i class="bi bi-person-plus"></i>
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
          <h2>Kenapa Menggunakan SIJARU?</h2>
          <p>Sistem Informasi Peminjaman Ruangan UNTIRTA memberikan kemudahan dan transparansi bagi seluruh civitas akademika.</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar-check icon"></i></div>
              <h4><a href="#" class="stretched-link">Booking Cepat & Mudah</a></h4>
              <p>Ajukan peminjaman ruangan hanya dalam beberapa klik. Semua ruangan terdaftar dan siap dipesan secara online.</p>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-eye icon"></i></div>
              <h4><a href="#" class="stretched-link">Jadwal Transparan</a></h4>
              <p>Lihat ketersediaan ruangan secara real-time melalui kalender interaktif yang terintegrasi dengan sistem.</p>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-house-door icon"></i></div>
              <h4><a href="#" class="stretched-link">Multi-Ruangan</a></h4>
              <p>Dari aula besar hingga lab komputer, semua tipe ruangan tersedia dan dapat difilter sesuai kebutuhan.</p>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-check2-square icon"></i></div>
              <h4><a href="#" class="stretched-link">Sistem Persetujuan</a></h4>
              <p>Setiap pengajuan akan dikonfirmasi oleh admin dan pihak berwenang, memastikan keteraturan dan kejelasan alur.</p>
            </div>
          </div><!-- End Feature Item -->

        </div>

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
              <img src="assets/img/ruangan/LabKom.jpg" class="img-fluid rounded-top" alt="Ruang 302">
              <div class="ruangan-info p-3">
                <h4>LabKom</h4>
                <p>Gedung LabKom</p>
                <a href="assets/img/ruangan/LabKom.jpg" class="glightbox preview-link" title="Lihat Foto"><i class="bi bi-zoom-in"></i></a>
                <a href="ruang-302.html" class="details-link" title="Detail"><i class="bi bi-link-45deg"></i></a>
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
    

    <!-- Peminjaman Ruangan Section -->
    <section id="peminjaman" class="section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Peminjaman Ruangan</h2>
        <p><span>Formulir</span> <span class="description-title">Peminjaman</span></p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-7 mx-auto">
            <form action="/peminjaman" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="nama-peminjam" class="pb-2">Nama Peminjam</label>
                  <input type="text" name="nama" id="nama-peminjam" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label for="email" class="pb-2">Email</label>
                  <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label for="tanggal" class="pb-2">Tanggal Peminjaman</label>
                  <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label for="waktu" class="pb-2">Waktu</label>
                  <input type="time" name="waktu" id="waktu" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label for="ruangan" class="pb-2">Ruangan</label>
                  <select name="ruangan" id="ruangan" class="form-select" required>
                    <option value="" disabled selected>-- Pilih Ruangan --</option>
                    <option value="Ruang 101">Ruang 101</option>
                    <option value="Ruang 202">Ruang 202</option>
                    <option value="Ruang 305">Ruang 305</option>
                  </select>
                </div>

                <div class="col-md-12">
                  <label for="keperluan" class="pb-2">Keperluan</label>
                  <textarea name="keperluan" id="keperluan" class="form-control" rows="5" required></textarea>
                </div>

                <div class="col-md-12">
                  <label for="jumlah" class="pb-2">Jumlah Peserta</label>
                  <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pengajuan peminjaman berhasil dikirim. Terima kasih!</div>

                  <button type="submit">Ajukan Peminjaman</button>
                </div>

              </div>
            </form>
          </div>

        </div>
      </div>

    </section>
    <!-- /Peminjaman Ruangan Section -->

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

              <div class="faq-item faq-active">
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                <div class="faq-content">
                  <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

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
      <p>© <span>Copyright</span> <strong class="px-1 sitename">BizLand</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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