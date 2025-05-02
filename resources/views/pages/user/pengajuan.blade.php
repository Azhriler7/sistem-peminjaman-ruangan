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
        </div>
      </div>
    </div>
  </header>

  <main class="main py-5" style="background-color: #f8f9fa;">
    <div class="container" data-aos="fade-up">

      <!-- Tombol Back -->
      <div class="mb-4">
        <a href="{{ url('/user/dashboard#ruangan') }}" class="text-decoration-none text-primary" style="font-size: 0.9rem;">
          ← Back
        </a>
      </div>

      <div class="text-center mb-5">
        <h2 class="fw-bold" style="font-size: 2.2rem;">Formulir Peminjaman Ruangan</h2>
        <p class="text-muted" style="font-size: 1.1rem;">Silakan lengkapi data berikut untuk mengajukan peminjaman ruangan di lingkungan UNTIRTA.</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card shadow-sm border-0" style="border-radius: 1rem;">
            <div class="card-body p-4">
              <form action="{{ route('peminjaman.store')}}" method="POST" enctype="multipart/form-data" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
                <div class="row gy-4">
              
                  <!-- Nama Peminjam -->
                  <div class="col-md-6">
                    <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" required>
                    </div>
                  </div>
              
                  <!-- Nama Acara -->
                  <div class="col-md-6">
                    <label for="nama_acara" class="form-label">Nama Acara</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                      <input type="text" name="nama_acara" id="nama_acara" class="form-control" required>
                    </div>
                  </div>
              
                  <!-- Pilih Ruangan -->
                  <div class="col-md-12">
                    <label for="search_ruangan" class="form-label">Nama Ruangan</label>
                    <div class="input-group">
                      <input type="text" id="search_ruangan" class="form-control" placeholder="Cari Nama atau ID Ruangan..." onkeyup="filterRuangan()" autocomplete="off">
                      <button class="btn btn-outline-primary" type="button" onclick="filterRuangan()">
                        <i class="bi bi-search"></i>
                      </button>
                    </div>
              
                    <input type="hidden" name="ruangan_id" id="ruangan_id">
                    <input type="hidden" name="nama_ruangan" id="nama_ruangan">
              
                    <div class="mt-2" id="list_ruangan" style="display: none; border: 1px solid #ccc; border-radius: 5px;">
                      <ul class="list-group" id="ruanganOptions" style="cursor: pointer;">
                        <li class="list-group-item" onclick="pilihRuangan('A001', 'Aula Fakultas Teknik')">A001 - Aula Fakultas Teknik</li>
                        <li class="list-group-item" onclick="pilihRuangan('D002', 'Aula Dekanat')">D002 - Aula Dekanat</li>
                        <li class="list-group-item" onclick="pilihRuangan('V003', 'VICON Gedung Vicon')">V003 - VICON Gedung Vicon</li>
                        <li class="list-group-item" onclick="pilihRuangan('C004', 'Ruang CoE')">C004 - Ruang CoE</li>
                        <li class="list-group-item" onclick="pilihRuangan('R005', 'Ruang R (Labkom)')">R005 - Ruang R (Labkom)</li>
                        <li class="list-group-item" onclick="pilihRuangan('B006', 'Ruang BR (Gedung BR)')">B006 - Ruang BR (Gedung BR)</li>
                      </ul>
                    </div>
                  </div>
              
                  <!-- Kontak -->
                  <div class="col-md-6">
                    <label for="kontak" class="form-label">Kontak Penanggung Jawab</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                      <input type="text" name="kontak" id="kontak" class="form-control" required>
                    </div>
                  </div>
              
                  <!-- Tanggal Peminjaman -->
                  <div class="col-md-6">
                    <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control" required>
                  </div>
              
                  <!-- Waktu Mulai -->
                  <div class="col-md-6">
                    <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                    <input type="time" name="waktu_mulai" id="waktu_mulai" class="form-control" required>
                  </div>
              
                  <!-- Waktu Selesai -->
                  <div class="col-md-6">
                    <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                    <input type="time" name="waktu_selesai" id="waktu_selesai" class="form-control" required>
                  </div>
              
                  <!-- Surat Permohonan -->
                  <div class="col-md-12">
                    <label for="surat_permohonan" class="form-label">Upload Surat Permohonan</label>
                    <input type="file" name="surat_permohonan" id="surat_permohonan" class="form-control" accept=".pdf,.doc,.docx">
                  </div>
              
                  <!-- Catatan -->
                  <div class="col-md-12">
                    <label for="catatan" class="form-label">Catatan Tambahan (Optional)</label>
                    <textarea name="catatan" id="catatan" class="form-control" rows="4" placeholder="Tulis keterangan tambahan jika diperlukan..."></textarea>
                  </div>
              
                  <!-- Submit -->
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg mt-3">Ajukan Peminjaman</button>
                  </div>
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
    
      list.style.display = input.length > 0 && ada ? "block" : "none";
    }
    
    function pilihRuangan(id, nama) {
      document.getElementById("search_ruangan").value = `${id} - ${nama}`;
      document.getElementById("ruangan_id").value = id;
      document.getElementById("nama_ruangan").value = nama;
      document.getElementById("list_ruangan").style.display = "none";
    }
    </script>
    

</body>

</html>
