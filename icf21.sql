-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 10:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icf21`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `pendaftar_id` int(11) DEFAULT NULL,
  `nama` varchar(45) NOT NULL,
  `nrp` varchar(10) DEFAULT NULL,
  `no_hp` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `id_game` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `pendaftar_id`, `nama`, `nrp`, `no_hp`, `email`, `id_game`) VALUES
(1, 2, 'anggota1', '', '0812', 'anggota1@gmail.com', 'pubg1'),
(2, 2, 'anggota2', '', '0812', 'anggota2@gmail.com', 'pubg2'),
(3, 2, 'anggota3', '', '0812', 'anggota3@gmail.com', 'pubg3'),
(4, 6, 'anggota1-3', '', '0812', 'anggota1-3@gmail.com', 'pubg1-3'),
(5, 6, 'anggota2-3', '', '0812', 'anggota2-3@gmail.com', 'pubg2-3'),
(6, 6, 'anggota3-3', '', '0812', 'anggota3-3@gmail.com', 'pubg3-3');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `deskripsi` text,
  `author` varchar(255) DEFAULT NULL,
  `syarat_ketentuan` text,
  `link_wa` varchar(50) DEFAULT NULL,
  `link_zoom` varchar(45) DEFAULT NULL,
  `id_zoom` varchar(55) DEFAULT NULL,
  `pass_zoom` varchar(55) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama`, `tanggal_mulai`, `tanggal_selesai`, `deskripsi`, `author`, `syarat_ketentuan`, `link_wa`, `link_zoom`, `id_zoom`, `pass_zoom`, `jenis_id`) VALUES
(1, 'Mona Lisa', '2021-08-01', '2021-08-01', 'grrgsd', 'Leonardo da Vinci', '', '', '', NULL, NULL, 2),
(2, 'Seminar IoT', '2021-08-27', '2021-08-27', 'lorem lorem', 'Avianto Tiyo', '', '', '', NULL, NULL, 1),
(3, 'PUBG Competition', '2021-08-04', '2021-08-05', 'lomba dor2', '', '', '', NULL, NULL, NULL, 3),
(4, 'Character Design', '2021-08-28', '2021-08-30', 'gambar 3d', '', '', '', '', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'aiuhiauhdi', 'hah?'),
(2, 'AHIAHIUHHU', 'HAHHH??'),
(3, 'he..', 'apa?');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `extension` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `jenis` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`) VALUES
(1, 'Seminar'),
(2, 'Pameran'),
(3, 'Lomba Kelompok'),
(4, 'Lomba Individu');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `user_username` varchar(45) NOT NULL,
  `event_id` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `status` enum('Pending','Diterima','Ditolak') NOT NULL DEFAULT 'Pending',
  `nama_tim` varchar(45) DEFAULT NULL,
  `id_game` varchar(45) DEFAULT NULL,
  `link_drive` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `user_username`, `event_id`, `tanggal_daftar`, `status`, `nama_tim`, `id_game`, `link_drive`) VALUES
(1, 'dummy1', 2, '2021-08-20', 'Pending', NULL, NULL, NULL),
(2, 'dummy1', 3, '2021-08-20', 'Pending', 'tim1', 'pubg', '..'),
(3, 'dummy2', 2, '2021-08-28', 'Pending', NULL, NULL, NULL),
(4, 'dummy2', 4, '2021-08-28', 'Pending', NULL, NULL, 'abcde'),
(5, 'dummy1', 4, '2021-08-28', 'Pending', NULL, NULL, 'aa'),
(6, 'dummy3', 3, '2021-08-28', 'Pending', 'tim 3', 'pubg3', '..-3'),
(7, 'dummy3', 4, '2021-08-28', 'Pending', NULL, NULL, 'dum3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nrp` varchar(10) DEFAULT NULL,
  `salt` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`, `no_hp`, `nrp`, `salt`) VALUES
('dummy1', '910af55fb4adc1217159f79d860698c76a9ca4cf', 'dummy1', 'dummy1@gmail.com', '08123456789', '123', 'flh4r'),
('dummy2', 'd8d30c6b86825ec6db7b4a3c7e1fc4689a19bbe3', 'dummy2', 'dummy2@gmail.com', '08123456789', '123456789', 'flh4r'),
('dummy3', '00c4eea8d467cee28c59e508920b30baf60e0d25', 'dummy3', 'dummy3@gmail.com', '081333', '00000', 'flh4r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rekan_pendaftar1_idx` (`pendaftar_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_event_jenis1_idx` (`jenis_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peserta_has_event_event1_idx` (`event_id`),
  ADD KEY `fk_pendaftar_peserta1_idx` (`user_username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `fk_rekan_pendaftar1` FOREIGN KEY (`pendaftar_id`) REFERENCES `pendaftar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_jenis1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`);

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `fk_pendaftar_peserta1` FOREIGN KEY (`user_username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peserta_has_event_event1` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
