<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <!-- logo -->
            <a class="navbar-brand" href="/">
                Take
            </a>

            <!-- toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse fw-normal" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
        </div>
    </nav>
    <header class="bg-dark text-white text-center py-5">
        <h1>website peminjaman barang</h1>
        <p>carilah barang yang anda butuhkan dan pinjam secara praktis</p>
    </header>

    <main class="container mt-5">
        <h2>Tentang Kami</h2>
        <div class="row">
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies, ipsum id pharetra elementum,
                    dui libero finibus sem, ut lacinia magna libero id turpis.</p>

                <h2>Contact</h2>
                <p>Email: heri@pnl.com</p>
                <p>Phone: 123-456-7890</p>

                <div class="row">
                    <div class="col-mt-20">
                        <a name="daftar" id="" class="btn btn-primary me-3" href="register" role="button">Daftar</a>
                        <a name="login" id="" class="btn btn-secondary me-3" href="login" role="button">Login</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <img src="gambar/bangunan.png" alt="Gambar" class="img-fluid rounded float-end">
            </div>
        </div>
    </main>
    @include("komponen/footer")
</body>
<script>
        // Ambil URL halaman saat ini
        var currentUrl = window.location.href;

        // Cari semua elemen menu
        var menuItems = document.querySelectorAll('.navbar-nav .nav-link');

        // Iterasi melalui setiap elemen menu
        menuItems.forEach(function (menuItem) {
            // Periksa apakah URL saat ini sama dengan href elemen menu
            if (currentUrl === menuItem.href) {
                // Tambahkan kelas 'active' pada elemen menu saat ini
                menuItem.classList.add('active');
            }
        });
    </script>
<script src="/js/bootstrap.bundle.min.js"></script>
</html>