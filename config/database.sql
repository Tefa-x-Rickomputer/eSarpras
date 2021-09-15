-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 04:24 AM
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
  `idAset` int(11) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `fotoBarang` varchar(30) NOT NULL,
  `merkBarang` varchar(30) DEFAULT NULL,
  `tipeBarang` varchar(30) DEFAULT NULL,
  `nomorRegister` varchar(30) DEFAULT NULL,
  `hargaSatuan` int(20) DEFAULT NULL,
  `tahunPembelian` int(4) DEFAULT NULL,
  `sumberDana` enum('BOS','BOSDA') DEFAULT NULL,
  `kondisiBarang` enum('Baik','Rusak') NOT NULL,
  `linkRuangan` int(11) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbarang`
--

INSERT INTO `tbarang` (`idAset`, `namaBarang`, `fotoBarang`, `merkBarang`, `tipeBarang`, `nomorRegister`, `hargaSatuan`, `tahunPembelian`, `sumberDana`, `kondisiBarang`, `linkRuangan`, `isDeleted`) VALUES
(1, 'Komputer Desktop', '../../assets/img/barang.jpg', 'acer', 'TC-866', NULL, 8000000, 2019, 'BOS', 'Baik', 4, 0),
(2, 'Komputer Desktop', '../../assets/img/barang.jpg', 'acer', 'TC-866', NULL, 8000000, 2019, 'BOS', 'Baik', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbuku`
--

CREATE TABLE `tbuku` (
  `idBuku` int(11) NOT NULL,
  `judulBuku` varchar(50) NOT NULL,
  `fotoBuku` varchar(30) NOT NULL,
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
  `linkRuangan` int(11) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuku`
--

INSERT INTO `tbuku` (`idBuku`, `judulBuku`, `fotoBuku`, `nomorBuku`, `pengarang`, `penerbit`, `tahunTerbit`, `jumlahHalaman`, `nomorRegister`, `tahunPembelian`, `hargaBuku`, `sumberDana`, `kondisiBuku`, `linkRuangan`, `isDeleted`) VALUES
(1, 'Francis of the Filth', '../../assets/img/buku/buku.jpg', NULL, 'George Miller', 'lulu.com', 2017, 256, NULL, 2017, NULL, 'BOS', 'Baik', 6, 0),
(2, 'Francis of the Filth', '../../assets/img/buku/buku.jpg', NULL, 'George Miller', 'lulu.com', 2017, 256, NULL, 2017, NULL, 'BOS', 'Baik', 6, 0),
(3, 'Francis of the Filth', '../../assets/img/buku/buku.jpg', NULL, 'George Miller', 'lulu.com', 2017, 256, NULL, 2017, NULL, 'BOS', 'Baik', 6, 0),
(4, 'Francis of the Filth', '../../assets/img/buku/buku.jpg', NULL, 'George Miller', 'lulu.com', 2017, 256, NULL, 2017, NULL, 'BOS', 'Baik', 6, 0),
(5, 'Francis of the Filth', '../../assets/img/buku/buku.jpg', NULL, 'George Miller', 'lulu.com', 2017, 256, NULL, 2017, NULL, 'BOS', 'Rusak', 6, 0),
(6, 'Technological Slavery', '../../assets/img/buku/buku.jpg', NULL, 'Theodore John Kaczynski', 'Feral House', 2010, 355, NULL, 2016, NULL, 'BOSDA', 'Baik', 6, 0),
(7, 'Technological Slavery', '../../assets/img/buku/buku.jpg', NULL, 'Theodore John Kaczynski', 'Feral House', 2010, 355, NULL, 2016, NULL, 'BOSDA', 'Baik', 6, 0),
(8, 'Technological Slavery', '../../assets/img/buku/buku.jpg', NULL, 'Theodore John Kaczynski', 'Feral House', 2010, 355, NULL, 2016, NULL, 'BOSDA', 'Baik', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tinformasiuser`
--

CREATE TABLE `tinformasiuser` (
  `idInfoUser` int(11) NOT NULL,
  `linkUser` int(11) NOT NULL,
  `nik` int(16) DEFAULT NULL,
  `nama` char(30) NOT NULL,
  `fotoProfil` varchar(30) DEFAULT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Budha','Hindu','Islam','Katholik','Kristen') NOT NULL,
  `telpon` int(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinformasiuser`
--

INSERT INTO `tinformasiuser` (`idInfoUser`, `linkUser`, `nik`, `nama`, `fotoProfil`, `gender`, `agama`, `telpon`, `email`, `tanggalLahir`, `alamat`, `status`) VALUES
(1, 2, NULL, 'Kuin Nerahaya', NULL, 'Perempuan', 'Budha', NULL, NULL, NULL, NULL, 'EEEEEEEEEEEEEEEEEE'),
(2, 1, NULL, 'Muhammad Azhim Nugroho', NULL, 'Laki-laki', 'Islam', NULL, NULL, NULL, NULL, 'Siswa'),
(3, 3, NULL, 'Somebody that You Used to Know', NULL, 'Laki-laki', 'Katholik', NULL, NULL, NULL, NULL, 'Status that You Still Know'),
(4, 5, NULL, 'Reil Nathel', NULL, 'Laki-laki', 'Kristen', NULL, NULL, NULL, NULL, 'Staff'),
(5, 6, NULL, 'Chet Cooker', NULL, 'Laki-laki', 'Kristen', NULL, NULL, NULL, NULL, 'Tamu'),
(6, 4, NULL, 'Syndrome', NULL, 'Laki-laki', 'Katholik', NULL, NULL, NULL, NULL, 'Villain');

-- --------------------------------------------------------

--
-- Table structure for table `truangan`
--

CREATE TABLE `truangan` (
  `idRuangan` int(11) NOT NULL,
  `namaRuangan` varchar(30) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truangan`
--

INSERT INTO `truangan` (`idRuangan`, `namaRuangan`, `isDeleted`) VALUES
(1, 'RPS 1', 0),
(2, 'RPS 2', 0),
(3, 'RPS 3', 0),
(4, 'RPS 4', 0),
(5, 'RPS 5', 0),
(6, 'Perpustakaan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `idUser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` enum('Super','Admin','Guest') NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`idUser`, `username`, `password`, `role`, `isDeleted`) VALUES
(1, 'superadmin', 'superadmin', 'Super', 0),
(2, 'admin', 'admin', 'Admin', 0),
(3, 'guest', 'guest', 'Guest', 0),
(4, 'anothersuper', 'anothersuper', 'Super', 0),
(5, 'anotheradmin', 'anotheradmin', 'Admin', 0),
(6, 'anotherguest', 'anotherguest', 'Guest', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbarang`
--
ALTER TABLE `tbarang`
  ADD PRIMARY KEY (`idAset`),
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
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbarang`
--
ALTER TABLE `tbarang`
  MODIFY `idAset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbuku`
--
ALTER TABLE `tbuku`
  MODIFY `idBuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tinformasiuser`
--
ALTER TABLE `tinformasiuser`
  MODIFY `idInfoUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `truangan`
--
ALTER TABLE `truangan`
  MODIFY `idRuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;