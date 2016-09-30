-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 30 Sep 2016 pada 11.20
-- Versi Server: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_crm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_department`
--

CREATE TABLE `t_department` (
  `id` smallint(6) NOT NULL,
  `id_department` char(10) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabel departemen';

--
-- Dumping data untuk tabel `t_department`
--

INSERT INTO `t_department` (`id`, `id_department`, `department_name`) VALUES
(2, '1', 'Sales');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_brochure`
--

CREATE TABLE `t_event_brochure` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel event  E-Brochure Vehicle Info';

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_brochure_after_sales`
--

CREATE TABLE `t_event_brochure_after_sales` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabel event E-Brochure After Sales';

--
-- Dumping data untuk tabel `t_event_brochure_after_sales`
--

INSERT INTO `t_event_brochure_after_sales` (`id`, `event_id`, `vehicle_id`, `created`) VALUES
(1, 31160965, 4946028, '2016-09-19 03:18:20'),
(2, 31160965, 77243309, '2016-09-19 03:18:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_category`
--

CREATE TABLE `t_event_category` (
  `id` smallint(6) NOT NULL,
  `event_category_id` int(11) NOT NULL,
  `event_category_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='tabel kategori event';

--
-- Dumping data untuk tabel `t_event_category`
--

INSERT INTO `t_event_category` (`id`, `event_category_id`, `event_category_name`) VALUES
(1, 111, 'General Event'),
(2, 112, 'Sponsorship'),
(3, 113, 'Digital Ads'),
(4, 114, 'Showrooms');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_display_car`
--

CREATE TABLE `t_event_display_car` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel setting event display car';

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_participant`
--

CREATE TABLE `t_event_participant` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='tabel event  participant';

--
-- Dumping data untuk tabel `t_event_participant`
--

INSERT INTO `t_event_participant` (`id`, `event_id`, `outlet_id`, `created`) VALUES
(9, 31160965, 123, '2016-09-19 23:35:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_post_database`
--

CREATE TABLE `t_event_post_database` (
  `id_event_pre` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `database` decimal(3,0) DEFAULT '0',
  `prospect` decimal(3,0) DEFAULT '0',
  `spk` decimal(3,0) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_event_post_database`
--

INSERT INTO `t_event_post_database` (`id_event_pre`, `date`, `database`, `prospect`, `spk`) VALUES
(13, '2016-09-14', '12', '1', '1'),
(13, '2016-09-21', '2', '2', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_post_picture`
--

CREATE TABLE `t_event_post_picture` (
  `id_event_pre` int(11) DEFAULT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_event_post_picture`
--

INSERT INTO `t_event_post_picture` (`id_event_pre`, `desc`, `pic`) VALUES
(13, 'test', '1_gla-class_ModelCrop.jpg'),
(10, 'TEST211', '1_e-class-cabriolet_ModelCrop.jpg'),
(10, 'HOREE', '2_cls-class-sedan_ModelCrop.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_pre`
--

CREATE TABLE `t_event_pre` (
  `id` int(11) NOT NULL,
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
  `flag_db` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_event_pre`
--

INSERT INTO `t_event_pre` (`id`, `dealer_id`, `dealer_area`, `item`, `dealer`, `activity`, `description`, `location`, `detail_location`, `city`, `year`, `month`, `date`, `display_1`, `display_2`, `display_3`, `display_4`, `target`, `budget`, `submission_date`, `flag_pic`, `flag_db`) VALUES
(10, 3, 'Kalimantan', 'PRE EVENT', 'PT. Bintang Barito ', 'ATL', 'MOVING', 'HALIM', 'KOMPLEK DPR', 'Yogyakarta', 2016, 'October', '2016-10-18', 'Maybach S-Class', 'Proven Exclusivity', '', '', '0', '400000000', '2016-10-20', 1, 0),
(13, 3, 'Kalimantan', 'PRE EVENT', 'PT. Bintang Barito ', 'ATL', 'BRI FITRIA KPR', 'Location212', 'KOMPLEK DPR', 'Semarang', 2015, 'January', '2016-09-29', 'Maybach S-Class', '', '', '', '0', '2000000', '2016-09-30', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_pre_list`
--

CREATE TABLE `t_event_pre_list` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `dealer_name` varchar(100) NOT NULL,
  `budget` decimal(20,0) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `mbina_approve` smallint(6) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='list pre event';

--
-- Dumping data untuk tabel `t_event_pre_list`
--

INSERT INTO `t_event_pre_list` (`id`, `year`, `dealer_name`, `budget`, `created`, `created_by`, `mbina_approve`) VALUES
(10, 2016, 'PT. Bintang Barito ', '400000000', '2016-09-28 06:59:58', 0, 0),
(11, 2015, 'PT. Bintang Barito ', '2000000', '2016-09-28 10:00:50', 0, 0);

--
-- Trigger `t_event_pre_list`
--
DELIMITER $$
CREATE TRIGGER `trig_to_t_event_pre` AFTER DELETE ON `t_event_pre_list`
 FOR EACH ROW DELETE FROM t_event_pre where year=old.year and dealer=old.dealer_name
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_proposed`
--

CREATE TABLE `t_event_proposed` (
  `id` int(11) NOT NULL,
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
  `participant_stat` smallint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='tabel pengajual event';

--
-- Dumping data untuk tabel `t_event_proposed`
--

INSERT INTO `t_event_proposed` (`id`, `category`, `logo`, `description`, `budget`, `event_id`, `event_name`, `event_month`, `event_year`, `start_finish_date`, `longitude`, `latitude`, `address`, `created`, `created_by`, `approve`, `participant_stat`) VALUES
(1, 111, '', 'TEST', '200000000', 31160965, 'GIIAS', 0, 2016, '09/19/2016 12:00 AM - 09/19/2016 12:00 AM', '', '', 'ICE BSD CITY TANGSEL', '2016-09-18 23:17:28', 12, 1, 1),
(2, 112, '', 'test', '30000000', 33838339, 'PRJ - Pekan Raya Jakarta', 9, 2016, '09/19/2016 12:00 AM - 09/19/2016 12:00 AM', '', '', 'kemayoran', '2016-09-19 00:20:26', 12, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_test_drive_car`
--

CREATE TABLE `t_event_test_drive_car` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='tabel setting event test drive';

--
-- Dumping data untuk tabel `t_event_test_drive_car`
--

INSERT INTO `t_event_test_drive_car` (`id`, `event_id`, `vehicle_id`, `created`) VALUES
(2, 31160965, 4946028, '2016-09-20 03:28:03'),
(3, 31160965, 77243309, '2016-09-20 03:28:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_group_dealer`
--

CREATE TABLE `t_group_dealer` (
  `id` smallint(6) NOT NULL,
  `group_dealer_id` int(11) NOT NULL,
  `group_dealer` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='tabel group dealer';

--
-- Dumping data untuk tabel `t_group_dealer`
--

INSERT INTO `t_group_dealer` (`id`, `group_dealer_id`, `group_dealer`, `address`, `contact`, `website`, `email`) VALUES
(1, 1, 'Adedanmas', 'Jl. Tb Simatupang', '021-72827278', 'http://info-adedanmas.com/', 'info@http://info-adedanmas.com/'),
(2, 3, 'Dipo Angkasa Motor', 'Jl. Pluit Selatan No. 1 C\nJakarta Utara 14440', '(021) 669 1666', 'dipomotor.com', 'sales@dipomotor.com'),
(4, 2, 'Cakrawala Automotif Rabhasa', 'Jl. Denpasar Raya Blok D-2 Kav. 12. \nJakarta 12940', '(021) 252 2292', 'car-mbenz.com', 'car@car-mbenz.com'),
(5, 4, 'Dipo Mandiri Motor', 'Jl. Jend A. Yani Kav 87\nJakarta 13210', 'Passenger and B', 'diposervice.com', 'service@diposervice.com'),
(7, 6, 'Mass Sarana Motorama', 'Jl. Jend Sudirman No.8\nJakarta 10220', '(021) 573 3193-', '-', 'nvmass@cbn.net.id'),
(8, 7, 'Mercindo Autorama', 'Jl. Mampang Prapatan No. 69 - 70\nJakarta 12790', '(021) 794 1630', 'mercindo-autorama.com', 'sales@mercindo-autorama.com'),
(9, 8, 'Panji Rama Otomotif', 'Jl. Teuku Nyak Arif 14, Simprug\nJakarta 12220', '(021) 726 7661', 'pro-motor.co.id', 'sales@pro-motor.co.id'),
(10, 9, 'Mercindo Autorama -  KG', 'Jl. Boulevard Raya Barat Blok XC-A8\nJakarta 14240', '((021) 452 4515', '', ''),
(11, 10, 'Putra Borneo Nusantara', 'Jl. MT. Haryono Kav 29-30 \nJakarta 12810 ', '(021) 293 80663', 'nusantara-mercedes.com', 'sales@nusantara-mercedes.com'),
(12, 11, 'Promotor Serpong', 'Jl. Raya Serpong Km. 7 No. 32 Tangerang 15311', '(021) 531 21000', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_leads_total`
--

CREATE TABLE `t_leads_total` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `prospect` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel leads total';

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_menu`
--

CREATE TABLE `t_menu` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `parent` varchar(10) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `enabled` smallint(6) NOT NULL DEFAULT '0',
  `ordering` smallint(6) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 COMMENT='table menu';

--
-- Dumping data untuk tabel `t_menu`
--

INSERT INTO `t_menu` (`id`, `kode`, `parent`, `menu`, `url`, `icon`, `enabled`, `ordering`) VALUES
(1, 'dsb', '', 'Dashboard', '', '<i class="fa fa-dashboard fa-fw"></i>', 1, 0),
(2, 'dsb_lt', 'dsb', 'Leads Total', 'main/leads_tot', '', 1, 0),
(3, 'dsb_ld', 'dsb', 'Leads By Dealer', 'main/leads_by_dealer', '', 1, 0),
(4, 'dsb_cpl', 'dsb', 'Cost Per Leads', 'main/cost_per_leads', '', 1, 0),
(5, 'mst', '', 'Master', '', '<i class="fa fa-navicon"></i>', 1, 0),
(6, 'mst_usr', 'mst', 'Users Dealer', 'master/users', '', 1, 0),
(7, 'mst_p', 'mst', 'Position', 'master/users_role', '', 1, 0),
(8, 'mst_dpt', 'mst', 'Department', 'master/department', '', 0, 0),
(9, 'mst_gd', 'mst', 'Group Dealer', 'master/group_dealer', '', 0, 0),
(10, 'mst_out', 'mst', 'Outlet', 'master/outlet', '', 1, 0),
(11, 'mst_ec', 'mst', 'Event Category', 'master/event_category', '', 1, 0),
(12, 'set', '', 'Setting', '', '', 0, 0),
(13, 'sett', '', 'Setting', '', '', 1, 0),
(14, 'sett_rol', 'sett', 'Role', '', '', 1, 0),
(15, 'sett_gd', 'sett', 'Group Dealer', '', '', 1, 0),
(16, 'sett_bro', 'sett', 'Brochure', '', '', 1, 0),
(17, 'sett_veh', 'sett', 'Vehicle', '', '', 1, 0),
(18, 'eve', '', 'Event', '', '', 1, 0),
(19, 'eve_pre', 'eve', 'Pre Event', '', '', 0, 0),
(20, 'eve_pre', 'eve', 'Pre Event', '', '', 1, 0),
(21, 'eve_pos', 'eve', 'Post Event', '', '', 1, 0),
(22, 'eve_rep', 'eve', 'Post Event Report', '', '', 1, 0),
(23, 'mar', '', 'Marketing', '', '', 1, 0),
(24, 'mar_sal', 'mar', 'Sales PC Forecast', '', '', 1, 0),
(25, 'mar_q1', 'mar', 'Marketing Plan Q1', '', '', 1, 0),
(26, 'mar_q2', 'mar', 'Marketing Plan Q2', '', '', 1, 0),
(27, 'mar_q3', 'mar', 'Marketing Plan Q3', '', '', 1, 0),
(28, 'mar_q4', 'mar', 'Marketing Plan Q4', '', '', 1, 0),
(29, 'dea', '', 'Dealer', '', '', 1, 0),
(30, 'dea_lea', 'dea', 'Leads', '', '', 1, 0),
(31, 'dea_cust', 'dea', 'Customer Data', '', '', 0, 0),
(32, 'dea_cust', 'dea', 'Customer Data', '', '', 1, 0),
(33, 'dea_send', 'dea', 'Send Mail', '', '', 1, 0),
(34, 'new', '', 'News Letter and SMS', '', '', 1, 0),
(35, 'new_mail', 'new', 'Mail Broadcast', '', '', 1, 0),
(36, 'new_sms', 'new', 'SMS Broadcast', '', '', 1, 0),
(37, 'mst_usr_mb', 'mst', 'Users Mbina', '', '', 1, 0),
(38, 'mst_rol', 'mst', 'Users Role', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_m_activity`
--

CREATE TABLE `t_m_activity` (
  `id` int(11) NOT NULL,
  `activity` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_m_activity`
--

INSERT INTO `t_m_activity` (`id`, `activity`) VALUES
(1, 'ATL'),
(2, 'BTL'),
(3, 'CRM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_m_city`
--

CREATE TABLE `t_m_city` (
  `id` int(11) NOT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_m_city`
--

INSERT INTO `t_m_city` (`id`, `city`) VALUES
(1, 'Jakarta'),
(2, 'Bandung'),
(3, 'Semarang'),
(4, 'Yogyakarta'),
(5, 'Surabaya'),
(6, 'Bali'),
(7, 'Medan'),
(8, 'Pekanbaru'),
(9, 'Balikpapan'),
(10, 'Makassar'),
(11, 'Banjarmasin'),
(12, 'Others');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_m_month`
--

CREATE TABLE `t_m_month` (
  `id` int(11) NOT NULL,
  `month` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_m_month`
--

INSERT INTO `t_m_month` (`id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_m_year`
--

CREATE TABLE `t_m_year` (
  `id` int(11) NOT NULL,
  `year` varchar(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_m_year`
--

INSERT INTO `t_m_year` (`id`, `year`) VALUES
(1, '2015'),
(2, '2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_outlet_dealer`
--

CREATE TABLE `t_outlet_dealer` (
  `id` smallint(6) NOT NULL,
  `outlet_id` varchar(11) NOT NULL,
  `group_dealer_id` int(11) DEFAULT NULL,
  `outlet` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `sign_prepared_by` varchar(100) DEFAULT NULL,
  `sign_acknowledged_by` varchar(100) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 COMMENT='table outlet';

--
-- Dumping data untuk tabel `t_outlet_dealer`
--

INSERT INTO `t_outlet_dealer` (`id`, `outlet_id`, `group_dealer_id`, `outlet`, `address`, `contact`, `sign_prepared_by`, `sign_acknowledged_by`, `area`) VALUES
(1, '1', NULL, 'PT. Gowa Kencana Motor', '', '', NULL, NULL, 'Sulawesi'),
(2, '2', NULL, 'PT. Bintang Kutai ', '', '', NULL, NULL, 'Kalimantan'),
(3, '3', NULL, 'PT. Bintang Barito ', '', '', 'Yoseph Mulia Librata', 'Fitria Yusuf Usman', 'Kalimantan'),
(4, '4', NULL, 'PT. Hartono Raya Motor Denpasar Branch', '', '', NULL, NULL, 'Bali'),
(5, '5', NULL, 'PT. Hartono Raya Motor Surabaya Head Office', '', '', NULL, NULL, 'East Java'),
(6, '6', NULL, 'PT. Kedaung Satrya Motor', '', '', NULL, NULL, 'East Java'),
(7, '7', NULL, 'PT. Hartono Raya Motor', '', '', NULL, NULL, 'Central Java'),
(8, '8', NULL, 'PT. Kalimas Arubu Indonesia \nJogjakarta', '', '', NULL, NULL, 'Central Java'),
(9, '9', NULL, 'PT. Kalimas Arubu Indonesia  Semarang', '', '', NULL, NULL, 'Central Java'),
(10, '10', NULL, 'PT. Citrakarya Pranata', '', '', NULL, NULL, 'West Java'),
(11, '11', NULL, 'PT. Bintang Cosmos', '', '', NULL, NULL, 'Sumatera'),
(12, '12', NULL, 'PT. Bintang Wirabens', '', '', NULL, NULL, 'Sumatera'),
(13, '13', NULL, 'PT. Mass Sarana Motorama', '', '', NULL, NULL, 'Jakarta'),
(14, '14', NULL, 'PT. Dipo Mandiri Motor', '', '', NULL, NULL, 'Jakarta'),
(15, '15', NULL, 'PT. Hartono Raya Motor', '', '', NULL, NULL, 'Jakarta'),
(16, '16', NULL, 'PT. Dipo Angkasa Motor', '', '', NULL, NULL, 'Jakarta'),
(17, '17', NULL, 'PT. Cakrawala Automotif Rabhasa', '', '', NULL, NULL, 'Jakarta'),
(18, '18', NULL, 'PT. Adedanmas ', '', '', NULL, NULL, 'Jakarta'),
(19, '19', NULL, 'PT. Panji Rama Otomotif', '', '', NULL, NULL, 'Jakarta'),
(20, '20', NULL, 'PT. Mercindo Autorama', '', '', NULL, NULL, 'Jakarta'),
(21, '21', NULL, 'PT. Putra Borneo Nusantara Indah', '', '', NULL, NULL, 'Jakarta'),
(22, '22', NULL, 'PT. Alun Indah', '', '', NULL, NULL, 'Jakarta'),
(23, '23', NULL, 'PT. Eurotruk Transindo', '', '', NULL, NULL, 'Jakarta'),
(24, '24', NULL, 'PT. Tri Swardana Utama', '', '', NULL, NULL, 'Jakarta'),
(25, '25', NULL, 'PT. Hartono Raya Motor Semarang Branch', '', '', NULL, NULL, NULL),
(26, '26', NULL, 'PT. Kalimas Arubu Indonesia  Jogjakarta', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_position`
--

CREATE TABLE `t_position` (
  `id` int(11) NOT NULL,
  `id_position` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='table master position';

--
-- Dumping data untuk tabel `t_position`
--

INSERT INTO `t_position` (`id`, `id_position`, `position_name`, `created`) VALUES
(7, 9039, 'President Director', '2016-09-26 03:27:20'),
(8, 223, 'Marketing Director', '2016-09-26 03:27:29'),
(9, 1240, 'Vice President', '2016-09-26 03:27:43'),
(10, 8476, 'General Manager Sales', '2016-09-26 03:27:56'),
(11, 602, 'Sales Manager', '2016-09-26 03:28:09'),
(12, 8600, 'Finance Director ', '2016-09-26 03:28:20'),
(13, 7211, 'General Manager After-Sales', '2016-09-26 03:28:30'),
(14, 5291, 'Secretary ', '2016-09-26 03:28:39'),
(15, 1938, 'Vice General Manager', '2016-09-26 03:28:51'),
(16, 8798, 'After Sales Manager', '2016-09-26 03:29:01'),
(17, 6515, 'Operational Director', '2016-09-26 03:29:12'),
(19, 9048, 'Product Support Director', '2016-09-26 03:30:11'),
(20, 4243, 'Branch Manager/Sales Manager', '2016-09-26 03:30:35'),
(21, 1938, 'Parts Manager', '2016-09-29 06:36:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_set_brochure`
--

CREATE TABLE `t_set_brochure` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `brochure_id` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='tabel setting brosur';

--
-- Dumping data untuk tabel `t_set_brochure`
--

INSERT INTO `t_set_brochure` (`id`, `type`, `brochure_id`, `note`, `file`, `created`) VALUES
(6, 1, 2147483647, 'test', '4247747227FINALS-Class-BrochureCBU.pdf', '2016-09-18 12:32:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_set_brochure_type`
--

CREATE TABLE `t_set_brochure_type` (
  `id` int(11) NOT NULL,
  `type_id` smallint(6) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='type brosur';

--
-- Dumping data untuk tabel `t_set_brochure_type`
--

INSERT INTO `t_set_brochure_type` (`id`, `type_id`, `type`) VALUES
(1, 1, 'Collection'),
(2, 2, 'Genuine Accesories'),
(3, 3, 'Genuine Part'),
(4, 4, 'Pricelist'),
(5, 5, 'Vehicle Info');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_set_dealer`
--

CREATE TABLE `t_set_dealer` (
  `id` int(11) NOT NULL,
  `group_dealer_id` int(11) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `id_users_manager` int(11) NOT NULL,
  `id_users_supervisor` int(11) NOT NULL,
  `id_users_salesman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel setting dealer';

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_set_vehicle`
--

CREATE TABLE `t_set_vehicle` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `price` varchar(25) NOT NULL,
  `year` int(11) NOT NULL,
  `brochure` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1 COMMENT='tabel setting vehicle';

--
-- Dumping data untuk tabel `t_set_vehicle`
--

INSERT INTO `t_set_vehicle` (`id`, `vehicle_id`, `vehicle_type`, `price`, `year`, `brochure`, `images`) VALUES
(13, 500, 'A-Class', '', 0, 'a.pdf', ''),
(14, 501, 'B-Class', '', 0, 'b.pdf', ''),
(15, 1, 'AMG GT-S', '', 0, '1.pdf', ''),
(16, 2, 'Maybach S-Class', '', 0, '2.pdf', ''),
(17, 3, 'CLA 45 AMG', '', 0, '3.pdf', ''),
(18, 4, 'E 63 AMG', '', 0, '4.pdf', ''),
(19, 5, 'CLA Class', '', 0, '5.pdf', ''),
(20, 6, 'GLA Class', '', 0, '6.pdf', ''),
(21, 7, 'C-Class', '', 0, '7.pdf', ''),
(22, 8, 'E-Class', '', 0, '8.pdf', ''),
(23, 9, 'S-Class', '', 0, '9.pdf', ''),
(24, 10, 'ML 400', '', 0, '10.pdf', ''),
(25, 11, 'GL 400 ', '', 0, '11.pdf', ''),
(26, 12, 'CLS 400 AMG DYNAMIC', '', 0, '12.pdf', ''),
(27, 13, 'GLC 250 EXCL.', '', 0, '13.pdf', ''),
(28, 14, 'GLE 400  EXCL.', '', 0, '14.pdf', ''),
(29, 15, 'GLE 400 AMG', '', 0, '15.pdf', ''),
(30, 16, 'GL 400  EXCL.', '', 0, '16.pdf', ''),
(31, 17, 'GLE 250d', '', 0, '17.pdf', ''),
(32, 18, 'E 400 AMG ED. E', '', 0, '18.pdf', ''),
(33, 19, 'ML 400', '', 0, '10.pdf', ''),
(34, 20, 'ML 250 CDI', '', 0, '20.pdf', ''),
(35, 21, 'GLA 200 Urban', '', 0, '21.pdf', ''),
(36, 22, 'C 200 AVA', '', 0, '22.pdf', ''),
(37, 25, 'A-Class', '', 0, '25.pdf', ''),
(38, 26, 'B-CLass', '', 0, '26.pdf', ''),
(39, 27, 'MayBach S-Class', '', 0, '27.pdf', ''),
(40, 28, 'GLE 400 AMG', '', 0, '28.pdf', ''),
(41, 29, 'G-Class', '', 0, '29.pdf', ''),
(42, 30, 'SLK Class', '', 0, '30.pdf', ''),
(43, 31, 'GLC', '', 0, '31.pdf', ''),
(44, 32, 'Proven Exclusivity', '', 0, '32.pdf', ''),
(45, 33, 'SL-Class', '', 0, '33.pdf', ''),
(46, 34, 'Fortwo', '', 0, '34.pdf', ''),
(47, 35, 'CLA 200 Shooting Brake', '', 0, '35.pdf', ''),
(48, 36, 'GLA 45 AMG', '', 0, '36.pdf', ''),
(49, 101, 'A-Class ', '', 0, '0101.pdf', ''),
(50, 201, 'B-Class ', '', 0, '0201.pdf', ''),
(51, 301, 'CLA-Class ', '', 0, '0301.pdf', ''),
(52, 401, 'GLA ', '', 0, '0401.pdf', ''),
(53, 501, 'C-Class CKD ', '', 0, '0501.pdf', ''),
(54, 601, 'E-Class Saloon & Estate', '', 0, '0601.pdf', ''),
(55, 701, 'E-Class Coupe', '', 0, '0701.pdf', ''),
(56, 801, 'S-Class', '', 0, '0801.pdf', ''),
(57, 901, 'Maybach ', '', 0, '0901.pdf', ''),
(58, 1001, 'M-Class ', '', 0, '1001.pdf', ''),
(59, 1101, 'GLE Coupe', '', 0, '1101.pdf', ''),
(60, 1201, 'GL', '', 0, '1201.pdf', ''),
(61, 1301, 'G-Class', '', 0, '1301.pdf', ''),
(62, 1401, 'Mercedes AMG GT', '', 0, '1401.pdf', ''),
(63, 1501, 'CLS', '', 0, '1501.pdf', ''),
(64, 1601, 'SLK-Class', '', 0, '1601.pdf', ''),
(65, 1701, 'GLC', '', 0, '1701.pdf', ''),
(66, 1801, 'Proven Exclusivity', '', 0, '1801.pdf', ''),
(67, 1901, 'SL-Class', '', 0, '1901.pdf', ''),
(68, 2001, 'SMART', '', 0, '2001.pdf', ''),
(69, 201, 'CLA 45 AMG', '', 0, '2101.pdf', ''),
(70, 2201, 'CLA SHOOTING BRAKE', '', 0, '2201.pdf', ''),
(71, 2301, 'GLA 45 AMG', '', 0, '2301.pdf', ''),
(72, 371, 'PE A 250 SPORT', '', 0, '', ''),
(73, 373, 'PE E 200', '', 0, '', ''),
(74, 372, 'PE GL 500', '', 0, '', ''),
(75, 374, 'The Mercedes-Benz Car Col', '', 0, 'collec_mercedes.pdf', ''),
(76, 375, 'The Mercedes-Benz Collect', '', 0, 'collec_car.pdf', ''),
(77, 376, 'The smart Collection', '', 0, 'collec_smart.pdf', ''),
(78, 377, 'A-Class Accessories', '', 0, 'genuine_a-class.pdf', ''),
(79, 378, 'B-Class Accessories', '', 0, 'genuine_b-class.pdf', ''),
(80, 379, 'C-Class Accessories', '', 0, 'genuine_c-class.pdf', ''),
(81, 380, 'CLA Accessories', '', 0, 'genuine_cla.pdf', ''),
(82, 381, 'CLS Accessories', '', 0, 'genuine_cls.pdf', ''),
(83, 382, 'E-Class Accessories', '', 0, 'genuine_e-class.pdf', ''),
(84, 383, 'GLA Accessories', '', 0, 'genuine_gla.pdf', ''),
(85, 384, 'GLC Accessories', '', 0, 'genuine_glc.pdf', ''),
(86, 385, 'GLE and M-Class Accessori', '', 0, 'genuine_gle_m.pdf', ''),
(87, 386, 'GLE Coupe Accessories', '', 0, 'genuine_gle_coupe.pdf', ''),
(88, 387, 'Sport Accessories', '', 0, 'genuine_sport.pdf', ''),
(89, 388, 'S-Class Coupe Accessories', '', 0, 'genuine_s-class-coupe.pdf', ''),
(90, 389, 'S-Class Accessories', '', 0, 'genuine_s-class.pdf', ''),
(91, 390, 'SL Accessories', '', 0, 'genuine_sl.pdf', ''),
(92, 391, 'Citan Accessories', '', 0, 'genuine_vcitan.pdf', ''),
(93, 392, 'Vito Accessories', '', 0, 'genuine_vvito.pdf', ''),
(94, 393, 'V-Class Accessories', '', 0, 'genuine_v-class.pdf', ''),
(95, 394, 'Genuine Parts', '', 0, 'part_broc.pdf', ''),
(96, 395, 'Pricelist Agustus 2016', '', 0, 'Rev Pricelist Mercedes-Benz_AUGUST GIIAS 2016.pdf', ''),
(97, 396, 'FA MB CLA 200 AMG', '', 0, 'FA MB CLA 200 AMG - Flyer 210x297mm - Digital Version.pdf', ''),
(98, 397, 'Fa MB CLA 200', '', 0, 'Fa MB CLA 200 - Flyer 210x297mm - Digital Version.pdf', ''),
(99, 398, 'FA MB C 250 AMG', '', 0, 'FA MB C 250 AMG - Flyer 210x297mm- Digital Version.pdf', ''),
(100, 107, 'B-Class', '', 0, 'bclass.pdf', ''),
(101, 108, 'CLS', '', 0, 'cls.pdf', ''),
(102, 109, 'E-Class Coupe', '', 0, 'eclasscoupe.pdf', ''),
(103, 111, 'G-Class', '', 0, 'gclass.pdf', ''),
(104, 112, 'GL', '', 0, 'gl.pdf', ''),
(105, 113, 'GLA', '', 0, 'Fa Mercedes Brochure GLA-Class 570x190mm150716-Tablet.pdf', ''),
(106, 114, 'V-Class', '', 0, 'vclass.pdf', ''),
(107, 115, 'A-Class FL', '', 0, 'aclassfl.pdf', ''),
(108, 116, 'GLC (CBU)', '', 0, 'FA MB GLC-Brochure_570x190mm 130815-Tablet.pdf', ''),
(109, 117, 'S-Class', '', 0, 'Fa MB S-Class-Brochure 570x190mm-310715-Tablet.pdf', ''),
(110, 118, 'Maybach', '', 0, 'maybach.pdf', ''),
(111, 119, 'M-Class', '', 0, 'mclass.pdf', ''),
(112, 120, 'AMG GT', '', 0, 'amggt.pdf', ''),
(113, 121, 'GLE', '', 0, 'FA MB GLE Brochure 570x190mm-Tablet.pdf', ''),
(114, 122, 'E-Class Saloon & Estate R', '', 0, 'eclasssaloonrev.pdf', ''),
(115, 123, 'C-Class', '', 0, 'cclass.pdf', ''),
(116, 124, 'CLA 45 AMG', '', 0, 'cla45amg.pdf', ''),
(117, 125, 'CLA-Class', '', 0, 'claclass.pdf', ''),
(118, 126, 'GLA 45 AMG', '', 0, 'gla45amg.pdf', ''),
(119, 399, 'SLC', '', 0, 'FA MB SLC Brochure 570x190mm 150706-Tablet.pdf', ''),
(120, 400, 'NGCC', '', 0, 'FA MB NGCC_Brochure 570x190mm150716-Tablet.pdf', ''),
(121, 401, 'A 45 AMG', '', 0, 'FA Mercedes A 45 AMG-Flyer 210x297mm_Web.pdf', ''),
(122, 403, 'CLA 200FL', '', 0, 'FA Flyer MB CLA200FL  210x297mm-Digital.pdf', ''),
(123, 404, 'CLA 200SB', '', 0, 'Fa Flyer MB CLA200SB  210x297mm-Digital.pdf', ''),
(124, 405, 'CLA 200AMG', '', 0, 'Fa Flyer MBCLA200AMG  210x297mm-Digital.pdf', ''),
(125, 406, 'C 63 AMG', '', 0, 'Fa FlyerA4_MB  C 63 AMG  210x297mm-Digital.pdf', ''),
(126, 407, 'E-Class (W213)', '', 0, 'FA MB E-Class(W213)_Brochure 570x190mm_DIGITAL.pdf', ''),
(127, 408, 'AMG GLA 45', '', 0, 'FA Mercedes GLA 45 AMG-Flyer 210x297mm_DIGITALTABLET.pdf', ''),
(128, 409, 'AMG C 63', '', 0, 'Fa FlyerA4_MB  C 63 AMG  210x297mm-Digital.pdf', ''),
(129, 410, 'GLC (CKD)', '', 0, 'FA MB GLC - Brochure - Tablet (100516).pdf', ''),
(130, 411, 'GLE Coupe', '', 0, 'MB GLE Coupe Flyer - 211015.pdf', ''),
(131, 412, 'Maybach S-Class', '', 0, 'FA MB S600 Maybach Brochure 570x190mm 150716-Tablet.pdf', ''),
(132, 413, 'Proven Exclusivity', '', 0, 'FA Proven Exclusivity - Tablet Version.pdf', ''),
(133, 414, 'SUV', '', 0, 'FA Mercedes SUV-Brochure 570x190mm-Tablet.pdf', ''),
(134, 415, 'C 300 AMG Coupe', '', 0, 'Fa MB C 300 AMG-Flyer Digital_250716.pdf', ''),
(135, 416, 'C Estate', '', 0, 'FA Mercedes C Estate-Flyer Digital_250716.pdf', ''),
(136, 417, 'MB Genuine oil', '', 0, '2016_Genuine_oil_Brochure_A5_B2C_EN_Screen.pdf', ''),
(137, 418, 'MB Genuine Accessories', '', 0, 'Display GIIAS MBA.pdf', ''),
(138, 419, 'MB Collection1', '', 0, 'MB Collection and Accessories Price List.pdf', ''),
(139, 420, 'MB Collection2', '', 0, 'MB Collection and Accessories.pdf', '');

--
-- Trigger `t_set_vehicle`
--
DELIMITER $$
CREATE TRIGGER `trig_set_vehicle_detil` AFTER DELETE ON `t_set_vehicle`
 FOR EACH ROW DELETE FROM t_set_vehicle_detil WHERE vehicle_id=OLD.vehicle_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_set_vehicle_colour`
--

CREATE TABLE `t_set_vehicle_colour` (
  `id` int(11) NOT NULL,
  `colour_id` int(11) NOT NULL,
  `colour_name` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='tabel master warna mobil';

--
-- Dumping data untuk tabel `t_set_vehicle_colour`
--

INSERT INTO `t_set_vehicle_colour` (`id`, `colour_id`, `colour_name`, `created`) VALUES
(1, 625377, 'Red', '2016-09-17 23:24:44'),
(2, 637648, 'Silver', '2016-09-17 23:25:02'),
(3, 639475, 'white', '2016-09-17 23:25:18'),
(4, 727728, 'black', '2016-09-18 02:47:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_set_vehicle_detil`
--

CREATE TABLE `t_set_vehicle_detil` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `vehicle_colour_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel detil untuk warna mobil';

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
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
  `is_mbina` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1 COMMENT='table users';

--
-- Dumping data untuk tabel `t_users`
--

INSERT INTO `t_users` (`id`, `id_users`, `id_users_role`, `first_name`, `last_name`, `name`, `group_dealer_id`, `outlet_dealer_id`, `id_department`, `email`, `mobile_phone_1`, `mobile_phone_2`, `username`, `password`, `photo`, `id_position`, `is_mbina`) VALUES
(15, 12, 1, 'Administrator', 'Mbina', 'Admin Mbina', 1, 3, '1', 'ismail.proyek@gmail.com', '0817212162', '0811336668', 'admin', 'admin', '13_Sep_2016__images.jpeg', 9039, 1),
(20, 0, 2, 'dewi', 'maulida', '', NULL, 1, NULL, 'ahmad_shoehib@yahoo.com', '0292929383838', '08292929', 'maulida', 'maulida', '', 9039, 0),
(21, 0, 4, 'bintang1', 'bintang1', '', NULL, 11, NULL, 'test@test.com', '1111111111111', '', 'bintang1', 'bintang1', '', 9039, 0),
(22, 0, 4, 'bintang2', 'bintang2', '', NULL, 11, NULL, 'bintang2@bintang2.com', '111111111111', NULL, 'bintang2', 'bintang2', '', NULL, 0),
(23, 0, 4, 'bintang3', 'bintang2', '', NULL, 11, NULL, '', '', NULL, 'bintang3', 'bintang3', '', NULL, 0),
(24, 0, 4, 'bintang4', 'bintang4', '', NULL, 12, NULL, 'bintang4@bintang4.com', '0817212162', '08292929', 'bintang4', 'bintang4', '', 9039, 0),
(25, 0, 4, 'mass1', 'mass1', '', NULL, 13, NULL, 'mass1@mass1.com', '0817212162', '', 'mass1', 'mass1', '', 9039, 0),
(26, 0, 4, 'mass2', 'mass2', '', NULL, 13, NULL, 'ahmad_shoehib@yahoo.com', '0817212162', '', 'mass2', 'mass2', '', 1240, 0),
(27, 0, 4, 'mass3', 'mass3', '', NULL, 13, NULL, '', '', NULL, 'mass3', 'mass3', '', NULL, 0),
(28, 0, 4, 'mass4', 'mass4', '', NULL, 13, NULL, '', '', NULL, 'mass4', 'mass4', '', NULL, 0),
(29, 0, 4, 'mass5', 'mass5', '', NULL, 13, NULL, '', '', NULL, 'mass5', 'mass5', '', NULL, 0),
(30, 0, 4, 'mass6', 'mass6', '', NULL, 13, NULL, '', '', NULL, 'mass6', 'mass6', '', NULL, 0),
(31, 0, 4, 'dipo1', 'dipo1', '', NULL, 16, NULL, 'dipo1@dipo1.com', '0817212162', '08292929', 'dipo1', 'dipo1', '', 9039, 0),
(32, 0, 4, 'dipo2', 'dipo2', '', NULL, 16, NULL, 'dipo1@dipo1.com', '', NULL, 'dipo2', 'dipo2', '', NULL, 0),
(33, 0, 4, 'dipo3', 'dipo3', '', NULL, 16, NULL, 'dipo@dipo1.com', '', NULL, 'dipo3', 'dipo3', '', NULL, 0),
(34, 0, 4, 'dipo4', 'dipo4', '', NULL, 16, NULL, 'dipo@dipo.com', '', NULL, 'dipo4', 'dipo4', '', NULL, 0),
(35, 0, 4, 'dmm1', 'dmm1', '', NULL, 14, NULL, 'ahmad_shoehib@yahoo.com', '0817212162', '', 'dmm1', 'dmm1', '', 9039, 0),
(36, 0, 4, 'dmm2', 'dmm2', '', NULL, 0, NULL, '', '', NULL, 'dmm2', 'dmm2', '', NULL, 0),
(37, 0, 4, 'dmm3', 'dmm3', '', NULL, 0, NULL, '', '', NULL, 'dmm3', 'dmm3', '', NULL, 0),
(38, 0, 4, 'dmm4', 'dmm4', '', NULL, 0, NULL, '', '', NULL, 'dmm4', 'dmm4', '', NULL, 0),
(39, 0, 4, 'dmm5', 'dmm5', '', NULL, 0, NULL, '', '', NULL, 'dmm5', 'dmm5', '', NULL, 0),
(40, 0, 4, 'hrm1', 'hrm1', '', NULL, 15, NULL, 'ismail.proyek@gmail.com', '0817212162', '', 'hrm1', 'hrm1', '', 9039, 0),
(41, 0, 4, 'hrm2', 'hrm2', '', NULL, 15, NULL, '', '', NULL, 'hrm2', 'hrm2', '', NULL, 0),
(42, 0, 4, 'hrm3', 'hrm3', '', NULL, 15, NULL, '', '', NULL, 'hrm3', 'hrm3', '', NULL, 0),
(43, 0, 4, 'hrm4', 'hrm4', '', NULL, 15, NULL, '', '', NULL, 'hrm4', 'hrm4', '', NULL, 0),
(44, 0, 4, 'hrm5', 'hrm5', '', NULL, 15, NULL, '', '', NULL, 'hrm5', 'hrm5', '', NULL, 0),
(45, 0, 0, 'first_name', 'last_name', '', NULL, 0, NULL, '', '', NULL, 'username', 'password', '', 0, 0),
(46, 0, 4, 'mar1', 'mar1', '', NULL, 20, NULL, '', '', NULL, 'mar1', 'mar1', '', 9039, 0),
(47, 0, 4, 'mar2', 'mar2', '', NULL, 20, NULL, '', '', NULL, 'mar2', 'mar2', '', 9039, 0),
(48, 0, 4, 'mar3', 'mar3', '', NULL, 20, NULL, '', '', NULL, 'mar3', 'mar3', '', 9039, 0),
(49, 0, 4, 'mar4', 'mar4', '', NULL, 20, NULL, '', '', NULL, 'mar4', 'mar4', '', 9039, 0),
(50, 0, 4, 'mar5', 'mar5', '', NULL, 20, NULL, '', '', NULL, 'mar5', 'mar5', '', 9039, 0),
(51, 0, 4, 'mar6', 'mar6', '', NULL, 20, NULL, '', '', NULL, 'mar6', 'mar6', '', 9039, 0),
(52, 0, 4, '', 'pro1', '', NULL, 19, NULL, '', '', NULL, 'pro1', 'pro1', '', 9039, 0),
(53, 0, 4, '', 'pro2', '', NULL, 19, NULL, '', '', NULL, 'pro2', 'pro2', '', 9039, 0),
(54, 0, 4, '', 'pro3', '', NULL, 19, NULL, '', '', NULL, 'pro3', 'pro3', '', 9039, 0),
(55, 0, 4, '', 'pro4', '', NULL, 19, NULL, '', '', NULL, 'pro4', 'pro4', '', 9039, 0),
(56, 0, 4, '', 'ade1', '', NULL, 18, NULL, '', '', NULL, 'ade1', 'ade1', '', 9039, 0),
(57, 0, 4, '', 'ade2', '', NULL, 18, NULL, '', '', NULL, 'ade2', 'ade2', '', 9039, 0),
(58, 0, 4, '', 'ade3', '', NULL, 18, NULL, '', '', NULL, 'ade3', 'ade3', '', 9039, 0),
(59, 0, 4, '', 'ade4', '', NULL, 18, NULL, '', '', NULL, 'ade4', 'ade4', '', 9039, 0),
(60, 0, 4, '', 'ade5', '', NULL, 18, NULL, '', '', NULL, 'ade5', 'ade5', '', 9039, 0),
(61, 0, 4, '', 'ade6', '', NULL, 18, NULL, '', '', NULL, 'ade6', 'ade6', '', 9039, 0),
(62, 0, 4, '', 'ade7', '', NULL, 18, NULL, '', '', NULL, 'ade7', 'ade7', '', 9039, 0),
(63, 0, 4, '', 'car1', '', NULL, 17, NULL, '', '', NULL, 'car1', 'car1', '', 9039, 0),
(64, 0, 4, '', 'car2', '', NULL, 17, NULL, '', '', NULL, 'car2', 'car2', '', 9039, 0),
(65, 0, 4, '', 'car3', '', NULL, 17, NULL, '', '', NULL, 'car3', 'car3', '', 9039, 0),
(66, 0, 4, '', 'car4', '', NULL, 17, NULL, '', '', NULL, 'car4', 'car4', '', 9039, 0),
(67, 0, 4, '', 'car5', '', NULL, 17, NULL, '', '', NULL, 'car5', 'car5', '', 9039, 0),
(68, 0, 4, '', 'pbn1', '', NULL, 21, NULL, '', '', NULL, 'pbn1', 'pbn1', '', 9039, 0),
(69, 0, 4, '', 'pbn2', '', NULL, 21, NULL, '', '', NULL, 'pbn2', 'pbn2', '', 9039, 0),
(70, 0, 4, '', 'pbn3', '', NULL, 21, NULL, '', '', NULL, 'pbn3', 'pbn3', '', 9039, 0),
(71, 0, 4, '', 'ai1', '', NULL, 22, NULL, '', '', NULL, 'ai1', 'ai1', '', 9030, 0),
(72, 0, 4, '', 'ai2', '', NULL, 22, NULL, '', '', NULL, 'ai2', 'ai2', '', 9030, 0),
(73, 0, 4, '', 'ai3', '', NULL, 22, NULL, '', '', NULL, 'ai3', 'ai3', '', 9030, 0),
(74, 0, 4, '', 'et1', '', NULL, 23, NULL, '', '', NULL, 'et1', 'et1', '', 9030, 0),
(75, 0, 4, '', 'et2', '', NULL, 23, NULL, '', '', NULL, 'et2', 'et2', '', 9030, 0),
(76, 0, 4, '', 'et3', '', NULL, 23, NULL, '', '', NULL, 'et3', 'et3', '', 9030, 0),
(77, 0, 4, '', 'tsu1', '', NULL, 24, NULL, '', '', NULL, 'tsu1', 'tsu1', '', 9030, 0),
(78, 0, 4, '', 'tsu2', '', NULL, 24, NULL, '', '', NULL, 'tsu2', 'tsu2', '', 9030, 0),
(79, 0, 4, '', 'tsu3', '', NULL, 24, NULL, '', '', NULL, 'tsu3', 'tsu3', '', 9030, 0),
(80, 0, 4, '', 'cp1', '', NULL, 10, NULL, '', '', NULL, 'cp1', 'cp1', '', 9030, 0),
(81, 0, 4, '', 'cp2', '', NULL, 10, NULL, '', '', NULL, 'cp2', 'cp2', '', 9030, 0),
(82, 0, 4, '', 'harsm1', '', NULL, 25, NULL, '', '', NULL, 'harsm1', 'harsm1', '', 9030, 0),
(83, 0, 4, '', 'harsm2', '', NULL, 25, NULL, '', '', NULL, 'harsm2', 'harsm2', '', 9030, 0),
(84, 0, 0, '', '', '', NULL, 0, NULL, '', '', NULL, '', '', '', 0, 0),
(85, 0, 4, '', 'kaij1', '', NULL, 26, NULL, '', '', NULL, 'kaij1', 'kaij1', '', 9030, 0),
(86, 0, 4, '', 'kaij2', '', NULL, 26, NULL, '', '', NULL, 'kaij2', 'kaij2', '', 9030, 0),
(87, 0, 0, '', '', '', NULL, 0, NULL, '', '', NULL, '', '', '', 0, 0),
(88, 0, 4, '', 'kais1', '', NULL, 9, NULL, '', '', NULL, 'kais1', 'kais1', '', 9030, 0),
(89, 0, 4, '', 'kais2', '', NULL, 9, NULL, '', '', NULL, 'kais2', 'kais2', '', 9030, 0),
(90, 0, 0, '', '', '', NULL, 0, NULL, '', '', NULL, '', '', '', 0, 0),
(91, 0, 4, '', 'hrmsby1', '', NULL, 5, NULL, '', '', NULL, 'hrmsby1', 'hrmsby1', '', 9030, 0),
(92, 0, 4, '', 'hrmsby2', '', NULL, 5, NULL, '', '', NULL, 'hrmsby2', 'hrmsby2', '', 9030, 0),
(93, 0, 4, '', 'hrmsby3', '', NULL, 5, NULL, '', '', NULL, 'hrmsby3', 'hrmsby3', '', 9030, 0),
(94, 0, 4, '', 'hrmsby4', '', NULL, 5, NULL, '', '', NULL, 'hrmsby4', 'hrmsby4', '', 9030, 0),
(95, 0, 4, '', 'hrmsby5', '', NULL, 5, NULL, '', '', NULL, 'hrmsby5', 'hrmsby5', '', 9030, 0),
(96, 0, 0, '', '', '', NULL, 0, NULL, '', '', NULL, '', '', '', 0, 0),
(97, 0, 4, '', 'ksm1', '', NULL, 6, NULL, '', '', NULL, 'ksm1', 'ksm1', '', 9030, 0),
(98, 0, 4, '', 'ksm2', '', NULL, 6, NULL, '', '', NULL, 'ksm2', 'ksm2', '', 9030, 0),
(99, 0, 4, '', 'ksm3', '', NULL, 6, NULL, '', '', NULL, 'ksm3', 'ksm3', '', 9030, 0),
(100, 0, 4, '', 'ksm4', '', NULL, 6, NULL, '', '', NULL, 'ksm4', 'ksm4', '', 9030, 0),
(101, 0, 0, '', '', '', NULL, 0, NULL, '', '', NULL, '', '', '', 0, 0),
(102, 0, 4, '', 'hrmdp1', '', NULL, 4, NULL, '', '', NULL, 'hrmdp1', 'hrmdp1', '', 9030, 0),
(103, 0, 4, '', 'hrmdp2', '', NULL, 4, NULL, '', '', NULL, 'hrmdp2', 'hrmdp2', '', 9030, 0),
(104, 0, 0, '', '', '', NULL, 0, NULL, '', '', NULL, '', '', '', 0, 0),
(105, 0, 4, '', 'bk1', '', NULL, 2, NULL, '', '', NULL, 'bk1', 'bk1', '', 9030, 0),
(106, 0, 4, '', 'bk2', '', NULL, 2, NULL, '', '', NULL, 'bk2', 'bk2', '', 9030, 0),
(107, 0, 4, '', 'bk3', '', NULL, 2, NULL, '', '', NULL, 'bk3', 'bk3', '', 9030, 0),
(108, 0, 0, '', '', '', NULL, 0, NULL, '', '', NULL, '', '', '', 0, 0),
(109, 0, 4, '', 'bb1', '', NULL, 3, NULL, '', '', NULL, 'bb1', 'bb1', '', 9030, 0),
(110, 0, 4, '', 'bb2', '', NULL, 3, NULL, '', '', NULL, 'bb2', 'bb2', '', 9030, 0),
(111, 0, 4, '', 'bb3', '', NULL, 3, NULL, '', '', NULL, 'bb3', 'bb3', '', 9030, 0),
(112, 0, 4, '', 'bb4', '', NULL, 3, NULL, '', '', NULL, 'bb4', 'bb4', '', 9030, 0),
(113, 0, 0, '', '', '', NULL, 0, NULL, '', '', NULL, '', '', '', 0, 0),
(114, 0, 4, '', 'gkm1', '', NULL, 1, NULL, '', '', NULL, 'gkm1', 'gkm1', '', 9030, 0),
(115, 0, 4, '', 'gkm2', '', NULL, 1, NULL, '', '', NULL, 'gkm2', 'gkm2', '', 9030, 0),
(116, 0, 4, '', 'gkm3', '', NULL, 1, NULL, '', '', NULL, 'gkm3', 'gkm3', '', 9030, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users_role`
--

CREATE TABLE `t_users_role` (
  `id` int(11) NOT NULL,
  `id_users_role` smallint(6) NOT NULL COMMENT 'kode role',
  `users_role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='tbl role user';

--
-- Dumping data untuk tabel `t_users_role`
--

INSERT INTO `t_users_role` (`id`, `id_users_role`, `users_role`) VALUES
(4, 1, 'Administrator'),
(6, 2, 'Marketing'),
(7, 3, 'Manager'),
(8, 4, 'Salesman'),
(9, 5, 'Supervisor'),
(10, 6, 'General Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users_role_menu`
--

CREATE TABLE `t_users_role_menu` (
  `id` int(11) NOT NULL,
  `id_users_role` int(11) NOT NULL,
  `code_menu` varchar(20) NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=latin1 COMMENT='tabel hak akses menu per role';

--
-- Dumping data untuk tabel `t_users_role_menu`
--

INSERT INTO `t_users_role_menu` (`id`, `id_users_role`, `code_menu`, `status`) VALUES
(132, 1, 'mst_usr', 1),
(133, 1, 'dsb_cpl', 1),
(136, 1, 'mst_p', 1),
(137, 1, 'mst_dpt', 1),
(139, 1, 'dsb_ld', 1),
(148, 2, 'dsb_cpl', 1),
(151, 3, 'dsb_cpl', 1),
(155, 2, 'mst_dpt', 1),
(156, 2, 'mst_gd', 1),
(167, 1, 'dsb_lt', 1),
(168, 6, 'dsb_lt', 1),
(172, 1, 'mst_out', 1),
(173, 1, 'mst_ec', 1),
(174, 1, 'mst_usr_mb', 1),
(175, 1, 'mst_rol', 1),
(176, 1, 'sett_rol', 1),
(177, 1, 'sett_gd', 1),
(178, 1, 'sett_bro', 1),
(179, 1, 'sett_veh', 1),
(180, 1, 'eve_pre', 1),
(181, 1, 'eve_pos', 1),
(182, 1, 'eve_rep', 1),
(183, 1, 'mar_sal', 1),
(185, 1, 'mar_q1', 1),
(186, 1, 'mar_q2', 1),
(187, 1, 'mar_q3', 1),
(188, 1, 'mar_q4', 1),
(189, 1, 'dea_lea', 1),
(190, 1, 'dea_cust', 1),
(191, 1, 'dea_send', 1),
(192, 1, 'new_mail', 1),
(193, 1, 'new_sms', 1),
(194, 2, 'dsb_ld', 1),
(195, 2, 'dsb_lt', 1),
(196, 3, 'dsb_lt', 1),
(197, 3, 'dsb_ld', 1),
(198, 4, 'dsb_lt', 1),
(199, 4, 'dsb_ld', 1),
(200, 4, 'dsb_cpl', 1),
(201, 5, 'dsb_lt', 1),
(202, 5, 'dsb_ld', 1),
(203, 5, 'dsb_cpl', 1),
(204, 6, 'dsb_ld', 1),
(205, 6, 'dsb_cpl', 1),
(206, 2, 'eve_pre', 1),
(207, 2, 'eve_pos', 1),
(208, 2, 'eve_rep', 1),
(209, 3, 'eve_pre', 1),
(210, 3, 'eve_pos', 1),
(211, 3, 'eve_rep', 1),
(212, 4, 'eve_pre', 1),
(213, 4, 'eve_pos', 1),
(214, 4, 'eve_rep', 1),
(215, 5, 'eve_pre', 1),
(216, 5, 'eve_pos', 1),
(217, 5, 'eve_rep', 1),
(218, 6, 'eve_pre', 1),
(219, 6, 'eve_pos', 1),
(220, 6, 'eve_rep', 1),
(221, 2, 'mar_sal', 1),
(222, 2, 'mar_q1', 1),
(223, 2, 'mar_q2', 1),
(224, 2, 'mar_q3', 1),
(225, 2, 'mar_q4', 1),
(226, 3, 'mar_sal', 1),
(227, 3, 'mar_q1', 1),
(228, 3, 'mar_q2', 1),
(229, 3, 'mar_q3', 1),
(230, 3, 'mar_q4', 1),
(231, 4, 'mar_sal', 1),
(232, 4, 'mar_q1', 1),
(233, 4, 'mar_q2', 1),
(234, 4, 'mar_q3', 1),
(235, 4, 'mar_q4', 1),
(236, 5, 'mar_sal', 1),
(237, 5, 'mar_q1', 1),
(238, 5, 'mar_q2', 1),
(239, 5, 'mar_q3', 1),
(240, 5, 'mar_q4', 1),
(241, 6, 'mar_sal', 1),
(242, 6, 'mar_q1', 1),
(243, 6, 'mar_q2', 1),
(244, 6, 'mar_q3', 1),
(245, 6, 'mar_q4', 1),
(246, 2, 'dea_lea', 1),
(247, 2, 'dea_cust', 1),
(248, 2, 'dea_send', 1),
(249, 2, 'new_mail', 1),
(250, 2, 'new_sms', 1),
(251, 3, 'dea_lea', 1),
(252, 3, 'dea_cust', 1),
(253, 3, 'dea_send', 1),
(254, 3, 'new_mail', 1),
(255, 3, 'new_sms', 1),
(256, 4, 'dea_lea', 1),
(257, 4, 'dea_cust', 1),
(258, 4, 'dea_send', 1),
(259, 4, 'new_mail', 1),
(260, 4, 'new_sms', 1),
(261, 5, 'dea_lea', 1),
(262, 5, 'dea_cust', 1),
(263, 5, 'dea_send', 1),
(264, 5, 'new_mail', 1),
(265, 5, 'new_sms', 1),
(266, 6, 'dea_lea', 1),
(267, 6, 'dea_cust', 1),
(268, 6, 'dea_send', 1),
(269, 6, 'new_mail', 1),
(270, 6, 'new_sms', 1),
(271, 2, 'mst_usr', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_department`
--
ALTER TABLE `t_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_brochure`
--
ALTER TABLE `t_event_brochure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_brochure_after_sales`
--
ALTER TABLE `t_event_brochure_after_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_category`
--
ALTER TABLE `t_event_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_display_car`
--
ALTER TABLE `t_event_display_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_participant`
--
ALTER TABLE `t_event_participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_pre`
--
ALTER TABLE `t_event_pre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_pre_list`
--
ALTER TABLE `t_event_pre_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_proposed`
--
ALTER TABLE `t_event_proposed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_test_drive_car`
--
ALTER TABLE `t_event_test_drive_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_group_dealer`
--
ALTER TABLE `t_group_dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_leads_total`
--
ALTER TABLE `t_leads_total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_m_activity`
--
ALTER TABLE `t_m_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_m_city`
--
ALTER TABLE `t_m_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_m_month`
--
ALTER TABLE `t_m_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_m_year`
--
ALTER TABLE `t_m_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_outlet_dealer`
--
ALTER TABLE `t_outlet_dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_position`
--
ALTER TABLE `t_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_set_brochure`
--
ALTER TABLE `t_set_brochure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_set_brochure_type`
--
ALTER TABLE `t_set_brochure_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_set_dealer`
--
ALTER TABLE `t_set_dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_set_vehicle`
--
ALTER TABLE `t_set_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_set_vehicle_colour`
--
ALTER TABLE `t_set_vehicle_colour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_set_vehicle_detil`
--
ALTER TABLE `t_set_vehicle_detil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_users_role`
--
ALTER TABLE `t_users_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_users_role_menu`
--
ALTER TABLE `t_users_role_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_department`
--
ALTER TABLE `t_department`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_event_brochure`
--
ALTER TABLE `t_event_brochure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_event_brochure_after_sales`
--
ALTER TABLE `t_event_brochure_after_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_event_category`
--
ALTER TABLE `t_event_category`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_event_display_car`
--
ALTER TABLE `t_event_display_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_event_participant`
--
ALTER TABLE `t_event_participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_event_pre`
--
ALTER TABLE `t_event_pre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `t_event_pre_list`
--
ALTER TABLE `t_event_pre_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `t_event_proposed`
--
ALTER TABLE `t_event_proposed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_event_test_drive_car`
--
ALTER TABLE `t_event_test_drive_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_group_dealer`
--
ALTER TABLE `t_group_dealer`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_leads_total`
--
ALTER TABLE `t_leads_total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `t_m_activity`
--
ALTER TABLE `t_m_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_m_city`
--
ALTER TABLE `t_m_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_m_month`
--
ALTER TABLE `t_m_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_m_year`
--
ALTER TABLE `t_m_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_outlet_dealer`
--
ALTER TABLE `t_outlet_dealer`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `t_position`
--
ALTER TABLE `t_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `t_set_brochure`
--
ALTER TABLE `t_set_brochure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_set_brochure_type`
--
ALTER TABLE `t_set_brochure_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_set_dealer`
--
ALTER TABLE `t_set_dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_set_vehicle`
--
ALTER TABLE `t_set_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `t_set_vehicle_colour`
--
ALTER TABLE `t_set_vehicle_colour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_set_vehicle_detil`
--
ALTER TABLE `t_set_vehicle_detil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `t_users_role`
--
ALTER TABLE `t_users_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_users_role_menu`
--
ALTER TABLE `t_users_role_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=272;