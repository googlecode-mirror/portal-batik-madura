-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2012 at 12:42 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kobatpam`
--

-- --------------------------------------------------------

--
-- Table structure for table `investasi`
--

CREATE TABLE IF NOT EXISTS `investasi` (
  `id_inv` int(11) NOT NULL,
  `id_dagang` int(11) DEFAULT NULL,
  `nama_ud` varchar(20) DEFAULT NULL,
  `jumlah_keb` int(11) DEFAULT NULL,
  `keterangan_inv` text,
  `waktu_inv` date DEFAULT NULL,
  `profil_inv` text,
  `gambr_inv` longblob,
  `status_inv` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_inv`),
  KEY `FK_Meminta2` (`id_dagang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE IF NOT EXISTS `investor` (
  `id_user` int(11) NOT NULL,
  `id_inv` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_inv`),
  KEY `FK_investor2` (`id_inv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membeli`
--

CREATE TABLE IF NOT EXISTS `membeli` (
  `id_user` int(11) NOT NULL,
  `id_penj` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_penj`),
  KEY `FK_membeli2` (`id_penj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notif_peng`
--

CREATE TABLE IF NOT EXISTS `notif_peng` (
  `id_notif_2` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `isi_notif_2` varchar(50) DEFAULT NULL,
  `tgl_2` date DEFAULT NULL,
  `status_2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notif_2`),
  KEY `FK_memiliki1` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notif_ud`
--

CREATE TABLE IF NOT EXISTS `notif_ud` (
  `id_notif_1` int(11) NOT NULL,
  `id_dagang` int(11) DEFAULT NULL,
  `isi_notif_1` varchar(50) DEFAULT NULL,
  `tgl_1` date DEFAULT NULL,
  `status_1` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notif_1`),
  KEY `FK_memili2` (`id_dagang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(15) DEFAULT NULL,
  `Id_login_peng` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `no_telp` int(11) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `alamat` text,
  `email` varchar(30) DEFAULT NULL,
  `status_peng` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengrajin`
--

CREATE TABLE IF NOT EXISTS `pengrajin` (
  `id_dagang` int(11) NOT NULL,
  `id_inv` int(11) DEFAULT NULL,
  `nama_usaha` varchar(20) DEFAULT NULL,
  `alamat_usaha` text,
  `telp_usaha` int(11) DEFAULT NULL,
  `profil_usaha` text,
  `gmbar_usaha` longblob,
  PRIMARY KEY (`id_dagang`),
  KEY `FK_Meminta` (`id_inv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id_penj` int(11) NOT NULL,
  `id_dagang` int(11) DEFAULT NULL,
  `nama_produk` varchar(15) DEFAULT NULL,
  `harga_produk` int(11) DEFAULT NULL,
  `stok_produk` int(11) DEFAULT NULL,
  `detail_produk` text,
  `Suplier` varchar(15) DEFAULT NULL,
  `gambar` longblob,
  `status_produk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penj`),
  KEY `FK_Menjual` (`id_dagang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE IF NOT EXISTS `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `pem_riwayat` int(11) NOT NULL,
  `nama_riwayat` varchar(50) NOT NULL,
  `tgl_riwayat` date NOT NULL,
  `status_riwayat` varchar(15) NOT NULL,
  PRIMARY KEY (`id_riwayat`),
  KEY `FK_mempunyai` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `investasi`
--
ALTER TABLE `investasi`
  ADD CONSTRAINT `FK_Meminta2` FOREIGN KEY (`id_dagang`) REFERENCES `pengrajin` (`id_dagang`);

--
-- Constraints for table `investor`
--
ALTER TABLE `investor`
  ADD CONSTRAINT `FK_investor2` FOREIGN KEY (`id_inv`) REFERENCES `investasi` (`id_inv`),
  ADD CONSTRAINT `FK_investor` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Constraints for table `membeli`
--
ALTER TABLE `membeli`
  ADD CONSTRAINT `FK_membeli2` FOREIGN KEY (`id_penj`) REFERENCES `penjualan` (`id_penj`),
  ADD CONSTRAINT `FK_membeli` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Constraints for table `notif_peng`
--
ALTER TABLE `notif_peng`
  ADD CONSTRAINT `FK_memiliki1` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

--
-- Constraints for table `notif_ud`
--
ALTER TABLE `notif_ud`
  ADD CONSTRAINT `FK_memili2` FOREIGN KEY (`id_dagang`) REFERENCES `pengrajin` (`id_dagang`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `FK_Menjual` FOREIGN KEY (`id_dagang`) REFERENCES `pengrajin` (`id_dagang`);

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `FK_mempunyai` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
