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

    <title>3KA03</title>
</head>

<body>
    <!-- Navbar -->
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
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
    <div class="row my-2">
        <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">TENTANG WEBSITE</h3>
        </div>
        <hr>
        <img src="images/coding.gif" alt="..." style="width:1500px;height:200px;">
        <p> Halo Sobat Gunadarma !! </p>
        <p>Selamat datang di Website Absensi kami! Kami adalah tim yang berkomitmen untuk memberikan solusi efisien dan terpercaya dalam manajemen absensi, dan kami bangga mempersembahkan platform ini yang didukung oleh teknologi PHP dan SQL.</p>
        <p>Fitur Akun Mahasiswa:</p>
<ul>Form Absensi:</ul>
<li>Tambahkan formulir absensi yang dapat diakses oleh akun mahasiswa.</li>
<li>Formulir tersebut harus memuat informasi seperti npm, nama, kelas, jurusan, jenis kelamin, semester, tanggal, waktu, dan catatan yang diperlukan untuk mengisi absensi.</li>
<li>Setelah mengisi formulir, data absensi akan disimpan ke dalam tabel mahasiswa di database dan terdapat menu tabel absensi yang dapat dilihat mahasiswa.</li><br>
<br><br>
<ul>Tabel Absensi Mahasiswa:</ul>
<li>Tampilkan tabel absensi untuk setiap mahasiswa yang dapat diakses oleh akun mahasiswa.></li>
<li>Tabel tersebut dapat menampilkan riwayat absensi beserta detailnya, seperti nama,kelas, jenis kelamin, semester, tanggal, waktu, dan catatan.</li>

<ul>Fitur Akun Admin:</ul>
<li>Tabel Akun Pengguna:</li>
<li>Tampilkan tabel akun pengguna yang berisi informasi akun mahasiswa dan admin.</li>
<li>Admin dapat menambahkan, mengedit, dan menghapus akun pengguna melalui antarmuka pengelolaan akun.</li><br>
<br><br>
<ul>Tabel Absenin:</ul>
<li>Tampilkan tabel absensi yang berisi data absensi dari seluruh mahasiswa.</li>
<li>Admin dapat mengelola data absensi, seperti menambah, mengedit dan menghapus entri absensi.</li><br>
<br><br>
        <p> Sekian dari sedikit tentang website kami. See ya! </p>
        
    </div>
</body>
</html>