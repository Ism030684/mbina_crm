/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50542
 Source Host           : localhost
 Source Database       : db_crm

 Target Server Type    : MySQL
 Target Server Version : 50542
 File Encoding         : utf-8

 Date: 09/30/2016 10:17:19 AM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `t_department`
-- ----------------------------
DROP TABLE IF EXISTS `t_department`;
CREATE TABLE `t_department` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_department` char(10) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabel departemen';

-- ----------------------------
--  Records of `t_department`
-- ----------------------------
BEGIN;
INSERT INTO `t_department` VALUES ('2', '1', 'Sales');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_brochure`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_brochure`;
CREATE TABLE `t_event_brochure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel event  E-Brochure Vehicle Info';

-- ----------------------------
--  Table structure for `t_event_brochure_after_sales`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_brochure_after_sales`;
CREATE TABLE `t_event_brochure_after_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabel event E-Brochure After Sales';

-- ----------------------------
--  Records of `t_event_brochure_after_sales`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_brochure_after_sales` VALUES ('1', '31160965', '4946028', '2016-09-19 10:18:20'), ('2', '31160965', '77243309', '2016-09-19 10:18:30');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_category`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_category`;
CREATE TABLE `t_event_category` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `event_category_id` int(11) NOT NULL,
  `event_category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='tabel kategori event';

-- ----------------------------
--  Records of `t_event_category`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_category` VALUES ('1', '111', 'General Event'), ('2', '112', 'Sponsorship'), ('3', '113', 'Digital Ads'), ('4', '114', 'Showrooms');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_display_car`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_display_car`;
CREATE TABLE `t_event_display_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel setting event display car';

-- ----------------------------
--  Table structure for `t_event_participant`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_participant`;
CREATE TABLE `t_event_participant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='tabel event  participant';

-- ----------------------------
--  Records of `t_event_participant`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_participant` VALUES ('9', '31160965', '123', '2016-09-20 06:35:47');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_post_database`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_post_database`;
CREATE TABLE `t_event_post_database` (
  `id_event_pre` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `database` decimal(3,0) DEFAULT '0',
  `prospect` decimal(3,0) DEFAULT '0',
  `spk` decimal(3,0) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `t_event_post_database`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_post_database` VALUES ('13', '2016-09-14', '12', '1', '1'), ('13', '2016-09-21', '2', '2', '1');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_post_picture`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_post_picture`;
