-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2021 at 07:53 PM
-- Server version: 10.3.28-MariaDB-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rasd5145_prak_st`
--

-- --------------------------------------------------------

--
-- Table structure for table `kembalitbl`
--

CREATE TABLE `kembalitbl` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_kembali` varchar(20) NOT NULL,
  `no_sewa` varchar(20) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kembalitbl`
--

INSERT INTO `kembalitbl` (`id`, `tanggal`, `no_kembali`, `no_sewa`, `no_ktp`, `no_polisi`, `tgl_sewa`, `tgl_kembali`, `biaya`, `denda`, `total`, `catatan`) VALUES
(2, '2014-03-19', 'K,14-03,1', 'S,14-03,1', '3579518264', 'BG 6587 B', '2014-03-15', '2014-03-17', 900000, 600000, 1500000, '-'),
(3, '2014-03-23', 'K,14-03,3', 'S,14-03,2', '3579518264', 'BG 1726 B', '2014-03-23', '2014-03-25', 1050000, 0, 1050000, 'Pengembalian Sewa');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraantbl`
--

CREATE TABLE `kendaraantbl` (
  `id` int(11) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `nama_kendaraan` varchar(35) NOT NULL,
  `tipe` varchar(2) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `no_rangka` varchar(75) NOT NULL,
  `no_mesin` varchar(75) NOT NULL,
  `bahan_bakar` varchar(10) NOT NULL,
  `thn_kendaraan` int(11) NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraantbl`
--

INSERT INTO `kendaraantbl` (`id`, `no_polisi`, `nama_kendaraan`, `tipe`, `warna`, `no_rangka`, `no_mesin`, `bahan_bakar`, `thn_kendaraan`, `foto`, `status`) VALUES
(3, 'BG 6587 B', 'Xenia', 'MT', 'Putih', '0987654321', 'XN-765-BB', 'Bensin', 2014, 'xenia.jpg', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggantbl`
--

CREATE TABLE `pelanggantbl` (
  `id` int(11) NOT NULL,
  `no_ktp` varchar(75) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggantbl`
--

INSERT INTO `pelanggantbl` (`id`, `no_ktp`, `nama_pelanggan`, `alamat`, `telepon`, `foto`) VALUES
(3, '3579518264', 'Maxikom', 'Jln. Residen H. Abdul Rozak No. 33 Palembang', '0711-717598', 'maxikom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sewatbl`
--

CREATE TABLE `sewatbl` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_sewa` varchar(20) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewatbl`
--

INSERT INTO `sewatbl` (`id`, `tanggal`, `no_sewa`, `no_ktp`, `no_polisi`, `tgl_sewa`, `tgl_kembali`, `biaya`, `catatan`, `status`) VALUES
(1, '2014-03-15', 'S,14-03,1', '3579518264', 'BG 6587 B', '2014-03-15', '2014-03-17', 300000, '-', 'Kembali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kembalitbl`
--
ALTER TABLE `kembalitbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraantbl`
--
ALTER TABLE `kendaraantbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggantbl`
--
ALTER TABLE `pelanggantbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewatbl`
--
ALTER TABLE `sewatbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kembalitbl`
--
ALTER TABLE `kembalitbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kendaraantbl`
--
ALTER TABLE `kendaraantbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggantbl`
--
ALTER TABLE `pelanggantbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sewatbl`
--
ALTER TABLE `sewatbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
