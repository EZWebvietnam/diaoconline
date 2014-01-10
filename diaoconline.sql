-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2014 at 06:26 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diaoconline`
--
CREATE DATABASE IF NOT EXISTS `diaoconline` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `diaoconline`;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `content`, `img`) VALUES
(1, 'Lexington An Phú', 'Lexington là một dự án gồm 03 tòa tháp căn hộ cao cấp 25 tầng tọa lạc tại phường An Phú, Quận 2, Thành phố Hồ Chí Minh. Do Công ty Cổ phần bất động sản Novaland làm chủ đầu tư', 'thumb-DF0-lexington-an-phu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai_hinh` int(11) NOT NULL COMMENT '1:chinh chu 2:moi gioi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `content`, `price`, `code`, `loai_hinh`) VALUES
(1, 'Cho thuê nguyên căn tòa nhà 521-523 Điện Biên Phủ, Q.Bình Thạnh, ngay cầu Văn Thánh', 'Cho thuê nguyên căn tòa nhà văn phòng tại: 521 - 523 Điện Biên Phủ, P.25, Q.Bình Thạnh. Gồm: 1 trệt, 4 lầu, tổng diện tích: 530m2 (8.2m x 15m). \r\n\r\nVị trí đắc địa, ngay Hàng Xanh, trên trục đường cửa ngõ thành phố, rất thuận tiện mở showroom, chi nhánh công ty, trường học, ngân hàng\r\n\r\nGiá cho thuê: 84 triệu/ tháng (4000 USD), chưa bao gồm VAT. Liên hệ: 090 301 4477.', '84000000', '252888', 1),
(2, 'Cho thuê nguyên căn tòa nhà 521-523 Điện Biên Phủ, Q.Bình Thạnh, ngay cầu Văn Thánh', 'Cho thuê nguyên căn tòa nhà văn phòng tại: 521 - 523 Điện Biên Phủ, P.25, Q.Bình Thạnh. Gồm: 1 trệt, 4 lầu, tổng diện tích: 530m2 (8.2m x 15m). \r\n\r\nVị trí đắc địa, ngay Hàng Xanh, trên trục đường cửa ngõ thành phố, rất thuận tiện mở showroom, chi nhánh công ty, trường học, ngân hàng\r\n\r\nGiá cho thuê: 84 triệu/ tháng (4000 USD), chưa bao gồm VAT. Liên hệ: 090 301 4477.', '84000000', '252888', 2),
(3, 'Cho thuê nguyên căn tòa nhà 521-523 Điện Biên Phủ, Q.Bình Thạnh, ngay cầu Văn Thánh', 'Cho thuê nguyên căn tòa nhà văn phòng tại: 521 - 523 Điện Biên Phủ, P.25, Q.Bình Thạnh. Gồm: 1 trệt, 4 lầu, tổng diện tích: 530m2 (8.2m x 15m). \r\n\r\nVị trí đắc địa, ngay Hàng Xanh, trên trục đường cửa ngõ thành phố, rất thuận tiện mở showroom, chi nhánh công ty, trường học, ngân hàng\r\n\r\nGiá cho thuê: 84 triệu/ tháng (4000 USD), chưa bao gồm VAT. Liên hệ: 090 301 4477.', 'Thương lượng', '252888', 2),
(4, 'Cho thuê nguyên căn tòa nhà 521-523 Điện Biên Phủ', 'Cho thuê nguyên căn tòa nhà văn phòng tại: 521 - 523 Điện Biên Phủ, P.25, Q.Bình Thạnh. Gồm: 1 trệt, 4 lầu, tổng diện tích: 530m2 (8.2m x 15m). \r\n\r\nVị trí đắc địa, ngay Hàng Xanh, trên trục đường cửa ngõ thành phố, rất thuận tiện mở showroom, chi nhánh công ty, trường học, ngân hàng\r\n\r\nGiá cho thuê: 84 triệu/ tháng (4000 USD), chưa bao gồm VAT. Liên hệ: 090 301 4477.', '310000000', '252888', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
