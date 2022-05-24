-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 12:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
(34, 'abebe', 'kero', 'male', 'cmptr', 985234521, 'abebe@bmail.com', 'degree', '2019-03-01'),
(150, 'Hello', 'World', 'male', 'Computer Science', 955666655, 'clicksamywa@gmail.com', 'PHD', '2022-05-21');

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
(64, 'administrator', 'casher', 915859531, '6:00 we have conference', '2016-05-31 08:07:41'),
(65, 'administrator', 'systemadnin', 915859531, 'please do the following', '2016-06-22 17:41:54'),
(68, 'systemadnin', 'casher', 915859534, 'PLEASE MEET WITH ME TODAY !!', '2016-06-23 17:18:43'),
(70, 'administrator', 'casher', 915158598, 'ghghghgfee', '2016-06-23 19:48:26'),
(73, 'auditor', 'casher', 983422167, 'welcome Abebe', '2019-05-12 03:06:38'),
(78, 'systemadnin', 'systemadnin', 983422167, 'peace', '2019-05-14 04:41:49'),
(87, 'auditor', 'officer', 983422167, 'dddd\r\n', '2019-05-19 00:17:39'),
(89, 'auditor', 'casher', 983422167, 'hi', '2019-05-21 23:53:03'),
(90, 'systemadmin', 'casher', 983422167, 'kkkkkkkkkkk', '2019-05-30 03:41:13'),
(92, 'administrator', 'administrator', 2147483647, 'Ambo University is one of the public higher institutions that was founded in 2000, along with the Second-Generation universities in Ethiopia.It is located in the emerging town of Samara which is the capital city of Ethiopian Afar regional state, 588 kilometers away from Addis Ababa. The University officially commenced its service with 1,867 students, 3 faculties and 12 departments. In the recent years, the intake capacity is rising from year to year. So currently, it has reached 4,866 students i', '2022-05-14 16:02:29'),
(93, 'administrator', 'administrator', 2147483647, 'Ambo University is one of the public higher institutions that was founded in 2000, along with the Second-Generation universities in Ethiopia.It is located in the emerging town of Samara which is the capital city of Ethiopian Afar regional state, 588 kilometers away from Addis Ababa. The University officially commenced its service with 1,867 students, 3 faculties and 12 departments. In the recent years, the intake capacity is rising from year to year. So currently, it has reached 4,866 students i', '2022-05-14 16:10:02'),
(94, 'administrator', 'administrator', 2147483647, 'Ambo University is one of the public higher institutions that was founded in 2000, along with the Second-Generation universities in Ethiopia.It is located in the emerging town of Samara which is the capital city of Ethiopian Afar regional state, 588 kilometers away from Addis Ababa. The University officially commenced its service with 1,867 students, 3 faculties and 12 departments. In the recent years, the intake capacity is rising from year to year. So currently, it has reached 4,866 students i', '2022-05-14 16:14:49'),
(96, 'systemadmin', 'systemadmin', 2147483647, 'A financial management system is a system or software that an organization uses to oversee and govern\r\n                its income, expenses, and assets with the objectives of ensuring sustainability. Finance Management\r\n                system is used to provide an option to generate the salary automatically every month.The main objective\r\n                of this system is to study the nature of the system in detail and identify the problem as well as to\r\n                define the relevant way t', '2022-05-20 16:36:02'),
(97, 'systemadmin', 'systemadmin', 2147483647, 'A financial management system is a system or software that an organization uses to oversee and govern\r\n', '2022-05-20 16:37:15'),
(98, 'systemadmin', 'systemadmin', 2147483647, 'A financial management system is a system or software that an organization uses to oversee and govern\r\n                its income, expenses, and assets with the objectives of ensuring sustainability. Finance Management\r\n                system is used to provide an option to generate the salary automatically every month.The main objective\r\n                of this system is to study the nature of the system in detail and identify the problem as well as to\r\n                define the relevant way t', '2022-05-20 16:37:36'),
(100, 'administrator', 'casher', 2147483647, 'Hellow world \r\nWrite message or comment here', '2022-05-21 17:07:44'),
(102, 'administrator', 'officer', 2147483647, 'Write message or comment here\r\nWrite message or comment here\r\nWrite message or comment here', '2022-05-21 18:42:23'),
(103, 'administrator', 'auditor', 2147483647, 'Write message or comment here Write message or comment here\r\nWrite message or comment here Write message or comment here\r\nWrite message or comment here Write message or comment here\r\nWrite message or comment here Write message or comment here\r\nWrite message or comment here Write message or comment here\r\nWrite message or comment here Write message or comment here\r\nWrite message or comment here Write message or comment here\r\nWrite message or comment here Write message or comment here\r\n', '2022-05-24 12:50:05');

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
(91, 'hobbies', 6000.000, '2019-06-14'),
(132, 'cause', 100.000, '2022-05-21'),
(133, '', 0.000, '0000-00-00'),
(1325, 'Expenditure Cause', 100.000, '2022-05-21');

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
(1, 1000585647000, 'Habtie', 'andargie', 5000.0000000, 100.0000000, 915856598, 250.0000000, 100.0000000, '2016-06-02'),
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
(25, 1000585600224, 'Kube', 'Seyeme', 5986.0000000, 200.0000000, 915850028, 500.0000000, 250.0000000, '2016-06-07'),
(26, 1000585647000, 'Habtie', 'andargie', 1234567.0000000, 1234.0000000, 955555555, 100.0000000, 100.0000000, '2022-05-21'),
(27, 1234567891234, 'Habtie', 'andargie', 1234567.0000000, 1234.0000000, 922222222, 100.0000000, 100.0000000, '2022-05-21');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `otherexpense`
--
ALTER TABLE `otherexpense`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1326;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
