<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="{{ asset('akun_user.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('icon/Untirta-Logo-Transparan.webp') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,800&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<header id="header" class="header sticky-top">
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
                <a href="{{ route('akun') }}"><i class="bi bi-person"></i></a>
            </div>
        </div>
    </div>

    <div class="branding bg-white border-bottom py-3">
        <div class="container d-flex align-items-center justify-content-between flex-wrap">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center text-decoration-none">
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
            </nav>
        </div>
    </div>
</header>

<body>
    <div class="container-xl px-4 mt-4">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="{{ route('akun_user') }}">Profile</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <img id="profileImage" class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <p><strong>Username:</strong> <span id="username"></span></p>
                        <p><strong>Name:</strong> <span id="name"></span></p>
                        <p><strong>NIM:</strong> <span id="nim"></span></p>
                        <p><strong>Email Address:</strong> <span id="email"></span></p>
                        <p><strong>Phone Number:</strong> <span id="phone"></span></p>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/akun_user.js') }}"></script>
</body>
</html>
