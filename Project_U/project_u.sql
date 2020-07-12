-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 02:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_u`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(30) DEFAULT NULL,
  `admin_id` varchar(30) NOT NULL,
  `admin_pass` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_id`, `admin_pass`) VALUES
('Rifath', 'NUB160100981', '113c4baf113f217245b7b01f73d65ec3'),
('Nishan', 'NUB160100966', '46eaf2b9493694aea801acdba1fd7100'),
('Anha', 'NUB160100964', '72545f3f86fad045a26ed54abd2bbb9f'),
('Mehedi', 'NUB160100973', '049c7b8941046c003a58aa441adc16dd');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_storage`
--

CREATE TABLE `attendance_storage` (
  `date` varchar(30) NOT NULL,
  `course_info` varchar(40) NOT NULL,
  `student_id` varchar(12) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `semester_code` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_storage`
--

INSERT INTO `attendance_storage` (`date`, `course_info`, `student_id`, `status`, `semester_code`) VALUES
('17-11-24', 'Stance A', '10000', NULL, '317'),
('17-11-24', 'Stance A', '16015', 1, '317'),
('17-11-24', 'Stance A', '18002', 1, '317'),
('17-11-25', 'Stance A', '10000', NULL, '317'),
('17-11-25', 'Stance A', '16015', 1, '317'),
('17-11-25', 'Stance A', '18002', NULL, '317'),
('17-11-25', 'Stance B', '15001', NULL, '317'),
('17-11-25', 'Stance B', '18001', 1, '317'),
('17-11-25', 'Leave A', '1001', 1, '317'),
('17-11-25', 'Leave A', '10000', NULL, '317'),
('17-11-25', 'Leave A', '15004', 1, '317'),
('17-11-25', 'Leave A', '16015', 1, '317'),
('17-11-25', 'Leave A', '18002', NULL, '317'),
('17-11-25', 'Flipper B', '15001', NULL, '317'),
('17-11-25', 'Flipper B', '15003', 1, '317'),
('17-11-25', 'Flipper B', '15004', 1, '317'),
('17-11-25', 'Flipper B', '16021', 1, '317'),
('17-11-25', 'Beamer A', '10000', 1, '317'),
('17-11-25', 'Beamer A', '1001', 1, '317'),
('17-11-25', 'Beamer A', '16015', 1, '317'),
('17-11-25', 'Flipper A', '10000', NULL, '317'),
('17-11-25', 'Flipper A', '1001', NULL, '317'),
('17-11-25', 'Flipper A', '16015', NULL, '317'),
('17-11-25', 'Leave B', '15001', 1, '317'),
('17-11-25', 'Leave B', '15003', 1, '317'),
('17-11-25', 'Leave B', '16021', 1, '317'),
('17-11-25', 'Forward and back A', '10000', NULL, '317'),
('17-11-25', 'Forward and back A', '1001', NULL, '317'),
('17-11-25', 'Forward and back A', '15004', NULL, '317'),
('17-11-25', 'Forward and back A', '16015', NULL, '317'),
('17-11-25', 'Forward and back A', '16021', NULL, '317'),
('17-11-25', 'Forward and back A', '18001', NULL, '317'),
('17-11-25', 'Glance B', '15001', NULL, '317'),
('17-11-25', 'Glance B', '15004', NULL, '317'),
('17-11-25', 'Glance B', '16021', NULL, '317'),
('17-11-25', 'Glance B', '18002', NULL, '317'),
('17-11-25', 'Backlift A', '10000', NULL, '317'),
('17-11-25', 'Backlift A', '1001', NULL, '317'),
('17-11-25', 'Backlift A', '16015', NULL, '317'),
('17-11-25', 'Forward and back B', '15001', NULL, '317'),
('17-11-25', 'Forward and back B', '15003', 1, '317'),
('17-11-25', 'Flick B', '15001', NULL, '317'),
('17-11-25', 'Flick B', '15003', 1, '317'),
('17-11-25', 'Flick B', '15004', 1, '317'),
('17-11-25', 'Flick B', '16021', 1, '317'),
('17-11-25', 'Topspinner A', '10000', NULL, '317'),
('17-11-25', 'Topspinner A', '1001', 1, '317'),
('17-11-25', 'Topspinner A', '16015', NULL, '317'),
('17-11-25', 'Topspinner A', '18002', 1, '317');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(30) NOT NULL,
  `course_info` varchar(40) NOT NULL,
  `semester_code` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_info`, `semester_code`) VALUES
('11', 'Stance A', '317'),
('11', 'Stance B', '317'),
('12', 'Backlift A', '317'),
('12', 'Backlift B', '317'),
('13', 'Forward and back A', '317'),
('13', 'Forward and back B', '317'),
('14', 'Leave A', '317'),
('14', 'Leave B', '317'),
('22', 'Glance A', '317'),
('22', 'Glance B', '317'),
('23', 'Drive A', '317'),
('23', 'Drive B', '317'),
('24', 'Flick A', '317'),
('24', 'Flick B', '317'),
('55', 'Hook A', '317'),
('56', 'POOL A', '317'),
('64', 'Flipper A', '317'),
('64', 'Flipper B', '317'),
('78', 'Topspinner A', '317'),
('78', 'Topspinner B', '317'),
('89', 'Beamer A', '317'),
('89', 'Beamer B', '317');

-- --------------------------------------------------------

--
-- Table structure for table `course_faculty`
--

CREATE TABLE `course_faculty` (
  `faculty_id` varchar(30) NOT NULL,
  `course_info` varchar(40) NOT NULL,
  `semester_code` varchar(4) NOT NULL,
  `total_class` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_faculty`
