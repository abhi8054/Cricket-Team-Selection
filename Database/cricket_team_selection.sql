-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 09:33 PM
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
-- Database: `cricket_team_selection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'myadmin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `playername` varchar(100) NOT NULL,
  `playerrating` varchar(50) NOT NULL,
  `playerrole` varchar(50) NOT NULL,
  `officialteam` varchar(50) NOT NULL,
  `playerbaseprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `playername`, `playerrating`, `playerrole`, `officialteam`, `playerbaseprice`) VALUES
(6, 'Virat', '8.0', 'Batsman', 'India', '100000'),
(7, 'Jadeja', '5.3', 'Allrounder', 'India', '11000'),
(8, 'Ab Devilers', '7.8', 'Batsman', 'South', '15000'),
(10, 'Harbhajan singh', '3.6', 'Bowler', 'India', '6000'),
(11, 'Chris Gayle', '5.0', 'Batsman', 'West Indies', '12000'),
(12, 'Dinesh Kartik', '5.1', 'Allrounder', 'India', '12000'),
(13, 'R Ashwin', '4.0', 'Bowler', 'India', '11000'),
(14, 'Trent Boult', '5.0', 'Bowler', 'New Zealand', '13000'),
(15, 'Malinga', '5.2', 'Bowler', 'Shri Lanka', '9000'),
(17, 'Rohit Sharma', '8.0', 'Batsman', 'India', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `usermobile` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `useremail`, `userpassword`, `usermobile`, `username`) VALUES
(1, 'abhi@gmail.com', '123', 1234567890, 'Abhishek Poddar'),
(7, 'poddar@gmail.com', '123', 1234567890, 'Poddar');

-- --------------------------------------------------------

--
-- Table structure for table `userteam`
--

CREATE TABLE `userteam` (
  `id` int(11) NOT NULL,
  `userteam_members` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userteam`
--

INSERT INTO `userteam` (`id`, `userteam_members`, `user_id`) VALUES
(8, '6,8,10,11,15', 1),
(9, '10,11,12,13,15', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userteam`
--
ALTER TABLE `userteam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fc` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userteam`
--
ALTER TABLE `userteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userteam`
--
ALTER TABLE `userteam`
  ADD CONSTRAINT `fc` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
