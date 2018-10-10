-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2018 at 06:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_profile_stikes`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_footer`
--

CREATE TABLE `info_footer` (
  `id_info_footer` int(11) NOT NULL,
  `kelas_icon` varchar(50) NOT NULL,
  `judul_info` varchar(100) NOT NULL,
  `link_info` text NOT NULL,
  `gambar_info` text,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_footer`
--

INSERT INTO `info_footer` (`id_info_footer`, `kelas_icon`, `judul_info`, `link_info`, `gambar_info`, `keterangan`) VALUES
(1, '-', 'Telp : (0541) 08xxxx', '-', NULL, 'alamat'),
(3, '-', 'SNMPTN', 'https://snmptn.ac.id', NULL, 'tautan'),
(4, '-', 'facebook', 'https://facebook.com', NULL, 'sosmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_footer`
--
ALTER TABLE `info_footer`
  ADD PRIMARY KEY (`id_info_footer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_footer`
--
ALTER TABLE `info_footer`
  MODIFY `id_info_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
