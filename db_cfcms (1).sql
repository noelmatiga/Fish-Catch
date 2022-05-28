-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 05:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cfcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fish`
--

CREATE TABLE `tbl_fish` (
  `fish_id` int(32) NOT NULL,
  `fish_name` varchar(255) NOT NULL,
  `fish_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fisherman`
--

CREATE TABLE `tbl_fisherman` (
  `fisherman_id` int(32) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `account_status` int(1) NOT NULL DEFAULT 1,
  `hasChangedPass` int(11) NOT NULL DEFAULT 0,
  `date_registered` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fisherman`
--

INSERT INTO `tbl_fisherman` (`fisherman_id`, `fname`, `lname`, `address`, `contact_no`, `uname`, `pass`, `account_status`, `hasChangedPass`, `date_registered`) VALUES
(1, 'bob', 'smith', 'Ponong', 64645631, 'bobsmith', '12345', 1, 0, '0000-00-00'),
(2, 'Ray', 'Smith', 'Sawang', 2147483647, 'raysmith', '12345', 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fish_catch`
--

CREATE TABLE `tbl_fish_catch` (
  `catch_id` int(32) NOT NULL,
  `fisherman_id` int(32) NOT NULL,
  `vessel_id` int(32) NOT NULL,
  `fish` text NOT NULL,
  `kilos` double NOT NULL,
  `price` int(32) NOT NULL,
  `lat` double NOT NULL,
  `longh` double NOT NULL,
  `market_id` int(11) NOT NULL,
  `catch_date` date NOT NULL,
  `catch_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fish_catch`
--

INSERT INTO `tbl_fish_catch` (`catch_id`, `fisherman_id`, `vessel_id`, `fish`, `kilos`, `price`, `lat`, `longh`, `market_id`, `catch_date`, `catch_time`) VALUES
(1, 2, 1, 'bangus', 12, 0, 0, 0, 3, '2022-04-28', '07:12:00'),
(2, 1, 1, 'bangus', 20, 0, 0, 0, 2, '2022-05-24', '00:57:00'),
(3, 2, 1, 'Shells', 23, 0, 0, 0, 3, '2022-05-24', '11:04:00'),
(4, 2, 1, 'Crab', 20, 1500, 0, 0, 3, '2022-05-24', '11:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_market`
--

CREATE TABLE `tbl_market` (
  `market_id` int(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `market_desc` varchar(255) NOT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_market`
--

INSERT INTO `tbl_market` (`market_id`, `name`, `market_desc`, `date_registered`) VALUES
(2, 'Carigara Fish Market', 'Fish market', '0000-00-00'),
(3, 'Fish Market 2', 'Fish Market', '0000-00-00'),
(4, 'Fish Market 3', 'Market 3', '0000-00-00'),
(5, 'Fish Market 4', 'Market 4', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(32) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `user_type` int(1) NOT NULL DEFAULT 2,
  `date_registered` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `uname`, `pass`, `fname`, `lname`, `user_type`, `date_registered`) VALUES
(1, 'admin', 'admin123', 'Leon', 'Nadilo', 1, '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vessel`
--

CREATE TABLE `tbl_vessel` (
  `vessel_id` int(32) NOT NULL,
  `vessel_name` varchar(255) NOT NULL,
  `vessel_desc` varchar(255) NOT NULL,
  `vessel_type` text NOT NULL,
  `fishing_gear` text NOT NULL,
  `fisherman_id` int(10) NOT NULL,
  `vessel_img` varchar(255) NOT NULL,
  `date_registered` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vessel`
--

INSERT INTO `tbl_vessel` (`vessel_id`, `vessel_name`, `vessel_desc`, `vessel_type`, `fishing_gear`, `fisherman_id`, `vessel_img`, `date_registered`) VALUES
(1, 'asdf', 'asdf', '', '', 1, 'crayons.jpg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fish`
--
ALTER TABLE `tbl_fish`
  ADD PRIMARY KEY (`fish_id`);

--
-- Indexes for table `tbl_fisherman`
--
ALTER TABLE `tbl_fisherman`
  ADD PRIMARY KEY (`fisherman_id`);

--
-- Indexes for table `tbl_fish_catch`
--
ALTER TABLE `tbl_fish_catch`
  ADD PRIMARY KEY (`catch_id`);

--
-- Indexes for table `tbl_market`
--
ALTER TABLE `tbl_market`
  ADD PRIMARY KEY (`market_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_vessel`
--
ALTER TABLE `tbl_vessel`
  ADD PRIMARY KEY (`vessel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fish`
--
ALTER TABLE `tbl_fish`
  MODIFY `fish_id` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fisherman`
--
ALTER TABLE `tbl_fisherman`
  MODIFY `fisherman_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_fish_catch`
--
ALTER TABLE `tbl_fish_catch`
  MODIFY `catch_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_market`
--
ALTER TABLE `tbl_market`
  MODIFY `market_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_vessel`
--
ALTER TABLE `tbl_vessel`
  MODIFY `vessel_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
