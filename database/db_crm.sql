-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30 Agu 2016 pada 08.49
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel departemen';

--
-- Dumping data untuk tabel `t_department`
--

INSERT INTO `t_department` (`id`, `id_department`, `department_name`) VALUES
(1, '1', 'MARKETING'),
(5, '9', 'joko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_event_category`
--

CREATE TABLE `t_event_category` (
  `id` smallint(6) NOT NULL,
  `event_category_id` int(11) NOT NULL,
  `event_category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel kategori event';

--
-- Dumping data untuk tabel `t_event_category`
--

INSERT INTO `t_event_category` (`id`, `event_category_id`, `event_category_name`) VALUES
(1, 111, 'GENERAL EVENT'),
(2, 112, 'SPONSORSHIP'),
(3, 113, 'DIGITAL ADS'),
(4, 114, 'SHOWROOM');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel group dealer';

--
-- Dumping data untuk tabel `t_group_dealer`
--

INSERT INTO `t_group_dealer` (`id`, `group_dealer_id`, `group_dealer`, `address`, `contact`, `website`, `email`) VALUES
(1, 123, 'PT. ADEDANMAS', 'Jl. Tb Simatupang', '021-72827278', 'http://info-adedanmas.com/', 'info@http://info-adedanmas.com/'),
(2, 233, 'PT. MERCINDO PRATAMA', 'Jl. Siliwangi Raya Pamulang', '021-22888', 'www.detik.com', 'info@detik.com'),
(4, 23, 'PT. Ciwangi Berlian Motor', 'boulvard bsd city', 'joko', 'www.joko.com', 'info@joko.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_outlet_dealer`
--

CREATE TABLE `t_outlet_dealer` (
  `id` smallint(6) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `group_dealer_id` int(11) NOT NULL,
  `outlet` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table outlet';

--
-- Dumping data untuk tabel `t_outlet_dealer`
--

INSERT INTO `t_outlet_dealer` (`id`, `outlet_id`, `group_dealer_id`, `outlet`, `address`, `contact`) VALUES
(1, 233, 233, 'MERCINDO 1', 'JL SILIWANGI RAYA PAMULANG', '3232323'),
(2, 1111, 123, 'ADEDANMAS OUTLET I', 'ADEDANMAS OUTLET I', '0928282'),
(3, 234, 123, 'ADEDANMAS10', 'CAWANG', '02922'),
(4, 212, 23, 'CIWANGI JAKSEL', 'JAKSEL', '928282'),
(5, 1212, 23, 'CIWANGI BSD', 'BSD', '029222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_salesman`
--

CREATE TABLE `t_salesman` (
  `id` int(11) NOT NULL,
  `salesman_id` int(11) NOT NULL,
  `salesman_name` varchar(150) NOT NULL,
  `salesman_group_dealer_id` int(11) NOT NULL,
  `salesman_outlet_id` int(11) NOT NULL,
  `salesman_email` varchar(50) NOT NULL,
  `salesman_hp_1` varchar(15) NOT NULL,
  `salesman_hp_2` varchar(15) NOT NULL,
  `salesman_passwd` varchar(100) NOT NULL,
  `salesman_photo` varchar(100) NOT NULL,
  `salesman_address` varchar(300) NOT NULL,
  `salesman_gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel salesman';

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_users_role` smallint(6) NOT NULL,
  `name` varchar(150) NOT NULL,
  `group_dealer_id` int(11) NOT NULL,
  `outlet_dealer_id` int(11) NOT NULL,
  `id_department` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_phone_1` varchar(15) NOT NULL,
  `mobile_phone_2` varchar(15) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table users';

--
-- Dumping data untuk tabel `t_users`
--

INSERT INTO `t_users` (`id`, `id_users`, `id_users_role`, `name`, `group_dealer_id`, `outlet_dealer_id`, `id_department`, `email`, `mobile_phone_1`, `mobile_phone_2`, `password`, `photo`) VALUES
(11, 11, 4, 'AHMAD ISMAIL', 123, 234, '1', 'ahmad_shoehib@yahoo.com', '0817212162', '0811727278', '12345678', ''),
(12, 12345678, 3, 'FITRIA YUNI P', 233, 233, '1', 'ismahmad@gmail.com', '0817212162', '08292929', '12345678', ''),
(13, 12345, 5, 'YAHYA ZAINI', 233, 233, '1', 'ismail.proyek@gmail.com', '1111111111111', '08292929111111', '12345678', ''),
(14, 123, 4, 'YUDITIYA', 23, 212, '1', 'ismail.proyek@gmail.com', '0817212162', '08292929', '87654321', '27_Aug_2016_123_timeline CRM_Mbina.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users_role`
--

CREATE TABLE `t_users_role` (
  `id` int(11) NOT NULL,
  `id_users_role` smallint(6) NOT NULL COMMENT 'kode role',
  `users_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tbl role user';

--
-- Dumping data untuk tabel `t_users_role`
--

INSERT INTO `t_users_role` (`id`, `id_users_role`, `users_role`) VALUES
(4, 1, 'ADMINISTRATOR'),
(6, 2, 'MARKETING'),
(7, 3, 'MANAGER'),
(8, 4, 'SALESMAN'),
(9, 5, 'SUPERVISOR'),
(10, 6, 'GERENAL MANAGER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_department`
--
ALTER TABLE `t_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_event_category`
--
ALTER TABLE `t_event_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_group_dealer`
--
ALTER TABLE `t_group_dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_outlet_dealer`
--
ALTER TABLE `t_outlet_dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_salesman`
--
ALTER TABLE `t_salesman`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_department`
--
ALTER TABLE `t_department`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_event_category`
--
ALTER TABLE `t_event_category`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_group_dealer`
--
ALTER TABLE `t_group_dealer`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_outlet_dealer`
--
ALTER TABLE `t_outlet_dealer`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_salesman`
--
ALTER TABLE `t_salesman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t_users_role`
--
ALTER TABLE `t_users_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
