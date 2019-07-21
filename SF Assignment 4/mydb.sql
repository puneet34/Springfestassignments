-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 04, 2019 at 04:57 PM
-- Server version: 5.7.24-log
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`) VALUES
(2, 'comment');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user`) VALUES
(0, 'gf'),
(0, 'springfest'),
(0, 'springfest'),
(0, 'springfest'),
(0, 'springfest'),
(0, 'springfest'),
(0, 'springfest'),
(0, 'springfest'),
(0, 'springfest'),
(0, 'puneet'),
(0, 'puneet'),
(0, 'badal'),
(0, 'puneet'),
(0, 'puneet'),
(0, 'puneet'),
(0, 'badal'),
(0, 'puneet'),
(0, 'badal'),
(0, 'mony'),
(0, 'puneet'),
(0, 'mony'),
(0, 'puneet'),
(0, 'puneet'),
(0, 'mony'),
(0, 'puneet'),
(0, 'puneet'),
(0, 'mony'),
(0, 'puneet'),
(0, 'puneet'),
(0, 'puneet');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `name`, `pass`) VALUES
(47, 'puneet', 'sunny'),
(53, 'rakesh', 'dad'),
(57, 'springfest', 'springfest'),
(58, 'badal', 'harshita'),
(59, 'vandana', 'mom'),
(60, 'mony', 'tony'),
(61, 'mony', 'tony');

-- --------------------------------------------------------

--
-- Table structure for table `mytopic`
--

CREATE TABLE `mytopic` (
  `id` int(11) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mytopic`
--

INSERT INTO `mytopic` (`id`, `user`, `topic`, `comment`) VALUES
(5, 'puneet', 'Hi,users now you can add topic to this website', NULL),
(24, 'vandana', 'hi', NULL),
(35, 'vandana', 'ewrt', NULL),
(36, 'vandana', 'ery', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytopic`
--
ALTER TABLE `mytopic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `mytopic`
--
ALTER TABLE `mytopic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
