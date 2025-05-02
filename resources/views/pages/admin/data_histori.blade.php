<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Histori Pinjaman</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="{{ asset('assets/css/data-pinjaman.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="shortcut icon" href="icon/Untirta-Logo-Transparan.webp" type="image/x-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
      <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <!--icon-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a href="{{ route('admin.profile') }}" class="akun"><i class="bi bi-person"></i></a>
            <a href="{{ route('admin.notifikasi')}}"><i class="bi bi-bell"></i></a>
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
        <div class="container my-5">
            <div class="card shadow">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                    <h3 class="mb-0">Data Histori Pinjaman</h3>
                    <div class="d-flex gap-2">
                      <a href="{{ route('admin.history.export.csv') }}" class="btn btn-success">
                          <i class="bi bi-file-earmark-spreadsheet"></i> Export CSV
                      </a>
                      <a href="{{ route('admin.history.export.pdf') }}" class="btn btn-danger">
                          <i class="bi bi-file-earmark-pdf"></i> Export PDF
                      </a>
                  </div>
                  
                </div>
                <div class="card-body">
                    <table id="tabelPinjaman" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Acara <br><small>Waktu Mulai - Selesai</small></th>
                            <th>Nama Ruang <br><small>Nama Gedung</small></th>
                            <th>Nama Acara</th>
                            <th>Status Acara</th>
                        </tr>
                    </thead>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Bootstrap Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
        <!-- DataTables & Buttons -->
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    
        <!-- DataTables Setup -->
        <script src="{{ asset('assets/js/data_histori.js') }}"></script>
</body>
</html>