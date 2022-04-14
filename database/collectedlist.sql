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
-- Table structure for table `collectedlist`
--

CREATE TABLE `collectedlist` (
  `collectedListID` varchar(10) NOT NULL,
  `goods_ID` varchar(10) NOT NULL,
  `stud_ID` varchar(10) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `goods_collect_date` date NOT NULL,
  `goods_status` varchar(30) NOT NULL,
  `goods_status_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collectedlist`
--

INSERT INTO `collectedlist` (`collectedListID`, `goods_ID`, `stud_ID`, `stud_name`, `goods_collect_date`, `goods_status`, `goods_status_date`) VALUES
('CL000', 'G000', 'CB00000', 'AISHAH', '2021-06-15', 'Ready For Collection', '2021-06-16'),
('CL1', 'G001', 'CB19079', 'NUR HASYA BINTI MOHD NORDIN', '2021-03-08', 'Received', '2021-05-04'),
('CL123', 'GD123', 'CB20014', 'MUHAMMAD IDRIS BIN YAHYA', '2021-06-22', 'Received', '2021-06-30'),
('CL125', 'G116', 'TT20111', 'MUHAMMAD ALI ABIDIN BIN AMRI', '2021-06-21', 'Received', '2021-06-24'),
('CL166', 'G048', 'FF19110', 'NUR ALIA BINTI JAFRI', '2021-06-13', 'Received', '2021-06-22'),
('CL2', 'G002', 'CB19000', 'WARDA BINTI ABDUL GHANI', '2021-05-02', 'Received', '2021-05-02'),
('CL201', 'G117', 'FB20015', 'MUHAMMAD AFWAN BIN ZAMRI', '2021-06-14', 'Ready For Collection', '2021-06-17'),
('CL3', 'G003', 'CA17064', 'SAAFIYYA BINTI MUSSIF', '2021-05-03', 'Ready For Collection', '2021-02-16'),
('CL4', 'G004', 'CD18046', 'UWAIS BIN SALIM', '2021-02-01', 'Received', '2021-04-11'),
('CL5', 'G005', 'AA19105', 'SITI MASTURA BINTI ABDULLAH', '2021-05-02', 'Received', '2021-03-08'),
('CL6', 'G006', 'FB19045', 'NUR AIDA BINTI SAMAD', '2021-03-07', 'Received', '2021-05-02'),
('CL7', 'G007', 'FB18055', 'AMANDA A/P JAYA', '2020-12-14', 'Ready For Collection', '2021-01-05'),
('CL8', 'G008', 'CA17054', 'RAJESH A/L KUMAR', '2021-05-02', 'Ready For Collection', '2021-03-23'),
('CL9', 'G009', 'AA18005', 'HO PENG KEW', '2021-02-21', 'Ready For Collection', '2020-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collectedlist`
--
ALTER TABLE `collectedlist`
  ADD PRIMARY KEY (`collectedListID`),
  ADD KEY `goods_ID` (`goods_ID`,`stud_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
