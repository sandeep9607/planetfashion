-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 06:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `planet`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`banner_id` int(11) NOT NULL,
  `banner_title` varchar(50) NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `banner_status` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_image`, `banner_status`, `created`, `updated`) VALUES
(8, 'summer', 'f0f97ed819ebd34f2c924a9b2a1ce375.jpg', 1, '2015-05-02 04:35:55', '2015-05-02 04:35:55'),
(9, 'summer1', '6585e49870752eef52a9bab605ad976b.jpg', 1, '2015-05-02 04:36:39', '2015-05-02 04:36:39'),
(10, 'summer1', '01a2b59eb15e88e1af5551bc1a3f67a4.jpg', 1, '2015-05-02 04:36:40', '2015-05-02 04:36:40'),
(11, 'summer1', '917de302987aaf1eae40c833fbcfa0d9.jpg', 1, '2015-05-02 04:36:40', '2015-05-02 04:36:40'),
(12, 'summer', 'bd1a3defeaee61df3e1a2ca003876f16.jpg', 1, '2015-05-02 04:38:19', '2015-05-02 04:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(3) NOT NULL,
  `menu_id` int(3) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_url` varchar(50) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `parent_id` int(3) NOT NULL,
  `route` int(3) NOT NULL,
  `category_status` tinyint(1) NOT NULL DEFAULT '0',
  `category_created` datetime NOT NULL,
  `category_updated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `menu_id`, `category_name`, `category_url`, `category_desc`, `parent_id`, `route`, `category_status`, `category_created`, `category_updated`) VALUES
(3, 2, 'New', '', 'This is new product ', 0, 0, 1, '2015-03-22 00:00:00', '2015-03-22 00:00:00'),
(4, 2, 'Clothing', '', 'All Clothing', 0, 0, 1, '2015-03-22 00:00:00', '2015-03-22 00:00:00'),
(5, 2, 'Formal Clothes', '', 'Formal dresh for men', 0, 0, 1, '2015-03-22 00:00:00', '2015-03-22 00:00:00'),
(10, 3, 'new this week', 'hgkjg', 'msdbafb', 0, 0, 1, '2015-03-11 00:00:00', '2015-03-11 00:00:00'),
(11, 3, 'western clothing', '', 'msdbafb', 0, 0, 1, '2015-03-11 00:00:00', '2015-03-11 00:00:00'),
(12, 3, 'ethnic wear', '', 'gjhgbkj', 0, 0, 0, '2015-03-19 00:00:00', '2015-03-20 00:00:00'),
(65, 2, 'casual shirts', 'newcasual-shirts', 'This is casual shirts category', 3, 50, 1, '2015-04-12 22:31:06', '2015-04-12 22:31:06'),
(66, 2, 'jeans', 'jeans', 'This is jeans category', 3, 51, 1, '2015-04-12 22:31:52', '2015-04-12 22:31:52'),
(68, 2, 'polos & tees', 'polos-tees', 'This is polos and tees category of men', 4, 53, 1, '2015-04-12 22:34:29', '2015-04-12 22:34:29'),
(69, 2, 'casual shirts', 'casual-shirts', 'casual shirts of category', 4, 54, 1, '2015-04-12 22:38:32', '2015-04-12 22:38:32'),
(70, 4, 'fvzvxcbzcvb', 'dvsvxcvxc', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 36, 58, 1, '2015-04-19 10:58:17', '2015-04-19 10:58:17'),
(71, 4, 'sdssssssssssss', 'sssssssssssss', 'ssssssssssssssssssss', 35, 59, 0, '2015-04-19 10:58:36', '2015-04-19 10:58:36'),
(72, 2, 'Casual Trauser', 'casual-trauser', 'This category for mens trauser', 4, 71, 1, '2015-04-26 07:58:55', '2015-04-26 07:58:55'),
(73, 2, 'Jeans', 'jeans1', 'This category for mens jeans...', 4, 72, 1, '2015-04-26 07:59:37', '2015-04-26 07:59:37'),
(74, 2, 'Formal shirts', 'formal-shirts', 'Formal shirtsfor mens....', 5, 73, 1, '2015-04-26 08:04:29', '2015-04-26 08:04:29'),
(75, 2, 'Formal Trauser', 'formal-trauser', 'Formal shirtsfor trauser....', 5, 74, 1, '2015-04-26 08:05:53', '2015-04-26 08:05:53'),
(76, 4, 'Boys Apparel', 'boysapparel', 'The new Boys Apparel', 0, 75, 1, '2015-04-26 08:09:03', '2015-04-26 08:09:03'),
(77, 4, 'Shirts', 'kids-shirts', 'New shirts for kids...', 76, 76, 1, '2015-04-26 08:10:21', '2015-04-26 08:10:21'),
(78, 4, 'Jeans & Trausers', 'jeans-trausers', 'Jeans and Trausers for kids...', 76, 77, 1, '2015-04-26 08:12:53', '2015-04-26 08:12:53'),
(79, 4, 'Twin Set', 'twin-set', 'Twin set for kids...', 76, 78, 1, '2015-04-26 08:14:44', '2015-04-26 08:14:44'),
(80, 4, 'Kurtas', 'kurtas', 'kurtas for mens', 76, 79, 1, '2015-04-26 08:15:33', '2015-04-26 08:15:33'),
(81, 4, 'Shorts', 'shorts', 'shorts for kids...', 76, 80, 1, '2015-04-26 08:16:53', '2015-04-26 08:16:53'),
(82, 4, 'Girls Apparel', 'girls-cloths', 'Tops cloths for girls...', 0, 81, 1, '2015-04-26 08:26:53', '2015-04-26 08:26:53'),
(83, 4, 'Tops', 'girls-tops', 'new design tops for girls', 82, 82, 1, '2015-04-26 08:28:06', '2015-04-26 08:28:06'),
(84, 4, 'Dresses', 'girls-dresses', 'Dressess for girls', 82, 83, 1, '2015-04-26 08:30:25', '2015-04-26 08:30:25'),
(85, 4, 'Tops & Twins', 'tops-twins', 'Tops and Twins for girls', 82, 84, 1, '2015-04-26 08:32:05', '2015-04-26 08:32:05'),
(86, 4, 'Jeans', 'girls-jeans', 'Jeans for girls...', 82, 85, 1, '2015-04-26 08:33:16', '2015-04-26 08:33:16'),
(87, 3, 'Dresse', 'womens-dresses', 'Dressess for womens', 10, 86, 1, '2015-04-26 08:38:02', '2015-04-26 08:38:02'),
(89, 3, 'Jeans', 'womens-jeans', 'Jeans for womens', 10, 88, 1, '2015-04-26 09:04:07', '2015-04-26 09:04:07'),
(90, 3, 'Tops & Tees', 'tops-tees', 'Top and Tees for womens', 11, 89, 1, '2015-04-26 09:05:03', '2015-04-26 09:05:03'),
(91, 3, 'Shirts', 'womens-shirts', 'Shirts for womens', 11, 90, 1, '2015-04-26 09:05:55', '2015-04-26 09:05:55'),
(92, 3, 'Dresse', 'womens-dresses1', 'Western dress for womens', 11, 91, 1, '2015-04-26 09:06:56', '2015-04-26 09:06:56'),
(94, 3, 'Sarees', 'sarees', 'sarees for womwns...', 12, 93, 1, '2015-04-26 09:11:12', '2015-04-26 09:11:12'),
(95, 3, 'kurtis & suits', 'kurtis-suites', 'kurtis and suites for womens', 12, 94, 1, '2015-04-26 09:13:19', '2015-04-26 09:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
`page_id` int(11) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `url_key` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `meta_key_word` varchar(100) NOT NULL,
  `meta_description` text NOT NULL,
  `page_status` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`page_id`, `page_title`, `url_key`, `content`, `meta_key_word`, `meta_description`, `page_status`, `created`, `updated`) VALUES
(19, 'About Us', 'page/pages/19', '<p>&nbsp;</p>\r\n<!--?php echo $title; ?-->\r\n<p>\r\n<script type="application/x-javascript">// <![CDATA[\r\naddEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); \r\nfunction hideURLbar()\r\n{ \r\n	window.scrollTo(0,1); \r\n}\r\n// ]]></script>\r\n</p>\r\n<!-- jQuery (necessary for Bootstrap''s JavaScript plugins) -->\r\n<p>&nbsp;</p>\r\n<!-- Custom Theme files --><!-- Custom Theme files --><!--webfont-->\r\n<div class="header">\r\n<div class="about">\r\n<div class="container">\r\n<div class="about_top">\r\n<div class="col-md-4 span1">\r\n<h3>Who We Are</h3>\r\n<img class="img-responsive" src="images/p2.jpg" alt="" />\r\n<h4>Sesequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce euismod.</h4>\r\n<p>Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor. Sereque sed dolor. Aliquam.</p>\r\n<p>Fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in.</p>\r\n</div>\r\n<div class="col-md-4 span1 span_2">\r\n<h3>History</h3>\r\n<h5>2005</h5>\r\n<p class="m_4">But I must explain to you how all this mistaken idea of denouncing pleasure and praisin</p>\r\n<h5>2006</h5>\r\n<p class="m_4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,</p>\r\n<h5>2012</h5>\r\n<p class="m_4">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>\r\n<h5>2014</h5>\r\n<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,</p>\r\n</div>\r\n<div class="col-md-4 span1">\r\n<h3>Opportunities</h3>\r\n<h4>Sesequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce euismod.</h4>\r\n<p>Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor. Sereque sed dolor. Aliquam.</p>\r\n<p>Fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in.</p>\r\n<h4>Sesequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Fusce euismod.</h4>\r\n<p>Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor. Sereque sed dolor. Aliquam.</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n<div class="about_bottom">\r\n<div class="col-md-6">\r\n<h3 class="m_3">Advantages</h3>\r\n<div class="feature about_box1">\r\n<h4>Ut wisi enim ad minim</h4>\r\n<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>\r\n</div>\r\n<div class="feature about_box1">\r\n<h4>Claritas est etiam processus</h4>\r\n<p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>\r\n</div>\r\n</div>\r\n<div class="col-md-6 span_3">\r\n<h3 class="m_3">Testimonials</h3>\r\n<ul class="about_box span_1">\r\n<ul class="about_box span_1">\r\n<li class="box_img"><img class="img-responsive" src="images/p9.jpg" alt="" /></li>\r\n<li class="box_desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</li>\r\n</ul>\r\n</ul>\r\n<h4>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h4>\r\n<ul class="about_box span_1">\r\n<ul class="about_box span_1">\r\n<li class="box_img"><img class="img-responsive" src="images/p11.jpg" alt="" /></li>\r\n<li class="box_desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</li>\r\n</ul>\r\n</ul>\r\n<h4>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h4>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="footer_bg">&nbsp;</div>\r\n<div class="footer">\r\n<div class="container">\r\n<div class="col-md-3 f_grid1">\r\n<h3>About</h3>\r\n<a href="#"><img src="images/logo.png" alt="" /></a>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,</p>\r\n</div>\r\n<div class="col-md-3 f_grid1 f_grid2">\r\n<h3>Follow Us</h3>\r\n<ul class="social">\r\n<li>\r\n<p class="m_3">Facebook</p>\r\n</li>\r\n<li>\r\n<p class="m_3">Twittter</p>\r\n</li>\r\n<li>\r\n<p class="m_3">Google</p>\r\n</li>\r\n<li>\r\n<p class="m_3">Linked In</p>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class="col-md-3 f_grid3">\r\n<h3>Contact Info</h3>\r\n<ul class="list">\r\n<li>\r\n<p>Phone : 1.800.254.5487</p>\r\n</li>\r\n<li>\r\n<p>Fax : 1.800.254.2548</p>\r\n</li>\r\n<li>\r\n<p>Email : <a href="mailto:info(at)fashionpress.com"> info(at)fashionpress.com</a></p>\r\n</li>\r\n</ul>\r\n<!--<ul class="list1">\r\n				<li><p>Aliquam augue a bibendum ipsum diam, semper porttitor libero elit egestas gravida, ut quam, nunc taciti</p></li>\r\n			</ul>-->\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n<div class="col-md-3 f_grid1 f_grid4">\r\n<h3>Customer Service</h3>\r\n<ul class="social">\r\n<li>\r\n<p class="m_3">Terms of payment</p>\r\n</li>\r\n<li>\r\n<p class="m_3">Terms of sale</p>\r\n</li>\r\n<li>\r\n<p class="m_3">Terms and conditions</p>\r\n</li>\r\n<li>\r\n<p class="m_3">Returns and Refunds</p>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="footer_bottom">\r\n<div class="container">\r\n<div class="cssmenu">\r\n<ul>\r\n<li class="active"><a href="login.html">Privacy Policy</a></li>\r\n.\r\n<li><a href="checkout.html">Terms of Service</a></li>\r\n.\r\n<li><a href="checkout.html">Creative Rights Policy</a></li>\r\n.\r\n<li><a href="login.html">Contact Us</a></li>\r\n.\r\n<li><a href="register.html">Support &amp; FAQ</a></li>\r\n</ul>\r\n</div>\r\n<div class="copy">\r\n<p>&copy; 2015 Copyright by <a href="http://kalikundhost.org/projects/planet" target="_blank">Planet Garment</a></p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', 'About', 'This is about page', 1, '2015-04-07 13:02:51', '2015-05-01 17:00:41'),
(21, 'services', 'page/pages/21', '<p><img style="width: 508.698px; height: 382px;" src="http://localhost/planet/ki-admin/../uploads/redactor/2c1c9ae1966c1701fce9ff887443ec55.jpg"></p><blockquote><p>Services Page<br></p></blockquote>', 'service page', 'This is service page', 1, '2015-04-30 05:08:08', '2015-04-30 05:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `contactdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `email`, `message`, `contactdate`) VALUES
(20, 'kishan yadav', '9725806146', 'sandeep9607@gmail.com', 'hello sir,\r\nI want to become wholesaler..', '2015-04-26 04:13:12'),
(21, 'Rajesh', '9725806146', 'rajesh320@gmail.com', 'Hello sir,\r\nI want to return product I purchase from your website..\r\nIs there any solution', '2015-05-01 09:57:35'),
(22, 'kiran kotwal', '8155881165', 'kirankotwal360@gmail.com', 'Hello sir,\r\nI want purchase a product from your website.', '2015-05-01 09:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `email`, `password`, `lastlogin`) VALUES
(0, 'Planet', 'Fashion', 'sandeep9607@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2015-05-02 11:33:08'),
(15, 'kiran', 'kotwal', 'kirankotwal360@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2015-05-02 11:33:08'),
(17, 'sreenath', 'chakinala', 'sreenth@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2015-05-02 11:33:08'),
(18, 'mahesh', 'sonar', 'mahesh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2015-05-02 11:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`menu_id` int(3) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `menu_url` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_url`, `status`) VALUES
(2, 'Men''s', '', 0),
(3, 'Women''s', '', 0),
(4, 'kids''s', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`news_id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_desc` text NOT NULL,
  `news_image` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `news_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_desc`, `news_image`, `created`, `updated`, `news_status`) VALUES
(58, 'offers', 'Can I keep offers from appearing in my News Feed? You can keep a ... Why wasn''t the offer I claimed accepted when I took it into the business? Offers aren''t ...', '9e5a88bb06158f1bc5c068465f5e156a.gif', '2015-04-27 09:14:42', '2015-04-27 09:14:42', 1),
(60, 'offers', 'Can I keep offers from appearing in my News Feed? You can keep a ...\r\nWhy wasn''t the offer I claimed accepted when I took it into the\r\nbusiness? Offers aren''t ...', 'b8a1a1ac613094c1531e13e0d648e1d9.jpg', '2015-04-27 09:25:19', '2015-04-27 09:25:19', 1),
(61, 'offers', 'Can I keep offers from appearing in my News Feed? You can keep a ...\r\nWhy wasn''t the offer I claimed accepted when I took it into the\r\nbusiness? Offers aren''t ...', 'a7eb60d913a0195093de4cc5e0303953.jpg', '2015-04-27 09:25:52', '2015-04-27 09:25:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(10) unsigned NOT NULL,
  `order_number` int(11) NOT NULL,
  `u_id` int(9) unsigned DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `ordered_on` datetime NOT NULL,
  `shipped_on` datetime NOT NULL,
  `total` float(10,2) NOT NULL,
  `subtotal` float(10,2) NOT NULL,
  `shipping` float(10,2) NOT NULL,
  `shipping_notes` text NOT NULL,
  `shipping_method` tinytext NOT NULL,
  `notes` text,
  `payment_info` text NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ship_firstname` varchar(255) DEFAULT NULL,
  `ship_lastname` varchar(255) DEFAULT NULL,
  `ship_email` varchar(255) DEFAULT NULL,
  `ship_phone` varchar(40) DEFAULT NULL,
  `ship_address1` varchar(255) DEFAULT NULL,
  `ship_address2` varchar(255) DEFAULT NULL,
  `ship_city` varchar(255) DEFAULT NULL,
  `ship_zip` varchar(11) DEFAULT NULL,
  `ship_zone` varchar(255) DEFAULT NULL,
  `bill_firstname` varchar(255) DEFAULT NULL,
  `bill_lastname` varchar(255) DEFAULT NULL,
  `bill_email` varchar(255) DEFAULT NULL,
  `bill_phone` varchar(40) DEFAULT NULL,
  `bill_address1` varchar(255) DEFAULT NULL,
  `bill_address2` varchar(255) DEFAULT NULL,
  `bill_city` varchar(255) DEFAULT NULL,
  `bill_zip` varchar(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `u_id`, `status`, `ordered_on`, `shipped_on`, `total`, `subtotal`, `shipping`, `shipping_notes`, `shipping_method`, `notes`, `payment_info`, `company`, `firstname`, `lastname`, `phone`, `email`, `ship_firstname`, `ship_lastname`, `ship_email`, `ship_phone`, `ship_address1`, `ship_address2`, `ship_city`, `ship_zip`, `ship_zone`, `bill_firstname`, `bill_lastname`, `bill_email`, `bill_phone`, `bill_address1`, `bill_address2`, `bill_city`, `bill_zip`) VALUES
(1, 21474836, NULL, 'Shipped', '2015-04-09 06:27:05', '2015-04-30 15:09:42', 0.00, 200.00, 0.00, '0', '0', NULL, '', 'kalikund', 'sandeep', 'maurya', '8401244450', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '8401244450', 'jghj hgkjhjhjk', 'kjjhkjhkjhjk', 'Surat', '394215', 'AN', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '8401244450', 'jghj hgkjhjhjk', 'kjjhkjhkjhjk', 'Surat', '394215'),
(92, 21474847, 18, 'Cancelled', '2015-05-01 07:19:40', '2015-05-01 16:09:45', 980.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'ganesh nagar-2', '0', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'ganesh nagar-2', '0', 'surat', '394210'),
(94, 21474849, 17, 'Delivered', '2015-05-01 08:27:34', '2015-05-01 16:10:16', 390.00, 0.00, 0.00, '', '', NULL, '', NULL, 'Anant', 'Jaiswal', '9725806146', 'jaiswalanant@gmail.com', 'Anant', 'Jaiswal', 'jaiswalanant@gmail.com', '9725806146', 'sachin GRDC', '0', 'surat', '394210', NULL, 'Anant', 'Jaiswal', 'jaiswalanant@gmail.com', NULL, 'sachin GRDC', '0', 'surat', '394210'),
(78, 21474837, 18, 'Shipped', '2015-04-27 06:26:19', '2015-04-30 15:09:42', 4500.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'ganesh nagar 2', '0', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'ganesh nagar 2', '0', 'surat', '394210'),
(79, 21474838, 18, 'Shipped', '2015-04-27 06:33:52', '2015-04-30 15:09:42', 4500.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'ggggggggggggg', '0', 'ggggggggggggggg', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'ggggggggggggg', '0', 'ggggggggggggggg', '394210'),
(80, 21474839, 18, 'Shipped', '2015-04-27 17:44:38', '2015-04-30 15:09:42', 4500.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'nnnnnnnnnnnnn', '0', 'mmmmmmmmmm', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'nnnnnnnnnnnnn', '0', 'mmmmmmmmmm', '394210'),
(81, 21474840, 18, 'Cancelled', '2015-04-29 08:50:10', '2015-05-01 16:09:45', 4500.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'ganesh nagar-2', '0', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'ganesh nagar-2', '0', 'surat', '394210'),
(87, 21474842, 18, 'Cancelled', '2015-04-30 09:31:54', '2015-05-01 16:09:45', 4500.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'ganesh nagar-2', '0', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'ganesh nagar-2', '0', 'surat', '394210'),
(86, 21474841, 18, 'Delivered', '2015-04-29 18:35:35', '2015-05-01 21:58:07', 4500.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'kjhkjhkjh kh kh', '0', 'hjghjghjgjk', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'kjhkjhkjh kh kh', '0', 'hjghjghjgjk', '394210'),
(88, 21474843, 18, 'Cancelled', '2015-04-30 11:20:35', '2015-05-01 16:09:45', 4500.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'sandeep dashj', '0', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'sandeep dashj', '0', 'surat', '394210'),
(89, 21474844, 18, 'Cancelled', '2015-04-30 11:57:05', '2015-05-01 16:09:45', 2480.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'gansh nagar -2', '0', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'gansh nagar -2', '0', 'surat', '394210'),
(90, 21474845, 18, 'Cancelled', '2015-04-30 15:31:27', '2015-05-01 16:09:45', 2480.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'ganesh nagar-2', '0', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'ganesh nagar-2', '0', 'surat', '394210'),
(91, 21474846, 18, 'Delivered', '2015-04-28 15:34:11', '2015-05-29 16:10:09', 1420.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'ganesh nagar-2', '0', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'ganesh nagar-2', '0', 'surat', '394210'),
(98, 21474850, 18, 'Order Placed', '2015-05-02 05:33:03', '0000-00-00 00:00:00', 1620.00, 0.00, 0.00, '', '', NULL, '', NULL, 'sandeep', 'maurya', '9725806146', 'sandeep9607@gmail.com', 'sandeep', 'maurya', 'sandeep9607@gmail.com', '9725806146', 'ganesh nagar-2', 'godadara', 'surat', '394210', NULL, 'sandeep', 'maurya', 'sandeep9607@gmail.com', NULL, 'ganesh nagar-2', 'godadara', 'surat', '394210'),
(99, 21474851, 17, 'Order Placed', '2015-05-02 05:40:38', '0000-00-00 00:00:00', 1880.00, 0.00, 0.00, '', '', NULL, '', NULL, 'Anant', 'Jaiswal', '9725806146', 'jaiswalanant@gmail.com', 'Anant', 'Jaiswal', 'jaiswalanant@gmail.com', '9725806146', 'sachin GRDC', 'sachin', 'surat', '394210', NULL, 'Anant', 'Jaiswal', 'jaiswalanant@gmail.com', NULL, 'sachin GRDC', 'sachin', 'surat', '394210'),
(100, 21474852, 20, 'Order Placed', '2015-05-02 05:43:23', '0000-00-00 00:00:00', 2760.00, 0.00, 0.00, '', '', NULL, '', NULL, 'Bipin', 'mishra', '8460361478', 'bipin@gmail.com', 'Bipin', 'mishra', 'bipin@gmail.com', '8460361478', 'sivaji nagar', 'limbayat', 'surat', '394210', NULL, 'Bipin', 'mishra', 'bipin@gmail.com', NULL, 'sivaji nagar', 'limbayat', 'surat', '394210');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
`id` int(9) unsigned NOT NULL,
  `order_id` int(9) unsigned NOT NULL,
  `product_id` int(9) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `contents` longtext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `contents`) VALUES
(34, 75, 5, 1, 'casual-shirts'),
(35, 76, 2, 1, 'adidas-original black'),
(36, 77, 1, 1, 'adidas original'),
(37, 78, 5, 1, 'casual-shirts'),
(38, 79, 1, 1, 'adidas original'),
(39, 80, 2, 1, 'adidas-original black'),
(40, 81, 4, 10, 'shirts white'),
(41, 81, 2, 5, 'adidas-original black'),
(42, 82, 1, 1, 'adidas original'),
(43, 84, 5, 1, 'casual-shirts'),
(44, 85, 1, 10, 'adidas original'),
(45, 86, 4, 1, 'shirts white'),
(46, 87, 2, 2, 'adidas-original black'),
(47, 88, 1, 2, 'adidas original'),
(48, 89, 5, 2, 'casual-shirts'),
(49, 90, 5, 2, 'casual-shirts'),
(50, 91, 1, 1, 'adidas original'),
(51, 92, 2, 1, 'adidas-original black'),
(52, 93, 3, 1, 'adidas-original round neck'),
(53, 94, 7, 1, 'kids shirts'),
(54, 95, 2, 1, 'adidas-original black'),
(55, 98, 13, 1, 'sarees'),
(56, 99, 14, 2, 'Boy shirts'),
(57, 99, 12, 1, 'tops'),
(58, 99, 9, 1, 'casual shirts'),
(59, 100, 4, 3, 'shirts white');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`p_id` int(5) NOT NULL,
  `category_id` int(3) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `route_id` int(5) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  `p_images` varchar(100) NOT NULL,
  `p_price` int(5) NOT NULL,
  `p_saleprice` int(5) NOT NULL,
  `p_quantity` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `p_created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `category_id`, `p_name`, `slug`, `route_id`, `short_desc`, `long_desc`, `p_images`, `p_price`, `p_saleprice`, `p_quantity`, `status`, `p_created`) VALUES
(1, 68, 'adidas original', 'adidas-original', 66, 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.', 'e4b2b446bf6759c6a03d5bab02ad3cae.jpg', 1425, 1420, 13, 1, '2015-04-25 10:44:32'),
(2, 68, 'adidas-original black', 'adidas-original-black', 67, 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.', 'e700ee89b8ba1fda590d36aaab942aa1.jpg', 1000, 980, 12, 1, '2015-04-25 10:45:41'),
(3, 68, 'adidas-original round neck', 'adidas-round-neck', 68, 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.', '5ffca233453fbe34ba53d50eee37b011.jpg', 1456, 1450, 12, 1, '2015-04-25 10:47:06'),
(4, 69, 'shirts white', 'shirt-white', 69, 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.', '770d9bf892f3ecb8e438f9f11c9f0e39.jpg', 950, 920, 13, 1, '2015-04-25 10:47:55'),
(5, 69, 'casual-shirts', 'shirt-black', 70, 'To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template', 'To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current templateTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template', '1c2b9dbaa3a882e03b174c5b1735a3b4.jpg', 1244, 1240, 12, 1, '2015-04-25 10:53:57'),
(16, 68, 'Rigo black T-Shirt', 'rigo-black', 105, 'Black coloured solid T-shirt for men by Rigo. Crafted from cotton this full-sleeved T-shirt has crew neck and comes in slim fit.', 'overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current .\r\noverall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery .', 'bb2718f65f728643d683cffcd39ba846.jpg', 620, 599, 12, 1, '2015-05-02 06:47:26'),
(17, 68, 'Phosphorus Maroon T-shirt', 'phosphorus-maroon', 106, 'Check out this maroon coloured polo T-shirt from Phosphorus, which will be a trendy pick for casual occasions. This polo T-shirt has an attractive design and is made from cotton fabric. Moreover, it is tailored in regular fit and will keep you at ease all day long.', 'Check out this maroon coloured polo T-shirt from Phosphorus, which will be a trendy pick for casual occasions. This polo T-shirt has an attractive design and is made from cotton fabric. Moreover, it is tailored in regular fit and will keep you at ease all day long. Check out this maroon coloured polo T-shirt from Phosphorus, which will be a trendy pick for casual occasions. This polo T-shirt has an attractive design and is made from cotton fabric. Moreover, it is tailored in regular fit and will keep you at ease all day long.', '64ac4a904bc9c8e450c9b38c7f8ec41f.jpg', 830, 795, 12, 1, '2015-05-02 06:49:55'),
(18, 68, 'Phosphorus Grey T-shirt', 'phosphorus-grey', 107, 'Pop champagne and fake like a billionaire adorning this grey coloured, regular-fit T-shirt from the house of Phosphorus. Soft texture of jersey and classic stitching makes this T-shirt the best option for a brunch. Work hard and play harder as you party through the night in this utterly comfortable T-shirt.', 'T-shirt Pop champagne and fake like a billionaire adorning this grey coloured, regular-fit T-shirt from the house of Phosphorus. Soft texture of jersey and classic stitching makes this T-shirt the best option for a brunch. Work hard and play harder as you party through the night in this utterly comfortable T-shirt.', 'c817b4ab60205efa9a1860c45162b7dc.jpg', 610, 599, 14, 1, '2015-05-02 08:04:53'),
(19, 87, 'Vanca Fuchsia Dress', 'vanca-fuchsia', 108, 'A stylish update on the sartorial look when you wear this fuchsia coloured dress by The Vanca. Made of premium quality cotton voile, this dress is high on comfort. Team it up with high heels and be the talk of the town.', 'A stylish update on the sartorial look when you wear this fuchsia coloured dress by The Vanca. Made of premium quality cotton voile, this dress is high on comfort. Team it up with high heels and be the talk of the town. A stylish update on the sartorial look when you wear this fuchsia coloured dress by The Vanca. Made of premium quality cotton voile, this dress is high on comfort. Team it up with high heels and be the talk of the town.', '5f7693297992d02e0aab7a9bafb27b7b.jpg', 1290, 1275, 15, 1, '2015-05-02 08:13:01'),
(20, 87, 'Harpa Blue Printed Dress', 'harpa-blue', 109, 'Stow away your old stuff when you wear this blue coloured dress by Harpa. Made from cotton fabric, it is light in weight and will be soft against your skin. This sexy dress can be best teamed with matching sandals and a clutch.', 'Stow away your old stuff when you wear this blue coloured dress by Harpa. Made from cotton fabric, it is light in weight and will be soft against your skin. This sexy dress can be best teamed with matching sandals and a clutch.Stow away your old stuff when you wear this blue coloured dress by Harpa. Made from cotton fabric, it is light in weight and will be soft against your skin. This sexy dress can be best teamed with matching sandals and a clutch.', '93ec40bcd6e725fec9ad5de44a6c0073.jpg', 1220, 1190, 19, 1, '2015-05-02 08:15:59'),
(21, 87, 'Fabdeal Orange Embroidered Dresses', 'febdeal-orange', 110, 'Flaunt sartorial elegance wearing orange coloured kurta by Fabdeal. Look classy and stylish in this piece and revel in the comfort of the soft georgette fabric. This attractive kurta will surely fetch you compliments for your rich sense of style.', 'Flaunt sartorial elegance wearing orange coloured kurta by Fabdeal. Look classy and stylish in this piece and revel in the comfort of the soft georgette fabric. This attractive kurta will surely fetch you compliments for your rich sense of style.Flaunt sartorial elegance wearing orange coloured kurta by Fabdeal. Look classy and stylish in this piece and revel in the comfort of the soft georgette fabric. This attractive kurta will surely fetch you compliments for your rich sense of style.', 'a63f1e068ca5505d7b045eda38cc480e.jpg', 1750, 1720, 19, 1, '2015-05-02 08:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
`image_id` int(11) NOT NULL,
  `p_id` int(5) NOT NULL,
  `p_images` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`image_id`, `p_id`, `p_images`, `created`, `updated`) VALUES
(16, 16, '100199cc8f41a8c8110c04ddafd55c4c.jpg', '2015-05-02 03:28:01', '2015-05-02 03:28:01'),
(17, 16, '1d35ce91992e4d9052d8a638745f0749.jpg', '2015-05-02 03:28:01', '2015-05-02 03:28:01'),
(18, 16, '5fbbeaa2bf8275e046ab5ab49b157cc5.jpg', '2015-05-02 03:28:01', '2015-05-02 03:28:01'),
(19, 16, '6cb5dcf547bb020e9d319725b8450745.jpg', '2015-05-02 03:28:01', '2015-05-02 03:28:01'),
(20, 17, '7151d28e26e490b567a92e0240ecad2e.jpg', '2015-05-02 04:24:17', '2015-05-02 04:24:17'),
(21, 17, '92cd07824d7e5651f83f3b2146c00883.jpg', '2015-05-02 04:24:17', '2015-05-02 04:24:17'),
(22, 17, '7ebb37ee50e6f0a4b57c8807b89a5595.jpg', '2015-05-02 04:24:17', '2015-05-02 04:24:17'),
(23, 17, '2f28b402c6a773401ecf04cbc0fcdaa6.jpg', '2015-05-02 04:24:17', '2015-05-02 04:24:17'),
(24, 17, 'b81ccd7cc11658b267698599a587685b.jpg', '2015-05-02 04:24:17', '2015-05-02 04:24:17'),
(25, 18, '4d980149e4112bffa511c9508f92e12b.jpg', '2015-05-02 04:35:15', '2015-05-02 04:35:15'),
(26, 18, '1958061bbd70c3902974af51f348dc4e.jpg', '2015-05-02 04:35:16', '2015-05-02 04:35:16'),
(27, 18, 'a4d06a918c2e9ba01916d6a98e7e062a.jpg', '2015-05-02 04:35:16', '2015-05-02 04:35:16'),
(28, 18, 'a54c4e0ec153c6fe94206e0ac3f78a36.jpg', '2015-05-02 04:35:16', '2015-05-02 04:35:16'),
(29, 18, '73debb4e2a21629dc85041873e71e0be.jpg', '2015-05-02 04:35:16', '2015-05-02 04:35:16'),
(30, 19, '25d2ce5a42a33b7dab06696b0a16ab1d.jpg', '2015-05-02 04:43:25', '2015-05-02 04:43:25'),
(31, 19, 'cc133266a9fcc0bd02d40940845d2f03.jpg', '2015-05-02 04:43:26', '2015-05-02 04:43:26'),
(32, 19, 'b8c6226ad56b187879757ba087fbae69.jpg', '2015-05-02 04:43:26', '2015-05-02 04:43:26'),
(33, 19, '51b4f8b758d56afc87220db046f8ff36.jpg', '2015-05-02 04:43:26', '2015-05-02 04:43:26'),
(34, 20, '434c02c970596118f5635d0f8aea8f5c.jpg', '2015-05-02 04:46:15', '2015-05-02 04:46:15'),
(35, 20, '6cbeada39a7991de8a3cca1e72295e45.jpg', '2015-05-02 04:46:15', '2015-05-02 04:46:15'),
(36, 20, 'eaea965c72c43ea6d2d33cba422a1dfb.jpg', '2015-05-02 04:46:15', '2015-05-02 04:46:15'),
(37, 20, 'bc995bbc656fe2ee626c555f992b5db1.jpg', '2015-05-02 04:46:15', '2015-05-02 04:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `recent_activity`
--

CREATE TABLE IF NOT EXISTS `recent_activity` (
`recent_id` int(1) NOT NULL,
  `recent_visitors` int(5) NOT NULL,
  `recent_users` int(5) NOT NULL,
  `recent_orders` int(5) NOT NULL,
  `recent_inquiry` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent_activity`
--

INSERT INTO `recent_activity` (`recent_id`, `recent_visitors`, `recent_users`, `recent_orders`, `recent_inquiry`) VALUES
(1, 1, 3, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
`id` int(9) unsigned NOT NULL,
  `slug` varchar(255) NOT NULL,
  `route` varchar(32) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `slug`, `route`) VALUES
(50, 'newcasual-shirts', 'page/category/65'),
(51, 'jeans', 'page/category/66'),
(52, 'shorts-new', 'page/category/67'),
(53, 'polos-tees', 'page/category/68'),
(54, 'casual-shirts', 'page/category/69'),
(55, 'monteil-munero', 'page/product/16'),
(56, 'monteil-munero-blue', 'page/product/17'),
(57, 'puma-nevi-blue', 'page/product/18'),
(58, 'dvsvxcvxc', 'page/category/70'),
(59, 'sssssssssssss', 'page/category/71'),
(66, 'adidas-original', 'page/product/1'),
(67, 'adidas-original-black', 'page/product/2'),
(68, 'adidas-round-neck', 'page/product/3'),
(69, 'shirt-white', 'page/product/4'),
(70, 'shirt-black', 'page/product/5'),
(71, 'casual-trauser', 'page/category/72'),
(72, 'jeans1', 'page/category/73'),
(73, 'formal-shirts', 'page/category/74'),
(74, 'formal-trauser', 'page/category/75'),
(75, 'boysapparel', 'page/category/76'),
(76, 'kids-shirts', 'page/category/77'),
(77, 'jeans-trausers', 'page/category/78'),
(78, 'twin-set', 'page/category/79'),
(79, 'kurtas', 'page/category/80'),
(80, 'shorts', 'page/category/81'),
(81, 'girls-cloths', 'page/category/82'),
(82, 'girls-tops', 'page/category/83'),
(83, 'girls-dresses', 'page/category/84'),
(84, 'tops-twins', 'page/category/85'),
(85, 'girls-jeans', 'page/category/86'),
(86, 'womens-dresses', 'page/category/87'),
(87, 'shorts-jeckets', 'page/category/88'),
(88, 'womens-jeans', 'page/category/89'),
(89, 'tops-tees', 'page/category/90'),
(90, 'womens-shirts', 'page/category/91'),
(91, 'womens-dresses1', 'page/category/92'),
(92, 'sweat & shirts', 'page/category/93'),
(93, 'sarees', 'page/category/94'),
(94, 'kurtis-suites', 'page/category/95'),
(107, 'phosphorus-grey', 'page/product/18'),
(108, 'vanca-fuchsia', 'page/product/19'),
(109, 'harpa-blue', 'page/product/20'),
(110, 'febdeal-orange', 'page/product/21'),
(105, 'rigo-black', 'page/product/16'),
(106, 'phosphorus-maroon', 'page/product/17');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
`sale_id` int(6) NOT NULL,
  `u_id` int(6) NOT NULL,
  `p_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`u_id` int(11) NOT NULL,
  `u_firstname` varchar(30) NOT NULL,
  `u_lastname` varchar(30) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(32) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_mobile` varchar(10) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '1',
  `u_type` tinyint(1) NOT NULL DEFAULT '0',
  `discount` int(2) NOT NULL,
  `u_created_at` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_firstname`, `u_lastname`, `u_email`, `u_password`, `u_address`, `u_mobile`, `gender`, `u_type`, `discount`, `u_created_at`, `status`) VALUES
(17, 'Anant', 'Jaiswal', 'jaiswalanant@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '9725806146', 1, 0, 0, '2015-04-26', 1),
(18, 'sandeep', 'maurya', 'sandeep9607@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ganesh nagar-223', '9725806146', 1, 0, 100, '2015-04-26', 1),
(19, 'rajesh kumar', 'patel', 'rajeshpatel123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '9876543210', 1, 0, 0, '2015-05-01', 1),
(20, 'Bipin', 'mishra', 'bipin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '8460361478', 1, 0, 0, '2015-05-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
`id` int(6) NOT NULL,
  `u_id` int(6) NOT NULL,
  `p_id` int(6) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `u_id`, `p_id`, `created`) VALUES
(28, 18, 1, '2015-05-01 09:26:18'),
(29, 18, 9, '2015-05-01 09:28:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`,`menu_id`), ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
 ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`p_id`,`category_id`), ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
 ADD PRIMARY KEY (`image_id`,`p_id`), ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `recent_activity`
--
ALTER TABLE `recent_activity`
 ADD PRIMARY KEY (`recent_id`), ADD UNIQUE KEY `recent_id` (`recent_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
 ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `menu_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
MODIFY `id` int(9) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `recent_activity`
--
ALTER TABLE `recent_activity`
MODIFY `recent_id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
MODIFY `id` int(9) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `sale_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
