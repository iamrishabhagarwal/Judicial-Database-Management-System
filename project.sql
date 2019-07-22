-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 09:13 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_judge` ()  select * from judge$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_lawyer` ()  select * from lawyer$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `auid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `apwd` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`auid`, `apwd`) VALUES
('qwe123', '123'),
('ris123', '123'),
('skag123', '123'),
('vic123', '123'),
('wer123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `casedetails`
--

CREATE TABLE `casedetails` (
  `caseid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `plaintiff` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `plaintiff_dob` date DEFAULT NULL,
  `prosecutorid` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accused` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accused_dob` date DEFAULT NULL,
  `defenceid` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `casedetails`
--

INSERT INTO `casedetails` (`caseid`, `plaintiff`, `plaintiff_dob`, `prosecutorid`, `accused`, `accused_dob`, `defenceid`, `date_added`) VALUES
('cs001', 'xyz', '1990-06-12', 'l001', 'pqr', '1991-07-13', 'l005', '2018-11-21 07:14:35'),
('cs002', 'abc', '1987-01-20', 'l001', 'def', '1990-01-30', 'l002', '2018-11-21 07:14:35'),
('cs003', 'fgh', '2018-10-01', 'l008', 'ijk', '2018-10-05', 'l009', '2018-11-24 02:42:06'),
('cs004', 'bob', '1992-05-13', NULL, 'Ron', '1991-12-03', 'l001', '2018-11-21 07:14:35'),
('cs005', 'ijk', '1985-11-14', 'l006', 'uvw', '1990-10-17', NULL, '2018-11-21 07:14:35'),
('cs006', 'lmn', '1989-02-15', 'l003', 'cde', '1991-03-22', 'l006', '2018-11-21 07:14:35'),
('cs007', 'bcd', '1995-03-13', 'l005', 'stu', '1995-07-18', 'l007', '2018-11-21 07:14:35'),
('cs008', 'Fawad Khan', '1973-07-19', NULL, 'Arjun Rampal', '1968-10-15', 'l001', '2018-11-21 07:14:35'),
('cs009', 'ghij', '1977-06-21', 'l003', 'gajini', '1975-02-03', 'l002', '2018-11-21 07:14:35');

--
-- Triggers `casedetails`
--
DELIMITER $$
CREATE TRIGGER `dateadd` AFTER INSERT ON `casedetails` FOR EACH ROW BEGIN
SET@date_added=NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `caseid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `judgeid` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filing_date` date DEFAULT NULL,
  `next_date` date DEFAULT NULL,
  `chargeid` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courtid` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseid`, `judgeid`, `filing_date`, `next_date`, `chargeid`, `courtid`, `status`) VALUES
