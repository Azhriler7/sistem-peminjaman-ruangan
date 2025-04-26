<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Data Pinjaman</title>

      <!-- Favicons -->
      <link rel="shortcut icon" href="assets/img/Untirta-Logo-Transparan.webp" type="image/x-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com" rel="preconnect">
      <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap" rel="stylesheet">

      <!-- Bootstrap & Icons -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

      <!-- DataTables CSS -->
      <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

      <!-- Custom CSS untuk Data Pinjaman -->
      <link href="assets/css/data_pinjaman.css" rel="stylesheet">
    </head>

    <header id="header" class="header sticky-top">

      <!-- Topbar -->
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
    
      <!-- Branding + Navigation -->
      <div class="branding bg-white border-bottom py-3">
        <div class="container d-flex align-items-center justify-content-between flex-wrap">
          <!-- Logo -->
          <a href="index.html" class="logo d-flex align-items-center text-decoration-none">
            <h1 class="sitename m-0">SIJARU</h1>
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="#hero">Home</a></li>
              <li><a href="#about">Ruangan</a></li>
              <li><a href="#peminjaman">Peminjaman</a></li>
              <li class="dropdown">
                <a href="#"><span>Data Pinjam</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Data Histori Peminjaman</a></li>
                </ul>
              </li>
              <li><a href="#contact">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
          
    </header>

<body>
  <div class="container bg-white p-4 rounded shadow">
    <h3 class="mb-3">DATA PINJAMAN</h3>

    <a href="form-peminjaman.html" class="btn btn-primary btn-add">+ Tambah Pinjaman</a>

    <table id="tabelPinjaman" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Acara <br><small>Waktu Mulai - Selesai</small></th>
          <th>Nama Ruang <br><small>Nama Gedung</small></th>
          <th>Nama Acara</th>
          <th>Status Acara</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </table>
  </div>

  <!-- JQuery dan Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <!-- Custom JS untuk Data Pinjaman -->
  <script src="assets/js/data_pinjaman.js"></script>
</body>
</html>