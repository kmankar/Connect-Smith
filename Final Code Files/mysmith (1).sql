-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 07:31 AM
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
-- Table structure for table `alumnus`
--

CREATE TABLE `alumnus` (
  `uID` char(8) NOT NULL,
  `alumFName` varchar(20) DEFAULT NULL,
  `alumLName` varchar(20) DEFAULT NULL,
  `alumDOB` date DEFAULT NULL,
  `alumCity` varchar(20) DEFAULT NULL,
  `alumBatch` char(10) DEFAULT NULL,
  `alumEmail` varchar(50) DEFAULT NULL,
  `alumGender` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnus`
--

INSERT INTO `alumnus` (`uID`, `alumFName`, `alumLName`, `alumDOB`, `alumCity`, `alumBatch`, `alumEmail`, `alumGender`) VALUES
('11026354', 'Laura', 'Sakaria', '1991-01-29', 'Austin', '2014', 'laura.sakaria@rhsmith.umd.edu', 'Female'),
('11172638', 'Varsha', 'Singh', '1992-03-10', 'Michigan', '2016', 'varsha.singh@rhsmith.umd.edu', 'Female'),
('11226351', 'Holly', 'Chauhan', '1993-01-29', 'Las Vegas', '2017', 'holly.chauhan@rhsmith.umd.edu', 'Female'),
('11226352', 'Babita', 'Costa', '1990-02-07', 'London', '2017', 'babita.costa@rhsmith.umd.edu', 'Female'),
('11278634', 'Charles', 'Penninger', '1990-07-10', 'Ohio', '2016', 'charles.penninger@rhsmith.umd.edu', 'Male'),
('11296259', 'Mike', 'Spectre', '1994-02-27', 'Newark', '2017', 'mike.spectre@rhsmith.umd.edu', 'Male'),
('11298365', 'Raymond', 'Ling', '1985-02-16', 'Denver', '2010', 'raymond.ling@rhsmith.umd.edu', 'Male'),
('11321359', 'Arijit', 'Sheeran', '1995-04-30', 'Washington DC', '2017', 'arijit.sheeran@rhsmith.umd.edu', 'Male'),
('11654328', 'Yu', 'Chen', '1994-10-20', 'Ohio', '2016', 'yu.chen@rhsmith.umd.edu', 'Female'),
('11678254', 'Varun', 'Srinivasan', '1980-04-18', 'Chicago', '2010', 'varun.srinivasan@rhsmith.umd.edu', 'Male'),
('11679824', 'Margaret', 'Jacob', '1988-08-12', 'New Jersey', '2011', 'margaret.jacob@rhsmith.umd.edu', 'Female'),
('11768942', 'John', 'Fouedje', '1992-06-16', 'New York', '2014', 'john.fouedje@rhsmith.umd.edu', 'Male'),
('11778908', 'Denise', 'Agarwal', '1990-07-25', 'Seattle', '2017', 'denise.agarwal@rhsmith.umd.edu', 'Female'),
('11892534', 'Brian', 'Brown', '1993-08-28', 'Washington', '2016', 'brian.brown@rhsmith.umd.edu', 'Male'),
('13226312', 'Jose', 'Conte', '1995-02-26', 'Manchester', '2017', 'jose.conte@rhsmith.umd.edu', 'Male'),
('13226352', 'Virat', 'Ronaldo', '1993-08-25', 'Mumbai', '2016', 'virat.ronaldo@rhsmith.umd.edu', 'Male'),
('13226353', 'Albert', 'Mathew', '1992-05-15', 'Seattle', '2016', 'albert.mathew@rhsmith.umd.edu', 'Male'),
('13226354', 'Kaivalya', 'Powale', '1996-11-27', 'Mumbai', '2016', 'kaivalya.powale@rhsmith.umd.edu', 'Male'),
('13226355', 'Aum', 'Vishwas', '1997-03-21', 'Mumbai', '2017', 'aum.vishwas@rhsmith.umd.edu', 'Male'),
('13226356', 'Shweta', 'Sathisan', '1997-05-14', 'Mumbasa', '2016', 'shweta.sathisan@rhsmith.umd.edu', 'Female'),
('13226357', 'Robert', 'Smith', '1993-01-01', 'Omaha', '2015', 'robert.smith@rhsmith.umd.edu', 'Male'),
('13226358', 'Pranav', 'Phatak', '1990-02-28', 'Cleveland', '2013', 'pranav.phatak@rhsmith.umd.edu', 'Male'),
('13226360', 'Vishal', 'Mohite', '1991-02-18', 'Seattle', '2014', 'vishal.mohite@rhsmith.umd.edu', 'Female'),
('13226361', 'Vishal', 'Tambe', '1991-05-18', 'Seattle', '2014', 'vishal.tambe@rhsmith.umd.edu', 'Male'),
('13226362', 'Keyur', 'Mandale', '1992-05-11', 'Seattle', '2014', 'keyur.mandale@rhsmith.umd.edu', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `alumnusskill`
--

CREATE TABLE `alumnusskill` (
  `uID` char(8) NOT NULL,
  `skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumnusskill`
--

INSERT INTO `alumnusskill` (`uID`, `skill`) VALUES
('11026354', 'Database management'),
('11172638', 'Logical reasoning'),
('11172638', 'Public speaking'),
('11278634', 'C Programming'),
('11298365', 'Big Data'),
('11654328', 'R'),
('11654328', 'Tableau'),
('11678254', 'Management'),
('11678254', 'Neural networks'),
('11679824', 'Cloud Computing'),
('11679824', 'Machine Learning'),
('11768942', 'Java'),
('11768942', 'Python'),
('11778908', 'Python'),
('11778908', 'R'),
('11892534', 'Salesforce');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `certID` char(10) NOT NULL,
  `uID` char(8) NOT NULL,
  `certName` char(50) DEFAULT NULL,
  `expiryDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`certID`, `uID`, `certName`, `expiryDate`) VALUES
