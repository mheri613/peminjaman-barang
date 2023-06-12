<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <title>daftar akun</title>
</head>
<body>

@include("komponen/navbar")

<header class="bg-dark text-white text-center py-5">
    <h1>Daftar akun</h1>
</header>

<main>
    <div class="container">
        <div class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari akun...">
                <button class="btn btn-outline-success">Search</button>
            </div>
        </div>
        <div class="table-responsive table-container center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Akun</th>
                        <th scope="col">Data Akun</th>
                        <th scope="col">Data Akun</th>
                        <th scope="col">Data Akun</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-success">Terima</button>
                                <button type="button" class="btn btn-danger">Tolak</button>
                                <a href="edit" class="btn btn-primary">Edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-success">Terima</button>
                                <button type="button" class="btn btn-danger">Tolak</button>
                                <a href="edit" class="btn btn-primary">Edit</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Tambahkan baris data lainnya di sini -->
                </tbody>
            </table>
        </div>
    </div>
</main>

@include("komponen/footer")

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
