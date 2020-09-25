-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 11:38 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `B_ID` int(10) NOT NULL,
  `B_DATE` date NOT NULL,
  `B_TIME` time NOT NULL,
  `CUSTOMER_NAME` varchar(25) DEFAULT NULL,
  `U_NAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill_medicine`
--

CREATE TABLE `bill_medicine` (
  `B_ID` int(10) NOT NULL,
  `M_ID` int(10) NOT NULL,
  `QNT` int(10) NOT NULL,
  `DISCOUNT` int(10) DEFAULT NULL,
  `AMOUNT` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `M_ID` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `FORMULA` varchar(30) DEFAULT NULL,
  `C_NAME` varchar(30) DEFAULT NULL,
  `SALE_PRICE` int(10) NOT NULL DEFAULT '0',
  `PURCHASE_PRICE` int(10) NOT NULL DEFAULT '0',
  `PACK_QNT` int(10) DEFAULT NULL,
  `SALE_QNT` int(10) DEFAULT NULL,
  `AVAILABLE_QNT` int(10) DEFAULT NULL,
  `U_NAME` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `P_ID` int(10) NOT NULL,
  `INVOICE_NO` int(10) NOT NULL,
  `INVOICE_DATE` date DEFAULT NULL,
  `PURCHASE_DATE` date NOT NULL,
  `PURHCASE_TIME` time DEFAULT NULL,
  `U_NAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaser`
--

CREATE TABLE `purchaser` (
  `P_NUMBER` int(25) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `PHONE_NO` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `U_NAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_medicine`
--

CREATE TABLE `purchase_medicine` (
  `P_ID` int(10) NOT NULL,
  `M_ID` int(10) NOT NULL,
  `QNT` int(10) NOT NULL,
  `DISCOUNT` int(10) DEFAULT NULL,
  `AMOUNT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_NAME` varchar(25) NOT NULL,
  `PASS` varchar(25) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `TYPE` varchar(25) NOT NULL,
  `PHONE_NO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`B_ID`),
  ADD KEY `U_NAME` (`U_NAME`);

--
-- Indexes for table `bill_medicine`
--
ALTER TABLE `bill_medicine`
  ADD PRIMARY KEY (`B_ID`,`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`M_ID`),
  ADD KEY `U_NAME` (`U_NAME`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `U_NAME` (`U_NAME`);

--
-- Indexes for table `purchaser`
--
ALTER TABLE `purchaser`
  ADD PRIMARY KEY (`P_NUMBER`),
  ADD KEY `U_NAME` (`U_NAME`);

--
-- Indexes for table `purchase_medicine`
--
ALTER TABLE `purchase_medicine`
  ADD PRIMARY KEY (`P_ID`,`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_NAME`),
  ADD UNIQUE KEY `PHONE_NO` (`PHONE_NO`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`U_NAME`) REFERENCES `users` (`U_NAME`);

--
-- Constraints for table `bill_medicine`
--
ALTER TABLE `bill_medicine`
  ADD CONSTRAINT `bill_medicine_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `bill` (`B_ID`),
  ADD CONSTRAINT `bill_medicine_ibfk_2` FOREIGN KEY (`M_ID`) REFERENCES `medicine` (`M_ID`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`U_NAME`) REFERENCES `users` (`U_NAME`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`U_NAME`) REFERENCES `users` (`U_NAME`);

--
-- Constraints for table `purchaser`
--
ALTER TABLE `purchaser`
  ADD CONSTRAINT `purchaser_ibfk_1` FOREIGN KEY (`U_NAME`) REFERENCES `users` (`U_NAME`);

--
-- Constraints for table `purchase_medicine`
--
ALTER TABLE `purchase_medicine`
  ADD CONSTRAINT `purchase_medicine_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `purchase` (`P_ID`),
  ADD CONSTRAINT `purchase_medicine_ibfk_2` FOREIGN KEY (`M_ID`) REFERENCES `medicine` (`M_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