('C100', '11778908', 'Basic R', '2020-12-31'),
('C102', '11768942', 'Python for Data Science', '2019-01-31'),
('C110', '11768942', 'Project Management', '2021-04-30'),
('C1320', '13226353', 'MS Office', '2022-02-18'),
('C1321', '13226353', 'MS Office', '0000-00-00'),
('C1332', '13226353', 'Web Development', '2020-01-01'),
('C1333', '13226353', 'Tableau', '2020-01-01'),
('C1334', '13226353', 'Python edX', '2020-01-01'),
('C1335', '13226354', 'Project Management', '2020-01-01'),
('C1336', '13226355', 'Project Management', '2020-01-01'),
('C1337', '13226356', 'Web Development', '2020-01-01'),
('C1338', '13226357', 'Web Development', '2020-01-01'),
('C1339', '13226353', 'Web Development', '2020-01-01'),
('C200', '11679824', 'Python edX', '2016-10-31'),
('C201', '11172638', 'Ruby on Rails', '2020-08-10'),
('C210', '11172638', 'Web Development', '2022-10-15'),
('C300', '11678254', 'Tableau', '2016-05-25'),
('C310', '11298365', 'MS Office', '2020-11-20'),
('C320', '11026354', 'MS Office', '2022-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `compID` char(10) NOT NULL,
  `compName` varchar(50) DEFAULT NULL,
  `compType` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`compID`, `compName`, `compType`) VALUES
('C1980', 'EY', 'Auditing'),
('C2987', 'Amazon.com', 'E-Commerce'),
('C863562', 'Deloitte LLP', 'Consulting'),
('M16725', 'HealthCare Solutions', 'Healthcare'),
('S8426', 'Sony', 'Electronics'),
('S9865', 'Paypal', 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `projID` char(10) NOT NULL,
  `uID` char(8) NOT NULL,
  `transID` char(10) NOT NULL,
  `donationAmount` decimal(10,0) DEFAULT NULL,
  `donationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`projID`, `uID`, `transID`, `donationAmount`, `donationDate`) VALUES
('P1', '11298365', 'TX210', '1500', '2014-11-05'),
('P100', '11892534', 'TX1000', '3000', '2017-11-11'),
('P20', '11768942', 'TX300', '2000', '2015-11-01'),
('P50', '11298365', 'TX110', '2500', '2016-10-25'),
('P50', '11679824', 'TX100', '2000', '2016-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventID` char(10) NOT NULL,
  `eventName` varchar(50) DEFAULT NULL,
  `eventDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventID`, `eventName`, `eventDate`) VALUES
