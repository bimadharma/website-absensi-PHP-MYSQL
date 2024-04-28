<?php
// Memanggil atau membutuhkan file function.php
require 'koneksi.php';

// Jika Data Mahasiswa diklik maka
if (isset($_POST['dataSiswa'])) {
    $output = '';

    // mengambil data Mahasiswa dari nim 
    $sql = "SELECT * FROM mahasiswa WHERE nim = '" . $_POST['dataSiswa'] . "'";
    $result = mysqli_query($koneksi, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '
                        <tr>
                            <th width="40%">NPM</th>
                            <td width="60%">' . $row['nim'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama</th>
                            <td width="60%">' . $row['nama'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Kelas</th>
                            <td width="60%">' . $row['kelas'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Jurusan</th>
                            <td width="60%">' . $row['jurusan'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Jenis Kelamin</th>
                            <td width="60%">' . $row['jk'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Semester</th>
                            <td width="60%">' . $row['Semester'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Tanggal</th>
                            <td width="60%">' . $row['Tanggal'] . '</td>
                        </tr>
                        <tr>
                        <th width="40%">waktu</th>
                        <td width="60%">' . $row['waktu'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Catatan</th>
                            <td width="60%">' . $row['catatan'] . '</td>
                        </tr>
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
