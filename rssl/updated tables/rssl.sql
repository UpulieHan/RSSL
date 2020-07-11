-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 05:15 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rssl`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `employeeID` varchar(10) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `salary` int(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`employeeID`, `NIC`, `salary`, `address`, `DOB`, `fname`, `lname`) VALUES
('1010', '976483747V', 125000, '149/B \"Rajapa\" Kaduwela', '2000-10-03', 'Tiny', 'Kaveesha');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `ownerNIC` varchar(10) NOT NULL,
  `chassisNo` varchar(10) NOT NULL,
  `engineNo` varchar(10) NOT NULL,
  `plateNo` varchar(10) NOT NULL,
  `model` varchar(40) NOT NULL,
  `year` date NOT NULL,
  `type` varchar(40) NOT NULL,
  `color` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `NIC` varchar(10) NOT NULL,
  `phoneNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `contactNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Name`, `Message`, `contactNo`) VALUES
(4, 'thariq', 'need help!', 774169614);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `NIC` varchar(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `packageID` varchar(1) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NIC`, `fname`, `lname`, `DOB`, `address`, `password`, `email`, `packageID`, `image`) VALUES
('976112636V', 'Kathy', 'Perera', '2000-10-25', '43/H  St.Mary\'s Road Uswetakeiyawa', '1997', 'kathyperera@gmail.com', '1', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `messageID` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contactNo` int(10) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `rate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `financialexecutive`
--

CREATE TABLE `financialexecutive` (
  `employeeID` varchar(10) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `salary` int(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `administratorID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageID` varchar(1) NOT NULL,
  `charge` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageID`, `charge`, `name`, `description`) VALUES
('1', 1000, 'Basic', 'Only does the basic repairing');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `technicianID` int(10) NOT NULL,
  `customerNIC` varchar(10) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `employeeID` int(10) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `salary` int(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `performance` int(1) NOT NULL,
  `administratorID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`employeeID`, `NIC`, `salary`, `address`, `DOB`, `fname`, `lname`, `performance`, `administratorID`) VALUES
(1, '953412376V', 35000, '70/4 pamunugama jaela', '1995-12-04', 'charith', 'gamlath', 0, '1010'),
(10, '872378912V', 35000, '123 Valentine Place Wattala', '1987-12-04', 'Krishna', 'Kandathanthri', 0, '1010'),
(11, '922378912V', 35000, '123 Gajaba House Trinco', '1992-12-04', 'Gajaba', 'Soolangaarachchi', 0, '1010'),
(12, '931564646V', 35000, '671 B Sector 8 Negambo', '1993-02-07', 'Lil', 'Wayne', 0, '1010'),
(13, '464651387V', 35000, '151/A Uswetakeiyawa', '2017-12-01', 'Upulie', 'Iresha', 0, '1010');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `technicianID` int(10) NOT NULL,
  `transactionID` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `locationCordinates` int(10) NOT NULL,
  `payment` int(10) NOT NULL,
  `administratorID` varchar(10) NOT NULL,
  `packageID` varchar(1) NOT NULL,
  `complaint` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`chassisNo`),
  ADD KEY `car_customer_fk` (`ownerNIC`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD KEY `contact_customer_fk` (`NIC`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`NIC`),
  ADD KEY `customer_package_fk` (`packageID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `financialexecutive`
--
ALTER TABLE `financialexecutive`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `financialexecutive_administrator_fk` (`administratorID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageID`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD KEY `support_customer_fk` (`customerNIC`),
  ADD KEY `support_technician_fk` (`technicianID`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `technician_administrator_fk` (`administratorID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionID`),
  ADD KEY `transaction_administrator_fk` (`administratorID`),
  ADD KEY `transaction_package_fk` (`packageID`),
  ADD KEY `transaction_technician_fk` (`technicianID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `employeeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_customer_fk` FOREIGN KEY (`ownerNIC`) REFERENCES `customer` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_customer_fk` FOREIGN KEY (`NIC`) REFERENCES `customer` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_package_fk` FOREIGN KEY (`packageID`) REFERENCES `package` (`packageID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `financialexecutive`
--
ALTER TABLE `financialexecutive`
  ADD CONSTRAINT `financialexecutive_administrator_fk` FOREIGN KEY (`administratorID`) REFERENCES `administrator` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `support_customer_fk` FOREIGN KEY (`customerNIC`) REFERENCES `customer` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `support_technician_fk` FOREIGN KEY (`technicianID`) REFERENCES `technician` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `technician`
--
ALTER TABLE `technician`
  ADD CONSTRAINT `technician_administrator_fk` FOREIGN KEY (`administratorID`) REFERENCES `administrator` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_administrator_fk` FOREIGN KEY (`administratorID`) REFERENCES `administrator` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_package_fk` FOREIGN KEY (`packageID`) REFERENCES `package` (`packageID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_technician_fk` FOREIGN KEY (`technicianID`) REFERENCES `technician` (`employeeID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
