-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 06:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loop_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_room_db`
--

CREATE TABLE `activity_room_db` (
  `school_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(6) NOT NULL,
  `end_time` varchar(6) NOT NULL,
  `capacity` varchar(5) NOT NULL,
  `resource_name` varchar(20) NOT NULL DEFAULT 'activity_room_db'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_room_db`
--

INSERT INTO `activity_room_db` (`school_id`, `date`, `start_time`, `end_time`, `capacity`, `resource_name`) VALUES
('10002', '2019-07-13', '09:30:', '12:30:', '150', 'activity_room');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `school_id` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `s_no` int(10) NOT NULL,
  `booking_school_id` int(10) NOT NULL,
  `booked_school_id` int(10) NOT NULL,
  `resource_name` varchar(15) NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`s_no`, `booking_school_id`, `booked_school_id`, `resource_name`, `start_time`, `end_time`) VALUES
(1, 10001, 10002, 'activity_room', '11:00:00.000000', '12:30:00.000000'),
(2, 10002, 10001, 'library', '09:00:00.000000', '11:00:00.000000'),
(6, 10002, 10003, 'activity_room', '11:00:00.000000', '12:40:00.000000'),
(7, 0, 10001, 'playground_db', '11:00:00.000000', '12:00:00.000000'),
(8, 0, 10001, 'playground_db', '11:00:00.000000', '12:30:00.000000'),
(9, 0, 10001, 'equipment', '09:30:00.000000', '12:30:00.000000'),
(10, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(11, 0, 0, '', '00:00:00.000000', '00:00:00.000000'),
(12, 0, 10001, 'playground', '11:00:00.000000', '12:00:00.000000'),
(13, 0, 10001, 'playground', '11:00:00.000000', '12:00:00.000000'),
(14, 0, 10001, 'playground', '11:00:00.000000', '12:00:00.000000'),
(15, 0, 10001, 'playground', '11:00:00.000000', '12:00:00.000000'),
(16, 0, 10001, 'playground', '11:00:00.000000', '12:00:00.000000'),
(17, 0, 10001, 'playground', '11:00:00.000000', '12:00:00.000000'),
(18, 0, 10002, '', '09:30:00.000000', '12:30:00.000000'),
(19, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(20, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(21, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(22, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(23, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(24, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(25, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(26, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(27, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(28, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(29, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(30, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000'),
(31, 0, 10001, 'library', '11:00:00.000000', '12:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cluster`
--