CREATE TABLE `t_event_post_picture` (
  `id_event_pre` int(11) DEFAULT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `t_event_post_picture`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_post_picture` VALUES ('13', 'test', '1_gla-class_ModelCrop.jpg'), ('10', 'TEST211', '1_e-class-cabriolet_ModelCrop.jpg'), ('10', 'HOREE', '2_cls-class-sedan_ModelCrop.jpg');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_pre`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_pre`;
CREATE TABLE `t_event_pre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dealer_id` int(11) DEFAULT NULL,
  `dealer_area` varchar(100) DEFAULT NULL,
  `item` varchar(20) DEFAULT NULL,
  `dealer` varchar(20) DEFAULT NULL,
  `activity` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `location` varchar(60) DEFAULT NULL,
  `detail_location` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `month` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `display_1` varchar(50) DEFAULT NULL,
  `display_2` varchar(50) DEFAULT NULL,
  `display_3` varchar(50) DEFAULT NULL,
  `display_4` varchar(50) DEFAULT NULL,
  `target` decimal(20,0) DEFAULT NULL,
  `budget` decimal(20,0) DEFAULT NULL,
  `submission_date` date DEFAULT NULL,
  `flag_pic` int(11) DEFAULT '0',
  `flag_db` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `t_event_pre`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_pre` VALUES ('10', '3', 'Kalimantan', 'PRE EVENT', 'PT. Bintang Barito ', 'ATL', 'MOVING', 'HALIM', 'KOMPLEK DPR', 'Yogyakarta', '2016', 'October', '2016-10-18', 'Maybach S-Class', 'Proven Exclusivity', '', '', '0', '400000000', '2016-10-20', '1', '0'), ('13', '3', 'Kalimantan', 'PRE EVENT', 'PT. Bintang Barito ', 'ATL', 'BRI FITRIA KPR', 'Location212', 'KOMPLEK DPR', 'Semarang', '2015', 'January', '2016-09-29', 'Maybach S-Class', '', '', '', '0', '2000000', '2016-09-30', '1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_pre_list`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_pre_list`;
CREATE TABLE `t_event_pre_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `dealer_name` varchar(100) NOT NULL,
  `budget` decimal(20,0) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `mbina_approve` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='list pre event';

-- ----------------------------
--  Records of `t_event_pre_list`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_pre_list` VALUES ('10', '2016', 'PT. Bintang Barito ', '400000000', '2016-09-28 13:59:58', '0', '0'), ('11', '2015', 'PT. Bintang Barito ', '2000000', '2016-09-28 17:00:50', '0', '0');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_proposed`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_proposed`;
CREATE TABLE `t_event_proposed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(100) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `budget` varchar(20) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_month` int(11) NOT NULL,
  `event_year` int(11) NOT NULL,
  `start_finish_date` varchar(100) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `approve` smallint(6) NOT NULL,
  `participant_stat` smallint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabel pengajual event';

-- ----------------------------
--  Records of `t_event_proposed`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_proposed` VALUES ('1', '111', '', 'TEST', '200000000', '31160965', 'GIIAS', '0', '2016', '09/19/2016 12:00 AM - 09/19/2016 12:00 AM', '', '', 'ICE BSD CITY TANGSEL', '2016-09-19 06:17:28', '12', '1', '1'), ('2', '112', '', 'test', '30000000', '33838339', 'PRJ - Pekan Raya Jakarta', '9', '2016', '09/19/2016 12:00 AM - 09/19/2016 12:00 AM', '', '', 'kemayoran', '2016-09-19 07:20:26', '12', '0', '0');
COMMIT;

-- ----------------------------
--  Table structure for `t_event_test_drive_car`
-- ----------------------------
DROP TABLE IF EXISTS `t_event_test_drive_car`;
CREATE TABLE `t_event_test_drive_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='tabel setting event test drive';

-- ----------------------------
--  Records of `t_event_test_drive_car`
-- ----------------------------
BEGIN;
INSERT INTO `t_event_test_drive_car` VALUES ('2', '31160965', '4946028', '2016-09-20 10:28:03'), ('3', '31160965', '77243309', '2016-09-20 10:28:05');
COMMIT;

-- ----------------------------
--  Table structure for `t_group_dealer`
-- ----------------------------
DROP TABLE IF EXISTS `t_group_dealer`;
CREATE TABLE `t_group_dealer` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `group_dealer_id` int(11) NOT NULL,
  `group_dealer` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='tabel group dealer';

-- ----------------------------
--  Records of `t_group_dealer`
-- ----------------------------
BEGIN;
INSERT INTO `t_group_dealer` VALUES ('1', '1', 'Adedanmas', 'Jl. Tb Simatupang', '021-72827278', 'http://info-adedanmas.com/', 'info@http://info-adedanmas.com/'), ('2', '3', 'Dipo Angkasa Motor', 'Jl. Pluit Selatan No. 1 C\nJakarta Utara 14440', '(021) 669 1666', 'dipomotor.com', 'sales@dipomotor.com'), ('4', '2', 'Cakrawala Automotif Rabhasa', 'Jl. Denpasar Raya Blok D-2 Kav. 12. \nJakarta 12940', '(021) 252 2292', 'car-mbenz.com', 'car@car-mbenz.com'), ('5', '4', 'Dipo Mandiri Motor', 'Jl. Jend A. Yani Kav 87\nJakarta 13210', 'Passenger and B', 'diposervice.com', 'service@diposervice.com'), ('7', '6', 'Mass Sarana Motorama', 'Jl. Jend Sudirman No.8\nJakarta 10220', '(021) 573 3193-', '-', 'nvmass@cbn.net.id'), ('8', '7', 'Mercindo Autorama', 'Jl. Mampang Prapatan No. 69 - 70\nJakarta 12790', '(021) 794 1630', 'mercindo-autorama.com', 'sales@mercindo-autorama.com'), ('9', '8', 'Panji Rama Otomotif', 'Jl. Teuku Nyak Arif 14, Simprug\nJakarta 12220', '(021) 726 7661', 'pro-motor.co.id', 'sales@pro-motor.co.id'), ('10', '9', 'Mercindo Autorama -  KG', 'Jl. Boulevard Raya Barat Blok XC-A8\nJakarta 14240', '((021) 452 4515', '', ''), ('11', '10', 'Putra Borneo Nusantara', 'Jl. MT. Haryono Kav 29-30 \nJakarta 12810 ', '(021) 293 80663', 'nusantara-mercedes.com', 'sales@nusantara-mercedes.com'), ('12', '11', 'Promotor Serpong', 'Jl. Raya Serpong Km. 7 No. 32 Tangerang 15311', '(021) 531 21000', '', '');
COMMIT;

-- ----------------------------
--  Table structure for `t_leads_total`
-- ----------------------------
DROP TABLE IF EXISTS `t_leads_total`;
CREATE TABLE `t_leads_total` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `prospect` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel leads total';

-- ----------------------------
--  Table structure for `t_m_activity`
-- ----------------------------
DROP TABLE IF EXISTS `t_m_activity`;
CREATE TABLE `t_m_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `t_m_activity`
-- ----------------------------
BEGIN;
INSERT INTO `t_m_activity` VALUES ('1', 'ATL'), ('2', 'BTL'), ('3', 'CRM');
COMMIT;

-- ----------------------------
--  Table structure for `t_m_city`
-- ----------------------------
DROP TABLE IF EXISTS `t_m_city`;
CREATE TABLE `t_m_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `t_m_city`
-- ----------------------------
BEGIN;
INSERT INTO `t_m_city` VALUES ('1', 'Jakarta'), ('2', 'Bandung'), ('3', 'Semarang'), ('4', 'Yogyakarta'), ('5', 'Surabaya'), ('6', 'Bali'), ('7', 'Medan'), ('8', 'Pekanbaru'), ('9', 'Balikpapan'), ('10', 'Makassar'), ('11', 'Banjarmasin'), ('12', 'Others');
COMMIT;

-- ----------------------------
--  Table structure for `t_m_month`
-- ----------------------------
DROP TABLE IF EXISTS `t_m_month`;
CREATE TABLE `t_m_month` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `t_m_month`
-- ----------------------------
BEGIN;
INSERT INTO `t_m_month` VALUES ('1', 'January'), ('2', 'February'), ('3', 'March'), ('4', 'April'), ('5', 'May'), ('6', 'June'), ('7', 'July'), ('8', 'August'), ('9', 'September'), ('10', 'October'), ('11', 'November'), ('12', 'December');
COMMIT;

-- ----------------------------
--  Table structure for `t_m_year`
-- ----------------------------
DROP TABLE IF EXISTS `t_m_year`;
CREATE TABLE `t_m_year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `t_m_year`
-- ----------------------------
BEGIN;
INSERT INTO `t_m_year` VALUES ('1', '2015'), ('2', '2016');
COMMIT;

-- ----------------------------
--  Table structure for `t_menu`
-- ----------------------------
DROP TABLE IF EXISTS `t_menu`;
CREATE TABLE `t_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `parent` varchar(10) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `enabled` smallint(6) NOT NULL DEFAULT '0',
  `ordering` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 COMMENT='table menu';

-- ----------------------------
--  Records of `t_menu`
-- ----------------------------
BEGIN;
INSERT INTO `t_menu` VALUES ('1', 'dsb', '', 'Dashboard', '', '<i class=\"fa fa-dashboard fa-fw\"></i>', '1', '0'), ('2', 'dsb_lt', 'dsb', 'Leads Total', 'main/leads_tot', '', '1', '0'), ('3', 'dsb_ld', 'dsb', 'Leads By Dealer', 'main/leads_by_dealer', '', '1', '0'), ('4', 'dsb_cpl', 'dsb', 'Cost Per Leads', 'main/cost_per_leads', '', '1', '0'), ('5', 'mst', '', 'Master', '', '<i class=\"fa fa-navicon\"></i>', '1', '0'), ('6', 'mst_usr', 'mst', 'Users Dealer', 'master/users', '', '1', '0'), ('7', 'mst_p', 'mst', 'Position', 'master/users_role', '', '1', '0'), ('8', 'mst_dpt', 'mst', 'Department', 'master/department', '', '0', '0'), ('9', 'mst_gd', 'mst', 'Group Dealer', 'master/group_dealer', '', '0', '0'), ('10', 'mst_out', 'mst', 'Outlet', 'master/outlet', '', '1', '0'), ('11', 'mst_ec', 'mst', 'Event Category', 'master/event_category', '', '1', '0'), ('12', 'set', '', 'Setting', '', '', '0', '0'), ('13', 'sett', '', 'Setting', '', '', '1', '0'), ('14', 'sett_rol', 'sett', 'Role', '', '', '1', '0'), ('15', 'sett_gd', 'sett', 'Group Dealer', '', '', '1', '0'), ('16', 'sett_bro', 'sett', 'Brochure', '', '', '1', '0'), ('17', 'sett_veh', 'sett', 'Vehicle', '', '', '1', '0'), ('18', 'eve', '', 'Event', '', '', '1', '0'), ('19', 'eve_pre', 'eve', 'Pre Event', '', '', '0', '0'), ('20', 'eve_pre', 'eve', 'Pre Event', '', '', '1', '0'), ('21', 'eve_pos', 'eve', 'Post Event', '', '', '1', '0'), ('22', 'eve_rep', 'eve', 'Post Event Report', '', '', '1', '0'), ('23', 'mar', '', 'Marketing', '', '', '1', '0'), ('24', 'mar_sal', 'mar', 'Sales PC Forecast', '', '', '1', '0'), ('25', 'mar_q1', 'mar', 'Marketing Plan Q1', '', '', '1', '0'), ('26', 'mar_q2', 'mar', 'Marketing Plan Q2', '', '', '1', '0'), ('27', 'mar_q3', 'mar', 'Marketing Plan Q3', '', '', '1', '0'), ('28', 'mar_q4', 'mar', 'Marketing Plan Q4', '', '', '1', '0'), ('29', 'dea', '', 'Dealer', '', '', '1', '0'), ('30', 'dea_lea', 'dea', 'Leads', '', '', '1', '0'), ('31', 'dea_cust', 'dea', 'Customer Data', '', '', '0', '0'), ('32', 'dea_cust', 'dea', 'Customer Data', '', '', '1', '0'), ('33', 'dea_send', 'dea', 'Send Mail', '', '', '1', '0'), ('34', 'new', '', 'News Letter and SMS', '', '', '1', '0'), ('35', 'new_mail', 'new', 'Mail Broadcast', '', '', '1', '0'), ('36', 'new_sms', 'new', 'SMS Broadcast', '', '', '1', '0'), ('37', 'mst_usr_mb', 'mst', 'Users Mbina', '', '', '1', '0'), ('38', 'mst_rol', 'mst', 'Users Role', '', '', '1', '0');
COMMIT;

-- ----------------------------
--  Table structure for `t_outlet_dealer`
-- ----------------------------
DROP TABLE IF EXISTS `t_outlet_dealer`;
CREATE TABLE `t_outlet_dealer` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `outlet_id` varchar(11) NOT NULL,
  `group_dealer_id` int(11) DEFAULT NULL,
  `outlet` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `sign_prepared_by` varchar(100) DEFAULT NULL,
  `sign_acknowledged_by` varchar(100) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 COMMENT='table outlet';

-- ----------------------------
--  Records of `t_outlet_dealer`
-- ----------------------------
BEGIN;
INSERT INTO `t_outlet_dealer` VALUES ('1', '1', null, 'PT. Gowa Kencana Motor', '', '', null, null, 'Sulawesi'), ('2', '2', null, 'PT. Bintang Kutai ', '', '', null, null, 'Kalimantan'), ('3', '3', null, 'PT. Bintang Barito ', '', '', 'Yoseph Mulia Librata', 'Fitria Yusuf Usman', 'Kalimantan'), ('4', '4', null, 'PT. Hartono Raya Motor Denpasar Branch', '', '', null, null, 'Bali'), ('5', '5', null, 'PT. Hartono Raya Motor Surabaya Head Office', '', '', null, null, 'East Java'), ('6', '6', null, 'PT. Kedaung Satrya Motor', '', '', null, null, 'East Java'), ('7', '7', null, 'PT. Hartono Raya Motor', '', '', null, null, 'Central Java'), ('8', '8', null, 'PT. Kalimas Arubu Indonesia \nJogjakarta', '', '', null, null, 'Central Java'), ('9', '9', null, 'PT. Kalimas Arubu Indonesia  Semarang', '', '', null, null, 'Central Java'), ('10', '10', null, 'PT. Citrakarya Pranata', '', '', null, null, 'West Java'), ('11', '11', null, 'PT. Bintang Cosmos', '', '', null, null, 'Sumatera'), ('12', '12', null, 'PT. Bintang Wirabens', '', '', null, null, 'Sumatera'), ('13', '13', null, 'PT. Mass Sarana Motorama', '', '', null, null, 'Jakarta'), ('14', '14', null, 'PT. Dipo Mandiri Motor', '', '', null, null, 'Jakarta'), ('15', '15', null, 'PT. Hartono Raya Motor', '', '', null, null, 'Jakarta'), ('16', '16', null, 'PT. Dipo Angkasa Motor', '', '', null, null, 'Jakarta'), ('17', '17', null, 'PT. Cakrawala Automotif Rabhasa', '', '', null, null, 'Jakarta'), ('18', '18', null, 'PT. Adedanmas ', '', '', null, null, 'Jakarta'), ('19', '19', null, 'PT. Panji Rama Otomotif', '', '', null, null, 'Jakarta'), ('20', '20', null, 'PT. Mercindo Autorama', '', '', null, null, 'Jakarta'), ('21', '21', null, 'PT. Putra Borneo Nusantara Indah', '', '', null, null, 'Jakarta'), ('22', '22', null, 'PT. Alun Indah', '', '', null, null, 'Jakarta'), ('23', '23', null, 'PT. Eurotruk Transindo', '', '', null, null, 'Jakarta'), ('24', '24', null, 'PT. Tri Swardana Utama', '', '', null, null, 'Jakarta'), ('25', '25', null, 'PT. Hartono Raya Motor Semarang Branch', '', '', null, null, null), ('26', '26', null, 'PT. Kalimas Arubu Indonesia  Jogjakarta', '', '', null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `t_position`
-- ----------------------------
DROP TABLE IF EXISTS `t_position`;
CREATE TABLE `t_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_position` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='table master position';

-- ----------------------------
--  Records of `t_position`
-- ----------------------------
BEGIN;
INSERT INTO `t_position` VALUES ('7', '9039', 'President Director', '2016-09-26 10:27:20'), ('8', '223', 'Marketing Director', '2016-09-26 10:27:29'), ('9', '1240', 'Vice President', '2016-09-26 10:27:43'), ('10', '8476', 'General Manager Sales', '2016-09-26 10:27:56'), ('11', '602', 'Sales Manager', '2016-09-26 10:28:09'), ('12', '8600', 'Finance Director ', '2016-09-26 10:28:20'), ('13', '7211', 'General Manager After-Sales', '2016-09-26 10:28:30'), ('14', '5291', 'Secretary ', '2016-09-26 10:28:39'), ('15', '1938', 'Vice General Manager', '2016-09-26 10:28:51'), ('16', '8798', 'After Sales Manager', '2016-09-26 10:29:01'), ('17', '6515', 'Operational Director', '2016-09-26 10:29:12'), ('19', '9048', 'Product Support Director', '2016-09-26 10:30:11'), ('20', '4243', 'Branch Manager/Sales Manager', '2016-09-26 10:30:35'), ('21', '1938', 'Parts Manager', '2016-09-29 13:36:40');
COMMIT;

-- ----------------------------
--  Table structure for `t_set_brochure`
-- ----------------------------
DROP TABLE IF EXISTS `t_set_brochure`;
CREATE TABLE `t_set_brochure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `brochure_id` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='tabel setting brosur';

-- ----------------------------
--  Records of `t_set_brochure`
-- ----------------------------
BEGIN;
INSERT INTO `t_set_brochure` VALUES ('6', '1', '2147483647', 'test', '4247747227FINALS-Class-BrochureCBU.pdf', '2016-09-18 19:32:37');
COMMIT;

-- ----------------------------
--  Table structure for `t_set_brochure_type`
-- ----------------------------
DROP TABLE IF EXISTS `t_set_brochure_type`;
CREATE TABLE `t_set_brochure_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` smallint(6) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='type brosur';

-- ----------------------------
--  Records of `t_set_brochure_type`
-- ----------------------------
BEGIN;
INSERT INTO `t_set_brochure_type` VALUES ('1', '1', 'Collection'), ('2', '2', 'Genuine Accesories'), ('3', '3', 'Genuine Part'), ('4', '4', 'Pricelist'), ('5', '5', 'Vehicle Info');
COMMIT;

-- ----------------------------
--  Table structure for `t_set_dealer`
-- ----------------------------
DROP TABLE IF EXISTS `t_set_dealer`;
CREATE TABLE `t_set_dealer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_dealer_id` int(11) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `id_users_manager` int(11) NOT NULL,
  `id_users_supervisor` int(11) NOT NULL,
  `id_users_salesman` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel setting dealer';

-- ----------------------------
--  Table structure for `t_set_vehicle`
-- ----------------------------
DROP TABLE IF EXISTS `t_set_vehicle`;
CREATE TABLE `t_set_vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `price` varchar(25) NOT NULL,
  `year` int(11) NOT NULL,
  `brochure` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1 COMMENT='tabel setting vehicle';

-- ----------------------------
--  Records of `t_set_vehicle`
-- ----------------------------
BEGIN;
INSERT INTO `t_set_vehicle` VALUES ('13', '500', 'A-Class', '', '0', 'a.pdf', ''), ('14', '501', 'B-Class', '', '0', 'b.pdf', ''), ('15', '1', 'AMG GT-S', '', '0', '1.pdf', ''), ('16', '2', 'Maybach S-Class', '', '0', '2.pdf', ''), ('17', '3', 'CLA 45 AMG', '', '0', '3.pdf', ''), ('18', '4', 'E 63 AMG', '', '0', '4.pdf', ''), ('19', '5', 'CLA Class', '', '0', '5.pdf', ''), ('20', '6', 'GLA Class', '', '0', '6.pdf', ''), ('21', '7', 'C-Class', '', '0', '7.pdf', ''), ('22', '8', 'E-Class', '', '0', '8.pdf', ''), ('23', '9', 'S-Class', '', '0', '9.pdf', ''), ('24', '10', 'ML 400', '', '0', '10.pdf', ''), ('25', '11', 'GL 400 ', '', '0', '11.pdf', ''), ('26', '12', 'CLS 400 AMG DYNAMIC', '', '0', '12.pdf', ''), ('27', '13', 'GLC 250 EXCL.', '', '0', '13.pdf', ''), ('28', '14', 'GLE 400  EXCL.', '', '0', '14.pdf', ''), ('29', '15', 'GLE 400 AMG', '', '0', '15.pdf', ''), ('30', '16', 'GL 400  EXCL.', '', '0', '16.pdf', ''), ('31', '17', 'GLE 250d', '', '0', '17.pdf', ''), ('32', '18', 'E 400 AMG ED. E', '', '0', '18.pdf', ''), ('33', '19', 'ML 400', '', '0', '10.pdf', ''), ('34', '20', 'ML 250 CDI', '', '0', '20.pdf', ''), ('35', '21', 'GLA 200 Urban', '', '0', '21.pdf', ''), ('36', '22', 'C 200 AVA', '', '0', '22.pdf', ''), ('37', '25', 'A-Class', '', '0', '25.pdf', ''), ('38', '26', 'B-CLass', '', '0', '26.pdf', ''), ('39', '27', 'MayBach S-Class', '', '0', '27.pdf', ''), ('40', '28', 'GLE 400 AMG', '', '0', '28.pdf', ''), ('41', '29', 'G-Class', '', '0', '29.pdf', ''), ('42', '30', 'SLK Class', '', '0', '30.pdf', ''), ('43', '31', 'GLC', '', '0', '31.pdf', ''), ('44', '32', 'Proven Exclusivity', '', '0', '32.pdf', ''), ('45', '33', 'SL-Class', '', '0', '33.pdf', ''), ('46', '34', 'Fortwo', '', '0', '34.pdf', ''), ('47', '35', 'CLA 200 Shooting Brake', '', '0', '35.pdf', ''), ('48', '36', 'GLA 45 AMG', '', '0', '36.pdf', ''), ('49', '101', 'A-Class ', '', '0', '0101.pdf', ''), ('50', '201', 'B-Class ', '', '0', '0201.pdf', ''), ('51', '301', 'CLA-Class ', '', '0', '0301.pdf', ''), ('52', '401', 'GLA ', '', '0', '0401.pdf', ''), ('53', '501', 'C-Class CKD ', '', '0', '0501.pdf', ''), ('54', '601', 'E-Class Saloon & Estate', '', '0', '0601.pdf', ''), ('55', '701', 'E-Class Coupe', '', '0', '0701.pdf', ''), ('56', '801', 'S-Class', '', '0', '0801.pdf', ''), ('57', '901', 'Maybach ', '', '0', '0901.pdf', ''), ('58', '1001', 'M-Class ', '', '0', '1001.pdf', ''), ('59', '1101', 'GLE Coupe', '', '0', '1101.pdf', ''), ('60', '1201', 'GL', '', '0', '1201.pdf', ''), ('61', '1301', 'G-Class', '', '0', '1301.pdf', ''), ('62', '1401', 'Mercedes AMG GT', '', '0', '1401.pdf', ''), ('63', '1501', 'CLS', '', '0', '1501.pdf', ''), ('64', '1601', 'SLK-Class', '', '0', '1601.pdf', ''), ('65', '1701', 'GLC', '', '0', '1701.pdf', ''), ('66', '1801', 'Proven Exclusivity', '', '0', '1801.pdf', ''), ('67', '1901', 'SL-Class', '', '0', '1901.pdf', ''), ('68', '2001', 'SMART', '', '0', '2001.pdf', ''), ('69', '201', 'CLA 45 AMG', '', '0', '2101.pdf', ''), ('70', '2201', 'CLA SHOOTING BRAKE', '', '0', '2201.pdf', ''), ('71', '2301', 'GLA 45 AMG', '', '0', '2301.pdf', ''), ('72', '371', 'PE A 250 SPORT', '', '0', '', ''), ('73', '373', 'PE E 200', '', '0', '', ''), ('74', '372', 'PE GL 500', '', '0', '', ''), ('75', '374', 'The Mercedes-Benz Car Col', '', '0', 'collec_mercedes.pdf', ''), ('76', '375', 'The Mercedes-Benz Collect', '', '0', 'collec_car.pdf', ''), ('77', '376', 'The smart Collection', '', '0', 'collec_smart.pdf', ''), ('78', '377', 'A-Class Accessories', '', '0', 'genuine_a-class.pdf', ''), ('79', '378', 'B-Class Accessories', '', '0', 'genuine_b-class.pdf', ''), ('80', '379', 'C-Class Accessories', '', '0', 'genuine_c-class.pdf', ''), ('81', '380', 'CLA Accessories', '', '0', 'genuine_cla.pdf', ''), ('82', '381', 'CLS Accessories', '', '0', 'genuine_cls.pdf', ''), ('83', '382', 'E-Class Accessories', '', '0', 'genuine_e-class.pdf', ''), ('84', '383', 'GLA Accessories', '', '0', 'genuine_gla.pdf', ''), ('85', '384', 'GLC Accessories', '', '0', 'genuine_glc.pdf', ''), ('86', '385', 'GLE and M-Class Accessori', '', '0', 'genuine_gle_m.pdf', ''), ('87', '386', 'GLE Coupe Accessories', '', '0', 'genuine_gle_coupe.pdf', ''), ('88', '387', 'Sport Accessories', '', '0', 'genuine_sport.pdf', ''), ('89', '388', 'S-Class Coupe Accessories', '', '0', 'genuine_s-class-coupe.pdf', ''), ('90', '389', 'S-Class Accessories', '', '0', 'genuine_s-class.pdf', ''), ('91', '390', 'SL Accessories', '', '0', 'genuine_sl.pdf', ''), ('92', '391', 'Citan Accessories', '', '0', 'genuine_vcitan.pdf', ''), ('93', '392', 'Vito Accessories', '', '0', 'genuine_vvito.pdf', ''), ('94', '393', 'V-Class Accessories', '', '0', 'genuine_v-class.pdf', ''), ('95', '394', 'Genuine Parts', '', '0', 'part_broc.pdf', ''), ('96', '395', 'Pricelist Agustus 2016', '', '0', 'Rev Pricelist Mercedes-Benz_AUGUST GIIAS 2016.pdf', ''), ('97', '396', 'FA MB CLA 200 AMG', '', '0', 'FA MB CLA 200 AMG - Flyer 210x297mm - Digital Version.pdf', ''), ('98', '397', 'Fa MB CLA 200', '', '0', 'Fa MB CLA 200 - Flyer 210x297mm - Digital Version.pdf', ''), ('99', '398', 'FA MB C 250 AMG', '', '0', 'FA MB C 250 AMG - Flyer 210x297mm- Digital Version.pdf', ''), ('100', '107', 'B-Class', '', '0', 'bclass.pdf', ''), ('101', '108', 'CLS', '', '0', 'cls.pdf', ''), ('102', '109', 'E-Class Coupe', '', '0', 'eclasscoupe.pdf', ''), ('103', '111', 'G-Class', '', '0', 'gclass.pdf', ''), ('104', '112', 'GL', '', '0', 'gl.pdf', ''), ('105', '113', 'GLA', '', '0', 'Fa Mercedes Brochure GLA-Class 570x190mm150716-Tablet.pdf', ''), ('106', '114', 'V-Class', '', '0', 'vclass.pdf', ''), ('107', '115', 'A-Class FL', '', '0', 'aclassfl.pdf', ''), ('108', '116', 'GLC (CBU)', '', '0', 'FA MB GLC-Brochure_570x190mm 130815-Tablet.pdf', ''), ('109', '117', 'S-Class', '', '0', 'Fa MB S-Class-Brochure 570x190mm-310715-Tablet.pdf', ''), ('110', '118', 'Maybach', '', '0', 'maybach.pdf', ''), ('111', '119', 'M-Class', '', '0', 'mclass.pdf', ''), ('112', '120', 'AMG GT', '', '0', 'amggt.pdf', ''), ('113', '121', 'GLE', '', '0', 'FA MB GLE Brochure 570x190mm-Tablet.pdf', ''), ('114', '122', 'E-Class Saloon & Estate R', '', '0', 'eclasssaloonrev.pdf', ''), ('115', '123', 'C-Class', '', '0', 'cclass.pdf', ''), ('116', '124', 'CLA 45 AMG', '', '0', 'cla45amg.pdf', ''), ('117', '125', 'CLA-Class', '', '0', 'claclass.pdf', ''), ('118', '126', 'GLA 45 AMG', '', '0', 'gla45amg.pdf', ''), ('119', '399', 'SLC', '', '0', 'FA MB SLC Brochure 570x190mm 150706-Tablet.pdf', ''), ('120', '400', 'NGCC', '', '0', 'FA MB NGCC_Brochure 570x190mm150716-Tablet.pdf', ''), ('121', '401', 'A 45 AMG', '', '0', 'FA Mercedes A 45 AMG-Flyer 210x297mm_Web.pdf', ''), ('122', '403', 'CLA 200FL', '', '0', 'FA Flyer MB CLA200FL  210x297mm-Digital.pdf', ''), ('123', '404', 'CLA 200SB', '', '0', 'Fa Flyer MB CLA200SB  210x297mm-Digital.pdf', ''), ('124', '405', 'CLA 200AMG', '', '0', 'Fa Flyer MBCLA200AMG  210x297mm-Digital.pdf', ''), ('125', '406', 'C 63 AMG', '', '0', 'Fa FlyerA4_MB  C 63 AMG  210x297mm-Digital.pdf', ''), ('126', '407', 'E-Class (W213)', '', '0', 'FA MB E-Class(W213)_Brochure 570x190mm_DIGITAL.pdf', ''), ('127', '408', 'AMG GLA 45', '', '0', 'FA Mercedes GLA 45 AMG-Flyer 210x297mm_DIGITALTABLET.pdf', ''), ('128', '409', 'AMG C 63', '', '0', 'Fa FlyerA4_MB  C 63 AMG  210x297mm-Digital.pdf', ''), ('129', '410', 'GLC (CKD)', '', '0', 'FA MB GLC - Brochure - Tablet (100516).pdf', ''), ('130', '411', 'GLE Coupe', '', '0', 'MB GLE Coupe Flyer - 211015.pdf', ''), ('131', '412', 'Maybach S-Class', '', '0', 'FA MB S600 Maybach Brochure 570x190mm 150716-Tablet.pdf', ''), ('132', '413', 'Proven Exclusivity', '', '0', 'FA Proven Exclusivity - Tablet Version.pdf', ''), ('133', '414', 'SUV', '', '0', 'FA Mercedes SUV-Brochure 570x190mm-Tablet.pdf', ''), ('134', '415', 'C 300 AMG Coupe', '', '0', 'Fa MB C 300 AMG-Flyer Digital_250716.pdf', ''), ('135', '416', 'C Estate', '', '0', 'FA Mercedes C Estate-Flyer Digital_250716.pdf', ''), ('136', '417', 'MB Genuine oil', '', '0', '2016_Genuine_oil_Brochure_A5_B2C_EN_Screen.pdf', ''), ('137', '418', 'MB Genuine Accessories', '', '0', 'Display GIIAS MBA.pdf', ''), ('138', '419', 'MB Collection1', '', '0', 'MB Collection and Accessories Price List.pdf', ''), ('139', '420', 'MB Collection2', '', '0', 'MB Collection and Accessories.pdf', '');
COMMIT;

-- ----------------------------
--  Table structure for `t_set_vehicle_colour`
-- ----------------------------
DROP TABLE IF EXISTS `t_set_vehicle_colour`;
CREATE TABLE `t_set_vehicle_colour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `colour_id` int(11) NOT NULL,
  `colour_name` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='tabel master warna mobil';

-- ----------------------------
--  Records of `t_set_vehicle_colour`
-- ----------------------------
BEGIN;
INSERT INTO `t_set_vehicle_colour` VALUES ('1', '625377', 'Red', '2016-09-18 06:24:44'), ('2', '637648', 'Silver', '2016-09-18 06:25:02'), ('3', '639475', 'white', '2016-09-18 06:25:18'), ('4', '727728', 'black', '2016-09-18 09:47:12');
COMMIT;

-- ----------------------------
--  Table structure for `t_set_vehicle_detil`
-- ----------------------------
DROP TABLE IF EXISTS `t_set_vehicle_detil`;
CREATE TABLE `t_set_vehicle_detil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `vehicle_colour_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel detil untuk warna mobil';

-- ----------------------------
--  Table structure for `t_users`
-- ----------------------------
DROP TABLE IF EXISTS `t_users`;
CREATE TABLE `t_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_users_role` smallint(6) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `group_dealer_id` int(11) DEFAULT NULL,
  `outlet_dealer_id` int(11) NOT NULL,
  `id_department` char(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_phone_1` varchar(15) NOT NULL,
  `mobile_phone_2` varchar(15) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id_position` smallint(4) DEFAULT NULL,
  `is_mbina` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1 COMMENT='table users';

-- ----------------------------
--  Records of `t_users`
-- ----------------------------
BEGIN;
INSERT INTO `t_users` VALUES ('15', '12', '1', 'Administrator', 'Mbina', 'Admin Mbina', '1', '3', '1', 'ismail.proyek@gmail.com', '0817212162', '0811336668', 'admin', 'admin', '13_Sep_2016__images.jpeg', '9039', '1'), ('20', '0', '2', 'dewi', 'maulida', '', null, '1', null, 'ahmad_shoehib@yahoo.com', '0292929383838', '08292929', 'maulida', 'maulida', '', '9039', '0'), ('21', '0', '4', 'bintang1', 'bintang1', '', null, '11', null, 'test@test.com', '1111111111111', '', 'bintang1', 'bintang1', '', '9039', '0'), ('22', '0', '4', 'bintang2', 'bintang2', '', null, '11', null, 'bintang2@bintang2.com', '111111111111', null, 'bintang2', 'bintang2', '', null, '0'), ('23', '0', '4', 'bintang3', 'bintang2', '', null, '11', null, '', '', null, 'bintang3', 'bintang3', '', null, '0'), ('24', '0', '4', 'bintang4', 'bintang4', '', null, '12', null, 'bintang4@bintang4.com', '0817212162', '08292929', 'bintang4', 'bintang4', '', '9039', '0'), ('25', '0', '4', 'mass1', 'mass1', '', null, '13', null, 'mass1@mass1.com', '0817212162', '', 'mass1', 'mass1', '', '9039', '0'), ('26', '0', '4', 'mass2', 'mass2', '', null, '13', null, 'ahmad_shoehib@yahoo.com', '0817212162', '', 'mass2', 'mass2', '', '1240', '0'), ('27', '0', '4', 'mass3', 'mass3', '', null, '13', null, '', '', null, 'mass3', 'mass3', '', null, '0'), ('28', '0', '4', 'mass4', 'mass4', '', null, '13', null, '', '', null, 'mass4', 'mass4', '', null, '0'), ('29', '0', '4', 'mass5', 'mass5', '', null, '13', null, '', '', null, 'mass5', 'mass5', '', null, '0'), ('30', '0', '4', 'mass6', 'mass6', '', null, '13', null, '', '', null, 'mass6', 'mass6', '', null, '0'), ('31', '0', '4', 'dipo1', 'dipo1', '', null, '16', null, 'dipo1@dipo1.com', '0817212162', '08292929', 'dipo1', 'dipo1', '', '9039', '0'), ('32', '0', '4', 'dipo2', 'dipo2', '', null, '16', null, 'dipo1@dipo1.com', '', null, 'dipo2', 'dipo2', '', null, '0'), ('33', '0', '4', 'dipo3', 'dipo3', '', null, '16', null, 'dipo@dipo1.com', '', null, 'dipo3', 'dipo3', '', null, '0'), ('34', '0', '4', 'dipo4', 'dipo4', '', null, '16', null, 'dipo@dipo.com', '', null, 'dipo4', 'dipo4', '', null, '0'), ('35', '0', '4', 'dmm1', 'dmm1', '', null, '14', null, 'ahmad_shoehib@yahoo.com', '0817212162', '', 'dmm1', 'dmm1', '', '9039', '0'), ('36', '0', '4', 'dmm2', 'dmm2', '', null, '0', null, '', '', null, 'dmm2', 'dmm2', '', null, '0'), ('37', '0', '4', 'dmm3', 'dmm3', '', null, '0', null, '', '', null, 'dmm3', 'dmm3', '', null, '0'), ('38', '0', '4', 'dmm4', 'dmm4', '', null, '0', null, '', '', null, 'dmm4', 'dmm4', '', null, '0'), ('39', '0', '4', 'dmm5', 'dmm5', '', null, '0', null, '', '', null, 'dmm5', 'dmm5', '', null, '0'), ('40', '0', '4', 'hrm1', 'hrm1', '', null, '15', null, 'ismail.proyek@gmail.com', '0817212162', '', 'hrm1', 'hrm1', '', '9039', '0'), ('41', '0', '4', 'hrm2', 'hrm2', '', null, '15', null, '', '', null, 'hrm2', 'hrm2', '', null, '0'), ('42', '0', '4', 'hrm3', 'hrm3', '', null, '15', null, '', '', null, 'hrm3', 'hrm3', '', null, '0'), ('43', '0', '4', 'hrm4', 'hrm4', '', null, '15', null, '', '', null, 'hrm4', 'hrm4', '', null, '0'), ('44', '0', '4', 'hrm5', 'hrm5', '', null, '15', null, '', '', null, 'hrm5', 'hrm5', '', null, '0'), ('45', '0', '0', 'first_name', 'last_name', '', null, '0', null, '', '', null, 'username', 'password', '', '0', '0'), ('46', '0', '4', 'mar1', 'mar1', '', null, '20', null, '', '', null, 'mar1', 'mar1', '', '9039', '0'), ('47', '0', '4', 'mar2', 'mar2', '', null, '20', null, '', '', null, 'mar2', 'mar2', '', '9039', '0'), ('48', '0', '4', 'mar3', 'mar3', '', null, '20', null, '', '', null, 'mar3', 'mar3', '', '9039', '0'), ('49', '0', '4', 'mar4', 'mar4', '', null, '20', null, '', '', null, 'mar4', 'mar4', '', '9039', '0'), ('50', '0', '4', 'mar5', 'mar5', '', null, '20', null, '', '', null, 'mar5', 'mar5', '', '9039', '0'), ('51', '0', '4', 'mar6', 'mar6', '', null, '20', null, '', '', null, 'mar6', 'mar6', '', '9039', '0'), ('52', '0', '4', '', 'pro1', '', null, '19', null, '', '', null, 'pro1', 'pro1', '', '9039', '0'), ('53', '0', '4', '', 'pro2', '', null, '19', null, '', '', null, 'pro2', 'pro2', '', '9039', '0'), ('54', '0', '4', '', 'pro3', '', null, '19', null, '', '', null, 'pro3', 'pro3', '', '9039', '0'), ('55', '0', '4', '', 'pro4', '', null, '19', null, '', '', null, 'pro4', 'pro4', '', '9039', '0'), ('56', '0', '4', '', 'ade1', '', null, '18', null, '', '', null, 'ade1', 'ade1', '', '9039', '0'), ('57', '0', '4', '', 'ade2', '', null, '18', null, '', '', null, 'ade2', 'ade2', '', '9039', '0'), ('58', '0', '4', '', 'ade3', '', null, '18', null, '', '', null, 'ade3', 'ade3', '', '9039', '0'), ('59', '0', '4', '', 'ade4', '', null, '18', null, '', '', null, 'ade4', 'ade4', '', '9039', '0'), ('60', '0', '4', '', 'ade5', '', null, '18', null, '', '', null, 'ade5', 'ade5', '', '9039', '0'), ('61', '0', '4', '', 'ade6', '', null, '18', null, '', '', null, 'ade6', 'ade6', '', '9039', '0'), ('62', '0', '4', '', 'ade7', '', null, '18', null, '', '', null, 'ade7', 'ade7', '', '9039', '0'), ('63', '0', '4', '', 'car1', '', null, '17', null, '', '', null, 'car1', 'car1', '', '9039', '0'), ('64', '0', '4', '', 'car2', '', null, '17', null, '', '', null, 'car2', 'car2', '', '9039', '0'), ('65', '0', '4', '', 'car3', '', null, '17', null, '', '', null, 'car3', 'car3', '', '9039', '0'), ('66', '0', '4', '', 'car4', '', null, '17', null, '', '', null, 'car4', 'car4', '', '9039', '0'), ('67', '0', '4', '', 'car5', '', null, '17', null, '', '', null, 'car5', 'car5', '', '9039', '0'), ('68', '0', '4', '', 'pbn1', '', null, '21', null, '', '', null, 'pbn1', 'pbn1', '', '9039', '0'), ('69', '0', '4', '', 'pbn2', '', null, '21', null, '', '', null, 'pbn2', 'pbn2', '', '9039', '0'), ('70', '0', '4', '', 'pbn3', '', null, '21', null, '', '', null, 'pbn3', 'pbn3', '', '9039', '0'), ('71', '0', '4', '', 'ai1', '', null, '22', null, '', '', null, 'ai1', 'ai1', '', '9030', '0'), ('72', '0', '4', '', 'ai2', '', null, '22', null, '', '', null, 'ai2', 'ai2', '', '9030', '0'), ('73', '0', '4', '', 'ai3', '', null, '22', null, '', '', null, 'ai3', 'ai3', '', '9030', '0'), ('74', '0', '4', '', 'et1', '', null, '23', null, '', '', null, 'et1', 'et1', '', '9030', '0'), ('75', '0', '4', '', 'et2', '', null, '23', null, '', '', null, 'et2', 'et2', '', '9030', '0'), ('76', '0', '4', '', 'et3', '', null, '23', null, '', '', null, 'et3', 'et3', '', '9030', '0'), ('77', '0', '4', '', 'tsu1', '', null, '24', null, '', '', null, 'tsu1', 'tsu1', '', '9030', '0'), ('78', '0', '4', '', 'tsu2', '', null, '24', null, '', '', null, 'tsu2', 'tsu2', '', '9030', '0'), ('79', '0', '4', '', 'tsu3', '', null, '24', null, '', '', null, 'tsu3', 'tsu3', '', '9030', '0'), ('80', '0', '4', '', 'cp1', '', null, '10', null, '', '', null, 'cp1', 'cp1', '', '9030', '0'), ('81', '0', '4', '', 'cp2', '', null, '10', null, '', '', null, 'cp2', 'cp2', '', '9030', '0'), ('82', '0', '4', '', 'harsm1', '', null, '25', null, '', '', null, 'harsm1', 'harsm1', '', '9030', '0'), ('83', '0', '4', '', 'harsm2', '', null, '25', null, '', '', null, 'harsm2', 'harsm2', '', '9030', '0'), ('84', '0', '0', '', '', '', null, '0', null, '', '', null, '', '', '', '0', '0'), ('85', '0', '4', '', 'kaij1', '', null, '26', null, '', '', null, 'kaij1', 'kaij1', '', '9030', '0'), ('86', '0', '4', '', 'kaij2', '', null, '26', null, '', '', null, 'kaij2', 'kaij2', '', '9030', '0'), ('87', '0', '0', '', '', '', null, '0', null, '', '', null, '', '', '', '0', '0'), ('88', '0', '4', '', 'kais1', '', null, '9', null, '', '', null, 'kais1', 'kais1', '', '9030', '0'), ('89', '0', '4', '', 'kais2', '', null, '9', null, '', '', null, 'kais2', 'kais2', '', '9030', '0'), ('90', '0', '0', '', '', '', null, '0', null, '', '', null, '', '', '', '0', '0'), ('91', '0', '4', '', 'hrmsby1', '', null, '5', null, '', '', null, 'hrmsby1', 'hrmsby1', '', '9030', '0'), ('92', '0', '4', '', 'hrmsby2', '', null, '5', null, '', '', null, 'hrmsby2', 'hrmsby2', '', '9030', '0'), ('93', '0', '4', '', 'hrmsby3', '', null, '5', null, '', '', null, 'hrmsby3', 'hrmsby3', '', '9030', '0'), ('94', '0', '4', '', 'hrmsby4', '', null, '5', null, '', '', null, 'hrmsby4', 'hrmsby4', '', '9030', '0'), ('95', '0', '4', '', 'hrmsby5', '', null, '5', null, '', '', null, 'hrmsby5', 'hrmsby5', '', '9030', '0'), ('96', '0', '0', '', '', '', null, '0', null, '', '', null, '', '', '', '0', '0'), ('97', '0', '4', '', 'ksm1', '', null, '6', null, '', '', null, 'ksm1', 'ksm1', '', '9030', '0'), ('98', '0', '4', '', 'ksm2', '', null, '6', null, '', '', null, 'ksm2', 'ksm2', '', '9030', '0'), ('99', '0', '4', '', 'ksm3', '', null, '6', null, '', '', null, 'ksm3', 'ksm3', '', '9030', '0'), ('100', '0', '4', '', 'ksm4', '', null, '6', null, '', '', null, 'ksm4', 'ksm4', '', '9030', '0'), ('101', '0', '0', '', '', '', null, '0', null, '', '', null, '', '', '', '0', '0'), ('102', '0', '4', '', 'hrmdp1', '', null, '4', null, '', '', null, 'hrmdp1', 'hrmdp1', '', '9030', '0'), ('103', '0', '4', '', 'hrmdp2', '', null, '4', null, '', '', null, 'hrmdp2', 'hrmdp2', '', '9030', '0'), ('104', '0', '0', '', '', '', null, '0', null, '', '', null, '', '', '', '0', '0'), ('105', '0', '4', '', 'bk1', '', null, '2', null, '', '', null, 'bk1', 'bk1', '', '9030', '0'), ('106', '0', '4', '', 'bk2', '', null, '2', null, '', '', null, 'bk2', 'bk2', '', '9030', '0'), ('107', '0', '4', '', 'bk3', '', null, '2', null, '', '', null, 'bk3', 'bk3', '', '9030', '0'), ('108', '0', '0', '', '', '', null, '0', null, '', '', null, '', '', '', '0', '0'), ('109', '0', '4', '', 'bb1', '', null, '3', null, '', '', null, 'bb1', 'bb1', '', '9030', '0'), ('110', '0', '4', '', 'bb2', '', null, '3', null, '', '', null, 'bb2', 'bb2', '', '9030', '0'), ('111', '0', '4', '', 'bb3', '', null, '3', null, '', '', null, 'bb3', 'bb3', '', '9030', '0'), ('112', '0', '4', '', 'bb4', '', null, '3', null, '', '', null, 'bb4', 'bb4', '', '9030', '0'), ('113', '0', '0', '', '', '', null, '0', null, '', '', null, '', '', '', '0', '0'), ('114', '0', '4', '', 'gkm1', '', null, '1', null, '', '', null, 'gkm1', 'gkm1', '', '9030', '0'), ('115', '0', '4', '', 'gkm2', '', null, '1', null, '', '', null, 'gkm2', 'gkm2', '', '9030', '0'), ('116', '0', '4', '', 'gkm3', '', null, '1', null, '', '', null, 'gkm3', 'gkm3', '', '9030', '0');
COMMIT;

-- ----------------------------
--  Table structure for `t_users_role`
-- ----------------------------
DROP TABLE IF EXISTS `t_users_role`;
CREATE TABLE `t_users_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users_role` smallint(6) NOT NULL COMMENT 'kode role',
  `users_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='tbl role user';

-- ----------------------------
--  Records of `t_users_role`
-- ----------------------------
BEGIN;
INSERT INTO `t_users_role` VALUES ('4', '1', 'Administrator'), ('6', '2', 'Marketing'), ('7', '3', 'Manager'), ('8', '4', 'Salesman'), ('9', '5', 'Supervisor'), ('10', '6', 'General Manager');
COMMIT;

-- ----------------------------
--  Table structure for `t_users_role_menu`
-- ----------------------------
DROP TABLE IF EXISTS `t_users_role_menu`;
CREATE TABLE `t_users_role_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users_role` int(11) NOT NULL,
  `code_menu` varchar(20) NOT NULL,
  `status` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=latin1 COMMENT='tabel hak akses menu per role';

-- ----------------------------
--  Records of `t_users_role_menu`
-- ----------------------------
BEGIN;
INSERT INTO `t_users_role_menu` VALUES ('132', '1', 'mst_usr', '1'), ('133', '1', 'dsb_cpl', '1'), ('136', '1', 'mst_p', '1'), ('137', '1', 'mst_dpt', '1'), ('139', '1', 'dsb_ld', '1'), ('148', '2', 'dsb_cpl', '1'), ('151', '3', 'dsb_cpl', '1'), ('155', '2', 'mst_dpt', '1'), ('156', '2', 'mst_gd', '1'), ('167', '1', 'dsb_lt', '1'), ('168', '6', 'dsb_lt', '1'), ('172', '1', 'mst_out', '1'), ('173', '1', 'mst_ec', '1'), ('174', '1', 'mst_usr_mb', '1'), ('175', '1', 'mst_rol', '1'), ('176', '1', 'sett_rol', '1'), ('177', '1', 'sett_gd', '1'), ('178', '1', 'sett_bro', '1'), ('179', '1', 'sett_veh', '1'), ('180', '1', 'eve_pre', '1'), ('181', '1', 'eve_pos', '1'), ('182', '1', 'eve_rep', '1'), ('183', '1', 'mar_sal', '1'), ('185', '1', 'mar_q1', '1'), ('186', '1', 'mar_q2', '1'), ('187', '1', 'mar_q3', '1'), ('188', '1', 'mar_q4', '1'), ('189', '1', 'dea_lea', '1'), ('190', '1', 'dea_cust', '1'), ('191', '1', 'dea_send', '1'), ('192', '1', 'new_mail', '1'), ('193', '1', 'new_sms', '1'), ('194', '2', 'dsb_ld', '1'), ('195', '2', 'dsb_lt', '1'), ('196', '3', 'dsb_lt', '1'), ('197', '3', 'dsb_ld', '1'), ('198', '4', 'dsb_lt', '1'), ('199', '4', 'dsb_ld', '1'), ('200', '4', 'dsb_cpl', '1'), ('201', '5', 'dsb_lt', '1'), ('202', '5', 'dsb_ld', '1'), ('203', '5', 'dsb_cpl', '1'), ('204', '6', 'dsb_ld', '1'), ('205', '6', 'dsb_cpl', '1'), ('206', '2', 'eve_pre', '1'), ('207', '2', 'eve_pos', '1'), ('208', '2', 'eve_rep', '1'), ('209', '3', 'eve_pre', '1'), ('210', '3', 'eve_pos', '1'), ('211', '3', 'eve_rep', '1'), ('212', '4', 'eve_pre', '1'), ('213', '4', 'eve_pos', '1'), ('214', '4', 'eve_rep', '1'), ('215', '5', 'eve_pre', '1'), ('216', '5', 'eve_pos', '1'), ('217', '5', 'eve_rep', '1'), ('218', '6', 'eve_pre', '1'), ('219', '6', 'eve_pos', '1'), ('220', '6', 'eve_rep', '1'), ('221', '2', 'mar_sal', '1'), ('222', '2', 'mar_q1', '1'), ('223', '2', 'mar_q2', '1'), ('224', '2', 'mar_q3', '1'), ('225', '2', 'mar_q4', '1'), ('226', '3', 'mar_sal', '1'), ('227', '3', 'mar_q1', '1'), ('228', '3', 'mar_q2', '1'), ('229', '3', 'mar_q3', '1'), ('230', '3', 'mar_q4', '1'), ('231', '4', 'mar_sal', '1'), ('232', '4', 'mar_q1', '1'), ('233', '4', 'mar_q2', '1'), ('234', '4', 'mar_q3', '1'), ('235', '4', 'mar_q4', '1'), ('236', '5', 'mar_sal', '1'), ('237', '5', 'mar_q1', '1'), ('238', '5', 'mar_q2', '1'), ('239', '5', 'mar_q3', '1'), ('240', '5', 'mar_q4', '1'), ('241', '6', 'mar_sal', '1'), ('242', '6', 'mar_q1', '1'), ('243', '6', 'mar_q2', '1'), ('244', '6', 'mar_q3', '1'), ('245', '6', 'mar_q4', '1'), ('246', '2', 'dea_lea', '1'), ('247', '2', 'dea_cust', '1'), ('248', '2', 'dea_send', '1'), ('249', '2', 'new_mail', '1'), ('250', '2', 'new_sms', '1'), ('251', '3', 'dea_lea', '1'), ('252', '3', 'dea_cust', '1'), ('253', '3', 'dea_send', '1'), ('254', '3', 'new_mail', '1'), ('255', '3', 'new_sms', '1'), ('256', '4', 'dea_lea', '1'), ('257', '4', 'dea_cust', '1'), ('258', '4', 'dea_send', '1'), ('259', '4', 'new_mail', '1'), ('260', '4', 'new_sms', '1'), ('261', '5', 'dea_lea', '1'), ('262', '5', 'dea_cust', '1'), ('263', '5', 'dea_send', '1'), ('264', '5', 'new_mail', '1'), ('265', '5', 'new_sms', '1'), ('266', '6', 'dea_lea', '1'), ('267', '6', 'dea_cust', '1'), ('268', '6', 'dea_send', '1'), ('269', '6', 'new_mail', '1'), ('270', '6', 'new_sms', '1'), ('271', '2', 'mst_usr', '1');
COMMIT;

-- ----------------------------
--  Triggers structure for table t_event_pre_list
-- ----------------------------
DROP TRIGGER IF EXISTS `trig_to_t_event_pre`;
delimiter ;;
CREATE TRIGGER `trig_to_t_event_pre` AFTER DELETE ON `t_event_pre_list` FOR EACH ROW DELETE FROM t_event_pre where year=old.year and dealer=old.dealer_name
 ;;
delimiter ;

delimiter ;;
-- ----------------------------
--  Triggers structure for table t_set_vehicle
-- ----------------------------
 ;;
delimiter ;
DROP TRIGGER IF EXISTS `trig_set_vehicle_detil`;
delimiter ;;
CREATE TRIGGER `trig_set_vehicle_detil` AFTER DELETE ON `t_set_vehicle` FOR EACH ROW DELETE FROM t_set_vehicle_detil WHERE vehicle_id=OLD.vehicle_id
 ;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
