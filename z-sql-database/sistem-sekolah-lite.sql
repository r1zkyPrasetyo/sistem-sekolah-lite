-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2019 at 06:24 AM
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
-- Database: `sistem-sekolah-lite`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lhr` varchar(50) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `jk` enum('laki','perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `handphone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nm_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `nm_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `telepon_ortu` varchar(20) NOT NULL,
  `handphone_ortu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `nik`, `nama`, `tempat_lhr`, `tanggal_lhr`, `jk`, `agama`, `alamat`, `kode_pos`, `telepon`, `handphone`, `email`, `password`, `nm_ayah`, `pekerjaan_ayah`, `nm_ibu`, `pekerjaan_ibu`, `telepon_ortu`, `handphone_ortu`) VALUES
('190010', '0117497020', '1207263005100020', 'fajar akbar sidik', 'medan', '1996-05-30', 'laki', 'Islam', 'Jalan Medan, gg kenanga, kec medan', '20371', '06112345678', '081298765432', 'fajarakbar@mail.com', '12345678', 'gray situmorang', 'Karyawan Swasta', 'Luci ana Putri', 'Ibu Rumah tangga', '06112345678', '081287654323'),
('190011', '0117497022', '1207234500872010', 'Ririn Man jaddah', 'tembung', '2000-07-02', 'perempuan', 'islam', 'jalan medan indah kenangan aja', '20223', '', '', 'ririnman@mail.com', '12345678', 'sugi handoko', 'wiraswasta', 'nana siti', 'ibu rumah tangga', '0618976546', '081176564534');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
