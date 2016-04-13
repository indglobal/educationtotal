/*
Navicat MySQL Data Transfer

Source Server         : Localserver
Source Server Version : 50710
Source Host           : localhost:3306
Source Database       : education_db

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2016-04-09 10:07:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for credentials
-- ----------------------------
DROP TABLE IF EXISTS `credentials`;
CREATE TABLE `credentials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of credentials
-- ----------------------------
INSERT INTO `credentials` VALUES ('1', 'admin@gmail.com', 'adminadmin');

-- ----------------------------
-- Table structure for master_categories
-- ----------------------------
DROP TABLE IF EXISTS `master_categories`;
CREATE TABLE `master_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_categories
-- ----------------------------
INSERT INTO `master_categories` VALUES ('3', 'category', '2016-04-06 07:52:20', '2016-04-06 07:52:20');
INSERT INTO `master_categories` VALUES ('4', 'categoryfi', '2016-04-06 07:52:32', '2016-04-06 07:52:39');

-- ----------------------------
-- Table structure for master_subcategory
-- ----------------------------
DROP TABLE IF EXISTS `master_subcategory`;
CREATE TABLE `master_subcategory` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat_name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_subcategory
-- ----------------------------
INSERT INTO `master_subcategory` VALUES ('1', 'subcathtty', '3', '2016-04-06 08:32:14', '2016-04-06 11:44:33');
INSERT INTO `master_subcategory` VALUES ('2', 'second', '3', '2016-04-06 11:16:06', '2016-04-06 11:16:06');

-- ----------------------------
-- Table structure for master_subcategory_second
-- ----------------------------
DROP TABLE IF EXISTS `master_subcategory_second`;
CREATE TABLE `master_subcategory_second` (
  `sub_cat_second_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `subcat_second_name` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`sub_cat_second_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_subcategory_second
-- ----------------------------
INSERT INTO `master_subcategory_second` VALUES ('1', '3', '1', 'ffffff', '2016-04-06 12:07:17', '2016-04-06 14:40:47');
INSERT INTO `master_subcategory_second` VALUES ('2', '3', '1', 'now', '2016-04-06 14:23:10', '2016-04-06 14:23:10');

-- ----------------------------
-- Table structure for master_subcategory_thired
-- ----------------------------
DROP TABLE IF EXISTS `master_subcategory_thired`;
CREATE TABLE `master_subcategory_thired` (
  `sub_cat_thired_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `sub_cat_second_id` int(11) NOT NULL,
  `subcat_thired_name` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`sub_cat_thired_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of master_subcategory_thired
-- ----------------------------
INSERT INTO `master_subcategory_thired` VALUES ('2', '3', '1', '1', 'ggggggg', '2016-04-06 14:45:54', '2016-04-06 14:45:54');
INSERT INTO `master_subcategory_thired` VALUES ('3', '3', '1', '1', 'hhhhhh', '2016-04-06 14:46:13', '2016-04-06 14:46:13');

-- ----------------------------
-- Table structure for tbl_specialities
-- ----------------------------
DROP TABLE IF EXISTS `tbl_specialities`;
CREATE TABLE `tbl_specialities` (
  `specialities_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`specialities_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_specialities
-- ----------------------------
INSERT INTO `tbl_specialities` VALUES ('1', 'spec', '2016-04-06 15:11:49', '2016-04-13 15:11:54');
INSERT INTO `tbl_specialities` VALUES ('7', 'dasdgggggggggg', '2016-04-05 15:29:12', '2016-04-05 15:40:05');

-- ----------------------------
-- Table structure for user_detail
-- ----------------------------
DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE `user_detail` (
  `user_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text,
  `created_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_detail_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users_table` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_detail
-- ----------------------------
INSERT INTO `user_detail` VALUES ('2', '5', 'dsad', 'sss', 'fff', 'qqq11@ddd.com', '', '2016-04-08 17:37:11', '2016-04-08 17:37:11');
INSERT INTO `user_detail` VALUES ('3', '6', 'ddsd', 'dsad', 'ddd', 'qqqqq@ddd.com', '', '2016-04-08 18:13:54', '2016-04-08 18:13:54');
INSERT INTO `user_detail` VALUES ('4', '7', 'ddsd', 'dsad', 'ddd', 'qqqqwwq@ddd.com', '', '2016-04-08 18:14:25', '2016-04-08 18:14:25');
INSERT INTO `user_detail` VALUES ('5', '8', 'fdsfs', 'fdsfsf', 'thiru', 'thiru@gmail.com', '', '2016-04-08 18:16:41', '2016-04-08 18:16:41');

-- ----------------------------
-- Table structure for user_type
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(50) NOT NULL,
  `created_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_type
-- ----------------------------
INSERT INTO `user_type` VALUES ('1', 'admin', '2016-04-08 16:53:43', '2016-04-08 16:53:43');
INSERT INTO `user_type` VALUES ('2', 'service provider', '2016-04-08 16:53:43', '2016-04-08 16:53:43');
INSERT INTO `user_type` VALUES ('3', 'user', '2016-04-08 16:53:43', '2016-04-08 16:53:52');
INSERT INTO `user_type` VALUES ('4', 'marketing persons', '2016-04-08 16:53:43', '2016-04-08 16:53:55');

-- ----------------------------
-- Table structure for users_table
-- ----------------------------
DROP TABLE IF EXISTS `users_table`;
CREATE TABLE `users_table` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_type_id` (`user_type_id`),
  CONSTRAINT `user_type_id` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`user_type_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_table
-- ----------------------------
INSERT INTO `users_table` VALUES ('5', 'qqq11@ddd.com', 'aaaa', 'fff', '3', '1', '2016-04-08 17:37:11', '2016-04-08 17:37:11');
INSERT INTO `users_table` VALUES ('6', 'qqqqq@ddd.com', 'ddsd', 'ddd', '3', '1', '2016-04-08 18:13:54', '2016-04-08 18:13:54');
INSERT INTO `users_table` VALUES ('7', 'qqqqwwq@ddd.com', 'ddsd', 'ddd', '3', '1', '2016-04-08 18:14:25', '2016-04-08 18:14:25');
INSERT INTO `users_table` VALUES ('8', 'thiru@gmail.com', 'fdsfs', 'thiru', '2', '1', '2016-04-08 18:16:41', '2016-04-08 18:16:41');
