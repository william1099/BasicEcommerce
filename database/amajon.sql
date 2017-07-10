-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 09:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amajon`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `num` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`num`, `username`, `password`) VALUES
(1, 'william1099', 'william1099'),
(2, 'test', 'test123'),
(3, 'admin', 'admin'),
(4, 'ilkom', 'ilkom');

-- --------------------------------------------------------

--
-- Table structure for table `best`
--

CREATE TABLE `best` (
  `num` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best`
--

INSERT INTO `best` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'Toystoryy', 200000, 'best1.jpg'),
(2, 'SepatuFairytaill', 350000, 'best2.jpg'),
(3, 'AmericanBalll', 6300000, 'best3.png'),
(4, 'KursiiMaroon', 5350000, 'best4.jpg'),
(5, 'KurrsiKayu', 257000, 'best5.png'),
(6, 'HighHeelHitam', 1500000, 'best6.jpg'),
(7, 'SepatuSportAdidas', 500000, 'best7.jpeg'),
(8, 'BolaWorldCup2014', 450000, 'best8.jpg'),
(9, 'DCSuperHero', 50000, 'best9.jpg'),
(10, 'SkyLander', 450000, 'best10.jpg'),
(11, 'XiaomiRedmiNote2', 4000000, 'best11.jpg'),
(12, 'SonyXperiaXAUltraPink', 2100000, 'best12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `nama`, `link`, `harga`) VALUES
(2, 'bajukuning', 'promo2.jpg', 41500),
(3, 'dompet V', 'promo3.jpg', 60000),
(4, 'bajuhijau', 'promo4.jpg', 37500),
(12, 'SonyXperiaXAUltraPink', 'best12.jpg', 2100000);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat`) VALUES
('Hai :)'),
('hai'),
('hai'),
('tanggal'),
('05 07 2017'),
('nama'),
('Namaku Amajon BOT :)');

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `num` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'ToyStory', 200000, 'hobby1.jpg'),
(2, 'DCSuperHero', 50000, 'hobby2.jpg'),
(3, 'SkyLander', 210000, 'hobby3.jpg'),
(4, 'KillLaKill', 325000, 'hobby4.jpg'),
(5, 'WinnieThePooh', 33000, 'hobby5.jpg'),
(6, 'BatmanAndSuperman', 450000, 'hobby6.jpg'),
(7, 'Starwars', 401000, 'hobby7.jpg'),
(8, 'Wonderwoman', 450000, 'hobby8.jpg'),
(9, 'HarryPotter', 140000, 'hobby9.jpg'),
(10, 'Zartan', 43000, 'hobby10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `num` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'MobilPutih', 257000000, 'mobil1.jpg'),
(2, 'MobilPutihHitam', 35000000, 'mobil2.jpeg'),
(3, 'MobilHitam', 210000000, 'mobil3.jpg'),
(4, 'Lamborghini', 17800000000, 'mobil4.jpg'),
(5, 'BMW', 330000000, 'mobil5.jpg'),
(6, 'UltimateAero', 4500000000, 'mobil6.jpg'),
(7, 'MobilPolisi', 401000000, 'mobil7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `perabot`
--

CREATE TABLE `perabot` (
  `num` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perabot`
--

INSERT INTO `perabot` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'KursiKayu', 257000, 'perabot1.png'),
(2, 'MejaKecil', 350000, 'perabot2.jpg'),
(3, 'SofaCream', 1210000, 'perabot3.jpg'),
(4, 'MejaKaca', 1780000, 'perabot4.jpg'),
(5, 'MejaKayu', 1300000, 'perabot5.jpg'),
(6, 'SetMejaMakan', 4500000, 'perabot6.jpg'),
(7, 'MejaBundar', 5000000, 'perabot7.jpg'),
(8, 'RakBuku', 4050000, 'perabot8.jpg'),
(9, 'SofaPutih', 3450000, 'perabot9.jpg'),
(10, 'KursiBiasa', 173000, 'perabot10.jpg'),
(11, 'KursiPlastik', 43000, 'perabot11.jpg'),
(12, 'TempatTidur', 6300000, 'perabot12.jpg'),
(13, 'KursiMaroon', 5350000, 'perabot13.jpg'),
(14, 'KursiMeja', 2430000, 'perabot14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `num` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'SonyXperiaXAultra', 2000000, 'phone1.jpg'),
(2, 'SonyXperiaZ5Compact', 5600000, 'phone2.jpg'),
(3, 'SonyXperiaXAUltrapink', 2100000, 'phone3.jpg'),
(4, 'SonyXperiaM2', 3250000, 'phone4.jpg'),
(5, 'SonyXperiaZr', 4300000, 'phone5.jpg'),
(6, 'Iphone5', 4500000, 'phone6.jpg'),
(7, 'Iphone6', 4150000, 'phone7.jpg'),
(8, 'Iphone5S', 4500000, 'phone8.jpg'),
(9, 'XiaomiRedminote2', 4000000, 'phone9.jpg'),
(10, 'XiaomiRedmi3X', 4300000, 'phone10.jpg'),
(11, 'XiaomiMi5Pro', 4350000, 'phone11.jpeg'),
(12, 'SamsungGalaxyJ7', 5300000, 'phone12.jpg'),
(13, 'SamsungGalaxyS5', 5210000, 'phone13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `num` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'Kaosabu', 50000, 'kaos1.jpg'),
(2, 'Kaoshijau', 40000, 'kaos2.jpg'),
(3, 'Kaosputih', 30000, 'kaos3.jpg'),
(4, 'Kaosrock', 35000, 'kaos4.jpg'),
(5, 'Kaosmerahputih', 40000, 'kaos5.jpg'),
(6, 'Kaosfake', 45000, 'kaos6.png'),
(7, 'Kaossegar', 43000, 'kaos7.jpg'),
(8, 'Kaosmerah', 53000, 'kaos8.jpg'),
(9, 'Kaoshitampolos', 23000, 'kaos9.jpg'),
(10, 'Kaoscorak', 42000, 'kaos10.jpg'),
(11, 'Kaosmickey', 55000, 'kaos11.jpg'),
(12, 'Kaosstrategic', 55000, 'kaos12.jpg'),
(13, 'Kaoscameron', 38000, 'kaos13.jpg'),
(14, 'Kaosnice', 48000, 'kaos14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `num` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'bajubiru', 45000, 'promo1.jpg'),
(2, 'bajukuning', 41500, 'promo2.jpg'),
(3, 'dompet V', 60000, 'promo3.jpg'),
(4, 'bajuhijau', 37500, 'promo4.jpg'),
(5, 'blender', 430000, 'promo5.jpg'),
(6, 'lipstick', 45000, 'promo6.jpg'),
(7, 'jamtangan', 41500, 'promo7.jpg'),
(8, 'Laptop Am', 1600000, 'promo8.jpg'),
(9, 'kaoskaki', 7500, 'promo9.jpg'),
(10, 'kacamata CK', 43000, 'promo10.jpg'),
(11, 'tas', 20000, 'promo11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `num` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'SepatuHitamPutih', 157000, 'sepatu1.jpg'),
(2, 'SepatuFairytail', 350000, 'sepatu2.jpg'),
(3, 'SepatuPolos', 121000, 'sepatu3.jpg'),
(4, 'SepatuDC', 178000, 'sepatu4.jpg'),
(5, 'HighHeel', 1300000, 'sepatu5.jpg'),
(6, 'HighHeelHitam', 1500000, 'sepatu6.jpg'),
(7, 'SepatuSportAdidas', 500000, 'sepatu7.jpeg'),
(8, 'SepatuAirJordan', 405000, 'sepatu8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `num` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`num`, `nama`, `harga`, `link`) VALUES
(1, 'SarungTangan', 257000, 'sport1.jpg'),
(2, 'RacketA1', 350000, 'sport2.jpg'),
(3, 'RacketA2', 121000, 'sport3.jpg'),
(4, 'RacketA5', 1780000, 'sport4.jpg'),
(5, 'SetRacket', 3300000, 'sport5.jpg'),
(6, 'BolaWorldCup2014', 4500000, 'sport6.jpg'),
(7, 'BolaNike', 500000, 'sport7.jpg'),
(8, 'BolaAdidas', 405000, 'sport8.jpg'),
(9, 'BolaNikeOmni', 3450000, 'sport9.jpg'),
(10, 'BolaNikeT90', 1730000, 'sport10.jpg'),
(11, 'PumaBarcelona', 430000, 'sport11.jpg'),
(12, 'AmericanBallr', 630000, 'sport12.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `best`
--
ALTER TABLE `best`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `perabot`
--
ALTER TABLE `perabot`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `best`
--
ALTER TABLE `best`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `perabot`
--
ALTER TABLE `perabot`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
