-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 26, 2021 at 03:02 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `contact_Id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `subjects` varchar(10) NOT NULL,
  `msg` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_Id`, `name`, `mail`, `subjects`, `msg`) VALUES
(1, 'Nethmini', 'nethmini@gmail.com', 'request de', 'can you send me doctor details'),
(2, 'Dinuka Gunarathne', 'dinukahax@gmail.com', 'hi', 'blrtfhdftrdfgdg ddsfsd'),
(3, 'dinuka gunarathne', 'abc@gmail.com', 'hi', 'dsfgsdgf '),
(4, 'dinuka gunarathne', 'abc@gmail.com', 'hi', 'yu dtydtryh'),
(5, 'dinuka gunarathne', 'abc@gmail.com', 'hi', 'dfdsf'),
(6, 'wewqe', 'dinukahax@gmail.com', 'hi', 'bla bvla'),
(7, 'Dinuka Gunarathne', 'dinukahax@gmail.com', 'hi', 'VFVFDVFDVF');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `Scode` varchar(5) NOT NULL,
  `Dcode` varchar(5) NOT NULL,
  `Weekday` varchar(5) NOT NULL,
  `Dname` varchar(50) NOT NULL,
  `Fee` int NOT NULL,
  PRIMARY KEY (`Scode`,`Dcode`,`Weekday`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Scode`, `Dcode`, `Weekday`, `Dname`, `Fee`) VALUES
('S001', 'D001', 'MON', 'PROF SURANJITH SENEVIRATNE', 2000),
('S001', 'D002', 'TUE', 'PROF ANURA WEERASINGHE', 2000),
('S001', 'D003', 'WED', 'PROF (MRS.) G. NEELIKA MALAVIGE', 2000),
('S001', 'D004', 'FRI', 'DR AJITH AMARASINGHE', 1800),
('S002', 'D005', 'TUE', 'DR ATHULA ABEYSUNDARA', 1600),
('S002', 'D006', 'THU', 'DR SARATH AMARADASA', 1650),
('S002', 'D007', 'FRI', 'DR W M HILARY COORAY', 1600),
('S002', 'D008', 'SAT', 'DR NASAR ABDULWADOOD', 1700),
('S003', 'D009', 'MON', 'DR KANCHANA SINGAPPULI', 2000),
('S003', 'D009', 'FRI', 'DR KANCHANA SINGAPPULI', 2000),
('S004', 'D010', 'SUN', 'DR (MRS) P.P. FERNANDO', 2500),
('S004', 'D011', 'TUE', 'DR A. KAILAINATHAN', 2500),
('S004', 'D012', 'FRI', 'DR A.S. WITHANAGE', 2700),
('S005', 'D013', 'MON', 'DR (MRS) AJANTHA LIYANAGE', 1500),
('S005', 'D013', 'WED', 'DR (MRS) AJANTHA LIYANAGE', 1500),
('S005', 'D014', 'TUE', 'DR (MRS) C .SELVI PERERA', 1500),
('S005', 'D014', 'FRI', 'DR (MRS) C .SELVI PERERA', 1500),
('S006', 'D015', 'MON', 'DR A.S.L LIYANARACHCHI', 2200),
('S006', 'D016', 'WED', 'DR ANIL KUMAR', 2500),
('S006', 'D017', 'FRI', 'DR ASUNGA DUNUWILLE', 2450),
('S007', 'D018', 'MON', 'DR D.P RUPASINGHE', 1800),
('S007', 'D018', 'WED', 'DR D.P RUPASINGHE', 1800),
('S007', 'D018', 'FRI', 'DR D.P RUPASINGHE', 1800),
('S007', 'D019', 'TUE', 'DR H.W PERERA', 1800),
('S007', 'D019', 'THU', 'DR H.W PERERA', 1800),
('S007', 'D019', 'SAT', 'DR H.W PERERA', 1800),
('S008', 'D020', 'MON', 'DR CHAMPIKA GUNAWARDANA', 2500),
('S008', 'D020', 'SAT', 'DR CHAMPIKA GUNAWARDANA', 2500),
('S008', 'D021', 'THU', 'DR DARSHANA WIJEGUNASINGHE', 2500),
('S009', 'D022', 'THU', 'DR SHAMINDA KAHANDAWA', 1900),
('S009', 'D022', 'SAT', 'DR SHAMINDA KAHANDAWA', 1900),
('S010', 'D023', 'MON', 'DR DULIP PERERA', 2300),
('S010', 'D023', 'THU', 'DR DULIP PERERA', 2300),
('S010', 'D024', 'TUE', 'DR A. SHASHANKA RATHNAYAKE', 2500),
('S010', 'D024', 'FRI', 'DR A. SHASHANKA RATHNAYAKE', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_Id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `age` int NOT NULL,
  `phone` varchar(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  PRIMARY KEY (`feedback_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_Id`, `name`, `age`, `phone`, `mail`, `rate`, `feedback`) VALUES
(1, 'Nethmini', 23, '076-9878011', 'nethmini@gmail.com', 'Good', 'Thank you for your service'),
(2, 'Dinuka Gunarathne', 50, '077-9923864', 'dinukahax@gmail.com', 'bad', 'sadsadsaasdsadsa'),
(3, 'Dinuka Gunarathne', 27, '0779923864', 'dinukahax@gmail.com', 'average', 'fdfdsfdsfdsfds');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_Id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `number` varchar(19) NOT NULL,
  `expiry` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cvc` int NOT NULL,
  PRIMARY KEY (`payment_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_Id`, `type`, `name`, `number`, `expiry`, `cvc`) VALUES
(20, 'paypal', 'nsb', '4545 4545 4545 4545', '06/2025', 898),
(19, 'credit', 'abcd', '0126 0213 0126 0123', '02/2020', 999),
(18, 'credit', 'Dinuka Gunarathne', '1023 4589 2168 4598', '06/2025', 111),
(17, 'credit', 'Dinuka Gunarathne', '1023 4589 2168 4598', '06/2025', 111);

-- --------------------------------------------------------

--
-- Table structure for table `pcr`
--

DROP TABLE IF EXISTS `pcr`;
CREATE TABLE IF NOT EXISTS `pcr` (
  `testId` int NOT NULL AUTO_INCREMENT,
  `test_type` varchar(30) NOT NULL,
  `person_type` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int NOT NULL,
  `address` varchar(30) NOT NULL,
  `telephone` int NOT NULL,
  `nicpass` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `adate` date NOT NULL,
  PRIMARY KEY (`testId`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pcr`
--

INSERT INTO `pcr` (`testId`, `test_type`, `person_type`, `name`, `age`, `address`, `telephone`, `nicpass`, `gender`, `adate`) VALUES
(1, 'ANTIGEN TEST', 'FOREIGN', 'Dinuka Gunarathne', 50, 'No 45 Hatton Road', 779923864, '111111111V', 'MALE', '2021-08-31'),
(2, 'ANTIGEN TEST', 'FOREIGN', 'Dinuka Gunarathne', 50, 'No 45 Hatton Road', 779923864, '111111111V', 'MALE', '2021-08-31'),
(3, 'ANTIGEN TEST', 'LOCAL', 'Dinuka Gunarathne', 50, 'No 45 Hatton Road', 779923864, '111111111V', 'MALE', '2021-08-27'),
(4, 'ANTIGEN TEST', 'LOCAL', 'Dinuka Gunarathne', 50, 'No 45 Hatton Road', 779923864, '111111111V', 'MALE', '2021-08-27'),
(5, 'ANTIGEN TEST', 'LOCAL', 'Dinuka Gunarathne', 50, 'No 45 Hatton Road', 779923864, '111111111V', 'MALE', '2021-08-27'),
(6, 'ANTIGEN TEST', 'LOCAL', 'Dinuka Gunarathne', 50, 'No 45 Hatton Road', 779923864, '111111111V', 'MALE', '2021-09-04'),
(7, 'ANTIGEN TEST', 'LOCAL', 'Dinuka Gunarathne1', 27, 'No 45 Hatton Road', 779923864, '111111111V', 'MALE', '2021-08-31'),
(8, 'ANTIGEN TEST', 'LOCAL', 'Dinuka Gunarathne12', 50, 'No 45 Hatton Road', 779923864, '111111111V', 'FEMALE', '2021-08-31'),
(9, 'ANTIGEN TEST', 'FOREIGN', 'Marian', 22, 'No 45 Hatton Road', 779923864, '111111111V', 'FEMALE', '2021-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `code` int NOT NULL AUTO_INCREMENT,
  `country` varchar(10) NOT NULL,
  `mar` varchar(5) NOT NULL,
  `name` varchar(15) NOT NULL,
  `phone` int NOT NULL,
  `nic` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `Dname` varchar(50) NOT NULL,
  `ConsultantFee` int NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`code`, `country`, `mar`, `name`, `phone`, `nic`, `email`, `address`, `Dname`, `ConsultantFee`) VALUES
(26, 'AS', 'MR', 'Nethmini', 762323456, '343434343v', 'dinukahax@gmail.com', 'No 45 Hatton Road', 'PROF ANURA WEERASINGHE', 2000),
(2, 'Sri Lanka', 'MR', 'Dinuka Gunarath', 779923864, '952460668v', 'dinukahax@gmail.com', 'No 45 Hatton Road', 'PROF SURANJITH SENEVIRATNE', 2000),
(5, 'SA', 'MR', 'Dinuka Gunarath', 779923864, '952460668v', 'dinukahax@gmail.com', 'No 45 Hatton Road', 'PROF SURANJITH SENEVIRATNE', 2000),
(6, 'RS', 'MR', 'Dinuka Gunarath', 779923864, '111111111v', 'dinukahax@gmail.com', 'No 45 Hatton Road', 'PROF SURANJITH SENEVIRATNE', 2000),
(7, 'AS', 'MR', 'Dinuka Gunarath', 779923864, '952460668v', 'dinukahax@gmail.com', 'No 45 Hatton Road', 'PROF SURANJITH SENEVIRATNE', 2000),
(8, 'AU', 'MR', 'Dinuka Gunarath', 779923864, '952460668v', 'dinukahax@gmail.com', 'No 45 Hatton Road', 'PROF SURANJITH SENEVIRATNE', 2000),
(15, 'AL', 'MR', 'Dinuka Gunarath', 779923864, '111111111v', 'dinukahax@gmail.com', 'No 45 Hatton Road', 'PROF SURANJITH SENEVIRATNE', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

DROP TABLE IF EXISTS `specialization`;
CREATE TABLE IF NOT EXISTS `specialization` (
  `Scode` varchar(5) NOT NULL,
  `Sname` varchar(50) NOT NULL,
  PRIMARY KEY (`Scode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`Scode`, `Sname`) VALUES
('S001', 'ALLERGIST'),
('S002', 'DENTIST'),
('S003', 'PRDIATRICIAN'),
('S004', 'SURGEON'),
('S005', 'THEROPIST'),
('S006', 'CARDIOLOGIST'),
('S007', 'RADIOLOGIST'),
('S008', 'NEUROLOGIST'),
('S009', 'ENDOCRYNOLOGIST'),
('S010', 'DREMATOLOGIST');

-- --------------------------------------------------------

--
-- Table structure for table `usersl`
--

DROP TABLE IF EXISTS `usersl`;
CREATE TABLE IF NOT EXISTS `usersl` (
  `uid` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `uname` varchar(40) NOT NULL,
  `age` int NOT NULL,
  `mobile` int NOT NULL,
  `gend` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usersl`
--

INSERT INTO `usersl` (`uid`, `uname`, `age`, `mobile`, `gend`, `pwd`) VALUES
('199875410v', 'Marian ', 23, 765234489, 'f', 'marian1234'),
('19987541033', 'Geeth', 22, 765234489, 'm', 'geeth1234'),
('123456789v', 'admin', 22, 2147483647, 'f', 'D1234567');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
