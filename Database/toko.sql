-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2014 at 08:16 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbarang`
--

CREATE TABLE IF NOT EXISTS `tblbarang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `kode_kelompok` varchar(15) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblbarang`
--

INSERT INTO `tblbarang` (`id`, `kode_barang`, `nama_barang`, `kode_kelompok`, `harga_beli`, `harga_jual`, `stock`) VALUES
(1, 'BRG-1', 'Tes Nama Barang 1', 'KLP-1', 15000, 17500, 50),
(2, 'BRG-2', 'Tes Nama Barang 2', 'KLP-1', 32500, 40000, 100),
(3, 'BRG-3', 'Tes Nama Barang 3', 'KLP-1', 22500, 30000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tblkelompok`
--

CREATE TABLE IF NOT EXISTS `tblkelompok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kelompok` varchar(15) NOT NULL,
  `nama_kelompok` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblkelompok`
--

INSERT INTO `tblkelompok` (`id`, `kode_kelompok`, `nama_kelompok`) VALUES
(1, 'KLP-1', 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `tblpemasok`
--

CREATE TABLE IF NOT EXISTS `tblpemasok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pemasok` varchar(15) NOT NULL,
  `nama_pemasok` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblpemasok`
--

INSERT INTO `tblpemasok` (`id`, `kode_pemasok`, `nama_pemasok`, `alamat`) VALUES
(1, 'PMS-1', 'Toko Jaya Makmur', 'Palembang 0711-010101');

-- --------------------------------------------------------

--
-- Table structure for table `tblpengguna`
--

CREATE TABLE IF NOT EXISTS `tblpengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblpengguna`
--

INSERT INTO `tblpengguna` (`id`, `user`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi_beli`
--

CREATE TABLE IF NOT EXISTS `tbltransaksi_beli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_faktur` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_pemasok` varchar(15) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbltransaksi_beli`
--

INSERT INTO `tbltransaksi_beli` (`id`, `no_faktur`, `tanggal`, `kode_pemasok`, `total`) VALUES
(1, 'FB-0314-1', '2014-03-25', 'PMS-1', 15000),
(2, 'FB-0314-2', '2014-03-25', 'PMS-1', 812500),
(3, 'FB-0314-3', '2014-03-26', 'PMS-1', 1850000);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi_beli_rinci`
--

CREATE TABLE IF NOT EXISTS `tbltransaksi_beli_rinci` (
  `no_faktur` varchar(15) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaksi_beli_rinci`
--

INSERT INTO `tbltransaksi_beli_rinci` (`no_faktur`, `kode_barang`, `harga_beli`, `jumlah`, `sub_total`) VALUES
('FB-0314-1', 'BRG-1', 15000, 1, 15000),
('FB-0314-2', 'BRG-2', 32500, 25, 812500),
('FB-0314-3', 'BRG-3', 22500, 10, 225000),
('FB-0314-3', 'BRG-2', 32500, 50, 1625000);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi_jual`
--

CREATE TABLE IF NOT EXISTS `tbltransaksi_jual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_faktur` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbltransaksi_jual`
--

INSERT INTO `tbltransaksi_jual` (`id`, `no_faktur`, `tanggal`, `total`) VALUES
(1, 'FJ-0314-1', '2014-03-25', 2035000),
(2, 'FJ-0314-2', '2014-03-25', 3437500),
(3, 'FJ-0314-3', '2014-03-26', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi_jual_rinci`
--

CREATE TABLE IF NOT EXISTS `tbltransaksi_jual_rinci` (
  `no_faktur` varchar(15) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransaksi_jual_rinci`
--

INSERT INTO `tbltransaksi_jual_rinci` (`no_faktur`, `kode_barang`, `harga_jual`, `jumlah`, `sub_total`) VALUES
('FJ-0314-1', 'BRG-1', 17500, 2, 35000),
('FJ-0314-1', 'BRG-2', 40000, 50, 2000000),
('FJ-0314-2', 'BRG-2', 40000, 75, 3000000),
('FJ-0314-2', 'BRG-1', 17500, 25, 437500),
('FJ-0314-3', 'BRG-3', 30000, 50, 1500000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
