-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2014 at 08:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `kembalitbl`
--

CREATE TABLE IF NOT EXISTS `kembalitbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `catatan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `kendaraantbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_polisi` varchar(12) NOT NULL,
  `nama_kendaraan` varchar(35) NOT NULL,
  `tipe` varchar(2) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `no_rangka` varchar(75) NOT NULL,
  `no_mesin` varchar(75) NOT NULL,
  `bahan_bakar` varchar(10) NOT NULL,
  `thn_kendaraan` int(11) NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kendaraantbl`
--

INSERT INTO `kendaraantbl` (`id`, `no_polisi`, `nama_kendaraan`, `tipe`, `warna`, `no_rangka`, `no_mesin`, `bahan_bakar`, `thn_kendaraan`, `foto`, `status`) VALUES
(1, 'BG 1726 B', 'Avanza', 'AT', 'Hitam', '123456789', 'AV-2013-098', 'Bensin', 2013, 'avanza.jpg', 'Ready'),
(3, 'BG 6587 B', 'Xenia', 'MT', 'Putih', '0987654321', 'XN-765-BB', 'Bensin', 2014, 'xenia.jpg', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggantbl`
--

CREATE TABLE IF NOT EXISTS `pelanggantbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(75) NOT NULL,
  `nama_pelanggan` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pelanggantbl`
--

INSERT INTO `pelanggantbl` (`id`, `no_ktp`, `nama_pelanggan`, `alamat`, `telepon`, `foto`) VALUES
(3, '3579518264', 'Maxikom', 'Jln. Residen H. Abdul Rozak No. 33 Palembang', '0711-717598', 'maxikom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sewatbl`
--

CREATE TABLE IF NOT EXISTS `sewatbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `no_sewa` varchar(20) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `no_polisi` varchar(12) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `biaya` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sewatbl`
--

INSERT INTO `sewatbl` (`id`, `tanggal`, `no_sewa`, `no_ktp`, `no_polisi`, `tgl_sewa`, `tgl_kembali`, `biaya`, `catatan`, `status`) VALUES
(1, '2014-03-15', 'S,14-03,1', '3579518264', 'BG 6587 B', '2014-03-15', '2014-03-17', 300000, '-', 'Kembali'),
(2, '2014-03-23', 'S,14-03,2', '3579518264', 'BG 1726 B', '2014-03-23', '2014-03-25', 350000, 'Penyewaan', 'Kembali');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
