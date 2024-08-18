<?php
// Memanggil atau membutuhkan file function.php
require 'koneksi.php';

// Jika fungsi tambah jika data tersimpan, maka munculkan alert dibawah
if (isset($_POST['simpan'])) {
    if (tambahakun($_POST)) {
        echo "<script>
                alert('Data Akun berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data Akun gagal ditambahkan!');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Absensi Mahasiswa</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
</nav>

<?php

?>
    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Akun</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control w-50" id="nama" placeholder="Masukkan nama" min="1" name="nama" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NPM</label>
                        <input type="text" class="form-control w-50" id="nim" placeholder="Masukkan npm" name="nim" autocomplete="off" pattern="\d{8}" title="Masukkan tepat 8 digit angka." required>



                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-md w-50" id="username" placeholder="Masukkan username" name="username" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="text" class="form-control w-50" id="kelas" placeholder="password" name="password" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">role</label>
                        <select class="form-select w-50" id="level" name="level">
                            <option disabled selected value>------------------------------------role--------------------------------------------</option>
                            <option value="mahasiswa">mahasiswa</option>
                        </select>
                    </div>
                    
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button type="simpan" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

</body>

</html>