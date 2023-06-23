-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 11:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `ex`
--

CREATE TABLE `ex` (
  `id_ex` int(254) NOT NULL,
  `nama_obat` varchar(254) NOT NULL,
  `jenis_obat` varchar(254) NOT NULL,
  `jumlah_obat` int(254) NOT NULL,
  `tgl_catat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `id_ex` int(255) NOT NULL,
  `id_obat` int(255) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `jumlah_keluar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `acs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `acs`) VALUES
(1, 'manager', '12345', 1),
(2, 'admin', '12345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(123) NOT NULL,
  `nama_obat` varchar(123) NOT NULL,
  `non_generik` varchar(123) NOT NULL,
  `jenis_obat` varchar(123) NOT NULL,
  `jumlah_barang` int(255) NOT NULL,
  `brand_obat` varchar(123) NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `harga_jual` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `non_generik`, `jenis_obat`, `jumlah_barang`, `brand_obat`, `harga_beli`, `harga_jual`, `tgl_masuk`, `tgl_exp`) VALUES
(15, 'bisolvon', 'generik', 'obatcair', 27, 'sanofi', '43000', '45000', '2022-10-01', '2025-06-12'),
(16, 'betadine son 30ml', 'nongenerik', 'obatetes', 28, 'betafarma', '18000', '20000', '2022-09-25', '2027-03-09'),
(17, 'sanadryl', 'generik', 'obatcair', 21, 'sanbe', '27900', '30000', '2022-08-16', '2025-04-01'),
(18, 'erlamycetin', 'generik', 'obatetes', 24, 'erela', '4600', '6000', '2022-08-01', '2026-11-10'),
(19, 'antasida doen', 'generik', 'tablet', 30, 'mersi', '3200', '5000', '2022-07-20', '2025-10-01'),
(20, 'paramex', 'generik', 'tablet', 41, 'konimex', '4200', '7000', '2022-09-05', '2025-11-01'),
(22, 'add', 'generik', 'tablet', 28, 'sanbe', '5500', '7000', '2023-06-07', '2023-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(123) NOT NULL,
  `nama_pasien` varchar(123) NOT NULL,
  `alamat` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `nomor_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'manager', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ex`
--
ALTER TABLE `ex`
  ADD PRIMARY KEY (`id_ex`);

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id_ex`),
  ADD UNIQUE KEY `obat_id` (`id_obat`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ex`
--
ALTER TABLE `ex`
  MODIFY `id_ex` int(254) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id_ex` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluar`
--
ALTER TABLE `keluar`
  ADD CONSTRAINT `keluar_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
