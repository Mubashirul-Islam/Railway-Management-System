-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 08:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railwaymanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `NID` int(11) NOT NULL,
  `TrainID` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `BookingTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `JourneyDate` date NOT NULL,
  `Seat` int(3) NOT NULL,
  `TrainName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`NID`, `TrainID`, `Phone`, `Email`, `BookingTime`, `JourneyDate`, `Seat`, `TrainName`) VALUES
(3322, 5, 1723158330, 'kawsarhabib1013@gmail.com', '2023-08-25 15:38:51', '2023-08-03', 3, 'Paharika Commuter'),
(5252, 21, 2147483647, 'kawsaranik1013@gmail.com', '2023-08-25 15:52:33', '2023-08-01', 20, 'Dhaka Express'),
(8889, 2, 1723158330, 'kawsaranik1013@gmail.com', '2023-08-25 15:25:44', '2023-09-09', 3, 'Meghna Express'),
(75357, 22, 1783384722, 'kawsaranik1013@gmail.com', '2023-08-25 18:24:06', '2023-08-02', 4, 'Padma Paribahan'),
(789987, 22, 1723158330, 'kawsaranik1013@gmail.com', '2023-08-25 17:49:47', '2023-07-31', 2, 'Padma Paribahan'),
(12345678, 2, 1783384722, 'reshadromim013@gmail.com', '2023-08-25 15:27:27', '2023-08-02', 3, 'Meghna Express'),
(123456782, 2, 1783384722, 'reshadromim013@gmail.com', '2023-08-25 15:32:59', '2023-08-02', 3, 'Meghna Express'),
(1212121212, 1, 1723158330, 'kawsarhabib1013@gmail.com', '2023-08-25 17:44:03', '2023-08-02', 3, 'Padma Express'),
(1234567822, 2, 1783384722, 'reshadromim013@gmail.com', '2023-08-25 15:35:41', '2023-08-02', 3, 'Meghna Express');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `TrainID` int(11) NOT NULL,
  `TrainName` varchar(100) DEFAULT NULL,
  `Destination` varchar(100) DEFAULT NULL,
  `DepartureTime` time DEFAULT NULL,
  `ArrivalTime` time DEFAULT NULL,
  `Origin` varchar(100) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL,
  `Fare` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`TrainID`, `TrainName`, `Destination`, `DepartureTime`, `ArrivalTime`, `Origin`, `Capacity`, `Fare`) VALUES
