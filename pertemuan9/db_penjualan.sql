-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2024 pada 04.18
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` char(20) NOT NULL,
  `harga_barang` int(15) NOT NULL,
  `stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok`) VALUES
(112, 'Mouse', 25000, 150),
(113, 'Monitor', 1200000, 10),
(114, 'Keyboard', 90000, 20),
(115, 'Mousepad', 50000, 30),
(116, 'Hardisk', 500000, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `id_transaksi` int(15) NOT NULL,
  `id_barang` int(15) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kasir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`id_transaksi`, `id_barang`, `jumlah`, `kasir`) VALUES
(211201, 112, 2, 'Reza'),
(211202, 114, 1, 'Chika'),
(211203, 116, 1, 'Cheila'),
(211204, 114, 1, 'Chika'),
(211205, 113, 2, 'Cheila');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
