-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 03:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogdata`
--

CREATE TABLE `blogdata` (
  `id` int(11) NOT NULL,
  `imgSrc` longtext NOT NULL,
  `date` text NOT NULL,
  `user` varchar(255) NOT NULL,
  `clock` text NOT NULL,
  `title` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogdata`
--

INSERT INTO `blogdata` (`id`, `imgSrc`, `date`, `user`, `clock`, `title`, `created_at`) VALUES
(1, 'slide3-1.jpg', 'Jan 19, 2019', 'Mark Willy', '5 Mins Read', 'Technology Inside the new battl eraa for the american west.', '2021-09-12 15:42:42'),
(2, 'slide3-2.jpg', 'Feb 23, 2019', 'Kady', '3 Mins Read', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum officia dolor ab expedita, sequi fugiat modi,', '2021-09-12 15:55:27'),
(3, 'slide3-3.jpg', 'Jan 19, 2019', 'Nilly', '2 Mins Read', 'rerum labore voluptatibus, asperiores enim quo accusamus ullam voluptate nihil iure excepturi culpa sapiente.', '2021-09-12 15:58:01'),
(4, 'blog36.jpg', 'Jan 12, 2019', '', '', 'How an Island Formsniver And Stones', '2021-09-12 16:26:43'),
(5, 'blog35.jpg', 'Jan 18, 2019', '', '', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur tempore aut repellat ipsum natus, nisi ', '2021-09-12 16:26:43'),
(6, 'blog37.jpg', 'Jan 30, 2019', '', '', 'et atque ab nemo eius magni, eos quaerat aliquid modi cum impedit reiciendis, amet ea totam qui mollitia unde. ', '2021-09-12 16:26:43'),
(7, 'blog38.jpg', 'Jan 15, 2019', '', '', 'Esse officia ipsam impedit sapiente. Est quisquam ipsum suscipit corrupti ducimus nihil? Recusandae mollitia ', '2021-09-12 16:26:43'),
(8, 'blog39.jpg', 'Jan 10, 2019', '', '', 'aliquid quia, reiciendis voluptas dignissimos nemo! Sint unde dolores, quibusdam accusantium possimus ullam', '2021-09-12 16:26:43'),
(9, 'blog40.jpg', 'Jan 28, 2019', '', '', 'fugit nulla sit, consequatur quod, dignissimos repudiandae. Eaque recusandae laudantium magni ipsam placeat ex ', '2021-09-12 16:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `blog_id`, `category_name`) VALUES
(1, 1, 'Fashion'),
(2, 2, 'Beauty'),
(3, 3, 'Life style'),
(4, 4, 'Travel'),
(5, 5, 'Food'),
(6, 6, 'Video'),
(7, 7, 'Technology'),
(8, 8, 'sports'),
(9, 9, 'light');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `slider_img` varchar(255) NOT NULL,
  `slider_title` text NOT NULL,
  `slider_status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `blog_id`, `slider_img`, `slider_title`, `slider_status`) VALUES
(1, 1, 'slide3-2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptas deleniti earum nam ipsam nulla dolorem ', 1),
(2, 2, 'slide3-3.jpg', 'molestiae illum, maxime modi, inventore dignissimos iure deserunt repellat omnis rerum dolorum dicta. Eos porro', 1),
(3, 3, 'slide3-1.jpg', 'Amet et, dolores provident, dignissimos perferendis velit neque ratione sed laudantium eveniet cum nobis earum.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `name`) VALUES
(1, 1, 'clothes'),
(2, 1, 'makeup'),
(3, 2, 'Body care'),
(4, 2, 'Hair care'),
(5, 3, 'wealth'),
(6, 4, 'Business travel'),
(7, 5, 'vegetables'),
(8, 5, 'fruits'),
(9, 6, 'Ambient video'),
(10, 7, 'iot'),
(11, 8, 'Event Travel'),
(12, 9, 'Solo Travel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogdata`
--
ALTER TABLE `blogdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogdata`
--
ALTER TABLE `blogdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
