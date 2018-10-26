/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : thecaogiato

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-10-26 16:16:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `bank`
-- ----------------------------
DROP TABLE IF EXISTS `bank`;
CREATE TABLE `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_number` varchar(20) DEFAULT NULL,
  `bank_name` varchar(20) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of bank
-- ----------------------------
INSERT INTO `bank` VALUES ('1', '2354342654367', 'vietcombank', 'Trần Chung Kiêns', 'Hà nội', '1', '2018-09-19 15:20:24', '2018-09-19 15:20:24');
INSERT INTO `bank` VALUES ('3', '2354342654367', 'vietcombank', 'Trần Chung Kiêns', '35436547', '7', '2018-10-03 15:52:54', '2018-10-03 15:52:54');
INSERT INTO `bank` VALUES ('4', '2354342654367', 'TechcomBank', 'Trần Chung Kiêns', 'Hà nội', '1', '2018-10-04 15:37:40', '2018-10-04 15:37:40');
INSERT INTO `bank` VALUES ('5', '123', 'vietcombank', 'a', 'v', '6', '2018-10-07 10:50:53', '2018-10-07 10:50:53');

-- ----------------------------
-- Table structure for `exchange_rate`
-- ----------------------------
DROP TABLE IF EXISTS `exchange_rate`;
CREATE TABLE `exchange_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` varchar(50) DEFAULT NULL,
  `telco` varchar(10) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `rate_name` varchar(50) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_user` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exchange_rate
-- ----------------------------
INSERT INTO `exchange_rate` VALUES ('1', 'gemclub', 'VTT', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('2', 'gemclub', 'VTT', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('3', 'gemclub', 'VTT', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('4', 'gemclub', 'VTT', '50000', 'GOLD', '35000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('5', 'gemclub', 'VTT', '100000', 'GOLD', '70000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('6', 'gemclub', 'VTT', '200000', 'GOLD', '140000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('7', 'gemclub', 'VTT', '300000', 'GOLD', '210000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('8', 'gemclub', 'VTT', '500000', 'GOLD', '350000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('9', 'gemclub', 'VTT', '1000000', 'GOLD', '700000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('10', 'gemclub', 'VNP', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('11', 'gemclub', 'VNP', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('12', 'gemclub', 'VNP', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('13', 'gemclub', 'VNP', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('14', 'gemclub', 'VNP', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('15', 'gemclub', 'VNP', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('16', 'gemclub', 'VNP', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('17', 'gemclub', 'VNP', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('18', 'gemclub', 'VNP', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('19', 'gemclub', 'VMS', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('20', 'gemclub', 'VMS', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('21', 'gemclub', 'VMS', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('22', 'gemclub', 'VMS', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('23', 'gemclub', 'VMS', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('24', 'gemclub', 'VMS', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('25', 'gemclub', 'VMS', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('26', 'gemclub', 'VMS', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('27', 'gemclub', 'VMS', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('28', 'zovip', 'VTT', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('29', 'zovip', 'VTT', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('30', 'zovip', 'VTT', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('31', 'zovip', 'VTT', '50000', 'GOLD', '35000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('32', 'zovip', 'VTT', '100000', 'GOLD', '70000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('33', 'zovip', 'VTT', '200000', 'GOLD', '140000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('34', 'zovip', 'VTT', '300000', 'GOLD', '210000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('35', 'zovip', 'VTT', '500000', 'GOLD', '350000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('36', 'zovip', 'VTT', '1000000', 'GOLD', '700000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('37', 'zovip', 'VNP', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('38', 'zovip', 'VNP', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('39', 'zovip', 'VNP', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('40', 'zovip', 'VNP', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('41', 'zovip', 'VNP', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('42', 'zovip', 'VNP', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('43', 'zovip', 'VNP', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('44', 'zovip', 'VNP', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('45', 'zovip', 'VNP', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('46', 'zovip', 'VMS', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('47', 'zovip', 'VMS', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('48', 'zovip', 'VMS', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('49', 'zovip', 'VMS', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('50', 'zovip', 'VMS', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('51', 'zovip', 'VMS', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('52', 'zovip', 'VMS', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('53', 'zovip', 'VMS', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('54', 'zovip', 'VMS', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('55', 'pocvip', 'VTT', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('56', 'pocvip', 'VTT', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('57', 'pocvip', 'VTT', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('58', 'pocvip', 'VTT', '50000', 'GOLD', '35000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('59', 'pocvip', 'VTT', '100000', 'GOLD', '70000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('60', 'pocvip', 'VTT', '200000', 'GOLD', '140000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('61', 'pocvip', 'VTT', '300000', 'GOLD', '210000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('62', 'pocvip', 'VTT', '500000', 'GOLD', '350000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('63', 'pocvip', 'VTT', '1000000', 'GOLD', '700000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('64', 'pocvip', 'VNP', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('65', 'pocvip', 'VNP', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('66', 'pocvip', 'VNP', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('67', 'pocvip', 'VNP', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('68', 'pocvip', 'VNP', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('69', 'pocvip', 'VNP', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('70', 'pocvip', 'VNP', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('71', 'pocvip', 'VNP', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('72', 'pocvip', 'VNP', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('73', 'pocvip', 'VMS', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('74', 'pocvip', 'VMS', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('75', 'pocvip', 'VMS', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('76', 'pocvip', 'VMS', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('77', 'pocvip', 'VMS', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('78', 'pocvip', 'VMS', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('79', 'pocvip', 'VMS', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('80', 'pocvip', 'VMS', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('81', 'pocvip', 'VMS', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('82', 'boza', 'VTT', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('83', 'boza', 'VTT', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('84', 'boza', 'VTT', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('85', 'boza', 'VTT', '50000', 'GOLD', '35000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('86', 'boza', 'VTT', '100000', 'GOLD', '70000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('87', 'boza', 'VTT', '200000', 'GOLD', '140000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('88', 'boza', 'VTT', '300000', 'GOLD', '210000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('89', 'boza', 'VTT', '500000', 'GOLD', '350000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('90', 'boza', 'VTT', '1000000', 'GOLD', '700000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('91', 'pocvip', 'VNP', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('92', 'boza', 'VNP', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('93', 'boza', 'VNP', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('94', 'boza', 'VNP', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('95', 'boza', 'VNP', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('96', 'boza', 'VNP', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('97', 'boza', 'VNP', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('98', 'boza', 'VNP', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('99', 'boza', 'VNP', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('100', 'boza', 'VMS', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('101', 'boza', 'VMS', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('102', 'boza', 'VMS', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('103', 'boza', 'VMS', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('104', 'boza', 'VMS', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('105', 'boza', 'VMS', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('106', 'boza', 'VMS', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('107', 'boza', 'VMS', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('108', 'boza', 'VMS', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('136', 'binclub', 'VTT', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('137', 'binclub', 'VTT', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('138', 'binclub', 'VTT', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('139', 'binclub', 'VTT', '50000', 'GOLD', '35000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('140', 'binclub', 'VTT', '100000', 'GOLD', '70000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('141', 'binclub', 'VTT', '200000', 'GOLD', '140000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('142', 'binclub', 'VTT', '300000', 'GOLD', '210000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('143', 'binclub', 'VTT', '500000', 'GOLD', '350000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('144', 'binclub', 'VTT', '1000000', 'GOLD', '700000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('145', 'binclub', 'VNP', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('146', 'binclub', 'VNP', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('147', 'binclub', 'VNP', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('148', 'binclub', 'VNP', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('149', 'binclub', 'VNP', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('150', 'binclub', 'VNP', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('151', 'binclub', 'VNP', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('152', 'binclub', 'VNP', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('153', 'binclub', 'VNP', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('154', 'binclub', 'VMS', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('155', 'binclub', 'VMS', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('156', 'binclub', 'VMS', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('157', 'binclub', 'VMS', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('158', 'binclub', 'VMS', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('159', 'binclub', 'VMS', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('160', 'binclub', 'VMS', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('161', 'binclub', 'VMS', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('162', 'binclub', 'VMS', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('163', 'manvip', 'VTT', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('164', 'manvip', 'VTT', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('165', 'manvip', 'VTT', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('166', 'manvip', 'VTT', '50000', 'GOLD', '35000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('167', 'manvip', 'VTT', '100000', 'GOLD', '70000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('168', 'manvip', 'VTT', '200000', 'GOLD', '140000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('169', 'manvip', 'VTT', '300000', 'GOLD', '210000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('170', 'manvip', 'VTT', '500000', 'GOLD', '350000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('171', 'manvip', 'VTT', '1000000', 'GOLD', '700000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('172', 'manvip', 'VNP', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('173', 'manvip', 'VNP', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('174', 'manvip', 'VNP', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('175', 'manvip', 'VNP', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('176', 'manvip', 'VNP', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('177', 'manvip', 'VNP', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('178', 'manvip', 'VNP', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('179', 'manvip', 'VNP', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('180', 'manvip', 'VNP', '1000000', 'GOLD', '700000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('181', 'manvip', 'VMS', '10000', 'GOLD', '7000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('182', 'manvip', 'VMS', '20000', 'GOLD', '14000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('183', 'manvip', 'VMS', '30000', 'GOLD', '21000', '0', null, null, null);
INSERT INTO `exchange_rate` VALUES ('184', 'manvip', 'VMS', '50000', 'GOLD', '35000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('185', 'manvip', 'VMS', '100000', 'GOLD', '70000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('186', 'manvip', 'VMS', '200000', 'GOLD', '140000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('187', 'manvip', 'VMS', '300000', 'GOLD', '210000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('188', 'manvip', 'VMS', '500000', 'GOLD', '350000', '1', null, null, null);
INSERT INTO `exchange_rate` VALUES ('189', 'manvip', 'VMS', '1000000', 'GOLD', '700000', '1', null, null, null);

-- ----------------------------
-- Table structure for `game`
-- ----------------------------
DROP TABLE IF EXISTS `game`;
CREATE TABLE `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `rate` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game
-- ----------------------------
INSERT INTO `game` VALUES ('1', 'Gem club', 'http://dailydoithe.com/frontend/assets/img/gem_club.jpg', '0', 'gemclub', null, null, '0');
INSERT INTO `game` VALUES ('2', 'Zo vip', 'http://dailydoithe.com/frontend/assets/img/zovip.jpg', '0', 'zovip', null, null, '0');
INSERT INTO `game` VALUES ('3', 'Poc vip', 'http://dailydoithe.com/frontend/assets/img/pocvip.jpg', '1', 'pocvip', null, null, '0');
INSERT INTO `game` VALUES ('4', 'Bo za', 'http://dailydoithe.com/frontend/assets/img/boza.jpg', '1', 'boza', null, null, '0');
INSERT INTO `game` VALUES ('5', 'Bin Club', 'http://dailydoithe.com/frontend/assets/img/bin_club.jpg', '0', 'binclub', null, null, '0');
INSERT INTO `game` VALUES ('6', 'Man vip', 'http://dailydoithe.com/frontend/assets/img/manvip.jpg', '1', 'manvip', null, null, '0');
INSERT INTO `game` VALUES ('7', 'Ngon Club', 'http://dailydoithe.com/frontend/assets/img/ngonclub.jpg', '1', 'ngonclub', null, null, '0');

