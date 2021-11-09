-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 02:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorymanagement_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbarang`
--

CREATE TABLE `tbarang` (
  `idAset` int(11) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `fotoBarang` varchar(255) DEFAULT 'box-seam.svg',
  `merkBarang` varchar(30) DEFAULT NULL,
  `tipeBarang` varchar(30) NOT NULL,
  `nomorRegister` varchar(30) DEFAULT NULL,
  `hargaSatuan` int(20) DEFAULT 0,
  `tahunPembelian` int(4) DEFAULT NULL,
  `sumberDana` enum('BOS','BOSDA') DEFAULT NULL,
  `kondisiBarang` enum('Baik','Rusak') NOT NULL,
  `linkRuangan` int(11) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbarang`
--

INSERT INTO `tbarang` (`idAset`, `namaBarang`, `fotoBarang`, `merkBarang`, `tipeBarang`, `nomorRegister`, `hargaSatuan`, `tahunPembelian`, `sumberDana`, `kondisiBarang`, `linkRuangan`, `isDeleted`) VALUES
(1, 'Komputer Desktop', 'acer tc-866.jpg', 'acer', 'TC-866', 'PC180204BS001', 8000000, 2018, 'BOS', 'Baik', 4, 1),
(2, 'Komputer Desktop', 'acer tc-866.jpg', 'acer', 'TC-866', 'PC180204BS002', 8000000, 2018, 'BOS', 'Baik', 4, 0),
(3, 'Laptop', 'asus a409fj.jpg', 'ASUS', 'A409FJ', 'LP190202BD001', 8500000, 2019, 'BOSDA', 'Baik', 2, 0),
(4, 'Laptop', 'asus a409fj.jpg', 'ASUS', 'A409FJ', 'LP190202BD002', 8500000, 2019, 'BOSDA', 'Rusak', 2, 0),
(5, 'Laptop', 'asus a409fj.jpg', 'ASUS', 'A409FJ', 'LP190202BD003', 8500000, 2019, 'BOSDA', 'Baik', 2, 0),
(6, 'Handphone', '61665c5505536.png', 'ASUS', 'Max Pro M1', 'HP170203BS001', 1800000, 0, 'BOS', 'Baik', 3, 0),
(7, '', '', '', '', '', 0, 0, 'BOS', 'Baik', 1, 1),
(8, 'D', '6166592fd91cc.png', 'F', 'G', '345d', 33333333, 2075, 'BOS', 'Baik', 1, 0),
(9, 't', '6166371fd261b.png', 't', 't', 'gg77', 76000, 2006, 'BOS', 'Baik', 1, 0),
(10, 'keyboard', '616638494fca2.jpg', 'rexus', 'mx 3.2', 'KB202132', 350000, 2021, 'BOS', 'Baik', 4, 0),
(11, 'laptop', '6166391ee237b.jpg', 'asus', 'a409fj', 'LP2019FJ', 8500000, 2019, 'BOSDA', 'Baik', 4, 0),
(12, 'asd', '61665da0354d9.jpeg', 'asd', 'asd', '1wd', 123, 123, 'BOS', 'Baik', 1, 0),
(13, 'Laptop', '6168ec8b5e7da.jpg', 'Pc', 'Acer', '098752', 100000, 2021, 'BOS', 'Rusak', 1, 0),
(14, 'monitor', '', 'asus', 'monitor', '124op', 500000, 2015, 'BOS', 'Baik', 1, 0),
(15, 'hp', '', 'vivo', 'vivo 1718', 'shout1324', 3500000, 2018, 'BOS', 'Baik', 1, 0),
(16, 'asdd', '', 'lqwkdn', 'aslkndn', '124on', 900000, 2014, 'BOS', 'Baik', 1, 0),
(17, 'knasfnkl', '', 'na1fw', 'ansf12', '01r290j', 80000, 2019, 'BOS', 'Baik', 1, 0),
(18, 'asdkln', '', 'asldknk', '12dkn', '10d2on', 20000, 2012, 'BOS', 'Baik', 1, 0),
(19, 'asjf1lkk1', '', 'lknsfknn', 'alskkfn', '12kfn', 90000, 2000, 'BOS', 'Baik', 1, 0),
(20, 'inasfon', '', 'oaosnflk', 'askfnn', '10f2', 12000, 2001, 'BOS', 'Baik', 1, 0),
(21, 'asflknn', '', 'aslkfkn', 'laknsnf', '1024', 200000, 2019, 'BOS', 'Baik', 1, 0),
(22, 'alksnflkasf', '', 'lkaksnflk', 'lkaksnf', '1209', 80000, 2018, 'BOS', 'Baik', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbuku`
--

CREATE TABLE `tbuku` (
  `idBuku` int(11) NOT NULL,
  `judulBuku` varchar(50) NOT NULL,
  `fotoBuku` varchar(255) DEFAULT 'book.svg',
  `nomorBuku` varchar(30) DEFAULT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahunTerbit` int(4) NOT NULL,
  `jumlahHalaman` int(4) DEFAULT NULL,
  `nomorRegister` varchar(30) DEFAULT NULL,
  `tahunPembelian` int(4) DEFAULT NULL,
  `hargaBuku` int(7) DEFAULT 0,
  `sumberDana` enum('BOS','BOSDA') NOT NULL,
  `kondisiBuku` enum('Baik','Rusak') NOT NULL,
  `linkRuangan` int(11) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuku`
--

INSERT INTO `tbuku` (`idBuku`, `judulBuku`, `fotoBuku`, `nomorBuku`, `pengarang`, `penerbit`, `tahunTerbit`, `jumlahHalaman`, `nomorRegister`, `tahunPembelian`, `hargaBuku`, `sumberDana`, `kondisiBuku`, `linkRuangan`, `isDeleted`) VALUES
(1, 'Francis of the Filth', 'francisotfilth.jpg', '138715950X', 'George Millers', 'lulu.com', 2017, 250, 'FF170105BS001', 2017, 363000, 'BOS', 'Baik', 6, 0),
(2, 'Francis of the Filth', 'francisotfilth.jpg', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS002', 2017, 363000, 'BOS', 'Baik', 6, 0),
(3, 'Francis of the Filth', 'francisotfilth.jpg', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS003', 2017, 363000, 'BOS', 'Baik', 6, 0),
(4, 'Francis of the Filth', 'francisotfilth.jpg', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS004', 2017, 363000, 'BOS', 'Baik', 6, 0),
(5, 'Francis of the Filth', 'francisotfilth.jpg', '138715950X', 'George Miller', 'lulu.com', 2017, 256, 'FF170105BS005', 2017, 363000, 'BOS', 'Rusak', 6, 0),
(6, 'Technological Slavery', 'technologicalslavery.jpg', '1944228012', 'Theodore John Kaczynski', 'Feral House', 2010, 355, 'TS160103BD001', 2016, 349500, 'BOSDA', 'Baik', 6, 0),
(7, 'Technological Slavery', 'technologicalslavery.jpg', '1944228012', 'Theodore John Kaczynski', 'Feral House', 2010, 355, 'TS160103BD002', 2016, 349500, 'BOSDA', 'Baik', 6, 0),
(8, 'Technological Slavery', 'technologicalslavery.jpg', '1944228012', 'Theodore John Kaczynski', 'Feral House', 2010, 355, 'TS160103BD003', 2016, 349500, 'BOSDA', 'Baik', 6, 0),
(9, 'e', '61663de96b794.png', 'e', 'e', 'e', 123, 12, '12e', 1241, 124121, 'BOS', 'Baik', 1, 1),
(10, 'Matematika UBSN', '616658c237427.png', 'asd', 'qwd', 'qwd', 123, 123, '123', 123, 123123, 'BOS', 'Baik', 1, 0),
(11, 'asd', '61665d719672e.jpeg', 'asd', 'asd', 'asd', 2123, 123, '123', 1232, 123, 'BOS', 'Baik', 1, 0),
(12, 'Gaktay', '6168ef284cc38.jpg', '1038sj', 'Saya', 'Dia', 2020, 100, '9192922', 2090, 100387, 'BOS', 'Rusak', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tloginlog`
--

CREATE TABLE `tloginlog` (
  `idLoginLog` int(11) NOT NULL,
  `linkUser` int(11) NOT NULL,
  `ipUser` varchar(255) NOT NULL,
  `agenUser` varchar(255) NOT NULL,
  `waktuLogin` datetime NOT NULL,
  `waktuLogout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tloginlog`
--

INSERT INTO `tloginlog` (`idLoginLog`, `linkUser`, `ipUser`, `agenUser`, `waktuLogin`, `waktuLogout`) VALUES
(1, 1, '23q45345', 'fasdfasdfaerg', '2021-10-18 15:58:35', '2021-10-18 15:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `tpdf`
--

CREATE TABLE `tpdf` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` enum('Kepala Sekolah','Wakil Kepala Sekolah','Guru','') NOT NULL,
  `nip` varchar(20) NOT NULL,
  `used` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tpdf`
--

INSERT INTO `tpdf` (`id`, `nama`, `jabatan`, `nip`, `used`) VALUES
(1, 'luthfi', 'Kepala Sekolah', '123', '2'),
(2, 'piki', 'Wakil Kepala Sekolah', '123124', '0'),
(3, 'azhim', 'Guru', '120479', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tpemberitahuan`
--

CREATE TABLE `tpemberitahuan` (
  `idPemberitahuan` int(11) NOT NULL,
  `linkUser` int(11) NOT NULL,
  `isiPemberitahuan` varchar(255) NOT NULL,
  `waktuPemberitahuan` datetime NOT NULL DEFAULT current_timestamp(),
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tpemberitahuan`
--

INSERT INTO `tpemberitahuan` (`idPemberitahuan`, `linkUser`, `isiPemberitahuan`, `waktuPemberitahuan`, `isDeleted`) VALUES
(1, 9, 'asd', '2021-10-06 10:38:55', 0),
(2, 4, 'testtestASD', '2021-10-12 10:34:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `truangan`
--

CREATE TABLE `truangan` (
  `idRuangan` int(11) NOT NULL,
  `namaRuangan` varchar(30) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
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
  `fotoProfil` varchar(255) DEFAULT 'person-fill.svg',
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Budha','Hindu','Islam','Katholik','Kristen') NOT NULL,
  `telpon` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` enum('Kepala Sekolah','Wakil Kepala Sekolah','Kepala Lab','Guru') DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`idUser`, `username`, `password`, `role`, `nik`, `nama`, `fotoProfil`, `gender`, `agama`, `telpon`, `email`, `tanggalLahir`, `alamat`, `status`, `isDeleted`) VALUES
(1, 'admin', '$2y$10$CDOQ0IdL6rgXvLaYGfoCHeWziDB7QfSyLIJLfWNcUga3RQp5JpL3m', 'Administrator', '637104234623446', 'Kuin Nerahaya', '6168d8043d578.jpg', 'Laki-laki', 'Kristen', '0192837510925', 'nera@turtle.jp', '1999-09-09', 'Localhost', 'Kepala Lab', 0),
(2, 'azhim', '$2y$10$bmBoP1Ml1yx178dxw6Ov5OIUmeD4aBy2gp7C6o2wr8fMh/4E1jauO', 'Superuser', '6371042701040003', 'Muhammad Azhim Nugroho', '61652f126f058.png', 'Laki-laki', 'Islam', '0895341517385', 'mazhn34@gmail.com', '2004-01-27', 'Jl. HKSN Komplek AMD Permai', 'Guru', 0),
(3, 'guest', '$2y$10$kk0eQrMq42CmHIqEFd1ePempK8C7HzT1F8aG8x/eoYLQ64crbcz1G', 'Guest', '1028357291509785', 'Cahaya Dhananjaya', 'person-fill.svg', 'Laki-laki', 'Katholik', '0213591759081', 'caydhanan3@yahoo.co.id', '1976-06-24', 'Familiar Street No. 4', 'Guru', 0),
(4, 'anothersuper', '$2y$10$.TTmYe5vYk/j81F98JrkXOjTL0aqx/e17.lQsCGSLFv7vIcdaAi4a', 'Superuser', '1023957609152345', 'Reil Nathel', 'person-fill.svg', 'Laki-laki', 'Kristen', '0126359864306', 'reinat@rgcorp.org', '1986-07-13', 'St Patrick', 'Wakil Kepala Sekolah', 0),
(5, 'anotherguest', '$2y$10$/DOOPOtCp7Zy/wBfPddyR.oN1RU6RddwEMqPRmWdl9Wd784X7V56m', 'Guest', '31015704356070', 'Chet Cooker', 'person-fill.svg', 'Laki-laki', 'Kristen', '0543213096123', 'chetcook@bake.ry', '1967-12-23', 'St Saint', 'Kepala Sekolah', 0),
(6, 'anotheradmin', '$2y$10$u7ZXlqraMUfLLDTBfuL9O.fcCciEe1rHT48tK1P6gQJjYG6X2B1tO', 'Administrator', '3101823650989698', 'John Doe', 'person-fill.svg', 'Laki-laki', 'Katholik', '0971234696891', 'johdoe@company.org', '1988-12-02', 'St. Groove', 'Guru', 0),
(7, 'yulian', '$2y$10$7JZNKUFgDkysJPo6zdLEVeT8p/4ixM5HpOc0QyjdMPyf57fWyiDG6', 'Guest', '6371236803460982', 'Yuliani Melati Hermawan', 'person-fill.svg', 'Perempuan', 'Hindu', '0813452352155', 'yulilati59@yahoo.com', '1994-09-23', 'Jl. S Parman', 'Guru', 1),
(8, 'ratulan', '$2y$10$RHRWkAPq0bZfp1ANdwB7yOSFCetE.F3pJ39M/q7tnoU7/d36JB66e', 'Superuser', '6371109847509252', 'Ratu Wulansari', 'person-fill.svg', 'Perempuan', 'Islam', '0821872350198', 'wulansariwulan74@gmail.com', '1989-05-24', 'Jl. Kebun Jeruk', 'Wakil Kepala Sekolah', 0),
(9, 'luthfi', '$2y$10$ji6MqWE6hFroaJWoOQYaSOgWvT4TpENFa0XeDzNIBGMehRepfA8vm', 'Superuser', '6371052406040002', 'luthfi alredia', 'person-fill.svg', 'Perempuan', 'Islam', '081208120812', 'luthfi@gmail.com', '2004-06-24', 'palsu', 'Kepala Sekolah', 0),
(10, 'rettou', '$2y$10$htYJHGXhXIJku1Xfi0YPmuN5w6PYajR4kZwMgAxKThC8Or/hZArbW', 'Guest', '2222222232222222', 'rettou', '61652ccd427fc.png', 'Laki-laki', 'Islam', '081208120812', 'rettou@gmail.com', '2021-01-02', 'palsu', 'Kepala Sekolah', 0);

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
-- Indexes for table `tloginlog`
--
ALTER TABLE `tloginlog`
  ADD PRIMARY KEY (`idLoginLog`),
  ADD KEY `tloginlog_ibfk_1` (`linkUser`);

--
-- Indexes for table `tpdf`
--
ALTER TABLE `tpdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpemberitahuan`
--
ALTER TABLE `tpemberitahuan`
  ADD PRIMARY KEY (`idPemberitahuan`),
  ADD KEY `tpemberitahuan_ibfk_1` (`linkUser`);

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
  MODIFY `idAset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbuku`
--
ALTER TABLE `tbuku`
  MODIFY `idBuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tloginlog`
--
ALTER TABLE `tloginlog`
  MODIFY `idLoginLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tpdf`
--
ALTER TABLE `tpdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tpemberitahuan`
--
ALTER TABLE `tpemberitahuan`
  MODIFY `idPemberitahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `truangan`
--
ALTER TABLE `truangan`
  MODIFY `idRuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Constraints for table `tloginlog`
--
ALTER TABLE `tloginlog`
  ADD CONSTRAINT `tloginlog_ibfk_1` FOREIGN KEY (`linkUser`) REFERENCES `tuser` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tpemberitahuan`
--
ALTER TABLE `tpemberitahuan`
  ADD CONSTRAINT `tpemberitahuan_ibfk_1` FOREIGN KEY (`linkUser`) REFERENCES `tuser` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
