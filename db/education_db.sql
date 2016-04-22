-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2016 at 03:21 PM
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
  `university_affialiated` varchar(50) NOT NULL,
  `days_open` varchar(255) NOT NULL,
  `board` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `Prospectus` varchar(255) NOT NULL,
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

INSERT INTO `basic_details` (`basic_detail_id`, `service_id`, `school_name`, `other_name`, `address`, `location`, `zip_code`, `district`, `state`, `year_established`, `university_affialiated`, `days_open`, `board`, `logo`, `profile_image`, `Prospectus`, `website`, `about_school`, `ownership_type`, `organization_type`, `facebook_link`, `twitter_link`, `google_plus_link`, `created_date`, `modified_date`) VALUES
(1, 1, 'playschool 1st', 'playschool 1st', 'rajaji nagar', 'bengalore', '560010', 'bengalore', 'karnataka', '2010', '', '6', 'state', 'dist/service_images/1460619806charity20.jpg', 'dist/service_images/1460619806playschool1.jpeg', '', 'www.playschool1st.com', 'about school', 'Public', 'Co-Ed', 'fb.com/playschool1st', 'twitter.com/playschool1st', 'googleplus.com/playschool1st', '2016-04-14 09:43:26', '2016-04-14 09:43:26'),
(9, 13, 'college 1st', 'nbgf', 'vijay nagar', 'bengalore', '560079', 'bengalore', 'karnataka', '2012', 'VTU', 'rtgdgf', 'state', 'dist/service_images/1460791056charity5.jpg', 'dist/service_images/1460790537college.jpg', 'dist/service_images/1460790537carty_kids.png', 'fgdhv', 'College is an educational institution or a constituent part of one.', 'Public', 'Co-Ed', 'tdfgf', 'rtdrfg', 'rtdrgf', '2016-04-16 09:08:57', '2016-04-16 09:08:57'),
(11, 15, 'playschool 2nd', 'playschool 2nd', 'jaynagar', 'bengalore', '560015', 'banglore', 'karnataka', '2013', '', 'esd', 'state', 'dist/service_images/1460791472charity26.jpg', 'dist/service_images/1460791472play.jpeg', '', 'tgf', 'hgfnb', 'Public', 'Co-Ed', 'fgdgc', 'gf', 'gfbcv', '2016-04-16 09:24:32', '2016-04-16 09:24:32'),
(12, 16, 'school 1st', 'school 1st', 'vijay nagar', 'bengalore', '560080', 'bengalore', 'karnataka', '2010', '', 'yes', 'state', 'dist/service_images/1461200660img9.jpg', 'dist/service_images/1461200660virat-2013-00605.jpg', '', 'www.school.com', 'good,nyc.', 'Public', 'Co-Ed', 'fb', 'd', 'dfs', '2016-04-21 03:04:20', '2016-04-21 03:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `citylist`
--

CREATE TABLE `citylist` (
  `cityid` int(11) NOT NULL,
  `city` text NOT NULL,
  `created_date` date NOT NULL,
  `modified-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citylist`
--

INSERT INTO `citylist` (`cityid`, `city`, `created_date`, `modified-date`) VALUES
(1, 'hubli', '2016-04-20', '2016-04-20'),
(2, 'jaipur', '2016-04-20', '2016-04-21'),
(3, 'kota', '2016-04-20', '2016-04-22'),
(4, 'banglore', '2016-04-22', '2016-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `classes_details`
--

CREATE TABLE `classes_details` (
  `class_detail_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `class_type` varchar(50) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `degree_name` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `mode_of_teaching` varchar(50) NOT NULL,
  `course_duration` varchar(50) NOT NULL,
  `medium_of_teaching` varchar(50) NOT NULL,
  `approval` varchar(50) NOT NULL,
  `accriditation` varchar(50) NOT NULL,
  `total_admission_intake` varchar(50) NOT NULL,
  `admission_details` varchar(255) NOT NULL,
  `eligibility` varchar(50) NOT NULL,
  `entrance_exam` varchar(50) NOT NULL,
  `exam_fees` varchar(50) NOT NULL,
  `last_ad_cut_off` varchar(50) NOT NULL,
  `reservation` varchar(50) NOT NULL,
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

INSERT INTO `classes_details` (`class_detail_id`, `service_id`, `class_type`, `fees`, `degree_name`, `specialization`, `mode_of_teaching`, `course_duration`, `medium_of_teaching`, `approval`, `accriditation`, `total_admission_intake`, `admission_details`, `eligibility`, `entrance_exam`, `exam_fees`, `last_ad_cut_off`, `reservation`, `admission_open`, `admission_closed`, `faculty_name`, `qualification`, `experience`, `subjects_taken`, `brif_info`, `created_date`, `modified_date`) VALUES
(1, 1, 'course1', '1-2 lacks', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'no', 'xz', 'mca', '2', 'english', 'nyc', '2016-04-14 09:43:26', '2016-04-14 09:43:26'),
(6, 13, 'UG,UG,UG,UG,PG,PG,PG', '', 'bca,bcom,bbm,bsc,mca,mba,mtech', 'comp', '', '', 'tgtdf', 'gfbfvc', 'gfvc', '50,60,60,30,40,30,40', '', 'jghgv', 'hg', 'jhgfg', 'thfgdv', 'Regular', 'tgdfv', 'thfgf', 'hfgd', 'thgfbdvc', 'tgfc', 'tgfdc', 'gfcd', '2016-04-16 09:08:57', '2016-04-16 09:08:57'),
(7, 15, 'course1', '1-2 lacks', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'hgnb', 'ghbv', 'hgbvgh', 'fb', 'ghfc', 'hgfv', 'ghfc', '2016-04-16 09:24:33', '2016-04-16 09:24:33'),
(8, 16, '''course1', '2-3 lacks', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'dfdfs', 'dfs', 'fdcd', 'dfc', 'efdsc', 'fsdfce', '2016-04-21 03:04:20', '2016-04-21 03:04:20');

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
  `plsupport_name` varchar(50) NOT NULL,
  `plsupport_number` varchar(50) NOT NULL,
  `plsupport_mail_id` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`contact_detail_id`, `service_id`, `contact_number`, `contact_mail_id`, `director_name`, `director_number`, `director_mail_id`, `coordinator_name`, `coordinator_number`, `coordinator_mail_id`, `plsupport_name`, `plsupport_number`, `plsupport_mail_id`, `created_date`, `modified_date`) VALUES
(1, 1, '9090909090', 'playschool1st@gmail.com', 'qwe', '8989898989', 'qwe@gmail.com', 'asd', '7878787878', 'asd@gmail.com', '', '', '', '2016-04-14 09:43:26', '2016-04-14 09:43:26'),
(9, 13, '908990890980', 'college1st@gmail.com', 'dfgf', 'hfg', 'gvcx', 'fgdv', 'thnfbg', 'gdfvc', 'tgbfv', 'hbgfvt', 'hgf', '2016-04-16 09:08:57', '2016-04-16 09:08:57'),
(11, 15, '9009900909', 'playschool2nd@gmail.com', 'ghfv', 'ghfbcv', 'gfv', 'nhbg', 'jgnbcv', 'jghnbvc', '', '', '', '2016-04-16 09:24:32', '2016-04-16 09:24:32'),
(12, 16, '9089090809', 'school1st@gmail.com', 'fdd', '78', 'jm', 'jmnh', '876', 'jm', '', '', '', '2016-04-21 03:04:20', '2016-04-21 03:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular_details`
--

CREATE TABLE `co_curricular_details` (
  `co_curricular_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `activities_list` varchar(255) NOT NULL,
  `achivers` varchar(50) NOT NULL,
  `curricular_category` varchar(50) NOT NULL,
  `participants_type` varchar(50) NOT NULL,
  `competition_name` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_curricular_details`
--

INSERT INTO `co_curricular_details` (`co_curricular_id`, `service_id`, `activities_list`, `achivers`, `curricular_category`, `participants_type`, `competition_name`, `student_name`, `level`, `created_date`, `modified_date`) VALUES
(1, 1, 'asdfghgfd', '', '', '', '', '', '', '2016-04-14 09:43:26', '2016-04-14 09:43:26'),
(4, 13, 'tyrgfd', 'tydf', 'Sports', 'group', '', 'tgfd', 'inter college', '2016-04-16 09:08:58', '2016-04-16 09:08:58'),
(5, 15, 'hgfd', '', '', '', '', '', '', '2016-04-16 09:24:33', '2016-04-16 09:24:33'),
(6, 16, 'fvd', '', '', '', '', '', '', '2016-04-21 03:04:20', '2016-04-21 03:04:20');

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
-- Table structure for table `edu_user`
--

CREATE TABLE `edu_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `edu_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_user`
--

INSERT INTO `edu_user` (`id`, `user_id`, `edu_name`) VALUES
(1, 5, 'a:1:{i:0;s:1:"1";}'),
(3, 6, 'a:1:{i:0;s:1:"1";}'),
(4, 12, 'a:2:{i:0;s:5:"dsdad";i:1;s:6:"dsadad";}'),
(5, 14, 'a:1:{i:0;s:5:"alert";}'),
(6, 15, 'a:0:{}'),
(7, 16, 'a:1:{i:0;s:0:"";}');

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
(1, 1, 'e1', '', '2', 'e2', '5', '2016-04-14 09:43:26', '2016-04-14 09:43:26'),
(6, 13, 'tyrgfd', '', 'trgfd', 'trgfd', 'trdf', '2016-04-16 09:08:58', '2016-04-16 09:08:58'),
(7, 15, 'ghf', '', 'hfg', 'hgf', 'hgf', '2016-04-16 09:24:33', '2016-04-16 09:24:33'),
(8, 16, 'dfsc', '', 'fsdcf', 'dfs', 'efsd', '2016-04-21 03:04:20', '2016-04-21 03:04:20');

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
(1, 1, 'sports :  yugidukjiwnfhyujhkjyjhb sjghjhgwd jhsdgyudj.', '2016-04-14 09:43:26', '2016-04-14 09:43:26'),
(9, 13, 'A sports complex is a group of sports facilities. For example, there are track and field stadiums, football stadiums, baseball stadiums, swimming pools, and gymnasiums. This area is a sports complex, for fitness.', '2016-04-16 09:08:57', '2016-04-16 09:08:57'),
(11, 15, 'jghfn', '2016-04-16 09:24:33', '2016-04-16 09:24:33'),
(12, 16, 'transportation', '2016-04-21 03:04:20', '2016-04-21 03:04:20');

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
(1, 'students', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'professionals', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Online courses', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Extra-curricular', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Stores', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Events', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'E-commerce', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Achievers', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'academics', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'coaching', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 1, 1, 'regular', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 1, 'Study Abroad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 'Distance education', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 2, 'Academics', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 2, 'Entrance  tests', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 1, 1, 1, 'play schools', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 1, 1, 'schools', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 1, '11 - 12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 1, 1, 'diploma', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 1, 1, 'ug', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 1, 1, 'pg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 1, 1, 'research', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 1, 2, 'diploma', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 1, 2, 'ug', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 1, 2, 'pg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 1, 2, 'research', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 1, 2, 'consultants', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 1, 3, '11 - 12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 1, 3, 'diploma', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 1, 3, 'ug', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 1, 3, 'pg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1, 1, 3, 'research', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 1, 1, 3, 'consultants', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `placement_details`
--

CREATE TABLE `placement_details` (
  `placement_detail_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `total_student` varchar(10) NOT NULL,
  `average_package` varchar(10) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement_details`
--

INSERT INTO `placement_details` (`placement_detail_id`, `service_id`, `company_name`, `total_student`, `average_package`, `created_date`, `modified_date`) VALUES
(1, 13, 'IBM', '100', '3.5', '2016-04-16 09:08:58', '2016-04-16 09:08:58');

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
(1, 1, 'aaa', 'c1', 'b1', 'r1', 'asdfcvd', '3', '2016-04-14 09:43:26', '2016-04-14 09:43:26'),
(2, 13, 'ghf', 'thgf', 'ghf', 'ghf', 'gf', 'ghf', '2016-04-16 09:08:58', '2016-04-16 09:08:58'),
(3, 15, 'ghfv', 'tghf', 'gfd', 'tygfdt', 'gfdcgf', 'vc', '2016-04-16 09:24:33', '2016-04-16 09:24:33'),
(4, 16, 'fdsc', 'fdc', 'vfc', 'efvcds', 'ecs', 'ec', '2016-04-21 03:04:20', '2016-04-21 03:04:20');

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
  `status` enum('0','1') DEFAULT '0' COMMENT '''0 -  Not approved'',''1-approved''',
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `user_id`, `title`, `cat_id`, `subcat_id`, `sub_cat_second_id`, `sub_cat_thired_id`, `about`, `status`, `created_date`, `modified_date`) VALUES
(1, 15, 'play school', 1, 1, 1, 1, 'good', '1', '2016-04-14 09:43:26', '2016-04-14 09:43:26'),
(13, 15, 'college', 1, 1, 1, 4, 'dfsfv', '1', '2016-04-16 09:08:57', '2016-04-16 09:08:57'),
(15, 15, 'play school 2', 1, 1, 1, 1, 'sdcsdfc', '0', '2016-04-16 09:24:32', '2016-04-16 09:24:32'),
(16, 15, 'school', 1, 1, 1, 2, 'good', '0', '2016-04-21 03:04:20', '2016-04-21 03:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `skill_user`
--

CREATE TABLE `skill_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `skill_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_user`
--

INSERT INTO `skill_user` (`id`, `user_id`, `skill_name`) VALUES
(1, '5', 'a:2:{i:0;s:2:"ss";i:1;s:2:"bb";}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rid`, `user_id`, `rate`) VALUES
(50, 0, 2.5),
(51, 0, 3),
(52, 0, 3.5);

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
(7, 'qqqqwwq@ddd.com', 'ddsd', 'ddd', 3, 1, '2016-04-08 18:14:25', '2016-04-08 18:14:25'),
(8, 'thiru@gmail.com', 'fdsfs', 'thiru', 2, 1, '2016-04-08 18:16:41', '2016-04-08 18:16:41'),
(9, 'aaa@gmail.com', 'aaa', 'aaaaaa', 3, 1, '2016-04-12 15:21:33', '2016-04-12 15:21:33'),
(10, 'fds@gdf.com', '123', 'qqqqq', 4, 1, '2016-04-13 11:16:52', '2016-04-13 11:16:52'),
(11, 'bbb@gmail.com', 'bbb', 'bbbbbb', 3, 1, '2016-04-13 15:05:28', '2016-04-13 15:05:28'),
(12, 'vvv@gmail.com', 'vvv', 'vvvvvv', 3, 1, '2016-04-13 15:18:15', '2016-04-13 15:18:15'),
(13, 'sss@gmail.com', 'sss', 'ssssss', 3, 1, '2016-04-13 17:08:19', '2016-04-13 17:08:19'),
(14, 'uuu@gmail.com', 'uuu', 'uuuuuu', 3, 1, '2016-04-13 17:09:59', '2016-04-13 17:09:59'),
(15, 'fff@gmail.com', 'fff', 'ffffff', 2, 1, '2016-04-13 17:18:16', '2016-04-13 17:18:16'),
(16, 'sanjay19.526@rediffmail.com', 'Sanjay', 'sanjay19', 3, 1, '2016-04-13 17:49:42', '2016-04-13 17:49:42'),
(18, 'bharath@gmail.com', 'bharath', '123123', 2, 1, '2016-04-22 14:19:48', '2016-04-22 14:19:48'),
(19, 'bharathn@gmail.com', 'bharath', '123123', 3, 1, '2016-04-22 14:23:25', '2016-04-22 14:23:25');

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
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `user_id`, `fname`, `lname`, `phone`, `email`, `address`, `created_date`, `modified_date`, `interest`, `city`, `country`) VALUES
(2, 5, 'dsad', 'sss', 'fff', 'qqq11@ddd.com', '', '2016-04-08 17:37:11', '2016-04-08 17:37:11', NULL, NULL, NULL),
(3, 6, 'ddsd', 'dsad', 'ddd', 'qqqqq@ddd.com', '', '2016-04-08 18:13:54', '2016-04-08 18:13:54', NULL, NULL, NULL),
(4, 7, 'ddsd', 'dsad', 'ddd', 'qqqqwwq@ddd.com', '', '2016-04-08 18:14:25', '2016-04-08 18:14:25', NULL, NULL, NULL),
(5, 8, 'fdsfs', 'fdsfsf', 'thiru', 'thiru@gmail.com', '', '2016-04-08 18:16:41', '2016-04-08 18:16:41', NULL, NULL, NULL),
(6, 9, 'aaa', 'aaa', 'aaaaaa', 'aaa@gmail.com', '', '2016-04-12 15:21:33', '2016-04-12 15:21:33', NULL, NULL, NULL),
(7, 10, 'sdfsf', 'fsdfs', '9999999999', 'fds@gdf.com', 'qqqqq', '2016-04-13 11:16:52', '2016-04-13 11:16:52', NULL, NULL, NULL),
(8, 11, 'bbb', 'bbb', 'bbbbbb', 'bbb@gmail.com', '', '2016-04-13 15:05:28', '2016-04-13 15:05:28', NULL, NULL, NULL),
(9, 12, 'vvv', 'vvv', '9940060625', 'vvv@gmail.com', '', '2016-04-13 15:18:15', '2016-04-13 15:18:15', 'dasda', 'dsada', 'dsadad'),
(10, 13, 'sss', 'sss', 'ssssss', 'sss@gmail.com', '', '2016-04-13 17:08:19', '2016-04-13 17:08:19', NULL, NULL, NULL),
(11, 14, 'uuu', 'uuu', 'uuuuuu', 'uuu@gmail.com', '', '2016-04-13 17:09:59', '2016-04-13 17:09:59', '', '', ''),
(12, 15, 'fff', 'fff', '9999999999', 'fff@gmail.com', '', '2016-04-13 17:18:16', '2016-04-13 17:18:16', '', '', ''),
(13, 16, 'Sanjay', 'Choudhury', '7896055808', 'sanjay@gmail.com', '', '2016-04-13 17:49:42', '2016-04-13 17:49:42', '', '', ''),
(14, 18, 'bharath', 'raj', '7878787878', 'bharath@gmail.com', '', '2016-04-22 14:19:48', '2016-04-22 14:19:48', NULL, NULL, NULL),
(15, 19, 'bharath', 'N', '8989898989', 'bharathn@gmail.com', '', '2016-04-22 14:23:25', '2016-04-22 14:23:25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_service_cat`
--

CREATE TABLE `user_service_cat` (
  `user_service_cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '''0 - deactive'',''1 - active''',
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_service_cat`
--

INSERT INTO `user_service_cat` (`user_service_cat_id`, `user_id`, `cat_id`, `status`, `created_date`, `modified_date`) VALUES
(1, 18, 1, '1', '2016-04-22 14:19:48', '2016-04-22 14:19:48'),
(2, 18, 2, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(50) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_name`, `created_date`, `modified_date`) VALUES
(1, 'admin', '2016-04-08 16:53:43', '2016-04-08 16:53:43'),
(2, 'service provider', '2016-04-08 16:53:43', '2016-04-08 16:53:43'),
(3, 'user', '2016-04-08 16:53:43', '2016-04-08 16:53:52'),
(4, 'marketing persons', '2016-04-08 16:53:43', '2016-04-08 16:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `visitors_count`
--

CREATE TABLE `visitors_count` (
  `visitor_id` int(11) NOT NULL,
  `visitor_ip` varchar(50) NOT NULL,
  `visitor_count` varchar(10) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors_count`
--

INSERT INTO `visitors_count` (`visitor_id`, `visitor_ip`, `visitor_count`, `created_date`, `modified_date`) VALUES
(1, '127.0.0.1', '95', '2016-04-20 07:49:29', '2016-04-22 02:05:24');

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
-- Indexes for table `edu_user`
--
ALTER TABLE `edu_user`
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
-- Indexes for table `placement_details`
--
ALTER TABLE `placement_details`
  ADD PRIMARY KEY (`placement_detail_id`);

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
-- Indexes for table `skill_user`
--
ALTER TABLE `skill_user`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_service_cat`
--
ALTER TABLE `user_service_cat`
  ADD PRIMARY KEY (`user_service_cat_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- Indexes for table `visitors_count`
--
ALTER TABLE `visitors_count`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_details`
--
ALTER TABLE `basic_details`
  MODIFY `basic_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `classes_details`
--
ALTER TABLE `classes_details`
  MODIFY `class_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `contact_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `co_curricular_details`
--
ALTER TABLE `co_curricular_details`
  MODIFY `co_curricular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `edu_user`
--
ALTER TABLE `edu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `events_calender_details`
--
ALTER TABLE `events_calender_details`
  MODIFY `events_cal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `facilities_available_details`
--
ALTER TABLE `facilities_available_details`
  MODIFY `facilities_available_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
  MODIFY `sub_cat_thired_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `placement_details`
--
ALTER TABLE `placement_details`
  MODIFY `placement_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reviews_details`
--
ALTER TABLE `reviews_details`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `skill_user`
--
ALTER TABLE `skill_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_specialities`
--
ALTER TABLE `tbl_specialities`
  MODIFY `specialities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_service_cat`
--
ALTER TABLE `user_service_cat`
  MODIFY `user_service_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visitors_count`
--
ALTER TABLE `visitors_count`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
