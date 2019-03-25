-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 10:38 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `content` varchar(5555) NOT NULL,
  `url` varchar(1255) NOT NULL,
  `create_at` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `status`, `content`, `url`, `create_at`) VALUES
(1, 'Bedroom Colors You\'ll Never Regret', '1', 'In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.\r\n\r\nPhasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.', 'blog-post-02a.jpg', '2017-12-06 14:11:31'),
(3, '8 Tips to Help You Finding New Home', '1', 'In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.\r\n\r\nPhasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.', 'blog-post-01a.jpg', '2017-12-06 14:11:31'),
(4, 'What to Do a Year Before Buying Apartment', '1', 'In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.\r\n\r\nPhasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non, suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet mauris in quam pretium faucibus et aliquam odio.', 'blog-post-03a.jpg', '2017-12-06 14:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog_cate`
--

CREATE TABLE `blog_cate` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_cate`
--

INSERT INTO `blog_cate` (`id`, `category`, `status`) VALUES
(1, 'test001', '1'),
(3, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `pass`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Mr.Prabhu', '98949', '', '9894903104', 'madurai', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 12:39:48'),
(21, 'N.M.NASEEER KHAN ', '95855', '', '9585531177', '', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-17 09:32:11'),
(22, 'MVR CONSTRUCTION', '93600', '', '9360023415', '', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 12:49:59'),
(25, 'suresh', '8940924955', '', '8940924955', 'DOOR NO:1/71, KUMALINGULAM,EARCHANATHAM(PO), SIVAGASI(TK). VIRUTHUNAGAR(DS).\r\n', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:41'),
(24, 'santhiya', '73977', '', '7397732280', '43/2,Thamarai Street,Iyyapan Nagar,\r\nIyerbungalow', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:43'),
(26, 'selvakumar', '9943106062', 'selvakumar.b2012@gmail.com', '9943106062', '', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:47'),
(27, 'KARTHICK KANNA', '7200429001', '', '7200429001', 'KARTHIK KUMAR, 3C/2, MAARIAMMAN ST, NEW RAMANAD ROAD, THEPPAKULAM MADURAI.\r\n', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:49'),
(28, 'HARSHVI HOMES', '9840312439', 'harshvi.homes@gmail.com', '9840312439', 'No. 60b, Anna Main Road, K K Nagar, Chennai - 600078\r\n', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:51'),
(30, 'Azarudeen', '8489229619', '', '8489229619', '70,C. R.C. CHRUCH ROAD, MOHAMEDIAPURAM, MELUR, MADURAI.\r\n', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:53'),
(31, 'Saravanan', '9786656640', 'sbuildersmelur@gmail.com', '9786656640', 'AMM complex, keelavalavu, melur. (opp) MDCC bank, trichy main road,melur.\r\n', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:55'),
(32, 'GOVINDA SEENIVASAN', '9629867341', 'ergovind09@gmail.com', '9629867341', '7E, PERUMAL KOIL STREET, MANAMADURAI.', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:56'),
(33, 'VV CONSTRUCTION', '9865340007', 'vvconstruction11@gmail.com', '9865340007', 'No:4/108, Pugazh Complex,\r\nTanjore Main Road,  Kattur,\r\nTrichy - 620 019.', '', '', '', 'Customer', '2018-10-16 12:11:49', '2018-10-16 13:54:58'),
(34, 'Aravind', 'aravind', 'aravind.0216@gmail.com', '963258741', 'sellur', 'madurai', 'tamil nadu', '625002', 'Client', '2018-10-16 13:30:37', '2018-10-16 13:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `position` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `title1`, `title2`, `url`, `position`, `created_at`) VALUES
(1, 'K.A.S Housing', 'RCC framed structure', 'http://localhost/kashousing/assets/Facility/2102675490.png', 2, '2018-10-08 07:10:37'),
(2, 'K.A.S Housing	', 'Near Shoping Complex', 'http://localhost/kashousing/assets/Facility/601023224.png', 4, '2018-10-08 07:11:00'),
(3, 'K.A.S Housing	', 'Ro Mineral Water', 'http://localhost/kashousing/assets/Facility/289243598.png', 1, '2018-10-08 07:11:18'),
(4, 'K.A.S Housing	', 'All Houses are designed as per Vasthu', 'http://localhost/kashousing/assets/Facility/1744511357.png', 3, '2018-10-08 07:11:39'),
(5, 'K.A.S Housing	', 'Meditation Hall', 'http://localhost/kashousing/assets/Facility/1772932019.png', 5, '2018-10-08 07:11:55'),
(6, 'K.A.S Housing	', 'Childrens Park', 'http://localhost/kashousing/assets/Facility/1760429903.png', 8, '2018-10-08 07:12:13'),
(7, 'K.A.S Housing	', 'Swimming Pool', 'http://localhost/kashousing/assets/Facility/1800853952.png', 7, '2018-10-08 07:12:26'),
(8, 'K.A.S Housing	', '24*7 Cctv Video Coverage', 'http://localhost/kashousing/assets/Facility/1769071679.png', 6, '2018-10-08 07:12:45'),
(9, 'K.A.S Housing	', '24*7 Security Facilities', 'http://localhost/kashousing/assets/Facility/1879674733.png', 9, '2018-10-08 07:13:04'),
(10, 'K.A.S Housing	', 'Avenue Automatic Gate', 'http://localhost/kashousing/assets/Facility/858341660.png', 11, '2018-10-08 07:13:34'),
(11, 'K.A.S Housing	', 'TV ShowCase', 'http://localhost/kashousing/assets/Facility/1843988941.png', 14, '2018-10-08 07:14:57'),
(12, 'K.A.S Housing	', 'Madular kitchen', 'http://localhost/kashousing/assets/Facility/1608938070.png', 12, '2018-10-08 07:15:15'),
(13, 'K.A.S Housing	', 'Home Loans / All leading Banks', 'http://localhost/kashousing/assets/Facility/112136843.png', 13, '2018-10-08 07:15:48'),
(14, 'K.A.S Housing	', 'Street Light Provision', 'http://localhost/kashousing/assets/Facility/119614143.png', 10, '2018-10-08 07:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL COMMENT 'Upload Date',
  `modified` datetime NOT NULL,
  `cate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prop_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Unblock, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `created`, `modified`, `cate`, `prop_id`, `status`) VALUES
