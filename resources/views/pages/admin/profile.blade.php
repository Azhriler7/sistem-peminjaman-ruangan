{{-- resources/views/akun_user.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pinjaman</title>

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
    {{-- Header --}}
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
                </div>
            </div>
        </div>

        <!-- Branding + Nav -->
        <div class="branding bg-white border-bottom py-3">
            <div class="container d-flex align-items-center justify-content-between flex-wrap">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center text-decoration-none">
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

    {{-- Main Content --}}
    <div class="container-xl px-4 mt-4">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="{{ url('akun_user') }}">Profile</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                    <img id="profileImage" class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">

                        <!-- Hidden file input -->
                        <input type="file" id="uploadInput" accept="image/png, image/jpeg" style="display: none;">
                        
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button" onclick="document.getElementById('uploadInput').click()">Upload new image</button>
                    
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                        {{-- Username --}}
                            @if (!empty(auth()->user()->username))
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Username</label>
                                    <input class="form-control" id="inputUsername" type="text" value="{{ auth()->user()->username }}">
                                </div>
                            @endif

                            {{-- Name --}}
                            @if (!empty(auth()->user()->name))
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Name</label>
                                        <input class="form-control" id="inputFirstName" type="text" value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                            @endif

                            {{-- NIM --}}
                            @if (!empty(auth()->user()->nim))
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">NIM</label>
                                        <input class="form-control" id="inputOrgName" type="text" value="{{ auth()->user()->nim }}">
                                    </div>
                                </div>
                            @endif

                            {{-- Email (biasanya selalu ada, tapi tetap amanin) --}}
                            @if (!empty(auth()->user()->email))
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control" id="inputEmailAddress" type="email" value="{{ auth()->user()->email }}">
                                </div>
                            @endif

                            {{-- Phone --}}
                            @if (!empty(auth()->user()->phone))
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone Number</label>
                                        <input class="form-control" id="inputPhone" type="tel" value="{{ auth()->user()->phone }}">
                                    </div>
                                </div>
                            @endif

                            <a href="" class="btn btn-primary">Update Profile</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS (Optional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
