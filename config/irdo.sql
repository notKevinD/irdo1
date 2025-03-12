-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 09:23 AM
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
  `headline` varchar(50) NOT NULL,
  `konten` text NOT NULL,
  `kontenInggris` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `headlineInggris` varchar(50) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `penulis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `timeStamp`, `headline`, `konten`, `kontenInggris`, `slug`, `headlineInggris`, `foto`, `penulis`) VALUES
(2, '2025-03-11 05:14:40', 'halo', 'dkfaksnlk', 'kldflkasndlk', '1', 'hasdnl', 'robotic.png', 'admin');

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
(14, 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cef309e48720.86238038.png', '2025-03-10 14:11:21'),
(15, 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cef33cd5fc51.50243501.png', '2025-03-10 14:12:12'),
(16, 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'alfredo.22421029@student.ubl.ac.id', '3on3soccer', 'bukti_67cef63833eeb9.00652572.png', '2025-03-10 14:24:56'),
(17, 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cef670b63781.59145970.png', '2025-03-10 14:25:52'),
(18, 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'alfredo.22421029@student.ubl.ac.id', '3on3soccer', 'bukti_67cef880911c64.30378563.png', '2025-03-10 14:34:40'),
(19, 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'muhammadriza@ubl.ac.id', '3on3soccer', 'bukti_67cef91057be28.59267166.png', '2025-03-10 14:37:04'),
(20, 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'muhammadriza@ubl.ac.id', '3on3soccer', 'bukti_67cef963efd030.03103856.png', '2025-03-10 14:38:27'),
(21, 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cef9e839f8c0.23702174.png', '2025-03-10 14:40:40'),
(22, 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cef9f4abefd2.07766247.png', '2025-03-10 14:40:52'),
(23, 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cefa256cb7d0.32407953.png', '2025-03-10 14:41:41'),
(24, 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'sigitmokolo@gmail.com', '3on3soccer', 'bukti_67cefab45c6c54.70598161.png', '2025-03-10 14:44:04'),
(25, 'k', 'k', 'k', 'k', 'k', 'k', '6288291237471', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cefb6add12e9.75778076.png', '2025-03-10 14:47:06'),
(26, 'k', 'k', 'k', 'k', 'k', 'k', '6288291237471', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cefb866ae659.15354563.png', '2025-03-10 14:47:34'),
(27, '.', '.', '.', '.', '.', '.', '092', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cefbfcd96b21.23767471.png', '2025-03-10 14:49:32'),
(28, '.', '.', '.', '.', '.', '.', '092', 'kevindarmawan48@gmail.com', '3on3soccer', 'bukti_67cefc458b6236.55286631.png', '2025-03-10 14:50:45'),
(29, 'a', 'k', 'k', 'k', 'k', 'k', '000', 'kevindarmawan48@gmail.com', 'robotcreative', 'bukti_67cf9d82e2bf33.58640907.png', '2025-03-11 02:18:42'),
(30, 'a', 'n', 'nn', 'd', 'd', 'n', '08829', 'muhammadriza@ubl.ac.id', '3on3soccer', 'bukti_67cfcb60e077e6.63979454.jpeg', '2025-03-11 05:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `unduhan`
--

CREATE TABLE `unduhan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `namaFile` varchar(50) NOT NULL,
  `jenisFile` varchar(15) NOT NULL,
  `judulInggris` varchar(30) NOT NULL,
  `namaFileInggris` varchar(30) NOT NULL
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `unduhan`
--
ALTER TABLE `unduhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
