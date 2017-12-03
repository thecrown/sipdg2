-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 03:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perhutani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) UNSIGNED NOT NULL,
  `username` char(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_telephone` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama_lengkap`, `no_telephone`, `password`, `role`) VALUES
(1, 'admin', 'Yohana Agustina Ginting', '9090', 'c3284d0f94606de1fd2af172aba15bf3', 'admin'),
(2, 'operator', 'operator', '085727747959', 'a2ac1e2a67f66b89e4b181d542c8fcca', 'operator'),
(3, 'amien wawa', 'amien kurniawan wawa', '085727747950', 'b9d53361d514b1abb71b782bb4c4ea06', 'admin'),
(8, 'amien', 'amien kurniawan', '098', 'b9d53361d514b1abb71b782bb4c4ea06', 'operator'),
(10, 'theo', 'theo', '98000', '57295d54183a6a1a90a12e9979d66c9d', 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) UNSIGNED NOT NULL,
  `kode_satuan` int(4) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `jenis_barang` int(30) NOT NULL,
  `stock` int(10) NOT NULL,
  `harga_barang` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_satuan`, `nama_barang`, `jenis_barang`, `stock`, `harga_barang`) VALUES
(13, 2, 'amien', 1, 0, 1000),
(14, 2, 'amien', 1, 5, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_keluar` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_barang` int(4) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_keluar`, `tanggal`, `kode_barang`, `jumlah`, `penerima`, `id_user`, `lokasi`) VALUES
(3, '2017-12-03', 13, 10, 'amien', 8, 'jakarta'),
(4, '2017-12-04', 14, 10, 'amien', 8, 'semarang');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_masuk` int(10) UNSIGNED NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode_satuan` int(4) NOT NULL,
  `jenis_barang` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`, `kode_barang`, `tanggal`, `nama_barang`, `kode_satuan`, `jenis_barang`, `jumlah`, `lokasi`) VALUES
(16, 13, '2017-12-03', 'amien', 2, 1, 10, 'semarang'),
(17, 14, '2017-12-03', 'amien', 2, 1, 15, 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL,
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('671b8aa9df324d219ecf199ff4ff06a2', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1481813883, ''),
('e1d85fb5c1f7a2e9866301a0c0fee9e4', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1481819972, ''),
('1af3a08957960bbba519aa99fff6a376', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.3 Safari/537.36', 1481819967, '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` int(11) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `jenis_barang`) VALUES
(1, 'Barang - Barang Keperluan Kantor'),
(2, 'Barang - Barang Keperluan Bangunan'),
(3, 'Barang - Barang Keperluan Instalasi'),
(4, 'Barang - Barang Penggergajian'),
(5, 'Barang - Barang Lain');

-- --------------------------------------------------------

