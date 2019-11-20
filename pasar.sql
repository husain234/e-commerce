-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 06:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga_komuditi`
--

CREATE TABLE `harga_komuditi` (
  `id_harga` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_lama` int(11) NOT NULL,
  `harga_baru` int(11) NOT NULL,
  `id_komuditi` varchar(3) NOT NULL,
  `id_pasar` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  `ketersediaan` int(11) NOT NULL,
  `kebutuhan` int(11) NOT NULL,
  `id_komoditi` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` varchar(3) NOT NULL,
  `nama_kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
('01', 'blok baru');

-- --------------------------------------------------------

--
-- Table structure for table `komuditi`
--

CREATE TABLE `komuditi` (
  `id_komuditi` varchar(3) NOT NULL,
  `nama_komuditi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` varchar(2) NOT NULL,
  `nama_pasar` varchar(30) NOT NULL,
  `id_kecamatan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id_pasar`, `nama_pasar`, `id_kecamatan`) VALUES
('01', 'pasar baru', '01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(2) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL,
  `id_pasar` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `id_pasar`) VALUES
('01', 'bubut', 'pasar01', 'pasar01', 'pasar', '01'),
('02', 'budi', 'admin01', 'admin01', 'admin', ''),
('03', 'dibu', 'pangan01', 'pangan01', 'pangan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_komuditi`
--
ALTER TABLE `harga_komuditi`
  ADD PRIMARY KEY (`id_harga`),
  ADD KEY `id_komuditi` (`id_komuditi`,`id_pasar`),
  ADD KEY `id_pasar` (`id_pasar`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `id_harga` (`id_komoditi`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `komuditi`
--
ALTER TABLE `komuditi`
  ADD PRIMARY KEY (`id_komuditi`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_pasar` (`id_pasar`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `harga_komuditi`
--
ALTER TABLE `harga_komuditi`
  ADD CONSTRAINT `harga_komuditi_ibfk_1` FOREIGN KEY (`id_pasar`) REFERENCES `pasar` (`id_pasar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `harga_komuditi_ibfk_2` FOREIGN KEY (`id_komuditi`) REFERENCES `komuditi` (`id_komuditi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`id_komoditi`) REFERENCES `komuditi` (`id_komuditi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasar`
--
ALTER TABLE `pasar`
  ADD CONSTRAINT `pasar_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
