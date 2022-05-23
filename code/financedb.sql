-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 12:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(120) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `birthday` int(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `confirm` varchar(40) NOT NULL,
  `phone_number` varchar(40) NOT NULL,
  `account_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fullname`, `username`, `birthday`, `password`, `confirm`, `phone_number`, `account_type`) VALUES
(1, 'samuel bekalu', 'samuel', NULL, 'd8ae5776067290c4712fa454006c8ec6', '', '0961350891', 'System Admin'),
(2, 'abdinur sheik', 'abdinur', NULL, '1f2444d1743c3d4a6cc6e0c915b1e973', '', '0933276843', 'Administrator'),
(3, 'desalegn bogale', 'desalegn', NULL, '010a3872ee1a292beeaef6193c35b2b1', '', '0930276856', 'General Casher'),
(4, 'shifa dawud', 'shifa', NULL, '6475528daf8a89830d309d73e5f5e167', '', '0926376843', 'Finance Officer'),
(6, 'diribe tolosa', 'diribe', NULL, '5a2b683d02fff21fd668268358b48365', '', '0929316842', 'Auditor'),
(7, 'fikre amare', 'fikre', NULL, 'fikre', '', '0926376843', 'Finance Officer'),
(23, 'abebe kasa', 'abebe', NULL, 'fdb122e7c906013a9bc0cb02c436fa8a', '', '0926376843', 'General Casher');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `proffession` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `lname`, `Sex`, `proffession`, `phone`, `email`, `qualification`, `date`) VALUES
(1, 'Habtie', 'andargie', 'male', 'IT', 919865897, 'habtie90@gmail.com', 'master', '2016-06-08'),
(2, 'Bayew', 'Dessie', 'male', 'IT', 919865897, 'bayewdessie@gmail.com', 'master', '2016-06-01'),
(3, 'Addisu', 'Tesema', 'male', 'IT', 985969865, 'atesema872@gmail.com', 'master', '2016-06-07'),
(4, 'Mamo', 'Yayu', 'male', 'IT', 985969898, 'yayumamo@gmail.com', 'master', '2016-06-13'),
(5, 'Gebre', 'Alemu', 'male', 'economics', 985969898, 'yayumamo@gmail.com', 'Degree', '2016-06-01'),
(7, 'Alemitu', 'Baba', 'female', 'economics', 985969810, 'yayumam@gmail.com', 'Degree', '2016-06-01'),
(8, 'mekides', 'Mamaru', 'female', 'economics', 985969850, 'mekdi@gmail.com', 'master', '2016-06-14'),
(21, 'Dejene', 'Bewuketu', 'male', 'HO', 919865101, 'deju90@gmail.com', 'ms', '2016-06-01'),
(22, 'kebede', 'alemu', 'male', 'cmptr', 98523452, 'kebe@gmail.com', 'degree', '2019-05-22'),
(23, 'Demeke', 'Seyeme', 'male', 'electrical', 919860010, 'deme@gmail.com', 'degree', '2016-06-02'),
(24, 'Kube', 'Seyeme', 'female', 'electrical', 919860111, 'kubkub@gmail.com', 'degree', '2016-06-07'),
(29, 'kebede', 'alemu', 'male', 'cmptr', 985234521, 'kebe@gmail.com', 'degree', '2019-05-22'),
(34, 'abebe', 'kero', 'male', 'cmptr', 985234521, 'abebe@bmail.com', 'degree', '2019-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(120) NOT NULL,
  `frm` varchar(40) NOT NULL,
  `too` varchar(40) NOT NULL,
  `pnumber` int(16) NOT NULL,
  `message` varchar(500) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `frm`, `too`, `pnumber`, `message`, `Date`) VALUES
