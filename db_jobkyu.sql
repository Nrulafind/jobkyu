-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 04:45 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jobkyu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_pelamar`
--

CREATE TABLE `tbl_data_pelamar` (
  `id_data_pelamar` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_pelamar`
--

INSERT INTO `tbl_data_pelamar` (`id_data_pelamar`, `id_role`, `nama`, `umur`, `cv`, `pendidikan`, `jenis_kelamin`, `alamat`, `tgl_lahir`, `tempat_lahir`) VALUES
(1, 1, 'Fushiguro Megumi', '17', 'none', 'SMA', 'L', 'Nganjuk', '2005-05-09', 'Bojong Gede');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `tgl_rilis` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`id_lowongan`, `id_user`, `deskripsi`, `tgl_rilis`, `tgl_selesai`, `posisi`) VALUES
(1, 1, 'aku tau kamu tau pasti bingun sama saya juga', '2023-02-01', '2023-02-11', 'Vice President');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_melamar`
--

CREATE TABLE `tbl_melamar` (
  `id_melamar` int(11) NOT NULL,
  `id_data_pelamar` int(11) DEFAULT NULL,
  `id_lowongan` int(11) DEFAULT NULL,
  `CV` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_melamar`
--

INSERT INTO `tbl_melamar` (`id_melamar`, `id_data_pelamar`, `id_lowongan`, `CV`) VALUES
(1, 1, 1, 'belum punya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mitra`
--

CREATE TABLE `tbl_mitra` (
  `id_mitra` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `deskripsi_perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `role`) VALUES
(1, 'User'),
(2, 'Admin'),
(3, 'Mitra');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tips_karir`
--

CREATE TABLE `tbl_tips_karir` (
  `id_tips_karir` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `materi` varchar(255) DEFAULT NULL,
  `tgl_rilis` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tips_karir`
--

INSERT INTO `tbl_tips_karir` (`id_tips_karir`, `id_role`, `judul`, `materi`, `tgl_rilis`) VALUES
(1, 2, 'cara menjadi sukses tanpa ngepet', 'kalau ga mau ribet yaudah ngepet aja tapi jangan lupa bagi hasil hehe', '2023-02-04 22:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_role`, `username`, `password`, `tgl_lahir`, `nama`, `alamat`, `jenis_kelamin`) VALUES
(1, 1, 'meguchan', 'sukunajelek', '2005-02-09', 'Fushiguro Megumi', 'Nganjuk ', 'L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_pelamar`
--
ALTER TABLE `tbl_data_pelamar`
  ADD PRIMARY KEY (`id_data_pelamar`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_melamar`
--
ALTER TABLE `tbl_melamar`
  ADD PRIMARY KEY (`id_melamar`),
  ADD KEY `id_data_pelamar` (`id_data_pelamar`,`id_lowongan`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Indexes for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  ADD PRIMARY KEY (`id_mitra`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_tips_karir`
--
ALTER TABLE `tbl_tips_karir`
  ADD PRIMARY KEY (`id_tips_karir`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_pelamar`
--
ALTER TABLE `tbl_data_pelamar`
  MODIFY `id_data_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_melamar`
--
ALTER TABLE `tbl_melamar`
  MODIFY `id_melamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tips_karir`
--
ALTER TABLE `tbl_tips_karir`
  MODIFY `id_tips_karir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_data_pelamar`
--
ALTER TABLE `tbl_data_pelamar`
  ADD CONSTRAINT `tbl_data_pelamar_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`);

--
-- Constraints for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD CONSTRAINT `tbl_lowongan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_melamar`
--
ALTER TABLE `tbl_melamar`
  ADD CONSTRAINT `tbl_melamar_ibfk_1` FOREIGN KEY (`id_data_pelamar`) REFERENCES `tbl_data_pelamar` (`id_data_pelamar`),
  ADD CONSTRAINT `tbl_melamar_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `tbl_lowongan` (`id_lowongan`);

--
-- Constraints for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  ADD CONSTRAINT `tbl_mitra_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `tbl_lowongan` (`id_lowongan`);

--
-- Constraints for table `tbl_tips_karir`
--
ALTER TABLE `tbl_tips_karir`
  ADD CONSTRAINT `tbl_tips_karir_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
