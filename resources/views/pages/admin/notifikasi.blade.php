<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="{{ asset('assets/css/notifikasi.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('icon/Untirta-Logo-Transparan.webp') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <!-- Header -->
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
          <a href="{{ route('admin.dashboard') }}" class="logo d-flex align-items-center text-decoration-none">
            <h1 class="sitename m-0">SIJARU</h1>
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href={{route('admin.dashboard')}}>Home</a></li>
              <li><a href={{route('admin.dashboard#ruangan')}}>Ruangan</a></li>
              <li><a href={{route('admin.peminjaman')}}>Peminjaman</a></li>
              <li class="dropdown">
                <a href="#"><span>Data Pinjam</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dropdown-menu">
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

    <!-- Bagian notifikasi -->
<!-- Dalam bagian notifikasi -->
<div class="notif-container">
  <div class="notif-header">Notifikasi</div>
  <div id="notif-list">
    @foreach ($notifikasi as $notif)
      <div class="notif-item d-flex justify-content-between align-items-center mb-2 p-3 border rounded">
        <div class="notif-content d-flex justify-content-between align-items-center w-100">
          <div>
            <div class="notif-title fw-bold">{{ $notif->title }}</div>
            <div class="notif-from text-muted">Dari: {{ $notif->from }}</div>
          </div>

          {{-- Aksi Berdasarkan Tipe Notifikasi --}}
          @if ($notif->type == 'ruangan')
            <a href="{{ route('admin.dashboard') }}#ruangan" class="btn btn-primary ms-3">
              <i class="bi bi-arrow-right-circle"></i> Lihat Ruangan
            </a>

          @elseif ($notif->type == 'password')
            @php
              $requestPassword = \App\Models\RequestPassword::where('username', $notif->from)->where('status', 'pending')->first();
            @endphp

            @if($requestPassword)
              <form action="{{ route('notifikasi.update', $requestPassword->id) }}" method="POST" class="d-flex gap-2 ms-3">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="diterima">
                <button type="submit" class="btn btn-success">
                  <i class="bi bi-check2-circle"></i> Setujui
                </button>
              </form>

              <form action="{{ route('notifikasi.update', $requestPassword->id) }}" method="POST" class="ms-2">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="ditolak">
                <button type="submit" class="btn btn-danger">
                  <i class="bi bi-x-circle"></i> Tolak
                </button>
              </form>
            @else
              <span class="badge bg-secondary ms-3">Sudah diproses</span>
            @endif

          @elseif ($notif->type == 'peminjaman')
            <a href="{{ route('admin.peminjaman') }}" class="btn btn-warning ms-3">
              <i class="bi bi-info-circle"></i> Detail Peminjaman
            </a>
          @endif
        </div>
      </div>
    @endforeach
  </div>
</div>


    <script src="{{ asset('assets/js/notifikasi.js') }}"></script>
  </body>
</html>
