-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 05:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` enum('Masuk','Pulang') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absen`, `tgl`, `waktu`, `keterangan`, `id_user`) VALUES
(98, '2023-03-27', '10:13:48', 'Masuk', 25),
(99, '2023-03-27', '10:13:56', 'Pulang', 25),
(100, '2023-03-28', '10:22:23', 'Masuk', 25),
(101, '2023-03-28', '10:22:36', 'Pulang', 25),
(104, '2023-03-28', '10:42:07', 'Masuk', 22),
(105, '2023-03-28', '10:42:15', 'Pulang', 22),
(106, '2023-03-28', '10:45:21', 'Masuk', 20),
(107, '2023-03-28', '10:45:30', 'Pulang', 20),
(108, '2023-03-28', '10:58:19', 'Masuk', 23),
(109, '2023-03-28', '11:03:41', 'Pulang', 23),
(110, '2023-03-29', '08:58:17', 'Masuk', 25),
(111, '2023-03-29', '09:15:01', 'Masuk', 23),
(112, '2023-03-29', '09:43:46', 'Pulang', 23),
(114, '2023-04-05', '09:23:16', 'Masuk', 25),
(115, '2023-04-05', '09:26:15', 'Pulang', 25),
(117, '2023-06-26', '11:24:17', 'Masuk', 20),
(118, '2023-06-27', '08:22:04', 'Masuk', 20),
(119, '2023-06-27', '08:22:54', 'Masuk', 22);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` smallint(3) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(17, 'Pengelolahan Informasi dan Komunikasi Publik (IKP)'),
(19, 'Penyelenggaraan E-Goverment'),
(24, 'Persandian dan Statistik'),
(25, 'Kesertariatan');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` tinyint(1) NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `keterangan` enum('Masuk','Pulang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `start`, `finish`, `keterangan`) VALUES
(1, '06:00:00', '08:00:00', 'Masuk'),
(2, '10:00:00', '17:00:00', 'Pulang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` smallint(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(20) DEFAULT 'no-foto.png',
  `divisi` smallint(5) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` enum('Admin','Karyawan') NOT NULL DEFAULT 'Karyawan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nik`, `nama`, `telp`, `email`, `foto`, `divisi`, `username`, `password`, `level`) VALUES
(1, '', 'Rio Sanjaya', '085380261170', 'riojaya099@gmail.com', '1679886156.JPG', NULL, 'rio', '$2y$10$2aPX.BHFUjEt0NhJRZH60.O5005eK.Ku.cIs7TN.2ssktRhv9hjf2', 'Admin'),
(20, '', 'Apri Anugrah', '099090900909', 'user2@mail.com', '1687753640.jpg', 25, 'apri', '$2y$10$T7U4LKjw47UdeNAY6Gnnqu/K.xTjBL22p.nIN5oYZPmfI97ixRMKq', 'Karyawan'),
(22, '1971042965666978', 'Zuhri', '081240908812', 'user4@mail.com', '1678847004.JPG', 19, 'zuhri', '$2y$10$2gUFheZaRrnTimsPXSiDA.9xNY2YXcQz5DLu1XkY6MG8S0j6/ePLW', 'Karyawan'),
(23, '19710429656669', 'Sanjaya', '099090900909', 'user1@mail.com', '1680055990.JPG', 19, 'san', '$2y$10$tcnApj3zu5NHEYDxBjPtd.8lFagMs3gRVRHKEVMHbU2IPhSWJCwW.', 'Karyawan'),
(25, '1291020129102', 'adi', '0910011', 'adi@mail.com', '1679886436.JPG', 17, 'adi', '$2y$10$5P288iieuRr5hd4HwlF/uOCMBCpxJVO72KQabOh/V1u0PHkpJyRl2', 'Karyawan'),
(29, '', 'rio', '095380261170', 'riojaya099@gmail.com', 'no-foto.png', NULL, 'rios', '$2y$10$DtEa51e57TOkcNq.pFqDbuyY4Vdx4OR.pmjvOt5ru.JL37FsBrO7O', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