('E-10-2015', 'Advanced R Workshop', '2015-03-20'),
('E-2-2011', 'Career Readiness Course', '2011-09-12'),
('E-23-2018', 'CHIDS Meetup', '2018-12-25'),
('E-3-2013', 'Networking', '2013-09-10'),
('E-3-2017', 'Interview Prep', '2017-04-10'),
('E-4-2013', 'Big Data Meet', '2013-09-10'),
('E-41-2018', 'DIGITS Meetup', '2018-12-20'),
('E-42-2018', 'MSIS Reunion', '2018-12-20'),
('E-5-2015', 'SAR Session', '2016-02-10'),
('E-5-2016', 'Basic R Workshop', '2016-10-15'),
('E-8-2014', 'Python Workshop', '2014-11-02'),
('E-9-2019', 'Interview Prep', '2019-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `eventsattendance`
--

CREATE TABLE `eventsattendance` (
  `uID` char(8) NOT NULL,
  `eventID` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventsattendance`
--

INSERT INTO `eventsattendance` (`uID`, `eventID`) VALUES
('11026354', 'E-10-2015'),
('11026354', 'E-5-2015'),
('11026354', 'E-5-2016'),
('11026354', 'E-9-2019'),
('11172638', 'E-3-2017'),
('11172638', 'E-5-2016'),
('11278634', 'E-3-2017'),
('11278634', 'E-5-2015'),
('11298365', 'E-2-2011'),
('11654328', 'E-3-2017'),
('11654328', 'E-5-2016'),
('11678254', 'E-2-2011'),
('11678254', 'E-41-2018'),
('11679824', 'E-2-2011'),
('11679824', 'E-23-2018'),
('11679824', 'E-3-2013'),
('11778908', 'E-5-2016');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projID` char(10) NOT NULL,
  `projName` varchar(200) DEFAULT NULL,
  `projDesc` varchar(200) DEFAULT NULL,
  `projStartDate` date DEFAULT NULL,
  `projEndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projID`, `projName`, `projDesc`, `projStartDate`, `projEndDate`) VALUES
('P1', 'University Ranking System', 'A website to rank the Universities in US as per their courses', '2014-02-11', '2014-12-15'),
('P100', 'Programming languages and tools', 'A website to give details about all the programming languages and different tools that support them', '2017-11-10', '2018-01-20'),
('P20', 'IS Internships and career opportunities', 'A system to keep record of internships and job opportunities offered by different companies', '2015-10-20', '2016-01-15'),
('P50', 'Smith Alumni Management', 'A website to manage the data of Alumni who had IS major', '2016-10-15', '2016-12-10');

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
-- Indexes for table `alumnus`
--
ALTER TABLE `alumnus`
  ADD PRIMARY KEY (`uID`);

--
-- Indexes for table `alumnusskill`
--
ALTER TABLE `alumnusskill`
  ADD PRIMARY KEY (`uID`,`skill`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`certID`),
  ADD KEY `fk_cuid` (`uID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`compID`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`projID`,`uID`),
  ADD KEY `fk_uid` (`uID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `eventsattendance`
--
ALTER TABLE `eventsattendance`
  ADD PRIMARY KEY (`uID`,`eventID`),
  ADD KEY `fk_eventid` (`eventID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projID`);

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
-- Constraints for table `alumnusskill`
--
ALTER TABLE `alumnusskill`
  ADD CONSTRAINT `fk_auid` FOREIGN KEY (`uID`) REFERENCES `alumnus` (`uID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `certification`
--
ALTER TABLE `certification`
  ADD CONSTRAINT `fk_cuid` FOREIGN KEY (`uID`) REFERENCES `alumnus` (`uID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `fk_projid` FOREIGN KEY (`projID`) REFERENCES `project` (`projID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`uID`) REFERENCES `alumnus` (`uID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `eventsattendance`
--
ALTER TABLE `eventsattendance`
  ADD CONSTRAINT `fk_euid` FOREIGN KEY (`uID`) REFERENCES `alumnus` (`uID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_eventid` FOREIGN KEY (`eventID`) REFERENCES `event` (`eventID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
