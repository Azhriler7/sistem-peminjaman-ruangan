<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login - SIJARU</title>

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('assets/img/Untirta-Logo-Transparan.webp') }}" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Global Theme Style (main) -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- Custom Login Page Style -->
  <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet">
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
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
          <h1 class="sitename m-0">SIJARU</h1>
        </a>
  
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ url('/') }}#hero" class="active">Home</a></li>
            <li><a href="{{ url('/') }}#ruangan">Ruangan</a></li>
            <li><a href="{{ url('/') }}#peminjaman">Peminjaman</a></li>
            <li class="dropdown">
              <a href="#"><span>Data Pinjaman</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/') }}#data-pinjaman">Data Histori Peminjaman</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/') }}#contact">Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        
  </header>
  
<body>
    <div class="global-container">
        <div class="card register form">
            <div class="row g-0">
                <!-- Bagian Gambar -->
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/kampus.jpg') }}" class="img-fluid" alt="Gambar">
                </div>
    
                <!-- Bagian Formulir Login -->
                <div class="col-md-6">
                    <div class="card-body">
                        <h1 class="card-title text-center">REGISTER</h1>
                        <form>
                            <div class="mb-3">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="text" class="form-control" id="inputUsername" required>
                              </div>
                              <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="inputEmail" required>
                              </div>
                              <div class="mb-3">
                                  <label for="inputPassword" class="form-label">Password</label>
                                  <input type="password" class="form-control" id="inputPassword" required>
                                </div>
                                <div class="mb-3">
                                  <label for="confirmPassword" class="form-label">Confirm Password</label>
                                  <input type="password" class="form-control" id="confirmPassword" required>
                                </div>
                                <!-- Satu checkbox untuk menampilkan password -->
                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="showPasswordCheck">
                                  <label class="form-check-label" for="showPasswordCheck">Tampilkan Password</label>
                                </div>                                        
                                <div class="d-flex justify-content-start">
                                  <button type="submit" class="btn btn-primary">REGISTER</button>
                              </div>
                        </form>
                        <a href="{{ route('login') }}" class="btn btn-outline-primary register-btn">
                          LOGIN <i class="bi bi-box-arrow-in-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="register.js"></script>
</body>
</html>