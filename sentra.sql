-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 05:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sentra`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `kategori` enum('Pengumuman','Berita') NOT NULL,
  `tglterbit` int(11) NOT NULL,
  `isiberita` longtext NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori`, `tglterbit`, `isiberita`, `gambar`) VALUES
(22, 'Setelah 6 Bulan Diresmikan, Sentra Kuliner Perikanan Kota Pekalongan Makin Sepi, Kiosnya Kosong', 'Berita', 1641447085, '<p> </p>\r\n\r\n<p>TRIBUNNEWS.COM, PEKALONGAN - Sentra kuliner perikanan yang berada di Kawasan Technopark Perikanan Kota Pekalongan nampak sepi.</p>\r\n\r\n<p>Dari 10 kios hanya dua kios yang buka, sementara sisanya terlihat kosong.</p>\r\n\r\n<p>Gedung yang memakan anggaran Rp 1,6 miliar itu diresmikan Pemkot Pekalongan April lalu.</p>\r\n\r\n<p>Dan kini, belum genap 6 bulan ditinggalkan oleh para pedagang.</p>\r\n\r\n<p>Menurut Ana Casbari, satu dari dua pemilik kios yang buka, pedagang pindah ke lapak semula di Jalan WR Supratman, Pekalongan Utara.</p>\r\n\r\n<p>“Pedagang lainya hanya menempati kurang dari dua bulan, setelah itu mereka kembali lagi ke warung milik mereka,” katanya, Kamis (5/9/2019).</p>\r\n\r\n<p>Dilanjutkannya, hal tersebut dikarenakan sepinya pengunjung.</p>\r\n\r\n<p>“Karena sepi jadi pindah, saya saja Agustus lalu libur satu bulan, dan hari ini baru buka,” paparnya.</p>\r\n\r\n<p>Sementara itu, Rozi, pedagang lainya, menerangkan, hanya ia dan Ana yang masih mau bertahan.</p>\r\n\r\n<p>“Bingung kalau kondisinya seperti ini, yang mau bayar listrik dan bertahan ya hanya kami berdua,” kata Rozi.</p>\r\n\r\n<p>Ditambahkannya, ia terpaksa bertahan karena terlanjur pindah ke sentra kuliner.</p>\r\n\r\n<p>“Yang lain punya warung makan, jadi mereka kembali lagi ke tempat semula. Harapan kami di sini ramai pengunjung terus, namun sudah terlanjur percaya di sini ramai, malah kondisinya seperti ini,” tambahnya.</p>\r\n\r\n<p>Artikel ini telah tayang di Tribunjateng.com dengan judul Diresmikan 6 Bulan Lalu, Sentra Kuliner Perikanan Kota Pekalongan Makin Sepi dan Ditinggal Pedagang,</p>\r\n\r\n<p>\" id=\"isiberita\" placeholder=\"Masukan Isi Berita\"></p>\r\n\r\n<p>Pekalongan April lalu.</p>\r\n\r\n<p>Dan kini, belum genap 6 bulan ditinggalkan oleh para pedagang.</p>\r\n\r\n<p>Menurut Ana Casbari, satu dari dua pemilik kios yang buka, pedagang pindah ke lapak semula di Jalan WR Supratman, Pekalongan Utara.</p>\r\n\r\n<p>“Pedagang lainya hanya menempati kurang dari dua bulan, setelah itu mereka kembali lagi ke warung milik mereka,” katanya, Kamis (5/9/2019).</p>\r\n\r\n<p>Dilanjutkannya, hal tersebut dikarenakan sepinya pengunjung.</p>\r\n\r\n<p>“Karena sepi jadi pindah, saya saja Agustus lalu libur satu bulan, dan hari ini baru buka,” paparnya.</p>\r\n\r\n<p>Sementara itu, Rozi, pedagang lainya, menerangkan, hanya ia dan Ana yang masih mau bertahan.</p>\r\n\r\n<p>“Bingung kalau kondisinya seperti ini, yang mau bayar listrik dan bertahan ya hanya kami berdua,” kata Rozi.</p>\r\n\r\n<p>Ditambahkannya, ia terpaksa bertahan karena terlanjur pindah ke sentra kuliner.</p>\r\n\r\n<p>“Yang lain punya warung makan, jadi mereka kembali lagi ke tempat semula. Harapan kami di sini ramai pengunjung terus, namun sudah terlanjur percaya di sini ramai, malah kondisinya seperti ini,” tambahnya.</p>\r\n\r\n<p>Artikel ini telah tayang di Tribunjateng.com dengan judul Diresmikan 6 Bulan Lalu, Sentra Kuliner Perikanan Kota Pekalongan Makin Sepi dan Ditinggal Pedagang,</p>\r\n\r\n<p>\" id=\"isiberita\" placeholder=\"Masukan Isi Berita\"></p>\r\n\r\n<p>TRIBUNNEWS.COM, PEKALONGAN - Sentra kuliner perikanan yang berada di Kawasan Technopark Perikanan Kota Pekalongan nampak sepi.</p>\r\n\r\n<p>Dari 10 kios hanya dua kios yang buka, sementara sisanya terlihat kosong.</p>\r\n\r\n<p>Gedung yang memakan anggaran Rp 1,6 miliar itu diresmikan Pemkot Pekalongan April lalu.</p>\r\n\r\n<p>Dan kini, belum genap 6 bulan ditinggalkan oleh para pedagang.</p>\r\n\r\n<p>Menurut Ana Casbari, satu dari dua pemilik kios yang buka, pedagang pindah ke lapak semula di Jalan WR Supratman, Pekalongan Utara.</p>\r\n\r\n<p>“Pedagang lainya hanya menempati kurang dari dua bulan, setelah itu mereka kembali lagi ke warung milik mereka,” katanya, Kamis (5/9/2019).</p>\r\n\r\n<p>Dilanjutkannya, hal tersebut dikarenakan sepinya pengunjung.</p>\r\n\r\n<p>“Karena sepi jadi pindah, saya saja Agustus lalu libur satu bulan, dan hari ini baru buka,” paparnya.</p>\r\n\r\n<p>Sementara itu, Rozi, pedagang lainya, menerangkan, hanya ia dan Ana yang masih mau bertahan.</p>\r\n\r\n<p>“Bingung kalau kondisinya seperti ini, yang mau bayar listrik dan bertahan ya hanya kami berdua,” kata Rozi.</p>\r\n\r\n<p>Ditambahkannya, ia terpaksa bertahan karena terlanjur pindah ke sentra kuliner.</p>\r\n\r\n<p>“Yang lain punya warung makan, jadi mereka kembali lagi ke tempat semula. Harapan kami di sini ramai pengunjung terus, namun sudah terlanjur percaya di sini ramai, malah kondisinya seperti ini,” tambahnya.</p>\r\n\r\n<p>Artikel ini telah tayang di Tribunjateng.com dengan judul Diresmikan 6 Bulan Lalu, Sentra Kuliner Perikanan Kota Pekalongan Makin Sepi dan Ditinggal Pedagang,</p>\r\n\r\n<p>\" id=\"isiberita\" placeholder=\"Masukan Isi Berita\"></p>\r\n\r\n<p>Pekalongan Utara.</p>\r\n\r\n<p>“Pedagang lainya hanya menempati kurang dari dua bulan, setelah itu mereka kembali lagi ke warung milik mereka,” katanya, Kamis (5/9/2019).</p>\r\n\r\n<p>Dilanjutkannya, hal tersebut dikarenakan sepinya pengunjung.</p>\r\n\r\n<p>“Karena sepi jadi pindah, saya saja Agustus lalu libur satu bulan, dan hari ini baru buka,” paparnya.</p>\r\n\r\n<p>Sementara itu, Rozi, pedagang lainya, menerangkan, hanya ia dan Ana yang masih mau bertahan.</p>\r\n\r\n<p>“Bingung kalau kondisinya seperti ini, yang mau bayar listrik dan bertahan ya hanya kami berdua,” kata Rozi.</p>\r\n\r\n<p>Ditambahkannya, ia terpaksa bertahan karena terlanjur pindah ke sentra kuliner.</p>\r\n\r\n<p>“Yang lain punya warung makan, jadi mereka kembali lagi ke tempat semula. Harapan kami di sini ramai pengunjung terus, namun sudah terlanjur percaya di sini ramai, malah kondisinya seperti ini,” tambahnya.</p>\r\n\r\n<p>Artikel ini telah tayang di Tribunjateng.com dengan judul Diresmikan 6 Bulan Lalu, Sentra Kuliner Perikanan Kota Pekalongan Makin Sepi dan Ditinggal Pedagang,</p>\r\n\r\n<p>\" id=\"isiberita\" placeholder=\"Masukan Isi Berita\"></p>\r\n\r\n<p>TRIBUNNEWS.COM, PEKALONGAN - Sentra kuliner perikanan yang berada di Kawasan Technopark Perikanan Kota Pekalongan nampak sepi.</p>\r\n\r\n<p>Dari 10 kios hanya dua kios yang buka, sementara sisanya terlihat kosong.</p>\r\n\r\n<p>Gedung yang memakan anggaran Rp 1,6 miliar itu diresmikan Pemkot Pekalongan April lalu.</p>\r\n\r\n<p>Dan kini, belum genap 6 bulan ditinggalkan oleh para pedagang.</p>\r\n\r\n<p>Menurut Ana Casbari, satu dari dua pemilik kios yang buka, pedagang pindah ke lapak semula di Jalan WR Supratman, Pekalongan Utara.</p>\r\n\r\n<p>“Pedagang lainya hanya menempati kurang dari dua bulan, setelah itu mereka kembali lagi ke warung milik mereka,” katanya, Kamis (5/9/2019).</p>\r\n\r\n<p>Dilanjutkannya, hal tersebut dikarenakan sepinya pengunjung.</p>\r\n\r\n<p>“Karena sepi jadi pindah, saya saja Agustus lalu libur satu bulan, dan hari ini baru buka,” paparnya.</p>\r\n\r\n<p>Sementara itu, Rozi, pedagang lainya, menerangkan, hanya ia dan Ana yang masih mau bertahan.</p>\r\n\r\n<p>“Bingung kalau kondisinya seperti ini, yang mau bayar listrik dan bertahan ya hanya kami berdua,” kata Rozi.</p>\r\n\r\n<p>Ditambahkannya, ia terpaksa bertahan karena terlanjur pindah ke sentra kuliner.</p>\r\n\r\n<p>“Yang lain punya warung makan, jadi mereka kembali lagi ke tempat semula. Harapan kami di sini ramai pengunjung terus, namun sudah terlanjur percaya di sini ramai, malah kondisinya seperti ini,” tambahnya.</p>\r\n\r\n<p>Artikel ini telah tayang di Tribunjateng.com dengan judul Diresmikan 6 Bulan Lalu, Sentra Kuliner Perikanan Kota Pekalongan Makin Sepi dan Ditinggal Pedagang,</p>\r\n\r\n<p>\" id=\"isiberita\" placeholder=\"Masukan Isi Berita\"></p>\r\n\r\n<p>Pekalongan April lalu.</p>\r\n\r\n<p>Dan kini, belum genap 6 bulan ditinggalkan oleh para pedagang.</p>\r\n\r\n<p>Menurut Ana Casbari, satu dari dua pemilik kios yang buka, pedagang pindah ke lapak semula di Jalan WR Supratman, Pekalongan Utara.</p>\r\n\r\n<p>“Pedagang lainya hanya menempati kurang dari dua bulan, setelah itu mereka kembali lagi ke warung milik mereka,” katanya, Kamis (5/9/2019).</p>\r\n\r\n<p>Dilanjutkannya, hal tersebut dikarenakan sepinya pengunjung.</p>\r\n\r\n<p>“Karena sepi jadi pindah, saya saja Agustus lalu libur satu bulan, dan hari ini baru buka,” paparnya.</p>\r\n\r\n<p>Sementara itu, Rozi, pedagang lainya, menerangkan, hanya ia dan Ana yang masih mau bertahan.</p>\r\n\r\n<p>“Bingung kalau kondisinya seperti ini, yang mau bayar listrik dan bertahan ya hanya kami berdua,” kata Rozi.</p>\r\n\r\n<p>Ditambahkannya, ia terpaksa bertahan karena terlanjur pindah ke sentra kuliner.</p>\r\n\r\n<p>“Yang lain punya warung makan, jadi mereka kembali lagi ke tempat semula. Harapan kami di sini ramai pengunjung terus, namun sudah terlanjur percaya di sini ramai, malah kondisinya seperti ini,” tambahnya.</p>\r\n\r\n<p>Artikel ini telah tayang di Tribunjateng.com dengan judul Diresmikan 6 Bulan Lalu, Sentra Kuliner Perikanan Kota Pekalongan Makin Sepi dan Ditinggal Pedagang,</p>\r\n\r\n<p>\" id=\"isiberita\" placeholder=\"Masukan Isi Berita\"></p>\r\n\r\n<p>TRIBUNNEWS.COM, PEKALONGAN - Sentra kuliner perikanan yang berada di Kawasan Technopark Perikanan Kota Pekalongan nampak sepi.</p>\r\n\r\n<p>Dari 10 kios hanya dua kios yang buka, sementara sisanya terlihat kosong.</p>\r\n\r\n<p>Gedung yang memakan anggaran Rp 1,6 miliar itu diresmikan Pemkot Pekalongan April lalu.</p>\r\n\r\n<p>Dan kini, belum genap 6 bulan ditinggalkan oleh para pedagang.</p>\r\n\r\n<p>Menurut Ana Casbari, satu dari dua pemilik kios yang buka, pedagang pindah ke lapak semula di Jalan WR Supratman, Pekalongan Utara.</p>\r\n\r\n<p>“Pedagang lainya hanya menempati kurang dari dua bulan, setelah itu mereka kembali lagi ke warung milik mereka,” katanya, Kamis (5/9/2019).</p>\r\n\r\n<p>Dilanjutkannya, hal tersebut dikarenakan sepinya pengunjung.</p>\r\n\r\n<p>“Karena sepi jadi pindah, saya saja Agustus lalu libur satu bulan, dan hari ini baru buka,” paparnya.</p>\r\n\r\n<p>Sementara itu, Rozi, pedagang lainya, menerangkan, hanya ia dan Ana yang masih mau bertahan.</p>\r\n\r\n<p>“Bingung kalau kondisinya seperti ini, yang mau bayar listrik dan bertahan ya hanya kami berdua,” kata Rozi.</p>\r\n\r\n<p>Ditambahkannya, ia terpaksa bertahan karena terlanjur pindah ke sentra kuliner.</p>\r\n\r\n<p>“Yang lain punya warung makan, jadi mereka kembali lagi ke tempat semula. Harapan kami di sini ramai pengunjung terus, namun sudah terlanjur percaya di sini ramai, malah kondisinya seperti ini,” tambahnya.</p>\r\n\r\n<p>Artikel ini telah tayang di Tribunjateng.com dengan judul Diresmikan 6 Bulan Lalu, Sentra Kuliner Perikanan Kota Pekalongan Makin Sepi dan Ditinggal Pedagang,</p>\r\n', 'Screenshot_20211220-120449_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `dashboard` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `dashboard`) VALUES
(1, '<p><strong>SB Admin 2</strong> makes extensive use of <strong>Bootstrap 4</strong> utility classes in order to reduce <em>CSS </em>bloat and poor page performance. Custom <em>CSS </em>classes are used to create custom components and custom utility classes. <u>Before working with this theme</u>, you should become familiar with the Bootstrap framework, especially the utility classes.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kios`
--

CREATE TABLE `kios` (
  `id` int(11) NOT NULL,
  `nokios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kios`
--

INSERT INTO `kios` (`id`, `nokios`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(13, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id` int(11) NOT NULL,
  `nik` varchar(256) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `npwp` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `slogan` varchar(150) NOT NULL,
  `namakios` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fotoktp` varchar(256) NOT NULL,
  `fotokk` varchar(256) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nokios` varchar(128) NOT NULL,
  `pendapatan` varchar(256) NOT NULL,
  `tahun` int(11) NOT NULL,
  `keterangan` longtext NOT NULL,
  `fotoketerangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id`, `nik`, `nama`, `telpon`, `npwp`, `email`, `password`, `role_id`, `slogan`, `namakios`, `tgl_lahir`, `alamat`, `fotoktp`, `fotokk`, `foto`, `nokios`, `pendapatan`, `tahun`, `keterangan`, `fotoketerangan`) VALUES
(1, '337503509710002', 'Endang Rokhati', '08773348993', '-', 'endang@gmail.com', '$2y$10$1eDNBpi6uJJQmJy8i/X1GOM8XhQjPHRCrIQf/NhD.cEIYfEyfVth.', 5, 'Serba Seafood', 'Warung Makan Bu Endang', '1971-09-12', 'Jln. Pantaisari 2/19', 'endang.png', '', 'endangf.png', '7', '200000', 1652431569, '<p>Menu andalan yang sangat lezat</p>\r\n\r\n<p>berbagai macam <strong>es dan segaran</strong></p>\r\n\r\n<p>Sedia Menu :</p>\r\n\r\n<p>Sayur Asem, Pecak panggang, tempe penyet, kerang, Srimping, garang asem, rendang daging, telur balado</p>\r\n', 'Koala.jpg'),
(2, '3375034501850005', 'Haryanti', '08222', '-', 'haryanti@gmail.com', '$2y$10$1eDNBpi6uJJQmJy8i/X1GOM8XhQjPHRCrIQf/NhD.cEIYfEyfVth.', 5, 'Mutiara Laut', 'Kios Bu Haryanti', '1985-01-05', 'Jln. Kusuma Bangsa GG. Pahlawan 3', 'haryanti.png', '', 'haryantif.png', '4', '1200000', 2021, '<p>Sedia Menu Lezat</p>\r\n\r\n<p>Makanan:</p>\r\n\r\n<p>kare kepiting, soto tauto daging, aneka penyetan udang & ikan, aneka pepes ikan dan telur asin, tempe penyet, ayam geprek, lele penyet</p>\r\n\r\n<p>Minuman :</p>\r\n\r\n<p>es teh, es jeruk, es selasih, es jeruk nipis</p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n', ''),
(3, '3375031704520003', 'Parluji', '085325320684', '', 'parluji@gmail.com', '$2y$10$xk2TunP.qViswC8KZ2F9penrUaNH8EMNLHFmKZVVZyQXBMVgjJU7u', 5, 'Gule Manyun', 'Gulai Kepala Manyung Pak Rozi', '1952-04-17', 'Jln. Sidomukti 16 RT 007 RW 003 Panjang Baru Pekalongan Utara', 'parluji.png', '', 'parlujif.png', '1', '120000', 1653389674, '<p>Menu andalan bapak Rozi</p>\r\n\r\n<p style=\"text-align:center\">Sedia :</p>\r\n\r\n<p>Gulai Kepala Ikan Manyung, Gulai Kambing, Ikan Kakap</p>\r\n\r\n<p style=\"text-align:center\">Minuman:</p>\r\n\r\n<p>es teh, es jeruk, teh anget</p>\r\n', 'gedung.jpg'),
(4, '3326197006620016', 'Wartiah', '081', '', 'Wartiah@gmail.com', '$2y$10$1eDNBpi6uJJQmJy8i/X1GOM8XhQjPHRCrIQf/NhD.cEIYfEyfVth.', 5, 'Nelayan Indah', 'Rumah Makan Nelayan Indah', '1962-06-30', 'Jln. Bebel Gang Gemi', 'wartiah.png', '', 'wartiahf.png', '10', '200000', 2021, '<p>Warung makan sederhana bu Wartiah yang menyediakan berbagai macam seafood</p>\r\n\r\n<p xss=removed>Sedia:</p>\r\n\r\n<p>ayam goreng, gulai kambing, pindang bumbu rujak, kepala ikan manyung, gulai manyung</p>\r\n\r\n<p xss=removed>Minuman:</p>\r\n\r\n<p>es teh, es jeruk, wedang jahe, es lemon</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nik` varchar(256) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `npwp` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` enum('proses','Pengajuan Ditolak','Pengajuan Diterima') NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `telpon` varchar(128) NOT NULL,
  `tgllahir` date NOT NULL,
  `tempatlahir` varchar(128) NOT NULL,
  `fotoktp` varchar(256) NOT NULL,
  `fotokk` varchar(256) NOT NULL,
  `fotoprofil` varchar(256) NOT NULL,
  `tgldaftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nik`, `nama`, `npwp`, `alamat`, `email`, `password`, `status`, `role_id`, `is_active`, `telpon`, `tgllahir`, `tempatlahir`, `fotoktp`, `fotokk`, `fotoprofil`, `tgldaftar`) VALUES
(8, '123', 'Daniswara', '332', 'pekalongan', 'pendaftar@gmail.com', '$2y$10$pIsGPCTpjmC8wnB6o5OXDeK2Bz3B7X/WXqOYrnIlQ7x.aIxDy5v5.', 'Pengajuan Diterima', 2, 1, '08123', '2021-11-27', 'Pekalongan', 'flower.jpg', 'tree.jpg', 'dog.jpg', 1637988709),
(14, '', 'Daniswara', '', '', 'D@gmail.com', '$2y$10$2Yb1Xud0WxDUAKRpBAgYkeYuyYQRBz2ncBsdkQUdfJHhNzY7.MKWW', 'Pengajuan Ditolak', 2, 0, '', '0000-00-00', '', '', '', 'default.png', 1638931282);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isipesan` varchar(250) NOT NULL,
  `date_sent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `email`, `nama`, `subjek`, `isipesan`, `date_sent`) VALUES
(24, 'Daniswara428@gmail.com', 'Daniswara', 'staff', 'pesan', 1637761064);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `telpon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `email`, `password`, `foto`, `role_id`, `date_created`, `nik`, `alamat`, `tgl_lahir`, `tempat_lahir`, `telpon`) VALUES
(4, 'Zwita', 'boss@gmail.com', '$2y$10$pG96u7M1mGExNqcSdC/SqeoueOLnMaVV7Os2dk60oA7UNh1.PxXF.', 'default2.png', 3, 0, '3325080401060019', 'Gumawang', '2021-11-28', 'Pekalongan', '08121412'),
(9, 'Daniswara', 'admin@gmail.com', '$2y$10$hsOQY83KiO9e9ofZEAkGsufLLlsyrbaGgpED26VtjH2PQFXuEdiyW', 'default1.png', 1, 1638088571, '3325080401060011', 'Jln. Mayjend sutoyo no. 191 gumawang wiradesa', '2000-04-30', 'Gumawang', '081215133190');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 2),
(4, 3, 3),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'superadmin'),
(5, 'pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'user'),
(3, 'superadmin'),
(5, 'pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt'),
(2, 2, 'Dashboard Calon Pemilik', 'user/dashboard', 'fas fa-fw fa-tachometer-alt'),
(3, 2, 'Edit Profil', 'user/dashboard/edit', 'fas fa-fw fa-user-edit'),
(4, 1, 'Pemilik Kios', 'pemilik', 'fas fa-fw fa-house-user'),
(5, 1, 'Kelola Kios', 'kios', 'fas fa-fw fa-store'),
(6, 1, 'Pendaftar', 'pendaftar', 'fas fa-fw fa-user-plus'),
(7, 1, 'Wawancara', 'wawancara', 'fas fa-fw fa-user-friends'),
(8, 3, 'Dashboard', 'superadmin/dashboard', 'fas fa-fw fa-tachometer-alt'),
(9, 3, 'Staff', 'superadmin/staff', 'fas fa-fw fa-users'),
(10, 5, 'Dashboard Pemilik Kios', 'pemilikkios/dashboard', 'fas fa-fw fa-tachometer-alt'),
(11, 5, 'Edit Profil', 'pemilikkios/dashboard/edit', 'fas fa-fw fa-user-edit'),
(13, 1, 'Berita', 'berita', 'fas fa-fw fa-newspaper'),
(14, 1, 'Pesan', 'pesan', 'fas fa-fw fa-envelope'),
(68, 5, 'Laporan Pendapatan', 'pemilikkios/dashboard/laporan', 'fas fa-fw fa-dollar-sign'),
(69, 5, 'Keterangan Home', 'pemilikkios/dashboard/keterangan', 'fas fa-fw fa-clipboard');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(43, 'tes@gmail.com', 'EEA71N6qVJzQ5CWJeLOiOct9+cUFGi1nFP6Rvq7QRas=', 1652600650),
(44, 'tes@gmail.com', 'J9Mwg54oWsjNa7vPvN4CfvcsAJIHcn5e5HI8l/KneZA=', 1652604475);

-- --------------------------------------------------------

--
-- Table structure for table `wawancara`
--

CREATE TABLE `wawancara` (
  `id` int(11) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `npwp` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `telpon` varchar(256) NOT NULL,
  `tgllahir` date NOT NULL,
  `tempatlahir` varchar(256) NOT NULL,
  `fotoktp` varchar(256) NOT NULL,
  `fotokk` varchar(256) NOT NULL,
  `fotoprofil` varchar(256) NOT NULL,
  `tgldaftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kios`
--
ALTER TABLE `kios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kios`
--
ALTER TABLE `kios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `wawancara`
--
ALTER TABLE `wawancara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
