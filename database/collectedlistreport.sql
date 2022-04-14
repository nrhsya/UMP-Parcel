-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 09:31 PM
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
-- Table structure for table `collectedlistreport`
--

CREATE TABLE `collectedlistreport` (
  `collectedListReportID` varchar(10) NOT NULL,
  `collectedListID` varchar(10) NOT NULL,
  `stud_ID` varchar(10) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `goods_status` varchar(30) NOT NULL,
  `total_goods` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collectedlistreport`
--

INSERT INTO `collectedlistreport` (`collectedListReportID`, `collectedListID`, `stud_ID`, `stud_name`, `goods_status`, `total_goods`) VALUES
('CR01', 'CL1', 'CB19079', 'NUR HASYA BINTI MOHD NORDIN', 'Received', 4),
('CR02', 'CL3', 'CA17064', 'SAAFIYYA BINTI MUSSIF', 'Received', 7),
('CR03', 'CL125', 'TT20111', 'MUHAMMAD ALI ABIDIN BIN AMRI', 'Received', 12),
('CR04', 'CL166', 'FF19110', 'NUR ALIA BINTI JAFRI', 'Received', 3),
('CR05', 'CL4', 'CD18046', 'UWAIS BIN SALIM', 'Received', 2),
('CR06', 'CL2', 'CB19000', 'WARDA BINTI ABDUL GHANI', 'Received', 2),
('CR07', 'CL201', 'FB20015', 'MUHAMMAD AFWAN BIN ZAMRI', 'Ready For Collection', 8),
('CR08', 'CL5', 'AA19105', 'SITI MASTURA BINTI ABDULLAH', 'Received', 2),
('CR12', 'CL56', 'CB16045', 'ALI BIN AHMAD', 'Received', 13),
('CR15', 'CL6', 'FB19045', 'NUR AIDA BINTI SAMAD', 'Received', 4),
('CR23', 'CL7', 'FB18055', 'AMANDA A/P JAYA', 'Ready For Collection', 11),
('CR24', 'CL8', 'CA17054', 'RAJESH A/L KUMAR', 'Ready For Collection', 5),
('CR35', 'CL9', 'AA18005', 'HO PENG KEW', 'Ready For Collection', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collectedlistreport`
--
ALTER TABLE `collectedlistreport`
  ADD PRIMARY KEY (`collectedListReportID`),
  ADD KEY `collectedListID` (`collectedListID`,`stud_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
