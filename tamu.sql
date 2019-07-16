-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jul 2019 pada 05.04
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `filename` varchar(255) NOT NULL,
  `id_tamu` int(50) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `jabatan_tamu` varchar(100) NOT NULL,
  `instansi_tamu` varchar(100) NOT NULL,
  `tujuan_tamu` varchar(100) NOT NULL,
  `gambar_tamu` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `tanggal` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`filename`, `id_tamu`, `nama_tamu`, `jabatan_tamu`, `instansi_tamu`, `tujuan_tamu`, `gambar_tamu`, `tanggal`) VALUES
('', 36, 'BCASC', 'HC', 'shjcbjs', 'jbcs', 'upload/tamu/b433a475a6c2109.jpg', '2019-07-11 06:51:46.091843'),
('', 37, 'dhani', 'staff', 'PT makmur', 'observasi', 'upload/tamu/5062433a677c4c0.jpg', '2019-07-11 11:43:53.641020'),
('', 38, 'sxs', 'SXS', 'SDd', 'dwefe', 'upload/tamu/020f41cd356bb0e.jpg', '2019-07-11 14:19:42.046103'),
('', 39, 'sdw', 'adew', 'dwq', 'sdq', 'upload/tamu/f8a4cfe0bff5ad4.jpg', '2019-07-11 14:37:38.021088'),
('', 40, 'dhani', 'manager', 'PT makmur', 'kjsxnkj', 'upload/tamu/803b6dcc4b29ef7.jpg', '2019-07-12 01:22:47.457898'),
('', 41, 'budi', 'SDQ', 'dwq', 'sdf', 'upload/tamu/37b1ff7d25e1025.jpg', '2019-07-12 01:24:59.526806'),
('', 42, 'sad', 'asdf', 'afw', 'efw', 'upload/tamu/f62afcb7752b032.jpg', '2019-07-12 01:31:14.691672'),
('', 43, 'adfd', 'afw', 'rge', 'dfgrw', 'upload/tamu/ddee4966d0e5d9b.jpg', '2019-07-12 01:32:51.875974'),
('', 45, 'Sws', 'sxsa', 'sDSADaf', 'qerewr', 'upload/tamu/6a61e30e1374718.jpg', '2019-07-12 03:10:11.083181'),
('', 46, 'dhani', ' SDS', 'SDAWS', 'AWDQEFD', 'upload/tamu/88469c24a76b7d8.jpg', '2019-07-12 03:10:27.292239'),
('', 47, 'DAWS', 'SDWA', 'WDQE', 'ADWQE', 'upload/tamu/1ed76f100e34352.jpg', '2019-07-12 03:10:51.811817'),
('', 48, 'vbvbbvbvb', 'sdws', 'WD', 'EWF', 'upload/tamu/eb55983e4884e8f.jpg', '2019-07-12 03:14:36.803557'),
('', 49, 'wddadasdasdadad', 'XSX', 'ADAWD', 'sawd', 'upload/tamu/a459135df6877ab.jpg', '2019-07-12 03:17:35.732127'),
('', 50, 'cadcdc', 'dfsdf', 'asdad', 'membuang data,main', 'upload/tamu/5de943dddc7140c.jpg', '2019-07-12 03:20:26.926084'),
('', 51, 'Ramadhani Aditya', 'Staff IT ', 'Diskominfo Kabupaten Mojokerto', 'jbxjasbhsxbhusabxhasbxbashxbsh', 'upload/tamu/cec2564703dc4bb.jpg', '2019-07-12 03:23:05.027962'),
('', 52, 'qedqe', 'ad', 'adqe', 'asdwad', 'upload/tamu/dffb94c2a123dc0.jpg', '2019-07-12 06:32:57.380156'),
('', 53, 'Xzx', 'cdaed', 'afrew', 'erew', 'upload/tamu/4a0acb767fa0166.jpg', '2019-07-12 06:40:21.309125'),
('', 54, '', 'adad', 'aefewf', 'adwef', 'upload/tamu/fd2c1c904e13d8a.jpg', '2019-07-12 06:42:10.348917'),
('', 55, 'ckjnsdkc', 'jncdsjkc', 'jdscndsjvc', 'zjc nsd', 'default.jpg', '2019-07-12 07:23:38.046632'),
('', 56, 'zcdc', 'gdrfg', 'sgerg', 'zfsf', 'default.jpg', '2019-07-12 07:23:54.695675'),
('', 57, 'sdasd', 'adaef', 'da', 'w', 'upload/tamu/76626d28c06e1f0.jpg', '2019-07-14 08:50:38.408524'),
('', 58, 'dhani', 'uihadpd', 'cbhc', 'dbz kbdzn', 'upload/tamu/bffe1407061554b.jpg', '2019-07-15 07:36:23.896916'),
('', 59, 'huuu', 'kjxksx', 'jknckjdc', 'jknckjdc', 'upload/tamu/ea55c169332852c.jpg', '2019-07-15 07:48:29.502505'),
('', 60, 'prasetyo', 'manager', 'PT makmur', 'survey', 'upload/tamu/e71deba6f5c9ee6.jpg', '2019-07-15 13:54:00.507942'),
('', 61, 'zcdead', 'sadae', 'sdae', 'afsef', 'upload/tamu/83631efcb5fe368.jpg', '2019-07-16 01:44:25.294953'),
('', 62, 'gugun', 'manager', 'PT makmur', 'survey', 'upload/tamu/577d86ff77d471d.jpg', '2019-07-16 02:16:41.563467');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
