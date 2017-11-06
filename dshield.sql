-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 06:50 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dshield`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bldhlp`
--

CREATE TABLE `tbl_bldhlp` (
  `BldHlpID` bigint(20) NOT NULL,
  `PatName` varchar(100) DEFAULT NULL,
  `PatAge` tinyint(4) DEFAULT NULL,
  `PatBldGrp` char(4) DEFAULT NULL,
  `PatArea` varchar(100) DEFAULT NULL,
  `PatZipCd` varchar(20) DEFAULT NULL,
  `PatHospName` varchar(50) DEFAULT NULL,
  `PatState` varchar(100) DEFAULT NULL,
  `PatCity` varchar(100) DEFAULT NULL,
  `PatRelName` varchar(100) DEFAULT NULL,
  `PatRelMobNum` bigint(20) DEFAULT NULL,
  `GenOTP` int(11) DEFAULT NULL,
  `ActiveStat` tinyint(4) NOT NULL DEFAULT '0',
  `InsDateTime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bldhlp`
--

INSERT INTO `tbl_bldhlp` (`BldHlpID`, `PatName`, `PatAge`, `PatBldGrp`, `PatArea`, `PatZipCd`, `PatHospName`, `PatState`, `PatCity`, `PatRelName`, `PatRelMobNum`, `GenOTP`, `ActiveStat`, `InsDateTime`) VALUES
(8, 'test Test', 29, 'O+', 'Test', 'Test', 'Test', 'Madhya Pradesh', 'Mumbai', 'TEST ETST', 9911001100, 523110, 1, '2017-10-21 09:34:14'),
(13, 'vaibhav bhat', 20, 'B+', 'test2', 'test2', 'test', 'Kerala', 'test', 'check', 9876543212, 455187, 1, '2017-10-25 01:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msnhlp`
--

CREATE TABLE `tbl_msnhlp` (
  `id` int(11) NOT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `MsnName` varchar(50) DEFAULT NULL,
  `MsnDate` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `MArea` varchar(50) DEFAULT NULL,
  `Specifications` varchar(200) DEFAULT NULL,
  `ContFName` varchar(100) DEFAULT NULL,
  `MobNum` bigint(20) DEFAULT NULL,
  `ActiveStat` int(1) DEFAULT NULL,
  `GenOTP` int(6) DEFAULT NULL,
  `TimeInstance` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_msnhlp`
--

INSERT INTO `tbl_msnhlp` (`id`, `Category`, `MsnName`, `MsnDate`, `State`, `City`, `MArea`, `Specifications`, `ContFName`, `MobNum`, `ActiveStat`, `GenOTP`, `TimeInstance`) VALUES
(10, 'dsfghdnhd', 'dsgfhndfh', '2017-10-12', 'dsfghjyhdb', 'adgfhnfd b', 'sfhfsbsv', 'dsfghjndgbf', 'adfsgdhfn', 9988776655, 1, 179870, '2017-10-29 02:37:11'),
(9, 'check', 'test', '2017-10-07', 'testt', 'testtt', 'testbsg', 'test', 'dgsgfsbbsv', 9988776655, 0, 419812, '2017-10-29 02:35:27'),
(8, 'Check', 'Always', '2017-10-18', 'check', 'check', 'check', 'Test', 'Yaman', 9922003344, 1, 263119, '2017-10-29 02:29:20'),
(7, 'Personal', 'Fella', '2017-10-19', 'Random', 'Random', 'Random', 'Nice Fella', 'Vaibhav Bhat', 9819014326, 1, 327966, '2017-10-28 13:15:27'),
(6, '$Category', '$NameDetails', '$Date', '$State', '$City', '$Area', '$SpecDesc', '$FName', 9920118778, 0, 262123, '2017-10-28 11:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trvlhlp`
--

CREATE TABLE `tbl_trvlhlp` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Age` int(9) DEFAULT NULL,
  `TDate` varchar(50) DEFAULT NULL,
  `FrAirport` varchar(50) DEFAULT NULL,
  `ToAirport` varchar(50) DEFAULT NULL,
  `Airline` varchar(50) DEFAULT NULL,
  `FlightNo` varchar(100) DEFAULT NULL,
  `RelFullName` varchar(10) DEFAULT NULL,
  `RelContact` bigint(20) DEFAULT NULL,
  `GenOTP` bigint(20) DEFAULT NULL,
  `ActivStat` int(1) DEFAULT NULL,
  `InstDateTime` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trvlhlp`
--

INSERT INTO `tbl_trvlhlp` (`id`, `FullName`, `Age`, `TDate`, `FrAirport`, `ToAirport`, `Airline`, `FlightNo`, `RelFullName`, `RelContact`, `GenOTP`, `ActivStat`, `InstDateTime`) VALUES
(1, '$fullname', 21, '$traveldate', '$travelfrom', '$travelto', '$airline', '$flight', '$rfullname', 9900990099, 333321, 0, '2017-11-02 03:36:06'),
(2, 'Vaibhav', 12, '2017-11-28', 'BOM', 'DEL', 'GoAir', 'E102', 'Bhat', 9920118778, 466751, 0, '2017-11-02 03:39:15');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vtbl_bldhlp`
-- (See below for the actual view)
--
CREATE TABLE `vtbl_bldhlp` (
`BldHlpID` bigint(20)
,`PatName` varchar(100)
,`PatAge` tinyint(4)
,`PatBldGrp` char(4)
,`PatArea` varchar(100)
,`PatZipCd` varchar(20)
,`PatHospName` varchar(50)
,`PatState` varchar(100)
,`PatCity` varchar(100)
,`PatRelName` varchar(100)
,`PatRelMobNum` bigint(20)
,`GenOTP` int(11)
,`ActiveStat` tinyint(4)
,`InsDateTime` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vtbl_msnhlp`
-- (See below for the actual view)
--
CREATE TABLE `vtbl_msnhlp` (
`id` int(11)
,`Category` varchar(50)
,`MsnName` varchar(50)
,`MsnDate` varchar(50)
,`State` varchar(50)
,`City` varchar(50)
,`MArea` varchar(50)
,`Specifications` varchar(200)
,`ContFName` varchar(100)
,`MobNum` bigint(20)
,`ActiveStat` int(1)
,`GenOTP` int(6)
,`TimeInstance` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vtbl_trvlhlp`
-- (See below for the actual view)
--
CREATE TABLE `vtbl_trvlhlp` (
`id` int(11)
,`FullName` varchar(100)
,`Age` int(9)
,`TDate` varchar(50)
,`FrAirport` varchar(50)
,`ToAirport` varchar(50)
,`Airline` varchar(50)
,`FlightNo` varchar(100)
,`RelFullName` varchar(10)
,`RelContact` bigint(20)
,`GenOTP` bigint(20)
,`ActivStat` int(1)
,`InstDateTime` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `vtbl_bldhlp`
--
DROP TABLE IF EXISTS `vtbl_bldhlp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtbl_bldhlp`  AS  select `tbl_bldhlp`.`BldHlpID` AS `BldHlpID`,`tbl_bldhlp`.`PatName` AS `PatName`,`tbl_bldhlp`.`PatAge` AS `PatAge`,`tbl_bldhlp`.`PatBldGrp` AS `PatBldGrp`,`tbl_bldhlp`.`PatArea` AS `PatArea`,`tbl_bldhlp`.`PatZipCd` AS `PatZipCd`,`tbl_bldhlp`.`PatHospName` AS `PatHospName`,`tbl_bldhlp`.`PatState` AS `PatState`,`tbl_bldhlp`.`PatCity` AS `PatCity`,`tbl_bldhlp`.`PatRelName` AS `PatRelName`,`tbl_bldhlp`.`PatRelMobNum` AS `PatRelMobNum`,`tbl_bldhlp`.`GenOTP` AS `GenOTP`,`tbl_bldhlp`.`ActiveStat` AS `ActiveStat`,`tbl_bldhlp`.`InsDateTime` AS `InsDateTime` from `tbl_bldhlp` ;

-- --------------------------------------------------------

--
-- Structure for view `vtbl_msnhlp`
--
DROP TABLE IF EXISTS `vtbl_msnhlp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtbl_msnhlp`  AS  select `tbl_msnhlp`.`id` AS `id`,`tbl_msnhlp`.`Category` AS `Category`,`tbl_msnhlp`.`MsnName` AS `MsnName`,`tbl_msnhlp`.`MsnDate` AS `MsnDate`,`tbl_msnhlp`.`State` AS `State`,`tbl_msnhlp`.`City` AS `City`,`tbl_msnhlp`.`MArea` AS `MArea`,`tbl_msnhlp`.`Specifications` AS `Specifications`,`tbl_msnhlp`.`ContFName` AS `ContFName`,`tbl_msnhlp`.`MobNum` AS `MobNum`,`tbl_msnhlp`.`ActiveStat` AS `ActiveStat`,`tbl_msnhlp`.`GenOTP` AS `GenOTP`,`tbl_msnhlp`.`TimeInstance` AS `TimeInstance` from `tbl_msnhlp` ;

-- --------------------------------------------------------

--
-- Structure for view `vtbl_trvlhlp`
--
DROP TABLE IF EXISTS `vtbl_trvlhlp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtbl_trvlhlp`  AS  select `tbl_trvlhlp`.`id` AS `id`,`tbl_trvlhlp`.`FullName` AS `FullName`,`tbl_trvlhlp`.`Age` AS `Age`,`tbl_trvlhlp`.`TDate` AS `TDate`,`tbl_trvlhlp`.`FrAirport` AS `FrAirport`,`tbl_trvlhlp`.`ToAirport` AS `ToAirport`,`tbl_trvlhlp`.`Airline` AS `Airline`,`tbl_trvlhlp`.`FlightNo` AS `FlightNo`,`tbl_trvlhlp`.`RelFullName` AS `RelFullName`,`tbl_trvlhlp`.`RelContact` AS `RelContact`,`tbl_trvlhlp`.`GenOTP` AS `GenOTP`,`tbl_trvlhlp`.`ActivStat` AS `ActivStat`,`tbl_trvlhlp`.`InstDateTime` AS `InstDateTime` from `tbl_trvlhlp` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bldhlp`
--
ALTER TABLE `tbl_bldhlp`
  ADD PRIMARY KEY (`BldHlpID`,`ActiveStat`);

--
-- Indexes for table `tbl_msnhlp`
--
ALTER TABLE `tbl_msnhlp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_trvlhlp`
--
ALTER TABLE `tbl_trvlhlp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bldhlp`
--
ALTER TABLE `tbl_bldhlp`
  MODIFY `BldHlpID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_msnhlp`
--
ALTER TABLE `tbl_msnhlp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_trvlhlp`
--
ALTER TABLE `tbl_trvlhlp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
