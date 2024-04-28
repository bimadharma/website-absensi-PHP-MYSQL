<?php
// Memanggil atau membutuhkan file function.php
require 'koneksi.php';

// Jika fungsi tambah jika data tersimpan, maka munculkan alert dibawah
if (isset($_POST['simpan'])) {
    if (tambah($_POST)) {
        echo "<script>
                alert('Data Mahasiswa berhasil ditambahkan!');
                document.location.href = 'tabel.php';
            </script>";
    } else {
        // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data Mahasiswa gagal ditambahkan!');
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
    <a class="navbar-brand" href="halaman_mahasiswa.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="halaman_mahasiswa.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addData.php">Absensi</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tabel.php">Tabel Absensi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.php">Tentang</a>
        </li>
        </li>
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

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Mahasiswa</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                  
                    <div class="mb-3">
                        <label for="nim" class="form-label">NPM Mahasiswa</label>
                        <input type="number" class="form-control w-50" id="nim" placeholder="Masukkan NPM" min="1" name="nim" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-md w-50" id="nama" placeholder="Masukkan Nama Lengkap" name="nama" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control w-50" id="kelas" placeholder="Masukkan Kelas" name="kelas" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select w-50" id="jurusan" name="jurusan">
                            <option disabled selected value>-----------------------------------Pilih Jurusan--------------------------------------------</option>
                            <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                            <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                            <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="Laki - Laki" value="Laki - Laki">
                            <label class="form-check-label" for="Laki - Laki">Laki - Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="Perempuan" value="Perempuan">
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Semester" class="form-label">Semester</label>
                        <input type="number" class="form-control w-50" id="Semester" placeholder="Masukkan Semester" name="Semester" autocomplete="off" required>
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
                      <textarea name="catatan" rows="5" cols="40"></textarea>
                    </div>
                    </div>
                    <a href="halaman_mahasiswa.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

</body>

</html>