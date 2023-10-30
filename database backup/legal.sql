-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 05:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legal_path`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `about_heading` varchar(255) NOT NULL,
  `about_discription` varchar(255) NOT NULL,
  `about_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_heading`, `about_discription`, `about_photo`) VALUES
(1, 'This is the heading from about section ', 'We are a team of talented designers making websites with Bootstrap\r\n                                                       ', '2570692.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_heading` varchar(150) NOT NULL,
  `blog_by` varchar(25) NOT NULL,
  `blog_time` date NOT NULL DEFAULT current_timestamp(),
  `blog_discription` varchar(1000) NOT NULL,
  `blog_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_heading`, `blog_by`, `blog_time`, `blog_discription`, `blog_photo`) VALUES
(0, 'kjlj', 'lkj', '2022-07-12', 'ljdsfsdf', 'images/image_6487327 (1).JPG'),
(1, 'This is blog heading', 'suman Adhikari', '2022-07-13', 'this is blog discription', 'images/2226455.jpg'),
(2, 'This is heading 2', 'elon musk', '2022-07-12', 'this is blog discription 2', 'images/Dog gets angry at his own hiccups.png'),
(3, 'This is heading 4', 'AdminGPON', '2022-06-12', 'sdhfsldhflshfhsdfllsdfnl', 'images/received_651001425505973.jpg'),
(4, 'kmk', 'kmlm', '2022-07-12', 'lkmlkm', 'images/image_6487327.JPG'),
(5, 'This is heading 4', 'userAdmin', '2022-07-12', 'asdfadsfafa', 'images/image_6487327.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(255) NOT NULL,
  `hero_heading` varchar(100) NOT NULL,
  `hero_discription` varchar(500) NOT NULL,
  `hero_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `hero_heading`, `hero_discription`, `hero_photo`) VALUES
(1, 'This is hero heading  part 1', 'This is hero discription ', 'image_6487327.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'adhikarisuman744@gmail.com', '123456\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(255) NOT NULL,
  `team_heading` varchar(25) NOT NULL,
  `team_post` varchar(25) NOT NULL,
  `team_discription` varchar(200) NOT NULL,
  `team_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_heading`, `team_post`, `team_discription`, `team_photo`) VALUES
(1, 'Suman Adhikari', 'CEO', 'This is the description of team 1', 'image_6487327.JPG'),
(2, 'team 2', 'post 2', 'discription 2', '2226455.jpg'),
(3, 'team 3', 'post 3', 'discription 3           ', 'image_6487327.JPG'),
(4, 'team 4', 'post 4      ', 'discription 4           ', 'image_6487327.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
