-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 11, 2018 at 01:32 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb_sekincau`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `nobayar` int(11) NOT NULL,
  `tglbayar` date DEFAULT NULL,
  `nodaftar` varchar(15) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pemverifikasi` varchar(255) DEFAULT NULL,
  `tglverifikasi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`nobayar`, `tglbayar`, `nodaftar`, `jumlah`, `nama_file`, `keterangan`, `status`, `pemverifikasi`, `tglverifikasi`) VALUES
(1, '2018-09-09', '1', 2500000, 'bukti_bayar_1_20180909064312.png', 'tetst', 'Ter-Verifikasi', 'admin', '2018-09-09 14:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nodaftar` int(11) NOT NULL,
  `idperiode` int(11) DEFAULT NULL,
  `tgldaftar` date DEFAULT NULL,
  `namasiswa` varchar(30) DEFAULT NULL,
  `tempatlahir` varchar(40) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jk` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `notelp` varchar(12) DEFAULT NULL,
  `alamat` text,
  `email` varchar(40) DEFAULT NULL,
  `asalsmp` varchar(30) DEFAULT NULL,
  `alamatsmp` text,
  `nilaiun` double DEFAULT NULL,
  `namaayah` varchar(30) DEFAULT NULL,
  `pendidikanayah` varchar(5) DEFAULT NULL,
  `pekerjaanayah` varchar(50) DEFAULT NULL,
  `penghasilanayah` double DEFAULT NULL,
  `namaibu` varchar(30) DEFAULT NULL,
  `pendidikanibu` varchar(5) DEFAULT NULL,
  `pekerjaanibu` varchar(30) DEFAULT NULL,
  `penghasilanibu` double DEFAULT NULL,
  `pasfoto` text,
  `ijasah` text,
  `skhu` text,
  `skl` text,
  `password` varchar(30) DEFAULT NULL,
  `statusdaftar` enum('0','1','2','3') DEFAULT '0' COMMENT '0=daftar, 1=terverififkasi 2=diterima 3=ditolak',
  `statusbayar` enum('0','1') DEFAULT '0' COMMENT '0=belumbayar 1=udah bayar',
  `nilaiujian` double DEFAULT NULL,
  `pemverifikasi` varchar(255) DEFAULT NULL,
  `tglverifikasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`nodaftar`, `idperiode`, `tgldaftar`, `namasiswa`, `tempatlahir`, `tgllahir`, `jk`, `agama`, `notelp`, `alamat`, `email`, `asalsmp`, `alamatsmp`, `nilaiun`, `namaayah`, `pendidikanayah`, `pekerjaanayah`, `penghasilanayah`, `namaibu`, `pendidikanibu`, `pekerjaanibu`, `penghasilanibu`, `pasfoto`, `ijasah`, `skhu`, `skl`, `password`, `statusdaftar`, `statusbayar`, `nilaiujian`, `pemverifikasi`, `tglverifikasi`) VALUES
(1, 1, '2018-09-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test@agag.js', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', NULL, 'admin', '2018-09-09 14:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `idperiode` int(11) NOT NULL,
  `ta` varchar(15) DEFAULT NULL,
  `ket` text,
  `status` enum('0','1') DEFAULT '0' COMMENT '0=tidak aktif 1=aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`idperiode`, `ta`, `ket`, `status`) VALUES
(1, '2018/2019', 'Tahun ajaran 2018/2019 genap', '1'),
(2, '2018/2019', 'Tahun ajaran 2018/2019 ganjil', '1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `namasiswa` varchar(30) DEFAULT NULL,
  `tempatlahir` varchar(40) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jk` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `notelp` varchar(12) DEFAULT NULL,
  `alamat` text,
  `email` varchar(40) DEFAULT NULL,
  `asalsmp` varchar(30) DEFAULT NULL,
  `alamatsmp` text,
  `nilaiun` double DEFAULT NULL,
  `namaayah` varchar(30) DEFAULT NULL,
  `pendidikanayah` varchar(5) DEFAULT NULL,
  `pekerjaanayah` varchar(50) DEFAULT NULL,
  `penghasilanayah` double DEFAULT NULL,
  `namaibu` varchar(30) DEFAULT NULL,
  `pendidikanibu` varchar(5) DEFAULT NULL,
  `pekerjaanibu` varchar(30) DEFAULT NULL,
  `penghasilanibu` double DEFAULT NULL,
  `pasfoto` text,
  `ijasah` text,
  `skhu` text,
  `skl` text,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `namasiswa`, `tempatlahir`, `tgllahir`, `jk`, `agama`, `notelp`, `alamat`, `email`, `asalsmp`, `alamatsmp`, `nilaiun`, `namaayah`, `pendidikanayah`, `pekerjaanayah`, `penghasilanayah`, `namaibu`, `pendidikanibu`, `pekerjaanibu`, `penghasilanibu`, `pasfoto`, `ijasah`, `skhu`, `skl`, `password`) VALUES
('123456', 'test', 'testtempat', '2018-09-01', 'Laki-laki', 'Islam', '098765', 'jhgf', 'test@agag.js', 'gfd', 'ccc', 80, 'bgvfcd', 'gvfd', 'bvcx', 200000, 'gvfcd', 'bgvfc', 'nbvc', 0, 'pas_photo_20180908135404.jpg', 'ijazah20180908135404.png', 'skhu20180908135404.png', 'skl20180908135404.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'test@agag.js', 'e10adc3949ba59abbe56e057f20f883e', 'siswa'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`nobayar`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nodaftar`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`idperiode`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `nobayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `nodaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `idperiode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