--

INSERT INTO `course_faculty` (`faculty_id`, `course_info`, `semester_code`, `total_class`) VALUES
('BCB0307', 'Stance B', '317', 1),
('BCB0307', 'Backlift B', '317', 0),
('BCB0307', 'Forward and back A', '317', 1),
('CWI1719', 'Stance A', '317', 2),
('CWI1719', 'Forward and back B', '317', 1),
('CWI1719', 'Leave B', '317', 1),
('CWI1719', 'Glance B', '317', 1),
('CWI1719', 'Flick B', '317', 1),
('BCB0711', 'Backlift A', '317', 1),
('BCB0711', 'Drive A', '317', 0),
('BCB0711', 'Flipper A', '317', 1),
('BCB0711', 'Topspinner A', '317', 1),
('BCB1417', 'Leave A', '317', 1),
('BCB1417', 'Flipper B', '317', 1),
('BCB1417', 'Topspinner B', '317', 0),
('BCB1417', 'Beamer A', '317', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `course_info` varchar(50) NOT NULL,
  `student_id` varchar(32) NOT NULL,
  `semester_code` varchar(4) NOT NULL,
  `class_attended` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`course_info`, `student_id`, `semester_code`, `class_attended`) VALUES
('Stance B', '18001', '317', 1),
('Backlift B', '18001', '317', 0),
('Forward and back A', '18001', '317', 0),
('Stance A', '10000', '317', 0),
('Backlift A', '10000', '317', 0),
('Forward and back A', '10000', '317', 0),
('Leave A', '10000', '317', 0),
('Glance A', '10000', '317', 0),
('Drive A', '10000', '317', 0),
('Flick A', '10000', '317', 0),
('Flipper A', '10000', '317', 0),
('Topspinner A', '10000', '317', 0),
('Beamer A', '10000', '317', 1),
('Stance B', '15001', '317', 0),
('Backlift B', '15001', '317', 0),
('Forward and back B', '15001', '317', 0),
('Leave B', '15001', '317', 1),
('Glance B', '15001', '317', 0),
('Drive B', '15001', '317', 0),
('Flick B', '15001', '317', 0),
('Flipper B', '15001', '317', 0),
('Topspinner B', '15001', '317', 0),
('Beamer B', '15001', '317', 0),
('Stance A', '16015', '317', 2),
('Backlift A', '16015', '317', 0),
('Forward and back A', '16015', '317', 0),
('Leave A', '16015', '317', 1),
('Glance A', '16015', '317', 0),
('Drive A', '16015', '317', 0),
('Flick A', '16015', '317', 0),
('Flipper A', '16015', '317', 0),
('Topspinner A', '16015', '317', 0),
('Beamer A', '16015', '317', 1),
('Stance A', '18002', '317', 1),
('Backlift B', '18002', '317', 0),
('Leave A', '18002', '317', 0),
('Glance B', '18002', '317', 0),
('Drive B', '18002', '317', 0),
('Topspinner A', '18002', '317', 1),
('Beamer B', '18002', '317', 0),
('Forward and back A', '15004', '317', 0),
('Leave A', '15004', '317', 1),
('Glance B', '15004', '317', 0),
('Drive A', '15004', '317', 0),
('Flick B', '15004', '317', 1),
('Flipper B', '15004', '317', 1),
('Topspinner B', '15004', '317', 0),
('Beamer B', '15004', '317', 0),
('Stance B', '1001', '317', 0),
('Backlift A', '1001', '317', 0),
('Forward and back A', '1001', '317', 0),
('Leave A', '1001', '317', 1),
('Glance A', '1001', '317', 0),
('Drive A', '1001', '317', 0),
('Flick A', '1001', '317', 0),
('Flipper A', '1001', '317', 0),
('Topspinner A', '1001', '317', 1),
('Beamer A', '1001', '317', 1),
('Stance B', '15003', '317', 0),
('Backlift B', '15003', '317', 0),
('Forward and back B', '15003', '317', 1),
('Leave B', '15003', '317', 1),
('Glance A', '15003', '317', 0),
('Drive A', '15003', '317', 0),
('Flick B', '15003', '317', 1),
('Flipper B', '15003', '317', 1),
('Topspinner B', '15003', '317', 0),
('Beamer B', '15003', '317', 0),
('Stance B', '16021', '317', 0),
('Backlift B', '16021', '317', 0),
('Forward and back A', '16021', '317', 0),
('Leave B', '16021', '317', 1),
('Glance B', '16021', '317', 0),
('Drive B', '16021', '317', 0),
('Flick B', '16021', '317', 1),
('Flipper B', '16021', '317', 1),
('Topspinner B', '16021', '317', 0),
('Beamer B', '16021', '317', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department_identifier`
--

CREATE TABLE `department_identifier` (
  `initial_digits` varchar(3) NOT NULL,
  `department_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(40) DEFAULT NULL,
  `faculty_id` varchar(30) NOT NULL,
  `password` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `faculty_id`, `password`) VALUES
