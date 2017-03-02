-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2017 at 04:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_JenisService`
--

CREATE TABLE `tb_JenisService` (
  `IDJenisService` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NMJenisService` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NmKaryawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlmtKaryawan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelpKaryawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nik`, `NmKaryawan`, `AlmtKaryawan`, `TelpKaryawan`) VALUES
('DK1', 'Muhammad Arsalan Diponegoro', 'Taman Wisama Asri 1', '089680837605');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `NoPlat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDType` int(11) NOT NULL,
  `KodeMerk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun` year(4) NOT NULL,
  `TarifPerJam` int(11) NOT NULL,
  `StatusRental` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`NoPlat`, `IDType`, `KodeMerk`, `Tahun`, `TarifPerJam`, `StatusRental`) VALUES
('110', 2, '', 2012, 9000, 'N'),
('B0010', 1, 'MK1', 2019, 11000, 'Y'),
('B66613', 2, 'MK3', 1999, 666, 'Y'),
('B757PEY', 1, 'MK10', 2004, 10000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `nik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`nik`, `username`, `password`, `TypeUser`) VALUES
('DK1', 'arsalan', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE `tb_merk` (
  `KodeMerk` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NmMerk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`KodeMerk`, `NmMerk`) VALUES
('MK1', 'MERCEDES'),
('MK10', 'JEEP'),
('MK2', 'BMW'),
('MK3', 'TOYOTA'),
('MK4', 'SUBARU'),
('MK5', 'SUZUKI'),
('MK6', 'DAIHATSU'),
('MK7', 'HONDA'),
('MK8', 'HYUNDAI'),
('MK9', 'AUDI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `NoKtp` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamaPel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlamatPel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelpPel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`NoKtp`, `NamaPel`, `AlamatPel`, `TelpPel`) VALUES
('01929129', 'Ibnu Boker', 'Bekasi Timur', '0912018'),
('120699', 'Muhammad Arsalan Diponegoro', 'Taman Wisma Asri 1', '089680837605');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilik`
--

CREATE TABLE `tb_pemilik` (
  `KodePemilik` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoPlat` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NmPemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlmtPemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelpPemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pemilik`
--

INSERT INTO `tb_pemilik` (`KodePemilik`, `NoPlat`, `NmPemilik`, `AlmtPemilik`, `TelpPemilik`) VALUES
('PM1', 'B0010', 'Arian Pradana', 'Villa Indah Permai', '0219219109'),
('PM2', 'B757PEY', 'Muhammad Arsalan', 'Ta', '09781'),
('PM3', 'B66613', 'xoepomo', 'Taman aja dell', '0666');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `KodeService` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TglService` date NOT NULL,
  `BiayaService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_setoran`
--

CREATE TABLE `tb_setoran` (
  `NoSetoran` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TglSetoran` date NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sopir`
--

CREATE TABLE `tb_sopir` (
  `IDSopir` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NmSopir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlmtSopir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelpSopir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoSim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TarifPerJam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_sopir`
--

INSERT INTO `tb_sopir` (`IDSopir`, `NmSopir`, `AlmtSopir`, `TelpSopir`, `NoSim`, `TarifPerJam`) VALUES
('SPR1', 'ag windy', 'belakang attaqwa', '098098990', '9090009', 1000),
('SPR2', 'fauzan falah', 'ujung harapan', '089618173609', '09876568', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_sewa`
--

CREATE TABLE `tb_transaksi_sewa` (
  `NoTransaksi` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoKtp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoPlat` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDSopir` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TglPesan` date NOT NULL,
  `TglPinjam` date NOT NULL,
  `JamPinjam` time NOT NULL,
  `TglKembaliRencana` date NOT NULL,
  `JamKembaliRencana` time NOT NULL,
  `TglKembaliRealisasi` date NOT NULL,
  `JamKembaliReal` time NOT NULL,
  `Denda` int(11) NOT NULL,
  `KiloMeterPinjam` int(11) NOT NULL,
  `KiloMeterKembali` int(11) NOT NULL,
  `BBMPinjam` int(11) NOT NULL,
  `BBMKembali` int(11) NOT NULL,
  `KondisiMobilPinjam` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `KondisiMobilKembali` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kerusakan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BiayaKerusakan` int(11) NOT NULL,
  `BiayaBBM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_transaksi_sewa`
--

INSERT INTO `tb_transaksi_sewa` (`NoTransaksi`, `NoKtp`, `NoPlat`, `nik`, `IDSopir`, `TglPesan`, `TglPinjam`, `JamPinjam`, `TglKembaliRencana`, `JamKembaliRencana`, `TglKembaliRealisasi`, `JamKembaliReal`, `Denda`, `KiloMeterPinjam`, `KiloMeterKembali`, `BBMPinjam`, `BBMKembali`, `KondisiMobilPinjam`, `KondisiMobilKembali`, `Kerusakan`, `BiayaKerusakan`, `BiayaBBM`) VALUES
('RENT1', '120699', 'B0010', 'DK1', 'SPR1', '2017-02-07', '1999-01-01', '12:12:00', '2015-01-01', '00:01:00', '0000-00-00', '00:00:00', 0, 3000, 0, 3, 0, 'BAIK', '', '', 0, 0),
('RENT2', '01929129', 'B66613', 'DK1', 'SPR2', '2017-02-08', '2017-01-01', '12:02:00', '2017-07-01', '12:10:00', '0000-00-00', '00:00:00', 0, 12, 0, 9, 0, 'BAIK', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `IDType` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NmType` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`IDType`, `NmType`) VALUES
('1', 'SEDAN'),
('2', 'VAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_JenisService`
--
ALTER TABLE `tb_JenisService`
  ADD PRIMARY KEY (`IDJenisService`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`NoPlat`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_merk`
--
ALTER TABLE `tb_merk`
  ADD PRIMARY KEY (`KodeMerk`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`NoKtp`);

--
-- Indexes for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  ADD PRIMARY KEY (`KodePemilik`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`KodeService`);

--
-- Indexes for table `tb_setoran`
--
ALTER TABLE `tb_setoran`
  ADD PRIMARY KEY (`NoSetoran`);

--
-- Indexes for table `tb_sopir`
--
ALTER TABLE `tb_sopir`
  ADD PRIMARY KEY (`IDSopir`);

--
-- Indexes for table `tb_transaksi_sewa`
--
ALTER TABLE `tb_transaksi_sewa`
  ADD PRIMARY KEY (`NoTransaksi`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`IDType`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
