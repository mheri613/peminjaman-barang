<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    @include("navbar")
        <header class="bg-dark text-white text-center py-5">
            <h1>Welcome to Our Website</h1>
            <p>Explore and discover amazing things!</p>
        </header>

        <main class="container mt-5">
            <h2>Tentang Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies,</br> ipsum id pharetra elementum,
                dui
                libero finibus sem, ut lacinia magna libero id turpis.</p>

            <h2>contact</h2>
            <p>Email: heri@pnl.com</p>
            <p>Phone: 123-456-7890</p>
            <div class="row">
                <div class="mt-10">
                    <a name="daftar" id="" class="btn btn-primary me-3" href="#" role="button">Daftar</a>
                    <a name="login" id="" class="btn btn-secondary me-3" href="#" role="button">Login</a>
                </div>
            </div>
        </main>


        <footer class="bg-light text-center py-3 mt-5">
            &copy; 2023 Our Website. All rights reserved.
        </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>