-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 05:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `BillID` int(11) NOT NULL,
  `BrandName` varchar(100) NOT NULL,
  `ModelName` varchar(100) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `MobileNo` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`BrandID`, `BrandName`) VALUES
(2, 'Apple'),
(19, 'Google'),
(20, 'micromax'),
(5, 'ONEPLUS'),
(7, 'oppo'),
(4, 'realme'),
(1, 'Samsung'),
(9, 'vivo'),
(3, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `DesignationID` int(11) NOT NULL,
  `Designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`DesignationID`, `Designation`) VALUES
(2, 'Employee'),
(1, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `MobileNo` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Salary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `Name`, `Gender`, `MobileNo`, `Email`, `Address`, `Salary`) VALUES
(14, 'Jay Patel', 'Male', '9979940241', '180540107003@darshan.ac.in', '                Sanala Road,  Morbi-1                                                               ', '12,000/-');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `ModelName` varchar(100) NOT NULL,
  `RAM_ROM` varchar(20) NOT NULL,
  `Camera` varchar(100) NOT NULL,
  `Colour` varchar(50) NOT NULL,
  `DisplaySize` varchar(50) NOT NULL,
  `DisplayType` varchar(100) NOT NULL,
  `Processor` varchar(100) NOT NULL,
  `Battery` varchar(50) NOT NULL,
  `FingerprintSensor` varchar(50) NOT NULL,
  `Resolution` varchar(50) NOT NULL,
  `OS` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `InStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `BrandName`, `ModelName`, `RAM_ROM`, `Camera`, `Colour`, `DisplaySize`, `DisplayType`, `Processor`, `Battery`, `FingerprintSensor`, `Resolution`, `OS`, `Price`, `InStock`) VALUES
(1, 'Samsung', 'Galaxy A51', '8 GB | 128 GB', '48 + 12 + 5 + 5MP | 32MP Front', 'Prism Crush Black', '6.5 inch', 'Full HD+ Super AMOLED Infinity-O Display', 'Exynos 9611', '4000 mAh ', 'In-Display', '2340 x 1080 Pixels', 'Android 10', '24,499/-', 2),
(2, 'realme', '6i', '6 GB | 64 GB', '48 + 8 + 2 + 2MP | 16MP Front', 'Lunar White', '6.5 inch', '90 Hz Full HD+ In-cell LCD Display', 'Media Tek Helio G90T', '4300 mAh ', 'Side Mounted', '2440 x 1080 Pixels', 'Android 10', '13,999/-', 3),
(3, 'Apple', 'iPhone 11 Pro', ' 64 GB', '12 + 12 + 12MP | 12MP Front', 'Gold', '5.8 inch', 'Super Retina XDR Display', 'A13 Bionic Chip', '3046 mAh', '-', '2436 x 1125 Pixels', ' iOS 13', '79,999/-', 1),
(4, 'ONEPLUS', 'Nord 5G', '6 GB | 64 GB', '48 + 8 + 5 + 2MP | 32 + 8MP Front', 'Gray Onyx', '6.44 inch', '90Hz fluid Amoled Display', 'Qualcomm Snapdragon 765G', '4115 mAh', 'In-Display', '2400 x 1080 pixels', 'OxygenOS 10.5 based on Android 10', ' 24,999/-', 7),
(5, 'Samsung', 'Galaxy M31s', '6 GB | 128 GB', '64 + 12 + 5 + 5MP | 32MP Front', 'Mirage Blue', '5 inch', 'FHD+ Super AMOLED Infinity-O Display ', 'Exynos 9611', ' 6000 mAh', 'Side Mounted', '1080 x 2400 Pixel', 'Android 10', '19,499/-', 10),
(6, 'Xiaomi', 'Redmi Note 9 Pro', '4 GB | 64 GB', '48 + 8 + 5 + 2MP | 16MP Front', 'Glacier White', '6.67 inch', 'Full HD+', 'Qualcomm Snapdragon 720G ', '5020 mAh', 'Side Mounted', '2400 x 1080 pixels', 'Android 10', '12,990/-', 6),
(7, 'oppo', 'F17 Pro', '8 GB | 128 GB', '48 + 8 + 2 + 2MP | 16 + 2MP Front', 'Matte Black', '6.43 inch', 'Full HD+', 'MediaTek Helio P95', '4015 mAh', 'In-Display', '2400 x 1080 pixels', 'Android 10', '22,990/-', 5),
(12, 'realme', '7i', '4 GB | 64 GB', '64 + 8 + 2 + 2MP | 16MP Front', 'Fusion Blue', '6.5 inch', 'HD+ ', 'Qualcomm Sanpdragon 662', '5000 mAh', 'Back side', '1600 x 720 Pixels', 'Android 10 ', '11,999/-', 4),
(13, 'Apple', 'iPhone XS', '64 GB', '12 + 12MP | 7MP Front', 'Gold', '5.8 inch', 'OLED Multi-touch Display', 'A12 Bionic Chip', '2658 mAh', '-', '2436 x 1125 Pixels', 'iOS 12 ', '74,999/-', 6),
(14, 'ONEPLUS', '8T', '8 GB | 128 GB', '48 + 16 + 5 + 2 MP | 16 MP Front', 'Aquamarine Green', '6.55 inch', '120 Hz Fluid AMOLED Display', 'Qualcomm Snapdragon 865', '4500 mAH', 'In-Diaplay', '2400 x 1080 Pixels', 'Android 11', '42,999/-', 3),
(18, 'micromax', 'IN note 1', '4 GB | 128 GB', '48 + 5 + 2 + 2 MP | 16 MP Front', 'Green', '6.7 inch', 'Full HD+ ', 'Media Tek Helio G85', '5000 mAh', 'Back side', '2400 x 1080 Pixels', 'Android 10 ', '12,499/-', 8),
(19, 'micromax', 'IN note 1', '4 GB | 64 GB', '48 + 5 + 2 + 2 MP | 16 MP Front', 'White', '6.67 inch', 'Full HD+ ', 'Media Tek Helio G85', '5000 mAh', 'Back side', '2400 x 1080 Pixels', 'Android 10 ', '10,999/-', 8),
(20, 'micromax', 'IN 1b', '2 GB | 32 GB', '13 + 2 MP | 8 MP Front', 'Green', '6.52 inch', 'HD+ IPS Display', 'Media Tek Helio G35', '5000 mAh', 'Back side', '1600 x 720 Pixels', 'Android 10 ', '6,999/-', 4),
(21, 'micromax', 'IN 1b', '4 GB | 64 GB', '13 + 2 MP | 8 MP Front', 'Purple', '6.52 inch', 'HD+ IPS Display', 'Media Tek Helio G35', '5000 mAh', 'Back side', '1600 x 720 Pixels', 'Android 10 ', '7,999/-', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `Designation`) VALUES
(2, 'Henish', '1111', 'Manager'),
(8, 'Jay', '999', 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BillID`),
  ADD KEY `ModelName` (`ModelName`),
  ADD KEY `BrandName` (`BrandName`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`BrandID`),
  ADD KEY `BrandName` (`BrandName`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`DesignationID`),
  ADD KEY `Designation` (`Designation`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Brand` (`BrandName`),
  ADD KEY `ModelName` (`ModelName`),
  ADD KEY `BrandName` (`BrandName`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `Designation` (`Designation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `BillID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `DesignationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`ModelName`) REFERENCES `products` (`ModelName`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`BrandName`) REFERENCES `brands` (`BrandName`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Designation`) REFERENCES `designation` (`Designation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
