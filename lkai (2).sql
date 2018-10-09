-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Okt 2018 pada 05.21
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` mediumblob NOT NULL,
  `rayon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `foto`, `rayon`) VALUES
(10, 'haidar zaenani', 'gonduk', 'ab009e3a96ca6d2a3aa70fbc6ba7c6d0', 0x333130383834342e6a7067, 'Semua'),
(11, 'Dela Ariful Haruta', 'dela', '4e4a3b45c22f1be8f65067b617722ad6', 0x4453435f303139352e6a7067, 'Dinoyo'),
(12, 'administartor', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Semua'),
(13, 'bob', 'bob', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Bululawang'),
(14, 'apip', 'apip', '5afc731a4d5274f52c9bf71be129b609', 0x4d616e636865737465725f556e697465645f5265645f446576696c735f57686974655f53686972742831292e6a7067, 'Ngantang'),
(18, 'ida', 'ida', '25f9e794323b453885f5181f1b624d0b', 0x7370616e332e6a7067, 'Malang Kota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
