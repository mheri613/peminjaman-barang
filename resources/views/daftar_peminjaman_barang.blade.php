<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman Barang</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
@include("komponen/navbar")

    <header class="bg-dark text-white text-center py-5">
            <h1>Daftar Peminjaman</h1>
    </header>
<div class="container">
    <main>
    <div class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari akun...">
                <button class="btn btn-outline-success">Search</button>
            </div>
        </div>

        <div class="py-5 bg-body-tertiary">
            <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
@include("komponen/footer") 
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>