-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 01:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `studentID` varchar(14) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`studentID`, `username`, `password`) VALUES
('kys211ddwd0001', 'Student1', '123456'),
('kys211ddwd0002', 'Student2', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `studentID` varchar(14) NOT NULL,
  `Kod` varchar(8) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Gred` varchar(1) NOT NULL,
  `GPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`studentID`, `Kod`, `Subjek`, `Gred`, `GPA`) VALUES
('kys211ddwd0001', 'DDWD2483', 'DATABASE', 'C', 2),
('kys211ddwd0001', 'DDWD2623', 'OBJECT ORIENTED PROGRAMMING USING JAVA', 'C', 2),
('kys211ddwd0001', 'DDWD2733', 'DATA STRUCTURE AND ALGORITHMS', 'B', 3),
('kys211ddwd0002', 'DDWD2483', 'DATABASE', 'B', 3),
('kys211ddwd0002', 'DDWD2623', 'OBJECT ORIENTED PROGRAMMING USING JAVA', 'A', 4),
('kys211ddwd0002', 'DDWD2733', 'DATA STRUCTURE AND ALGORITHMS', 'C', 2);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `studentID` varchar(14) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ic_num` varchar(12) NOT NULL,
  `program` varchar(50) NOT NULL,
  `phone_num` varchar(12) NOT NULL,
  `course` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `academic_advisor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`studentID`, `Name`, `ic_num`, `program`, `phone_num`, `course`, `address`, `academic_advisor`) VALUES
('kys211ddwd0001', 'Student1', '020101120001', 'UTM FRANCHISE PROGRAMS', '0123456789', 'DIPLOMA SAINS KOMPUTER', 'Jalan Ibu Pejabat Jkr, Sembulan, 88100 Kota Kinabalu, Sabah', 'SITI NORAFIKAH BINTI SAMIUN'),
('kys211ddwd0002', 'Student2', '020202120002', 'UTM FRANCHISE PROGRAMS', '0134567892', 'DIPLOMA SAINS KOMPUTER', 'Jalan Ibu Pejabat Jkr, Sembulan, 88100 Kota Kinabalu, Sabah', 'SITI NORAFIKAH BINTI SAMIUN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD KEY `studentID_fk` (`studentID`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD KEY `studentID_fk` (`studentID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `login` (`studentID`);

--
-- Constraints for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD CONSTRAINT `studentinfo_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `login` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
