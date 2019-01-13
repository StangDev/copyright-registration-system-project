-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 07:10 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_yo`
--

-- --------------------------------------------------------

--
-- Table structure for table `flow`
--

CREATE TABLE `flow` (
  `id_flow` int(11) NOT NULL,
  `id_oper` int(11) DEFAULT NULL,
  `name_flow` varchar(255) DEFAULT NULL,
  `detail_flow` text,
  `status_flow` varchar(255) DEFAULT NULL,
  `icon_flow` varchar(255) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `id_oper` int(11) NOT NULL,
  `id_form` int(11) DEFAULT NULL,
  `name_oper` varchar(255) DEFAULT NULL,
  `status_oper` int(11) DEFAULT NULL,
  `price_oper` varchar(255) DEFAULT NULL,
  `progress_oper` int(11) DEFAULT NULL,
  `type_oper` varchar(255) DEFAULT NULL,
  `num_form` varchar(255) DEFAULT NULL,
  `num_register` varchar(255) DEFAULT NULL,
  `course_year` varchar(10) DEFAULT NULL,
  `date_receipt` date DEFAULT NULL,
  `date_receipt_cpall` date DEFAULT NULL,
  `date_receipt_agency` date DEFAULT NULL,
  `date_complete` date DEFAULT NULL,
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `image1` varchar(3000) DEFAULT NULL,
  `image2` varchar(3000) DEFAULT NULL,
  `image3` varchar(3000) DEFAULT NULL,
  `image4` varchar(3000) DEFAULT NULL,
  `image5` varchar(3000) DEFAULT NULL,
  `Subdetail_oper` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `user_first_name` varchar(255) DEFAULT NULL,
  `user_last_name` varchar(255) DEFAULT NULL,
  `user_level` varchar(10) DEFAULT NULL,
  `user_location` varchar(255) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_type`, `user_first_name`, `user_last_name`, `user_level`, `user_location`, `user_status`, `create_date`, `update_date`) VALUES
(1, 'admin', 'admin', 'admin', 'tanakorn', 'norsuwan', '1', 'คณะวิศวกรรมศาสตร์และเทคโนโลยี', '1', '2018-03-20', '2019-01-13 05:33:01'),
(4, 'user', 'user', 'user', 'wararat', 'khota', '0', 'คณะการจัดการธุรกิจอาหาร', '1', '2018-03-31', '2019-01-13 05:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_forms`
--

CREATE TABLE `user_forms` (
  `id_form` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `level` varchar(16) DEFAULT NULL,
  `form_type` varchar(10) DEFAULT NULL,
  `form_status` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `insert_time` date DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_form_files`
--

CREATE TABLE `user_form_files` (
  `id` int(11) NOT NULL,
  `id_form` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `path` varchar(1000) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_view_edit`
--

CREATE TABLE `user_view_edit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `remark` text,
  `price` text,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flow`
--
ALTER TABLE `flow`
  ADD PRIMARY KEY (`id_flow`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id_oper`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_forms`
--
ALTER TABLE `user_forms`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `user_form_files`
--
ALTER TABLE `user_form_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_view_edit`
--
ALTER TABLE `user_view_edit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flow`
--
ALTER TABLE `flow`
  MODIFY `id_flow` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id_oper` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_forms`
--
ALTER TABLE `user_forms`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_form_files`
--
ALTER TABLE `user_form_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
