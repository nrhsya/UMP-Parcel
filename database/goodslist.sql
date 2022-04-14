-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 08:17 PM
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
-- Table structure for table `goodslist`
--

CREATE TABLE `goodslist` (
  `goodsListID` varchar(10) NOT NULL,
  `stud_ID` varchar(10) NOT NULL,
  `goods_ID` varchar(10) NOT NULL,
  `goods_status` varchar(30) NOT NULL,
  `goods_collectedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goodslist`
--

INSERT INTO `goodslist` (`goodsListID`, `stud_ID`, `goods_ID`, `goods_status`, `goods_collectedDate`) VALUES
('GL01', 'CB19061', 'GD05', 'Collected', '2021-06-10'),
('GL02', 'CB19076', 'GD01', 'Ready For Collection', '2021-05-08'),
('GL03', 'CB19079', 'GD02', 'Ready For Collection', '2021-05-20'),
('GL04', 'CB19084', 'GD03', 'Ready For Collection', '2021-04-09'),
('GL05', 'CB19088', 'GD04', 'Ready For Collection', '2021-05-22'),
('GL06', 'CB19058', 'GD06', 'Collected', '2021-06-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goodslist`
--
ALTER TABLE `goodslist`
  ADD PRIMARY KEY (`goodsListID`),
  ADD UNIQUE KEY `stu_id` (`stud_ID`),
  ADD UNIQUE KEY `goodsID` (`goods_ID`),
  ADD UNIQUE KEY `stud_ID` (`stud_ID`),
  ADD UNIQUE KEY `goods_ID` (`goods_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
