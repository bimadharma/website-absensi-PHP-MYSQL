<?php
// Memanggil atau membutuhkan file function.php
require 'koneksi.php';

// Mengambil data dari nis dengan fungsi get
$nim = $_GET['nim'];

// Jika fungsi hapus jika data terhapus, maka munculkan alert dibawah
if (hapus($nim) > 0) {
    echo "<script>
                alert('Data mahasiswa berhasil dihapus!');
                document.location.href = 'halaman_admin.php';
            </script>";
} else {
    // Jika fungsi hapus jika data tidak terhapus, maka munculkan alert dibawah
    echo "<script>
            alert('Data mahasiswa gagal dihapus!');
        </script>";
}
