-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 10:11 PM
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
-- Table structure for table `formbtgk`
--

CREATE TABLE `formbtgk` (
  `fullname` varchar(99) NOT NULL,
  `no_ic` varchar(99) NOT NULL,
  `semester` varchar(99) NOT NULL,
  `no_matrik` varchar(99) NOT NULL,
  `prog` varchar(99) NOT NULL,
  `tel_no` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `poskod` varchar(99) NOT NULL,
  `daerah` varchar(99) NOT NULL,
  `add_kursus` varchar(99) NOT NULL,
  `del_kursus` varchar(99) NOT NULL,
  `jam_kredit` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formbtgk`
--

INSERT INTO `formbtgk` (`fullname`, `no_ic`, `semester`, `no_matrik`, `prog`, `tel_no`, `email`, `poskod`, `daerah`, `add_kursus`, `del_kursus`, `jam_kredit`) VALUES
('Student1', '020101121111', '5', 'KYS211DDWD0001', 'DDWD', '0123456789', 'Student1@email.com', '88200', '', 'WP', 'SD', '18');

-- --------------------------------------------------------

--
-- Table structure for table `formbtp`
--

CREATE TABLE `formbtp` (
  `fullname` varchar(99) NOT NULL,
  `no_ic` varchar(99) NOT NULL,
  `semester` varchar(99) NOT NULL,
  `no_matrik` varchar(99) NOT NULL,
  `prog` varchar(99) NOT NULL,
  `tel_no` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `student_png` varchar(99) NOT NULL,
  `student_pngk` varchar(99) NOT NULL,
  `level_pengajian` varchar(99) NOT NULL,
  `parent_name` varchar(99) NOT NULL,
  `bil_tangguh` varchar(99) NOT NULL,
  `poskod` varchar(99) NOT NULL,
  `daerah` varchar(99) NOT NULL,
  `negeri` varchar(99) NOT NULL,
  `sebab` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formbtp`
--

INSERT INTO `formbtp` (`fullname`, `no_ic`, `semester`, `no_matrik`, `prog`, `tel_no`, `email`, `student_png`, `student_pngk`, `level_pengajian`, `parent_name`, `bil_tangguh`, `poskod`, `daerah`, `negeri`, `sebab`) VALUES
('Student1', '020101121111', '5', 'KYS211DDWD0001', 'DDWD', '0123456789', 'Student1@email.com', '2.5', '2.5', 'S5', 'Parent Name', '1', '88200', 'Kota Kinabalu', 'SBH', 'MK');

-- --------------------------------------------------------

--
-- Table structure for table `formtarikdiri`
--

CREATE TABLE `formtarikdiri` (
  `fullname` varchar(99) NOT NULL,
  `no_ic` varchar(99) NOT NULL,
  `semester` varchar(99) NOT NULL,
  `no_matrik` varchar(99) NOT NULL,
  `prog` varchar(99) NOT NULL,
  `tel_no` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `student_png` varchar(99) NOT NULL,
  `student_pngk` varchar(99) NOT NULL,
  `jam_kredit` varchar(99) NOT NULL,
  `course1` varchar(99) NOT NULL,
  `course2` varchar(99) NOT NULL,
  `course3` varchar(99) NOT NULL,
  `course4` varchar(99) NOT NULL,
  `baki_kredit` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formtarikdiri`
--

INSERT INTO `formtarikdiri` (`fullname`, `no_ic`, `semester`, `no_matrik`, `prog`, `tel_no`, `email`, `student_png`, `student_pngk`, `jam_kredit`, `course1`, `course2`, `course3`, `course4`, `baki_kredit`) VALUES
('Student1', '020101121111', '5', 'KYS211DDWD0001', 'DDWD', '0123456789', 'Student1@email.com', '2.5', '2.5', '18', 'CM', 'WP', 'NOT', 'NOT', '12');

-- --------------------------------------------------------

--
-- Table structure for table `studentfeedback`
--

CREATE TABLE `studentfeedback` (
  `student_name` varchar(99) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentfeedback`
--

INSERT INTO `studentfeedback` (`student_name`, `feedback`) VALUES
('Student1', 'hfd'),
('Student2', 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `studentID` varchar(14) NOT NULL,
  `student_name` varchar(50) NOT NULL,
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

INSERT INTO `studentinfo` (`studentID`, `student_name`, `ic_num`, `program`, `phone_num`, `course`, `address`, `academic_advisor`) VALUES
('kys211ddwd0001', 'Student1', '020101120001', 'UTM FRANCHISE PROGRAMS', '0123456789', 'DIPLOMA SAINS KOMPUTER', 'Jalan Ibu Pejabat Jkr, Sembulan, 88100 Kota Kinabalu, Sabah', 'SITI NORAFIKAH BINTI SAMIUN'),
('kys211ddwd0002', 'Student2', '020202120002', 'UTM FRANCHISE PROGRAMS', '0134567892', 'DIPLOMA SAINS KOMPUTER', 'Jalan Ibu Pejabat Jkr, Sembulan, 88100 Kota Kinabalu, Sabah', 'SITI NORAFIKAH BINTI SAMIUN');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `studentID` varchar(14) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`studentID`, `username`, `password`) VALUES
('kys211ddwd0001', 'Student1', '123456'),
('kys211ddwd0002', 'Student2', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `studentresults`
--

CREATE TABLE `studentresults` (
  `student_name` varchar(99) NOT NULL,
  `semester` varchar(99) NOT NULL,
  `kod` varchar(99) NOT NULL,
  `subjek` varchar(99) NOT NULL,
  `gred` varchar(99) NOT NULL,
  `gpa` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentresults`
--

INSERT INTO `studentresults` (`student_name`, `semester`, `kod`, `subjek`, `gred`, `gpa`) VALUES
('Student1', '1', 'DDWD2483', 'DATABASE', 'C', '2'),
('Student2', '2', 'DDWD2623', 'OBJECT ORIENTED PROGRAMMING USING JAVA', 'C', '2'),
('Student1', '3', 'DDWD2733', 'DATA STRUCTURE AND ALGORITHMS', 'B', '3'),
('Student2', '4', 'DDWD2483', 'DATABASE', 'B', '3'),
('Student2', '5', 'DDWD2623', 'OBJECT ORIENTED PROGRAMMING USING JAVA', 'A', '4'),
('Student2', '6', 'DDWD2623', 'OBJECT ORIENTED PROGRAMMING USING JAVA', 'A', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD KEY `studentID_fk` (`studentID`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`studentID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD CONSTRAINT `studentinfo_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `studentlogin` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
