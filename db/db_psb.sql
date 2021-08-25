-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 07:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `jenis_pendaftaran` varchar(50) DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `jalur_pendaftaran` varchar(50) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `id_thnajaran` int(11) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `thn_lahir_ayah` varchar(50) DEFAULT NULL,
  `thn_lahir_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `pendidikan_ayah` varchar(50) DEFAULT NULL,
  `pendidikan_ibu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id_peserta`, `nama`, `jenis_kelamin`, `nik`, `no_kk`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `no_hp`, `foto`, `jenis_pendaftaran`, `asal_sekolah`, `jalur_pendaftaran`, `status_pendaftaran`, `icon`, `color`, `id_thnajaran`, `nama_ayah`, `nama_ibu`, `thn_lahir_ayah`, `thn_lahir_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `pendidikan_ayah`, `pendidikan_ibu`) VALUES
(35, 'karti', 'Perempuan', '324545678780002', '32245445676001', 'bitung', '1999-08-09', 'Islam', 'kp.pabengharan Rt 02 Rw 07 Des. Citepus kab. Rangkas Tangerang 334344', '085565666678', 'c3.jpg', 'Siswa Baru', 'SD 1 Bitung', 'Badan Misi', 'Diterima', 'done', 'text-success', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Anggi', 'Laki-Laki', '3202250330960001', '320224355567689001', 'Bogor', '1996-07-07', 'Islam', 'jl.caringin Km 12. Des.caringin Bogor Jawa Barat', '08777545666567', 'c5.jpg', 'Pindahan', 'SLTP 1 marga', 'Badan Umum', 'Ditolak', 'close', 'text-danger', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'rudi', 'Laki-Laki', '32022510138670001', '3202251389567001201', 'sukabumi', '1992-08-03', 'Islam', 'kp.cibinong Rt 11 Rw 07 Des.cinagen kec.cinagen Kab.sukabumi Jawa Barat 34443', '0855545677878', 'cat-post-2.jpg', 'Siswa Baru', 'SLTA 1 marga', 'Biasiswa', 'Ditolak', 'close', 'text-danger', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'rudi', 'Laki-Laki', '2345', '2454', 'sukabumi', '2021-08-11', 'Islam', 'fbadfnb', '34636', 'cat-post-2.jpg', 'Siswa Baru', 'SMA 7 Bogor', 'Afirmasi', 'Menunggu...!', 'info', 'text-warning', NULL, 'kodir', 'omah', '1980', '1990', ' Polri', ' Buruh', ' S1', ' D3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahunajaran`
--

CREATE TABLE `tbl_tahunajaran` (
  `id_thnajaran` int(255) NOT NULL,
  `tahunAjaran` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tahunajaran`
--

INSERT INTO `tbl_tahunajaran` (`id_thnajaran`, `tahunAjaran`, `status`) VALUES
(1, '2020', ' Off');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`) VALUES
(1, 'admin@admin.com', 'admin', 'admin'),
(3, 'almuridiya@gmail.com', 'admin', 'almuridiah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tbl_tahunajaran`
--
ALTER TABLE `tbl_tahunajaran`
  ADD PRIMARY KEY (`id_thnajaran`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
