-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 06 Nov 2022 pada 13.55
-- Versi server: 10.3.36-MariaDB-cll-lve
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kreasin3_db_sishiring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_kosong`
--

CREATE TABLE `jabatan_kosong` (
  `id` int(11) NOT NULL,
  `posisi_kosong` varchar(20) NOT NULL,
  `departemen_kosong` varchar(20) NOT NULL,
  `kuota` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan_kosong`
--

INSERT INTO `jabatan_kosong` (`id`, `posisi_kosong`, `departemen_kosong`, `kuota`, `foto`) VALUES
(1, 'Manager HR', 'HR', 3, 'Manager_HR.jpg'),
(6, 'Head of Production', 'Production', 1, 'logo.png'),
(7, 'Manager', 'Purchasing', 2, 'Manager.png'),
(9, 'Admin', 'Maintenance', 2, 'logo.png'),
(10, 'Kepala Gudang', 'Warehouse', 2, 'Kepala_Gudang.png'),
(11, 'Admin', 'HR', 2, 'Admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(20) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `sakit` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `hadir` int(11) NOT NULL,
  `alpha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `id_karyawan`, `nama`, `departemen`, `posisi`, `sakit`, `izin`, `hadir`, `alpha`) VALUES
(7, 'TK0112', 'ANDINI', 'ADMINISTRATION', 'STAFF', 80, 4, 5, 3),
(8, 'TK0113', 'RAHMA', 'PURCHASING', 'STAFF', 112, 3, 4, 5),
(9, 'TK0114', 'ELISA', 'OPERATOR', 'ADMIN', 154, 0, 2, 2),
(10, 'TK0115', 'SALMAFINA', 'ADMINISTRATION', 'STAFF', 234, 0, 1, 2),
(12, 'TK0124', 'PUTRI', 'ADMINISTRATION', 'STAFF', 80, 4, 5, 0),
(13, 'TK0125', 'RINDI', 'PURCHASING', 'STAFF', 112, 3, 4, 0),
(14, 'TK0126', 'SALISA', 'OPERATOR', 'ADMIN', 154, 0, 2, 2),
(15, 'TK0127', 'ROFIQ', 'ADMINISTRATION', 'STAFF', 234, 0, 1, 2),
(23, '2', 'TK0112', 'ANDINI', 'ADMINISTRATION', 0, 80, 4, 5),
(24, '3', 'TK0113', 'RAHMA', 'PURCHASING', 0, 112, 3, 4),
(25, '4', 'TK0114', 'ELISA', 'OPERATOR', 0, 154, 0, 2),
(26, '5', 'TK0115', 'SALMAFINA', 'ADMINISTRATION', 0, 234, 0, 1),
(27, '6', 'TK0123', 'SANWA', 'ENGINEERING', 0, 80, 5, 2),
(28, '7', 'TK0124', 'PUTRI', 'ADMINISTRATION', 0, 80, 4, 5),
(29, '8', 'TK0125', 'RINDI', 'PURCHASING', 0, 112, 3, 4),
(30, '9', 'TK0126', 'SALISA', 'OPERATOR', 0, 154, 0, 2),
(31, '10', 'TK0127', 'ROFIQ', 'ADMINISTRATION', 0, 234, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi`
--

CREATE TABLE `promosi` (
  `id` int(11) NOT NULL,
  `id_jabatan_kosong` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jadwal` datetime DEFAULT NULL,
  `status` enum('On Process','Lolos','Gagal','') NOT NULL,
  `nilai_kreatif` int(11) NOT NULL,
  `nilai_kerjasama` int(11) NOT NULL,
  `nilai_kemampuan_bekerja` int(11) NOT NULL,
  `nilai_kepemimpinan` int(11) NOT NULL,
  `nilai_norma` int(11) NOT NULL,
  `grade` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `promosi`
--

INSERT INTO `promosi` (`id`, `id_jabatan_kosong`, `id_karyawan`, `jadwal`, `status`, `nilai_kreatif`, `nilai_kerjasama`, `nilai_kemampuan_bekerja`, `nilai_kepemimpinan`, `nilai_norma`, `grade`) VALUES
(12, 6, 6, '2022-09-21 05:25:00', 'On Process', 0, 0, 0, 0, 0, NULL),
(13, 6, 11, '2022-09-21 05:25:00', 'On Process', 0, 0, 0, 0, 0, NULL),
(16, 1, 8, '2022-11-06 11:00:00', 'On Process', 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'SuperAdmin', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'HRAdmin', 'e10adc3949ba59abbe56e057f20f883e', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan_kosong`
--
ALTER TABLE `jabatan_kosong`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_karyawan` (`id_karyawan`);

--
-- Indeks untuk tabel `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_karyawan` (`id_karyawan`);

--
-- Indeks untuk tabel `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jabatan_kosong`
--
ALTER TABLE `jabatan_kosong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