CREATE TABLE `cluster` (
  `cluster_id` int(10) NOT NULL DEFAULT 0,
  `school_id` int(10) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `playground` int(5) NOT NULL,
  `library` int(5) NOT NULL,
  `activity_room` int(5) NOT NULL,
  `lab` int(5) NOT NULL,
  `equipment` int(5) NOT NULL,
  `part_time_teachers` int(5) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `alternate_number` int(10) NOT NULL,
  `location` float NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cluster`
--

INSERT INTO `cluster` (`cluster_id`, `school_id`, `school_name`, `playground`, `library`, `activity_room`, `lab`, `equipment`, `part_time_teachers`, `phone_number`, `alternate_number`, `location`, `password`) VALUES
(0, 10001, 'vyshnavi', 1, 0, 2, 3, 2, 13, 1234567812, 1234567813, 0, 'gfhj'),
(0, 10002, 'Kalam School', 1, 1, 0, 3, 1, 12, 1234567891, 1234567892, 0, '12345'),
(0, 10003, 'a', 1, 1, 4, 3, 2, 5, 1234566789, 1234567890, 0, ''),
(0, 10004, 'ab', 1, 2, 3, 4, 5, 6, 2147483647, 2147483647, 0, ''),
(0, 10005, 'ab', 1, 2, 3, 4, 5, 6, 2147483647, 2147483647, 0, ''),
(0, 10006, 'ab', 1, 2, 3, 4, 5, 6, 2147483647, 2147483647, 0, ''),
(0, 10007, 'ab', 1, 2, 3, 4, 5, 6, 2147483647, 2147483647, 0, ''),
(0, 10008, 'mgit', 1, 0, 9, 8, 7, 6, 1234567812, 2147483647, 0, ''),
(0, 10009, 'praneeth', 0, 9, 8, 7, 6, 5, 2147483647, 2147483647, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_db`
--

CREATE TABLE `equipment_db` (
  `school_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(6) NOT NULL,
  `end_time` varchar(6) NOT NULL,
  `capacity` int(5) NOT NULL,
  `resource_name` varchar(20) NOT NULL DEFAULT 'equipment_db'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_db`
--

INSERT INTO `equipment_db` (`school_id`, `date`, `start_time`, `end_time`, `capacity`, `resource_name`) VALUES
('10001', '2019-07-13', '09:30:', '12:30:', 30, 'equipment');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `school_id` int(10) NOT NULL,
  `get_rated_school_id` int(10) NOT NULL,
  `rating` float NOT NULL,
  `feed_back` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`school_id`, `get_rated_school_id`, `rating`, `feed_back`) VALUES
(10001, 10002, 5, 'Wonderful school'),
(10002, 10001, 5, 'shdfkjdsa');

-- --------------------------------------------------------

--
-- Table structure for table `lab_db`
--

CREATE TABLE `lab_db` (
  `school_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(6) NOT NULL,
  `end_time` varchar(6) NOT NULL,
  `capacity` int(5) NOT NULL,
  `resource_name` varchar(15) DEFAULT 'lab_db'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_db`
--

INSERT INTO `lab_db` (`school_id`, `date`, `start_time`, `end_time`, `capacity`, `resource_name`) VALUES
('10001', '2019-07-13', '10:00:', '12:00:', 40, 'lab');

-- --------------------------------------------------------

--
-- Table structure for table `library_db`
--

CREATE TABLE `library_db` (
  `school_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(6) NOT NULL,
  `end_time` varchar(6) NOT NULL,
  `capacity` int(5) NOT NULL,
  `resource_name` varchar(15) NOT NULL DEFAULT 'library_db'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_db`
--

INSERT INTO `library_db` (`school_id`, `date`, `start_time`, `end_time`, `capacity`, `resource_name`) VALUES
('10001', '2019-07-13', '11:00:', '12:30:', 150, 'library');

-- --------------------------------------------------------

--
-- Table structure for table `login_schools`
--

CREATE TABLE `login_schools` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_schools`
--

INSERT INTO `login_schools` (`user_id`, `password`) VALUES
('school_1', 'pass1');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `notif_msg` text NOT NULL,
  `notif_time` datetime DEFAULT NULL,
  `notif_repeat` int(11) DEFAULT 1,
  `notif_loop` int(11) NOT NULL DEFAULT 1,
  `publish_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notif_user`
--

CREATE TABLE `notif_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `part_time_teachers_db`
--

CREATE TABLE `part_time_teachers_db` (
  `school_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(6) NOT NULL,
  `end_time` varchar(6) NOT NULL,
  `capacity` int(5) NOT NULL,
  `resource_name` varchar(25) NOT NULL DEFAULT 'part_time_teachers_db'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_time_teachers_db`
--

INSERT INTO `part_time_teachers_db` (`school_id`, `date`, `start_time`, `end_time`, `capacity`, `resource_name`) VALUES
('10002', '2019-07-13', '10:30:', '12:30:', 1, 'part_time_teachers');

-- --------------------------------------------------------

--
-- Table structure for table `playground_db`
--

CREATE TABLE `playground_db` (
  `school_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(6) NOT NULL,
  `end_time` varchar(6) NOT NULL,
  `capacity` int(5) NOT NULL,
  `resource_name` varchar(15) NOT NULL DEFAULT 'playground_db'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playground_db`
--

INSERT INTO `playground_db` (`school_id`, `date`, `start_time`, `end_time`, `capacity`, `resource_name`) VALUES
('10001', '2019-07-13', '11:00', '12:00', 0, 'playground_db'),
('10001', '2019-07-13', '11:00:', '12:30:', 0, 'playground_db');

-- --------------------------------------------------------

--
-- Table structure for table `school_approval`
--

CREATE TABLE `school_approval` (
  `school_name` varchar(50) NOT NULL,
  `playground` int(5) DEFAULT NULL,
  `library` int(5) DEFAULT NULL,
  `activity_room` int(5) DEFAULT NULL,
  `lab` int(5) DEFAULT NULL,
  `equipment` int(5) NOT NULL,
  `part_time_teachers` int(5) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `alternate_number` bigint(10) NOT NULL,
  `location` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_approval`
--

INSERT INTO `school_approval` (`school_name`, `playground`, `library`, `activity_room`, `lab`, `equipment`, `part_time_teachers`, `phone_number`, `alternate_number`, `location`) VALUES
('JPMC', 4, 1, 3, 10, 20, 30, 1234567812, 5426124344, 0),
('mgit', 1, 0, 9, 8, 7, 6, 1234567812, 5426124344, 0),
('praneeth', 0, 9, 8, 7, 6, 5, 9878987898, 9999999999, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_room_db`
--
ALTER TABLE `activity_room_db`
  ADD PRIMARY KEY (`school_id`,`date`,`start_time`,`end_time`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `school_id` (`school_id`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `equipment_db`
--
ALTER TABLE `equipment_db`
  ADD PRIMARY KEY (`school_id`,`date`,`start_time`,`end_time`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`school_id`,`get_rated_school_id`);

--
-- Indexes for table `lab_db`
--
ALTER TABLE `lab_db`
  ADD PRIMARY KEY (`school_id`,`date`,`start_time`,`end_time`);

--
-- Indexes for table `library_db`
--
ALTER TABLE `library_db`
  ADD PRIMARY KEY (`school_id`,`date`,`start_time`,`end_time`);

--
-- Indexes for table `login_schools`
--
ALTER TABLE `login_schools`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `school_id` (`user_id`);

--
-- Indexes for table `part_time_teachers_db`
--
ALTER TABLE `part_time_teachers_db`
  ADD PRIMARY KEY (`school_id`,`date`,`start_time`,`end_time`);

--
-- Indexes for table `playground_db`
--
ALTER TABLE `playground_db`
  ADD PRIMARY KEY (`school_id`,`date`,`start_time`,`end_time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `school_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10010;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `school_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
