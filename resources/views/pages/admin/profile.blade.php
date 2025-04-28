<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun User</title>

    <!-- Style dan icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/akun_user.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('icon/Untirta-Logo-Transparan.webp') }}" type="image/x-icon">
</head>
<body>

<div class="container-xl px-4 mt-4">
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="{{ route('admin.profile') }}">Profile</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <!-- Foto Profil -->
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>

        <!-- Detail Akun -->
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{ route('akun.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        @if(auth()->user()->username)
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" name="username" type="text" value="{{ auth()->user()->username }}">
                        </div>
                        @endif

                        @if(auth()->user()->name)
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Nama</label>
                                <input class="form-control" id="inputFirstName" name="name" type="text" value="{{ auth()->user()->name }}">
                            </div>
                        </div>
                        @endif

                        @if(auth()->user()->nim)
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">NIM</label>
                                <input class="form-control" id="inputOrgName" name="nim" type="text" value="{{ auth()->user()->nim }}">
                            </div>
                        </div>
                        @endif

                        @if(auth()->user()->email)
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" id="inputEmailAddress" name="email" type="email" value="{{ auth()->user()->email }}">
                        </div>
                        @endif

                        @if(auth()->user()->phone)
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone Number</label>
                                <input class="form-control" id="inputPhone" name="phone" type="tel" value="{{ auth()->user()->phone }}">
                            </div>
                        </div>
                        @endif

                        <a href="{{ route('akun.update') }}" class="btn btn-primary">Update Profile</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
