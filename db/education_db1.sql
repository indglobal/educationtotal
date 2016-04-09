-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2016 at 06:41 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'adminadmin');

-- --------------------------------------------------------

--
-- Table structure for table `master_categories`
--

CREATE TABLE `master_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_categories`
--

INSERT INTO `master_categories` (`cat_id`, `cat_name`, `created_date`, `modified_date`) VALUES
(3, 'category', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(4, 'categoryfi', '2016-04-06 07:52:32', '2016-04-06 07:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `master_subcategory`
--

CREATE TABLE `master_subcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_subcategory`
--

INSERT INTO `master_subcategory` (`subcat_id`, `subcat_name`, `cat_id`, `created_date`, `modified_date`) VALUES
(1, 'subcathtty', 3, '2016-04-06 08:32:14', '2016-04-06 11:44:33'),
(2, 'second', 3, '2016-04-06 11:16:06', '2016-04-06 11:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `master_subcategory_second`
--

CREATE TABLE `master_subcategory_second` (
  `sub_cat_second_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subcat_second_name` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_subcategory_second`
--

INSERT INTO `master_subcategory_second` (`sub_cat_second_id`, `cat_id`, `subcat_id`, `subcat_second_name`, `created_date`, `modified_date`) VALUES
(1, 3, 1, 'ffffff', '2016-04-06 12:07:17', '2016-04-06 14:40:47'),
(2, 3, 1, 'now', '2016-04-06 14:23:10', '2016-04-06 14:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `master_subcategory_thired`
--

CREATE TABLE `master_subcategory_thired` (
  `sub_cat_thired_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `sub_cat_second_id` int(11) NOT NULL,
  `subcat_thired_name` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_subcategory_thired`
--

INSERT INTO `master_subcategory_thired` (`sub_cat_thired_id`, `cat_id`, `subcat_id`, `sub_cat_second_id`, `subcat_thired_name`, `created_date`, `modified_date`) VALUES
(2, 3, 1, 1, 'ggggggg', '2016-04-06 14:45:54', '2016-04-06 14:45:54'),
(3, 3, 1, 1, 'hhhhhh', '2016-04-06 14:46:13', '2016-04-06 14:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specialities`
--

CREATE TABLE `tbl_specialities` (
  `specialities_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_specialities`
--

INSERT INTO `tbl_specialities` (`specialities_id`, `name`, `created_date`, `modified_date`) VALUES
(1, 'spec', '2016-04-06 15:11:49', '2016-04-13 15:11:54'),
(7, 'dasdgggggggggg', '2016-04-05 15:29:12', '2016-04-05 15:40:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_categories`
--
ALTER TABLE `master_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `master_subcategory`
--
ALTER TABLE `master_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `master_subcategory_second`
--
ALTER TABLE `master_subcategory_second`
  ADD PRIMARY KEY (`sub_cat_second_id`);

--
-- Indexes for table `master_subcategory_thired`
--
ALTER TABLE `master_subcategory_thired`
  ADD PRIMARY KEY (`sub_cat_thired_id`);

--
-- Indexes for table `tbl_specialities`
--
ALTER TABLE `tbl_specialities`
  ADD PRIMARY KEY (`specialities_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `master_categories`
--
ALTER TABLE `master_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `master_subcategory`
--
ALTER TABLE `master_subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_subcategory_second`
--
ALTER TABLE `master_subcategory_second`
  MODIFY `sub_cat_second_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_subcategory_thired`
--
ALTER TABLE `master_subcategory_thired`
  MODIFY `sub_cat_thired_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_specialities`
--
ALTER TABLE `tbl_specialities`
  MODIFY `specialities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
