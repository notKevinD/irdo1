-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2025 at 12:20 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
