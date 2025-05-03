<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Peminjaman Ruangan - SIJARU UNTIRTA</title>

  <link rel="shortcut icon" href="{{ asset('assets/img/Untirta-Logo-Transparan.webp') }}" type="image/x-icon">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Bootstrap & Main CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>

  <!-- Topbar Only -->
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
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-cente">
      
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href={{route('admin.dashboard')}} class="logo d-flex align-items-center">
          <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href={{route('admin.dashboard')}} class="active">Home</a></li>
            <li><a href={{route('admin.dashboard#ruangan')}}>Ruangan</a></li>
            <li><a href={{route('admin.peminjaman')}}>Peminjaman</a></li>
            <li class="dropdown">
              <a href="#"><span>Data Pinjaman</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('admin.data.pinjaman') }}">Pinjaman Masuk</a></li>
                <li><a href="{{ route('admin.history') }}">Data Histori Peminjaman</a></li>
              </ul>
            </li>
            <li><a href={{route('admin.dashboard#contact')}}>Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>
  </header>

  <main class="main py-5" style="background-color: #f8f9fa;">
    <!-- Tombol Back -->
    <div class="d-flex justify-content-start mb-3 ps-5">
        <a href="{{ route('admin.dashboard') }}" class="text-decoration-none text-primary small">
            ← Back
        </a>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5">
        <h2 class="fw-bold" style="font-size: 2.2rem;">Tambah Data Ruangan</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Lengkapi informasi ruangan berikut untuk menambahkannya ke daftar.</p>
        </div>

        <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0" style="border-radius: 1rem;">
            <div class="card-body p-4">

                <form action="{{ route('admin.ruangan.update', $ruangan->id) }}" method="POST" enctype="multipart/form-data" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
                @method('PUT')
                
                <!-- Nama Ruangan -->
                <div class="mb-3">
                  <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                  <input type="text" name="nama_ruangan" id="nama_ruangan" class="form-control" 
                         value="{{ old('nama_ruangan', $ruangan->nama_ruangan) }}" 
                         placeholder="Contoh: Aula Fakultas Teknik" required>
              </div>

                <!-- Gedung -->
                <div class="mb-3">
                    <label for="gedung" class="form-label">Gedung</label>
                    <input type="text" name="gedung" id="gedung" class="form-control" value="{{ old('gedung', $ruangan->nama_ruangan) }}" placeholder="Contoh: Gedung Aula Utama" required>
                </div>

                <!-- Kapasitas -->
                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas </label>
                    <input type="number" name="kapasitas" id="kapasitas" class="form-control" value="{{ old('kapasitas', $ruangan->nama_ruangan) }}"  placeholder="Contoh: 100" required>
                </div>

                <!-- Fasilitas -->
                <div class="mb-3">
                    <label for="fasilitas" class="form-label">Fasilitas</label>
                    <input type="text" name="fasilitas" id="fasilitas" class="form-control" value="{{ old('fasilitas', $ruangan->nama_ruangan) }}" placeholder="Contoh: Proyektor, Mic, Sound System, AC" required>
                </div>

                <!-- Deskripsi Ruangan -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Ruangan</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" value="{{ old('deskripsi', $ruangan->nama_ruangan) }}" placeholder="Tulis deskripsi ruangan..." required></textarea>
                </div>

                <!-- Upload Gambar -->
                <div class="mb-3">
                  <label for="gambar" class="form-label">Upload Gambar Ruangan</label>
                  <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                  @if ($ruangan->gambar)
                      <div class="mt-2">
                          <p class="text-muted small mb-1">Gambar saat ini:</p>
                          <img src="{{ asset('storage/' . $ruangan->gambar) }}" alt="Gambar Ruangan" width="200">
                      </div>
                  @endif
              </div>

                <!-- Submit -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">
                    <i class="bi bi-plus-circle"></i> simpan perubahan
                    </button>
                </div>

                </form>

            </div>
            </div>

        </div>
        </div>
    </div>

    </main>


  <!-- Footer -->
  <footer id="footer" class="footer mt-auto">
    <div class="container text-center py-4">
      <p>&copy; <strong>SIJARU UNTIRTA</strong>. All Rights Reserved</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
  // Filter ruangan sesuai input
  function filterRuangan() {
    var input = document.getElementById("search_ruangan").value.toLowerCase();
    var list = document.getElementById("list_ruangan");
    var items = document.querySelectorAll("#ruanganOptions li");
    let ada = false;

    items.forEach(function(item) {
      if (item.innerHTML.toLowerCase().includes(input)) {
        item.style.display = "";
        ada = true;
      } else {
        item.style.display = "none";
      }
    });

    if (input.length > 0 && ada) {
      list.style.display = "block";
    } else {
      list.style.display = "none";
    }
  }

  // Kalau user klik salah satu pilihan
  function pilihRuangan(value) {
    document.getElementById("search_ruangan").value = value;
    document.getElementById("list_ruangan").style.display = "none";
  }
  </script>

</body>

</html>
