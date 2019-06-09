-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 05:38 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisba`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisba_account`
--

CREATE TABLE `wisba_account` (
  `id_account` int(4) NOT NULL,
  `registered` datetime DEFAULT CURRENT_TIMESTAMP,
  `nama_account` varchar(100) DEFAULT NULL,
  `email_account` varchar(100) DEFAULT NULL,
  `no_hp_account` varchar(100) DEFAULT NULL,
  `nik_account` varchar(100) DEFAULT NULL COMMENT 'update UMKM',
  `alamat_account` varchar(100) DEFAULT NULL COMMENT 'update UMKM',
  `agama_account` varchar(100) DEFAULT NULL COMMENT 'update UMKM',
  `jabatan_account` varchar(100) DEFAULT NULL COMMENT 'update UMKM',
  `kota_account` varchar(100) DEFAULT NULL COMMENT 'update UMKM',
  `kab_account` varchar(100) DEFAULT NULL COMMENT 'update UMKM',
  `foto_front_account` text,
  `foto_back_account` text,
  `ttd_account` text,
  `lat_account` varchar(100) DEFAULT NULL,
  `long_account` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status_account` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wisba_account`
--

INSERT INTO `wisba_account` (`id_account`, `registered`, `nama_account`, `email_account`, `no_hp_account`, `nik_account`, `alamat_account`, `agama_account`, `jabatan_account`, `kota_account`, `kab_account`, `foto_front_account`, `foto_back_account`, `ttd_account`, `lat_account`, `long_account`, `username`, `password`, `status_account`) VALUES
(1, '2019-04-28 16:33:04', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'IAV Tamvan', 'iavt', '123', 'Umum'),
(4, '2019-04-28 17:51:36', 'iav@iav.com', 'Ade Fajr Ariav', '083838191709', NULL, NULL, NULL, NULL, NULL, NULL, 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2018/08/07/2985630265.jpg', 'https://cdn.brilio.net/news/2018/05/30/143480/thumbnail-sophia-latjuba-pamer-foto-mesra-bareng-cowok-ganteng-kekasih-baru-180530l.jpg', 'https://cdn2.boombastis.com/wp-content/uploads/2018/02/Tanda-tangan-dengan-garis-bawah.jpg', '-7.1574558', '110.4204367', 'iav', '123', 'Umum'),
(5, '2019-04-28 18:26:20', 'Khoirul Huda', 'huda@gmail.com', '083838194709', NULL, NULL, NULL, NULL, NULL, NULL, 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2018/08/07/2985630265.jpg', 'https://cdn.brilio.net/news/2018/05/30/143480/thumbnail-sophia-latjuba-pamer-foto-mesra-bareng-cowok-ganteng-kekasih-baru-180530l.jpg', 'https://cdn2.boombastis.com/wp-content/uploads/2018/02/Tanda-tangan-dengan-garis-bawah.jpg', '-9999', '873783', 'huda', '123', 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `wisba_keluhan`
--

CREATE TABLE `wisba_keluhan` (
  `id_keluhan` int(4) NOT NULL,
  `id_account` int(4) DEFAULT NULL,
  `registered` datetime DEFAULT CURRENT_TIMESTAMP,
  `gambar_keluhan` text,
  `face_pelaporan_keluhan` text,
  `nama_keluhan` varchar(200) DEFAULT NULL,
  `deskripsi_keluhan` varchar(200) DEFAULT NULL,
  `jenis_keluhan` varchar(100) DEFAULT NULL,
  `lat_keluhan` varchar(100) DEFAULT NULL,
  `long_keluhan` varchar(100) DEFAULT NULL,
  `like_keluhan` varchar(100) DEFAULT NULL,
  `dislike_keluhan` varchar(100) DEFAULT NULL,
  `status_keluhan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wisba_keluhan`
--

INSERT INTO `wisba_keluhan` (`id_keluhan`, `id_account`, `registered`, `gambar_keluhan`, `face_pelaporan_keluhan`, `nama_keluhan`, `deskripsi_keluhan`, `jenis_keluhan`, `lat_keluhan`, `long_keluhan`, `like_keluhan`, `dislike_keluhan`, `status_keluhan`) VALUES
(1, 4, '2019-05-05 22:45:45', 'Itag', 'Itag', 'Itag', 'Itag', 'Itag', 'Itag', 'Itag', NULL, NULL, 'Pending'),
(4, 4, '2019-06-08 21:29:43', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', 'Wc nya rusak bos', 'wc nya knapa rusak? harusnya dengan membayar tiket masuk yg mahal mendapatkan fasilitas yg baik', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(5, 4, '2019-06-08 21:40:56', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', 'Ini kok patah hatinya?', 'wahh salahnya patah hatu terus wkwkw', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(6, 4, '2019-06-08 21:45:22', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(7, 4, '2019-06-08 21:48:44', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(8, 4, '2019-06-08 21:48:58', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(9, 4, '2019-06-08 21:52:18', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(10, 4, '2019-06-08 21:54:33', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(11, 4, '2019-06-08 22:00:17', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(12, 4, '2019-06-08 22:01:22', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(13, 4, '2019-06-08 22:02:18', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(14, 4, '2019-06-08 22:02:22', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending'),
(15, 4, '2019-06-08 22:06:35', 'https://asset.kompas.com/crop/15x54:770x557/750x500/data/photo/2019/02/24/1104711726.jpeg', 'https://assets-a1.kompasiana.com/items/album/2018/11/21/foto-pria-ganteng-indonesia-21-5bf5756faeebe169634adeb4.jpg?t=o&v=800', '', '', 'Wisata', '-7.15844', '110.42014833333333', NULL, NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `wisba_tempat`
--

CREATE TABLE `wisba_tempat` (
  `id_tempat` int(4) NOT NULL,
  `id_account` int(4) DEFAULT NULL,
  `registered` datetime DEFAULT CURRENT_TIMESTAMP,
  `nama_tempat` varchar(100) DEFAULT NULL,
  `gambar_thumbnail_tempat` text,
  `alamat_tempat` text,
  `jarak_tempat` varchar(50) DEFAULT NULL,
  `lat_tempat` varchar(50) DEFAULT NULL,
  `long_tempat` varchar(50) DEFAULT NULL,
  `gambar_1_tempat` text,
  `gambar_2_tempat` text,
  `detail_deskripsi_tempat` text,
  `like_tempat` varchar(50) DEFAULT NULL,
  `dislike_tempat` varchar(50) DEFAULT NULL,
  `kategori_tempat` varchar(50) DEFAULT NULL,
  `status_tempat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisba_account`
--
ALTER TABLE `wisba_account`
  ADD PRIMARY KEY (`id_account`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_account` (`email_account`),
  ADD UNIQUE KEY `no_hp_account` (`no_hp_account`);

--
-- Indexes for table `wisba_keluhan`
--
ALTER TABLE `wisba_keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `FK_wisba_keluhan_wisba_account` (`id_account`);

--
-- Indexes for table `wisba_tempat`
--
ALTER TABLE `wisba_tempat`
  ADD PRIMARY KEY (`id_tempat`),
  ADD KEY `FK_wisba_tempat_wisba_account` (`id_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisba_account`
--
ALTER TABLE `wisba_account`
  MODIFY `id_account` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wisba_keluhan`
--
ALTER TABLE `wisba_keluhan`
  MODIFY `id_keluhan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wisba_tempat`
--
ALTER TABLE `wisba_tempat`
  MODIFY `id_tempat` int(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wisba_keluhan`
--
ALTER TABLE `wisba_keluhan`
  ADD CONSTRAINT `FK_wisba_keluhan_wisba_account` FOREIGN KEY (`id_account`) REFERENCES `wisba_account` (`id_account`);

--
-- Constraints for table `wisba_tempat`
--
ALTER TABLE `wisba_tempat`
  ADD CONSTRAINT `FK_wisba_tempat_wisba_account` FOREIGN KEY (`id_account`) REFERENCES `wisba_account` (`id_account`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
