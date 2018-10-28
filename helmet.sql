-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 07:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helmet`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `detail` text,
  `sort_order` varchar(10) DEFAULT '0',
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `detail`, `sort_order`, `status`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:36px\"><strong>เกี่ยวกับเรา</strong></span></p>\r\n\r\n<p>ร้านหมวกกันน๊อค หลายรุ่น หลายราคา มาคอยทุกท่านอยุ่ ที่ DN HELMET SHOP ปากซอย วัดพระธาตุนารายณ์เจงเวง ติดถนน ทางไปอุดร ก่อนถึง สนง.ขนส่งจังหวัดสกลนคร เราพร้อมจัดส่งทางไปรษณีย์ สำหรับท่านที่อยู่ไกลสนใจสอบถามได้ที่ in box หรือโทร. มาที่ 063-963-5869</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://localhost/helmet/assets/images/31_1.jpg\"><img alt=\"\" src=\"http://localhost/helmet/assets/images/31_1.jpg\" style=\"height:426px; width:640px\" /></a></p>\r\n', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`) VALUES
('benz', 'benz', 'benz');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `category_id` varchar(10) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `sort_order` varchar(10) DEFAULT '0',
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `category_id`, `subject`, `sort_order`, `status`) VALUES
(2, '2', 'ATOMddd', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `sort_order` varchar(10) DEFAULT '0',
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `subject`, `sort_order`, `status`) VALUES
(1, 'หมวกกันน็อคเต็มใบ', '1', '1'),
(2, 'หมวกกันน็อคครึ่งใบ', '2', '1'),
(3, 'หมวกกันน็อคช็อป', '1', '1'),
(4, 'หมวกกันน็อคเปิดหน้า', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `call` varchar(10) NOT NULL,
  `sort_order` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `address`, `email`, `call`, `sort_order`, `status`) VALUES
(1, '100/1', 'tom_5786@hotmail.com', '0921313454', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `generation`
--

CREATE TABLE `generation` (
  `id` int(11) NOT NULL,
  `brand_id` varchar(10) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `sort_order` varchar(10) DEFAULT '0',
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generation`
--

INSERT INTO `generation` (`id`, `brand_id`, `subject`, `sort_order`, `status`) VALUES
(1, '1', 'Star', '1', '1'),
(2, '3', 'Teenage', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` text,
  `email` text,
  `call` varchar(15) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `name`, `address`, `email`, `call`, `status`) VALUES
(1, 'lemontamza', 'mootaam00', 'LMTZ', '1052 ถ.กำจัดภัย อ.เมือง จ.สกลนคร', 'itsmelmtz@gmail.com', '0942623424', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(5) DEFAULT NULL,
  `product_id` int(5) DEFAULT NULL,
  `product_qty` int(5) DEFAULT NULL,
  `date` char(50) DEFAULT NULL,
  `time` char(50) DEFAULT NULL,
  `buyer_id` int(5) DEFAULT NULL,
  `total` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product_id`, `product_qty`, `date`, `time`, `buyer_id`, `total`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, NULL),
(1, 1, 1, '2018-10-25', '01:07:38', 1, '1790');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(6) NOT NULL,
  `buyer_id` int(6) DEFAULT NULL,
  `order_id` int(6) DEFAULT NULL,
  `total` int(6) DEFAULT NULL,
  `slip` char(50) DEFAULT NULL,
  `status` int(6) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `buyer_id`, `order_id`, `total`, `slip`, `status`) VALUES
(3, 1, 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `generation_id` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `detail` text,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_lastupdate` date NOT NULL DEFAULT '0000-00-00',
  `sort_order` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `code`, `generation_id`, `name`, `price`, `image`, `color`, `detail`, `date_create`, `date_lastupdate`, `sort_order`) VALUES
(1, 'HM001', '1', 'หมวกกันน็อค Decken รุ่น Star', '1790', 'product20180802194056.jpg', 'เหลืองดำ', '<p><strong>วัสดุABSทั้งใบ คัดเกรดอย่างดี</strong></p>\r\n\r\n<p><strong>นวมภายในสามารถถอดซักทำความสะอาดได้</strong></p>\r\n\r\n<p><strong>แว่นตาสองชั้น&nbsp;</strong></p>\r\n\r\n<p><strong>สายรัดคางระบบกิ๊ปล็อค เพื่อความสะดวกรวดเร็วในการใช้งาน</strong></p>\r\n\r\n<p><strong>มีเมาท์การ์ด</strong></p>\r\n\r\n<p><strong>น้ำหนักประมาณ 1550 +-50 กรัม</strong></p>\r\n\r\n<p><strong>ได้รับมาตราฐาน มอก.</strong></p>\r\n\r\n<p><strong>และ ผ่านมาตรฐาน ECE-R 22.05 (ยุโรป)&nbsp;</strong></p>\r\n', '2018-08-02 17:36:49', '0000-00-00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `detail` text,
  `sort_order` varchar(10) DEFAULT '0',
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `detail`, `sort_order`, `status`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:36px\"><strong>บริการ</strong></span></p>\r\n\r\n<p>ร้านหมวกกันน๊อค หลายรุ่น หลายราคา มาคอยทุกท่านอยุ่ ที่ DN HELMET SHOP ปากซอย วัดพระธาตุนารายณ์เจงเวง ติดถนน ทางไปอุดร ก่อนถึง สนง.ขนส่งจังหวัดสกลนคร เราพร้อมจัดส่งทางไปรษณีย์ สำหรับท่านที่อยู่ไกลสนใจสอบถามได้ที่ in box หรือโทร. มาที่ 063-963-5869</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://localhost/helmet/assets/images/31_1.jpg\"><img alt=\"\" src=\"http://localhost/helmet/assets/images/31_1.jpg\" style=\"height:426px; width:640px\" /></a></p>\r\n', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generation`
--
ALTER TABLE `generation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `generation`
--
ALTER TABLE `generation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
