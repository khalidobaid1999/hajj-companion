-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 04:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hajj_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenity_tbl`
--

CREATE TABLE `amenity_tbl` (
  `amenity_id` int(11) NOT NULL,
  `amenity_name_ar` varchar(255) COLLATE utf8_bin NOT NULL,
  `amenity_name_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `pilgrim_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `amenity_tbl`
--

INSERT INTO `amenity_tbl` (`amenity_id`, `amenity_name_ar`, `amenity_name_en`, `pilgrim_id`) VALUES
(1, 'صعوبة في الحجز', 'Hardship in booking', 1),
(2, 'التأخير في الرد', 'Delay in response', 1),
(3, 'التأخير في رحلة الطيران', 'Flight delayed', 2),
(4, 'سوء التنظيم على الطائرة', 'Badly managed flight', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `report_id` int(11) NOT NULL,
  `report_text` text COLLATE utf8_bin NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pilgrims_tbl`
--

CREATE TABLE `pilgrims_tbl` (
  `pilgrim_id` int(11) NOT NULL,
  `pilgrim_name_ar` varchar(255) COLLATE utf8_bin NOT NULL,
  `pilgrim_name_en` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_time` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pilgrims_tbl`
--

INSERT INTO `pilgrims_tbl` (`pilgrim_id`, `pilgrim_name_ar`, `pilgrim_name_en`, `date_time`) VALUES
(1, 'حجز التذكرة/التصريح', 'Booking airplane ticket/Hajj visa', '-'),
(2, 'رحلة الطيران', 'Flight journey', '-'),
(3, 'حافلة النقل', 'Coach transport', '-');

-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

CREATE TABLE `review_tbl` (
  `review_id` int(11) NOT NULL,
  `review_comment` text COLLATE utf8_bin NOT NULL,
  `pilgrim_id` int(11) NOT NULL,
  `rating` float NOT NULL,
  `amenity_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenity_tbl`
--
ALTER TABLE `amenity_tbl`
  ADD PRIMARY KEY (`amenity_id`),
  ADD KEY `pilgrim_id` (`pilgrim_id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `pilgrims_tbl`
--
ALTER TABLE `pilgrims_tbl`
  ADD PRIMARY KEY (`pilgrim_id`);

--
-- Indexes for table `review_tbl`
--
ALTER TABLE `review_tbl`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `pilgrim_id` (`pilgrim_id`,`amenity_id`,`username`),
  ADD KEY `review_tbl_ibfk_2` (`amenity_id`),
  ADD KEY `review_tbl_ibfk_3` (`username`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenity_tbl`
--
ALTER TABLE `amenity_tbl`
  MODIFY `amenity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pilgrims_tbl`
--
ALTER TABLE `pilgrims_tbl`
  MODIFY `pilgrim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `review_tbl`
--
ALTER TABLE `review_tbl`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `amenity_tbl`
--
ALTER TABLE `amenity_tbl`
  ADD CONSTRAINT `amenity_tbl_ibfk_1` FOREIGN KEY (`pilgrim_id`) REFERENCES `pilgrims_tbl` (`pilgrim_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_tbl`
--
ALTER TABLE `review_tbl`
  ADD CONSTRAINT `review_tbl_ibfk_1` FOREIGN KEY (`pilgrim_id`) REFERENCES `pilgrims_tbl` (`pilgrim_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_tbl_ibfk_2` FOREIGN KEY (`amenity_id`) REFERENCES `amenity_tbl` (`amenity_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_tbl_ibfk_3` FOREIGN KEY (`username`) REFERENCES `user_tbl` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
