-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2017 at 03:47 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cafe`
--
CREATE DATABASE `cafe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cafe`;

-- --------------------------------------------------------

--
-- Table structure for table `credential`
--

CREATE TABLE IF NOT EXISTS `credential` (
  `id_credential` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `privilege` varchar(20) NOT NULL,
  `status` enum('AKTIF','PASIF','HAPUS') NOT NULL,
  PRIMARY KEY (`id_credential`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `credential`
--

INSERT INTO `credential` (`id_credential`, `username`, `password`, `privilege`, `status`) VALUES
(1, 'superduperadmin', 'eb852354a3ca6b470c35c6f2cb9b8f81', 'super', 'AKTIF'),
(2, 'demimoore', '3c6ff13b2a3cad695783dbf94128f2aa', 'kasir', 'PASIF');

-- --------------------------------------------------------

--
-- Table structure for table `detail_meja`
--

CREATE TABLE IF NOT EXISTS `detail_meja` (
  `id_meja` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_meja`
--


-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE IF NOT EXISTS `detail_pesanan` (
  `id_detail_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesanan` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_detail_pesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `detail_pesanan`
--


-- --------------------------------------------------------

--
-- Table structure for table `jenis_makanan`
--

CREATE TABLE IF NOT EXISTS `jenis_makanan` (
  `id_jenis_makanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_makanan` varchar(25) NOT NULL,
  `kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_jenis_makanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jenis_makanan`
--

INSERT INTO `jenis_makanan` (`id_jenis_makanan`, `nama_jenis_makanan`, `kategori`) VALUES
(1, 'APPERTIZER', 0),
(2, 'MAIN COURSE', 0),
(3, 'JUICE', 1),
(4, 'paners', 0);

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE IF NOT EXISTS `meja` (
  `id_meja` int(11) NOT NULL AUTO_INCREMENT,
  `no_meja` varchar(5) NOT NULL,
  `lantai` varchar(3) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_meja`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id_meja`, `no_meja`, `lantai`, `status`) VALUES
(1, '01', '1', 0),
(2, '02', '1', 2),
(3, '03', '1', 0),
(4, '04', '1', 1),
(5, '05', '1', 0),
(6, '06', '2', 0),
(7, '07', '2', 0),
(8, '08', '2', 2),
(9, '09', '2', 0),
(10, '10', '2', 0),
(11, '11', '2', 0),
(12, '12', '2', 1),
(13, '13', '2', 0),
(14, '14', '2', 0),
(15, '15', '2', 0),
(16, '16', '2', 0),
(17, '17', '2', 0),
(18, '18', '2', 0),
(19, '19', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) NOT NULL,
  `kategori` int(11) NOT NULL,
  `id_jenis_makanan` int(11) NOT NULL,
  `harga_pokok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `id_menu` (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `kategori`, `id_jenis_makanan`, `harga_pokok`, `harga_jual`) VALUES
(1, 'French Fries', 0, 1, 5000, 10000),
(2, 'pan jos', 0, 2, 10000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesanan` int(11) NOT NULL,
  `tgl_nota` date NOT NULL,
  `total` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `total_ppn` int(11) NOT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `nota`
--


-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(50) NOT NULL,
  `date_pesanan` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_pesanan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pesanan`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_credential` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat_user` varchar(150) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `ttl` varchar(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_credential`, `nama_user`, `alamat_user`, `no_ktp`, `no_telp`, `foto`, `ttl`) VALUES
(1, 1, 'Super Admin', 'Kudus', '001', '0291', '', ''),
(2, 2, 'Demi Moorer', '  jalan batang selatan', '222334', '6565557', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
