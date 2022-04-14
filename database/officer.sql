-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 05:25 PM
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
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `officer_ID` varchar(10) NOT NULL,
  `officer_name` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `officer_phonenum` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`officer_ID`, `officer_name`, `user_type`, `officer_phonenum`, `password`, `date_created`) VALUES
('OF10054', 'SARAH BINTI RAMLI', 'officer', '012345678', 'sarahramli', '2021-06-11 23:19:13'),
('OF10074', 'KHAIRUL BIN HARRIS', 'officer', '012345678', 'khairul123', '2021-06-11 23:19:13'),
('OF10076', 'AMIN BIN IDRIS', 'officer', '012345678', 'aminidris', '2021-06-11 23:19:13'),
('OF12345', 'Praavin Raj', 'officer', '01112457778', 'praavin', '2021-06-11 23:21:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`officer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
