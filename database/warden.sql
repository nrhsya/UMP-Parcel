-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 05:26 PM
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
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `warden_ID` varchar(10) NOT NULL,
  `warden_name` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `warden_phonenum` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`warden_ID`, `warden_name`, `user_type`, `warden_phonenum`, `password`, `date_created`) VALUES
('WD19079', 'NUR HASYA', 'warden', '01114909117', 'hasya123', '2021-06-11 15:19:10'),
('WR10054', 'FATIMAH BINTI ZAHIR', 'warden', '012345678', 'fatimahzahir', '2021-06-11 15:16:10'),
('WR10074', 'RAHMAN BIN ALI', 'warden', '012345678', 'rahmanali', '2021-06-11 15:16:10'),
('WR10076', 'KHIR BIN AHMAD', 'warden', '012345678', 'khirahmad', '2021-06-11 15:16:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`warden_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
