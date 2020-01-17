-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 03:25 PM
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
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'gana');

-- --------------------------------------------------------

--
-- Table structure for table `applyleave`
--

CREATE TABLE `applyleave` (
  `name` varchar(10) NOT NULL,
  `to_` varchar(10) NOT NULL,
  `leavereason` varchar(15) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyleave`
--

INSERT INTO `applyleave` (`name`, `to_`, `leavereason`, `fromdate`, `todate`) VALUES
('vijith', 'manager', 'fever', '2020-01-17', '2020-01-18'),
('vijith', 'manager', 'fever', '2020-01-17', '2020-01-18'),
('john', 'john', 'fever', '2020-01-17', '2020-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `factid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `assignedbatch` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`factid`, `name`, `address`, `dob`, `gender`, `qualification`, `mobile`, `assignedbatch`, `username`, `password`) VALUES
(1, 'Reshma', 'Reshma bhavan', '1997-05-01', 'on', 'BTECH EC', 923456767, 'FS', 'reshma', 'reshma'),
(3, 'John', 'John villa', '1994-08-05', 'on', 'mbbs', 348765432, 'ED', 'john', 'john'),
(4, 'AMITHA', 'kollam', '1994-06-05', 'on', 'bca', 86543223, 'JSD2', 'amitha', 'amitha'),
(7, 'Ananthu', 'Ananthu villa', '1994-05-01', 'on', 'BTECH EC', 456789, 'UI', 'ananthu', 'ananthu');

-- --------------------------------------------------------

--
-- Table structure for table `studentapplyleave`
--

CREATE TABLE `studentapplyleave` (
  `name` varchar(10) NOT NULL,
  `to_` varchar(10) NOT NULL,
  `leavereason` varchar(12) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentapplyleave`
--

INSERT INTO `studentapplyleave` (`name`, `to_`, `leavereason`, `fromdate`, `todate`) VALUES
('ATHIRA S K', 'AMITHA', 'FEVER', '2020-01-17', '2020-01-18'),
('NIMA', 'JOHN', 'FEVER', '2020-01-18', '2020-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `studentattendance`
--

CREATE TABLE `studentattendance` (
  `date` date NOT NULL,
  `stdid` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `hr1status` varchar(5) NOT NULL,
  `hr2status` varchar(5) NOT NULL,
  `hr3status` varchar(5) NOT NULL,
  `hr4status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentattendance`
--

INSERT INTO `studentattendance` (`date`, `stdid`, `name`, `hr1status`, `hr2status`, `hr3status`, `hr4status`) VALUES
('2020-01-08', 4, 'anu', 'y', 'y', 'y', 'y'),
('2020-01-16', 8, 'athira', 'y', 'y', 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `studentmark`
--

CREATE TABLE `studentmark` (
  `stdid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `assessmentno` int(11) NOT NULL,
  `sub1mark` int(11) NOT NULL,
  `sub2mark` int(11) NOT NULL,
  `sub3mark` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmark`
--

INSERT INTO `studentmark` (`stdid`, `name`, `assessmentno`, `sub1mark`, `sub2mark`, `sub3mark`, `percentage`) VALUES
(8, 'ATHIRA S K', 1, 39, 38, 37, 78),
(21, 'NIMA', 1, 33, 32, 36, 73);

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `stdid` int(11) NOT NULL,
  `admnno` int(11) NOT NULL,
  `name` varchar(12) NOT NULL,
  `address` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `admdate` date NOT NULL,
  `guardian` varchar(12) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`stdid`, `admnno`, `name`, `address`, `dob`, `gender`, `mobile`, `admdate`, `guardian`, `batch`, `username`, `password`) VALUES
(21, 45, 'NIMA', 'NIMA VILLA', '1996-09-02', 'female', 917654322, '2019-09-19', 'MOHAN', 'JSD', 'nima', 'nima'),
(8, 44, 'ATHIRA S K', 'ATHIRA NIVAS', '1996-03-05', 'female', 45678234, '2019-07-16', 'KOMALAN', 'JSD', 'athira', 'athira'),
(3, 101, 'mujeeb', 'alapuzha', '2020-01-10', 'male', 2147483647, '2020-01-16', 'rahman', 'jsd2', 'mujeeb', 'mujeeb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`factid`);

--
-- Indexes for table `studentattendance`
--
ALTER TABLE `studentattendance`
  ADD PRIMARY KEY (`stdid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
