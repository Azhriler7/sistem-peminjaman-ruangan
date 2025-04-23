<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="login.css" rel="stylesheet">
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
    
    <div class="global-container">
      <div class="card login form">
          <div class="row g-0">
              <!-- Bagian Gambar -->
              <div class="col-md-6 d-flex justify-content-center align-items-center">
                  <img src="pic\kampus.jpg" class="img-fluid" alt="Gambar">
              </div>
  
              <!-- Bagian Formulir Login -->
              <div class="col-md-6">
                  <div class="card-body">
                      <h1 class="card-title text-center">LOGIN</h1>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                          <div class="mb-3">
                              <label for="inputUsername" class="form-label">Username</label>
                              <input type="text" class="form-control" id="inputUsername" required>
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input larger-checkbox" id="showPasswordCheck">
                              <label class="form-check-label" for="showPasswordCheck">Tampilkan Password</label>
                          </div>
                          <div class="d-flex justify-content-start">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                      </form>
                      <a href="register.html" class="btn btn-secondary register-btn">
                        REGISTER <i class="bi bi-play-circle"></i>
                    </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script src="js/bootstrap.js"></script>
  <script src="login.js"></script>
  </body>
</html> 