-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 04:19 AM
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
-- Database: `medicineguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adId` int(11) NOT NULL,
  `aUserName` varchar(40) NOT NULL,
  `aPassword` varchar(40) NOT NULL,
  `aMobile` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adId`, `aUserName`, `aPassword`, `aMobile`) VALUES
(1, 'admin', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `amId` int(11) NOT NULL,
  `hospitalAddress` varchar(40) NOT NULL,
  `amRegion` varchar(40) NOT NULL,
  `hospitalName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`amId`, `hospitalAddress`, `amRegion`, `hospitalName`) VALUES
(1, 'Mirpur', 'Mirpur', 'Al-Shafi Hospital'),
(2, 'Gulshan 2', 'Gulshan', 'United Hospital'),
(3, 'Road 4', 'Dhanmondi', 'Labaid Hospital'),
(4, 'Kamal Attartuk Avenue', 'Banani', 'Labaid Hospital'),
(6, 'Mirpur', 'Mirpur', 'Dr. Azmal Hospital'),
(7, 'Block: A', 'Bashundhara', 'Apollo Hospital'),
(9, 'Uttara', 'Uttara', 'Uttara Crescent Hospital'),
(10, 'Uttara', 'Uttara', 'Uttara Central Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cuEmail` varchar(40) NOT NULL,
  `cuMobile` varchar(40) NOT NULL,
  `cuAddress` varchar(40) NOT NULL,
  `cuName` varchar(40) NOT NULL,
  `cuId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cuEmail`, `cuMobile`, `cuAddress`, `cuName`, `cuId`) VALUES
('ishmam@gmail.com', '01777389348', 'Bashundhara Residential Area, Dhaka', 'Ishmam Islam', 1),
('safayetprangon@gmail.com', '016478529984', 'Mirpur', 'Safayet Prangon', 2),
('shafi@yahoo.com', '0154749365847', 'Uttara', 'Abu Hena Shafi', 3),
('tamanna@olvine.com', '01558794562', 'Mirpur', 'Sadia Afrin Tamanna', 11);

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `cuUserName` varchar(40) NOT NULL,
  `cuPassword` varchar(40) NOT NULL,
  `cuId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`cuUserName`, `cuPassword`, `cuId`) VALUES
('ishmam', '1234', 1),
('safayet', '1234', 2),
('shafi', '1234', 3),
('tamanna', '1234', 11);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `deName` varchar(40) NOT NULL,
  `deMobile` varchar(40) NOT NULL,
  `deRegion` varchar(40) NOT NULL,
  `deId` int(11) NOT NULL,
  `dePass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deName`, `deMobile`, `deRegion`, `deId`, `dePass`) VALUES
('del', '01649781231', 'Mirpur', 6, '1234'),
('del1', '01478932541', 'Uttara', 7, '1234'),
('del2', '01478523698', 'Gulshan', 8, '1234'),
('del12', '12345678901', 'Banani', 10, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `price` int(11) NOT NULL,
  `medId` int(11) NOT NULL,
  `medName` varchar(40) NOT NULL,
  `scienteficName` varchar(40) NOT NULL,
  `diseaseCategory` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`price`, `medId`, `medName`, `scienteficName`, `diseaseCategory`) VALUES
(20, 1, 'Napa', 'Paracetamol', 'Fever'),
(30, 2, 'Ace', 'Paracetamol', 'Fever'),
(300, 3, 'Sumatriptan', 'Imitrex', 'Migraine'),
(200, 4, 'Fenadin', 'Allegra', 'Cough'),
(30, 5, 'Oxitocin', 'Pitocin', 'Pain'),
(40, 6, 'Glucagon', 'GlucaGen', 'Fever'),
(20, 8, 'Histacin', 'Chlorphenamine', 'Cold');

-- --------------------------------------------------------

--
-- Table structure for table `medicineorder`
--

CREATE TABLE `medicineorder` (
  `orderId` int(11) NOT NULL,
  `medicinename` varchar(50) NOT NULL,
  `medquantity` int(11) NOT NULL,
  `medprice` varchar(50) NOT NULL,
  `totalprice` varchar(50) NOT NULL,
  `ordercusname` varchar(50) NOT NULL,
  `orderphone` varchar(15) NOT NULL,
  `orderaddress` varchar(50) NOT NULL,
  `orderregion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicineorder`
--

INSERT INTO `medicineorder` (`orderId`, `medicinename`, `medquantity`, `medprice`, `totalprice`, `ordercusname`, `orderphone`, `orderaddress`, `orderregion`) VALUES
(81, '3.mig', 2, '300', '', 'sf', '01712020202', 'f', 'Mirpur'),
(82, '4.fenadin', 1, '200', '', 'sf', '01712020202', 'f', 'Mirpur'),
(83, '1.Napa', 1, '20', '', 'df', '01712020202', 'vv', 'Uttara'),
(84, '3.mig', 1, '300', '', 'df', '01712020202', 'vv', 'Uttara'),
(85, 'glukon', 1, '40', '', 'df', '01712020202', 'vv', 'Uttara'),
(86, 'unifok', 1, '60', '', 'df', '01712020202', 'vv', 'Uttara');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `pId` int(11) NOT NULL,
  `pName` varchar(40) NOT NULL,
  `phMobile` varchar(40) NOT NULL,
  `phAddress` varchar(40) NOT NULL,
  `pRegion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pId`, `pName`, `phMobile`, `phAddress`, `pRegion`) VALUES
(3, 'ph1', '01478523697', 'Uttara', 'Uttara'),
(4, 'ph2', '01234958712', 'Banani', 'Banani'),
(5, 'ph3', '01679537677', 'Mirpur', 'Mirpur');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacylogin`
--

CREATE TABLE `pharmacylogin` (
  `phUserName` varchar(40) NOT NULL,
  `phPassword` int(11) NOT NULL,
  `pId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacylogin`
--

INSERT INTO `pharmacylogin` (`phUserName`, `phPassword`, `pId`) VALUES
('ph1', 5678, 3),
('ph2', 12345, 4),
('ph3', 12345, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adId`);

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`amId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cuId`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`cuId`),
  ADD UNIQUE KEY `cuUserName` (`cuUserName`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deId`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medId`);

--
-- Indexes for table `medicineorder`
--
ALTER TABLE `medicineorder`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `pharmacylogin`
--
ALTER TABLE `pharmacylogin`
  ADD PRIMARY KEY (`pId`),
  ADD UNIQUE KEY `phUserName` (`phUserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `amId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `cuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `deId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicineorder`
--
ALTER TABLE `medicineorder`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `pharmacylogin`
--
ALTER TABLE `pharmacylogin`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
