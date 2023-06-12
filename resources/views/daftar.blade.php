<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <title>Daftar</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: #e9ecef;
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>

<body>
@include("komponen/navbar")
    <main>
    <header class="bg-dark text-white text-center py-5">
            <h1>Pendaftaran</h1>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-container">
                    <h2 class="mb-4 text-center">Daftar</h2>
                    <form method="POST" action="#">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </main>
@include("komponen/footer")
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>