-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 09:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblberita`
--

CREATE TABLE `tblberita` (
  `idBerita` int(25) NOT NULL,
  `idKategori` int(25) NOT NULL,
  `judulBerita` varchar(100) NOT NULL,
  `isiberita` varchar(255) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tgldipublish` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblberita`
--

INSERT INTO `tblberita` (`idBerita`, `idKategori`, `judulBerita`, `isiberita`, `penulis`, `tgldipublish`) VALUES
(1, 2, 'Nuansa Bening Kembali viral', 'Semenjak tiktok memutar lagu itu kembali', 'Lintang', '2024-05-17 08:39:23'),
(2, 4, 'Varian baru jenis Copatcopet ', 'Varian baru covid ini sangat berbahaya', 'Fahreza', '2024-05-17 08:41:12'),
(3, 1, 'Pencurian Keranda di Depok', 'angka kemiskinan menjadi masalah utama pencurian', 'Anton', '2024-05-17 08:44:05'),
(6, 5, 'INDONESIA VS KOREA SELATAN', 'indonesia memenangkan pertandingan', 'Wahyu', '2024-05-17 08:58:13'),
(8, 6, 'China membuat Surga buatan', 'China sangat hebat dan diluar perkiraan kita', 'Linlinchan', '2024-05-17 09:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblkategori`
--

CREATE TABLE `tblkategori` (
  `idKategori` int(25) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblkategori`
--

INSERT INTO `tblkategori` (`idKategori`, `nama_kategori`) VALUES
(1, 'Pencurian'),
(2, 'Musik'),
(3, 'Pemilu'),
(4, 'Covid-19'),
(5, 'Sport'),
(6, 'Teknologi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblberita`
--
ALTER TABLE `tblberita`
  ADD PRIMARY KEY (`idBerita`),
  ADD KEY `idKategori` (`idKategori`);

--
-- Indexes for table `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblberita`
--
ALTER TABLE `tblberita`
  MODIFY `idBerita` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblkategori`
--
ALTER TABLE `tblkategori`
  MODIFY `idKategori` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblberita`
--
ALTER TABLE `tblberita`
  ADD CONSTRAINT `tblberita_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `tblkategori` (`idKategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
