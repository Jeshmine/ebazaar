-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2017 at 05:10 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2028742_ebazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` text NOT NULL,
  `size` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(101, 'Women\'s Clothing'),
(102, 'Men\'s Clothing'),
(103, 'Phones & Tablets'),
(104, 'Computers & Laptops'),
(105, 'Consumer Electronics'),
(106, 'Jewelry & Watches'),
(107, 'Home & Garden'),
(108, 'Bags & Shoes'),
(109, 'Toys, Kids & Baby'),
(110, 'Sports & Outdoors'),
(111, 'Health & Beauty'),
(112, 'Automobiles & Motorcycles');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `commenter_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_validation`
--

CREATE TABLE `email_validation` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `code` int(11) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'FK to user_id',
  `follower_following_id` int(11) NOT NULL COMMENT 'FK to user_id',
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `creation_date` date NOT NULL,
  `notification_read` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `verification_id` int(11) NOT NULL,
  `card_no` int(20) NOT NULL,
  `security_code` text NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `seller_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `discounted_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `old_product_quantity` int(11) NOT NULL,
  `color` text NOT NULL,
  `product_condition` text NOT NULL,
  `description` text NOT NULL,
  `shipment_type` text NOT NULL,
  `inside_valley` int(11) DEFAULT NULL,
  `outside_valley` int(11) DEFAULT NULL,
  `handeling_time` tinyint(4) NOT NULL,
  `return_type` text NOT NULL,
  `return_day` text,
  `refund` text,
  `additional_policy` text,
  `creation_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `image1`, `image2`, `image3`, `image4`, `image5`, `seller_id`, `type_id`, `price`, `discounted_price`, `product_quantity`, `old_product_quantity`, `color`, `product_condition`, `description`, `shipment_type`, `inside_valley`, `outside_valley`, `handeling_time`, `return_type`, `return_day`, `refund`, `additional_policy`, `creation_date`, `status`) VALUES
