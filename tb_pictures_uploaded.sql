-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 12:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wearertfitesofivcu-nifes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pictures_uploaded`
--

CREATE TABLE `tb_pictures_uploaded` (
  `col_id` int(11) NOT NULL,
  `col_name` varchar(100) NOT NULL,
  `col_title` varchar(50) NOT NULL,
  `col_description` varchar(1000) NOT NULL,
  `col_member` varchar(25) NOT NULL,
  `col_tagged_member` varchar(25) NOT NULL,
  `col_share` varchar(15) NOT NULL,
  `col_event` varchar(100) NOT NULL,
  `col_location` varchar(100) NOT NULL,
  `col_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pictures_uploaded`
--
ALTER TABLE `tb_pictures_uploaded`
  ADD PRIMARY KEY (`col_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pictures_uploaded`
--
ALTER TABLE `tb_pictures_uploaded`
  MODIFY `col_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
