-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 26, 2020 at 12:48 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_programmer_mjb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `kd_bonus` int(11) NOT NULL,
  `Emp_code` char(12) NOT NULL,
  `Month` int(2) NOT NULL,
  `Year` int(4) NOT NULL,
  `Salary` int(16) NOT NULL,
  `Bonus` int(16) NOT NULL,
  `Total` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bonus`
--

INSERT INTO `bonus` (`kd_bonus`, `Emp_code`, `Month`, `Year`, `Salary`, `Bonus`, `Total`) VALUES
(1, '2', 3, 2011, 4500000, 225000, 0),
(2, '4', 1, 2011, 100, 5, 1),
(3, '3', 6, 2011, 1000, 50, 1050),
(4, '1', 4, 2020, 4500000, 225000, 0),
(5, '3', 4, 2020, 1000, 50, 1050),
(6, '3', 4, 2020, 4500000, 225000, 0),
(7, '1', 1, 2020, 4500000, 225000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_code` int(12) NOT NULL,
  `Emp_name` char(40) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Address` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_code`, `Emp_name`, `Birth_Date`, `Address`) VALUES
(1, 'syahdan2', '2020-12-15', 'Jl kolonel sugiono 32a kureksari waru sidoarjo'),
(2, 'syahdan13', '2020-12-24', 'Jl kolonel sugiono 32a kureksari waru sidoarjo'),
(3, 'andi', '2020-12-24', 'Jl kolonel sugiono 32a kureksari waru sidoarjo'),
(4, 'budi', '2021-01-01', 'Jl kolonel sugiono 32a kureksari waru sidoarjo'),
(5, 'syahdan', '2020-12-18', 'Jl kolonel sugiono 32a kureksari waru sidoarjo');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `kd_salary` int(11) NOT NULL,
  `emp_code` int(16) NOT NULL,
  `Month` int(2) NOT NULL,
  `Year` int(4) NOT NULL,
  `Sallary` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`kd_salary`, `emp_code`, `Month`, `Year`, `Sallary`) VALUES
(1, 1, 1, 2011, 3500000),
(2, 2, 1, 2011, 4200000),
(3, 2, 2, 2011, 4200000),
(4, 2, 3, 2011, 4500000),
(5, 1, 1, 2011, 2000),
(6, 1, 1, 2011, 2000),
(8, 3, 4, 2020, 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`kd_bonus`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_code`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`kd_salary`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `kd_bonus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_code` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `kd_salary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