('cs001', 'j001', '2018-05-12', '2018-07-01', 'cr001', 'cr001', 'Pending'),
('cs002', 'j001', '2018-06-13', '2018-07-12', 'cr001', 'cr001', 'Pending'),
('cs003', NULL, '2017-02-09', '2017-11-21', 'cr005', 'cr004', 'pending'),
('cs004', 'j003', '2018-06-29', '2018-07-21', 'cr003', 'cr002', 'Pending'),
('cs005', NULL, '2018-06-25', '2018-07-28', 'cr004', 'cr003', 'Pending'),
('cs006', NULL, '2018-07-30', '2018-11-17', 'cr005', 'cr004', 'Final Hearing'),
('cs007', NULL, '2018-07-12', '2018-07-24', 'cr005', 'cr005', 'Pending'),
('cs008', 'j003', '2018-11-17', '2018-12-17', 'cr004', 'cr002', 'pending'),
('cs009', 'j003', '2018-11-20', '2018-11-27', 'cr003', 'cr004', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `chargeid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `charge_details` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`chargeid`, `charge_details`) VALUES
('cr001', 'Robbery'),
('cr002', 'Murder'),
('cr003', 'Attempt to Murder'),
('cr004', 'Kidnapping'),
('cr005', 'Rape');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `courtid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`courtid`, `category`, `location`) VALUES
('cr001', 'High Court', 'Mumbai'),
('cr002', 'Supreme Court', 'New Delhi'),
('cr003', 'High Court', 'Banglore'),
('cr004', 'Sessions Court', 'Lucknow'),
('cr005', 'Sessions Court', 'Varanasi');

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE `judge` (
  `jid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courtid` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `juid` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jpwd` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`jid`, `name`, `courtid`, `dob`, `juid`, `jpwd`) VALUES
('j001', 'Ram', 'cr001', '1980-06-01', 'ram123', '123'),
('j002', 'Shyam', 'cr002', '1975-01-07', 'shyam123', '123'),
('j003', 'John', 'cr002', '1978-01-31', 'john123', '123'),
('j004', 'sumeet', 'cr004', '1968-08-14', 'sumeet123', '123'),
('j006', 'Sushil', 'cr003', '1972-12-29', 'sushil123', '123');

--
-- Triggers `judge`
--
DELIMITER $$
CREATE TRIGGER `del_judges` AFTER DELETE ON `judge` FOR EACH ROW INSERT INTO redt_judges(jid, name, courtid, dob, juid, jpwd)
VALUES(OLD.jid, OLD.name, OLD.courtid, OLD.dob, OLD.juid, OLD.jpwd)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `lid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `luid` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lpwd` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`lid`, `name`, `dob`, `luid`, `lpwd`) VALUES
('l001', 'abc', '1985-08-30', 'abc1234', '1234'),
('l002', 'pqr', '1982-06-11', 'pqr1234', '1234'),
('l003', 'xyz', '1979-03-13', 'xyz1234', '1234'),
('l004', 'mno', '1979-07-18', 'mno1234', '1234'),
('l005', 'ijk', '1984-02-07', 'ijk1234', '1234'),
('l006', 'lmn', '1983-10-31', 'lmn1234', '1234'),
('l007', 'uvw', '1981-12-31', 'uvw1234', '1234'),
('l008', 'Harvey Specter', '1975-05-27', 'harvey1234', '1234'),
('l009', 'mike ross', '1980-06-17', 'mike1234', '1234'),
('l010', 'dfg', '2018-11-15', 'dfg1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `redt_judges`
--

CREATE TABLE `redt_judges` (
  `jid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courtid` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `juid` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jpwd` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `redt_judges`
--

INSERT INTO `redt_judges` (`jid`, `name`, `courtid`, `dob`, `juid`, `jpwd`) VALUES
('j005', 'Rock', 'cr004', '1981-11-23', 'rock123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`auid`);

--
-- Indexes for table `casedetails`
--
ALTER TABLE `casedetails`
  ADD PRIMARY KEY (`caseid`),
  ADD KEY `prosecutorid` (`prosecutorid`),
  ADD KEY `defenceid` (`defenceid`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`caseid`),
  ADD KEY `judgeid` (`judgeid`),
  ADD KEY `chargeid` (`chargeid`),
  ADD KEY `courtid` (`courtid`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`chargeid`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`courtid`);

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `redt_judges`
--
ALTER TABLE `redt_judges`
  ADD PRIMARY KEY (`jid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casedetails`
--
ALTER TABLE `casedetails`
  ADD CONSTRAINT `casedetails_ibfk_1` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON DELETE CASCADE,
  ADD CONSTRAINT `casedetails_ibfk_2` FOREIGN KEY (`prosecutorid`) REFERENCES `lawyer` (`lid`) ON DELETE SET NULL,
  ADD CONSTRAINT `casedetails_ibfk_3` FOREIGN KEY (`defenceid`) REFERENCES `lawyer` (`lid`) ON DELETE SET NULL;

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`judgeid`) REFERENCES `judge` (`jid`) ON DELETE SET NULL,
  ADD CONSTRAINT `cases_ibfk_2` FOREIGN KEY (`chargeid`) REFERENCES `charges` (`chargeid`) ON DELETE SET NULL,
  ADD CONSTRAINT `cases_ibfk_3` FOREIGN KEY (`courtid`) REFERENCES `court` (`courtid`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