(24, '2 Pcs Lovely Cute Mochi Cat Squishy Squeeze Kid Toy Slow Rising Fun Gifts', 'screenshot-contestimg.wish.com-2017-09-16-18-48-51-807.png', '5979ab044904642937b3016a--1-contest.jpg', 'screenshot-contestimg.wish.com-2017-09-16-18-46-40-769.png', 'screenshot-contestimg.wish.com-2017-09-16-18-56-32-791.png', 'screenshot-contestimg.wish.com-2017-09-16-18-56-53-792.png', 21, 10199, 200, 180, 10, 10, 'White', 'New', 'Material: TPR\r\nSize: 5.3*3.7*1.8cm\r\nQuantity: 2 pcs\r\nColor: As picture (color send randomly)\r\nApplicable age: More than 3 years old\r\nCondition: 100% New and high quality', 'free', 0, 0, 1, 'not', '', '', '', '2017-09-16', 1),
(25, 'New designs summer shoes hottest', 'zm23257a-new-designs-summer-shoes-2017-hottest (1).jpg', 'zm23257a-new-designs-summer-shoes-2017-hottest (2).jpg', 'zm23257a-new-designs-summer-shoes-2017-hottest (3).jpg', 'zm23257a-new-designs-summer-shoes-2017-hottest (4).jpg', 'zm23257a-new-designs-summer-shoes-2017-hottest (2).jpg', 22, 10352, 5000, 4000, 1, 0, 'Black', 'New', 'Latest shoes for women,..it is available in all the sizes', 'paid', 15, 100, 3, 'not', '', '', '', '2017-09-16', 1),
(26, 'Iphone 7', 'apple-iphone-7-gallery-img-3.jpg', 'iphone7-model-select-201703.jpg', 'apple-iphone-7-red-gallery-img-1.jpg', 'apple-iphone-7-gallery-img-5.jpg', 'iphone7-select-2016.png', 22, 10181, 120000, 90000, 1, 1, 'Black', 'Used', 'Dimensions	158.2 x 77.9 x 7.3 mm (6.23 x 3.07 x 0.29 in)\r\nSIM	Nano        -SIM\r\n 	                - IP67 certified - dust and water resistant\r\n                        - Water resistant up to 1 meter and 30 minutes\r\n                        - Apple Pay (Visa, MasterCard, AMEX certified)\r\nResolution	1080 x 1920 pixels (~401 ppi pixel density)\r\nOS	                iOS 10.0.1, upgradable to iOS 10.3.3\r\n\r\n\r\nCAMERA	\r\nPrimary	       Dual 12 MP, (28mm, f/1.8, OIS & 56mm, f/2.8), phase detection autofocus, 2x optical \r\n                       zoom, quad-LED (dual tone) flash, check quality\r\nFeatures	       1/3\" sensor size @ 28mm, 1/3.6\" sensor size @ 56mm, geo-tagging, simultaneous 4K \r\n                       video and 8MP image recording, touch focus, face/smile detection, HDR \r\n                       (photo/panorama)\r\nVideo	        2160p@30fps, 1080p@30/60/120fps, 720p@240fps, check quality\r\nSecondary	7 MP, f/2.2, 32mm, 1080p@30fps, 720p@240fps, face detection, HDR, panorama', 'free', 0, 0, 10, 'not', '', '', '', '2017-09-16', 1),
(27, 'Friends Headphone', 'x354-q80.jpg', 'Frends Headphones.png', '819249010035ZOOM1.JPG', 'Frends_lEUaLB64.jpg', 'White-Rose-Gold-Headband-On-Ear-font-b-Headphones-b-font-with-Microphone-Women-font-b (1).jpg', 20, 10194, 2500, 2150, 5, 0, 'Orange', 'New', 'Latest headphone from jeshmine tech!!!', 'paid', 100, 200, 5, 'not', '', '', '', '2017-09-16', 1),
(28, 'Samsung UHD Curved TV', 'samsung-smart-tv.jpg', 'Der-Samsung-J6250-im-Test-1024x576-eaab7817787f9435.jpg', 'Samsung-Smart-TV-pcgh_b2article_artwork.jpg', 'Smart-TV-Shazam_main-1_f.jpg', '68cfa840-9346-48f4-9439-6f84b6832a71_400.jpg', 23, 10253, 70000, 9999, 16, 16, 'Black', 'New', 'Samsung UHD Curved TV\r\nPower :240 watt', 'free', 0, 0, 0, 'not', '', '', '', '2017-09-16', 1),
(29, 'Princess Women\'s Long Sleeve Mini Lace Dress', '1.jpg', '2.jpg', '3.jpg', '2.jpg', '3.jpg', 21, 10111, 1500, 100, 3, 0, 'Black', 'New', 'Princess Women\'s Long Sleeve Mini Lace Dress FOR GIRLS', 'paid', 22, 322, 3, 'not', '', '', '', '2017-09-16', 1),
(30, 'Samsung Digital Inverter Refrigerator Rt37K', '1 (1).jpg', 'in-feature-top-mount-freezer-rt37k3993sl-60902371.jpg', 'in-feature-top-mount-freezer-rt37k3993sl--57243408.png', 'in-feature-top-mount-freezer-rt37k3993sl--57243396.png', 'in-feature-top-mount-freezer-rt37k3993sl--57243415.png', 21, 10253, 74191, 500, 7, 0, 'White', 'New', 'Samsung Digital Inverter Refrigerator \r\nBrand : Samsung \r\nModel :RT37K\r\nOne year Company warranty', 'paid', 40, 300, 5, 'not', '', '', '', '2017-09-16', 1),
(31, ' Xtep 171297 Outdoor Shoes for Women- Grey', '2 (3).jpg', '1 (4).jpg', '3 (3).jpg', '5.jpg', '4 (1).jpg', 23, 10351, 1758, 255, 1, 1, 'White', 'New', 'Xtep 171297 Outdoor Shoes for Women- Grey', 'free', 0, 0, 0, 'not', '', '', '', '2017-09-16', 1),
(32, 'Erke 12117220145-202 Jogging Shoes For Women - Watermelon', '1 (2).jpg', '2 (1).jpg', '3 (1).jpg', '4.jpg', '5 (1).jpg', 20, 10357, 1900, 125, 1, 1, 'Black', 'New', 'Erke 12117220145-202 Jogging Shoes For Women - Watermelon', 'free', 0, 0, 0, 'not', '', '', '', '2017-09-16', 1),
(33, 'Swift Box Bag Belt Design- Brown', '1 (3).jpg', '2 (2).jpg', '3 (2).jpg', '2 (2).jpg', '1 (3).jpg', 20, 10340, 4500, 235, 1, 1, 'Black', 'New', 'Swift Box Bag Belt Design- Brown', 'free', 0, 0, 0, 'not', '', '', '', '2017-09-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `location` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` text NOT NULL,
  `account_no` int(11) NOT NULL,
  `image` text NOT NULL,
  `cover_image` text NOT NULL,
  `creation_date` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `name`, `email`, `password`, `location`, `phone`, `description`, `account_no`, `image`, `cover_image`, `creation_date`, `status`) VALUES
