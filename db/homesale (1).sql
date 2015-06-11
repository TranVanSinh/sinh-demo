-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2015 at 09:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homesale`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1434047202),
('authenticated', '2', 1434047202);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, NULL, NULL, NULL, 1434047202, 1434047202),
('authenticated', 1, NULL, NULL, NULL, 1434047202, 1434047202),
('guest', 1, NULL, NULL, NULL, 1434047202, 1434047202),
('loginBackend', 2, 'allow user have permission admin log in backend', NULL, NULL, 1434047202, 1434047202);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'loginBackend');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `home_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `img` text NOT NULL,
  `price` int(11) NOT NULL,
  `detail` text NOT NULL,
  `size` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `broker` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `name`, `address`, `img`, `price`, `detail`, `size`, `type`, `bed`, `bath`, `status`, `broker`) VALUES
(1, 'Nhà 1', '4118 Four Seasons, Florence, SC 29505', 'uploads/Lighthouse.jpg', 103, 'This is new construction on the pond in the new development Middleton Pointe. This home offers open floor plan with lots of upgrades. Kitchen offers island with cabinets wrapping around kitchen with Hood oven. Dining Room open to kitchen. Heavy molding..,,,,, Custom Master Suite with double trey ceilings overlooking pond, Custom glass tile shower with double shower heads and oval soaking tub. Greatroom with 12 foot ceiling custom entertainment cabinets. Great size screen porch overlooking pond.', 2180, 0, 3, 3, 1, 'Era Leatherman Realty (95)'),
(2, 'Nhà 2', '94/5 Australia', 'uploads/Koala.jpg', 3, 'Nhà mặt tiền', 2345, 1, 0, 0, 0, 'Grantham Properties R E Services,Llc'),
(3, 'Nhà 3', '1/1 Australia', 'uploads/Koala.jpg', 5678, 'Nhà Đẹp', 3457, 0, 2, 3, 1, 'Grantham Properties R E Services,Llc'),
(4, 'Nhà 4', '1/2 Australia', 'uploads/nha_1.jpg', 5678, 'Nhà Đẹp', 3457, 0, 2, 3, 1, 'Grantham Properties R E Services,Llc'),
(6, 'Nhà 6', '1/4 Australia', 'uploads/chess-board-layout.jpg', 5678, 'Nhà Đẹp', 3457, 0, 2, 3, 1, 'Grantham Properties R E Services,Llc'),
(7, 'Nhà 7', '1/5 Australia', 'uploads/Animated_Waterfall_1.gif', 5678, 'Nhà Đẹp', 3457, 0, 2, 3, 1, 'Grantham Properties R E Services,Llc'),
(8, 'Nhà 8', '1/6 Australia', 'uploads/animated-gifs-water-05.gif', 5678, 'Nhà Đẹp', 3457, 0, 2, 3, 1, 'Grantham Properties R E Services,Llc'),
(9, 'Nhà 9', '1/7 Australia', 'uploads/banner2.jpg', 5678, 'Nhà Đẹp', 3457, 0, 2, 3, 1, 'Grantham Properties R E Services,Llc'),
(10, 'Nhà 10', '1/8 Australia', 'uploads/003-1_500.png', 5678, 'Nhà Đẹp', 3457, 0, 2, 3, 1, 'Grantham Properties R E Services,Llc'),
(11, 'Nhà 11', '1/9 Australia', 'uploads/custom_showcase2_img.jpg', 5678, 'Nhà Đẹp', 3457, 0, 2, 3, 1, 'Grantham Properties R E Services,Llc'),
(13, 'Nhà 11', '1/11 Australia', 'uploads/Lighthouse.jpg', 3, 'Nhà đẹp', 234, 0, 2, 2, 1, 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1433957631),
('m130524_201442_init', 1433957637),
('m140506_102106_rbac_init', 1434047192);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SInhTV', 'K10VcUPoR-ODP_GcMYH6Aqr0o-xsEp5D', '$2y$13$SkoTpbI.p25pnEDHF7PiBu/Z5urryXWCWbIobl.Rq9h4B/7JUYhtK', NULL, 'sinh1@gmail.com', 10, 1433932503, 1433932503),
(2, 'SyTV', 'QYI1lgET6-wE0rX_iWkrJQYbJ_4WQOwO', '$2y$13$FomHCXC8YlkOOuscJRVKDO2Zbo7PuGOGBmGBJW3kzGnH5ZqmiLQM.', NULL, 'sinh2@gmail.com', 10, 1433932561, 1433932561);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
 ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
