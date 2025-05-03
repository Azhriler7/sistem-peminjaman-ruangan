<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SIJARU UNTIRTA</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

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
          <a href="{{ route('admin.profile') }}" class="akun"><i class="bi bi-person"></i></a>
          <a href="{{ route('admin.notifikasi')}}"><i class="bi bi-bell"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">
      
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href={{ route('admin.dashboard') }} class="logo d-flex align-items-center">
          <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href={{route('admin.dashboard')}}>Home</a></li>
            <li><a href={{route('admin.dashboard#ruangan')}}>Ruangan</a></li>
            <li class="dropdown">
                <a href="#"><span>Data Pinjam</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.data-pinjaman') }}">Pinjaman Masuk</a></li>
                    <li><a href={{route('admin.history')}}>Data Histori Peminjaman</a></li>
                </ul>
            </li>
            <li><a href={{route('admin.dashboard#contact')}}>Kontak</a></li>
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
            <h1>Selamat datang Admin di <span>SIJARU</span></h1>
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

    <!-- Kelola Ruangan -->
    <section id="ruangan" class="ruangan section light-background">
      <div class="container" data-aos="fade-up">
        <div class="container section-title" data-aos="fade-up">
          <h2>Ruangan</h2>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="fw-bold">Daftar Ruangan</h2>
          <a href="{{ route('admin.ruangan.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Ruangan
          </a>
        </div>

        <div class="card shadow-sm border-0">
          <div class="card-body">
            <div class="table-responsive">
              <table id="ruanganTable" class="table table-striped table-hover align-middle" style="width:100%">
                <thead class="table-light">
                  <tr>
                    <th>No</th>
                    <th>Nama Ruangan</th>
                    <th>Gedung</th>
                    <th>Kapasitas</th>
                    <th>Fasilitas</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($ruangan as $index => $r)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $r->nama_ruangan }}</td>
        <td>{{ $r->gedung }}</td>
        <td>{{ $r->kapasitas }} orang</td>
        <td>{{ $r->fasilitas }}</td>
        <td>{{ $r->deskripsi }}</td>
        <td>
            <img src="{{ asset('storage/' . $r->gambar) }}" alt="{{ $r->nama_ruangan }}" width="80" class="img-thumbnail">
        </td>
        <td>
            <a href="{{ route('admin.ruangan.edit', $r->id) }}" class="btn btn-sm btn-outline-primary me-1">Edit</a>
            <form action="{{ route('admin.ruangan.delete', $r->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus ruangan ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

                  <!-- Data Dummy Ruangan -->
                  <!--
                  <tr>
                    <td>1</td>
                    <td>Aula Fakultas Teknik</td>
                    <td>Aula Utama</td>
                    <td>100 orang</td>
                    <td>Proyektor, Mic, Sound System, AC</td>
                    <td>Aula ini digunakan untuk kegiatan besar seperti seminar, workshop, dan acara seremonial. Terletak di Gedung Aula Utama dan memiliki akses parkir yang mudah.</td>
                    <td><img src="{{ asset('assets/img/ruangan/aula.jpg') }}" alt="Aula" width="80" class="img-thumbnail"></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                      <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>Aula Dekanat</td>
                    <td>Dekanat</td>
                    <td>50 orang</td>
                    <td>Proyektor, Mic, Sound System, AC, Kursi, Meja</td>
                    <td>Aula ini digunakan untuk kegiatan rapat, seminar kecil, sidang, dan pelatihan internal fakultas.</td>
                    <td><img src="{{ asset('assets/img/ruangan/dekanat.jpg') }}" alt="Aula Dekanat" width="80" class="img-thumbnail"></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                      <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>VICON</td>
                    <td>Gedung VICON</td>
                    <td>45 orang</td>
                    <td>Layar LED, Kamera Video Conference, Microphone, Sound System, AC, Meja Meeting</td>
                    <td>Ruang VICON digunakan untuk kegiatan seminar hybrid, kelas, rapat organisasi dan rapat dengan pihak eksternal.</td>
                    <td><img src="{{ asset('assets/img/ruangan/vicon.jpg') }}" alt="VICON" width="80" class="img-thumbnail"></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                      <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>Ruang Kelas CoE</td>
                    <td>Gedung CoE</td>
                    <td>45 orang</td>
                    <td>Proyektor, TV, AC, Meja dan Kursi Kelas</td>
                    <td>Ruang Kelas CoE digunakan untuk kegiatan perkuliahan, seminar hybrid, rapat organisasi, dan rapat dengan pihak eksternal.</td>
                    <td><img src="{{ asset('assets/img/ruangan/exFK.jpg') }}" alt="Ruang CoE" width="80" class="img-thumbnail"></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                      <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>Ruang Kelas R</td>
                    <td>Gedung U</td>
                    <td>40 orang</td>
                    <td>Proyector, TV, Whiteboard, Kursi dan Meja Kuliah, AC</td>
                    <td>Ruang Kelas di Gedung U digunakan untuk kegiatan perkuliahan reguler, dan kegiatan akademik lainnya. Gedung ini terdiri dari tiga lantai dengan beberapa ruang kelas di tiap lantainya.</td>
                    <td><img src="{{ asset('assets/img/ruangan/R.jpg') }}" alt="Ruang R" width="80" class="img-thumbnail"></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                      <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                    </td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td>LabKom</td>
                    <td>Gedung LabKom</td>
                    <td>45 orang</td>
                    <td>Komputer Desktop, Whiteboard, AC, Meja Kursi Lab, Jaringan Internet</td>
                    <td>Laboratorium Komputer digunakan untuk kegiatan praktikum, pelatihan software, dan ujian berbasis komputer.</td>
                    <td><img src="{{ asset('assets/img/ruangan/LabKom.jpg') }}" alt="LabKom" width="80" class="img-thumbnail"></td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                      <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                    </td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </section>

    <tbody>
    
    </tbody>

    <section id="peminjaman" class="peminjaman">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title text-center mb-5">
            <h2>Kalender Peminjaman</h2>
        </div>
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
            <img src="{{ asset('assets/img/illustration.jpeg') }}" alt="Illustration" class="img-fluid d-none d-lg-block mt-4">
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
          <a href="/" class="d-flex align-items-center">
            <span class="sitename">SIJARU UNTIRTA</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Raya Jakarta Km. 4, Pakupatan, Serang, Banten 42124</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 254 280330</span></p>
            <p><strong>Email:</strong> <span>pusdainfo@untirta.ac.id</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="https://untirta.ac.id" target="_blank">Website UNTIRTA</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="https://untirta.ac.id/kontak-kami/" target="_blank">Kontak Kami</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Other Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="https://sso.untirta.ac.id" target="_blank">SSO UNTIRTA</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="https://siakad.untirta.ac.id" target="_blank">SIAKAD</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="https://pmb.untirta.ac.id" target="_blank">PMB UNTIRTA</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Ikuti berita terbaru UNTIRTA melalui media sosial resmi kami.</p>
          <div class="social-links d-flex">
            <a href="https://twitter.com/untirtaofficial" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/UntirtaOfficial" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/untirta.official/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/school/universitas-sultan-ageng-tirtayasa/" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>2025</span> <strong class="px-1 sitename">SIJARU UNTIRTA</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Developed by <a href="#">Kelompok 4 Kelas B</a>
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
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/vendor/fullcalendar/index.global.min.js') }}"></script>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

  <script>
    $(document).ready(function() {
        $('#ruanganTable').DataTable({
          pageLength: 5,
          lengthMenu: [5, 10, 25, 50],
          dom: '<"d-flex justify-content-between align-items-center mb-3"lfr>tip',
          language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            zeroRecords: "Tidak ada data ditemukan",
            info: "Menampilkan _PAGE_ dari _PAGES_",
            infoEmpty: "Data tidak tersedia",
            infoFiltered: "(disaring dari total _MAX_ data)",
          }
        });
    });
  </script>

  <!-- Modal Event -->
  <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content shadow">
        <div class="modal-header border-0">
          <h5 class="modal-title fw-bold" id="eventModalLabel">Detail Acara</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <strong>Nama Acara:</strong> <span id="modal-nama-acara"></span>
          </div>
          <div class="mb-2">
            <strong>Nama Ruang:</strong> <span id="modal-nama-ruang"></span>
          </div>
          <div class="mb-2">
            <strong>Waktu Mulai:</strong> <span id="modal-waktu-mulai"></span>
          </div>
          <div class="mb-2">
            <strong>Waktu Selesai:</strong> <span id="modal-waktu-selesai"></span>
          </div>
          <div class="mb-2">
            <strong>Status Pinjaman:</strong> <span id="modal-status"></span>
          </div>
          <div class="mb-2">
            <strong>Pemohon:</strong> <span id="modal-pemohon"></span>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Script Calendar -->
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const eventsByRoom = {
      aula: [
        { title: 'Seminar IT', start: '2025-04-14T07:30:00', end: '2025-04-14T11:30:00', ruang: 'Aula Fakultas Teknik', status: 'Diajukan', pemohon: 'Alex' },
        { title: 'Kuliah Umum', start: '2025-04-15T08:00:00', end: '2025-04-15T12:00:00', ruang: 'Aula Fakultas Teknik', status: 'Disetujui', pemohon: 'Dosen Terkait' },
        { title: 'Workshop', start: '2025-04-17T09:00:00', end: '2025-04-17T13:00:00', ruang: 'Aula Fakultas Teknik', status: 'Disetujui', pemohon: 'HMIF' }
      ]
    };

    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      themeSystem: 'bootstrap5',
      headerToolbar: {
        start: 'prev,next today',
        center: 'title',
        end: 'dayGridMonth,listMonth'
      },
      buttonText: {
        today: 'Today',
        dayGridMonth: 'Month View',
        listMonth: 'List View'
      },
      customButtons: {
        dayGridMonth: {
          text: 'Month View',
          click: function() {
            calendar.changeView('dayGridMonth');
          }
        },
        listMonth: {
          text: 'List View',
          click: function() {
            calendar.changeView('listMonth');
          }
        }
      },
      selectable: true,
      editable: false,
      height: 650,
      events: eventsByRoom['aula'].map(event => ({
        ...event,
        classNames: statusColor(event.status)
      })),
      eventClick: function(info) {
        showModal(info.event);
      }
    });

    calendar.render();

    function statusColor(status) {
      switch (status) {
        case 'Diajukan': return ['bg-warning', 'text-dark'];
        case 'Disetujui': return ['bg-success', 'text-white'];
        case 'Ditolak': return ['bg-danger', 'text-white'];
        case 'Dibatalkan': return ['bg-secondary', 'text-white'];
        default: return [];
      }
    }

    function showModal(event) {
      document.getElementById('modal-nama-acara').innerText = event.title || '-';
      document.getElementById('modal-nama-ruang').innerText = event.extendedProps.ruang || '-';
      document.getElementById('modal-waktu-mulai').innerText = formatDate(event.start);
      document.getElementById('modal-waktu-selesai').innerText = formatDate(event.end);
      document.getElementById('modal-status').innerHTML = `<span class="badge ${statusColor(event.extendedProps.status).join(' ')}">${event.extendedProps.status}</span>`;
      document.getElementById('modal-pemohon').innerText = event.extendedProps.pemohon || '-';
      const modal = new bootstrap.Modal(document.getElementById('eventModal'));
      modal.show();
    }

    function formatDate(date) {
      if (!date) return '-';
      return new Intl.DateTimeFormat('id-ID', {
        weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', 
        hour: '2-digit', minute: '2-digit'
      }).format(date);
    }
  });
  </script>




</body>

</html>