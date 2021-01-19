-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 12:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taoresturent`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`) VALUES
('blog-img-09.jpg', 'Welcome Resturant', 'Painkillers');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `food_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `customer_id` int(255) NOT NULL,
  `fid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`food_id`, `email`, `price`, `qty`, `trn_date`, `customer_id`, `fid`) VALUES
('FOOD02', 'kaniya@gmail.com', '150', 1, '2020-12-27 12:09:01', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`) VALUES
(13, 'Rice', 'images (22).jpg'),
(15, 'Seafoods', 'download (4).jpg'),
(18, 'Berger', 'img-04.jpg'),
(19, 'Noodles', 'images (14).jpg'),
(20, 'Soup', 'img-08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `date_of_birth`, `phone`, `email`, `address`, `password`, `trn_date`) VALUES
(6, 'Kanishka', 'Sandaruwan', '2020-10-22', 713664071, 'kanishkadewsandaruwan123@gmail.com', 'Banwalgodalla, Kosmulla', '827ccb0eea8a706c4c34a16891f84e7b', '2020-12-22 12:15:36'),
(7, 'Kanishka', 'Sandaruwan', '2020-12-16', 713664071, 'kanishkadewsandaruwan@gmail.com', 'Banwalgodalla, Kosmulla', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-24 12:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `customer_backup`
--

CREATE TABLE `customer_backup` (
  `backup_id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_backup`
--

INSERT INTO `customer_backup` (`backup_id`, `customer_id`, `name`, `phone`, `email`, `trn_date`) VALUES
(3, '3', 'Kanishka Dew Sandaruwan', '713664072', 'kanishkadewsandaruwan@gmail.com', '2020-12-24 12:18:02'),
(4, '8', 'Kanishka Sandaruwan', '713664071', 'kaniya@gmail.com', '2020-12-27 12:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `full_name`, `address`, `phone_number`, `email`, `gender`, `password`, `username`, `trndate`) VALUES
(2, '', '', 0, '', '', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2020-11-22 11:15:44'),
(4, 'Avindu Lankshan De Silva', 'Galle', 713664072, 'avindu@gmail.com', 'Male', 'e10adc3949ba59abbe56e057f20f883e', 'Avindu', '2020-12-19 12:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `fid` int(11) NOT NULL,
  `food_id` varchar(255) NOT NULL,
  `food_cat_id` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`fid`, `food_id`, `food_cat_id`, `food_name`, `description`, `image`, `available`, `trndate`, `price`) VALUES
(1, 'FOOD01', '15', 'Prone Rice', 'Hello', 'img-05.jpg', 'Yes', '2020-12-23 12:16:52', 650),
(2, 'FOOD02', '13', 'Chicken Fried Rice Full', 'pain killers', 'images (23).jpg', 'Yes', '2020-12-23 12:16:14', 150),
(5, 'FOOD03', '18', 'Chicken Berger', 'Painkillers', 'img-04.jpg', 'Yes', '2020-12-27 12:08:39', 950),
(6, 'FOOD04', '13', 'Chicken Fried Rice', 'Patta sssds', 'gallery-img-02.jpg', 'Yes', '2020-12-27 12:08:51', 450),
(7, 'FOOD05', '19', 'Checken Noodles', 'Patta sssds', 'images (15).jpg', 'Yes', '2020-12-27 12:08:47', 850);

-- --------------------------------------------------------

--
-- Table structure for table `food_items_backup`
--

CREATE TABLE `food_items_backup` (
  `backid` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `food_id` varchar(255) NOT NULL,
  `fid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_items_backup`
--

INSERT INTO `food_items_backup` (`backid`, `food_name`, `description`, `image`, `food_id`, `fid`) VALUES
(1, 'Checken Noodles', 'Patta sssds', 'images (14).jpg', 'FOOD03', '3'),
(2, 'Chicken Devel Fried Rice', 'Patta sssds', 'images (23).jpg', 'FOOD04', '4');

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `image_id` int(11) NOT NULL,
  `galary_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`image_id`, `galary_image`) VALUES