(49, 'administrator', 'systemadnin', 918445527, 'ghghghbggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '2016-05-18 23:24:05'),
(60, 'systemadnin', 'casher', 915859531, 'please accept the customer', '2016-05-23 16:53:11'),
(62, 'administrator', 'casher', 918445527, 'please see correctly', '2016-05-27 19:18:31'),
(64, 'administrator', 'casher', 915859531, '6:00 we have conference', '2016-05-31 08:07:41'),
(65, 'administrator', 'systemadnin', 915859531, 'please do the following', '2016-06-22 17:41:54'),
(67, 'officer', 'auditor', 915859531, 'hi fried selam new?', '2016-06-22 21:22:04'),
(68, 'systemadnin', 'casher', 915859534, 'PLEASE MEET WITH ME TODAY !!', '2016-06-23 17:18:43'),
(70, 'administrator', 'casher', 915158598, 'ghghghgfee', '2016-06-23 19:48:26'),
(72, 'systemadnin', 'auditor', 987654346, 'well done', '2019-05-07 08:30:26'),
(73, 'auditor', 'casher', 983422167, 'welcome Abebe', '2019-05-12 03:06:38'),
(74, 'officer', 'auditor', 983422167, 'audit it please', '2019-05-12 03:35:50'),
(75, 'systemadnin', 'auditor', 983422167, 'Hello, are you here?', '2019-05-14 04:30:52'),
(76, 'systemadnin', 'auditor', 983422167, 'please come back', '2019-05-14 04:36:37'),
(78, 'systemadnin', 'systemadnin', 983422167, 'peace', '2019-05-14 04:41:49'),
(79, 'administrator', 'auditor', 983435678, 'do this please', '2019-05-14 05:27:19'),
(81, 'casher', 'auditor', 983435678, 'welcome here', '2019-05-14 13:15:00'),
(82, 'systemadmin', 'officer', 983435678, 'do', '2019-05-14 13:16:23'),
(83, 'officer', 'auditor', 983435678, 'bye bye', '2019-05-15 05:50:13'),
(84, 'officer', 'systemadmin', 983435678, 'ok ', '2019-05-15 05:50:59'),
(85, 'auditor', 'auditor', 983435678, 'hello auditor', '2019-05-15 12:47:43'),
(87, 'auditor', 'officer', 983422167, 'dddd\r\n', '2019-05-19 00:17:39'),
(88, 'officer', 'administrator', 983422167, 'hi', '2019-05-21 23:50:29'),
(89, 'auditor', 'casher', 983422167, 'hi', '2019-05-21 23:53:03'),
(90, 'systemadmin', 'casher', 983422167, 'kkkkkkkkkkk', '2019-05-30 03:41:13'),
(91, 'auditor', 'casher', 983422167, 'hello casher', '2019-06-01 05:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `otherexpense`
--

CREATE TABLE `otherexpense` (
  `id` int(50) NOT NULL,
  `expediturecuse` varchar(50) NOT NULL,
  `amount` double(50,3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otherexpense`
--

INSERT INTO `otherexpense` (`id`, `expediturecuse`, `amount`, `date`) VALUES
(2, 'hobbies', 6000.000, '2019-05-22'),
(4, 'labor worker', 40001.549, '2016-05-01'),
(7, 'sport', 7000.000, '2016-05-11'),
(8, 'Company tax', 70000.000, '2016-05-19'),
(9, 'Drought', 80000.000, '2016-05-23'),
(10, 'Recration purpose', 100000.000, '2016-05-20'),
(12, 'fgfgf', 20005.000, '2016-05-17'),
(15, 'jkjkj', 301.000, '2016-05-11'),
(23, 'recration', 501.000, '2016-05-03'),
(25, 'sport', 51.000, '2016-05-10'),
(32, 'sport', 25.000, '2016-05-17'),
(44, 'sport', 501.000, '2016-05-10'),
(55, 'recration', 501.000, '2016-05-10'),
(56, 'recration', 501.000, '2016-05-10'),
(77, 'labor worker', 12.000, '2016-06-08'),
(91, 'hobbies', 6000.000, '2019-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payingid` int(50) NOT NULL,
  `accnum` bigint(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `salary` double(50,7) NOT NULL,
  `allowance` double(50,7) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `overtime` double(50,7) NOT NULL,
  `punish` double(50,7) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payingid`, `accnum`, `fname`, `lname`, `salary`, `allowance`, `phone_number`, `overtime`, `punish`, `date`) VALUES
(1, 1000585647000, 'Habtie', 'andargie', 5000.0000000, 100.0000000, 915856598, 200.0000000, 100.0000000, '2016-06-01'),
(2, 1000585647001, 'Bayew', 'Dessie', 10000.0000000, 200.0000000, 915856598, 300.0000000, 100.0000000, '2016-06-08'),
(3, 1000585647003, 'Addisu', 'Tesema', 15000.0000000, 120.0000000, 915856598, 100.0000000, 150.0000000, '2016-06-14'),
(4, 1000585647004, 'Mamo', 'Yayu', 6000.0000000, 120.0000000, 915856512, 100.0000000, 150.0000000, '2016-06-07'),
(5, 1000585647005, 'Gebre', 'Alemu', 8000.0000000, 120.0000000, 915856500, 100.0000000, 150.0000000, '2016-06-08'),
(6, 1000585647006, 'Alemitu', 'Baba', 8000.0000000, 300.0000000, 915856511, 400.9600000, 200.5000000, '2016-06-08'),
(7, 1000585647006, 'mekides', 'Mamaru', 6000.0000000, 500.0000000, 915852220, 200.0000000, 100.0000000, '2016-06-07'),
(8, 1000585600221, 'Dejene', 'Bewuketu', 7800.0000000, 200.0000000, 915850022, 100.0000000, 100.0000000, '2016-06-01'),
(9, 1000585600222, 'Hassen', 'Beshir', 6321.0000000, 100.0000000, 915850023, 100.0000000, 50.0000000, '2016-06-03'),
(10, 1000585600223, 'Demeke', 'Seyeme', 5986.0000000, 200.0000000, 915850024, 200.0000000, 50.0000000, '2016-06-14'),
(11, 1000585600224, 'Kube', 'Seyeme', 5986.0000000, 200.0000000, 915850028, 500.0000000, 250.0000000, '2016-06-07'),
(12, 1000138994779, 'Bayew', 'Beshir', 5000.0000000, 300.0000000, 935276853, 200.0000000, 100.0000000, '2019-02-08'),
(13, 1000138994874, 'Mamo', 'Seyeme', 9000.0000000, 500.0000000, 936274853, 300.0000000, 200.0000000, '2019-03-08'),
(14, 1000138994868, 'Gebre', 'Tesema', 7000.0000000, 300.0000000, 933276843, 150.0000000, 200.0000000, '2019-04-08'),
(15, 1000138994789, 'Addisu', 'Alemu', 6000.0000000, 400.0000000, 983647524, 300.0000000, 200.0000000, '2019-05-08'),
(16, 1000137893978, 'Habtie', 'andargie', 5000.0000000, 200.0000000, 933276843, 200.0000000, 200.0000000, '2019-06-08'),
(17, 1000137893996, 'Alemitu', 'Yayu', 4000.0000000, 500.0000000, 933276854, 150.0000000, 100.0000000, '2019-07-08'),
(18, 1000137893679, 'mekides', 'Seyeme', 10000.0000000, 800.0000000, 987675342, 300.0000000, 200.0000000, '2019-08-08'),
(19, 1000585600224, 'Kube', 'Seyeme', 5986.0000000, 200.0000000, 915850028, 500.0000000, 250.0000000, '2016-06-07'),
(20, 1000137893322, 'Bayew', 'Alemu', 10000.0000000, 200.0000000, 933276854, 200.0000000, 100.0000000, '2019-07-14'),
(21, 1000137893320, 'Habtie', 'Tesema', 5000.0000000, 500.0000000, 935276853, 150.0000000, 100.0000000, '2019-06-13'),
(22, 1000585600224, 'Kube', 'Seyeme', 5986.0000000, 200.0000000, 915850028, 500.0000000, 250.0000000, '2016-06-07'),
(23, 1000585600224, 'Kube', 'Seyeme', 5986.0000000, 200.0000000, 915850028, 500.0000000, 250.0000000, '2016-06-07'),
(24, 1000137893320, 'Habtie', 'Alemu', 10000.0000000, 200.0000000, 926376843, 250.0000000, 150.0000000, '2019-05-22'),
(25, 1000585600224, 'Kube', 'Seyeme', 5986.0000000, 200.0000000, 915850028, 500.0000000, 250.0000000, '2016-06-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `otherexpense`
--
ALTER TABLE `otherexpense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `otherexpense`
--
ALTER TABLE `otherexpense`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
