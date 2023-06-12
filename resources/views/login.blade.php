<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Login</title>
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
    <header class="bg-dark text-white text-center py-5">
            <h1>Login</h1>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-container">
                    <h2 class="mb-4 text-center">Form Login</h2>
                    <form method="POST" action="#">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">ingat saya</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@include("komponen/footer")
</body>
<script src="/js/bootstrap.bundle.min.js"></script>

</html>