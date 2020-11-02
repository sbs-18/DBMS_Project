-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 06:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `abilities`
--

CREATE TABLE `abilities` (
  `player_id` int(11) NOT NULL,
  `speed` int(2) NOT NULL,
  `curve` int(2) NOT NULL,
  `pass` int(2) NOT NULL,
  `stamina` int(2) NOT NULL,
  `ball_control` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abilities`
--

INSERT INTO `abilities` (`player_id`, `speed`, `curve`, `pass`, `stamina`, `ball_control`) VALUES
(123248, 98, 96, 95, 98, 95),
(123249, 95, 94, 92, 96, 95),
(123250, 89, 92, 90, 88, 85),
(123251, 95, 90, 91, 89, 90),
(123252, 90, 89, 92, 93, 89),
(123253, 96, 90, 89, 91, 90),
(123254, 95, 93, 90, 94, 91),
(123255, 92, 85, 90, 90, 86),
(123256, 90, 80, 91, 91, 82),
(123257, 90, 89, 85, 84, 86);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `Club_id` int(11) NOT NULL,
  `club_name` varchar(50) NOT NULL,
  `Manager` varchar(50) NOT NULL,
  `homeground` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`Club_id`, `club_name`, `Manager`, `homeground`) VALUES
(1123, 'Barcelona', 'Ronald Koeman', 'Camp Nou'),
(1124, 'Real Madrid', 'Zinedine Zidane', 'Santiago Bernabeu Stadium'),
(1125, 'Arsenal', 'Mikel Arteta', 'Emirates Stadium'),
(1126, 'Manchester United', 'Ole Gunnar Solskjaer', 'Old Trafford'),
(1127, 'Liverpool', 'Jurgen Klopp', 'Anfield');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(50) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `nationality`, `position`, `dob`, `age`) VALUES
(123248, 'Lionel Messi', 'Argentina', 'Forward', '1987-06-24', 37),
(123249, 'Cristiano Ronaldo', 'Portugal', 'Forward', '1985-02-05', 35),
(123250, 'Xavi', 'Spain', 'Midfielder', '1980-02-25', 40),
(123251, 'Luka Modric', 'Croatia', 'Midfielder', '1985-09-09', 35),
(123252, 'Mohamed Salah', 'Egypt', 'Forward', '1992-06-15', 28),
(123253, 'Neymar', 'Brazil', 'Forward', '1992-02-05', 28),
(123254, 'Wayne Rooney', 'England', 'Midfielder', '1985-10-24', 35),
(123255, 'Calum Chambers', 'England', 'Defender', '1995-01-25', 25),
(123256, 'Bernd Leno', 'Germany', 'Goalkeeper', '1992-03-04', 28),
(123257, 'Marcus Rashford', 'England', 'Forward', '1997-10-31', 23);

-- --------------------------------------------------------

--
-- Table structure for table `player_stats`
--

CREATE TABLE `player_stats` (
  `player_id` int(11) NOT NULL,
  `goals` int(4) NOT NULL,
  `hgoal` int(2) NOT NULL,
  `penalty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player_stats`
--

INSERT INTO `player_stats` (`player_id`, `goals`, `hgoal`, `penalty`) VALUES
(123248, 758, 4, 256),
(123249, 702, 4, 287),
(123250, 456, 3, 126),
(123251, 420, 3, 85),
(123252, 101, 3, 17),
(123253, 269, 4, 154),
(123254, 456, 4, 125),
(123255, 152, 2, 25),
(123256, 0, 0, 0),
(123257, 89, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `playfor`
--

CREATE TABLE `playfor` (
  `player_fk` int(11) NOT NULL,
  `club_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playfor`
--

INSERT INTO `playfor` (`player_fk`, `club_fk`) VALUES
(123248, 1123),
(123250, 1123),
(123253, 1123),
(123249, 1124),
(123251, 1124),
(123255, 1125),
(123256, 1125),
(123254, 1126),
(123257, 1126),
(123252, 1127);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `Club_id` int(11) NOT NULL,
  `wins` int(10) NOT NULL,
  `losses` int(10) NOT NULL,
  `wah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`Club_id`, `wins`, `losses`, `wah`) VALUES
(1123, 654, 254, 305),
(1124, 568, 289, 299),
(1125, 541, 275, 332),
(1126, 455, 224, 169),
(1127, 326, 165, 126);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `player_id` (`player_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`Club_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `player_stats`
--
ALTER TABLE `player_stats`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `player_id` (`player_id`);

--
-- Indexes for table `playfor`
--
ALTER TABLE `playfor`
  ADD PRIMARY KEY (`player_fk`),
  ADD KEY `player_fk` (`player_fk`,`club_fk`),
  ADD KEY `club_fk` (`club_fk`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`Club_id`),
  ADD KEY `Club_id` (`Club_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `Club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1128;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123258;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abilities`
--
ALTER TABLE `abilities`
  ADD CONSTRAINT `abilities_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `player_stats`
--
ALTER TABLE `player_stats`
  ADD CONSTRAINT `player_stats_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`) ON DELETE CASCADE;

--
-- Constraints for table `playfor`
--
ALTER TABLE `playfor`
  ADD CONSTRAINT `playfor_ibfk_1` FOREIGN KEY (`player_fk`) REFERENCES `player` (`player_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `playfor_ibfk_2` FOREIGN KEY (`club_fk`) REFERENCES `club` (`Club_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`Club_id`) REFERENCES `club` (`Club_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
