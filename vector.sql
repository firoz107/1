-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2016 at 10:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vector`
--

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` varchar(100) NOT NULL,
  `admin_id` int(9) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `admin_id`, `name`, `subject`) VALUES
('767ys-sddsy8-hghdgd', 7, 'jkhsdjsd', 'jjhjksd'),
('D57E0B13-ADA1-404D-9521-13B3C1442609', 44, 'dffddf', 'dff'),
('D57ErB13-ADA1-404D-9521-13B3C1442609', 55, 'dffddf', 'dff');

-- --------------------------------------------------------

--
-- Table structure for table `groupemp`
--

CREATE TABLE IF NOT EXISTS `groupemp` (
`groupid` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `groupname` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `member_id` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupemp`
--

INSERT INTO `groupemp` (`groupid`, `id`, `groupname`, `subject`, `member_id`) VALUES
(2, 6, 'lmklklk', 'lklkl;', '6,7'),
(3, 6, 'monday', 'monday', '8'),
(4, 6, 'test', 'test', '8'),
(5, 7, 'workday group', 'yooo', '6,8');

-- --------------------------------------------------------

--
-- Table structure for table `group_users`
--

CREATE TABLE IF NOT EXISTS `group_users` (
`id` int(11) NOT NULL,
  `group_id` varchar(60) NOT NULL,
  `user_id` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_users`
--

INSERT INTO `group_users` (`id`, `group_id`, `user_id`) VALUES
(1, '58BF1534-C3EF-47A4-8A05-FC1DEE7EFE81', 7),
(2, '4269C4A1-6454-4AB2-B8A6-0F5E509343E1', 7),
(3, '4269C4A1-6454-4AB2-B8A6-0F5E509343E1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`msgid` int(10) NOT NULL,
  `groupid` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `status`) VALUES
(6, 'Firoz', 'firoz107@icloud.com', 'feroz', 'approved'),
(7, 'ahmed', 'firozahmed.me@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'approved'),
(8, 'Hello', 'hello@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupemp`
--
ALTER TABLE `groupemp`
 ADD PRIMARY KEY (`groupid`), ADD KEY `id` (`id`);

--
-- Indexes for table `group_users`
--
ALTER TABLE `group_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`msgid`), ADD KEY `groupid` (`groupid`), ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupemp`
--
ALTER TABLE `groupemp`
MODIFY `groupid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `group_users`
--
ALTER TABLE `group_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `msgid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `groupemp`
--
ALTER TABLE `groupemp`
ADD CONSTRAINT `groupemp_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`groupid`) REFERENCES `groupemp` (`groupid`),
ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
