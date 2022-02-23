-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 08:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_db`
--

CREATE TABLE `enquiry_db` (
  `e_id` int(191) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `enquiryEmail` varchar(245) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `enquiryDetail` varchar(255) NOT NULL,
  `story` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_db`
--

INSERT INTO `enquiry_db` (`e_id`, `full_name`, `enquiryEmail`, `contactNumber`, `enquiryDetail`, `story`) VALUES
(1, 'huzaifa', 'huzi@gmail.com', '031540', 'vjhvjhcfv', NULL),
(2, 'dumy', 'dumy@gmail.com', '89089126', 'heloooo', NULL),
(3, 'data', 'data', 'data', 'dtaa', NULL),
(4, 'dumy', 'dumy@gmail.com', '89089126', 'SEGAEG', NULL),
(5, 'er', 'rh', 'rh', 'erh', NULL),
(6, 'er', 'rh', 'rh', 'erh', NULL),
(7, 'data6', 'data6', 'data6', 'data6', NULL),
(8, 'data6', 'data6', 'data6', 'data6', NULL),
(9, 'data9', 'data9', 'data9', 'data9', NULL),
(10, 'AF', 'af', 'AF', 'asf', NULL),
(11, 'Asdf', 'ASF', 'afA', 'aAS', NULL),
(22, '', '', '', '', 'story2'),
(24, 'uiGW', 'WQHL', 'SAWF', 'qw', 'story4'),
(25, 'qww', 'FGWEG', 'qqqqqq', 'qqqqq', 'story3'),
(26, 'aa', 'aa', 'aa', 'aa', 'story3'),
(27, 'Johns', 'admin@phpzag.com', '342132312', 'this is testing\n', 'story4'),
(28, 'ANT', 'SHANT', '03403', '5ASFDJASNCAJS AJCA', 'story4');

-- --------------------------------------------------------

--
-- Table structure for table `savechanges`
--

CREATE TABLE `savechanges` (
  `id` int(191) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savechanges`
--

INSERT INTO `savechanges` (`id`, `details`) VALUES
(1, '{\"modelId\":\"Model 1 S1\",\n			\"modelSize\":\"Model 1 S1\",\n			\"wallColor\":\n			{\"name\":\"Gypsum Wall Board\",\"color\":\"255,69,0\"}\n			,\"interiorColor\":\n			{\"name\":\"Wood-SPI\",\"color\":\"199,21,133\"},\n			\"roofColor\":\n			{\"name\":\"structure, Wood Joist/Rafter Layer, Batt Insulation\",\"color\":\"173,255,47\"} }'),
(2, '  {\"modelId\":\"Model 2 S1\",\"modelSize\":\"Model 1 S1\",\"wallColor\":{\"name\":\"Gypsum Wall Board\",\"color\":\"124,252,0\"},\"interiorColor\":{\"name\":\"Wood-SPI\",\"color\":\"255,69,0\"},\"roofColor\":{\"name\":\"structure, Wood Joist/Rafter Layer, Batt Insulation\",\"color\":\"0,0,0\"}} '),
(3, '  {\"modelId\":\"Model 1 S2\",\"modelSize\":\"Model 1 S1\",\"wallColor\":{\"name\":\"Gypsum Wall Board\",\"color\":\"165,42,42\"},\"interiorColor\":{\"name\":\"Wood-SPI\",\"color\":\"\"},\"roofColor\":{\"name\":\"structure, Wood Joist/Rafter Layer, Batt Insulation\",\"color\":\"\"}} '),
(4, '  {\"modelId\":\"Model 1 S2\",\"modelSize\":\"Model 1 S1\",\"wallColor\":{\"name\":\"Gypsum Wall Board\",\"color\":\"165,42,42\"},\"interiorColor\":{\"name\":\"Wood-SPI\",\"color\":\"124,252,0\"},\"roofColor\":{\"name\":\"structure, Wood Joist/Rafter Layer, Batt Insulation\",\"color\":\"0,255,255\"}} ');

-- --------------------------------------------------------

--
-- Table structure for table `saveurl`
--

CREATE TABLE `saveurl` (
  `id` int(10) NOT NULL,
  `url` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `savedate` varchar(50) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saveurl`
--

INSERT INTO `saveurl` (`id`, `url`, `email`, `savedate`, `userid`) VALUES
(1, 'http://192.168.100.15/pre/index.php?id=1', 'abc@gmail.com ', '02:07:51pm 26-01-2022', 4),
(2, 'http://192.168.100.15/pre/index.php?id=2', 'abc@gmail.com ', '02:27:59pm 26-01-2022', 4),
(3, 'http://localhost/house3d/index.php?id=3', 'jrock7961@gmail.com ', '02:42:11pm 26-01-2022', 1),
(4, 'http://localhost/house3d/index.php?id=4', 'jrock7961@gmail.com ', '02:42:32pm 26-01-2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(199) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `uid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `fname`, `lname`, `email`, `pass`, `phone`, `uid`) VALUES
(1, 'Huzaifa', 'Shaikh', 'Huzaifa@gmail.com', 'Huzaifa', '0320-3580420', 591790252),
(2, 'Ahmed', 'Raza', 'ahmed@gmail.com', 'Ganja', '0304-2043657', 1371126363),
(3, 'ali', 'ali', 'ali@gmail.com', '1234', '088961896', 557301460),
(4, 'abc', 'abc', 'abc@gmail.com', '123', 'qwefwq', 873572206),
(5, 'demo', 'demo', 'demo@gmail.com', '111', '09172896289', 928921643),
(6, 'helo', 'helo', 'helo@gmail.com', '222', '09709709', 1489540788),
(7, 'new', 'new', 'new123@gmail.com', '12345', '15345624647', 1389885388),
(8, 'huzaifa', 'hussain', '03142929943', 'gdfgdg', '54345345345', 0),
(9, '      ', '    ', 'huzi@gmail.com', '              ', '                ', 0),
(10, 'Test', 'test', 'bb@gmail.com', 'bb', 'yfdl,yurf', 0),
(11, 'Test', 'test', 'tes@test,con', 'test123', 'sdasdsadasda', 0),
(12, 'Saleem', 'Johns', 'admin@phpzag.com', 'demo', '4567890', 0),
(13, 'sign', 'up', 'up@gmail.com', 'ni', '090124 124883', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry_db`
--
ALTER TABLE `enquiry_db`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `savechanges`
--
ALTER TABLE `savechanges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saveurl`
--
ALTER TABLE `saveurl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry_db`
--
ALTER TABLE `enquiry_db`
  MODIFY `e_id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `savechanges`
--
ALTER TABLE `savechanges`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saveurl`
--
ALTER TABLE `saveurl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(199) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
