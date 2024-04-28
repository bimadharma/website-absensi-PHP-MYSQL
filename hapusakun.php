<?php
// Memanggil atau membutuhkan file function.php
require 'koneksi.php';

// Mengambil data dari nis dengan fungsi get
$name = $_GET['nama'];
mysqli_query($koneksi, "delete from user where nama='$name'");
header('location:akun.php');


// Jika fungsi hapus jika data terhapus, maka munculkan alert dibawah
if (hapus($name) > 0) {
    echo "<script>
                alert('Data mahasiswa berhasil dihapus!');
                document.location.href = 'akun.php';
            </script>";
} else {
    // Jika fungsi hapus jika data tidak terhapus, maka munculkan alert dibawah
    echo "<script>
            alert('Data mahasiswa gagal dihapus!');
        </script>";
}
