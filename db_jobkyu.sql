/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `tbl_data_pelamar` (
  `id_data_pelamar` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_data_pelamar`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `tbl_data_pelamar_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbl_data_pelamar` (`id_data_pelamar`, `id_role`, `nama`, `umur`, `cv`, `pendidikan`, `jenis_kelamin`, `alamat`, `tgl_lahir`, `tempat_lahir`) VALUES
	(1, 1, 'Fushiguro Megumi', '17', 'none', 'SMA', 'L', 'Nganjuk', '2005-05-09', 'Bojong Gede');

CREATE TABLE IF NOT EXISTS `tbl_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `tgl_rilis` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_lowongan`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `tbl_lowongan_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbl_lowongan` (`id_lowongan`, `id_role`, `nama_perusahaan`, `deskripsi`, `tgl_rilis`, `tgl_selesai`, `alamat`, `posisi`) VALUES
	(1, 3, 'PT. Nganjuk Jaya', 'aku tau kamu tau pasti bingun sama saya juga', '2023-02-01', '2023-02-11', 'Bojong Soang', 'Vice President');

CREATE TABLE IF NOT EXISTS `tbl_melamar` (
  `id_melamar` int(11) NOT NULL,
  `id_data_pelamar` int(11) DEFAULT NULL,
  `id_lowongan` int(11) DEFAULT NULL,
  `CV` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_melamar`),
  KEY `id_data_pelamar` (`id_data_pelamar`,`id_lowongan`),
  KEY `id_lowongan` (`id_lowongan`),
  CONSTRAINT `tbl_melamar_ibfk_1` FOREIGN KEY (`id_data_pelamar`) REFERENCES `tbl_data_pelamar` (`id_data_pelamar`),
  CONSTRAINT `tbl_melamar_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `tbl_lowongan` (`id_lowongan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbl_melamar` (`id_melamar`, `id_data_pelamar`, `id_lowongan`, `CV`) VALUES
	(1, 1, 1, 'belum punya');

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbl_role` (`id_role`, `role`) VALUES
	(1, 'User'),
	(2, 'Admin'),
	(3, 'Mitra');

CREATE TABLE IF NOT EXISTS `tbl_tips_karir` (
  `id_tips_karir` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `materi` varchar(255) DEFAULT NULL,
  `tgl_rilis` datetime DEFAULT NULL,
  PRIMARY KEY (`id_tips_karir`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `tbl_tips_karir_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbl_tips_karir` (`id_tips_karir`, `id_role`, `judul`, `materi`, `tgl_rilis`) VALUES
	(1, 2, 'cara menjadi sukses tanpa ngepet', 'kalau ga mau ribet yaudah ngepet aja tapi jangan lupa bagi hasil hehe', '2023-02-04 22:14:55');

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbl_user` (`id_user`, `id_role`, `username`, `email`, `password`, `tgl_lahir`, `nama`, `alamat`, `jenis_kelamin`) VALUES
	(1, 1, 'meguchan', 'meguchan@megu.com', '$2y$10$fh3r8MBgb0k.vcEPxuVc7.rHQx5kkS5hBSIWikc7RPtugt50cfJ52', '2005-02-09', 'Fushiguro Megumi', 'Nganjuk ', 'L'),
	(4, 1, 'thor', 'thor@gmail.com', '$2y$10$9lcze5jqi4jBqJS/opkYaud7sVoy7uM6zZla3IokiPNEZx4lyXHe6', NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
