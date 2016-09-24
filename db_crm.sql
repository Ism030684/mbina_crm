-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 01 Sep 2016 pada 10.34
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
(1, '1', 'MARKETING');

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
(1, 1, 'Adedanmas', 'Jl. Tb Simatupang', '021-72827278', 'http://info-adedanmas.com/', 'info@http://info-adedanmas.com/'),
(2, 3, 'Dipo Angkasa Motor', 'Jl. Pluit Selatan No. 1 C\nJakarta Utara 14440', '(021) 669 1666', 'dipomotor.com', 'sales@dipomotor.com'),
(4, 2, 'Cakrawala Automotif Rabhasa', 'Jl. Denpasar Raya Blok D-2 Kav. 12. \nJakarta 12940', '(021) 252 2292', 'car-mbenz.com', 'car@car-mbenz.com'),
(5, 4, 'Dipo Mandiri Motor', 'Jl. Jend A. Yani Kav 87\nJakarta 13210', 'Passenger and B', 'diposervice.com', 'service@diposervice.com'),
(6, 5, 'Hartono Raya Motor', 'Jl. Daan Mogot Km.1 No. 99\nJakarta 11510', '(021) 566 0055', 'indo.net.id', 'hrmjkt@indo.net.id'),
(7, 6, 'Mass Sarana Motorama', 'Jl. Jend Sudirman No.8\nJakarta 10220', '(021) 573 3193-', '-', 'nvmass@cbn.net.id'),
(8, 7, 'Mercindo Autorama', 'Jl. Mampang Prapatan No. 69 - 70\nJakarta 12790', '(021) 794 1630', 'mercindo-autorama.com', 'sales@mercindo-autorama.com'),
(9, 8, 'Panji Rama Otomotif', 'Jl. Teuku Nyak Arif 14, Simprug\nJakarta 12220', '(021) 726 7661', 'pro-motor.co.id', 'sales@pro-motor.co.id'),
(10, 9, 'Mercindo Autorama -  KG', 'Jl. Boulevard Raya Barat Blok XC-A8\nJakarta 14240', '((021) 452 4515', '', ''),
(11, 10, 'Putra Borneo Nusantara', 'Jl. MT. Haryono Kav 29-30 \nJakarta 12810 ', '(021) 293 80663', 'nusantara-mercedes.com', 'sales@nusantara-mercedes.com'),
(12, 11, 'Promotor Serpong', 'Jl. Raya Serpong Km. 7 No. 32 Tangerang 15311', '(021) 531 21000', '', '');

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
(1, 233, 7, 'Mercindo2', 'Jl. Menteng 2 Jakpus', '(021)8838383'),
(2, 123, 1, 'Adedanmas2', 'Jl. Pondok Indah 2', '(021)822828'),
(3, 234, 1, 'Adedanmas Simatupang', 'Jl Tb Simatupang', '(021)8737373'),
(4, 212, 2, 'Cakrawala', 'JAKSEL', '928282'),
(5, 1212, 11, 'Promotor Serpong 2', 'Jl. Pahlawan Seribu BSD', '(021)738373');

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
(12, 12345678, 3, 'FITRIA YUNI P', 1, 234, '1', 'ismahmad@gmail.com', '0817212162', '08292929', '12345678', ''),
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
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
