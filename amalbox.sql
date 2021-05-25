-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2021 pada 16.21
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amalbox`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_amal`
--

CREATE TABLE `tbl_amal` (
  `id_amal` int(11) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `detail` text NOT NULL,
  `terkumpul` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `dana` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `gambar_lain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_amal`
--

INSERT INTO `tbl_amal` (`id_amal`, `judul`, `detail`, `terkumpul`, `alamat`, `tgl_mulai`, `tgl_selesai`, `dana`, `gambar`, `gambar_lain`) VALUES
(2, 'First Charity', 'contoh amal', '3100000', 'Jl. Apel 5, Sukamaju Baru, Kec. Tapos, Kota Depok, Jawa Barat 16455', '2021-05-25', '2022-05-25', '10000000', 'gambar-60aca71029638-092816.jpg', 'gambar-lain-60aca7102992c-092816.jpg'),
(3, 'Second Charity', 'contoh amal 2', '0', 'Depok', '2021-05-25', '2022-07-25', '20000000', 'gambar-60ace6efc09f5-020047.jpg', 'gambar-lain-60ace6efc0dca-020047.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_donatur`
--

CREATE TABLE `tbl_donatur` (
  `id_donatur` int(11) NOT NULL,
  `nama_donatur` varchar(255) DEFAULT NULL,
  `jml_amal` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_amal` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_amal` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_donatur`
--

INSERT INTO `tbl_donatur` (`id_donatur`, `nama_donatur`, `jml_amal`, `pesan`, `tgl_amal`, `id_amal`, `token`, `status`) VALUES
(3, 'Rizki Ramadhan', 100000, 'semoga sembuh', '2021-05-30 03:00:00', 2, 'bQ9Mf2g9EsOZVpK0YKOp', 1),
(4, 'Ridwan', 100000, 'alhamdullilah', '2021-05-25 12:00:00', 2, 'bQ9Mf2g9EsOZVpK0YKwr', 0),
(5, 'Muhammad Raqwan', 250000, 'Bismillah', '2021-05-25 14:20:12', 2, 'ivZOZNDxgbFvzFhxY4k5', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_amal`
--
ALTER TABLE `tbl_amal`
  ADD PRIMARY KEY (`id_amal`);

--
-- Indeks untuk tabel `tbl_donatur`
--
ALTER TABLE `tbl_donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_amal`
--
ALTER TABLE `tbl_amal`
  MODIFY `id_amal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_donatur`
--
ALTER TABLE `tbl_donatur`
  MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
