<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user Profile</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/akun_user.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('icon/Untirta-Logo-Transparan.webp') }}" type="image/x-icon">
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
                <a href="{{ route('user.profile') }}" class="akun"><i class="bi bi-person"></i></a>
            </div>
        </div>
    </div>

    <!-- Branding + Nav -->
    <div class="branding bg-white border-bottom py-3">
        <div class="container d-flex align-items-center justify-content-between flex-wrap">
            <a href="{{ route('user.dashboard') }}" class="logo d-flex align-items-center text-decoration-none">
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
        </div>
    </div>
</header>

<div class="container-xl px-4 mt-4">
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="{{ route('user.profile') }}">Profile</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Foto Profil</div>
                <div class="card-body text-center">
                    <img id="profileImage" class="img-account-profile rounded-circle mb-2"
     src="{{ $user->foto_profil ? asset('storage/' . $user->foto_profil) : 'http://bootdey.com/img/Content/avatar/avatar1.png' }}"
     alt="Foto Profil"
     style="width: 180px; height: 180px; object-fit: cover;">





                    <form method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input class="form-control form-control-sm mt-3" type="file" name="foto_profil" accept="image/png, image/jpeg">
                        <button type="submit" class="btn btn-primary btn-sm mt-2">Upload Gambar Baru</button>
                    </form>

                    <div class="small text-muted mt-2">JPG atau PNG maksimal 5 MB</div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Detail Akun</span>
                    <div>
                        <button id="editBtn" class="btn btn-outline-primary btn-sm">Edit</button>
                        <button id="cancelBtn" class="btn btn-outline-secondary btn-sm d-none ms-2">Batal</button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Username --}}
                        <div id="viewUsername" class="mb-3">
                            <label class="small mb-1">Username</label>
                            <div class="form-control bg-light">{{ $user->username }}</div>
                        </div>
                        <div id="editUsername" class="mb-3 d-none">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" name="username" id="inputUsername" type="text" value="{{ $user->username }}">
                        </div>

                        {{-- Name --}}
                        <div id="viewName" class="mb-3">
                            <label class="small mb-1">Name</label>
                            <div class="form-control bg-light">{{ $user->nama }}</div>
                        </div>
                        <div id="editName" class="mb-3 d-none">
                            <label class="small mb-1" for="inputName">Name</label>
                            <input class="form-control" name="nama" id="inputName" type="text" value="{{ $user->nama }}">
                        </div>

                        {{-- NIM --}}
                        <div id="viewNIM" class="mb-3">
                            <label class="small mb-1">NIM</label>
                            <div class="form-control bg-light">{{ $user->nim }}</div>
                        </div>
                        <div id="editNIM" class="mb-3 d-none">
                            <label class="small mb-1" for="inputNIM">NIM</label>
                            <input class="form-control" name="nim" id="inputNIM" type="text" value="{{ $user->nim }}">
                        </div>

                        {{-- Email --}}
                        <div id="viewEmail" class="mb-3">
                            <label class="small mb-1">Email</label>
                            <div class="form-control bg-light">{{ $user->email }}</div>
                        </div>
                        <div id="editEmail" class="mb-3 d-none">
                            <label class="small mb-1" for="inputEmail">Email</label>
                            <input class="form-control" name="email" id="inputEmail" type="email" value="{{ $user->email }}">
                        </div>

                        <div id="saveBtnWrapper" class="d-none mt-3">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script>
    const toggleEdit = (editing) => {
        document.querySelectorAll('[id^="view"]').forEach(el => el.classList.toggle('d-none', editing));
        document.querySelectorAll('[id^="edit"]').forEach(el => el.classList.toggle('d-none', !editing));
        document.getElementById('saveBtnWrapper').classList.toggle('d-none', !editing);
        document.getElementById('editBtn').classList.toggle('d-none', editing);
        document.getElementById('cancelBtn').classList.toggle('d-none', !editing);
    };

    document.getElementById('editBtn').addEventListener('click', () => toggleEdit(true));
    document.getElementById('cancelBtn').addEventListener('click', () => toggleEdit(false));

    document.querySelector('input[name="foto_profil"]').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('profileImage').src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>

</body>
</html>
