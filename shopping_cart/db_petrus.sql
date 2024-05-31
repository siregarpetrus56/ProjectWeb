-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Nov 2023 pada 17.06
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_petrus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` char(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama`, `stok`, `harga`, `keterangan`, `gambar`) VALUES
(1, 'P01', 'Nasi Goreng', 10, 20000, 'Kelengkapan : <br>\r\n- Telur <br>\r\n- Lalapan <br>\r\n- Daun Bawang <br>\r\n- Kerupuk <br>', 'fried.png'),
(2, 'P02', 'Nasi Gurih Rendang Sapi', 10, 35000, 'Kelengkapan : <br>\r\n- Rendang Sapi <br>\r\n- Mie <br>\r\n- Telur <br>\r\n- Lalapan <br>', 'nasigurih.png'),
(3, 'P03', 'Sate Taichan', 10, 11000, 'Kelengkapan : <br>\r\n- Sate Taichan <br>\r\n- Bumbu khas taichan <br>\r\n- Lontong <br>\r\n- Lalapan <br>', 'sate.png'),
(4, 'P04', 'Bakso Aci', 20, 20000, 'Kelengkapan : <br>\r\n- Bakso Aci <br>\r\n- Mie <br>\r\n- Kwetiau Goreng <br>\r\n- Kerupuk/Pilus <br>', 'baksoaci.png'),
(5, 'P05', 'Seblak', 20, 20000, 'Kelengkapan :<br>\r\n- Daging Ayam <br>\r\n- Sayuran <br>\r\n- Mie <br>\r\n- Kerupuk <br>', 'seblak.png'),
(6, 'P06', 'Takoyaki', 20, 150000, 'Kelengkapan :<br>\r\n- Takoyaki <br>\r\n- Kimchi <br>\r\n- Tempura scraps <br>\r\n- Mayonaise <br>', 'takoyaki.png');

--
-- Indexes for dumped tables
--

DROP TABLE IF EXISTS `se_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `se_user` (
  `user_id` char(20) NOT NULL,
  `user_name` char(50) NOT NULL,
  `user_company` char(50) NOT NULL,
  `user_email` char(100) NOT NULL,
  `user_hp` char(30) NOT NULL,
  `user_pwd` varchar(32) NOT NULL,
  `user_status` char(100) DEFAULT NULL,
  `user_signin` char(1) DEFAULT NULL,
  `user_signin_time` datetime DEFAULT NULL,
  `user_active` char(1) DEFAULT NULL,
  `user_picture` char(100) DEFAULT NULL,
  `user_level_code` char(5) DEFAULT NULL,
  `user_key_number` char(20) DEFAULT NULL,
  `user_profile_code` char(10) DEFAULT NULL,
  `user_proc_code` char(5) DEFAULT NULL,
  `user_branch_code` char(10) DEFAULT NULL,
  `user_unit_code` char(5) DEFAULT NULL,
  `user_flag` char(10) DEFAULT NULL,
  `user_create_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `se_user`
INSERT INTO `se_user` (`user_id`, `user_name`, `user_company`, `user_email`, `user_hp`, `user_pwd`, `user_status`, `user_signin`, `user_signin_time`, `user_active`, `user_picture`, `user_level_code`, `user_key_number`, `user_profile_code`, `user_proc_code`, `user_branch_code`, `user_unit_code`, `user_flag`, `user_create_time`) VALUES
('risfar', 'risfartesting', '', '', '', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, 'yutube.png', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0000-00-00 00:00:00'),
('admin', 'admin', '', '', '', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 'Desert1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '1', '0000-00-00 00:00:00'),
('koperasiYKMF', 'KOPERASI YKMF', '', '', '', '044a2fc30eacfb63d14ed32669f66f94', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0000-00-00 00:00:00'),
('admininventaris', 'ADMIN INVENTARIS', '', '', '', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '0000-00-00 00:00:00'),
('yoko', '', '', 'yoko@gmail.com', '', '6a3fe1ddf8a8bc35736a1228117a8156', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '2023-10-26 18:02:38');
--


DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `id_supplier` char(20) NOT NULL,
  `nama_supplier` char(25) NOT NULL,
  `alamat_supplier` char(100) NOT NULL,
  `nomortelp_supplier` char(16) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `pelanggan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelanggan` (
  `id_pelanggan` char(20) NOT NULL,
  `nama_pelanggan` char(25) NOT NULL,
  `alamat_pelanggan` char(100) NOT NULL,
  `nomortelp_pelangganr` char(16) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;



-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
