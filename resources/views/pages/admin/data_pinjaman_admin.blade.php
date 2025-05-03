<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="{{ asset('assets/css/data_pinjaman_admin.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('icon/Untirta-Logo-Transparan.webp') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
            <a href="{{ route('admin.dashboard') }}" class="logo d-flex align-items-center text-decoration-none">
                <h1 class="sitename m-0">SIJARU</h1>
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

<body>
    <div class="container mt-4">
        <h2>Data Peminjaman Ruangan</h2>
    
        @if(session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif
    
        <table id="tabelPinjaman" class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Ruangan</th>
                  <th>Acara</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($peminjamans as $pinjaman)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pinjaman->tanggal_peminjaman }}</td>
                    <td>{{ $pinjaman->nama_ruangan }}</td>
                    <td>{{ $pinjaman->nama_acara }}</td>
                    <td><span class="badge {{ $pinjaman->status == 'menunggu' ? 'bg-warning' : ($pinjaman->status == 'diterima' ? 'bg-success' : 'bg-danger') }}">{{ ucfirst($pinjaman->status) }}</span></td>
                    <td>
                      @if($pinjaman->status == 'menunggu')
                        <form action="{{ route('admin.peminjaman.approve', $pinjaman->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('PUT')
                          <button class="btn btn-success btn-sm"><i class="bi bi-check2"></i></button>
                        </form>
                        <form action="{{ route('admin.peminjaman.reject', $pinjaman->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('PUT')
                          <button class="btn btn-danger btn-sm"><i class="bi bi-x-lg"></i></button>
                        </form>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
        </table>
    </div>
        

    <!-- JavaScript External File -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets/js/data_pinjaman_admin.js') }}"></script>

    @push('scripts')
<script>
    $(document).ready(function () {
        $('#tabelPinjaman').DataTable({
            responsive: true
        });
    });
</script>
    
</body>
</html>
