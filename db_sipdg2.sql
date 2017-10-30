-- phpMyAdmin SQL Dump
-- version 5.6.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 08:52 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipdg2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) UNSIGNED NOT NULL,
  `username` char(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`,`username`, `nama_lengkap`, `password`) VALUES
(1,'admin', 'Yohana Agustina Ginting', 'admin');

-- --------------------------------------------------------


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
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_telp/hp` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama_lengkap`, `no_telp/hp`, `password`) VALUES
('0101DHH11','Handika Pratama', '085740182195', 'operator');




-- --------------------------------------------------------
--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL,
  `kode_satuan` varchar(4) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `total_harga` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_satuan`, `nama_barang`, `jenis_barang`, `jumlah`, `harga`, `total_harga`,`tanggal`) VALUES
(1, 'PAK', 'Kertas FC Polio', 'Barang-Barang Keperluan Kantor', 5, '5.000,00', '25.000,00', '2017-07-21'),
(2, 'TUB', 'Tinta Roneo', 'Barang-Barang Keperluan Kantor', 10, '200.000,00', '2.000.000,00', '2017-07-08'),
(3, 'BH','Pisau Wiwil', 'Barang-Barang Keperluan Kantor', 20, '25.000,00', '500.000,00', '2017-07-11');


-- --------------------------------------------------------
--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_keluar` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_satuan` varchar(4) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `total_harga` varchar(10) NOT NULL,
  `penerima` varchar(30) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------
-- */
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_masuk` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_satuan` varchar(4) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `total_harga` varchar(10) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`,`tanggal`, `kode_satuan`, `jumlah`, `harga`, `total_harga`) VALUES
(1,'2017-07-20', 'PAK', 5, '5.000,00', '25.000,00');
 

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

INSERT INTO `saldo_bulanan` (`id_barang`, `kode_satuan`, `nama_barang`, `jenis_barang`, `jumlah`, `harga`, `jumlah_saldo`, `total_saldo`,`tanggal`) VALUES
(6, 'PAK', 'Kertas FC Polio', 'Barang-Barang Keperluan Kantor', 5, '5.000,00', '25.000,00','25.000,00', '2017-07-21'),
(7, 'PAK', 'Kertas Kertas Samak', 'Barang-Barang Keperluan Kantor', 5, '20.000,00', '100.000,00','100.000,00', '2017-07-19'),
(8, 'TUB', 'Tinta Roneo', 'Barang-Barang Keperluan Kantor', 10, '200.000,00', '2.000.000,00', '2.000.000,00','2017-07-08'),
(4, 'BH','Pisau Wiwil', 'Barang-Barang Keperluan Kantor', 20, '25.000,00', '500.000,00', '500.000,00', '2017-07-11');


-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);
  
--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

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
-- Indexes for table `saldo_bulanan`
--
ALTER TABLE `saldo_bulanan`
  ADD PRIMARY KEY (`id_barang`);
  
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_keluar` int(10) NOT NULL AUTO_INCREMENT;
  
--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_masuk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `saldo_bulanan`
--
ALTER TABLE `saldo_bulanan`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