--
-- Stand-in structure for view `join_barang_jenis_satuan`
--
CREATE TABLE `join_barang_jenis_satuan` (
`id_barang` int(10) unsigned
,`nama_barang` varchar(35)
,`stock` int(10)
,`harga_barang` int(25)
,`jenis_barang` varchar(255)
,`kode` varchar(255)
,`keterangan` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `saldo_bulanan`
--

CREATE TABLE `saldo_bulanan` (
  `id_barang` int(10) NOT NULL,
  `kode_satuan` varchar(4) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `jumlah_saldo` varchar(10) NOT NULL,
  `total_saldo` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo_bulanan`
--

INSERT INTO `saldo_bulanan` (`id_barang`, `kode_satuan`, `nama_barang`, `jenis_barang`, `jumlah`, `harga`, `jumlah_saldo`, `total_saldo`, `tanggal`) VALUES
(4, 'BH', 'Pisau Wiwil', 'Barang-Barang Keperluan Kantor', 20, '25.000,00', '500.000,00', '500.000,00', '2017-07-11'),
(6, 'PAK', 'Kertas FC Polio', 'Barang-Barang Keperluan Kantor', 5, '5.000,00', '25.000,00', '25.000,00', '2017-07-21'),
(7, 'PAK', 'Kertas Kertas Samak', 'Barang-Barang Keperluan Kantor', 5, '20.000,00', '100.000,00', '100.000,00', '2017-07-19'),
(8, 'TUB', 'Tinta Roneo', 'Barang-Barang Keperluan Kantor', 10, '200.000,00', '2.000.000,', '2.000.000,', '2017-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `kode`, `keterangan`) VALUES
(1, 'AR', 'Are'),
(2, 'BH', 'Buah'),
(3, 'BK', 'Buku'),
(4, 'BOX', 'Box'),
(5, 'BKS', 'Bungkus'),
(6, 'BTG', 'Batang'),
(7, 'BTL', 'Botol'),
(8, 'BTR', 'Butir'),
(9, 'CC', 'Centicubic'),
(10, 'CM', 'Centimeter'),
(11, 'Dos', 'Dos'),
(12, 'DRM', 'DRUM'),
(13, 'DSN', 'DOSIN'),
(14, 'FT', 'Feet'),
(15, 'GRM', 'Gram'),
(16, 'GRS', 'GROS'),
(17, 'HA', 'Hektoare'),
(18, 'HM', 'Hektometer'),
(19, 'INC', 'Inci'),
(20, 'KG', 'Kilogram'),
(21, 'KLG', 'Kaleng'),
(22, 'KM', 'Kilometer'),
(23, 'KPL', 'Kapling'),
(24, 'KVA', 'Kilo Volt Amp'),
(26, 'LBR', 'Lembar'),
(27, 'LOK', 'Lokasi'),
(28, 'LTR', 'Liter'),
(29, 'M2', 'Meterpersegi'),
(30, 'M3', 'Meterkubik'),
(31, 'MGR', 'Miligram'),
(32, 'ML', 'Meter'),
(33, 'MLG', 'Miligram'),
(34, 'MLL', 'Mililiter'),
(35, 'MM', 'Milimeter'),
(36, 'MTR', 'Meter'),
(37, 'OBY', 'Obyek'),
(38, 'ONS', 'ONS'),
(39, 'PAK', 'Pak'),
(40, 'PIL', 'Peil Isi X KG'),
(41, 'PK', 'Power Horse'),
(42, 'PKT', 'Paket'),
(43, 'PSG', 'Pasang'),
(44, 'PT', 'Potong'),
(45, 'ROL', 'Rol'),
(46, 'SET', 'set'),
(47, 'STL', 'STEL'),
(48, 'T', 'Ton'),
(49, 'TBG', 'Tabung'),
(50, 'TUB', 'Tube'),
(51, 'UNT', 'Unit'),
(52, 'V', 'Volt'),
(53, 'WAT', 'Watt');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_barang_keluar`
--
CREATE TABLE `view_barang_keluar` (
`id_user` int(11)
,`kode` varchar(255)
,`jenis_barang` varchar(255)
,`tanggal` date
,`id_keluar` int(10)
,`jumlah` int(10)
,`penerima` varchar(30)
,`lokasi` varchar(20)
,`nama_barang` varchar(35)
,`harga_barang` int(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_barang_masuk`
--
CREATE TABLE `view_barang_masuk` (
`lokasi` varchar(20)
,`id_masuk` int(10) unsigned
,`tanggal` date
,`kode` varchar(255)
,`nama_barang` varchar(255)
,`jumlah` int(10)
,`jenis_barang` varchar(255)
,`harga_barang` int(25)
);

-- --------------------------------------------------------

--
-- Structure for view `join_barang_jenis_satuan`
--
DROP TABLE IF EXISTS `join_barang_jenis_satuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `join_barang_jenis_satuan`  AS  select `a`.`id_barang` AS `id_barang`,`a`.`nama_barang` AS `nama_barang`,`a`.`stock` AS `stock`,`a`.`harga_barang` AS `harga_barang`,`b`.`jenis_barang` AS `jenis_barang`,`c`.`kode` AS `kode`,`c`.`keterangan` AS `keterangan` from ((`barang` `a` join `jenis_barang` `b` on((`a`.`jenis_barang` = `b`.`id_jenis`))) join `satuan` `c` on((`a`.`kode_satuan` = `c`.`id_satuan`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_barang_keluar`
--
DROP TABLE IF EXISTS `view_barang_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_barang_keluar`  AS  select `d`.`id_user` AS `id_user`,`b`.`kode` AS `kode`,`c`.`jenis_barang` AS `jenis_barang`,`d`.`tanggal` AS `tanggal`,`d`.`id_keluar` AS `id_keluar`,`d`.`jumlah` AS `jumlah`,`d`.`penerima` AS `penerima`,`d`.`lokasi` AS `lokasi`,`a`.`nama_barang` AS `nama_barang`,`a`.`harga_barang` AS `harga_barang` from (((`barang` `a` join `satuan` `b` on((`b`.`id_satuan` = `a`.`kode_satuan`))) join `jenis_barang` `c` on((`c`.`id_jenis` = `a`.`jenis_barang`))) join `barang_keluar` `d` on((`d`.`kode_barang` = `a`.`id_barang`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_barang_masuk`
--
DROP TABLE IF EXISTS `view_barang_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_barang_masuk`  AS  select `a`.`lokasi` AS `lokasi`,`a`.`id_masuk` AS `id_masuk`,`a`.`tanggal` AS `tanggal`,`c`.`kode` AS `kode`,`a`.`nama_barang` AS `nama_barang`,`a`.`jumlah` AS `jumlah`,`b`.`jenis_barang` AS `jenis_barang`,`d`.`harga_barang` AS `harga_barang` from (((`barang_masuk` `a` join `jenis_barang` `b` on((`b`.`id_jenis` = `a`.`jenis_barang`))) join `satuan` `c` on((`c`.`id_satuan` = `a`.`kode_satuan`))) join `barang` `d` on((`d`.`id_barang` = `a`.`kode_barang`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `saldo_bulanan`
--
ALTER TABLE `saldo_bulanan`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_masuk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `saldo_bulanan`
--
ALTER TABLE `saldo_bulanan`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