(1, '1516966714LC010_Shanmuganagar-tn.jpg', '2018-01-26 17:08:34', '2018-01-26 17:08:34', '1', '9', 1),
(2, '1516966714aboutdemo.jpg', '2018-01-26 17:08:34', '2018-01-26 17:08:34', '2', '9', 1),
(3, '1516966714beam1.png', '2018-01-26 17:08:34', '2018-01-26 17:08:34', '3', '9', 1),
(4, '1516966714beam3.png', '2018-01-26 17:08:34', '2018-01-26 17:08:34', '4', '9', 1),
(5, '1516966826about.png', '2018-01-26 17:10:26', '2018-01-26 17:10:26', '5', '1', 1),
(6, '1516980391about.png', '2018-01-26 20:56:31', '2018-01-26 20:56:31', '1', '10', 1),
(7, '1516980391about3.jpg', '2018-01-26 20:56:31', '2018-01-26 20:56:31', '2', '10', 1),
(8, '1516980392about11.jpg', '2018-01-26 20:56:32', '2018-01-26 20:56:32', '3', '10', 1),
(9, '1516980392about11.jpg', '2018-01-26 20:56:32', '2018-01-26 20:56:32', '4', '10', 1),
(10, '1516980504Construction-Materials-Ajman.jpg', '2018-01-26 20:58:24', '2018-01-26 20:58:24', '1', '11', 1),
(11, '1516980504Construction-Materials-Ajman.jpg', '2018-01-26 20:58:24', '2018-01-26 20:58:24', '2', '11', 1),
(12, '1516980504Construction-Materials-Ajman.jpg', '2018-01-26 20:58:24', '2018-01-26 20:58:24', '3', '11', 1),
(13, '1516980504Construction-Materials-Ajman.jpg', '2018-01-26 20:58:24', '2018-01-26 20:58:24', '4', '11', 1),
(14, '1517233496velnagar_(1).png', '2018-01-29 19:14:56', '2018-01-29 19:14:56', '1', '12', 1),
(15, '1517233496ANUSHA_3D_PLAN.jpg', '2018-01-29 19:14:56', '2018-01-29 19:14:56', '3', '12', 1),
(16, '1517233496velnagar_(1).png', '2018-01-29 19:14:56', '2018-01-29 19:14:56', '4', '12', 1),
(17, '1517233753velnagar_(1).png', '2018-01-29 19:19:13', '2018-01-29 19:19:13', '5', '2', 1),
(18, '1517292749velnagar_(1).png', '2018-01-30 11:42:29', '2018-01-30 11:42:29', '1', '13', 1),
(19, '1517292749ANUSHA_3D_PLAN.jpg', '2018-01-30 11:42:29', '2018-01-30 11:42:29', '3', '13', 1),
(20, '1517292749ANUSHA_3D_PLAN.jpg', '2018-01-30 11:42:29', '2018-01-30 11:42:29', '4', '13', 1),
(21, '1517296579LC001_Shanmuga_nagar.jpg', '2018-01-30 12:46:19', '2018-01-30 12:46:19', '1', '14', 1),
(22, '1517296579DHANALAKSHMI.jpg', '2018-01-30 12:46:19', '2018-01-30 12:46:19', '3', '14', 1),
(23, '15179243803_(2).jpg', '2018-02-06 19:09:40', '2018-02-06 19:09:40', '2', '15', 1),
(24, '1517924380_tmpTheppakulam_.jpg', '2018-02-06 19:09:40', '2018-02-06 19:09:40', '3', '15', 1),
(25, '1517924380001_(2).jpg', '2018-02-06 19:09:40', '2018-02-06 19:09:40', '4', '15', 1),
(26, '15179244983_(2).jpg', '2018-02-06 19:11:38', '2018-02-06 19:11:38', '2', '16', 1),
(27, '1517924498_tmpTheppakulam_.jpg', '2018-02-06 19:11:38', '2018-02-06 19:11:38', '3', '16', 1),
(28, '1517924498001_(2).jpg', '2018-02-06 19:11:38', '2018-02-06 19:11:38', '4', '16', 1),
(30, '1517981493JAFFAR-FIRST_FLOOR_2D_PLAN.jpg', '2018-02-07 11:01:33', '2018-02-07 11:01:33', '2', '17', 1),
(31, '1517981493JAFFER_FF.jpg', '2018-02-07 11:01:33', '2018-02-07 11:01:33', '3', '17', 1),
(32, '1517981493JAFFAR-GROUND_FLOOR_2D_PLAN.jpg', '2018-02-07 11:01:33', '2018-02-07 11:01:33', '4', '17', 1),
(33, '1518075220006-s190x84.jpg', '2018-02-08 13:03:40', '2018-02-08 13:03:40', '1', '18', 1),
(34, '1518075220001-s190x84.jpg', '2018-02-08 13:03:40', '2018-02-08 13:03:40', '2', '18', 1),
(35, '1518075220002.jpg', '2018-02-08 13:03:40', '2018-02-08 13:03:40', '3', '18', 1),
(36, '1518075220003.jpg', '2018-02-08 13:03:40', '2018-02-08 13:03:40', '4', '18', 1),
(37, '1518078033K_A_S_-feature-graphic.png', '2018-02-08 13:50:33', '2018-02-08 13:50:33', '1', '19', 1),
(39, '1518152154LC003_rajannagar.jpg', '2018-02-09 10:25:54', '2018-02-09 10:25:54', '1', '23', 1),
(40, '1518152248RAMANATHAN.jpg', '2018-02-09 10:27:28', '2018-02-09 10:27:28', '3', '23', 1),
(41, '1518152248LC003_rajannagar.jpg', '2018-02-09 10:27:28', '2018-02-09 10:27:28', '4', '23', 1),
(42, '1518152447ramanathan-2D_Model.jpg', '2018-02-09 10:30:47', '2018-02-09 10:30:47', '2', '23', 1),
(43, '1518155496LC008_Shanmuga_nagar.jpg', '2018-02-09 11:21:36', '2018-02-09 11:21:36', '1', '24', 1),
(56, '1518501171photo_2018-02-12_18-47-29.jpg', '2018-02-13 11:22:51', '2018-02-13 11:22:51', '1', '28', 1),
(61, '1531112982sulthan.jpg', '2018-07-09 10:39:42', '2018-07-09 10:39:42', '1', '25', 1),
(64, '1531113432SULTHAN_GF.jpg', '2018-07-09 10:47:12', '2018-07-09 10:47:12', '1', '25', 1),
(65, '1531113455SULTHAN_FF.jpg', '2018-07-09 10:47:35', '2018-07-09 10:47:35', '1', '25', 1),
(67, '1531113922SULTHAN_GF_2D_PLAN.jpg', '2018-07-09 10:55:22', '2018-07-09 10:55:22', '1', '25', 1),
(68, '1531113999SULTHAN-FIRST_FLOOR_2D_PLAN.jpg', '2018-07-09 10:56:39', '2018-07-09 10:56:39', '3', '25', 1),
(69, '1531114055SULTHAN-FIRST_FLOOR_2D_PLAN.jpg', '2018-07-09 10:57:35', '2018-07-09 10:57:35', '1', '25', 1),
(86, '1531117669JAFFER_GF.jpg', '2018-07-09 11:57:49', '2018-07-09 11:57:49', '1', '24', 1),
(87, '1531117705JAFFER_FF.jpg', '2018-07-09 11:58:25', '2018-07-09 11:58:25', '2', '24', 1),
(91, '1531117932JAFFER_FF.jpg', '2018-07-09 12:02:12', '2018-07-09 12:02:12', '1', '24', 1),
(92, '1531117982JAFFAR-FIRST_FLOOR_2D_PLAN.jpg', '2018-07-09 12:03:02', '2018-07-09 12:03:02', '1', '24', 1),
(93, '1531117982JAFFAR-GROUND_FLOOR_2D_PLAN.jpg', '2018-07-09 12:03:02', '2018-07-09 12:03:02', '1', '24', 1),
(106, '1531136578ele.jpg', '2018-07-09 17:12:58', '2018-07-09 17:12:58', '1', '26', 1),
(107, '1531136594ANUSHA_3D_PLAN.jpg', '2018-07-09 17:13:14', '2018-07-09 17:13:14', '1', '26', 1),
(108, '1531136616ANUSHA-2D_Model.jpg', '2018-07-09 17:13:36', '2018-07-09 17:13:36', '1', '26', 1),
(109, '1531137701oomachikulam_plan_1.jpg', '2018-07-09 17:31:41', '2018-07-09 17:31:41', '1', '28', 1),
(110, '15311377282D.jpg', '2018-07-09 17:32:08', '2018-07-09 17:32:08', '1', '28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `id` int(11) NOT NULL,
  `h_id` int(100) NOT NULL,
  `bed` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `breadth` varchar(100) NOT NULL,
  `bath` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `f_status` varchar(100) NOT NULL,
  `no_of_open` varchar(100) NOT NULL,
  `width_of_road` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`id`, `h_id`, `bed`, `length`, `breadth`, `bath`, `floor`, `f_status`, `no_of_open`, `width_of_road`) VALUES
