-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 12:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `Name` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`Name`, `Status`, `Designation`) VALUES
('', '', ''),
('Dr. Michael DeBakey', 'Canceled', 'Junior Doctor'),
('Dr. Elizabeth Blackwell', 'Approved', 'Senior Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `autorhization`
--

CREATE TABLE `autorhization` (
  `Name` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autorhization`
--

INSERT INTO `autorhization` (`Name`, `Status`, `Designation`) VALUES
('Dr. Michael DeBakey', 'Authorized', 'Junior Doctor'),
('Dr. Elizabeth Blackwell', 'Authorized', 'Senior Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Date` varchar(100) NOT NULL,
  `Complain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Date`, `Complain`) VALUES
('7/28/2022', 'Great experience as a first timer.'),
('7/29/2022', 'Quality of the Caring Process.'),
('7/30/2022', 'The hospital on a whole has a good environment and its very clean and really one of a kind');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Name` varchar(100) NOT NULL,
  `Joinning_Date` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Name`, `Joinning_Date`, `Designation`, `Status`) VALUES
('Dr. Michael DeBakey', '7/24/2020', 'Junior Doctor', 'Blocked'),
('Dr. Elizabeth Blackwell', '8/21/2018', 'Senior Doctor', 'Blocked'),
('Dr. James', '3/21/2022', 'Junior Doctor', 'Valid'),
('Dr. James', '3/21/2022', 'Junior Doctor', 'Valid'),
('Dr. James', '3/21/2022', 'Junior Doctor', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Name` varchar(100) NOT NULL,
  `Blood_Group` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Name`, `Blood_Group`, `Status`) VALUES
('Jackson', 'B(+ve)', 'Valid'),
('Anderson', 'AB(-ve)', 'Blocked'),
('James', 'B(+ve)', 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Name` varchar(100) NOT NULL,
  `Admission_Date` varchar(100) NOT NULL,
  `Release_Date` varchar(100) NOT NULL,
  `Assigned_Doctor` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Name`, `Admission_Date`, `Release_Date`, `Assigned_Doctor`, `Status`) VALUES
('freddy', '2/4/2022', '5/4/2022', 'Dr. Elizabeth Blackwell', 'Valid'),
('Jimmy', '5/2/2022', '10/2/2022', 'Dr. Michael DeBakey', 'Blocked');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Blood_group` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `C_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First_name`, `Last_name`, `Email`, `Phone`, `Address`, `Country`, `DOB`, `Blood_group`, `Gender`, `Password`, `C_Password`) VALUES
('Arman', 'Hossain', 'admin@gmail.com', 1719411594, 'b-18,Bau res', 'Bangladesh', '2022-08-09', 'AB(+ve)', 'Male', '1234', '1234'),
('Arman', 'Hossain', 'admin@gmail.com', 0, 'b-18,Bau res', 'Bhutan', '0000-00-00', 'B(+ve)', 'Male', '1234', '1234'),
('Arman', 'Hossain', 'admin@gmail.com', 1719411594, 'b-18,Bau res', 'Bangladesh', '0000-00-00', 'AB(+ve)', 'Male', '', ''),
('Arman', 'Hossain', 'admin@gmail.com', 1719411594, 'b-18,Bau res', 'Bangladesh', '0000-00-00', 'AB(+ve)', 'Male', '', ''),
('Arman', 'Hossain', 'admin@gmail.com', 1719411594, 'b-18,Bau res', 'Bangladesh', '2022-08-11', 'AB(+ve)', 'Male', '1234', '1234'),
('Arman', 'Hossain', 'Arman@gmail.com', 189, 'B-18', 'Bangladesh', '1991-09-17', 'B(+ve)', 'Male', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Month` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Month`, `Status`) VALUES
('June', '20,000$'),
('July', 'No Transaction'),
('August', 'No Transaction');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
