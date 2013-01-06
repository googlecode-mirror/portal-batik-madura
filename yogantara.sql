-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2013 at 05:00 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yogantara`
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
  `status_inv` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_inv`),
  KEY `FK_Meminta2` (`id_dagang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investasi`
--

INSERT INTO `investasi` (`id_inv`, `id_dagang`, `nama_ud`, `jumlah_keb`, `keterangan_inv`, `waktu_inv`, `profil_inv`, `status_inv`) VALUES
(0, 1, 'puteri', 50000, 'jkdg', '2013-01-24', NULL, NULL),
(201, 1, 'puteri', 23000, 'ini hanya dari saya', '2013-01-17', 'batik pamekasan', 0);

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
-- Table structure for table `notif_rajin`
--

CREATE TABLE IF NOT EXISTS `notif_rajin` (
  `id_notif_3` int(11) NOT NULL,
  `id_rajin` int(11) NOT NULL,
  `isi_notif_3` varchar(50) NOT NULL,
  `tgl_3` date NOT NULL,
  `status_3` int(11) NOT NULL,
  PRIMARY KEY (`id_notif_3`)
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
  `id_dagang` int(11) NOT NULL AUTO_INCREMENT,
  `id_inv` int(11) DEFAULT NULL,
  `nama_usaha` varchar(20) DEFAULT NULL,
  `alamat_usaha` text,
  `telp_usaha` int(11) DEFAULT NULL,
  `profil_usaha` text,
  `gmbar_usaha` varchar(50) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_dagang`),
  KEY `FK_Meminta` (`id_inv`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pengrajin`
--

INSERT INTO `pengrajin` (`id_dagang`, `id_inv`, `nama_usaha`, `alamat_usaha`, `telp_usaha`, `profil_usaha`, `gmbar_usaha`, `username`, `password`) VALUES
(1, 1, 'puteri', 'jl. adil jaya', 2147483647, 'batik pamekasan', '../img/user/ela/sarjana.jpg', 'ela', 'puteri'),
(2, NULL, 'UD. MAJU JAYA', 'jhgiy', 7687, 'jhgki', '../img/user/mama/2rvzokx.jpg', 'mama', 'mama'),
(3, NULL, 'puteri', 'jl. adil jaya', 2147483647, 'batik pamekasan', '../img/user/puteri/4495810891_5c2ae953bf_b.jpg', 'puteri', 'puteri'),
(4, NULL, 'ratih', 'jl. klampar jaya ray', 979878, 'jkh', '../img/user/kkkk/3885841129_eaae98ed20_o.jpg', 'kkkk', 'jjjj'),
(5, NULL, 'gggg', 'gggg', 7867576, 'hghjgjh', '../img/user/mmmm/2625943471f6a0172e95hy7.jpg', 'mmmm', 'mmmm'),
(6, NULL, 'llllllll', 'mamam', 86767, 'jhjhj', '../img/user/lllll/3885841129_eaae98ed20_o.jpg', 'lllll', 'llll'),
(7, NULL, 'loli', 'jl. klampar jaya ray', 78786, 'jhjk', '../img/user/ppp/3885841129_eaae98ed20_o.jpg', 'ppp', 'ppp');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `detail_produk` text NOT NULL,
  `id_dagang` varchar(11) NOT NULL,
  `Gambar` varchar(30) NOT NULL,
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`nama_produk`, `harga_produk`, `stok_produk`, `detail_produk`, `id_dagang`, `Gambar`, `id_produk`) VALUES
('Batik2', 40000, 8, ' Bahan : Sutera.\r\nterbatas...', '2', '../img/produk/2/A 22 180RB.JPG', 2),
('batikq', 70000, 8, 'bagus bgt', '1', '../img/produk/1/A 26 120RB.JPG', 4),
('batikku', 400000, 5, 'batik bagus', '1', '../img/produk/1/A 37 110RB.JPG', 5),
('Batik2', 90000, 9, 'Batik Pamekasan indah\r\nkain sutra', '2', '../img/produk/2/B 9 100RB.JPG', 18),
('Batik3', 70000, 7, 'batik pamekasan', '2', '../img/produk/2/A 14 10RB.JPG', 19),
('Batik4', 600000, 8, 'batik pamekasan', '2', '../img/produk/2/A 3 175RB.JPG', 20);

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
  ADD CONSTRAINT `FK_investor` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`),
  ADD CONSTRAINT `FK_investor2` FOREIGN KEY (`id_inv`) REFERENCES `investasi` (`id_inv`);

--
-- Constraints for table `membeli`
--
ALTER TABLE `membeli`
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
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `FK_mempunyai` FOREIGN KEY (`id_user`) REFERENCES `pengguna` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