(1, 'Padma Express', 'Rajshahi', '07:00:00', '13:00:00', 'Dhaka', 300, 600),
(2, 'Meghna Express', 'Chittagong', '09:30:00', '15:30:00', 'Dhaka', 250, 550),
(3, 'Meghna Mail', 'Sylhet', '10:45:00', '18:30:00', 'Dhaka', 200, 200),
(4, 'Jamuna Express', 'Bogra', '11:15:00', '19:45:00', 'Dhaka', 350, 200),
(5, 'Paharika Commuter', 'Mymensingh', '12:00:00', '20:00:00', 'Dhaka', 150, 200),
(6, 'Surma Express', 'Sylhet', '14:30:00', '22:30:00', 'Chittagong', 300, 200),
(7, 'Karnaphuli Express', 'Chittagong', '15:45:00', '23:30:00', 'Chittagong', 250, 800),
(8, 'Bengal Mail', 'Khulna', '16:30:00', '00:15:00', 'Rajshahi', 200, 200),
(9, 'Tista Express', 'Dinajpur', '17:00:00', '01:00:00', 'Rajshahi', 350, 200),
(10, 'Sundarbans Express', 'Barisal', '18:15:00', '02:30:00', 'Khulna', 150, 200),
(11, 'Meghna Express', 'Noakhali', '20:00:00', '03:45:00', 'Chittagong', 300, 200),
(12, 'Dhamal Express', 'Rangpur', '21:30:00', '05:00:00', 'Dinajpur', 250, 200),
(13, 'Bikrom Express', 'Comilla', '22:45:00', '06:30:00', 'Dhaka', 200, 200),
(15, 'Gaur Express', 'Barisal', '00:00:00', '08:00:00', 'Dhaka', 300, 200),
(16, 'Rupsha Express', 'Khulna', '01:30:00', '09:30:00', 'Dhaka', 250, 200),
(17, 'Titash Express', 'Comilla', '02:45:00', '10:15:00', 'Chittagong', 200, 200),
(18, 'Silk City Express', 'Rajshahi', '03:00:00', '11:00:00', 'Rajshahi', 350, 200),
(19, 'Agnibina Express', 'Dinajpur', '04:15:00', '12:30:00', 'Rajshahi', 150, 200),
(20, 'Jamalpur Express', 'Mymensingh', '05:30:00', '14:00:00', 'Dhaka', 300, 450),
(21, 'Dhaka Express', 'Chittagong', '08:00:00', '14:00:00', 'Dhaka', 300, 800),
(22, 'Padma Paribahan', 'Rajshahi', '09:30:00', '17:00:00', 'Dhaka', 250, 600),
(25, 'Dhaka Express', 'Dhaka', '08:00:00', '10:00:00', 'Chittagong', 300, 700),
(26, 'Faridpur Express', 'Faridpur', '09:30:00', '11:30:00', 'Dhaka', 250, 600),
(27, 'Gazipur Express', 'Gazipur', '10:15:00', '12:15:00', 'Mymensingh', 200, 550),
(88, 'Cox\'s Bazar Express', 'Cox\'s Bazar', '23:30:00', '01:30:00', 'Chittagong', 200, 900),
(150, 'Sunamganj Express', 'Sunamganj', '15:00:00', '17:00:00', 'Sylhet', 300, 650),
(151, 'Lalmonirhat Express', 'Lalmonirhat', '13:30:00', '15:30:00', 'Rangpur', 150, 550),
(152, 'Nilphamari Express', 'Nilphamari', '14:45:00', '16:45:00', 'Rangpur', 180, 600),
(153, 'Panchagarh Express', 'Panchagarh', '15:15:00', '17:15:00', 'Thakurgaon', 200, 650),
(154, 'Rangpur Express', 'Rangpur', '16:30:00', '18:30:00', 'Dinajpur', 250, 700),
(155, 'Thakurgaon Express', 'Thakurgaon', '17:45:00', '19:45:00', 'Panchagarh', 230, 670),
(156, 'Barguna Express', 'Barguna', '18:00:00', '20:00:00', 'Patuakhali', 180, 580),
(157, 'Rangamati Express', 'Rangamati', '23:45:00', '01:45:00', 'Chittagong', 350, 800),
(158, 'Bhola Express', 'Bhola', '20:30:00', '22:30:00', 'Barisal', 190, 600),
(160, 'Barisal Express', 'Barisal', '19:15:00', '21:15:00', 'Bhola', 210, 620);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NID` int(100) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NID`, `FirstName`, `LastName`, `Password`, `Email`, `Phone`, `DateOfBirth`) VALUES
(1, 'John', 'Doe', 'password123', 'john@example.com', '1234567890', '1990-05-15'),
(2, 'Alice', 'Smith', 'alice123', 'alice@example.com', '9876543210', '1988-08-20'),
(1013, 'kawsar', 'habib', 'Anik1013@', 'kawsarhabib1013@gmail.com', '01723158330', '2003-08-25'),
(2008, 'qqq', 'www', 'reshad', 'reshadromim013@gmail.com', '01723158330', '2023-08-25'),
(2010, 'ase', 'aserasd', 'anik1013', 'md.kawsar.habib@g.bracu.ac.bd', '01723158330', '2023-08-22'),
(3322, 'anindya', 'majumdar', 'topg', 'abddd@gmail.com', '12121212121', '2023-08-25'),
(6000, 'rrrrrr', 'eeeeeee', 'vvvvvvvvvv', 'kawsaranik1013@gmail.com', '01723158330', '2023-08-29'),
(7000, 'Tasmin Ahmed', 'Oni', 'onibhalochele', 'oni8338@gmail.com', '01783384722', '2023-08-24'),
(23232, 'ddd', 'aa', '22323ddd', 'md.mubashirul.islam@g.bracu.ac.bd', 'dsdsdsd', '2023-08-24'),
(50000, 'asdfasdf', 'aefasdfasdfae', 'asdfasdfaefasdfasd', 'fimemi5809@opude.com', '01723158330', '2023-08-23'),
(232321, 'ddd', 'aa', '22323ddd', 'md.mubashirul.islam@g.bracu.ac.bd', 'dsdsdsd', '2023-08-24'),
(2323214, 'ddd', 'aa', '22323ddd', 'md.mubashirul.islam@g.bracu.ac.bd', 'dsdsdsd', '2023-08-24'),
(2147483647, 'aaaaa', 'bbbb', 'ddd', 'md.rubayet.hasan@g.bracu.ac.bd', '2222', '2023-08-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`TrainID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
