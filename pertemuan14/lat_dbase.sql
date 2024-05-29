-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2024 pada 18.24
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
-- Database: `lat_dbase`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_datatable` (IN `id` INT(11), IN `jml` INT(11))  DETERMINISTIC COMMENT 'First SP at Expertdeveloper' BEGIN

    DECLARE EXIT HANDLER FOR SQLEXCEPTION
    BEGIN
        ROLLBACK;
    END;

    DECLARE EXIT HANDLER FOR SQLWARNING
    BEGIN
        ROLLBACK;
    END;

    -- Start transaction
    START TRANSACTION;

    -- Update first table
    UPDATE tabel_1 
    SET jumlah = jumlah - jml 
    WHERE kode = id;

    -- Update second table
    UPDATE tabel_2 
    SET jumlah = jumlah + jml 
    WHERE kode = id;

    -- Commit transaction
    COMMIT;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_1`
--

CREATE TABLE `tabel_1` (
  `kode` int(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_1`
--

INSERT INTO `tabel_1` (`kode`, `nama_barang`, `jumlah`) VALUES
(1001, 'buku', 30),
(1002, 'pulpen', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_2`
--

CREATE TABLE `tabel_2` (
  `kode` int(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_2`
--

INSERT INTO `tabel_2` (`kode`, `nama_barang`, `jumlah`) VALUES
(1001, 'buku', 70),
(1002, 'pulpen', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmhs`
--

CREATE TABLE `tblmhs` (
  `NIM` int(9) NOT NULL,
  `Nama Awal` varchar(20) NOT NULL,
  `Nama Akhir` varchar(30) NOT NULL,
  `Tanggal Lahir` date NOT NULL,
  `Umur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblmhs`
--

INSERT INTO `tblmhs` (`NIM`, `Nama Awal`, `Nama Akhir`, `Tanggal Lahir`, `Umur`) VALUES
(2112, 'Rivaldi', 'Hidayatullah', '2003-03-07', 21),
(2113, 'Cindy', 'Meiliana', '2002-08-12', 21),
(2114, 'Ilwan', 'Mudin', '2001-01-17', 23),
(2115, 'Steven', 'Asep', '2003-12-01', 20),
(2116, 'Bayu', 'Sakti', '2003-07-07', 20);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_1`
--
ALTER TABLE `tabel_1`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tabel_2`
--
ALTER TABLE `tabel_2`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `tblmhs`
--
ALTER TABLE `tblmhs`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tblmhs`
--
ALTER TABLE `tblmhs`
  MODIFY `NIM` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
