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
    <img src="images/MURID1.jpg" class="img-fluid" alt="..." style = "width:2000px; height:800px"> </div>
    <hr>
    <h3 class="text fw-bold">Berita Terkini</h3>
    <div class="row my-2">
        <div class="card-group">
        <div class="card">
            <img src="images/INISIAL.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Mahasiswa SI Meraih Juara 1 Web Development</h5>
            <p class="card-text">Seorang mahasiswa nolep berinisial D berhasil mendapatkan juara 1 Internasional di acara WEBFEST 2021 yang diselenggarakan langsung pada hari Senin 33 November 2021. <a href="#" class="">selengkapnya</a> </p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="images/coding.gif" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Mari Belajar Pemograman Web bersama Pak Aditya!</h5>
            <p class="card-text">Masih bingung bagaimana cara bikin web? Yuk belajar langsung bersama salah satu dosen Favorit FTI, Pak Aditya. <a href="#" class="">selengkapnya</a></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="images/card.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Selamat Hari Pahlawan 2021</h5>
            <p class="card-text">Mari kita sebagai generasi muda tetap menjunjung tinggi tanah air Indonesia untuk kemajuan Indonesia yang lebih baik!. <a href="#" class="">selengkapnya</a></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        </div>
</div>
  </body>
</html>