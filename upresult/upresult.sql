-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 06:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'amal', '21232f297a57a5a743894a0e4a801fc3', '2022-09-04 10:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(64, 'HNDIT 2nd year ', 2019, 'FT', '2022-09-28 15:07:21', NULL),
(66, 'HNDIT 1st Year 1st semi', 2019, 'FT', '2022-10-01 05:22:57', NULL),
(68, 'hnade', 2018, 'Fullt', '2022-10-02 03:37:34', NULL),
(69, 'hnda', 2020, 'FT', '2022-10-02 03:43:04', NULL),
(70, 'Fouth', 2222, 'Fullt', '2022-10-02 03:55:13', NULL),
(71, 'HNDTHM', 2021, 'FT', '2022-10-06 10:58:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `id` int(11) NOT NULL,
  `noticeTitle` varchar(255) DEFAULT NULL,
  `noticeDetails` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`id`, `noticeTitle`, `noticeDetails`, `postingDate`) VALUES
(1, 'Classes Resume', 'Dear Students, The classes will resume from 05-09-2022 (Monday). Students must reach the school in proper uniform as per their arrival time.', '2022-09-04 08:42:47'),
(2, 'Holiday Homework 2022-2023', 'Holiday Homework of Summer vacation 2022 – 2023 has been uploaded and you can download it by clicking on the link.', '2022-09-04 08:43:19'),
(3, 'Saraswathi Poojai ', '04.10.2022', '2022-10-05 03:46:11'),
(4, 'HNDIT 2nd Year 2nd Semester', 'Results Released', '2022-10-05 03:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` varchar(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(1, 1, 1, 2, '89', '2022-09-04 08:41:18', NULL),
(2, 1, 1, 3, '87', '2022-09-04 08:41:18', NULL),
(3, 1, 1, 5, '66', '2022-09-04 08:41:18', NULL),
(4, 1, 1, 1, '78', '2022-09-04 08:41:18', NULL),
(5, 1, 1, 4, '90', '2022-09-04 08:41:18', NULL),
(6, 3, 1, 2, '80', '2022-09-04 09:56:54', NULL),
(7, 3, 1, 3, '66', '2022-09-04 09:56:54', NULL),
(8, 3, 1, 5, '87', '2022-09-04 09:56:54', NULL),
(9, 3, 1, 1, '76', '2022-09-04 09:56:54', NULL),
(10, 3, 1, 4, '55', '2022-09-04 09:56:54', NULL),
(11, 4, 64, 14, '3.0', '2022-09-29 06:07:10', NULL),
(12, 4, 64, 13, '2.70', '2022-09-29 06:07:10', NULL),
(13, 4, 64, 12, '3.0', '2022-09-29 06:07:10', NULL),
(14, 4, 64, 16, '4.0', '2022-09-29 06:07:10', NULL),
(15, 4, 64, 7, '0', '2022-09-29 06:07:10', NULL),
(16, 4, 64, 8, '3.70', '2022-09-29 06:07:10', NULL),
(17, 4, 64, 15, '2.70', '2022-09-29 06:07:10', NULL),
(18, 4, 64, 10, '3.0', '2022-09-29 06:07:10', NULL),
(19, 4, 64, 9, '3.30', '2022-09-29 06:07:10', NULL),
(31, 6, 66, 27, '4.0', '2022-10-01 05:49:53', NULL),
(32, 6, 66, 21, '4.0', '2022-10-01 05:49:53', NULL),
(33, 6, 66, 23, '4.0', '2022-10-01 05:49:53', NULL),
(34, 6, 66, 24, '3.70', '2022-10-01 05:49:53', NULL),
(35, 6, 66, 26, '3.70', '2022-10-01 05:49:53', NULL),
(36, 6, 66, 20, '2.70', '2022-10-01 05:49:53', NULL),
(37, 6, 66, 22, '4.0', '2022-10-01 05:49:53', NULL),
(38, 6, 66, 25, '3.30', '2022-10-01 05:49:53', NULL),
(42, 8, 68, 31, '3.70', '2022-10-02 03:40:32', NULL),
(43, 8, 68, 34, '2.70', '2022-10-02 03:40:32', NULL),
(44, 8, 68, 32, '4.0', '2022-10-02 03:40:32', NULL),
(45, 8, 68, 33, '3.70', '2022-10-02 03:40:32', NULL),
(80, 11, 64, 14, '3.0', '2022-10-03 10:45:57', '2022-10-03 10:45:57'),
(81, 11, 64, 13, '2.70', '2022-10-03 10:45:57', '2022-10-03 10:45:57'),
(82, 11, 64, 12, '3.0', '2022-10-03 10:45:57', '2022-10-03 10:45:57'),
(83, 11, 64, 16, '4.0', '2022-10-03 10:45:57', '2022-10-03 10:45:57'),
(84, 11, 64, 8, '3.70', '2022-10-03 10:45:57', '2022-10-03 10:45:57'),
(85, 11, 64, 15, '2.70', '2022-10-03 10:45:57', '2022-10-03 10:45:57'),
(86, 11, 64, 10, '3.0', '2022-10-03 10:45:57', '2022-10-03 10:45:57'),
(87, 11, 64, 9, '3.30', '2022-10-03 10:45:57', '2022-10-03 10:45:57'),
(88, 14, 64, 14, '4.0', '2022-10-05 06:10:24', '2022-10-05 06:10:24'),
(89, 14, 64, 13, '3.0', '2022-10-05 06:10:24', '2022-10-05 06:10:24'),
(90, 14, 64, 12, '2.70', '2022-10-05 06:10:24', '2022-10-05 06:10:24'),
(91, 14, 64, 16, '3.70', '2022-10-05 06:10:24', '2022-10-05 06:10:24'),
(92, 14, 64, 8, '2.0', '2022-10-05 06:10:24', '2022-10-05 06:10:24'),
(93, 14, 64, 15, '3.30', '2022-10-05 06:10:24', '2022-10-05 06:10:24'),
(94, 14, 64, 10, '3.70', '2022-10-05 06:10:24', '2022-10-05 06:10:24'),
(95, 14, 64, 9, '3.30', '2022-10-05 06:10:24', '2022-10-05 06:10:24'),
(96, 10, 70, 41, '3.0', '2022-10-05 12:26:32', '2022-10-05 12:26:32'),
(97, 10, 70, 39, '4.0', '2022-10-05 12:26:32', '2022-10-05 12:26:32'),
(98, 10, 70, 40, '1.0', '2022-10-05 12:26:32', '2022-10-05 12:26:32'),
(99, 15, 71, 42, '2.0', '2022-10-06 11:03:18', '2022-10-06 11:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `NIC` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`, `NIC`) VALUES
(3, 'Sushant Gopal Varma', '3', 'sushant@gmail.com', 'Male', '1998-09-02', 1, '2022-09-04 09:56:15', NULL, 1, NULL),
(4, 'Showbi', 'BAT/IT/2019/FT/041', 'showbi@gmail.com', 'Female', '1994-12-05', 64, '2022-09-29 03:13:06', NULL, 1, NULL),
(5, 'risna', '031', 'risna@gmail.com', 'Female', '2022-09-30', 65, '2022-09-29 07:06:31', NULL, 1, NULL),
(6, 'Amal', 'BAT/IT/2019/FT/083', 'amal@gmail.com', 'Female', '1999-12-05', 66, '2022-10-01 05:32:08', NULL, 1, NULL),
(8, 'shimla', '011', 'sdfdg@gmail.com', 'Female', '1222-12-12', 68, '2022-10-02 03:40:10', NULL, 1, NULL),
(9, 'risna', '021', 'risna@gmail.com', 'Female', '2000-03-27', 69, '2022-10-02 03:45:19', NULL, 1, NULL),
(10, 'ristha', '010', 'ristha@gmail.com', 'Female', '2000-12-12', 70, '2022-10-02 03:57:06', NULL, 1, NULL),
(11, 'gobi', '066', 'gobi@gmail.com', 'Male', '2000-12-12', 64, '2022-10-03 10:45:09', NULL, 1, NULL),
(14, 'aakif', '038', 'aakif@gmail.com', 'Male', '1999-12-12', 64, '2022-10-05 05:06:25', NULL, 1, '19998401189'),
(15, 'Raja', '001', 'raja@gmail.com', 'Male', '2000-12-12', 71, '2022-10-06 11:00:57', NULL, 1, '1999083445363');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `SubjectCredit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`, `SubjectCredit`) VALUES
(1, 1, 1, 1, '2022-09-04 08:37:16', '2022-09-29 03:00:21', NULL),
(2, 1, 2, 1, '2022-09-04 08:40:16', NULL, NULL),
(3, 1, 3, 1, '2022-09-04 08:40:25', NULL, NULL),
(4, 1, 4, 1, '2022-09-04 08:40:32', NULL, NULL),
(5, 1, 5, 1, '2022-09-04 08:40:40', NULL, NULL),
(6, 63, 6, 1, '2022-09-04 09:55:40', NULL, NULL),
(7, 64, 7, 1, '2022-09-28 15:44:40', NULL, 7),
(8, 64, 8, 1, '2022-09-29 04:34:28', NULL, 8),
(9, 64, 9, 1, '2022-09-29 04:34:42', NULL, 9),
(10, 64, 10, 1, '2022-09-29 04:34:58', NULL, 10),
(11, 64, 12, 1, '2022-09-29 04:35:11', NULL, 12),
(12, 64, 13, 1, '2022-09-29 04:35:20', NULL, 13),
(13, 64, 14, 1, '2022-09-29 04:35:29', NULL, 14),
(14, 64, 15, 1, '2022-09-29 04:35:38', NULL, 15),
(15, 64, 16, 1, '2022-09-29 04:35:46', NULL, 16),
(16, 65, 17, 1, '2022-09-29 07:05:38', NULL, 17),
(17, 65, 18, 1, '2022-09-29 07:05:45', NULL, 18),
(18, 65, 19, 1, '2022-09-29 07:05:52', NULL, 19),
(19, 66, 20, 1, '2022-10-01 05:29:35', NULL, 8),
(20, 66, 21, 1, '2022-10-01 05:29:54', NULL, 21),
(21, 66, 22, 1, '2022-10-01 05:30:08', NULL, 22),
(22, 66, 23, 1, '2022-10-01 05:30:18', NULL, 23),
(23, 66, 24, 1, '2022-10-01 05:30:31', NULL, 24),
(24, 66, 25, 1, '2022-10-01 05:30:41', NULL, 25),
(25, 66, 26, 1, '2022-10-01 05:30:52', NULL, 26),
(26, 66, 27, 1, '2022-10-01 05:30:59', NULL, 27),
(27, 67, 28, 1, '2022-10-01 06:13:21', NULL, 29),
(28, 67, 29, 1, '2022-10-01 06:13:28', NULL, 29),
(29, 67, 30, 1, '2022-10-01 06:13:42', NULL, 29),
(30, 68, 31, 1, '2022-10-02 03:38:50', NULL, 26),
(31, 68, 32, 1, '2022-10-02 03:38:59', NULL, 31),
(32, 68, 33, 1, '2022-10-02 03:39:09', NULL, 8),
(33, 68, 34, 1, '2022-10-02 03:39:19', NULL, 32),
(34, 69, 35, 1, '2022-10-02 03:44:11', NULL, 32),
(35, 69, 36, 1, '2022-10-02 03:44:20', NULL, 32),
(36, 69, 37, 1, '2022-10-02 03:44:33', NULL, 32),
(37, 69, 38, 1, '2022-10-02 03:44:40', NULL, 32),
(38, 70, 39, 1, '2022-10-02 03:56:13', NULL, 32),
(39, 70, 40, 1, '2022-10-02 03:56:22', NULL, 32),
(40, 70, 41, 1, '2022-10-02 03:56:31', NULL, 32),
(41, 71, 42, 1, '2022-10-06 10:59:26', NULL, 32);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp(),
  `SubjectCredit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`, `SubjectCredit`) VALUES
