-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 07:59 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onsim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` varchar(11) NOT NULL,
  `Fullname` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Occupation` varchar(500) NOT NULL,
  `Password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Fullname`, `Username`, `Occupation`, `Password`) VALUES
('A01', 'Ayunda Pratiwi', 'Admin1', 'Police Staff', '123ay'),
('A02', 'Putu Mangkok', 'Admin2', 'Police Staff', '123putu');

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE IF NOT EXISTS `license` (
  `Date` date NOT NULL,
  `User_id` int(18) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Type_license` enum('A','B','C') NOT NULL,
  `Identity_number` int(12) NOT NULL,
  `Fullname` varchar(40) NOT NULL,
  `Gender` enum('Female','Male') NOT NULL,
  `Nationality` varchar(40) NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Born_date` date NOT NULL,
  `Born_Place` varchar(40) NOT NULL,
  `Occupation` enum('Student','Private','Entrepreneur','TNI/POLRI') NOT NULL,
  `Address` varchar(40) NOT NULL,
  `City` enum('Badung','Denpasar','Tabanan','Gianyar','Bangli','Buleleng','Jembrana','Karangasem','Klungkung') NOT NULL,
  `Poscode` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Father` varchar(40) NOT NULL,
  `Mother` varchar(40) NOT NULL,
  `Education` enum('Elementary','Junior School','High School','Bachelor') NOT NULL,
  `Spectacled` enum('Yes','No') NOT NULL,
  `Disability` enum('None','Hand','Foot','Hearing','Body') NOT NULL,
  `School_certified` enum('Yes','No') NOT NULL,
  `Address_` varchar(40) NOT NULL,
  `Poscode_` int(11) NOT NULL,
  `Phone_` int(11) NOT NULL,
  `Period` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10000047 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`Date`, `User_id`, `Email`, `Type_license`, `Identity_number`, `Fullname`, `Gender`, `Nationality`, `Height`, `Weight`, `Born_date`, `Born_Place`, `Occupation`, `Address`, `City`, `Poscode`, `Phone`, `Father`, `Mother`, `Education`, `Spectacled`, `Disability`, `School_certified`, `Address_`, `Poscode_`, `Phone_`, `Period`) VALUES
('0000-00-00', 10000024, 'annisarisqi@yahoo.com', 'C', 2147483647, 'anissa risqi', 'Female', 'Indonesia', 150, 59, '1994-12-12', 'denpasar', 'Student', 'jl. pulau moyo', 'Badung', 80361, 2147483647, 'noor', 'noors', 'Bachelor', 'No', 'None', 'No', 'jl.pulau moyo', 80361, 2147483647, '0000-00-00'),
('2016-11-08', 10000036, 'ayunda@gmail.com', 'C', 2147483647, 'putu ayunda kamiasih pratiwi', 'Female', 'Indonesia', 158, 50, '1994-06-27', 'denpasar', 'Student', 'jl. waru no 18xx', 'Badung', 80361, 2147483647, 'putu', 'putu', 'Bachelor', 'No', 'None', 'No', 'jl. waru no 18xx', 80361, 2147483647, '0000-00-00'),
('2016-11-08', 10000040, 'fitasari1994@gmail.com', 'A', 1234567890, 'fita sari', 'Female', 'Indonesia', 160, 50, '1994-02-25', 'tuban', 'Student', 'jl. Sunset road basangkasa, seminyak', 'Badung', 80361, 2147483647, 'min', 'mar', 'Bachelor', 'No', 'None', 'No', 'Jl. Sunset road basangkasa, seminyak', 80361, 2147483647, '2020-01-01'),
('2016-11-10', 10000046, 'fitasari1994@gmail.com', 'A', 2147483647, 'fita sari', 'Female', 'Indonesia', 150, 55, '2016-12-31', 'tuban', 'Student', 'jl. Sunset road basangkasa, seminyak', 'Bangli', 80361, 2147483647, 'min', 'mar', 'Bachelor', 'No', 'None', 'No', 'Jl. Sunset road basangkasa, seminyak', 80361, 2147483647, '2021-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Ns_id` int(11) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Author` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `News_Content` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Ns_id`, `Title`, `Author`, `Date`, `News_Content`) VALUES
(2, '<b>just testing</b>', 'admin1', '2016-10-25', '<p>ini hanya testing dan juga percobaan.<br> jadi saya tidak tau apa yang harus saya ungkapkan disini, oke segitu aja ya, bye...'),
(1, 'new news', 'admin2', '2016-10-26', 'pada suatu hari terdapat seorang penulis yang sangat pemalu dan pendiam, sehingga dya hanya ingin mengungkapkan prasaan nya melalui tulisan-tulisan di dalam sebuah buku yang selalu ia bawa kemana pun ia pergi. dan suatu ketika dya bertemu dengan seorang lelaki yang sangat tampan, dan baik hati. pertemuan nya tersebut dimulai ketika dya berada di suatu taman pada sore hari. dya duduk dikursi tempat biasa dya menulis. dibawah pohon yg rindang dan di depan taman yang dikelilingi bunga mawar dan lily dengan berbagai warna. seperti biasa dya mengungkapkan semua perasaan nya di tempat itu. ketika dya sedang asyik menulis. tiba-tiba lelaki itu mendekatinya dan duduk tepat di sebelahnya.lalu...(to be continue...)');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `ID` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Violence` enum('Accident','Violence') NOT NULL,
  `Note` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`ID`, `User_id`, `Date`, `Violence`, `Note`) VALUES
(1, 55, '2016-10-25', 'Accident', 'jl.sunset road'),
(47, 123456, '2016-10-25', 'Violence', 'melanggar lalu lintas'),
(48, 55, '2016-11-01', 'Violence', 'Helmet'),
(49, 10000016, '2016-11-03', 'Accident', 'helmet'),
(51, 10000024, '2016-11-05', 'Violence', 'melanggar lalu lintas'),
(52, 10000024, '2016-11-01', 'Accident', 'jl. pulau moyo sesetan');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Id`, `User_id`, `Score`, `Date`) VALUES
(0, 0, 0, '2016-10-20 14:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE IF NOT EXISTS `tips` (
  `Ts_id` int(11) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Author` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Tips_Content` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`Ts_id`, `Title`, `Author`, `Date`, `Tips_Content`) VALUES
(12, 'cara mengendarai yang baik dan benar', 'admin2', '2016-11-02', 'ini adalah beberapa tips yang bisa di gunakan untuk cara mengendarai sepeda motor yang baik dan benar \r\n1. memakai helm\r\n2.menaati tata tertib lalu lintas\r\n3. dll'),
(13, 'cara menghindari kecelakaan', 'admin1', '2016-11-08', ''),
(1, 'Bagaimana cara mendapatkan SIM', 'admin1', '2016-11-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Fullname` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` char(40) NOT NULL,
  `Email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Fullname`, `Username`, `Password`, `Email`) VALUES
('anissa risqi', 'icha', 'icha123', 'annisarisqi@yahoo.com'),
('Ayunda Pratiwi', 'yunda', '123456', 'ayunda@gmail.com'),
('fitasari', 'fita', '123456', 'fitasari1994@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Ns_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`Ts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `User_id` int(18) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10000047;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Ns_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `Ts_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