-- ----------------------------
-- Table structure for `guest_rate`
-- ----------------------------
DROP TABLE IF EXISTS `guest_rate`;
CREATE TABLE `guest_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(25) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rate` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `key` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of guest_rate
-- ----------------------------
INSERT INTO `guest_rate` VALUES ('1', 'Viettel', 'http://doithe24.com/frontend/assets/img/vt-h.png', '20', '1', null, null, 'VTT');
INSERT INTO `guest_rate` VALUES ('2', 'Vinaphone', 'http://doithe24.com/frontend/assets/img/vn-h.png', '20', '1', null, null, 'VNP');
INSERT INTO `guest_rate` VALUES ('3', 'Mobifone', 'http://doithe24.com/frontend/assets/img/mb-h.png', '12', '1', null, null, 'VMS');

-- ----------------------------
-- Table structure for `history_pay_card`
-- ----------------------------
DROP TABLE IF EXISTS `history_pay_card`;
CREATE TABLE `history_pay_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_code` varchar(15) DEFAULT NULL,
  `card_seri` varchar(15) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0' COMMENT '0: cho duyet, -1 : that bai, 1: nap the thanh cong',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rate` tinyint(4) DEFAULT '0',
  `telco` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of history_pay_card
-- ----------------------------
INSERT INTO `history_pay_card` VALUES ('1', '057430734482111', '43654756970763', '50000', '0', '1', '2018-10-07 12:14:46', '2018-10-07 12:14:46', '35', 'VTT');
INSERT INTO `history_pay_card` VALUES ('2', '057430734482144', '43654756970764', '50000', '0', '1', '2018-10-07 12:21:25', '2018-10-07 12:21:25', '35', 'VTT');
INSERT INTO `history_pay_card` VALUES ('3', '057430734482114', '43654756970763', '50000', '0', '1', '2018-10-07 12:21:57', '2018-10-07 12:21:57', '35', 'VTT');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for `pay_phone`
-- ----------------------------
DROP TABLE IF EXISTS `pay_phone`;
CREATE TABLE `pay_phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) DEFAULT NULL,
  `money` decimal(10,0) DEFAULT '0',
  `status` tinyint(4) DEFAULT '-1',
  `note` varchar(1000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_change` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pay_phone
