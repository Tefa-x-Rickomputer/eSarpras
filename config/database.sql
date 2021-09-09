-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 04:43 AM
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
-- Database: `inventorymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbarang`
--

CREATE TABLE `tbarang` (
  `idBarang` int(11) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `merkBarang` varchar(30) DEFAULT NULL,
  `jenisBarang` varchar(30) DEFAULT NULL,
  `nomorRegister` varchar(30) DEFAULT NULL,
  `hargaSatuan` int(20) DEFAULT NULL,
  `tahunBarang` int(4) DEFAULT NULL,
  `sumberDana` enum('BOS','BOSDA') DEFAULT NULL,
  `kondisiBarang` enum('Baik','Rusak') NOT NULL,
  `linkRuangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbuku`
--

CREATE TABLE `tbuku` (
  `idBuku` int(11) NOT NULL,
  `judulBuku` varchar(50) NOT NULL,
  `nomorBuku` varchar(30) DEFAULT NULL,
  `pengarang` varchar(30) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `tahunTerbit` int(4) DEFAULT NULL,
  `jumlahHalaman` int(4) DEFAULT NULL,
  `nomorRegister` varchar(30) DEFAULT NULL,
  `tahunPembelian` int(4) DEFAULT NULL,
  `hargaBuku` int(7) DEFAULT NULL,
  `sumberDana` enum('BOS','BOSDA') NOT NULL,
  `kondisiBuku` enum('Baik','Rusak') NOT NULL,
  `linkRuangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tinformasiuser`
--

CREATE TABLE `tinformasiuser` (
  `idInfoUser` int(11) NOT NULL,
  `linkUser` int(11) NOT NULL,
  `nik` int(16) DEFAULT NULL,
  `nama` char(30) NOT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `truangan`
--

CREATE TABLE `truangan` (
  `idRuangan` int(11) NOT NULL,
  `namaRuangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `idUser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` enum('Super','Admin','Guest') NOT NULL,
  `linkInfoUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbarang`
--
ALTER TABLE `tbarang`
  ADD PRIMARY KEY (`idBarang`),
  ADD KEY `linkRuangan` (`linkRuangan`);

--
-- Indexes for table `tbuku`
--
ALTER TABLE `tbuku`
  ADD PRIMARY KEY (`idBuku`),
  ADD KEY `linkRuangan` (`linkRuangan`);

--
-- Indexes for table `tinformasiuser`
--
ALTER TABLE `tinformasiuser`
  ADD PRIMARY KEY (`idInfoUser`),
  ADD KEY `linkUser` (`linkUser`);

--
-- Indexes for table `truangan`
--
ALTER TABLE `truangan`
  ADD PRIMARY KEY (`idRuangan`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `linkInfoUser` (`linkInfoUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbarang`
--
ALTER TABLE `tbarang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuku`
--
ALTER TABLE `tbuku`
  MODIFY `idBuku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tinformasiuser`
--
ALTER TABLE `tinformasiuser`
  MODIFY `idInfoUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `truangan`
--
ALTER TABLE `truangan`
  MODIFY `idRuangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbarang`
--
ALTER TABLE `tbarang`
  ADD CONSTRAINT `tbarang_ibfk_1` FOREIGN KEY (`linkRuangan`) REFERENCES `truangan` (`idRuangan`);

--
-- Constraints for table `tbuku`
--
ALTER TABLE `tbuku`
  ADD CONSTRAINT `tbuku_ibfk_1` FOREIGN KEY (`linkRuangan`) REFERENCES `truangan` (`idRuangan`);

--
-- Constraints for table `tinformasiuser`
--
ALTER TABLE `tinformasiuser`
  ADD CONSTRAINT `tinformasiuser_ibfk_1` FOREIGN KEY (`linkUser`) REFERENCES `tuser` (`idUser`);

--
-- Constraints for table `tuser`
--
ALTER TABLE `tuser`
  ADD CONSTRAINT `tuser_ibfk_1` FOREIGN KEY (`linkInfoUser`) REFERENCES `tinformasiuser` (`idInfoUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
