-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2022 at 10:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Night_canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dbms_pro`
--

CREATE TABLE `Dbms_pro` (
  `Reg_No` varchar(10) NOT NULL,
  `Hostel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Dbms_pro`
--

INSERT INTO `Dbms_pro` (`Reg_No`, `Hostel`) VALUES
('20bce7327', 'mh2'),
('20bce7085', 'mh3'),
('20bce7355', 'mh3'),
('20bce7282', 'mh2');

-- --------------------------------------------------------

--
-- Table structure for table `lh1_non-veg`
--

CREATE TABLE `lh1_non-veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lh1_veg`
--

CREATE TABLE `lh1_veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lh2_non-veg`
--

CREATE TABLE `lh2_non-veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lh2_veg`
--

CREATE TABLE `lh2_veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Mess_log`
--

CREATE TABLE `Mess_log` (
  `AdminID` int(10) NOT NULL,
  `Password` int(10) NOT NULL,
  `Hostel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Mess_log`
--

INSERT INTO `Mess_log` (`AdminID`, `Password`, `Hostel`) VALUES
(1001, 1001, 'mh1'),
(1002, 1002, 'mh2'),
(1003, 1003, 'mh3'),
(1004, 1004, 'mh4'),
(2001, 2001, 'lh1'),
(2002, 2002, 'lh2');

-- --------------------------------------------------------

--
-- Table structure for table `mh1_non-veg`
--

CREATE TABLE `mh1_non-veg` (
  `Menu` varchar(10) NOT NULL,
  `Available_quantity` int(10) NOT NULL,
  `Booked_items` int(10) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mh1_veg`
--

CREATE TABLE `mh1_veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(10) NOT NULL,
  `Booked_items` int(10) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mh2_non-veg`
--

CREATE TABLE `mh2_non-veg` (
  `Menu` varchar(10) NOT NULL,
  `Available_quantity` int(10) NOT NULL,
  `Booked_items` int(10) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mh2_student`
--

CREATE TABLE `mh2_student` (
  `Reg No` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mh2_student`
--

INSERT INTO `mh2_student` (`Reg No`) VALUES
('20bce7327'),
('20bce7282'),
('20bce7085'),
('20bcn7009');

-- --------------------------------------------------------

--
-- Table structure for table `mh2_veg`
--

CREATE TABLE `mh2_veg` (
  `Menu` varchar(100) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) DEFAULT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mh2_veg`
--

INSERT INTO `mh2_veg` (`Menu`, `Available_quantity`, `Booked_items`, `Price`) VALUES
('Paneer Curry Paratha', 10, 1, 80),
('Paneer Curry Dosa', 10, 1, 80),
('Paneer Curry', 10, NULL, 60),
('Plain Dosa', 10, NULL, 30),
('Onion Dosa', 10, NULL, 40),
('Masala Dosa', 10, NULL, 40),
('Veg Maggi', 10, NULL, 30),
('French Fries', 10, NULL, 40),
('Gulaab Jamun', 5, NULL, 10),
('Tea ', 10, NULL, 12),
('Coffee', 10, NULL, 14);

-- --------------------------------------------------------

--
-- Table structure for table `mh3_non-veg`
--

CREATE TABLE `mh3_non-veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mh3_veg`
--

CREATE TABLE `mh3_veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mh4_non-veg`
--

CREATE TABLE `mh4_non-veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mh4_veg`
--

CREATE TABLE `mh4_veg` (
  `Menu` varchar(20) NOT NULL,
  `Available_quantity` int(11) NOT NULL,
  `Booked_items` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_session`
--

CREATE TABLE `temp_session` (
  `Reg_No` varchar(9) NOT NULL,
  `Hostel` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_session`
--

INSERT INTO `temp_session` (`Reg_No`, `Hostel`) VALUES
('20bce7327', 'mh2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