-- ----------------------------
INSERT INTO `pay_phone` VALUES ('1', '0964953029', '50000', '-1', null, '1', null, '2018-09-21 15:04:35', '2018-09-21 15:04:35');
INSERT INTO `pay_phone` VALUES ('2', '0964953022', '100000', '-1', null, '1', null, '2018-09-21 15:06:58', '2018-09-21 15:06:58');
INSERT INTO `pay_phone` VALUES ('3', '0964953029', '50000', '-1', null, '1', null, '2018-09-24 11:55:19', '2018-09-24 11:55:19');
INSERT INTO `pay_phone` VALUES ('4', '0964953028', '50000', '-1', null, '1', null, '2018-10-03 08:35:16', '2018-10-03 08:35:16');

-- ----------------------------
-- Table structure for `price`
-- ----------------------------
DROP TABLE IF EXISTS `price`;
CREATE TABLE `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `money` int(11) DEFAULT NULL,
  `rate_name` varchar(50) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `created_user` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of price
-- ----------------------------
INSERT INTO `price` VALUES ('1', '10000', 'GOLD', '7000', null, '2018-09-12 16:07:41', null, '0');
INSERT INTO `price` VALUES ('2', '20000', 'GOLD', '14000', null, '2018-09-12 16:07:43', null, '0');
INSERT INTO `price` VALUES ('3', '30000', 'GOLD', '21000', null, '2018-09-12 16:07:46', null, '0');
INSERT INTO `price` VALUES ('4', '50000', 'GOLD', '35000', null, '2018-09-12 16:07:48', null, '1');
INSERT INTO `price` VALUES ('5', '100000', 'GOLD', '70000', null, '2018-09-12 16:07:51', null, '1');
INSERT INTO `price` VALUES ('6', '200000', 'GOLD', '140000', null, '2018-09-12 16:07:53', null, '1');
INSERT INTO `price` VALUES ('7', '300000', 'GOLD', '210000', null, '2018-09-12 16:07:57', null, '1');
INSERT INTO `price` VALUES ('8', '500000', 'GOLD', '350000', null, '2018-09-12 16:07:59', null, '1');
INSERT INTO `price` VALUES ('9', '1000000', 'GOLD', '700000', null, '2018-09-12 16:08:02', null, '1');

-- ----------------------------
-- Table structure for `rate`
-- ----------------------------
DROP TABLE IF EXISTS `rate`;
CREATE TABLE `rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telco` varchar(25) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rate` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `key` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of rate
-- ----------------------------
INSERT INTO `rate` VALUES ('1', 'VIETEL', 'http://doithe24.com/frontend/assets/img/vt-h.png', '20', '1', null, null, 'VTT');
INSERT INTO `rate` VALUES ('2', 'VINAPHONE', 'http://doithe24.com/frontend/assets/img/vn-h.png', '20', '1', null, null, 'VNP');
INSERT INTO `rate` VALUES ('3', 'MOBIFONE', 'http://doithe24.com/frontend/assets/img/mb-h.png', '12', '1', null, null, 'VMS');

