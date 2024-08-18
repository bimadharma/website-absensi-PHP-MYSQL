<?php 
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "multi_user");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Membuat fungsi tambah
function tambah($data)
{
    global $koneksi;

    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $jurusan = $data['jurusan'];
	$jk = $data['jk'];
    $Semester = htmlspecialchars($data['Semester']);
    $Tanggal = htmlspecialchars($data['Tanggal']);
    $waktu = htmlspecialchars($data['waktu']);
	$catatan = htmlspecialchars($data['catatan']);

    $sql = "INSERT INTO mahasiswa(nim, nama, kelas, jurusan ,jk , Semester,Tanggal, waktu, catatan) VALUES ('$nim','$nama', '$kelas', '$jurusan', '$jk', '$Semester', '$Tanggal', '$waktu', '$catatan')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi hapus
function hapus($nim)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = $nim");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah
function ubah($data)
{
    global $koneksi;

    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $jurusan = $data['jurusan'];
	$jk = $data['jk'];
    $Semester = htmlspecialchars($data['Semester']);
    $Tanggal = htmlspecialchars($data['Tanggal']);
    $waktu = htmlspecialchars($data['waktu']);
	$catatan = htmlspecialchars($data['catatan']);

    $sql = "UPDATE mahasiswa SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan', jk = '$jk', Semester = '$Semester', Tanggal = '$Tanggal', waktu = '$waktu', catatan = '$catatan' WHERE nim = $nim";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubahakun
function ubahakun($data)
{
    global $koneksi;
    $nim = htmlspecialchars($data['nim']);
    $name = htmlspecialchars($data['nama']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $level = htmlspecialchars($data['level']);
    $sql = "UPDATE user SET nim = '$nim', `username` = '$username', `password` = '$password', `level` = '$level' WHERE `nama` = '$name'";


    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}


function tambahakun($data)
{
    global $koneksi;

    $nama = htmlspecialchars($data['nama']);
    $nim= htmlspecialchars($data['nim']);
    $username= htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $level = $data['level'];

    $sql = "INSERT INTO user(nama, nim, username, password, level) VALUES ('$nama', '$nim','$username', '$password', '$level')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

?>