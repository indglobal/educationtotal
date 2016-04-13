-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2016 at 10:55 AM
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
-- Table structure for table `basic_details`
--

CREATE TABLE `basic_details` (
  `basic_detail_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `other_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `year_established` varchar(50) NOT NULL,
  `days_open` varchar(255) NOT NULL,
  `board` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `website` varchar(50) NOT NULL,
  `about_school` varchar(255) NOT NULL,
  `ownership_type` varchar(50) NOT NULL,
  `organization_type` varchar(50) NOT NULL,
  `facebook_link` varchar(50) NOT NULL,
  `twitter_link` varchar(50) NOT NULL,
  `google_plus_link` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`basic_detail_id`, `service_id`, `school_name`, `other_name`, `address`, `location`, `zip_code`, `district`, `state`, `year_established`, `days_open`, `board`, `logo`, `profile_image`, `website`, `about_school`, `ownership_type`, `organization_type`, `facebook_link`, `twitter_link`, `google_plus_link`, `created_date`, `modified_date`) VALUES
(1, 1, 'dgfchfg', 'dfghtfg', 'dgcfv', 'dfchft', 'ghtf', 'fhtf', 'fghnf', 'dtfcghrtdf', 'dtrfhd', 'state', '', '', 'dtcfhft', 'dtfghf', 'Public', 'Co-Ed', 'dtfcghf', 'dtrfg', 'tdfg', '2016-04-12 09:51:50', '2016-04-12 09:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `classes_details`
--

CREATE TABLE `classes_details` (
  `class_detail_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `class_type` varchar(50) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `admission_open` varchar(100) NOT NULL,
  `admission_closed` varchar(100) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `subjects_taken` varchar(50) NOT NULL,
  `brif_info` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes_details`
--

INSERT INTO `classes_details` (`class_detail_id`, `service_id`, `class_type`, `fees`, `admission_open`, `admission_closed`, `faculty_name`, `qualification`, `experience`, `subjects_taken`, `brif_info`, `created_date`, `modified_date`) VALUES
(1, 1, 'course1', '1-2 lacks', 'dtcfg', 'dcfgdc', 'fcgd', 'dfgd', '4', 'cfgdc', 'dcfgdd', '2016-04-12 09:51:50', '2016-04-12 09:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `contact_detail_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `contact_mail_id` varchar(50) NOT NULL,
  `director_name` varchar(50) NOT NULL,
  `director_number` varchar(20) NOT NULL,
  `director_mail_id` varchar(20) NOT NULL,
  `coordinator_name` varchar(50) NOT NULL,
  `coordinator_number` varchar(20) NOT NULL,
  `coordinator_mail_id` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`contact_detail_id`, `service_id`, `contact_number`, `contact_mail_id`, `director_name`, `director_number`, `director_mail_id`, `coordinator_name`, `coordinator_number`, `coordinator_mail_id`, `created_date`, `modified_date`) VALUES
(1, 1, '576678', 'thfg', 'gvhng', '68798', 'gvfhgv', 'gvhngv', '986775', 'sdgxfvc', '2016-04-12 09:51:50', '2016-04-12 09:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular_details`
--

CREATE TABLE `co_curricular_details` (
  `co_curricular_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `activities_list` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_curricular_details`
--

INSERT INTO `co_curricular_details` (`co_curricular_id`, `service_id`, `activities_list`, `created_date`, `modified_date`) VALUES
(1, 1, 'dfgd', '2016-04-12 09:51:50', '2016-04-12 09:51:50');

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
-- Table structure for table `events_calender_details`
--

CREATE TABLE `events_calender_details` (
  `events_cal_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `past_name` varchar(100) NOT NULL,
  `past_gallery` varchar(100) NOT NULL,
  `past_date` varchar(100) NOT NULL,
  `upcoming_name` varchar(100) NOT NULL,
  `upcoming_date` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_calender_details`
--

INSERT INTO `events_calender_details` (`events_cal_id`, `service_id`, `past_name`, `past_gallery`, `past_date`, `upcoming_name`, `upcoming_date`, `created_date`, `modified_date`) VALUES
(1, 1, 'cvdfc', '', '3', 'rfg', '5', '2016-04-12 09:51:50', '2016-04-12 09:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_available_details`
--

CREATE TABLE `facilities_available_details` (
  `facilities_available_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `facilities_available` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities_available_details`
--

INSERT INTO `facilities_available_details` (`facilities_available_id`, `service_id`, `facilities_available`, `created_date`, `modified_date`) VALUES
(1, 1, 'dfxcgdc', '2016-04-12 09:51:50', '2016-04-12 09:51:50');

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
(1, 'students', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(2, 'professionals', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(3, 'Online courses', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(4, 'Extra-curricular', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(5, 'Stores', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(6, 'Events', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(7, 'E-commerce', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(8, 'Achievers', '2016-04-06 07:52:20', '2016-04-06 07:52:20');

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
(1, 'academics', 1, '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(2, 'coaching', 1, '2016-04-06 07:52:20', '2016-04-06 07:52:20');

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
(1, 1, 1, 'regular', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(2, 1, 1, 'Study Abroad', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(3, 1, 1, 'Distance education', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(4, 1, 2, 'Academics', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(5, 1, 2, 'Entrance  tests', '2016-04-06 07:52:20', '2016-04-06 07:52:20');

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
(1, 1, 1, 1, 'play schools', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(2, 1, 1, 1, 'schools', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(3, 1, 1, 1, '11 - 12', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(4, 1, 1, 1, 'diploma', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(5, 1, 1, 1, 'ug', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(6, 1, 1, 1, 'pg', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(7, 1, 1, 1, 'research', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(8, 1, 1, 2, 'diploma', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(9, 1, 1, 2, 'ug', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(10, 1, 1, 2, 'pg', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(11, 1, 1, 2, 'research', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(12, 1, 1, 2, 'consultants', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(13, 1, 1, 3, '11 - 12', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(14, 1, 1, 3, 'diploma', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(15, 1, 1, 3, 'ug', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(16, 1, 1, 3, 'pg', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(17, 1, 1, 3, 'research', '2016-04-06 07:52:20', '2016-04-06 07:52:20'),
(18, 1, 1, 3, 'consultants', '2016-04-06 07:52:20', '2016-04-06 07:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_details`
--

CREATE TABLE `reviews_details` (
  `review_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `review_title` varchar(50) NOT NULL,
  `review_content` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews_details`
--

INSERT INTO `reviews_details` (`review_id`, `service_id`, `name`, `course`, `batch`, `review_title`, `review_content`, `date`, `created_date`, `modified_date`) VALUES
(1, 1, 'drd', 'drfg', 'b', 'dxgf', 'dxfg', 'dxrfd', '2016-04-12 09:51:50', '2016-04-12 09:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `sub_cat_second_id` int(11) NOT NULL,
  `sub_cat_thired_id` int(11) NOT NULL,
  `about` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `user_id`, `title`, `cat_id`, `subcat_id`, `sub_cat_second_id`, `sub_cat_thired_id`, `about`, `created_date`, `modified_date`) VALUES
(1, 1, 'dfgf', 1, 1, 1, 1, 'xfgdx', '2016-04-12 09:51:49', '2016-04-12 09:51:49');

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

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `email`, `user_name`, `password`, `user_type_id`, `status`, `created_date`, `modified_date`) VALUES
(5, 'qqq11@ddd.com', 'aaaa', 'fff', 3, 1, '2016-04-08 17:37:11', '2016-04-08 17:37:11'),
(6, 'qqqqq@ddd.com', 'ddsd', 'ddd', 3, 1, '2016-04-08 18:13:54', '2016-04-08 18:13:54'),
(7, 'qqqqwwq@ddd.com', 'ddsd', 'ddd', 3, 1, '2016-04-09 12:56:18', '2016-04-09 12:56:18'),
(8, 'thiru@gmail.com', 'fdsfs', 'thiru', 2, 1, '2016-04-08 18:16:41', '2016-04-08 18:16:41'),
(9, 'sanjay19.526@rediffmail.com', 'sanjay19', 'sanjay', 4, 1, '2016-04-09 13:19:36', '2016-04-09 13:19:36'),
(10, 'sanjay19.526@rediffmail.com', 'sss', '4fdffdf', 4, 1, '2016-04-09 13:18:12', '2016-04-09 13:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_detail_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text,
  `created_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `user_id`, `fname`, `lname`, `phone`, `email`, `address`, `created_date`, `modified_date`) VALUES
(2, 5, 'Sanjay', 'Choudhury', '7896055808', 'qqq11@ddd.com', '', '2016-04-09 19:08:25', '2016-04-09 19:08:25'),
(3, 6, 'ddsd', 'dsad', 'ddd', 'qqqqq@ddd.com', '', '2016-04-08 18:13:54', '2016-04-08 18:13:54'),
(4, 7, 'ddsd', 'dsad', '7896055808', 'qqqqwwq@ddd.com', 'ssasasas', '2016-04-09 12:56:18', '2016-04-09 12:56:18'),
(5, 8, 'fdsfs', 'fdsfsf', 'thiru', 'thiru@gmail.com', '', '2016-04-08 18:16:41', '2016-04-08 18:16:41'),
(6, 9, 'Sanjay', 'Choudhury', '7896055808', 'sanjay19.526@rediffmail.com', 'update address', '2016-04-09 13:19:36', '2016-04-09 13:19:36'),
(7, 10, 'Raju ', 'dsdd', '7896055808', 'sanjay19.526@rediffmail.com', 'sssdddsd', '2016-04-09 13:18:12', '2016-04-09 13:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(50) NOT NULL,
  `created_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_name`, `created_date`, `modified_date`) VALUES
(1, 'admin', '2016-04-08 16:53:43', '2016-04-08 16:53:43'),
(2, 'service provider', '2016-04-08 16:53:43', '2016-04-08 16:53:43'),
(3, 'user', '2016-04-08 16:53:43', '2016-04-08 16:53:52'),
(4, 'marketing persons', '2016-04-08 16:53:43', '2016-04-08 16:53:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_details`
--
ALTER TABLE `basic_details`
  ADD PRIMARY KEY (`basic_detail_id`);

--
-- Indexes for table `classes_details`
--
ALTER TABLE `classes_details`
  ADD PRIMARY KEY (`class_detail_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`contact_detail_id`);

--
-- Indexes for table `co_curricular_details`
--
ALTER TABLE `co_curricular_details`
  ADD PRIMARY KEY (`co_curricular_id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_calender_details`
--
ALTER TABLE `events_calender_details`
  ADD PRIMARY KEY (`events_cal_id`);

--
-- Indexes for table `facilities_available_details`
--
ALTER TABLE `facilities_available_details`
  ADD PRIMARY KEY (`facilities_available_id`);

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
-- Indexes for table `reviews_details`
--
ALTER TABLE `reviews_details`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_specialities`
--
ALTER TABLE `tbl_specialities`
  ADD PRIMARY KEY (`specialities_id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_detail_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_details`
--
ALTER TABLE `basic_details`
  MODIFY `basic_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `classes_details`
--
ALTER TABLE `classes_details`
  MODIFY `class_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `contact_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `co_curricular_details`
--
ALTER TABLE `co_curricular_details`
  MODIFY `co_curricular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events_calender_details`
--
ALTER TABLE `events_calender_details`
  MODIFY `events_cal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `facilities_available_details`
--
ALTER TABLE `facilities_available_details`
  MODIFY `facilities_available_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `master_categories`
--
ALTER TABLE `master_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `master_subcategory`
--
ALTER TABLE `master_subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `master_subcategory_second`
--
ALTER TABLE `master_subcategory_second`
  MODIFY `sub_cat_second_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `master_subcategory_thired`
--
ALTER TABLE `master_subcategory_thired`
  MODIFY `sub_cat_thired_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `reviews_details`
--
ALTER TABLE `reviews_details`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_specialities`
--
ALTER TABLE `tbl_specialities`
  MODIFY `specialities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_table`
--
ALTER TABLE `users_table`
  ADD CONSTRAINT `user_type_id` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`user_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
