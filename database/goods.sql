-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 03:39 PM
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
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `goods_ID` varchar(10) NOT NULL,
  `goods_type` varchar(10) NOT NULL,
  `goods_status` varchar(30) NOT NULL,
  `goods_arrive_date` date NOT NULL,
  `goods_collect_date` date NOT NULL,
  `goods_sender_info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`goods_ID`, `goods_type`, `goods_status`, `goods_arrive_date`, `goods_collect_date`, `goods_sender_info`) VALUES
('G001', 'Parcel', 'Received', '2021-06-08', '2021-06-15', 'Ninjavan'),
('G002', 'Mail', 'Collected', '2021-05-03', '2021-05-11', 'Ninjavan'),
('G003', 'Mail', 'Collected', '2021-01-11', '2021-01-26', 'Pos Laju'),
('G004', 'Parcel', 'Collected', '2021-04-13', '2021-04-21', 'Ninjavan'),
('G005', 'Parcel', 'Collected', '2021-02-16', '2021-02-24', 'Pos Laju'),
('G006', 'Parcel', 'Collected', '2021-01-12', '2021-01-27', 'Pos Laju'),
('G007', 'Parcel', 'Received', '2021-06-08', '2021-06-10', 'Ninjavan'),
('G008', 'Mail', 'Collected', '2021-06-14', '2021-06-22', 'J&T'),
('G009', 'Parcel', 'Collected', '2021-06-21', '2021-06-30', 'J&T'),
('G048', 'Parcel', 'Collected', '2021-03-08', '2021-03-15', 'J&T'),
('G056', 'Mail', 'Collected', '2021-04-19', '2021-04-21', 'Ninjavan'),
('G116', 'Mail', 'Collected', '2021-06-08', '2021-06-25', 'J&T'),
('G117', 'Parcel', 'Received', '2021-03-01', '2021-03-17', 'J&T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