(20, 'Jeshmine', 'jeshminebajracharya@gmail.com', '57b44642673ed2e55c9d32004b38ecb8', 'Patan', 12454654465, '<p>Hi</p>', 0, '2017-01-22 10.29.31.png', 'Home Appliances.jpg', '2017-09-16', 1),
(21, 'Ashes Shrestha', 'ashes.stha@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'Beni Bazaar', 432434324, '<p>Hello! I sell all kinds of clothes</p>', 0, 'selfiecamera_2016-06-16-08-07-47-897.jpg', '20170521_190749.jpg', '2017-09-16', 1),
(22, 'Laxmi Bajracharya', 'gratitude_u@hotmail.com', '2852f697a9f8581725c6fc6a5472a2e5', 'Gabahal, Patan', 432423432, '<p>Hy!&nbsp;</p>', 0, 'received_1445258035487161.jpeg', 'received_1409518982394400.jpeg', '2017-09-16', 1),
(23, 'Gyan Bajracharya', 'gratitude_u@yahoo.com', '47bce5c74f589f4867dbd57e9ca9f808', 'Patan', 2324234, '<p>Hy!!! i sell handicraft</p>', 0, 'IMG_16092017_205436_0.png', 'Home Appliances.jpg', '2017-09-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `category_id`, `subcategory_name`) VALUES
(1011, 101, 'Hot categories'),
(1012, 101, 'Bottom'),
(1013, 101, 'Outwear & Sweaters'),
(1014, 101, 'Intimates & Sleepwear'),
(1015, 101, 'Weddings & Events'),
(1016, 101, 'Accessories'),
(1017, 102, 'Tops'),
(1018, 102, 'Bottoms'),
(1019, 102, 'Winter Style'),
(1020, 102, 'Hot Search'),
(1021, 102, 'Accessories'),
(1022, 102, 'Sunglasses'),
(1023, 103, 'Smartphones'),
(1024, 103, 'Tablet'),
(1025, 103, 'Mobile Phone & Tablet Accessories'),
(1026, 103, 'Mobile Phone Parts'),
(1027, 103, 'Tablet Parts'),
(1028, 104, 'Laptops'),
(1029, 104, 'Computer Accessories'),
(1030, 104, 'Storage Devices'),
(1031, 104, 'Desktop'),
(1032, 104, 'Networking'),
(1033, 105, 'Accessories & Parts'),
(1034, 105, 'Camera & Photo'),
(1035, 105, 'Smart Electronics'),
(1036, 105, 'Home Audio & Video'),
(1037, 105, 'Portable Audio & Video'),
(1038, 105, 'Games'),
(1039, 106, 'Jewelry Gallery'),
(1040, 106, 'Beads & DIY Jewelry Making'),
(1041, 106, 'Men’s Watches'),
(1042, 106, 'Women’s Watches'),
(1043, 106, 'Fine Jewelry'),
(1044, 106, 'Wedding & Engagement Jewelry'),
(1045, 107, 'Kitchen, Dining & Bar'),
(1046, 107, 'Arts, Crafts & Sewing'),
(1047, 107, 'Home Decor'),
(1048, 107, 'Festive & Party Supplies'),
(1049, 107, 'Home Textiles'),
(1050, 107, 'Pet Products'),
(1051, 108, 'Women’s Luggage & Bags'),
(1052, 108, 'Men’s Luggage & Bags'),
(1053, 108, 'Women’s Shoes'),
(1054, 108, 'Men’s Shoes'),
(1055, 108, 'Shoes Hot Categories'),
(1056, 108, 'Bags Hot Categories'),
(1057, 109, 'Baby Clothing'),
(1058, 109, 'Toys & Hobbies'),
(1059, 109, 'Girl’s Clothing'),
(1060, 109, 'Shoes & Bags'),
(1061, 109, 'Boys Clothing'),
(1062, 109, 'Baby & Mothers'),
(1063, 110, 'Swimming '),
(1064, 110, 'Cycling'),
(1065, 110, 'Sneakers'),
(1066, 110, 'Fishing'),
(1067, 110, 'Sportswear'),
(1068, 110, 'Other Sports Equipment'),
(1069, 111, 'Hair & Accessories'),
(1070, 111, 'Synthetic & Blended Hair'),
(1071, 111, 'Makeup'),
(1072, 111, 'Nail Art & Tools'),
(1073, 111, 'Skin Care'),
(1074, 111, 'Hair Care & Styling'),
(1075, 112, 'Replacement Parts'),
(1076, 112, 'Tools, Maintenance & Care'),
(1077, 112, 'Car Electronics'),
(1078, 112, 'Exterior Accessories'),
(1079, 112, 'Motorcycle Accessories & Parts'),
(1080, 112, 'Interior Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `type_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `subcategory_id`, `type_name`) VALUES
(10111, 1011, 'Dresses\r\n\r\n'),
(10112, 1011, 'Blouses & Shirts'),
(10113, 1011, 'T-Shirts'),
(10114, 1011, 'Tank Tops'),
(10115, 1011, 'Jumpsuits & Rompers'),
(10116, 1011, 'Bra & Brief Sets'),
(10117, 1012, 'Skirts\r\n'),
(10118, 1012, 'Shorts\r\n\r\n'),
(10119, 1012, 'Jeans\r\n'),
(10120, 1012, 'Pants & Capris\r\n'),
(10121, 1012, 'Leggings'),
(10122, 1013, 'Blazers\r\n\r\n'),
(10123, 1013, 'Hoodies & Sweatshirts\r\n'),
(10124, 1013, 'Basic Jackets\r\n'),
(10125, 1013, 'Trench\r\n'),
(10126, 1013, 'Cardigans\r\n'),
(10127, 1013, 'Pullovers'),
(10128, 1014, 'Bras\r\n\r\n'),
(10129, 1014, 'Panties\r\n'),
(10130, 1014, 'Shapers\r\n'),
(10131, 1014, 'Bra & Brief Sets\r\n'),
(10132, 1014, 'Nightgowns & Sleepshirts\r\n'),
(10133, 1014, 'Pajama Sets'),
(10134, 1015, 'Wedding Dresses\r\n\r\n'),
(10135, 1015, 'Evening Dresses\r\n'),
(10136, 1015, 'Prom Dresses\r\n'),
(10137, 1015, 'Bridesmaid Dresses\r\n'),
(10138, 1015, 'Flower Girl Dresses\r\n'),
(10139, 1015, 'Cocktail Dresses'),
(10140, 1016, 'Sunglasses\r\n\r\n'),
(10141, 1016, 'Headwear\r\n'),
(10142, 1016, 'Baseball Caps\r\n'),
(10143, 1016, 'Scarves & Wraps\r\n'),
(10144, 1016, 'Belts\r\n'),
(10145, 1016, 'Skullies & Beanies'),
(10146, 1017, 'Tops & Tees\r\n\r\n'),
(10147, 1017, 'Shirts\r\n'),
(10148, 1017, 'Suits & Blazer\r\n'),
(10149, 1017, 'Hoodies & Sweatshirts\r\n'),
(10150, 1017, 'Coats & Jackets\r\n'),
(10151, 1017, 'Sweaters'),
(10152, 1018, 'Pants\r\n\r\n'),
(10153, 1018, 'Shorts \r\n'),
(10154, 1018, 'Jeans\r\n'),
(10155, 1018, 'Underwear\r\n'),
(10156, 1018, 'Board Shorts\r\n'),
(10157, 1018, 'Socks'),
(10158, 1019, 'Down Jackets\r\n\r\n'),
(10159, 1019, 'Jackets\r\n'),
(10160, 1019, 'Parkas\r\n'),
(10161, 1019, 'Leather & Suede\r\n'),
(10162, 1019, 'Printed Hoodies\r\n'),
(10163, 1019, 'Suits'),
(10164, 1020, '3D Printed T-Shirts\r\n\r\n'),
(10165, 1020, 'Denim Shirts\r\n'),
(10166, 1020, 'Striped Shirts\r\n'),
(10167, 1020, 'Dot Shirts\r\n'),
(10168, 1020, 'Costumes'),
(10169, 1021, 'Eyewear Frames\r\n\r\n'),
(10170, 1021, 'Baseball Caps\r\n'),
(10171, 1021, 'Scarves\r\n'),
(10172, 1021, 'Belts & Cummerbunds\r\n'),
(10173, 1021, 'Ties & Handkerchiefs\r\n'),
(10174, 1021, 'Skullies & Beanies'),
(10175, 1022, 'Pilot\r\n\r\n'),
(10176, 1022, 'Wayfarer\r\n'),
(10177, 1022, 'Square\r\n'),
(10178, 1022, 'Round\r\n'),
(10179, 1022, 'Oval'),
(10180, 1023, 'Android Phones'),
(10181, 1023, 'Iphone'),
(10182, 1023, 'Windows Phones'),
(10183, 1023, 'Other Phones'),
(10184, 1024, 'Android Tablet'),
(10185, 1024, 'iOS Tablet'),
(10186, 1024, 'Windows Tablet'),
(10187, 1024, 'Other Tablets'),
(10188, 1025, 'Mobile Phone,Cases & Covers'),
(10189, 1025, 'Tablet Cases & Covers'),
(10190, 1025, 'Backup Battery Packs'),
(10191, 1025, 'Screen Protectors'),
(10192, 1025, 'Memory & SD Cards'),
(10193, 1025, 'Cables'),
(10194, 1025, 'HeadPhones'),
(10195, 1025, 'Selfie Sticks'),
(10196, 1025, 'Chargers for Phones & Tablets'),
(10197, 1025, 'Holders & Stands'),
(10198, 1025, 'Mobile Phone Accessories for Cars'),
(10199, 1025, 'Other Mobile Phones & Tablet Accessories'),
(10200, 1026, 'Mobile Phone LCDs'),
(10201, 1026, 'Mobile Phone Batteries'),
(10202, 1026, 'Mobile Phone Housings'),
(10203, 1026, 'Signal Boosters'),
(10204, 1026, 'SIM Card & Tools'),
(10205, 1027, 'Tablet LCDs'),
(10206, 1027, 'Tablet Batteries'),
(10207, 1027, 'Tablet Housings'),
(10208, 1028, 'Macbooks'),
(10209, 1028, 'Netbooks'),
(10210, 1028, 'Ultrabooks'),
(10211, 1028, 'Notebooks'),
(10212, 1029, 'Mouse'),
(10213, 1029, 'Charger'),
(10214, 1029, 'Battery'),
(10215, 1029, 'Keyboards'),
(10216, 1029, 'Laptop Cases & Bags'),
(10217, 1029, 'Cooling System'),
(10218, 1029, 'RAM'),
(10219, 1029, 'Processors'),
(10220, 1029, 'Graphic Cards'),
(10221, 1029, 'Mother Boards'),
(10222, 1029, 'Sound Cards'),
(10223, 1029, 'Monitors'),
(10224, 1029, 'Printers'),
(10225, 1029, 'Scanners'),
(10226, 1029, 'Other Computer Accessories'),
(10227, 1030, 'USB Flash Drives'),
(10228, 1030, 'Memory Card'),
(10229, 1030, 'External Hard Drives'),
(10230, 1030, 'HDD Enclosure'),
(10231, 1030, 'SSD'),
(10232, 1031, 'iMac '),
(10233, 1031, 'PCs'),
(10234, 1031, 'Other Desktops'),
(10235, 1032, 'Wireless Routers'),
(10236, 1032, 'Network Cards'),
(10237, 1032, '3G Modems'),
(10238, 1032, 'Modem-Router Combos'),
(10239, 1032, 'Networking Tools'),
(10240, 1033, 'Digital Batteries'),
(10241, 1033, 'Memory Cards'),
(10242, 1033, 'Digital Cables'),
(10243, 1033, 'Camera Bags'),
(10244, 1033, 'Chargers'),
(10245, 1033, '3D Glasses'),
(10246, 1034, 'Tripod & Accessories'),
(10247, 1034, 'Sports Action Cameras'),
(10248, 1034, 'Home Surveillance Cameras'),
(10249, 1034, 'Digital Cameras'),
(10250, 1034, 'Lens & Accessories'),
(10251, 1034, 'Camera Drones & Accessories'),
(10252, 1035, 'Wearable Devices'),
(10253, 1035, 'Smart Home Appliances'),
(10254, 1035, 'Smart Watches'),
(10255, 1035, 'Smart Wristbands'),
(10256, 1036, 'TV Boxes'),
(10257, 1036, 'TV Receivers'),
(10258, 1036, 'Projectors & Accessories'),
(10259, 1036, 'Audio Amplifiers'),
(10260, 1036, 'TV Sticks'),
(10261, 1037, 'Earphones & Headphones'),
(10262, 1037, 'Speakers'),
(10263, 1037, 'MP3 Players'),
(10264, 1037, 'Microphones'),
(10265, 1037, 'MP4 Players'),
(10266, 1038, 'Handheld Game Player'),
(10267, 1038, 'Video Game Consoles'),
(10268, 1038, 'Controllers'),
(10269, 1038, 'PlayStation'),
(10270, 1038, 'XBOX'),
(10271, 1039, 'Necklaces & Pendants\r\n'),
(10272, 1039, 'Rings\r\n'),
(10273, 1039, 'Fashion Earrings\r\n'),
(10274, 1039, 'Bracelets & Bangles\r\n'),
(10275, 1039, 'Jewelry Sets\r\n'),
(10276, 1039, 'Key Chains\r\n'),
(10277, 1039, 'Body Jewelry\r\n\r\n'),
(10278, 1039, 'Hair Jewelry\r\n'),
(10279, 1039, 'Charms'),
(10280, 1040, 'Jewelry Findings & Components\r\n\r\n'),
(10281, 1040, 'Jewelry Packaging & Display'),
(10282, 1041, 'Casual Watches\r\n\r\n'),
(10283, 1041, 'Sports Watches\r\n'),
(10284, 1041, 'Business Watches\r\n'),
(10285, 1041, 'Brand Watches\r\n'),
(10286, 1041, 'Antique Watches'),
(10287, 1042, 'Fashion Watches\r\n\r\n'),
(10288, 1042, 'Brand Watches\r\n'),
(10289, 1042, 'Sports Watches\r\n'),
(10290, 1042, 'Dress Watches\r\n'),
(10291, 1042, 'Women’s Bracelet Watches\r\nChildren’s Brand Watches'),
(10292, 1042, 'Children’s Brand Watches'),
(10293, 1043, '925 Sterling Silver\r\n\r\n'),
(10294, 1043, 'Pearl \r\n'),
(10295, 1043, 'Yellow Gold'),
(10296, 1044, 'Wedding Bands\r\n\r\n'),
(10297, 1044, 'Engagement Rings\r\n'),
(10298, 1044, 'Bridal Jewelry Sets\r\n'),
(10299, 1044, 'Men’s Jewelry\r\n'),
(10300, 1044, 'Tie Clips & Cufflinks\r\n'),
(10301, 1044, 'Brooches\r\n'),
(10302, 1044, 'Heart Jewelry\r\n'),
(10303, 1044, 'Statement Jewelry'),
(10304, 1045, 'Bakeware\r\n\r\n'),
(10305, 1045, 'Cooking Tools\r\n'),
(10306, 1045, 'Drinkware\r\n'),
(10307, 1045, 'Kitchen Knifes & Accessories\r\n'),
(10308, 1045, 'Dinnerware\r\n'),
(10309, 1045, 'Barware'),
(10310, 1046, 'Apparel Sewing & Fabric\r\n\r\n'),
(10311, 1046, 'Diamond Painting Cross Stitch\r\n'),
(10312, 1046, 'Cross-Stitch\r\n'),
(10313, 1046, 'Ribbons\r\n'),
(10314, 1046, 'Fabric\r\n'),
(10315, 1046, 'Lace'),
(10316, 1047, 'Wall Sticker\r\n\r\n'),
(10317, 1047, 'Decoration Crafts\r\n'),
(10318, 1047, 'Painting & Calligraphy\r\n'),
(10319, 1047, 'Clocks\r\n'),
(10320, 1047, 'Photo Albums\r\n'),
(10321, 1047, 'Wallpaper'),
(10322, 1048, 'Event & Party Supplies\r\n\r\n'),
(10323, 1048, 'Christmas Decoration Supplies\r\n'),
(10324, 1048, 'Decorative Flowers & Wreaths\r\n'),
(10325, 1048, 'Party Masks\r\n'),
(10326, 1048, 'Christmas Tree Ornament\r\n'),
(10327, 1048, 'Indoor Christmas Decoration'),
(10328, 1049, 'Bedding Sets\r\n\r\n'),
(10329, 1049, 'Curtains\r\n'),
(10330, 1049, 'Towels\r\n'),
(10331, 1049, 'Cushion cover\r\n'),
(10332, 1049, 'Pillows\r\n'),
(10333, 1049, 'Comforter'),
(10334, 1050, 'Dogs\r\n\r\n'),
(10335, 1050, 'Dog Collars & Leads\r\n'),
(10336, 1050, 'Clothing & Shoes\r\n'),
(10337, 1050, 'Cats\r\n'),
(10338, 1050, 'Fish & Aquatic Pets\r\n'),
(10339, 1050, 'Birds'),
(10340, 1051, 'Shoulder Bags\r\n\r\n'),
(10341, 1051, 'Top-Handle Bags\r\n'),
(10342, 1051, 'Crossbody Bags\r\n'),
(10343, 1051, 'Wallets\r\n'),
(10344, 1051, 'Backpacks\r\n'),
(10345, 1051, 'Clutches\r\n'),
(10346, 1051, 'Coin Purses & Holders'),
(10347, 1052, 'Men’s Crossbody Bags\r\n\r\n'),
(10348, 1052, 'Men’s Backpacks\r\n'),
(10349, 1052, 'Men’s Wallets\r\n'),
(10350, 1052, 'Luggage & Travel Bags'),
(10351, 1053, 'Casual Shoes\r\n'),
(10352, 1053, 'Sandals\r\n\r\n'),
(10353, 1053, 'Pumps\r\n'),
(10354, 1053, 'Flats\r\n'),
(10355, 1053, 'Boots\r\n'),
(10356, 1053, 'Slippers\r\n'),
(10357, 1053, 'Mules & Clogs'),
(10358, 1054, 'Casual Shoes\r\n'),
(10359, 1054, 'Sandals\r\n\r\n'),
(10360, 1054, 'Flats\r\n'),
(10361, 1054, 'Boots\r\n'),
(10362, 1054, 'Slippers\r\n'),
(10363, 1054, 'Mules & Clogs'),
(10364, 1055, 'Red Bottom High Heels\r\n\r\n'),
(10365, 1055, 'Gladiator Sandals\r\n'),
(10366, 1055, 'Basic Flats\r\n'),
(10367, 1055, 'Flip Flops\r\n'),
(10368, 1055, 'Men’s Boat Shoes\r\n'),
(10369, 1055, 'Men’s Oxfords\r\n'),
(10370, 1055, 'Genuine Leather Flats'),
(10371, 1056, 'Solid Shoulder Bags\r\n\r\n'),
(10372, 1056, 'Day Clutches\r\n'),
(10373, 1056, 'Fashion Backpacks\r\n'),
(10374, 1056, 'Kids & Baby’s Bags'),
(10375, 1057, 'Baby Dresses\r\n\r\n'),
(10376, 1057, 'Baby Rompers\r\n'),
(10377, 1057, 'Clothing Sets\r\n'),
(10378, 1057, 'Baby Outerwear\r\n'),
(10379, 1057, 'Baby Pants\r\n'),
(10380, 1057, 'Baby Accessories'),
(10381, 1058, 'RC Helicopters\r\n\r\n'),
(10382, 1058, 'Stuffed Animals & Plush\r\n'),
(10383, 1058, 'Action Figures\r\n'),
(10384, 1058, 'Blocks\r\n'),
(10385, 1058, 'Outdoor Fun & Sports'),
(10386, 1059, 'Dresses\r\n'),
(10387, 1059, 'Clothing Sets\r\n\r\n'),
(10388, 1059, 'Tops & Tees\r\n'),
(10389, 1059, 'Swimwear\r\n'),
(10390, 1059, 'Accessories\r\n'),
(10391, 1059, 'Family Matching Outfits'),
(10392, 1060, 'Baby First Walkers\r\n\r\n'),
(10393, 1060, 'Girl’s Shoes\r\n'),
(10394, 1060, 'Boy’s Shoes\r\n'),
(10395, 1060, 'School Bags\r\n'),
(10396, 1060, 'Kids Wallets'),
(10397, 1061, 'Clothing Sets\r\n'),
(10398, 1061, 'T-Shirts\r\n\r\n'),
(10399, 1061, 'Hoodies & Sweatshirts\r\n'),
(10400, 1061, 'Outerwear & Coats\r\n'),
(10401, 1061, 'Jeans\r\n'),
(10402, 1061, 'Accessories'),
(10403, 1062, 'Nappy Changing\r\n\r\n'),
(10404, 1062, 'Activity & Gear\r\n'),
(10405, 1062, 'Baby Care\r\n'),
(10406, 1062, 'Backpacks & Carriers\r\n'),
(10407, 1062, 'Maternity'),
(10408, 1063, 'Bikini Set\r\n\r\n'),
(10409, 1063, 'One-Piece Suits\r\n'),
(10410, 1063, 'Two-Piece Suits\r\n'),
(10411, 1063, 'Cover-Ups\r\n'),
(10412, 1063, 'Men’s Swimwear\r\n'),
(10413, 1063, 'Children’s Swimwear'),
(10414, 1064, 'Bicycle\r\n\r\n'),
(10415, 1064, 'Bicycle Frame\r\n'),
(10416, 1064, 'Bicycle Lights\r\n'),
(10417, 1064, 'Bicycle Helmet\r\n'),
(10418, 1064, 'Cycling Jersey\r\n'),
(10419, 1064, 'Cycling Eyewear'),
(10420, 1065, 'Running Shoes\r\n\r\n'),
(10421, 1065, 'Hiking Shoes\r\n'),
(10422, 1065, 'Soccer Shoes\r\n'),
(10423, 1065, 'Skateboarding Shoes\r\n'),
(10424, 1065, 'Dance Shoes\r\n'),
(10425, 1065, 'Basketball Shoes'),
(10426, 1066, 'Fishing Reels\r\n'),
(10427, 1066, 'Fishing Lures\r\n\r\n'),
(10428, 1066, 'Fishing Lines\r\n'),
(10429, 1066, 'Fishing Rods\r\n'),
(10430, 1066, 'Rod Comb\r\n'),
(10431, 1066, 'Fishing Tackle Boxes'),
(10432, 1067, 'Jersey\r\n\r\n'),
(10433, 1067, 'Hiking Jackets\r\n'),
(10434, 1067, 'Pants\r\n'),
(10435, 1067, 'Shorts\r\n'),
(10436, 1067, 'Sports Bags\r\n'),
(10437, 1067, 'Sports Accessories'),
(10438, 1068, 'Camping & Hiking\r\n\r\n'),
(10439, 1068, 'Hunting\r\n'),
(10440, 1068, 'Golf\r\n'),
(10441, 1068, 'Fitness & Bodybuilding\r\n'),
(10442, 1068, 'Skiing & Snowboarding\r\n'),
(10443, 1068, 'Musical Instruments'),
(10444, 1069, 'Human Hair\r\n\r\n'),
(10445, 1069, 'Fashion Hair Extensions\r\n'),
(10446, 1069, 'Clip In Hair Extensions\r\n'),
(10447, 1069, 'Colorful Hair\r\n'),
(10448, 1069, 'Browse By Brands\r\n'),
(10449, 1069, 'Hair Weft With Closure'),
(10450, 1070, 'Synthetic Hair\r\n\r\n'),
(10451, 1070, 'Synthetic Wigs\r\n'),
(10452, 1070, 'Synthetic Hair Extension\r\n'),
(10453, 1070, 'Blended Hair Weaves\r\n'),
(10454, 1070, 'Blended Hair Wigs\r\n'),
(10455, 1070, 'Blended Hair Extension'),
(10456, 1071, 'Beauty Essentials\r\n\r\n'),
(10457, 1071, 'Eyes\r\n'),
(10458, 1071, 'Makeup Tools & Accessories\r\n'),
(10459, 1071, 'Face\r\n'),
(10460, 1071, 'Lips\r\n'),
(10461, 1071, 'Makeup Sets'),
(10462, 1072, 'Nail Art\r\n'),
(10463, 1072, 'Nail Gel\r\n\r\n'),
(10464, 1072, 'Nail Polish\r\n'),
(10465, 1072, 'Nail Tools\r\n'),
(10466, 1072, 'False Tools\r\n'),
(10467, 1072, 'Acrylic Powders & Liquids'),
(10468, 1073, 'Health Care\r\n\r\n'),
(10469, 1073, 'Face\r\n'),
(10470, 1073, 'Sun \r\n'),
(10471, 1073, 'Slimming Creams\r\n'),
(10472, 1073, 'Essential Oil\r\n'),
(10473, 1073, 'Massage & Relaxation'),
(10474, 1074, 'Hair Scissors\r\n\r\n'),
(10475, 1074, 'Straightening Irons\r\n'),
(10476, 1074, 'Hair Dryers\r\n'),
(10477, 1074, 'Hair Rollers\r\n'),
(10478, 1074, 'Hair Color\r\n'),
(10479, 1074, 'Hair Loss Products'),
(10480, 1075, 'Car Lights\r\n'),
(10481, 1075, 'Engines & Components\r\n'),
(10482, 1075, 'Exhaust & Exhaust Systems\r\n\r\n'),
(10483, 1075, 'Air Intake Systems\r\n'),
(10484, 1075, 'Wheels, Rims & Steering\r\n'),
(10485, 1075, 'Air-conditioning Installation\r\n'),
(10486, 1075, 'Ignition'),
(10487, 1076, 'Diagnostic Tools\r\n'),
(10488, 1076, 'Code Readers & Scan Tools\r\n\r\n'),
(10489, 1076, 'Car Washer\r\n'),
(10490, 1076, 'Paint Care\r\n'),
(10491, 1076, 'Sponges, Clothes & Brushes'),
(10492, 1077, 'Car DVD\r\n\r\n'),
(10493, 1077, 'DVR/Camera\r\n'),
(10494, 1077, 'Alarm System & Security\r\n'),
(10495, 1077, 'GPS & Accessories\r\n'),
(10496, 1077, 'Audio\r\n'),
(10497, 1077, 'Parking Sensors\r\n'),
(10498, 1077, 'Rear View Camera\r\nr'),
(10499, 1077, 'Car Electrical Appliances\r\n'),
(10500, 1077, 'Radar Detectors\r\n'),
(10501, 1077, 'Car Charge'),
(10502, 1078, 'Car Stickers\r\n\r\n'),
(10503, 1078, 'Car Covers\r\n'),
(10504, 1078, 'Styling Mouldings'),
(10505, 1079, 'Motorcycle Boots\r\n\r\n'),
(10506, 1079, 'Covers & Ornamental Mouldings\r\n'),
(10507, 1079, 'Lighting\r\n'),
(10508, 1079, 'Motorcycle Brakes\r\n'),
(10509, 1079, 'Helmets\r\n'),
(10510, 1079, 'Gloves\r\n'),
(10511, 1079, 'Exhaust & Exhaust Systems\r\n'),
(10512, 1079, 'Helmet Headset'),
(10513, 1080, 'Seat Covers\r\n\r\n'),
(10514, 1080, 'Steering Covers\r\n'),
(10515, 1080, 'Key Rings\r\n'),
(10516, 1080, 'Mounts & Holder\r\n'),
(10517, 1080, 'Floor Mats');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `email_validation`
--
ALTER TABLE `email_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`verification_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_validation`
--
ALTER TABLE `email_validation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `verification_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1081;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10518;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
