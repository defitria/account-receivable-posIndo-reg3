-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 05:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posid`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_piutang`
--

CREATE TABLE `dt_piutang` (
  `id` int(5) NOT NULL,
  `nama_upt` varchar(35) DEFAULT NULL,
  `bisnis` varchar(35) DEFAULT NULL,
  `nama_pel` varchar(35) DEFAULT NULL,
  `prod` int(10) NOT NULL,
  `bsu` int(10) NOT NULL,
  `total_piutang` int(10) NOT NULL,
  `pajak` int(10) NOT NULL,
  `saldo_akhir` int(10) NOT NULL,
  `sebulan` int(10) NOT NULL,
  `duabulan` int(10) NOT NULL,
  `tigabulan` int(10) NOT NULL,
  `tgl` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dt_piutang`
--

INSERT INTO `dt_piutang` (`id`, `nama_upt`, `bisnis`, `nama_pel`, `prod`, `bsu`, `total_piutang`, `pajak`, `saldo_akhir`, `sebulan`, `duabulan`, `tigabulan`, `tgl`) VALUES
(3, 'Prabumulih', 'SURAT', 'Clipan Finance', 20, 147500, 147500, 0, 0, 0, 0, 0, '2020-10-02 23:54:51.000000'),
(5, 'Prabumulih', 'PAKET', 'Clipan Finance', 25, 375000, 375000, 0, 0, 0, 0, 0, '2020-09-24 16:05:10.000000'),
(89, 'Prabumulih', 'SURAT', 'Clipan Finance', 23, 345000, 345000, 0, 0, 0, 0, 0, '2020-10-13 16:24:03.000000'),
(90, 'Prabumulih', 'PAKET', 'Dipo Star Finance', 15, 225000, 225000, 0, 0, 0, 0, 0, '2020-10-21 18:55:29.000000'),
(91, 'Prabumulih', 'PAKET', 'Indomobil', 10, 150000, 150000, 0, 0, 0, 0, 0, '2020-10-20 18:56:00.000000'),
(94, 'Prabumulih', 'PAKET', 'RSUD', 14, 210000, 210000, 0, 0, 0, 0, 0, '2020-12-10 00:09:41.000000');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `nama_upt` varchar(64) NOT NULL,
  `nomor` varchar(35) NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `nama_pel` varchar(65) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama_upt`, `nomor`, `lampiran`, `perihal`, `nama_pel`, `status`, `tgl`) VALUES
(1, 'Prabumulih', '238/pos', '1 (satu) lampiran', 'invoice (tagihan)', 'Indomobil', '0', '2020-10-15 00:47:27'),
(2, 'Prabumulih', 'pos/239', '1 (satu) lampiran', 'invoice (tagihan)', 'Dipo Star Finance', '0', '2020-10-15 00:50:09'),
(93, 'Prabumulih', '238/pos', '1 (satu) lampiran', 'invoice (tagihan)', 'Clipan Finance', '1', '2020-10-15 21:31:17'),
(99, 'Prabumulih', 'pos/239', '1 (satu) lampiran', 'invoice (tagihan)', 'RSUD', '0', '2020-12-07 21:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `list_upt`
--

CREATE TABLE `list_upt` (
  `id` int(10) NOT NULL,
  `kode_upt` int(11) NOT NULL,
  `nama_upt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_upt`
--

INSERT INTO `list_upt` (`id`, `kode_upt`, `nama_upt`) VALUES
(1, 30000, 'Palembang'),
(2, 31100, 'Prabumulih'),
(3, 31300, 'Muara Enim'),
(4, 31400, 'Lahat'),
(5, 31600, 'Lubuk Linggau'),
(6, 32100, 'Baturaja'),
(7, 33100, 'Pangkal Pinang'),
(8, 33400, 'Tanjung Pandan'),
(9, 34100, 'Metro'),
(10, 34500, 'Kota Bumi'),
(11, 35000, 'Bandar Lampung'),
(12, 36000, 'Jambi'),
(13, 37100, 'Sungai Penuh'),
(14, 37200, 'Muara Bungo'),
(15, 38000, 'Bengkulu'),
(16, 39000, 'Curup');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama_upt` varchar(50) NOT NULL,
  `nama_pel` varchar(50) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama_upt`, `nama_pel`, `tgl`) VALUES
(1, 'Prabumulih', 'Clipan Finance', '2020-11-24 14:51:13'),
(2, 'Prabumulih', 'Dipo Star Finance', '2020-11-24 14:51:13'),
(3, 'Prabumulih', 'Indomobil', '2020-11-24 14:51:54'),
(4, 'Prabumulih', 'RSUD', '2020-11-24 14:52:25'),
(5, 'Prabumulih', 'SOF', '2020-12-04 21:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `pelunasan`
--

CREATE TABLE `pelunasan` (
  `id_pelunasan` int(10) NOT NULL,
  `nama_upt` varchar(64) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `nama_pel` varchar(64) NOT NULL,
  `kd_referensi` varchar(100) NOT NULL,
  `pelunasan` varchar(10) NOT NULL,
  `deposit` int(10) NOT NULL,
  `tgl_setor` datetime NOT NULL,
  `status` enum('0','1') NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelunasan`
--

INSERT INTO `pelunasan` (`id_pelunasan`, `nama_upt`, `nomor`, `nama_pel`, `kd_referensi`, `pelunasan`, `deposit`, `tgl_setor`, `status`, `tgl`) VALUES
(1, 'Prabumulih', 'pos/239', 'Dipo Star Finance', '', '0', 0, '0000-00-00 00:00:00', '0', '2020-10-21 23:43:21'),
(3, 'Prabumulih', '238/pos', 'Clipan Finance', 'f071b103d', 'LUNAS', 0, '2020-10-06 20:52:07', '1', '2020-10-22 11:05:10'),
(6, 'Prabumulih', '238/poss', 'Indomobil', 'gh901b473l', '210000', 50000, '2020-11-08 00:00:00', '0', '2020-12-08 15:02:26'),
(10, 'Prabumulih', 'pos/239', 'RSUD', 'a088b493c', '750000', 0, '2020-11-08 00:00:00', '0', '2020-12-08 15:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `periodepiutang`
--

CREATE TABLE `periodepiutang` (
  `nomor` varchar(35) DEFAULT NULL,
  `nama_pel` varchar(65) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `Piutang` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kd_user` varchar(6) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(255) NOT NULL,
  `nama_upt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_user`, `password`, `level`, `nama_upt`) VALUES
('DReg3', '12345688', 'Deputi Regional 3', 'Kantor Regional 3'),
('KReg3', '12345667', 'Ka Regional 3', 'Kantor Regional 3'),
('KUPT01', '12346578', 'Ka UPT Pbm', 'Pbm'),
('MReg3', '12345677', 'Manager Regional 3', 'Kantor Regional 3'),
('MUPT01', '12345687', 'Manajer Penjualan UPT Pbm', 'Pbm'),
('OUPT01', '12345678', 'Admin Penjualan UPT Pbm', 'Pbm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
