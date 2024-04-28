<?php
// Memanggil atau membutuhkan file function.php
require 'koneksi.php';

// Jika fungsi tambah jika data tersimpan, maka munculkan alert dibawah
if (isset($_POST['simpan'])) {
    if (tambahakun($_POST)) {
        echo "<script>
                alert('Data Akun berhasil ditambahkan!');
                document.location.href = 'akun.php';
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
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
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
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control form-control-md w-50" id="username" placeholder="Masukkan username" name="username" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="text" class="form-control w-50" id="kelas" placeholder="password" name="password" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">level</label>
                        <select class="form-select w-50" id="level" name="level">
                            <option disabled selected value>------------------------------------level--------------------------------------------</option>
                            <option value="mahasiswa">mahasiswa</option>
                            <option value="admin">admin</option>
                        </select>
                    </div>
                    
                    <a href="halaman_admin.php" class="btn btn-secondary">Kembali</a>
                    <button type="simpan" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

</body>

</html>