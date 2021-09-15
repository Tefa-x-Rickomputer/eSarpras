-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 04:31 AM
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
(1, 'Komputer Desktop', 'Assets/img/aset/acer tc-866.jp', 'acer', 'TC-866', 'PC180204BS001', 8000000, 2018, 'BOS', 'Baik', 4, 0),
(2, 'Komputer Desktop', 'Assets/img/aset/acer tc-866.jp', 'acer', 'TC-866', 'PC180204BS002', 8000000, 2018, 'BOS', 'Baik', 4, 0),
(3, 'Laptop', 'Assets/img/aset/asus a409fj.jp', 'ASUS', 'A409FJ', 'LP190202BD001', 8500000, 2019, 'BOSDA', 'Baik', 2, 0),
(4, 'Laptop', 'Assets/img/aset/asus a409fj.jp', 'ASUS', 'A409FJ', 'LP190202BD002', 8500000, 2019, 'BOSDA', 'Rusak', 2, 0),
(5, 'Laptop', 'Assets/img/aset/asus a409fj.jp', 'ASUS', 'A409FJ', 'LP190202BD003', 8500000, 2019, 'BOSDA', 'Baik', 2, 0);

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
(1, 'Francis of the Filth', 'Assets/img/buku/francisotfilth', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS001', 2017, 363000, 'BOS', 'Baik', 6, 0),
(2, 'Francis of the Filth', 'Assets/img/buku/francisotfilth', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS002', 2017, 363000, 'BOS', 'Baik', 6, 0),
(3, 'Francis of the Filth', 'Assets/img/buku/francisotfilth', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS003', 2017, 363000, 'BOS', 'Baik', 6, 0),
(4, 'Francis of the Filth', 'Assets/img/buku/francisotfilth', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS004', 2017, 363000, 'BOS', 'Baik', 6, 0),
(5, 'Francis of the Filth', 'Assets/img/buku/francisotfilth', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS005', 2017, 363000, 'BOS', 'Rusak', 6, 0),
(6, 'Technological Slavery', 'Assets/img/buku/technologicals', '1944228012', 'Theodore John Kaczynski', 'Feral House', 2010, 355, 'TS160103BD001', 2016, 349500, 'BOSDA', 'Baik', 6, 0),
(7, 'Technological Slavery', 'Assets/img/buku/technologicals', '1944228012', 'Theodore John Kaczynski', 'Feral House', 2010, 355, 'TS160103BD002', 2016, 349500, 'BOSDA', 'Baik', 6, 0),
(8, 'Technological Slavery', 'Assets/img/buku/technologicals', '1944228012', 'Theodore John Kaczynski', 'Feral House', 2010, 355, 'TS160103BD003', 2016, 349500, 'BOSDA', 'Baik', 6, 0);

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
  `password` varchar(255) NOT NULL,
  `role` enum('Superuser','Administrator','Guest') NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `fotoProfil` varchar(50) DEFAULT '''Assets/img/user/person-fill.svg''',
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Budha','Hindu','Islam','Katholik','Kristen') NOT NULL,
  `telpon` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`idUser`, `username`, `password`, `role`, `nik`, `nama`, `fotoProfil`, `gender`, `agama`, `telpon`, `email`, `tanggalLahir`, `alamat`, `status`, `isDeleted`) VALUES
(1, 'admin', '$2y$10$CDOQ0IdL6rgXvLaYGfoCHeWziDB7QfSyLIJLfWNcUga3RQp5JpL3m', 'Administrator', '637104234623446', 'Kuin Nerahaya', 'Assets/img/user/person-fill.svg', 'Perempuan', 'Budha', '0192837510925', 'nera@turtle.jp', '1999-09-09', 'Localhost', 'EEEEEEEEEEEEEEEEEE', 0),
(2, 'azhim', '$2y$10$TAhsdw9f5DHuN5p0zzXET.B.GcJ5LKaKvbBSZJNxkwPtcnbnApUnu', 'Superuser', '6371042701040003', 'Muhammad Azhim Nugroho', 'Assets/img/user/person-fill.svg', 'Laki-laki', 'Islam', '0895341517385', 'mazhn34@gmail.com', '2004-01-27', 'Jl. HKSN Komplek AMD Permai', 'Siswa', 0),
(3, 'guest', '$2y$10$kk0eQrMq42CmHIqEFd1ePempK8C7HzT1F8aG8x/eoYLQ64crbcz1G', 'Guest', '1028357291509785', 'Somebody that You Used to Know', 'Assets/img/user/person-fill.svg', 'Laki-laki', 'Katholik', '0213591759081', 'remembernot@yahoo.com', '1976-06-24', 'Familiar Street No. 4', 'Status that You Still Know', 0),
(4, 'anothersuper', '$2y$10$.TTmYe5vYk/j81F98JrkXOjTL0aqx/e17.lQsCGSLFv7vIcdaAi4a', 'Superuser', '1023957609152345', 'Reil Nathel', 'Assets/img/user/person-fill.svg', 'Laki-laki', 'Kristen', '0126359864306', 'reinat@rgcorp.org', '1986-07-13', 'St Patrick', 'Staff', 0),
(5, 'anotherguest', '$2y$10$/DOOPOtCp7Zy/wBfPddyR.oN1RU6RddwEMqPRmWdl9Wd784X7V56m', 'Guest', '31015704356070', 'Chet Cooker', 'Assets/img/user/person-fill.svg', 'Laki-laki', 'Kristen', '0543213096123', 'chetcook@bake.ry', '1967-12-23', 'St Saint', 'Juru Masak', 0),
(6, 'anotheradmin', '$2y$10$u7ZXlqraMUfLLDTBfuL9O.fcCciEe1rHT48tK1P6gQJjYG6X2B1tO', 'Administrator', '3101823650989698', 'Syndrome', 'Assets/img/user/person-fill.svg', 'Laki-laki', 'Katholik', '0971234696891', 'superis@body.no', '1988-12-02', 'St. Groove', 'Villain', 0);

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
  MODIFY `idAset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbuku`
--
ALTER TABLE `tbuku`
  MODIFY `idBuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