(8, 'Operating Systems and Computer Security', 'HNDIT23012', '2022-09-29 04:29:00', NULL, '2'),
(9, 'Project Management', 'HNDIT23022', '2022-09-29 04:30:16', NULL, '2'),
(10, 'Principles of Management and Applied Economics', 'HNDIT23032', '2022-09-29 04:30:52', NULL, '2'),
(11, 'Principles of Management and Applied Economics', 'HNDIT23032', '2022-09-29 04:31:02', NULL, '2'),
(12, 'Mini Project', 'HNDIT23051', '2022-09-29 04:31:50', NULL, '1'),
(13, 'Communication Skills III', 'HNDIT23061', '2022-09-29 04:32:13', NULL, '1'),
(14, '	 Rapid Application Development', 'HNDIT23073', '2022-09-29 04:32:48', NULL, '3'),
(15, 'Principals of Software Engineering', 'HNDIT23082', '2022-09-29 04:33:15', NULL, '2'),
(16, 'Object Oriented Analysis and Design', 'HNDIT23093', '2022-09-29 04:33:40', NULL, '3'),
(20, 'Personal Computer Applications', 'HNDIT11012', '2022-10-01 05:25:41', NULL, '2'),
(21, 'Computer Hardware', 'HNDIT11023', '2022-10-01 05:26:10', NULL, '3'),
(22, 'Structured Programming', 'HNDIT11034', '2022-10-01 05:26:41', NULL, '4'),
(23, 'Data Representation and Organization', 'HNDIT11042', '2022-10-01 05:27:08', NULL, '2'),
(24, 'Database Management Systems', 'HNDIT11052', '2022-10-01 05:27:38', NULL, '2'),
(25, 'Web Development', 'HNDIT11062', '2022-10-01 05:28:08', NULL, '2'),
(26, 'Mathematics for Computing', 'HNDIT11072', '2022-10-01 05:28:38', NULL, '2'),
(27, 'Communication Skills I', 'HNDIT11081', '2022-10-01 05:29:01', NULL, '1'),
(31, 'english', '1113', '2022-10-02 03:37:48', NULL, '4'),
(32, 'phonics', '3333', '2022-10-02 03:38:01', NULL, '3'),
(33, 'presentation', '333', '2022-10-02 03:38:17', NULL, '2'),
(34, 'listening', '3333', '2022-10-02 03:38:32', NULL, '2'),
(35, 'Account', '111', '2022-10-02 03:43:21', NULL, '2'),
(36, 'economic', '2222', '2022-10-02 03:43:32', NULL, '3'),
(37, 'business', '333', '2022-10-02 03:43:49', NULL, '2'),
(38, 'It', '444', '2022-10-02 03:43:57', NULL, '3'),
(39, 'economic', '3333', '2022-10-02 03:55:26', NULL, '2'),
(40, 'IT', '1111', '2022-10-02 03:55:38', NULL, '2'),
(41, 'business', '1112', '2022-10-02 03:55:50', NULL, '2'),
(42, 'IT1', 'THM1053', '2022-10-06 10:59:00', '2022-10-06 10:59:00', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
