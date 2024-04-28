<?php
// Memanggil atau membutuhkan file function.php
require 'koneksi.php';

// Mengambil data dari nim dengan fungsi get
$nim = $_GET['nim'];

// Mengambil data dari table Mahasiswa dari nim
$siswa = query("SELECT * FROM mahasiswa WHERE nim = $nim")[0];

// Jika fungsi ubah ljika data terubah, maka munculkan alert dibawah
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data mahasiswa berhasil diubah!');
                document.location.href = 'halaman_admin.php';
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

    <title>Ubah Data</title>
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
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Mahasiswa</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control w-50" id="nim" value="<?= $siswa['nim']; ?>" name="nim" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control w-50" id="nama" value="<?= $siswa['nama']; ?>" name="nama" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control w-50" id="kelas" value="<?= $siswa['kelas']; ?>" name="kelas" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select w-50" id="jurusan" name="jurusan">
                            <option disabled selected value>--------------------------------------------Pilih Jurusan--------------------------------------------</option>
                            <option value="S1 Sistem Informasi" <?php if ($siswa['jurusan'] == 'S1 Sistem Informasi') { ?> selected='' <?php } ?>>S1 Sistem Informasi</option>
                            <option value="S1 Teknik Informatika" <?php if ($siswa['jurusan'] == 'S1 Teknik Informatika') { ?> selected='' <?php } ?>>S1 Teknik Informatika</option>
                            <option value="D3 Sistem Informasi" <?php if ($siswa['jurusan'] == 'D3 Sistem Informasi') { ?> selected='' <?php } ?>>D3 Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="Laki - Laki" value="Laki - Laki" <?php if ($siswa['jk'] == 'Laki - Laki') { ?> checked='' <?php } ?>>
                            <label class="form-check-label" for="Laki - Laki">Laki - Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="Perempuan" value="Perempuan" <?php if ($siswa['jk'] == 'Perempuan') { ?> checked='' <?php } ?>>
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Semester" class="form-label">Semester</label>
                        <input type="number" class="form-control w-50" id="Semester" value="<?= $siswa['Semester']; ?>" name="Semester" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="Tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control w-50" id="Tanggal" placeholder="Masukkan Tanggal" name="Tanggal" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="time" class="form-control w-50" id="waktu" placeholder="Masukkan waktu" name="waktu" autocomplete="off" required>
                    </div>
                    <div>
                    <div class="mb-3">
                    <label>Catatan</label>
                    <div class="form-check">
                      <textarea name="catatan" rows="5" cols="40" value="<?= $siswa['catatan']; ?>"></textarea>
                    </div>
                    </div>
                    <hr>
                    <a href="halaman_admin.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>