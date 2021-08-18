-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 09:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blc`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_subscribers`
--

CREATE TABLE `email_subscribers` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `code`, `title`, `date`, `description`, `caption`, `link`, `entry_date`) VALUES
(4, '6100ca7c26310', 'Babel Language Centre', '2021-07-14 22:03:00', 'Test string           ', 'ecap_6100ca7c26310.png', 'http://event.com', '2021-07-27 21:09:48'),
(6, '6100ccdad46f4', 'Babel Language Centre', '2021-07-30 00:19:00', 'What is this.', 'ecap_6100ccdad46f4.png', 'http://kjrejkrkerje/ejekrj', '2021-07-27 21:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `ID` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pub_date` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`ID`, `code`, `title`, `author`, `pub_date`, `category`, `preview`, `link`, `entry_date`) VALUES
(2, '6101c0fca210c', 'Ormofo Tech', 'Mufaro D Kaseke', '2021-07-04 17:41:00', 'Book', 'mcap_6101c0fca210c.jpg', 'mat_6101c0fca210c.pdf', '2021-07-28 14:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `student_id`, `name`, `username`, `password`, `entry_date`) VALUES
(7, '610224031b159', 'Mufaro D Kaseke', 'mufaro', 'mufarokaseke', '2021-07-28 21:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_id`, `name`, `username`, `password`, `entry_date`) VALUES
(1, '8923923', 'Mufaro D Kaseke', 'mufaro', 'mufarokaseke', '2021-07-31 16:02:05'),
(2, '94859485', 'Lorraine Mafukidze', 'lorraine', 'lorraine', '2021-07-31 17:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `ID` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`ID`, `code`, `title`, `description`, `caption`, `link`, `entry_date`) VALUES
(6, '6104abeebc675', 'Babel Language', 'This is a test video', 'vcap_6104abeebc675.jpg', 'vid_6104abeebc675.mp4', '2021-07-30 19:48:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_subscribers`
--
ALTER TABLE `email_subscribers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_subscribers`
--
ALTER TABLE `email_subscribers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
