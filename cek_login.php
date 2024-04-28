<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

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

	// cek jika user index sebagai admin
	if($data['level']=="admin"){

		// buat session index dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");

	// cek jika user index sebagai mahasiswa
	}else if($data['level']=="mahasiswa"){
		// buat session index dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "mahasiswa";
		// alihkan ke halaman dashboard mahasiswa
		header("location:halaman_mahasiswa.php");

	}else{

		// alihkan ke halaman index kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>