<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

if( isset($_SESSION['username'])){
	header("location:index.php?pesan=gagal");
  }


if ( isset($_POST["username"])) {
// menangkap data yang dikirim dari form index
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$index = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($index);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($index);
	// Ambil data nama dan nim dari database berdasarkan username
    $nama = $data['nama'];
    $nim = $data['nim'];

	// Cek level user
    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['nama'] = $nama;
        $_SESSION['nim'] = $nim;
        header("location:halaman_admin.php");
    }else if($data['level']=="mahasiswa"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "mahasiswa";
        $_SESSION['nama'] = $nama;
        $_SESSION['nim'] = $nim;
        header("location:halaman_mahasiswa.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}

}



?>