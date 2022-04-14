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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_ID` varchar(10) NOT NULL,
  `goods_ID` varchar(10) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `stud_phonenum` varchar(20) NOT NULL,
  `stud_address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_ID`, `goods_ID`, `stud_name`, `user_type`, `stud_phonenum`, `stud_address`, `password`, `date_created`) VALUES
('AA18005', 'G009', 'HO PENG KEW', 'student', '0133346579', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'hopengkew123', '2021-06-11 15:13:07'),
('AA19105', 'G005', 'SITI MASTURA BINTI ABDULLAH', 'student', '01222245854', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'mastura000', '2021-06-11 15:13:07'),
('CA17054', 'G008', 'RAJESH A/L KUMAR', 'student', '0122245768', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'rajeshkumar', '2021-06-11 15:13:07'),
('CA17064', 'G003', 'SAAFIYYA BINTI MUSSIF', 'student', '01114578411', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'saafiyya', '2021-06-11 15:13:07'),
('CB16045', 'G056', 'ALI BIN AHMAD', 'student', '01114325689', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'aliahmad', '2021-06-11 15:13:07'),
('CB19000', 'G002', 'WARDA BINTI ABDUL GHANI', 'student', '013356820', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'warda123', '2021-06-11 15:13:07'),
('CB19058', 'G027', 'NURAQILA BINTI ROHANAN', 'student', '012345678', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'aqila000', '2021-06-11 15:13:07'),
('CB19076', 'G015', 'NURIN AMANI ATHIRAH BINTI RADZUAN', 'student', '0175288572', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'amani123', '2021-06-11 15:13:07'),
('CB19079', 'G001', 'NUR HASYA BINTI MOHD NORDIN', 'student', '012345678', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'hasya123', '2021-06-11 15:13:07'),
('CD18046', 'G004', 'UWAIS BIN SALIM', 'student', '0132223566', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'uwaissalim', '2021-06-11 15:13:07'),
('FB18055', 'G007', 'AMANDA A/P JAYA', 'student', '0172224681', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'amandaa', '2021-06-11 15:13:07'),
('FB19045', 'G006', 'NUR AIDA BINTI SAMAD', 'student', '0122234655', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'aidasamad', '2021-06-11 15:13:07'),
('FB20015', 'G117', 'MUHAMMAD AFWAN BIN ZAMRI', 'student', '0133246855', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'afwanzamri', '2021-06-11 15:13:07'),
('FF19110', 'G048', 'NUR ALIA BINTI JAFRI', 'student', '01114200134', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'aliajafri', '2021-06-11 15:13:07'),
('TT20111', 'G116', 'MUHAMMAD ALI ABIDIN BIN AMRI', 'student', '0124445736', 'Universiti Malaysia Pahang, 26600 Pekan, Pahang', 'abidinamri', '2021-06-11 15:13:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_ID`),
  ADD UNIQUE KEY `goods_ID` (`goods_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
