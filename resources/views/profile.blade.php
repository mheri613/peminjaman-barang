<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Profile</title>
    <style>
        body, html {
            height: 100%;
        }

        .profile {
            text-align: center;
            margin-top: 50px;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-data {
            font-size: 18px;
        }
        .ukuran-gambar {
        width: 300px; 
        height: auto;
    }
    </style>
</head>

<body>
    @include("komponen/navbar")
    <header class="bg-dark text-white text-center py-5">
        <h1>Profile</h1>

    </header>
    <div class="container h-100">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-lg-8">
                <div class="profile">
                    <!-- <img src="https://drive.google.com/uc?export=view&id=1vDSXyy02XW3gAl75wCI1UP6GT-Icd1Sn" alt="foto profil" class="profile-img img-fluid ukuran-gambar"> -->
                    <img src="https://avatars.githubusercontent.com/u/112502340?v=4" alt="foto profil" class="profile-img img-fluid ukuran-gambar">
                    <h3 class="mb-4">Heri Maulana</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Email: heri@pnl.com</li>
                        <li class="list-group-item">Phone: +62 123 456 7890</li>
                        <li class="list-group-item">Location: ckb city</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include("komponen/footer")

</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>
