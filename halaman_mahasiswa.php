<?php 
session_start();
// Memeriksa apakah user sudah login, jika tidak redirect ke halaman login
if( !isset($_SESSION['username'])){
  header("location:index.php?pesan=gagal");
  exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Halaman Utama</title>
  </style>
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

  <div class="container">
    <div class="row my-2">
      <div class="col-md">
        <h3 class="text-center fw-bold text-uppercase">DASHBOARD WEBSITE MAHASISWA</h3>
      </div>
      <div class="row my-2">
        <img src="images/MURID1.jpg" class="img-fluid" alt="..." style="width:2000px; height:800px">
      </div>
      <hr>
</body>

</html>