-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2021 pada 05.37
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_afif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel`
--

CREATE TABLE `tabel` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel`
--

INSERT INTO `tabel` (`no`, `nama`, `score`) VALUES
(1, 'Afif Fz', 20),
(2, 'Afif Fz', 20),
(3, 'Afif Fz', 20),
(4, 'Afif Fz', 20),
(5, 'Afif Fz', 20),
(6, 'admin', -10),
(7, 'admin', 10),
(8, 'admin', 10),
(9, 'niko', 10),
(13, 'afif', 16),
(14, 'afif', 16),
(15, 'afif', 16),
(16, 'afif', 16),
(17, 'afif', 16),
(18, 'afif', 16),
(19, 'afif', 16),
(20, 'afif', 16),
(21, 'afif', 16),
(22, 'afif', 16),
(23, 'afif', 16),
(24, 'afif', 16),
(25, 'afif', 16),
(26, 'afif', 16),
(27, 'afif', 16),
(28, 'afif', 16),
(29, 'afif', 16),
(30, 'afif', 16),
(31, 'afif', 16),
(32, 'afif', 16),
(33, 'Afif Fz', -10),
(34, 'afif', 10),
(35, 'admin', 0),
(36, 'afif', 40),
(37, 'afif', 40),
(38, 'Afif Fz', 40),
(39, 'Afif Fz', 40);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel`
--
ALTER TABLE `tabel`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel`
--
ALTER TABLE `tabel`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