-- ----------------------------
-- Table structure for `telco`
-- ----------------------------
DROP TABLE IF EXISTS `telco`;
CREATE TABLE `telco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of telco
-- ----------------------------
INSERT INTO `telco` VALUES ('1', 'VTT', 'http://dailydoithe.com/frontend/assets/img/vtt.PNG', '1', '2018-09-12 16:07:22', null);
INSERT INTO `telco` VALUES ('2', 'VNP', 'http://dailydoithe.com/frontend/assets/img/vnp.PNG', '1', '2018-09-12 16:07:24', null);
INSERT INTO `telco` VALUES ('3', 'VMS', 'http://dailydoithe.com/frontend/assets/img/vms.PNG', '1', '2018-09-12 16:07:27', null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_date` timestamp NULL DEFAULT NULL,
  `token` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `lock` tinyint(4) DEFAULT '1',
  `active` tinyint(4) DEFAULT '1',
  `password_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `money` decimal(15,0) DEFAULT '0',
  `first_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accept` tinyint(4) DEFAULT '0',
  `money_pending` decimal(15,0) DEFAULT '0',
  `money_bank` decimal(15,0) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Trần Chung Kiên', '$2y$10$E0mNg4lsF9o9vLJWh8f2u.2rrbA0prxBlQWUXdzFxm9rbVc.olVZW', 't5pggQxD4QFDelnTlduNS70Lb0zz1vtS0ugRj0zUKuONU6Ik0yvxDMBUCjQW', '2018-09-19 14:23:45', '2018-10-09 09:30:11', '0964953029', null, null, null, null, null, '1', '1', '$2y$10$6RMINRTJiLxX8dgfWb4p1Ow0TFMNVTwwpkRHK8ZlUpb3yQpn.C.I.', '389000', 'hoabinh.jpg', 'lanvien.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('2', 'Nguyên Văn B', '$2y$10$hUqLukOzyPZn50zv3TGLIOdEPl6dxqnvBKs/EN/YZEZ/MrMvj/QbO', null, '2018-09-19 15:04:59', '2018-09-19 15:04:59', '01669797001', null, null, null, null, null, '1', '1', '', '0', null, null, '0', '0', '0');
INSERT INTO `users` VALUES ('3', 'Nguyên Văn C', '$2y$10$iGY9o.gBPkQlf8zYY.Cma.lt3AiVdrXj4m8kHf5J05p/.VVtvVj82', null, '2018-09-19 19:55:43', '2018-09-19 19:55:43', '0989484132', null, null, null, null, null, '1', '1', '', '0', null, null, '0', '0', '0');
INSERT INTO `users` VALUES ('4', 'Nguyên Văn D', '$2y$10$S2pDdPWgfWwXMjPtkxJk0OAcv5prX232AKcbjjuMom2Ssw2QG/gqe', null, '2018-09-24 09:03:43', '2018-09-24 09:03:43', '0964953021', null, null, null, null, null, '1', '1', '', '0', null, null, '0', '0', '0');
INSERT INTO `users` VALUES ('5', 'Nguyên Văn E', '$2y$10$g4tIxmAcF4OoxanlP.PcoOqJSSpsewRfO1l.aG8G.VDQEn2Hdb/Ri', null, '2018-09-27 15:26:47', '2018-09-27 15:26:47', '0988891100', null, null, null, null, null, '1', '1', '', '0', null, null, '0', '0', '0');
INSERT INTO `users` VALUES ('6', 'Nguyên Văn F', '$2y$10$AYAtGK7osHyhe216YDVFSOiKwi9qLMCRvV/sf1yYgVXJdELFUodrO', null, '2018-10-02 12:39:30', '2018-10-07 10:50:17', '0901202666', null, null, null, null, null, '1', '1', '$2y$10$NoEkg4HB5V8qf1qfZxD44eqYAA5LjIlPwBWXd0tVC2lSVMJO/MMxa', '0', '40659667_2083102675034388_6497322733209124864_n.jpg', '20229128_1159117420887855_4603581832860211360_n.jpg', '1', '0', '0');
INSERT INTO `users` VALUES ('7', 'Trần Chung Kiên', '$2y$10$a12iWB9hLDhyPWHuWTr8XueXiQjZ4wUHD44Qu9VXPLjiTmr5bA9ei', null, '2018-10-03 09:56:59', '2018-10-03 15:35:14', '0964953028', null, null, null, null, null, '1', '1', '$2y$10$bZpPkbp2v/1Ez43GsxDBFeL6GXxnVclz/grFJDsfYh7MNtHWpDOVW', '300000', '14_85.png', '10_10.jpg', '1', '0', '0');

-- ----------------------------
-- Table structure for `with_draws`
-- ----------------------------
DROP TABLE IF EXISTS `with_draws`;
CREATE TABLE `with_draws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_request` timestamp NULL DEFAULT NULL,
  `money` decimal(15,0) DEFAULT '0',
  `money_current` decimal(15,0) DEFAULT '0',
  `date_response` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '-1' COMMENT '-2:Thất bại;-1: moi gui yeu cau rut tien;1 thành công:',
  `note` varchar(1000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_change` varchar(50) DEFAULT NULL,
  `bank` varchar(500) DEFAULT NULL,
  `rate` int(11) DEFAULT '0',
  `trans_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of with_draws
-- ----------------------------
INSERT INTO `with_draws` VALUES ('1', '2018-10-08 15:30:16', '100000', '500000', null, '1', 'Rút tiền thành công ', '1', '2018-10-08 15:30:16', '2018-10-08 15:30:16', null, 'vietcombank-2354342654367-Hà nội-Trần Chung Kiêns', '11000', 'HD_20181008_033016');
INSERT INTO `with_draws` VALUES ('2', '2018-10-08 15:31:03', '200000', '389000', null, '-2', 'Cung cấp thông tin và CMND chưa đúng', '1', '2018-10-08 15:31:03', '2018-10-08 15:31:03', null, 'vietcombank-2354342654367-Hà nội-Trần Chung Kiêns', '11000', 'HD_20181008_033103');
