-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 01:40 AM
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
-- Table structure for table `tb_membersinrtf`
--

CREATE TABLE `tb_membersinrtf` (
  `col_id` int(11) NOT NULL,
  `col_fname` varchar(25) NOT NULL,
  `col_lname` varchar(25) NOT NULL,
  `col_rtfname` varchar(25) NOT NULL,
  `col_psword` varchar(100) NOT NULL,
  `col_yrphn` varchar(11) NOT NULL,
  `col_picture` varchar(100) NOT NULL,
  `col_dob` varchar(25) NOT NULL,
  `col_rtfdep` varchar(50) NOT NULL,
  `col_schdep` varchar(50) NOT NULL,
  `col_schaddress` varchar(50) NOT NULL,
  `col_homeaddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_membersinrtf`
--

INSERT INTO `tb_membersinrtf` (`col_id`, `col_fname`, `col_lname`, `col_rtfname`, `col_psword`, `col_yrphn`, `col_picture`, `col_dob`, `col_rtfdep`, `col_schdep`, `col_schaddress`, `col_homeaddress`) VALUES
(1, 'Michael', 'Oluwafemi', 'fmj', '937448bcacc5f3c9a223be5ba813eab2', '08100131944', 'ce60e428a4e0b74dad99e8fe16bf028b.jpg', '26 April', 'Light and Stage / Sound and Media', 'Computer Science', 'A28, Independence Hall, UI.', 'A28, Independence Hall, UI.'),
(2, 'Ayooluwa', 'Titus', 'pure titus', '767a0744ea655e60a72f38cd1a74e988', '08024114791', '71b43035c95fa5888184e1ecea306da2.jpg', '04/12', 'Sound and Media', 'Chemistry', 'A28, Independence Hall, UI.', 'A28, Independence Hall, UI.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rtfnames`
--

CREATE TABLE `tb_rtfnames` (
  `id` int(11) NOT NULL,
  `allrtfnames` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rtfnames`
--

INSERT INTO `tb_rtfnames` (`id`, `allrtfnames`) VALUES
(1, 'P. bash'),
(2, 'iya ibo'),
(3, 'isabella'),
(4, 'joyous joy'),
(5, 'femi o'),
(6, 'dammy awo'),
(7, 'bukky'),
(8, 'pure kenny'),
(9, 'pure titus'),
(10, 'mathology'),
(11, 'toy'),
(12, 'god''s ogonium'),
(13, 't sax'),
(14, 'moyo made'),
(15, 'keren calling keren'),
(16, 'debby lighter'),
(17, 'debby light'),
(18, 'cicero'),
(19, 'fmj'),
(20, 'baobami'),
(21, 'mary selfie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_membersinrtf`
--
ALTER TABLE `tb_membersinrtf`
  ADD PRIMARY KEY (`col_id`);

--
-- Indexes for table `tb_rtfnames`
--
ALTER TABLE `tb_rtfnames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_membersinrtf`
--
ALTER TABLE `tb_membersinrtf`
  MODIFY `col_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_rtfnames`
--
ALTER TABLE `tb_rtfnames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
