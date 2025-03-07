-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2025 at 06:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `headline` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `konten` text NOT NULL,
  `foto` varchar(20) NOT NULL,
  `headlineInggris` varchar(50) NOT NULL,
  `kontenInggris` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `penulis`, `timeStamp`, `headline`, `slug`, `konten`, `foto`, `headlineInggris`, `kontenInggris`) VALUES
(4, 'admin', '2025-03-07 04:22:41', 'oke ya gas', '1', 'halo guys nama saya kevin', 'robotic.png', 'okey yes gas', 'hello guys my name kevin');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `namaFile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `namaFile`) VALUES
(1, 'crew'),
(2, 'mc'),
(3, 'fotoBersama'),
(4, 'fotoBersama2'),
(5, 'fotoDosen'),
(6, 'fotoSemuaPeserta'),
(7, 'juara3on3SoccerSD'),
(8, 'juara3on3SoccerSMP'),
(9, 'juara3on3Soccer'),
(10, 'juaraRobotCreativeSd'),
(11, 'juaraRobotCreativeSMA'),
(12, 'lomba3on3Soccer1'),
(13, 'lomba3on3Soccer2'),
(14, 'lombaRobotCreative'),
(15, 'lombaRobotCreative2'),
(16, 'lombaRobotCreative3');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Headline` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `anggota1` varchar(70) NOT NULL,
  `anggota2` varchar(70) NOT NULL,
  `anggota3` varchar(70) NOT NULL,
  `pembimbing` varchar(70) NOT NULL,
  `nomor_hp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `nama_tim`, `asal_sekolah`, `anggota1`, `anggota2`, `anggota3`, `pembimbing`, `nomor_hp`, `email`, `kategori`, `bukti_pembayaran`, `created_at`) VALUES
(1, 'kevin', 'kevin', 'kevin', 'kevin', 'kevin', 'kevin', '123123123123', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67c39ef64e4053.78758721.jpg', '2025-03-01 23:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `unduhan`
--

CREATE TABLE `unduhan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `namaFile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unduhan`
--
ALTER TABLE `unduhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unduhan`
--
ALTER TABLE `unduhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
