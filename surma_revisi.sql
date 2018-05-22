-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 02:20 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surma_revisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_surat`
--

CREATE TABLE `kategori_surat` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_surat`
--

INSERT INTO `kategori_surat` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Observasi'),
(2, 'ijin penelitian'),
(3, 'pra penelitian'),
(4, 'ijin kunjungan'),
(5, 'ijin upacara');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `No` varchar(30) NOT NULL,
  `tujuan` varchar(80) NOT NULL,
  `prihal` varchar(80) NOT NULL,
  `tanggal_surat` varchar(80) NOT NULL,
  `tanggal_keluar` varchar(80) NOT NULL,
  `tanggal_jatuh_tempo` varchar(80) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi_surat` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `keterangan`, `No`, `tujuan`, `prihal`, `tanggal_surat`, `tanggal_keluar`, `tanggal_jatuh_tempo`, `id_kategori`, `isi_surat`) VALUES
(1, 0, 'andihoerudin', 'andihoerudin', 'andihoerudin', '2018-04-20', '', '2018-04-25', 2, 'download.jpg'),
(2, 0, 'andihoerudin', 'andihoerudin', 'andihoerudin', '2018-04-20', '', '2018-04-25', 2, 'download1.jpg'),
(3, 0, 'andihoerudin', 'andihoerudin', 'andihoerudin', '2018-04-19', '2018-04-20', '2018-04-20', 1, '114-223-1-SM.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `No` varchar(20) NOT NULL,
  `Asal_surat` varchar(40) NOT NULL,
  `Prihal` varchar(50) NOT NULL,
  `Tanggal_surat` varchar(50) NOT NULL,
  `Tempo_surat` varchar(60) NOT NULL,
  `isi_surat` varchar(70) NOT NULL,
  `keterangan` varchar(79) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `id_kategori`, `No`, `Asal_surat`, `Prihal`, `Tanggal_surat`, `Tempo_surat`, `isi_surat`, `keterangan`) VALUES
(1, 3, '2', 'andi', 'andi', '2018-04-14', '2018-04-19', 'BAB_1_-_Copy1.docx', 'dfdfdfdfdfdfdf'),
(2, 3, '232323', 'andihoerudn', 'andihoerudn', '2018-04-21', '2018-04-28', 'Capture.PNG', 'dsdsdsd'),
(3, 2, 'Berhasil', 'Berhasil', 'Berhasil', '2018-04-28', '2018-04-28', '114-223-1-SM.pdf', 'sdsdsdsds'),
(4, 3, 'Berhasil', 'Berhasil', 'Berhasil', '2018-04-19', '2018-04-06', 'download.jpg', 'dsdsd');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_keluar`
-- (See below for the actual view)
--
CREATE TABLE `v_keluar` (
`nama_kategori` varchar(26)
,`tujuan` varchar(80)
,`prihal` varchar(80)
,`tanggal_surat` varchar(80)
,`tanggal_jatuh_tempo` varchar(80)
,`id_surat_keluar` int(11)
,`isi_surat` varchar(80)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_masuk`
-- (See below for the actual view)
--
CREATE TABLE `v_masuk` (
`nama_kategori` varchar(26)
,`id_surat_masuk` int(11)
,`Asal_surat` varchar(40)
,`Prihal` varchar(50)
,`Tanggal_surat` varchar(50)
,`Tempo_surat` varchar(60)
,`isi_surat` varchar(70)
);

-- --------------------------------------------------------

--
-- Structure for view `v_keluar`
--
DROP TABLE IF EXISTS `v_keluar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_keluar`  AS  select `ks`.`nama_kategori` AS `nama_kategori`,`sk`.`tujuan` AS `tujuan`,`sk`.`prihal` AS `prihal`,`sk`.`tanggal_surat` AS `tanggal_surat`,`sk`.`tanggal_jatuh_tempo` AS `tanggal_jatuh_tempo`,`sk`.`id_surat_keluar` AS `id_surat_keluar`,`sk`.`isi_surat` AS `isi_surat` from (`surat_keluar` `sk` join `kategori_surat` `ks`) where (`sk`.`id_kategori` = `ks`.`id_kategori`) ;

-- --------------------------------------------------------

--
-- Structure for view `v_masuk`
--
DROP TABLE IF EXISTS `v_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_masuk`  AS  select `ks`.`nama_kategori` AS `nama_kategori`,`sm`.`id_surat_masuk` AS `id_surat_masuk`,`sm`.`Asal_surat` AS `Asal_surat`,`sm`.`Prihal` AS `Prihal`,`sm`.`Tanggal_surat` AS `Tanggal_surat`,`sm`.`Tempo_surat` AS `Tempo_surat`,`sm`.`isi_surat` AS `isi_surat` from (`surat_masuk` `sm` join `kategori_surat` `ks`) where (`sm`.`id_kategori` = `ks`.`id_kategori`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_surat`
--
ALTER TABLE `kategori_surat`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_surat`
--
ALTER TABLE `kategori_surat`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
