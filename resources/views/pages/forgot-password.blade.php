<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lupa Password - SIJARU</title>

  <link rel="shortcut icon" href="{{ asset('assets/img/Untirta-Logo-Transparan.webp') }}" type="image/x-icon">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Bootstrap & Custom CSS -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/password.request.css') }}" rel="stylesheet">
</head>

<body>

  <!-- Header -->
  <header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:pusdainfo@untirta.ac.id">pusdainfo@untirta.ac.id</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62254 280330</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://x.com/HumasUntirta" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/untirtabantenofficial" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/untirta_official" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/school/universitassultanagengtirtayasa" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </header>

  <!-- Forgot Password Form -->
  <div class="global-container my-5">
    <div class="card register form">
      <div class="row g-0">
        <!-- Gambar -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
          <img src="{{ asset('img/kampus.jpg') }}" class="img-fluid" alt="Gambar Kampus">
        </div>

        <!-- Form -->
        <div class="col-md-6">
          <div class="card-body px-4 py-4">
            <h1 class="card-title text-center mb-4">RESET PASSWORD</h1>
            <form method="POST" action="{{ route('forgot-password.submit') }}">
              @csrf

              <div class="mb-3">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="inputUsername" required>
              </div>

              <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="inputEmail" required>
              </div>

              <div class="mb-3">
                <label for="inputPassword" class="form-label">New Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword" required>
              </div>

              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" required>
              </div>

              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="showPasswordCheck">
                <label class="form-check-label" for="showPasswordCheck">Tampilkan Password</label>
              </div>

              <div class="d-flex justify-content-start">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
              </div>
            </form>

            <div class="mt-3">
              <a href="{{ route('login') }}" class="btn btn-outline-primary w-100">
                LOGIN <i class="bi bi-box-arrow-in-right"></i>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/password.request.js') }}"></script>
</body>

</html>
