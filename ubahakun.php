<?php
// Memanggil atau membutuhkan file function.php
require 'koneksi.php';

// Mengambil data dari nim dengan fungsi get
$name = $_GET['nama'];


// Mengambil data dari table Mahasiswa dari nim
$akun = query("SELECT * FROM user WHERE nama='$name'")[0];




// Jika fungsi ubah ljika data terubah, maka munculkan alert dibawah
if (isset($_POST['ubahakun'])) {
    if (ubahakun($_POST) > 0) {
        echo "<script>
                alert('Data mahasiswa berhasil diubah!');
                document.location.href = 'akun.php';
            </script>";
    } else {
        // Jika fungsi ubah jika data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data mahasiswa gagal diubah!');
            </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data</title>
</head>

<body>
    <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
    <a class="navbar-brand" href="halaman_admin.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="akun.php">Menu Akun</a>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="halaman_admin.php">Tabel Absensi</a>
        <li class="nav-item">
        
          <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Log out</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Akun Pengguna</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="nama" class="form-label">NPM</label>
                        <input type="text" class="form-control w-50" id="nim" value="<?= $akun['nim']; ?>" name="nim" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control w-50" id="nama" value="<?= $akun['nama']; ?>" name="nama" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control w-50" id="username" value="<?= $akun['username']; ?>" name="username" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control w-50" id="password" value="<?= $akun['password']; ?>" name="password" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">level</label>
                        <select class="form-select w-50" id="level" name="level">
                            <option disabled selected value>--------------------------------------------level--------------------------------------------</option>
                            <option value="mahasiswa" <?php if ($akun['level'] == 'mahasiswa') { ?> selected='' <?php } ?>>mahasiswa</option>
                            <option value="admin" <?php if ($akun['level'] == 'admin') { ?> selected='' <?php } ?>>admin</option>
                        </select>
                    </div>
                    
                    <a href="akun.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="ubahakun">Ubah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>