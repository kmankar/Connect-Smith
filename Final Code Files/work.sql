-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 06:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysmith`
--

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `uID` char(8) NOT NULL,
  `compID` char(10) NOT NULL,
  `workStartDate` date DEFAULT NULL,
  `workEndDate` date DEFAULT NULL,
  `workPosition` char(50) DEFAULT NULL,
  `workLoc` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`uID`, `compID`, `workStartDate`, `workEndDate`, `workPosition`, `workLoc`) VALUES
('11026354', 'S8426', '2017-08-01', '2018-11-29', 'Lead Business Analyst', 'San Francisco'),
('11172638', 'M16725', '2018-06-15', '2018-11-29', 'Systems Analyst', 'Michigan'),
('11226352', 'C863562', '2017-11-10', '2018-12-01', 'Sr Data Analyst', 'London'),
('11278634', 'M16725', '2018-08-10', '2018-11-29', 'Jr Consultant', 'Michigan'),
('11298365', 'C2987', '2012-06-15', '2018-11-29', 'Data Scientist', 'Seattle'),
('11654328', 'C863562', '2017-05-06', '2018-11-29', 'Senior Data Engineer', 'Washington'),
('11678254', 'C1980', '2012-08-10', '2015-06-10', 'Jr Data Analyst', 'McLean'),
('11678254', 'S8426', '2015-06-20', '2018-11-29', 'Operations Analyst', 'San Francisco'),
('11679824', 'C2987', '2016-06-15', '2018-11-29', 'Sr Data Analyst', 'Seattle'),
('11679824', 'S8426', '2013-01-15', '2016-06-10', 'Jr Data Analyst', 'Baltimore'),
('11768942', 'C863562', '2015-10-06', '2017-05-31', 'Junior Data Engineer', 'New Jersey'),
('11768942', 'S9865', '2017-02-06', '2018-11-29', 'Senior Data Engineer', 'Austin'),
('11778908', 'C1980', '2015-08-01', '2018-11-29', 'Manager of Analytics', 'San Francisco'),
('11892534', 'S9865', '2018-02-06', '2018-11-29', 'Associate', 'Seattle'),
('13226354', 'C863562', '2017-11-10', '2018-12-01', 'Sr Data Analyst', 'London'),
('13226360', 'C863562', '2016-11-10', '2018-12-02', 'Jr Data Analyst', 'Washington DC'),
('13226361', 'C863562', '2011-10-20', '2018-12-02', 'Jr Data Analyst', 'Washington DC'),
('13226362', 'C863562', '2012-10-20', '2018-12-02', 'Jr Data Analyst', 'New York');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`uID`,`compID`),
  ADD KEY `fk_compid` (`compID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `fk_compid` FOREIGN KEY (`compID`) REFERENCES `company` (`compID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_wuid` FOREIGN KEY (`uID`) REFERENCES `alumnus` (`uID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
