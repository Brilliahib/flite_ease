<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flite Ease</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" href="{{ asset('img/plane.jpg') }}" type="image/jpeg">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/plane.jpg') }}" alt="" width="50px">
            </a>
            <div class="logo-text front mt-2">
                <h6 class="my-0" style="margin-bottom: 0 !important; color:#000; font-weight:800">Flite Ease
                </h6>
            </div>
            <button class="navbar-toggler m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Ganti dengan SVG icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#808080"
                    class="bi bi-filter-right" viewBox="0 0 16 16">
                    <path
                        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5" />
                </svg>
                <!-- /Ganti dengan SVG icon -->
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('cari-tiket') ? 'active' : '' }}" href="/cari-tiket">Cari Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('riwayat') ? 'active' : '' }}"  href="/riwayat">Riwayat Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="main" class="main pt-0">
        @yield('container')
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>