(57, 17, '1', '43', '65', '1', '2', 'Semi-Furnished', '1', '23'),
(58, 18, '1', '12\"5', '12\"5', '1', '2', 'Unfurnished', '1', '100'),
(115, 24, '2', '8\'0#8\'0', '8\'0#14\'9', '2', '3', 'Semi-Furnished', '1', '23'),
(114, 24, '2', '8\'0#8\'0', '8\'0#14\'9', '2', '2', 'Semi-Furnished', '1', '23'),
(75, 25, '1', '15\'0', '12\'9', '1', '2', 'Semi-Furnished', '1', '23'),
(62, 27, '1', '11\'0\"', '16\'0\"', '2', '2', 'Semi-Furnished', '1', '23');

-- --------------------------------------------------------

--
-- Table structure for table `land_prop`
--

CREATE TABLE `land_prop` (
  `id` int(11) NOT NULL,
  `prop_named` varchar(255) NOT NULL,
  `laopenside` varchar(255) NOT NULL,
  `lawidthofroad` varchar(255) NOT NULL,
  `laplotarea` int(255) NOT NULL,
  `laplotlength` varchar(255) NOT NULL,
  `laplotbreadth` varchar(255) NOT NULL,
  `laexpectedprice` varchar(255) NOT NULL,
  `lapriceper` varchar(255) NOT NULL,
  `laothercharge` varchar(255) NOT NULL,
  `laadvance` varchar(255) NOT NULL,
  `laover` varchar(255) NOT NULL,
  `laowner` varchar(255) NOT NULL,
  `laapproved` varchar(255) NOT NULL,
  `vimeo2` varchar(255) NOT NULL,
  `summary` varchar(25555) NOT NULL,
  `lat` varchar(2555) NOT NULL,
  `lng` varchar(2555) NOT NULL,
  `regaddress` varchar(1255) NOT NULL,
  `laseltype` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `address`, `city`, `state`, `pincode`, `client_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KK Nagar', '18, KK Nagar', 'madurai', 'Tamil Nadu', '625002', '1', 0, '2018-10-13 08:13:57', '2018-10-13 08:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `projectimages`
--

CREATE TABLE `projectimages` (
  `id` int(11) NOT NULL,
  `item_id` varchar(100) NOT NULL,
  `url` varchar(10000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectmaincat`
--

CREATE TABLE `projectmaincat` (
  `id` int(11) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectmaincat`
--

INSERT INTO `projectmaincat` (`id`, `cat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ground', 0, '2018-10-12 12:49:33', '2018-10-12 12:49:33'),
(2, '1st Floor', 0, '2018-10-12 12:58:27', '2018-10-12 12:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `projectprocess`
--

CREATE TABLE `projectprocess` (
  `id` int(11) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `workmonth` varchar(100) NOT NULL,
  `workdays` varchar(100) NOT NULL,
  `workhours` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectsubcat`
--

CREATE TABLE `projectsubcat` (
  `id` int(11) NOT NULL,
  `maincat` varchar(100) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectsubcat`
--

INSERT INTO `projectsubcat` (`id`, `maincat`, `subcat`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'Ground Floor', 0, '2018-10-12 13:10:36', '2018-10-12 13:14:21'),
(2, '2', '1st Floor', 0, '2018-10-13 09:50:31', '2018-10-13 09:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `project_image`
--

CREATE TABLE `project_image` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL COMMENT 'Upload Date',
  `modified` datetime NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_image`
--

INSERT INTO `project_image` (`id`, `file_name`, `created`, `modified`, `name`, `status`) VALUES
(9, '1_c.jpg', '2018-06-27 17:11:45', '2018-06-27 17:11:45', 'Theppakulam', '2'),
(10, '1_d.jpg', '2018-06-27 17:31:47', '2018-06-27 17:31:47', 'Shanmuga Nagar ', '2'),
(11, '1_e.jpg', '2018-06-27 17:42:53', '2018-06-27 17:42:53', 'Shanmuga Nagar ', 'Choose'),
(12, '1_e1.jpg', '2018-06-27 17:43:23', '2018-06-27 17:43:23', 'Shanmuga Nagar ', 'Choose'),
(22, 's.png', '2018-07-09 15:00:57', '2018-07-09 15:00:57', 'Velnagar', '1'),
(23, 'sanm.png', '2018-07-09 15:01:42', '2018-07-09 15:01:42', 'Shanmuga Nagar ', '1'),
(24, 'raja.png', '2018-07-09 15:02:12', '2018-07-09 15:02:12', 'Rajannagar', '1'),
(25, 'san.png', '2018-07-09 15:02:39', '2018-07-09 15:02:39', 'Shanmuga Nagar ', '1'),
(26, 'w.png', '2018-07-09 15:03:06', '2018-07-09 15:03:06', 'Velnagar', '1'),
(27, 'sar.png', '2018-07-09 15:05:11', '2018-07-09 15:05:11', 'Shanmuga Nagar ', '1'),
(28, 'sa1.png', '2018-07-09 15:14:06', '2018-07-09 15:14:06', 'Shanmuga Nagar ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `project_item`
--

CREATE TABLE `project_item` (
  `id` int(11) NOT NULL,
  `project_id` varchar(100) NOT NULL,
  `maincat` varchar(100) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_item`
--

INSERT INTO `project_item` (`id`, `project_id`, `maincat`, `subcat`, `title`, `des`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '2', '!st Project', 'Description', 0, '2018-10-13 10:00:35', '2018-10-13 10:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `property_submit`
--

CREATE TABLE `property_submit` (
  `id` int(11) NOT NULL,
  `prop_type` varchar(110) NOT NULL,
  `prop_named` varchar(522) NOT NULL,
  `bedroom` varchar(110) NOT NULL,
  `bathroom` varchar(110) NOT NULL,
  `total_floor` varchar(100) NOT NULL,
  `furnished_status` varchar(110) NOT NULL,
  `no_of_open` varchar(110) NOT NULL,
  `width_of_road` varchar(110) NOT NULL,
  `covered_area` int(100) NOT NULL,
  `plot_area` varchar(110) NOT NULL,
  `plot_length` varchar(110) NOT NULL,
  `plot_breadth` varchar(110) NOT NULL,
  `corner_plot` int(11) NOT NULL,
  `carpet_area` varchar(110) NOT NULL DEFAULT '0',
  `trans_type` varchar(110) NOT NULL,
  `poss_status` varchar(110) NOT NULL,
  `ava_month` varchar(110) NOT NULL,
  `ava_year` varchar(110) NOT NULL,
  `expe_price` double NOT NULL,
  `price_per` varchar(110) NOT NULL,
  `other_char` varchar(110) NOT NULL,
  `booking` varchar(110) NOT NULL,
  `addition_rooms` varchar(110) NOT NULL,
  `facing` varchar(110) NOT NULL,
  `over_looking` varchar(110) NOT NULL,
  `car_park` varchar(110) NOT NULL,
  `aval_water` varchar(110) NOT NULL,
  `status_eb` varchar(110) NOT NULL,
  `owner_status` varchar(110) NOT NULL,
  `approved` varchar(110) NOT NULL,
  `flooring` varchar(1000) NOT NULL,
  `amenities` varchar(20000) NOT NULL,
  `vimeo1` varchar(100) NOT NULL,
  `description` varchar(6550) NOT NULL,
  `reqaddress` varchar(1255) NOT NULL,
  `lat` varchar(1255) NOT NULL,
  `lng` varchar(1255) NOT NULL,
  `length` varchar(1555) NOT NULL,
  `breadth` varchar(1555) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_submit`
--

INSERT INTO `property_submit` (`id`, `prop_type`, `prop_named`, `bedroom`, `bathroom`, `total_floor`, `furnished_status`, `no_of_open`, `width_of_road`, `covered_area`, `plot_area`, `plot_length`, `plot_breadth`, `corner_plot`, `carpet_area`, `trans_type`, `poss_status`, `ava_month`, `ava_year`, `expe_price`, `price_per`, `other_char`, `booking`, `addition_rooms`, `facing`, `over_looking`, `car_park`, `aval_water`, `status_eb`, `owner_status`, `approved`, `flooring`, `amenities`, `vimeo1`, `description`, `reqaddress`, `lat`, `lng`, `length`, `breadth`, `date`) VALUES
(25, '1', 'LC002 (2016)', '2', '1', '2', 'Semi-Furnished', '2', '23', 1601, '935', '41\'6', '18\'0', 0, '666', 'new property', 'Ready to Move', 'September', '2017', 2925000, '1826.98', '0', '10000', 'None of these', 'East', 'Main Road', 'Covered', '24 Hours Available', 'No/Rare Powercut', 'Freehold', 'City Municipal Corporation', 'Vitrified', 'Private Terrace/Garden#RO Water System#Rain Water Harvesting#Vaastu Compliant#Waste Disposal#Water Storage', 'https://vimeo.com/253376561', 'OUR PROJECT IN THIRUPALAI SHANMUGA NAGAR MADURAI.NEAR TO YADAVA COLLEGE WITH FULL FACILITIES', 'Yadava College Main Road, Tiruppalai, Madurai, Tamil Nadu 625014, India', '9.985503542046038', '78.14249038696289', '10\'0#8\'0', '8\'0#12\'9', ''),
(24, '1', 'LC008 (2016)', '2', '1', '3', 'Semi-Furnished', '2', '23', 1672, '967', '42\'0', '18\'0', 0, '705', 'new property', 'Ready to Move', 'August', '2017', 4700000, '2811.00', '0', '10000', 'None of these', 'East', 'Main Road', 'Covered', '24 Hours Available', 'No/Rare Powercut', 'Freehold', 'City Municipal Corporation', 'Vitrified', 'Private Terrace/Garden#RO Water System#Rain Water Harvesting#Vaastu Compliant#Waste Disposal#Water Storage', 'https://vimeo.com/253376561', 'OUR COMPLETED PROJECT G+2 IN THIRUPPALAI,SHANMUGA NAGAR,MADURAI.WITHI FULL FACILITIES', '1/142A, TWAD Colony, Tiruppalai, Madurai, Tamil Nadu 625014, India', '9.978402902958132', '78.14085960388184', '10\'0#8\'0', '8\'0#14\'9', ''),
(14, '1', 'LC001 (2016)', '2', '1', '1', 'Semi-Furnished', '1', '23', 1680, '1070', '19\'0', '39\'0', 0, '610', 'new property', 'Ready to Move', 'September', '2017', 2500000, '1488.10', '0', '10000', 'Puja Room', 'East', 'Main Road', 'None', '24 Hours Available', 'No/Rare Powercut', 'Freehold', 'City Municipal Corporation', 'Vitrified', 'Private Terrace/Garden#RO Water System#Rain Water Harvesting#Vaastu Compliant#Waste Disposal#Water Storage', ' https://vimeo.com/253376561', 'our project in shanmuga nagar ,Thiruppalai.Ground floor house with 2 BHK.', '2868 Al Urubah Rd, Al Wurud, Riyadh 12251 6064, Saudi Arabia', '24.713854693910204', '46.67584419250488', '18\'0#8\'0', '8\'0#11\'0', ''),
(13, '1', 'LC007 (2016)', '2', '2', '1', 'Semi-Furnished', '2', '30', 2625, '1650', '35', '36', 0, '975', 'new property', 'Ready to Move', 'September', '2017', 3800000, '1447.62', '0', '10000', 'Puja Room', 'East', 'Main Road', 'Covered', '24 Hours Available', 'No/Rare Powercut', 'Freehold', 'City Municipal Corporation', 'Vitrified', 'Private Terrace/Garden#RO Water System#Rain Water Harvesting#Vaastu Compliant#Waste Disposal#Water Storage', ' https://vimeo.com/253376561', 'our completed constrution in ram nagar thiruppalai.ground floor with 2BHK,pooja room,service area and car parking with compound wall in 6 cent.', 'Natham - Madurai Rd, Tagore Nagar, Bharat Nagar, Tiruppalai, Madurai, Tamil Nadu 625007, India', '9.976796784547188', '78.14038753509521', '10\'0#15\'6', '8\'0#8\'0', ''),
(23, '1', 'LC003 (2016)', '2', '2', '1', 'Semi-Furnished', '2', '23', 1181, '1190', '30\'0', '35\'0', 0, '896', 'new property', 'Under Construction', 'September', '2017', 3000000, '2540.22', '0', '10000', 'None of these', 'East', 'Main Road', 'Covered', '24 Hours Available', 'No/Rare Powercut', 'Freehold', 'City Municipal Corporation', 'Vitrified', 'Private Terrace/Garden#RO Water System#Rain Water Harvesting#Vaastu Compliant#Waste Disposal#Water Storage', 'https://vimeo.com/253376561', 'OUR NEW PROJECT', '1/2C, Marelam Rd, Tiruppalai, Madurai, Tamil Nadu 625014, India', '9.985165419887522', '78.14291954040527', '10\'0#41\'0', '8\'0#8\'0', ''),
(26, '1', 'LC009 (2016)', '1', '1', '1', 'Semi-Furnished', '2', '23', 1464, '964', '25\'0', '23\'5', 0, '500', 'new property', 'Ready to Move', 'September', '2017', 2000000, '1366.12', '0', '10000', 'Puja Room#Servant Room', 'East', 'Main Road', 'None', '24 Hours Available', 'No/Rare Powercut', 'Freehold', 'City Municipal Corporation', 'Vitrified', 'Private Terrace/Garden#RO Water System#Rain Water Harvesting#Vaastu Compliant#Waste Disposal#Water Storage', 'https://vimeo.com/249754664', 'OUR COMPLETED PROJECT IN SHNAMUGANAGAR,THIRUPPALAI,MADURAI.', '74, Senpagamalar St, Ram Nagar, Bama Nagar, Madurai, Tamil Nadu 625002, India', '9.971640245597534', '78.12601089477539', '10\'0', '8\'0', ''),
(27, '1', 'LC010 (2016)', '2', '2', '2', 'Semi-Furnished', '2', '23', 3309, '2080', '40\'0\"', '52\'0\"', 0, '1600', 'new property', 'Ready to Move', 'December', '2017', 7615000, '2301.30', '0', '10000', 'Puja Room', 'East', 'Main Road', 'Covered', '24 Hours Available', 'No/Rare Powercut', 'Freehold', 'City Municipal Corporation', 'Vitrified', 'Private Terrace/Garden#RO Water System#Rain Water Harvesting#Vaastu Compliant#Waste Disposal#Water Storage', 'https://vimeo.com/249754664', 'OUR CUSTOMER COMPLETED PROJECT', '1/323-5, Shanmugam St, Tiruppalai, Madurai, Tamil Nadu 625014, India', '9.985672602993551', '78.1422758102417', '10\'0\"#11\'0\"', '16\'0\"#16\'0\"', ''),
(28, '1', 'LC004 (2016)', '2', '3', '1', 'Semi-Furnished', '3', '23', 3154, '1830', '61\'0', '30\'0', 0, '1346', 'new property', 'Ready to Move', 'November', '2017', 6000000, '1902.35', '0', '10000', 'Puja Room', 'East', 'Main Road', 'Covered', '24 Hours Available', 'No/Rare Powercut', 'Freehold', 'City Municipal Corporation', 'Granite', 'Private Terrace/Garden#RO Water System#Rain Water Harvesting#Vaastu Compliant#Waste Disposal#Water Storage', 'https://vimeo.com/249754664', 'OUR COMPLETED HOUSE IN OOMCHIKULAM,NATHAM ROAD WITH FULL FACILITIES.FOR READY TO SALE AND OCCUPY .', 'Yadava College Main Road, Tiruppalai, Madurai, Tamil Nadu 625014, India', '9.985165419887522', '78.14253330230713', '11\'0#11\'0', '16\'0#11\'0', '');

-- --------------------------------------------------------

--
-- Table structure for table `sketchfab`
--

CREATE TABLE `sketchfab` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sketchfab`
--

INSERT INTO `sketchfab` (`id`, `name`, `area`, `url`) VALUES
(1, 'KAS01', 'Shanmuga Nagar 3BHK', 'cb4c7c24dbf34f51a1e87e688e6a6e08'),
(2, 'KAS02', 'Shanmuga Nagar 3BHK', 'aa04482fe07b43e98be6cf229572b823'),
(3, 'KAS03', 'Shanmuga Nagar 3BHK', '745489a6a15d4d6fbe32b485e323a737'),
(4, 'KAS04', 'Shanmuga Nagar 3BHK', '48b7a3816e9046a6866040fe6a71bfb7'),
(5, 'KAS05', 'Vel Nagar 3BHK', 'a50e2479094a499299781570048427ff'),
(6, 'KAS06', 'Vel Nagar 3BHK', 'e287afac1e4f4079ab6f36bf004934ce'),
(7, 'KAS07', 'Shanmuga Nagar 3BHK', '600db0afc44249a39ae66831aca86727'),
(8, 'KAS08', 'Shanmuga Nagar 3BHK', 'ab5b96ff614644528c3996d26f193f58');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL COMMENT 'Upload Date',
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Unblock, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `file_name`, `created`, `modified`, `status`) VALUES
(42, '0051.jpg', '2018-06-27 10:09:02', '2018-06-27 10:09:02', 1),
(43, 'ARUN.jpg', '2018-06-27 10:14:30', '2018-06-27 10:14:30', 1),
(44, '001_K.jpg', '2018-06-27 10:18:56', '2018-06-27 10:18:56', 1),
(46, '003_(4).jpg', '2018-06-27 10:47:43', '2018-06-27 10:47:43', 1),
(47, '003_(4)1.jpg', '2018-06-27 10:50:45', '2018-06-27 10:50:45', 1),
(48, 'Theppakulam_logo_(2).jpg', '2018-06-27 10:53:25', '2018-06-27 10:53:25', 1),
(49, 'MC12_03_Shopping_complex_Night.jpg', '2018-06-27 10:54:46', '2018-06-27 10:54:46', 1),
(50, '_tmpTheppakulam_.jpg', '2018-06-27 10:56:16', '2018-06-27 10:56:16', 1),
(52, 'dfs.jpg', '2018-06-27 11:06:38', '2018-06-27 11:06:38', 1),
(53, '0052.jpg', '2018-06-27 11:21:20', '2018-06-27 11:21:20', 1),
(54, '1_(2).jpg', '2018-06-27 11:21:43', '2018-06-27 11:21:43', 1),
(55, 'TC12_10_Kumar.jpg', '2018-06-27 11:39:34', '2018-06-27 11:39:34', 1),
(57, 'TC12_12(Manikanda_pandian)5.jpg', '2018-06-27 11:40:08', '2018-06-27 11:40:08', 1),
(58, 'TC12_08(2).jpg', '2018-06-27 11:40:33', '2018-06-27 11:40:33', 1),
(59, 'TC11_03_Mr_Balakrishnan.jpg', '2018-06-27 11:40:48', '2018-06-27 11:40:48', 1),
(60, 'Mr_Prabu2.jpg', '2018-06-27 11:42:57', '2018-06-27 11:42:57', 1),
(61, 'Mr_Narayanan.jpg', '2018-06-27 11:43:12', '2018-06-27 11:43:12', 1),
(62, 'MC12_02.jpg', '2018-06-27 11:43:25', '2018-06-27 11:43:25', 1),
(63, '001.jpg', '2018-06-27 11:58:01', '2018-06-27 11:58:01', 1),
(64, '1_(2)1.jpg', '2018-06-27 11:58:13', '2018-06-27 11:58:13', 1),
(65, '1_(3).jpg', '2018-06-27 11:58:35', '2018-06-27 11:58:35', 1),
(66, '1_(4).jpg', '2018-06-27 11:58:48', '2018-06-27 11:58:48', 1),
(67, '11.jpg', '2018-06-27 12:02:38', '2018-06-27 12:02:38', 1),
(68, '0021.jpg', '2018-06-27 12:02:38', '2018-06-27 12:02:38', 1),
(69, '2.jpg', '2018-06-27 12:02:38', '2018-06-27 12:02:38', 1),
(70, '003.jpg', '2018-06-27 12:02:38', '2018-06-27 12:02:38', 1),
(71, '007_(2).jpg', '2018-06-27 12:02:38', '2018-06-27 12:02:38', 1),
(72, 'ar.jpg', '2018-06-27 12:20:34', '2018-06-27 12:20:34', 1),
(73, 'b2f66c4c-2a95-4ca9-a700-ce9cbdf28233.jpg', '2018-06-27 12:20:34', '2018-06-27 12:20:34', 1),
(74, 'maha.jpg', '2018-06-27 12:20:34', '2018-06-27 12:20:34', 1),
(75, 'haaji.jpg', '2018-06-27 12:23:07', '2018-06-27 12:23:07', 1),
(76, 'MAHALINGAM_greenl.jpg', '2018-06-27 12:24:31', '2018-06-27 12:24:31', 1),
(77, 'othakadai_East_facing2.jpg', '2018-06-27 12:24:31', '2018-06-27 12:24:31', 1),
(78, 'photo_2018-06-27_12-21-02.jpg', '2018-06-27 12:24:31', '2018-06-27 12:24:31', 1),
(79, 'photo_2018-06-27_12-21-05.jpg', '2018-06-27 12:24:31', '2018-06-27 12:24:31', 1),
(80, 'photo_2018-06-27_12-21-08.jpg', '2018-06-27 12:24:31', '2018-06-27 12:24:31', 1),
(81, 'poorna_raja.jpg', '2018-06-27 12:24:31', '2018-06-27 12:24:31', 1),
(82, 'tirpur_over_view.jpg', '2018-06-27 12:24:31', '2018-06-27 12:24:31', 1),
(84, '12.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(85, '21.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(86, '3.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(87, '5.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(88, '6.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(89, '7.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(90, '8.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(91, '9.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(92, '10.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(93, '111.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(94, '121.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(95, '13.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(96, '14.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1),
(97, '15.jpg', '2018-06-27 13:42:23', '2018-06-27 13:42:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload_image`
--

CREATE TABLE `upload_image` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Upload Date',
  `c_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upload_image`
--

INSERT INTO `upload_image` (`id`, `file_name`, `created_at`, `c_id`) VALUES
(68, '005.jpg', '2018-01-12 15:59:05', 12),
(69, 'balaiya.jpg', '2018-01-17 12:16:57', 13),
(70, 'unnamed.jpg', '2018-01-29 13:36:37', 15),
(71, 'BALA_01_(2).jpg', '2018-01-31 11:21:57', 18),
(72, 'photo_2018-02-21_10-45-50.jpg', '2018-02-21 09:38:53', 19),
(74, 'prabhu_(2).jpg', '2018-06-02 12:56:33', 23),
(83, 'APPARTMENT_GROUND_FLOOR-1.jpg', '2018-07-28 04:58:12', 28),
(97, '021.jpg', '2018-08-06 11:09:50', 30),
(98, 'com_blue.jpg', '2018-08-06 12:49:57', 27),
(99, 'MR_SARAVANAN_CORREC_TC_07_16.jpg', '2018-08-09 06:04:17', 31),
(100, 'photo_2018-08-09_19-12-18.jpg', '2018-08-09 13:42:46', 33);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin123', '1'),
(2, 'emp', 'employee', 'kas123', '2');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `url`, `date`) VALUES
(4, 'KAS01', '236400163', '2017-12-08 13:25:40'),
(5, 'KAS02', '236399390', '2017-12-08 13:25:52'),
(6, 'KAS03', '236399337', '2017-12-08 13:26:03'),
(7, 'KAS04', '236399310', '2017-12-08 13:26:15'),
(8, 'KAS05', '236399256', '2017-12-08 13:26:28'),
(9, 'KAS06', '236399198', '2017-12-08 13:26:40'),
(10, 'KAS07', '236399175', '2017-12-08 13:26:51'),
(11, 'KAS08', '236399133', '2017-12-08 13:27:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_prop`
--
ALTER TABLE `land_prop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectimages`
--
ALTER TABLE `projectimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectmaincat`
--
ALTER TABLE `projectmaincat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectprocess`
--
ALTER TABLE `projectprocess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectsubcat`
--
ALTER TABLE `projectsubcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_image`
--
ALTER TABLE `project_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_item`
--
ALTER TABLE `project_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_submit`
--
ALTER TABLE `property_submit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sketchfab`
--
ALTER TABLE `sketchfab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_image`
--
ALTER TABLE `upload_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `floor`
--
ALTER TABLE `floor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `land_prop`
--
ALTER TABLE `land_prop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projectimages`
--
ALTER TABLE `projectimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectmaincat`
--
ALTER TABLE `projectmaincat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectprocess`
--
ALTER TABLE `projectprocess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectsubcat`
--
ALTER TABLE `projectsubcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_image`
--
ALTER TABLE `project_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `project_item`
--
ALTER TABLE `project_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_submit`
--
ALTER TABLE `property_submit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sketchfab`
--
ALTER TABLE `sketchfab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `upload_image`
--
ALTER TABLE `upload_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
