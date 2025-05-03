<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Pinjaman</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/data_pinjaman_user.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="{{ asset('icon/Untirta-Logo-Transparan.webp') }}" type="image/x-icon" />
</head>

<body>
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
          <a href="{{ route('user.profile')}}"><i class="bi bi-person"></i></a>
        </div>
      </div>
    </div>

    <!-- Branding + Navigation -->
    <div class="branding bg-white border-bottom py-3">
      <div class="container d-flex align-items-center justify-content-between flex-wrap">
        <a href="{{ route('user.dashboard')}}" class="logo d-flex align-items-center text-decoration-none">
          <h1 class="sitename m-0">SIJARU</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href={{route('user.dashboard')}}>Home</a></li>
                    <li><a href={{route('user.dashboard#ruangan')}}>Ruangan</a></li>
            <li><a href="{{ route('user.pengajuan.create')}}">Peminjaman</a></li>
            <li class="dropdown">
                <a href="#"><span>Data Pinjaman</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('user.data-pinjaman') }}">Data Histori Peminjaman</a></li>
              </ul>
            </li>
            <li><a href={{route('user.dashboard#contact')}}>Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="container bg-white p-4 rounded shadow mt-4">
    <h3 class="mb-3">DATA PINJAMAN</h3>

    <a href="{{ route('user.pengajuan.create')}}" class="btn btn-primary btn-add mb-3">+ Tambah Pinjaman</a>

    <table id="tabelPinjaman" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Acara <br><small>Waktu Mulai - Selesai</small></th>
          <th>Nama Ruang <br><small>Nama Gedung</small></th>
          <th>Nama Acara</th>
          <th>Status Acara</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($peminjamans as $index => $item)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>
            {{ \Carbon\Carbon::parse($item->tanggal_peminjaman)->translatedFormat('d F Y') }} <br>
            <small>{{ \Carbon\Carbon::parse($item->waktu_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($item->waktu_selesai)->format('H:i') }}</small>
          </td>
          <td>
            {{ $item->ruangan->nama_ruangan ?? '-' }} <br>
            <small>{{ $item->ruangan->gedung ?? '-' }}</small>
          </td>
          <td>{{ $item->nama_acara }}</td>
          <td>
            @if ($item->status == 'pending')
            <span class="badge bg-warning text-dark">Menunggu</span>
            @elseif ($item->status == 'diterima')
            <span class="badge bg-success">Diterima</span>
            @else
            <span class="badge bg-danger">Ditolak</span>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/data_pinjaman_user.js') }}"></script>

</body>
</html>
