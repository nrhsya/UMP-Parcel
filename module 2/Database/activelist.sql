-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 03:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ump_parcel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activelist`
--

CREATE TABLE `activelist` (
  `activeListID` varchar(10) NOT NULL,
  `stud_ID` varchar(10) NOT NULL,
  `stud_name` varchar(100) NOT NULL,
  `stud_phonenum` varchar(12) NOT NULL,
  `stud_address` varchar(100) NOT NULL,
  `goods_arrive_date` date NOT NULL,
  `goods_type` varchar(10) NOT NULL,
  `goods_collect_date` date NOT NULL,
  `goods_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activelist`
--

INSERT INTO `activelist` (`activeListID`, `stud_ID`, `stud_name`, `stud_phonenum`, `stud_address`, `goods_arrive_date`, `goods_type`, `goods_collect_date`, `goods_status`) VALUES
('1', 'CB19088', 'PRAAVIN RAJ TAMILVANEN', '+60106560410', 'Kolej Kediaman 4', '2021-06-01', 'Parcel', '2021-06-04', 'Collected'),
('2', 'CB19089', 'MUVENTHAN NAGARAJA', '+6012345678', 'Kolej Kediaman 2', '2021-06-03', 'Mail', '2021-06-07', 'Collected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activelist`
--
ALTER TABLE `activelist`
  ADD PRIMARY KEY (`activeListID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
