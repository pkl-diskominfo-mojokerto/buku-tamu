-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2019 pada 11.23
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(13) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `pass_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `pass_admin`) VALUES
(1, 'Admin', 'admin');

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
('', 41, 'budi', 'SDQ', 'dwq', 'sdf', 'upload/tamu/37b1ff7d25e1025.jpg', '2020-01-12 01:24:59.526806'),
('', 42, 'sad', 'asdf', 'afw', 'efw', 'upload/tamu/f62afcb7752b032.jpg', '2019-07-12 01:31:14.691672'),
('', 63, 'dad', 'ethrth', 'sfgtg', 'srgerg', 'upload/tamu/a32709dd212a09f.jpg', '2019-08-16 03:19:30.970104'),
('', 64, 'dono', 'ttt', 'scdd', 'hhh', 'upload/tamu/4a42cf00cd66929.jpg', '2019-09-17 02:34:29.979296'),
('', 65, 'xssx', 'XSX', 'xasx', 'sxasx', 'upload/tamu/436990050dd8872.jpg', '2019-10-18 03:50:30.401826'),
('', 66, 'xasxa', 'xsax', 'sxasx', 'xasxa', 'upload/tamu/7f4a625d8b0aefe.jpg', '2019-11-18 03:50:39.083415'),
('', 67, 'xasx', 'xasx', 'xasx', 'xasx', 'upload/tamu/582cd6e652b1c9c.jpg', '2019-12-18 03:50:50.815153'),
('', 68, 'xasxsa', 'xasx', 'xasx', 'xasx', 'upload/tamu/530cfc601500bd2.jpg', '2018-01-18 03:51:06.483691'),
('', 69, 'cdc', 'cdsc', 'dcsdc', 'csdc', 'upload/tamu/e969683abe95926.jpg', '2019-02-18 03:51:13.813692'),
('', 71, 'sSd', 'dsd', 'sdsd', 'dasd', 'upload/tamu/3ed1b84c729b2fd.jpg', '2019-03-18 03:59:25.837749'),
('', 72, 'sdsad', 'adsad', 'dasd', 'sdasd', 'upload/tamu/c7fa662bdf3bbd4.jpg', '2019-04-18 03:59:33.028192'),
('', 73, 'dsdsad', 'asdasd', 'asdasd', 'asdasd', 'upload/tamu/d15afcafa3da77a.jpg', '2019-05-18 03:59:41.325109'),
('', 74, 'sdDSd', 'sdasd', 'asdsd', 'sadsd', 'upload/tamu/6d6ea009deb1354.jpg', '2019-07-18 03:59:48.113491'),
('', 75, 'xasdasd', 'adsad', 'asdasd', 'sdasd', 'upload/tamu/80b3807e8e8288f.jpg', '2020-01-18 03:59:54.329370'),
('', 81, 'sdasdadadadqw', 'jxskajxksjxklsxklsax', 'jkasxjkasxnascjan cjkndcndcj jahkjd jkhakjd kjbakjdb kjahdkj kjajkd ', 'gasgh agdh hagdgh jhavsdhg hagdj jhadhj jhasdhj habsjhd jhabdjh jhabdhj hkabd khabdh akhbdhj ahjbd', 'upload/tamu/6e46beee7b4d1b4.jpg', '2019-07-19 03:04:28.640901'),
('', 82, 'Ramadhani', 'dasd', 'bapeda', 'kjnksdkskdn', 'upload/tamu/3f8615c172efb6a.jpg', '2019-07-19 07:30:40.527268'),
('', 83, 'sadsad', 'sdasd', 'dasdas', 'dasd', 'upload/tamu/e23a9562281cadf.jpg', '2019-07-21 11:31:35.029868'),
('', 84, 'Supriadi', 'Staff Bidang Dokumentasi', 'Dinas Pengairan Kab. Nganjuk', 'Peninjauan lokasi strategis untuk pengembangan lebih lanjut', 'upload/tamu/24ce07b796a99c8.jpg', '2019-07-22 01:14:57.494197'),
('', 85, 'sigur', 'Kepala Bidang', 'Dinas Kesehatan', 'Meninjau kesehatan pegawai', 'upload/tamu/eac2851fbd45706.jpg', '2019-07-22 01:16:35.015661'),
('', 86, 'askldjlksad', 'akljlkasd', 'knkjndaed', 'kHcjFkjde', 'upload/tamu/2e9e27457d45540.jpg', '2019-07-22 01:22:59.284158'),
('', 87, 'dhani', 'dsdsd', 'dWD', 'sdfsfsdfsdf', 'upload/tamu/c0c6ffb23ab5053.jpg', '2019-07-23 02:47:45.193459'),
('', 88, 'dadad', 'dasdasd', 'asdasdad', 'asdasda', 'upload/tamu/cf7c1bc1c9897c0.jpg', '2019-07-23 06:29:24.236248'),
('', 89, 'wdERQe', 'sdeqr', 'WERER', 'dgrger', 'upload/tamu/e798795f8a7d3d7.jpg', '2019-07-25 02:51:00.256433'),
('', 90, 'Ramadhani Aditya', 'manager', 'diskominfo', 'Magang', 'upload/tamu/d77caeea1fb94a7.jpg', '2019-07-25 03:11:10.744862'),
('', 91, 'a', 'a', 'a', 'a', 'upload/tamu/add0115e34373e0.jpg', '2019-07-25 03:46:01.481966'),
('', 92, 'Gamal', 'awasas', 'asasas', 'sasassa', 'upload/tamu/92a24ae7dc4b3ed.jpg', '2019-07-25 04:00:10.614166'),
('', 93, 'zdfdf', 'sgrt', 'zdfsrg', 'dgety', 'upload/tamu/8a18bda38206036.jpg', '2019-07-25 04:14:36.091515'),
('', 94, 'ahjh', 'ajh', 'hgsjh', 'hsgj', 'upload/tamu/41513f2a595dfa0.jpg', '2019-07-25 04:17:37.210246'),
('', 95, 'hbhdv', 'hbfhd', 'hnbfd', 'jxngf', 'upload/tamu/7effa5d18e1df8a.jpg', '2019-07-25 04:21:09.972187'),
('', 96, 'ajdh', 'ajhdk', 'jhsjd', 'jhakjsd', 'upload/tamu/d0923da33e92944.jpg', '2019-07-25 04:59:14.303808'),
('', 97, 'ajdh', 'ajhdk', 'jhsjd', 'jhakjsd', 'upload/tamu/fa65471be227bd7.jpg', '2019-07-25 04:59:14.475922'),
('', 98, 'jahj', 'sjh', 'sjhjd', 'sjhjd', 'upload/tamu/6da3f13e6e3e4c3.jpg', '2019-07-25 05:04:17.899206'),
('', 99, 'klasdlkwa', 'NSDkjas,', 'jsndkjas', 'sjkdhkja', 'upload/tamu/802850ea69cb524.jpg', '2019-07-25 06:45:47.670306'),
('', 100, 'hajk', 'aljdk', 'kadj', 'sjd', 'upload/tamu/a3e3901662ed9ad.jpg', '2019-07-25 06:56:19.726266'),
('', 101, 'ajefhiuea', 'jsdnja', 'zjdcnjdc', 'jncjdc', 'upload/tamu/d878004ca338c4f.jpg', '2019-07-25 07:05:08.371103'),
('', 102, 'jka', 'sjkh', 'jsh', 'sj', 'upload/tamu/b36d6f325746070.jpg', '2019-07-25 07:16:36.453415'),
('', 103, 'akjdk', 'kajlkd', 'lkjakd', 'jalksdj', 'upload/tamu/1e6a7f609f63d37.jpg', '2019-07-25 07:42:59.943121'),
('', 104, 'ajksnxjkasd', 'jjadbjeb', 'jzbcjhdbc', 'jzbdjhf', 'upload/tamu/80a914dd74f7266.jpg', '2019-07-25 07:51:22.312596'),
('', 105, 'jqedje', 'dbcdcn', 'jbjne', 'jadnbjkede', 'upload/tamu/52d99c17952a8ab.jpg', '2019-07-25 08:16:24.419412'),
('', 106, '[removed]alert&#40;\"HAHAHHA\"&#41;;[removed]', 'jdajk', 'ajhdkj', 'ajdh', 'upload/tamu/ec0dd6307acc413.jpg', '2019-07-25 08:36:38.172059'),
('', 107, 'Ramadhani Aditya', 'manager', 'PT makmur', 'survey', 'upload/tamu/5d4cfe279607726.jpg', '2019-07-29 02:46:40.376268'),
('', 108, 'dhani', 'staff', 'PT makmur', 'hbxjhabsxhjbsahx', 'upload/tamu/c0ad216230a801f.jpg', '2019-07-30 02:45:46.603962'),
('', 109, 'aeraer', 'aefa', 'segsa', 'sfgsrg', 'upload/tamu/8a6091caace2bcf.jpg', '2019-08-05 10:18:13.457865');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
