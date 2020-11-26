-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2020 at 12:45 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `subject` varchar(300) NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `phone`, `country`, `subject`) VALUES
('Diksha kumari', 'diks@gmail.com', '92346818652', 'australia', 'I want to sell my product on your site please contact me .');

-- --------------------------------------------------------

--
-- Table structure for table `latest_product`
--

CREATE TABLE IF NOT EXISTS `latest_product` (
  `pname` varchar(30) NOT NULL,
  `pprice` varchar(20) NOT NULL,
  `pimage` varchar(30) NOT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_product`
--

INSERT INTO `latest_product` (`pname`, `pprice`, `pimage`) VALUES
('moto5g', '12000', 'moto.jpg'),
('moto5sg', '12000', 'moto.jpg'),
('moto5sge', '12000', 'moto.jpg'),
('motoc', '12000', 'mobile/moto.jpg'),
('motog', '12000', 'moto.jpg'),
('nokia', '13000', 'frontend/mobile/apple.jpg'),
('poco', '17000', 'frontend/mobile/apple.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_desc`
--

CREATE TABLE IF NOT EXISTS `product_desc` (
  `pid` int(11) NOT NULL,
  `model_no` varchar(30) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `screen_size` varchar(30) NOT NULL,
  `storage` varchar(10) NOT NULL,
  `fcamera` varchar(20) NOT NULL,
  `bcamera` varchar(20) NOT NULL,
  `capacity` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_desc`
--

INSERT INTO `product_desc` (`pid`, `model_no`, `cname`, `processor`, `ram`, `screen_size`, `storage`, `fcamera`, `bcamera`, `capacity`) VALUES
(1001, 'HLK-L42', 'HONOR', 'Octa Core', '6 GB', '16.74 cm (6.59 inch)', '256 GB', '16MP', '48MP', '4000 mAh'),
(1002, 'RMX2040', 'Realme', 'MediaTek Helio G80', '4 GB', '6.5 inch', '128 GB', '16MP', '48MP', '5000 mAh'),
(1003, 'SM-M015GZBDINS', 'SAMSUNG', 'Qualcomm Snapdragon (SDM439) O', '3 GB', '5.7 inch', '32 GB', '5MP ', '32MP ', '4000 mAh'),
(1004, 'XT2061-3', 'MOTOROLA', 'Qualcomm Snapdragon 865 Proces', '12 GB', '6.7 inch', '256GB', '25MP', '108MP', '5000 mAh'),
(1005, 'SM-A515FZK1INS/ SM-A515FZKWINS', 'SAMSUNG', 'Exynos 9611 Processor', '6 GB RAM ', '6.4 inch', '128GB', '32MP', '42MP', '4000 mAh Lithium-ion Battery'),
(1006, 'vivo 1933 / PD1969F_EX', 'VIVO', 'Qualcomm Snapdragon 712 AIE Pr', '6GB', '6.44 inch', '128GB', '32MP + 8MP', '48MP + 8MP + 2MP ', '4500 mAh Lithium-ion Battery'),
(1007, 'MWLV2HN/A', 'Apple', 'A13 Bionic Chip Processor', '4GB', '6.1 inch)', '64GB', '12MP ', '12MP + 12MP ', '5000mah'),
(1008, 'M2003J6A1I', 'Xiome', 'Qualcomm® Snapdragon™ 720G Pro', '6GB', '6.67 inch', '64GB', '16MP', '48MP + 8MP + 5MP', '5020 mAh '),
(1009, 'MZB6634IN', 'Xiome', 'Qualcomm Snapdragon 636 Proces', '4GB', '5.99 inch', '64GB', '20MP ', '12MP + 5MP', '4000 mAh');

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE IF NOT EXISTS `product_master` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `ptype` varchar(30) NOT NULL,
  `pprice` varchar(20) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`pid`, `pname`, `ptype`, `pprice`, `pimage`) VALUES
(1001, 'Honor 9x Pro', 'Mobile', '&#8377;17,999', 'mobile/honor9x.jpeg'),
(1002, 'Realme Nazro 10', 'Mobile', '&#8377;11,999', 'mobile/realmenazro.jpeg'),
(1003, 'Samsung Galaxy M01', 'Mobile', '&#8377;9,990', 'mobile/samsungm11.jpeg'),
(1004, 'Motorola Edge+', 'Mobile', '&#8377;74,999', 'mobile/p1.jpg'),
(1005, 'Samsung Galaxy A51', 'Mobile', '&#8377;25,250', 'mobile/samsunggalaxy.jpeg'),
(1006, 'Vivo V19 ', 'Mobile', '&#8377;27,990', 'mobile/vivo.jpeg'),
(1007, 'Apple iPhone 11', 'Mobile', '&#8377;68,300', 'mobile/iphone11.jpeg'),
(1008, 'Redmi Note 9 Pro', 'Mobile', '&#8377;16,990', 'mobile/redmi9.jpeg'),
(1009, 'Redmi Note 5 Pro', 'Mobile', '&#8377;12,999', 'mobile/redmi5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `emailid`, `password`, `gender`, `dob`, `phone`, `role`) VALUES
('dik', 'dik@gmail.com', '123456', 'female', '17099', 2457889928, ' '),
('Diksha kumari', 'diksha@gmail.com', '@1234', 'female', '', 9123182316, 'admin'),
('nisha', 'nisha@gmail.com', '12345', 'female', '1999/10/10', 2567898765, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `womens_store`
--

CREATE TABLE IF NOT EXISTS `womens_store` (
  `pid` int(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `ptype` varchar(30) NOT NULL,
  `pprice` varchar(30) NOT NULL,
  `pimage` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womens_store`
--

INSERT INTO `womens_store` (`pid`, `pname`, `ptype`, `pprice`, `pimage`) VALUES
(1001, 'frok suit', 'cloth', 'Rs.1,500', 'mobile/suit.jpeg'),
(1002, 'Maxi', 'cloth', 'Rs.799', 'mobile/maxi.jpeg'),
(1003, 'skirt top', 'cloth', 'Rs.1,000', 'mobile/skirt.jpeg'),
(1004, 'kurti', 'cloth', 'Rs.899', 'mobile/kurti.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
