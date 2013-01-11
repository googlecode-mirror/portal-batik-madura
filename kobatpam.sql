-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2013 at 03:43 AM
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
  `id_user` int(11) NOT NULL,
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

INSERT INTO `investasi` (`id_inv`, `id_dagang`, `id_user`, `nama_ud`, `jumlah_keb`, `keterangan_inv`, `waktu_inv`, `profil_inv`, `status_inv`) VALUES
(201, 1, 0, 'puteri', 23000, 'ini hanya dari saya', '2013-01-17', 'batik pamekasan', 0),
(202, 1, 0, 'puteri', 500000, 'Semoga dipergunakan dengan sebaik2nya', '0000-00-00', 'batik pamekasan', 0),
(203, 2, 0, 'UD. MAJU JAYA', 500000, 'semoga bisa membantu', '0000-00-00', 'jhgki', 0),
(204, 1, 101, 'puteri', 2342, '13ddddd', '2013-01-07', 'batik pamekasan', 0),
(205, 3, 0, 'puteri', 500, 'hahahahah', '2013-01-07', 'batik pamekasan', 0),
(206, 3, 0, 'puteri', 100000, 'Semoga ini membantu mengembangkan usaha anda', '2013-01-07', 'batik pamekasan', 0),
(207, 3, 0, 'puteri', 3453, 'hahaha', '2013-01-07', 'batik pamekasan', 0);

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
  `id_penj` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `Jumlahbarang` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_penj`),
  KEY `FK_membeli2` (`id_penj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membeli`
--

INSERT INTO `membeli` (`id_penj`, `id_user`, `namabarang`, `Jumlahbarang`, `totalharga`, `tanggal`) VALUES
(201, 102, 'Batik2', 5, 200000, '0000-00-00'),
(202, 102, 'Batik2', 3, 120000, '2013-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `notif_peng`
--

CREATE TABLE IF NOT EXISTS `notif_peng` (
  `id_notif_2` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `isi_notif_2` text,
  `tgl_2` date DEFAULT NULL,
  `status_2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notif_2`),
  KEY `FK_memiliki1` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif_peng`
--

INSERT INTO `notif_peng` (`id_notif_2`, `id_user`, `isi_notif_2`, `tgl_2`, `status_2`) VALUES
(201, 101, 'saya sedang berjalan', '2012-08-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notif_ud`
--

CREATE TABLE IF NOT EXISTS `notif_ud` (
  `id_notif_1` int(11) NOT NULL,
  `id_dagang` int(11) DEFAULT NULL,
  `isi_notif_1` text,
  `tgl_1` date DEFAULT NULL,
  `status_1` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_notif_1`),
  KEY `FK_memili2` (`id_dagang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif_ud`
--

INSERT INTO `notif_ud` (`id_notif_1`, `id_dagang`, `isi_notif_1`, `tgl_1`, `status_1`) VALUES
(202, 3, 'Perusahaan anda telah mendapatkan invesatasi sebesar RP100000 dari Samsudin', '2013-01-07', 0),
(401, 1, 'Usaha Anda telah mendapat investasi sebesar Rp5000', '0000-00-00', 0),
(402, 2, 'Usaha Anda telah mendapat investasi sebesar Rp500000 oleh ', '0000-00-00', 0),
(403, 1, 'Usaha Anda telah mendapat investasi sebesar Rp2342 oleh okelah', '2013-01-07', 0),
(404, 2, '', '2013-01-07', 0),
(405, 1, 'Produk dari perusahaan anda dengan nama batikq, telah dibeli oleh Samsudin sebanyak 1 dengan total pembelian RP70000', '2013-01-07', 0),
(406, 3, 'Perusahaan anda telah mendapatkan invesatasi sebesar RP3453 dari Samsudin', '2013-01-07', 0);

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

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama_user`, `Id_login_peng`, `password`, `no_telp`, `jk`, `alamat`, `email`, `status_peng`) VALUES
(101, 'okelah', 'oke', 'oke', 856455, 'L', 'jalan senang-senang', 'as@senang', 0),
(102, 'Samsudin', 'sama', 'sama', 9867, 'P', 'mencari ikan di laut', 'as@hama,com', 0);

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
('Batik2', 40000, 7, ' Bahan : Sutera.\r\nterbatas...', '2', '../img/produk/2/A 22 180RB.JPG', 2),
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
