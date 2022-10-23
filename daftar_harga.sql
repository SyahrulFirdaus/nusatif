-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2022 pada 11.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutech`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_harga`
--

CREATE TABLE `daftar_harga` (
  `id_barang` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_beli` int(255) NOT NULL,
  `harga_jual` int(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `foto_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_harga`
--

INSERT INTO `daftar_harga` (`id_barang`, `nama_barang`, `harga_beli`, `harga_jual`, `stok`, `foto_barang`) VALUES
(38, 'Creality', 3900000, 4500000, 5, 'ikea4.png'),
(39, 'Creality Ender 3 Pro', 6000000, 5000000, 31, 'ikea5.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_harga`
--
ALTER TABLE `daftar_harga`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_harga`
--
ALTER TABLE `daftar_harga`
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