('Stuart Law', 'BCB0307', '46b8e5d2ee546f259233314ff08a087c'),
('Dav Whatmore', 'CWI1719', '3191672ff87a1daa6f6b76ffcff8162d'),
('James Siddons', 'BCB0711', '71c408df8b8db5905e754fc81379519f'),
('Hathurusingha', 'BCB1417', '0bc50d07e096e426f3bdeb77a344d034'),
('', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(40) DEFAULT NULL,
  `student_id` varchar(30) NOT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `student_id`, `semester`, `e_mail`) VALUES
('Ashish Nehra', '18001', '12', 'anehra@gmail.com'),
('Soumya Sarkar', '10000', '4', 'ssarkar@gmail.com'),
('Mominul Haque', '15001', '7', 'mhaque@hotmail.com'),
('Taijul Islam', '16015', '9', 'tislam@yahoo.com'),
('Taskin Ahmed', '18002', '8', 'tas@live.com'),
('Raile Russow', '15004', '11', 'rrussow@live.com'),
('Hashim Amla', '1001', '12', 'hamla@gmail.com'),
('Zakir Hasan', '15003', '1', 'zhasan@yahoo.com'),
('Tanvir Haider', '16021', '4', 'th@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendance_storage`
--
ALTER TABLE `attendance_storage`
  ADD PRIMARY KEY (`date`,`course_info`,`student_id`,`semester_code`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`,`course_info`,`semester_code`);

--
-- Indexes for table `course_faculty`
--
ALTER TABLE `course_faculty`
  ADD PRIMARY KEY (`faculty_id`,`course_info`,`semester_code`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`course_info`,`student_id`,`semester_code`);

--
-- Indexes for table `department_identifier`
--
ALTER TABLE `department_identifier`
  ADD PRIMARY KEY (`initial_digits`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
