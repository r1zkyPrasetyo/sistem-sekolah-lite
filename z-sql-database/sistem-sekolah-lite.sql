-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2019 at 11:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tempat_lhr` varchar(50) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_menikah` enum('sudah','belum') NOT NULL,
  `alamat` text NOT NULL,
  `handphone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `jenis` enum('kelas','mapel') NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `modified_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nik`, `nama`, `jk`, `tempat_lhr`, `tanggal_lhr`, `agama`, `status_menikah`, `alamat`, `handphone`, `email`, `password`, `aktif`, `jenis`, `mapel`, `keterangan`, `modified_at`, `created_at`) VALUES
(1, '2018080712', '1207263005960011', 'fajar setiawan siagian', 'L', 'medan', '1996-05-30', 'islam', 'belum', 'jalan makmur gg dahlia 36', '081264808425', 'fajar7xx@gmail.com', '12345', 'Y', 'kelas', '', 'guru tetap', '2019-08-07 00:00:00', '2019-08-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tempat_lhr` varchar(100) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_menikah` enum('sudah','belum') NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(16) NOT NULL,
  `handphone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nik`, `nama`, `jk`, `tempat_lhr`, `tanggal_lhr`, `agama`, `status_menikah`, `alamat`, `telpon`, `handphone`, `email`, `password`, `keterangan`, `aktif`, `level`, `created_at`, `modified_at`) VALUES
(1, '201808071233', '1207262506890011', 'wiwik sari', 'P', 'medan', '1989-06-24', 'islam', 'sudah', 'jalan mawar', '', '081123452342', 'wiwiksari@gmail.com', '12345', 'sudah oke', 'Y', 'user', '2019-08-07 00:00:00', '2019-08-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(3) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `akreditasi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `telp`, `email`, `web`, `url`, `logo`, `akreditasi`) VALUES
(1, 'SD HIKMATUL FADHILLAH', 'jln denai no. 176', '061739169', 'ypi.hikmatulfadhillah@gmail.com', 'http://localhost/sistem-sekolah-lite', 'http://localhost/sistem-sekolah-lite', '/assets/img/university.png', 'A');

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
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