(3, 'img-02.jpg'),
(4, 'blog-img-04.jpg'),
(5, 'img-03.jpg'),
(6, 'about-img.jpg'),
(7, 'blog-img-03.jpg'),
(8, 'img-05.jpg'),
(9, 'img-08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `getorder`
--

CREATE TABLE `getorder` (
  `order_id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product_ids` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `accept` varchar(255) NOT NULL,
  `shipped` varchar(255) NOT NULL,
  `deliver` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getorder`
--

INSERT INTO `getorder` (`order_id`, `customer_id`, `product_ids`, `amount`, `payment_type`, `address`, `accept`, `shipped`, `deliver`, `paid`, `trn_date`) VALUES
(50, '3', '1,3,4', 1150, 'COD', 'Banwalgodalla, Kosmulla', 'Accepted', 'Shipped', 'Diliverd', 'Paid', '2020-12-23 12:17:58'),
(51, '3', '1,3,4', 1150, 'COD', 'Banwalgodalla, Kosmulla', 'Reject', 'Reject', 'Pending', 'Pending', '2020-12-23 12:17:41'),
(52, '3', '2,1,4', 950, 'COD', 'Banwalgodalla, Kosmulla', 'Accepted', 'Shipped', 'Diliverd', 'Paid', '2020-12-24 12:04:15'),
(54, '7', '3,4', 700, 'COD', 'Banwalgodalla, Kosmulla', 'Accepted', 'Pending', 'Pending', 'Pending', '2020-12-24 12:18:52'),
(56, '7', '2,1', 600, 'COD', 'Banwalgodalla, Kosmulla', 'Pending', 'Pending', 'Pending', 'Pending', '2020-12-27 12:08:38'),
(57, '8', '2,5', 1100, 'COD', 'Banwalgodalla, Kosmulla', 'Accepted', 'Shipped', 'Diliverd', 'Paid', '2020-12-27 12:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `home_images`
--

CREATE TABLE `home_images` (
  `image_id` int(255) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `second_block_title` varchar(255) NOT NULL,
  `secomd_block_description` varchar(255) NOT NULL,
  `second_block_image_description` varchar(255) NOT NULL,
  `second_block_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_images`
--

INSERT INTO `home_images` (`image_id`, `background_image`, `second_block_title`, `secomd_block_description`, `second_block_image_description`, `second_block_image`) VALUES
(1, 'all-bg.jpg', 'Welcome to Kaniya', 'pain killers', 'TAO RESTURANT', 'images (14).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image_manager`
--

CREATE TABLE `image_manager` (
  `login_image` varchar(255) NOT NULL,
  `reg_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_manager`
--

INSERT INTO `image_manager` (`login_image`, `reg_image`) VALUES
('img-03.jpg', 'img-08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `msg_read` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`, `msg_read`) VALUES
(2, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'tjgj', '2020-12-24 12:17:24', 'Reded'),
(3, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'hhhdhdh', '2020-12-25 12:08:00', 'Reded'),
(5, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'aa', 'sssss', '2020-12-27 12:08:34', 'Reded');

-- --------------------------------------------------------

--
-- Table structure for table `rest_details`
--

CREATE TABLE `rest_details` (
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `rest_address` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tweeter` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `instragram` varchar(255) NOT NULL,
  `rest_opening` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rest_details`
--

INSERT INTO `rest_details` (`email`, `phone`, `rest_address`, `fb`, `tweeter`, `linkdin`, `instragram`, `rest_opening`) VALUES
('kanishkadewsandaruwan@gmail.com', 913664071, 'Banwalgodalla, Kosmulla', 'https://www.facebook.com/', 'a', 'a', 'a', 'Close');

-- --------------------------------------------------------

--
-- Table structure for table `slider_banner`
--

CREATE TABLE `slider_banner` (
  `slider_banner_id` int(11) NOT NULL,
  `slider_banner_01` varchar(255) NOT NULL,
  `slider_banner_02` varchar(255) NOT NULL,
  `slider_banner_03` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_banner`
--

INSERT INTO `slider_banner` (`slider_banner_id`, `slider_banner_01`, `slider_banner_02`, `slider_banner_03`, `title`, `description`) VALUES
(20, 'gallery-img-04.jpg', 'gallery-img-05.jpg', 'gallery-img-06.jpg', 'Welcome Resturant', 'covod have');

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
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_backup`
--
ALTER TABLE `customer_backup`
  ADD PRIMARY KEY (`backup_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `food_items_backup`
--
ALTER TABLE `food_items_backup`
  ADD PRIMARY KEY (`backid`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `getorder`
--
ALTER TABLE `getorder`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `home_images`
--
ALTER TABLE `home_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `slider_banner`
--
ALTER TABLE `slider_banner`
  ADD PRIMARY KEY (`slider_banner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_backup`
--
ALTER TABLE `customer_backup`
  MODIFY `backup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food_items_backup`
--
ALTER TABLE `food_items_backup`
  MODIFY `backid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `getorder`
--
ALTER TABLE `getorder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `home_images`
--
ALTER TABLE `home_images`
  MODIFY `image_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider_banner`
--
ALTER TABLE `slider_banner`
  MODIFY `slider_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
