<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Home</title>
</head>

<body>
@include("komponen/navbar")
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
                        <a name="daftar" id="" class="btn btn-primary me-3" href="daftar" role="button">Daftar</a>
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
<script src="/js/bootstrap.bundle.min.js"></script>
</html>