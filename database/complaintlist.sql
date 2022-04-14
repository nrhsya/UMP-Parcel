-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 06:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ump-parcel`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_ID` int(10) NOT NULL,
  `stud_ID` varchar(10) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `complaint_type` varchar(30) NOT NULL,
  `complaint_desc` varchar(100) NOT NULL,
  `complaint_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_ID`, `stud_ID`, `stud_name`, `complaint_type`, `complaint_desc`, `complaint_status`) VALUES
(1, 'CB19058', 'NURAQILA BINTI ROHANAN', 'Lost Item', 'cannot find the goods during retrieval of goods', 'Solved'),
(2, 'CB19079', 'NUR HASYA BINTI MOHD NORDIN', 'Damaged Item', ' Goods totally damage       \r\n        ', 'Pending'),
(3, 'CB19076', 'NURIN AMANI ATHIRAH BINTI RADZ', 'Damaged Item', 'partially damage goods        \r\n        ', 'Solved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_ID`),
  ADD UNIQUE KEY `stud_ID` (`stud_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
