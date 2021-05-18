-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 01:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhbdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `tid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`tid`, `name`, `email`, `current_balance`) VALUES
(1, 'Ganesh', 'ganesh@gmail.com', 98500),
(2, 'Rahul', 'rahul@gmail.com', 200500),
(3, 'Rohit', 'rohit@gmail.com', 301000),
(4, 'Akshay', 'akshay@gmail.com', 4100000),
(5, 'Suniel', 'suniel@gmail.com', 500000),
(6, 'Jasprit', 'jasprit@gmail.com', 500000),
(7, 'Jay', 'jay@gmail.com', 400000),
(8, 'Soham', 'soham@gmail.com', 300000),
(9, 'Jerrin', 'jerrin@gmail.com', 200000),
(10, 'Shubham', 'shubham@gmail.com', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `TranId` int(255) NOT NULL,
  `FromCustomer` varchar(255) NOT NULL,
  `ToCustomer` varchar(255) NOT NULL,
  `AmtTransfer` double NOT NULL,
  `TranDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`TranId`, `FromCustomer`, `ToCustomer`, `AmtTransfer`, `TranDate`) VALUES
(1, '1', '2', 500, '2021-05-18 14:38:35');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwtransaction`
-- (See below for the actual view)
--
CREATE TABLE `vwtransaction` (
`TranId` int(255)
,`FromCustomer` varchar(255)
,`ToCustomer` varchar(255)
,`AmtTransfer` double
,`TranDate` datetime
,`fromcustName` varchar(255)
,`TocustName` varchar(255)
,`Pdate` date
);

-- --------------------------------------------------------

--
-- Structure for view `vwtransaction`
--
DROP TABLE IF EXISTS `vwtransaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwtransaction`  AS SELECT `tr`.`TranId` AS `TranId`, `tr`.`FromCustomer` AS `FromCustomer`, `tr`.`ToCustomer` AS `ToCustomer`, `tr`.`AmtTransfer` AS `AmtTransfer`, `tr`.`TranDate` AS `TranDate`, `frcust`.`name` AS `fromcustName`, `tocust`.`name` AS `TocustName`, cast(`tr`.`TranDate` as date) AS `Pdate` FROM ((`transfer` `tr` join (select `customer`.`tid` AS `tid`,`customer`.`name` AS `name`,`customer`.`email` AS `email`,`customer`.`current_balance` AS `current_balance` from `customer`) `frcust` on(`tr`.`FromCustomer` = `frcust`.`tid`)) join (select `customer`.`tid` AS `tid`,`customer`.`name` AS `name`,`customer`.`email` AS `email`,`customer`.`current_balance` AS `current_balance` from `customer`) `tocust` on(`tr`.`ToCustomer` = `tocust`.`tid`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`TranId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `tid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `TranId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
