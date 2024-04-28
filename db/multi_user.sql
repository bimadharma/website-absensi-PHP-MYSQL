-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2024 pada 10.58
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jurusan` enum('S1 Sistem Informasi','S1 Teknik Informatika','D3 Sistem Informasi') NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `waktu` varchar(8) DEFAULT NULL,
  `Semester` varchar(2) NOT NULL,
  `catatan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `kelas`, `jurusan`, `jk`, `Tanggal`, `waktu`, `Semester`, `catatan`) VALUES
(8, '10121266', 'Bima dharma', '3KA03', 'S1 Sistem Informasi', 'Laki - Laki', '2024-01-16', '16:50', '5', 'Hadir'),
(9, '311112', 'Farhan Putra', '3KA03', 'S1 Sistem Informasi', 'Laki - Laki', '2024-01-16', '16:48', '5', 'hadir'),
(10, '322333', 'Bimaa', '3KA03', 'S1 Sistem Informasi', 'Laki - Laki', '2024-01-16', '01:28', '5', 'aku bisa2'),
(11, '133333', 'Bima', '3ka03', 'S1 Sistem Informasi', 'Laki - Laki', '2024-01-16', '16:49', '5', 'hadir'),
(12, '13131313', 'bayu fadayan', '3KA03', 'S1 Sistem Informasi', 'Laki - Laki', '2024-01-16', '16:49', '5', 'Hadir'),
(13, '21112111', 'Ucup', '3KA03', 'S1 Sistem Informasi', 'Laki - Laki', '2024-01-15', '22:51', '5', 'Aku sudah kumpulin'),
(15, '73877832', 'Yazid', '3KA03', 'S1 Teknik Informatika', 'Laki - Laki', '2024-01-16', '17:12', '5', 'aku upload'),
(18, '98988988', 'Bintang', '3KA03', 'S1 Teknik Informatika', 'Laki - Laki', '2024-01-16', '16:16', '5', 'Cape bintang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'pengguna', 'admin', 'admin', 'admin'),
(2, 'Bima', 'bimaa', '123', 'mahasiswa'),
(9, 'yanyan', 'yanyan', '123', 'mahasiswa'),
(10, 'Elangga', 'Elangga', '123', 'mahasiswa'),
(11, 'Reza', 'Reza', '123', 'mahasiswa'),
(12, 'Yoga', 'Yoga', '123', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
